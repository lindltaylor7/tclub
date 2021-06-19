<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Models\Category;
use App\Models\City;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
            'phone' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $request->merge([
            'type' => 'Free',
            'status' => 1,
            'password'=>bcrypt($request->get('password'))
        ]);

        $users = User::create($request->except(['file']));
        if ($request->file('file')) {
            $url = Storage::put('users', $request->file('file'));
            $users->images()->create([
                'url' => $url
            ]);
        }

        return redirect()->route('user.dashboard', ['id' => $users->id]);
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
        $cities = City::all();
        $users = User::find($id);
        $user = User::find($id);
        $businesses = User::find($id)->businesses()->where('user_id', $id)->get();
        $empresas = User::find($id)->businesses();
        return view('usuarios.show', compact('users', 'user', 'businesses', 'categorias', 'cities', 'empresas'));
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
