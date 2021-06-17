<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\UserController;
use App\Models\Address;
use Illuminate\suPPOrt\facades\Route;



Route::get('/', [HomeController::class,'index'])->name("home");


Route::post('/user/register', [UserController::class,'store'])->name("user.register");
Route::get('/user/{id}/dashboard', [UserController::class,'show'])->name("user.dashboard");




Route::get('/rubros', [CategoryController::class,'index'])->name("todosrubros");
Route::get('/rubros/{id}', [CategoryController::class,'show'])->name("rubrounico");


Route::get('/empresas', [BusinessController::class,'index'])->name("todasempresas");
Route::get('/empresas/{id}', [BusinessController::class,'show'])->name("empresunica");

Route::get('/business/register/{id}',[BusinessController::class,'create'])->name('bussines.create');
Route::post('/business/register',[BusinessController::class,'store'])->name('bussines.register');
Route::post('/business/register/address',[AddressController::class,'store'])->name('address.register');
Route::post('/business/register/social',[SocialController::class,'store'])->name('social.register');


Route::get('/ciudad', function () {
    return view('ciudad');
});

Route::get('/landing', function () {
    return view('landing');
});

Route::get('/ciudades', function () {
    return view('ciudades');
})->name('ciudades');


