<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Models\User;
use App\Models\Category;
use App\Models\City;
use Illuminate\Http\Request;

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

        $bussines = Business::create($request->all());
        $bussines ->categories()->attach($request->get('category_id'));
        return redirect()->route('user.dashboard',['id'=>$bussines->user_id]);

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
        $cat = Business::find($id)->categories()->where('business_id',$id)->first();

        return view('empresas.show',compact('unico','categorias','empresas','cat'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
