<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SocialController;
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

Route::post('/user/register', [UserController::class,'store'])->name("user.register");
Route::get('/user/{id}/dashboard', [UserController::class,'show'])->name("user.dashboard")->middleware('auth');

Route::get('/business/register/{id}',[BusinessController::class,'create'])->name('bussines.create');
Route::post('/business/register',[BusinessController::class,'store'])->name('bussines.register');
Route::post('/business/register/address',[AddressController::class,'store'])->name('address.register');
Route::post('/business/register/social',[SocialController::class,'store'])->name('social.register');


Route::post('/category/register', [CategoryController::class,'store'])->name("category.register");

Route::post('login',[HomeController::class,'login'])->name('login');
Route::post('logout',[HomeController::class,'logout'])->name('logout');

