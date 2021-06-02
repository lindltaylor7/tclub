<?php

use Illuminate\suPPOrt\facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('index');

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

Route::get('/busqueda', function () {
    return view('busqueda');
});