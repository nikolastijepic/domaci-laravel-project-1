<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomepageController::class, 'index']);

Route::get('/shop', [\App\Http\Controllers\ShopController::class, 'index']);

Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'index']);

Route::view('/about', 'about');

Route::get('/admin/all-contacts', [\App\Http\Controllers\ContactController::class, 'getAllContacts']);

Route::get('admin/delete-contact/{contact}', [\App\Http\Controllers\ContactController::class, 'deleteContact'])
    ->name('admin.delete-contact');

Route::get('/admin/add-products', [\App\Http\Controllers\ProductController::class, 'index']);

Route::post('/admin/add-products', [\App\Http\Controllers\ProductController::class, 'addProduct']);

Route::get('/admin/all-products', [\App\Http\Controllers\ProductController::class, 'getAllProducts']);

Route::get('/admin/delete-product/{product}', [\App\Http\Controllers\ProductController::class, 'deleteProduct'])
    ->name('admin.delete-product');

Route::post('/send-contact', [\App\Http\Controllers\ContactController::class, 'sendContact']);
