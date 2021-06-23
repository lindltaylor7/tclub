<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Models\Category;
use App\Models\Social;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Category::all();
        $empresas = Business::all();
        $socials = Social::all();


        return view('rubros.index', compact('categorias', 'empresas'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            
        ]);
        $request->merge([
            'status' => 1,
        ]);
        $categories = Category::create($request->except(['fileCategory']));
        if ($request->file('fileCategory')) {
            $url = Storage::put('rubros', $request->file('fileCategory'));
            $categories->images()->create([
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

        $categorias = Category::all();
        $unico = Category::find($id);
        $empresas = Category::find($id)->businesses()->where('category_id',$id)->get();

        return view('rubros.show', compact('categorias','unico','empresas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoria = Category::find($id);

        return $categoria;
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
        $categoria= Category::where('id',$id)->first();
        $categoria->update($request->except(['_token','_method','fileCategoryUpdate']));

        if ($request->file('fileCategoryUpdate')) {
            $categoria->images()->delete();
            $url = Storage::put('rubros', $request->file('fileCategoryUpdate'));
            $categoria->images()->create([
                'url' => $url
            ]);
        }
        return redirect()->back()->with('ActualizacionC','Rubro actualizado');
    }

    public function inactive($id)
    {
        $categoria = Category::find($id);
        $categoria->update(['status' => 0]);
        $categoria->save();

        return redirect()->back()->with('desactivar_categoria','Actualización completa');
    }

    public function active($id)
    {
        $categoria = Category::find($id);
        $categoria->update(['status' => 1]);
        $categoria->save();

        return redirect()->back()->with('activar_categoria','Actualización completa');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categoria = Category::where('id',$id)->first();
        $categoria ->images()->delete();
        $categoria->delete();
        return redirect()->back()->with('EliminarC','Rubro eliminado');
    }
}
