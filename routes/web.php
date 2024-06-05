<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/sanjeev', function () {
    return view('sanjeev');
});
