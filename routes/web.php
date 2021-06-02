<?php

use Illuminate\suPPOrt\facades\Route;

Route::get('/', function() {
    return "Hola!";
});

Route::get('/ciudad', function () {
    return view('ciudad');
});

Route::get('/landing', function () {
    return view('landing');
});

Route::get('/busqueda', function () {
    return view('busqueda');
});