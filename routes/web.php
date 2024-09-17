<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('/menu/show', function () {
    return view('menu/show');
});

Route::get('/menu/create', function () {
    return view('menu/update');
});

Route::get('/menu/update', function () {
    return view('menu/update');
});