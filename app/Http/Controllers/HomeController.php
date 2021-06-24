<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Business;
use App\Models\Category;
use App\Models\City;
use App\Models\User;
use App\Models\Valoration;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Category::all();
        $users = User::all();
        $ciudades = City::all();
        $empresas = Business::all()->take(6);
        $ciudades_top = City::all()->take(4);

        return view('welcome', compact('categorias', 'ciudades', 'empresas', 'ciudades_top', 'users'));
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
        //
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

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            request()->session()->regenerate();
            return redirect()->route('user.dashboard', ['id' => Auth::id()]);
        }
        return redirect()->route('home')->with('info','Credenciales incorrectas');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect()->route('home');
    }

    public function mostrar(Request $request)
    {
        //return $request;
        if ($request->search && $request->rubro && $request->ciudad) {

            $query = trim($request->get('search'));
            $empresas = Business::whereHas('categories', function ($query) use($request){
                $query->where('categories.id',$request->get('rubro'));
            })
            ->whereHas('addresses', function ($query) use($request){
                $query->where('city_id',$request->get('ciudad'));
            })
            ->where('name','like','%'.$query.'%')
            ->get();

        }else if($request->search && $request->rubro){

            $query = trim($request->get('search'));
            $empresas = Business::whereHas('categories', function ($query) use($request){
                $query->where('categories.id',$request->get('rubro'));
            })
            ->where('name','like','%'.$query.'%')
            ->get();

        }else if($request->search && $request->ciudad){

            $query = trim($request->get('search'));
            $empresas = Business::whereHas('addresses', function ($query) use($request){
                $query->where('city_id',$request->get('ciudad'));
            })
            ->where('name','like','%'.$query.'%')
            ->get();

        }else{

            $query = trim($request->get('search'));
            $empresas = Business::where('name', 'LIKE', '%' . $query . '%')->orderBy('id', 'asc')
                ->get();
        }
            $categorias = Category::all();
            $ciudades = City::all();
            return view('empresas.index', compact('empresas', 'categorias', 'ciudades'), ['search' => $query]);

    }
}
