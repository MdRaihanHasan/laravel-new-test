<?php

use Illuminate\Support\Facades\Route;

Route::get('/2nd-route', function () {
    return view('welcome');
});
