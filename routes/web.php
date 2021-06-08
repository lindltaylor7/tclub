<?php

use App\Http\Controllers\BusinessController;
use App\Http\Controllers\HomeController;
use Illuminate\suPPOrt\facades\Route;

Route::get('/',[HomeController::class,'index'] )->name("home");

Route::post('/register',[BusinessController::class,'store'] )->name("business.register");


Route::get('/registro_usuario', function () {
    return view('registro_usuario');
})->name("registro_usiario");


Route::get('/rubro_unico', function () {
    return view('rubro_unico');
})->name("rubrounico");

Route::get('/busqueda_avanzada', function () {
    return view('busqueda_avanzada');
})->name("busqueda_avanzada");

Route::get('/ciudad', function () {
    return view('ciudad');
});

Route::get('/landing', function () {
    return view('landing');
});

Route::get('/ciudades', function () {
    return view('ciudades');
})->name('ciudades');

Route::get('/rubros', function () {
    return view('rubros');
})->name('rubros');


