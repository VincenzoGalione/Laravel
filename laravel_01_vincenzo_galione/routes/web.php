<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pagina-1', function () {
    return view('primaPagina');
});

Route::get('/pagina-2', function () {
    return view('secondaPagina');
});
