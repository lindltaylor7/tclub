<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Business;
use App\Models\Category;
use App\Models\City;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ciudades = City::all();
        $categorias = Category::all();
        $ciudades_top = City::all()->take(4);

        return view('ciudades.index', compact('ciudades','ciudades_top','categorias'));
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
            'name' => 'required'
        ]);
        $request->merge([
            'status' => 1
        ]);

        $cities = City::create($request->except(['fileCity']));
        if ($request->file('fileCity')){
            $url = Storage::put('ciudades', $request->file('fileCity'));
            $cities->images()->create([
                'url' => $url
            ]);
        }
        return redirect()->back()->with('crear_ciudad','Registro de Ciudad completa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ciudades = City::all();
        $unico = City::find($id);
        $categorias = Category::all();
        $ciudad = City::find($id);
        $empresas = City::find($id)->categories()->where('city_id',$id)->get();

        $cat = City::find($id)->categories()->where('city_id',$id)->get();
        
        return view('ciudades.show', compact('ciudades','unico','categorias','ciudad','cat','empresas'));

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
        $request->validate([
            'name' => 'required'
        ]);

        $ciudad = City::where('id',$id)->first();
        $ciudad->update($request->except(['_token','_method','fileCityUpdate']));

        if ($request->file('fileCityUpdate')){
            $ciudad->images()->delete();
            $url = Storage::put('ciudades', $request->file('fileCityUpdate'));
            $ciudad->images()->create([
                'url' => $url
            ]);
        }

        return redirect()->back()->with('actualizar_ciudad','Actualizaci??n completa');
    }

    public function inactive($id)
    {
        $ciudad = City::find($id);
        $ciudad->update(['status' => 0]);
        $ciudad->save();


        return redirect()->back()->with('Desactivar_ciudad','Actualizaci??n completa');
    }

    public function active($id)
    {
        $ciudad = City::find($id);
        $ciudad->update(['status' => 1]);
        $ciudad->save();


        return redirect()->back()->with('Activar_ciudad','Actualizaci??n completa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ciudad = City::where('id',$id)->first();
        $ciudad->images()->delete();
        $ciudad->delete();

        return redirect()->back()->with('borrar_ciudad','Borrado completo');
    }

    
}
