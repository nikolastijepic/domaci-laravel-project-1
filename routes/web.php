<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('/shop', 'shop');

Route::view('/contact', 'contact');

Route::view('/about', 'about');
