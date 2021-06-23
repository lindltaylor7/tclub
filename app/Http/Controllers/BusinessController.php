<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Models\User;
use App\Models\Category;
use App\Models\City;
use App\Models\Image;
use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BusinessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $businesses = Business::paginate(6);
        $empresas = Business::all();
        $categorias = Category::all();
        $ciudades = City::all();

        
        return view('empresas.index',compact('empresas','categorias','ciudades','businesses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'name' => 'required',
            'phone' => 'required'
        ]);
        $request->merge([
            'status' => 1
        ]);

        $businesses = Business::create($request->except(['fileBusiness']));

        if ($request->file('fileBusiness')){
            $url = Storage::put('empresas', $request->file('fileBusiness'));
            $businesses->images()->create([
                'url' => $url
            ]);
        }
        
        $businesses ->categories()->attach($request->get('category_id'));
        $businesses ->social()->create(['facebook_url'=>null , 'youtube_url'=>null, 'instagram_url'=> null]);
        


        return redirect()->route('user.dashboard',['id'=>$businesses->user_id]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $unico = Business::find($id);
        $categorias = Category::all();
        $empresas = Business::all();
        $ofertas = Offer::all()->where('business_id',$id);
        $offers = Offer::all()->where('business_id',$id);
        $cat = Business::find($id)->categories()->where('business_id',$id)->first();

        return view('empresas.show',compact('unico','categorias','empresas','ofertas','cat','offers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $business = Business::where('id',$id)->first();
        $business->update($request->except(['_token','_method','fileBusinessUpdate']));
        
        if ($request->file('fileBusinessUpdate')){
            $business->images()->delete();
            $url = Storage::put('empresas', $request->file('fileBusinessUpdate'));
            $business->images()->create([
                'url' => $url
            ]);
        }

        return redirect()->back()->with('actualizar_empresa','Actualización completa');
    }

    public function inactive($id)
    {
        $empresa = Business::find($id);
        $empresa->update(['status' => 0]);
        $empresa->save();

        return redirect()->back()->with('desactivar_empresa','Actualización completa');
    }

    public function active($id)
    {
        $empresa = Business::find($id);
        $empresa->update(['status' => 1]);
        $empresa->save();

        return redirect()->back()->with('activar_empresa','Actualización completa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $empresa = Business::where('id',$id)->first();
        $empresa->images()->delete();
        $empresa->delete();

        return redirect()->back()->with('borrar_empresa','Borrado completo');
    }
}
