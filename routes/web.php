<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomepageController::class, 'index']);

Route::get('/shop', [\App\Http\Controllers\ShopController::class, 'index']);

Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'index']);

Route::view('/about', 'about');

Route::get('/admin/all-contacts', [\App\Http\Controllers\ContactController::class, 'getAllContacts']);
