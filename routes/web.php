<?php

use App\Http\Controllers\BusinessController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CityController;
use Illuminate\suPPOrt\facades\Route;

Route::get('/', [HomeController::class,'index'])->name("home");

Route::get('/ciudades', [CityController::class,'index'])->name('ciudad.index');
Route::get('/ciudades/{id}', [CityController::class,'show'])->name('ciudad.show');

Route::get('/rubros', [CategoryController::class,'index'])->name('rubro.index');
Route::get('/rubros/{id}', [CategoryController::class,'show'])->name('rubro.show');

Route::get('/empresas', [BusinessController::class,'index'])->name('empresa.index');
Route::get('/empresas/{id}', [BusinessController::class,'show'])->name('empresa.show');

/*
Route::get('/', [HomeController::class,'index'])->name("home");

Route::post('/register',[BusinessController::class,'store'])->name('bussines.register');

Route::get('/new-user/{id}', [UserController::class,'create'])->name("user.create");
Route::post('/new-user/store', [UserController::class,'store'])->name("user.store");

Route::get('/ciudades', [CityController::class,'index'])->name('ciudad.index');
Route::get('/ciudades/{id}', [CityController::class,'show'])->name('ciudad.show');

Route::get('/empresa/{id}', [BusinessController::class,'show'])->name('empresa.show');

Route::get('rubrounico', function(){
    return view('rubrounico');
})->name('rubrounico');

Route::get('busqueda_avanzada', function(){
    return view('busqueda_avanzada');
})->name('busqueda_avanzada');

Route::get('rubros', function(){
    return view('rubros');
})->name('rubros');
*/