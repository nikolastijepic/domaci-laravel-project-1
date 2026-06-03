<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/shop', function () {
    return view('shop');
});

Route::view('/contact', 'contact');

Route::view('/about', 'about');
