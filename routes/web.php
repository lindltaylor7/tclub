<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OfferController;
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
Route::put('/user/{id}/update', [UserController::class,'update'])->name("user.update");
Route::get('/user/{id}/dashboard', [UserController::class,'show'])->name("user.dashboard")->middleware('auth');

Route::get('/business/register/{id}',[BusinessController::class,'create'])->name('bussines.create');
Route::post('/business/register',[BusinessController::class,'store'])->name('bussines.register');


Route::post('/business/{id}/register/address',[AddressController::class,'store'])->name('address.register');
Route::put('/address/{id}/update',[AddressController::class,'update'])->name('address.update');

Route::post('/business/{id}/register/social',[SocialController::class,'store'])->name('social.register');
Route::put('/social/{id}/update',[SocialController::class,'update'])->name('social.update');


Route::put('/business/update/{id}', [BusinessController::class,'update'])->name('bussines.update');
Route::delete('/business/{id}', [BusinessController::class,'destroy'])->name('bussines.delete');



Route::get('/business/register/offer/{id}',[OfferController::class,'create'])->name('offer.create');
Route::post('/business/register/offer',[OfferController::class,'store'])->name('offer.register');
Route::put('/offer/update/{id}',[OfferController::class,'update'])->name('offer.update');
Route::delete('/offer/{id}', [OfferController::class,'destroy'])->name("offer.delete");


Route::post('/ciudad/register',[CityController::class,'store'])->name('ciudad.register');
Route::put('/ciudad/update/{id}',[CityController::class,'update'])->name('ciudad.update');
Route::delete('/ciudad/{id}', [CityController::class,'destroy'])->name("ciudad.delete");

Route::post('/category/register', [CategoryController::class,'store'])->name("category.register");
Route::put('/category/{id}', [CategoryController::class,'update'])->name("category.update");
Route::delete('/category/{id}', [CategoryController::class,'destroy'])->name("category.delete");

Route::post('login',[HomeController::class,'login'])->name('login');
Route::post('logout',[HomeController::class,'logout'])->name('logout');
Route::post('empresas/busqueda', [HomeController::class, 'mostrar'])->name('mostrar');