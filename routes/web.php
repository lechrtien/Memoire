<?php

use Illuminate\Support\Facades\Route;

// route pour la page d'accueil
Route::get('/', function () {
    return view('welcome');
});

// route pour la page index
Route::get('/index', function () {
    return view('layouts/index');
});

