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
        $ciudades_top = City::all()->take(4);

        return view('ciudades.index', compact('ciudades','ciudades_top'));
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
        return redirect()->back();
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

        $cat = City::find($id)->categories()->where('city_id',$id)->first();

        return view('ciudades.show', compact('ciudades','unico','categorias','ciudad','cat'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
