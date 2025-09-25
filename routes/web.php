<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/hitungtarif', function () {

    return view('hitungtarif');
});