<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Business;
use App\Models\Category;
use App\Models\City;
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
        $ciudades = City::all();
        $empresas = Business::all()->take(6);
        $ciudades_top = City::all()->take(4);
        return view('welcome',compact('categorias','ciudades','empresas','ciudades_top'));
        
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
        $credentials = $request->only('email','password');
        if(Auth::attempt($credentials)){
            request()->session()->regenerate();
            return redirect()->route('user.dashboard',['id'=> Auth::id()]);
        }
        return redirect()->route('home');

    }
    public function logout(Request $request){
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect()->route('home');
    }

    public function mostrar(Request $request){
        $categorias = Category::all();
        $ciudades = City::all();
        if($request){
            $query=trim($request->get('search'));
            $empresas=Business::where('name', 'LIKE', '%'.$query.'%')->orderBy('id', 'asc')
                                                                     ->get();
            return view('empresas.index', compact('empresas', 'categorias', 'ciudades'), ['search'=>$query]);
        }
    }
}
