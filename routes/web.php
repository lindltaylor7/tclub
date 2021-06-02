<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name("home");

Route::get('/rubro_unico', function () {
    return view('rubro_unico');
})->name("rubrounico");

Route::get('/busqueda_avanzada', function () {
    return view('busqueda_avanzada');
})->name("busqueda_avanzada");

Route::get('/ciudades', function () {
    return view('ciudades');
})->name('ciudades');

Route::get('/rubros', function () {
    return view('rubros');
})->name('rubros');

