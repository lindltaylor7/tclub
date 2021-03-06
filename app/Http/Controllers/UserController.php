<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Models\Category;
use App\Models\City;
use App\Models\Offer;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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


        $credentials = $users->only('email','password');
        Auth::login($users);
        return redirect()->route('user.dashboard',['id'=> Auth::id()]);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categorias = Category::paginate(5);
        $cities = City::all();
        $ofertas = Offer::all();
        $users = User::find($id);
        $user = User::find($id);
        $businesses = User::find($id)->businesses()->where('user_id', $id)->get();
        $empresas = User::find($id)->businesses();
        $offers = Offer::all();
        $negocios = Business::all();
        $usuarios = User::all();
        return view('usuarios.show', compact('users', 'user', 'businesses', 'categorias', 'cities', 'empresas','offers','ofertas','negocios','usuarios'));
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

        $user= User::where('id',$id)->first();
        $user->update($request->except(['_token','_method','fileUserUpdate']));

        if ($request->file('fileUserUpdate')) {
            $user->images()->delete();
            $url = Storage::put('users', $request->file('fileUserUpdate'));
            $user->images()->create([
                'url' => $url
            ]);
        }

        return redirect()->back()->with('ActualizarUsuario','Datos de usuario actualizada');
    }

    public function inactive($id)
    {
        $usuario = User::find($id);
        $usuario->update(['status' => 0]);
        $usuario->save();

        return redirect()->back()->with('DesactivarUsuario','Actualizaci??n completa');
    }

    public function active($id)
    {
        $usuario = User::find($id);
        $usuario->update(['status' => 1]);
        $usuario->save();

        return redirect()->back()->with('ActivarUsuario','Actualizaci??n completa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = User::where('id',$id)->first();
        $usuario->images()->delete();
        $usuario->delete();

        return redirect()->back()->with('borrar_usuario','Borrado completo');
    }



    public function updateAdmin(Request $request, $id)
    {

        $user= User::where('id',$id)->first();
        $user->update($request->except(['_token','_method','fileUserUpdate']));

        if ($request->file('fileUserUpdate')) {
            $user->images()->delete();
            $url = Storage::put('users', $request->file('fileUserUpdate'));
            $user->images()->create([
                'url' => $url
            ]);
        }

        return redirect()->back()->with('ActualizarUsuario_admin','Datos de usuario actualizada');
    }
}
