<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            'start_date' => 'required',
            'end_date' => 'required'
        ]);
        $request->merge([
            'status' => 1
        ]);

        $offers = Offer::create($request->except(['fileOffer']));

        if ($request->file('fileOffer')){
            $url = Storage::put('ofertas', $request->file('fileOffer'));
            $offers->images()->create([
                'url' => $url
            ]);
        }
        
        return redirect()->route('user.dashboard',['id'=>$offers->business->user_id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $request->validate([
            'name' => 'required',
            'start_date' => 'required',
            'end_date' => 'required'
        ]);

        $oferta = Offer::where('id',$id)->first();
        $oferta->update($request->except(['_token','_method','fileOfferUpdate']));

        if ($request->file('fileOfferUpdate')){
            $oferta->images()->delete();
            $url = Storage::put('ofertas', $request->file('fileOfferUpdate'));
            $oferta->images()->create([
                'url' => $url
            ]);
        }

        return redirect()->back()->with('actualizar_ciudad','Actualización completa');
    }

    public function inactive($id)
    {
        $oferta = Offer::find($id);
        $oferta->update(['status' => 0]);
        $oferta->save();

        return redirect()->back()->with('desactivar_oferta','Actualización completa');
    }

    public function active($id)
    {
        $oferta = Offer::find($id);
        $oferta->update(['status' => 1]);
        $oferta->save();

        return redirect()->back()->with('activar_oferta','Actualización completa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $oferta = Offer::where('id',$id)->first();
        $oferta->images()->delete();
        $oferta->delete();

        return redirect()->back()->with('borrar_oferta','Borrado completo');
    }
}
