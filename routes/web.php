<?php

use Illuminate\Support\Facades\Route;

Route::get('/3rd-route', function () {
    return view('welcome');
});
