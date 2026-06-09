<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomepageController::class, 'index']);

Route::get('/shop', [\App\Http\Controllers\ShopController::class, 'index']);

Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'index']);

Route::view('/about', 'about');

Route::get('/admin/all-contacts', [\App\Http\Controllers\ContactController::class, 'getAllContacts']);

Route::post('/send-contact', [\App\Http\Controllers\ContactController::class, 'sendContact']);

Route::get('/admin/add-products', [\App\Http\Controllers\ProductController::class, 'create']);

Route::post('/admin/add-products', [\App\Http\Controllers\ProductController::class, 'addProduct']);

Route::get('/admin/products', [\App\Http\Controllers\ProductController::class, 'index']);
