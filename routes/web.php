<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/2nd-route', function () {
    return view('bwelcome');
});
