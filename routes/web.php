<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/about-us', function () {
    return view('aboutus');
});
Route::get('/review', function () {
    return view('review');
});
