<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomepageController::class, 'index']);

Route::get('/shop', [\App\Http\Controllers\ShopController::class, 'index']);

Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'index']);

Route::view('/about', 'about');


Route::post('/send-contact', [\App\Http\Controllers\ContactController::class, 'sendContact'])
    ->name('contact.send');

Route::get('/admin/all-contacts', [\App\Http\Controllers\ContactController::class, 'getAllContacts'])
    ->name('all.contacts');

Route::get('admin/delete-contact/{contact}', [\App\Http\Controllers\ContactController::class, 'deleteContact'])
    ->name('admin.contact.delete');

Route::get('/admin/edit-contact/{contact}', [\App\Http\Controllers\ContactController::class, 'getContact'])
    ->name('admin.contact.edit');

Route::post('/admin/edit-contact/{contact}', [\App\Http\Controllers\ContactController::class, 'editContact'])
    ->name('admin.contact.update');


Route::get('/admin/add-products', [\App\Http\Controllers\ProductController::class, 'index']);

Route::post('/admin/add-products', [\App\Http\Controllers\ProductController::class, 'addProduct'])
    ->name('admin.product.add');

Route::get('/admin/all-products', [\App\Http\Controllers\ProductController::class, 'getAllProducts'])
    ->name('admin.all.products');

Route::get('/admin/delete-product/{product}', [\App\Http\Controllers\ProductController::class, 'deleteProduct'])
    ->name('admin.product.delete');

Route::get('/admin/edit-product/{product}', [\App\Http\Controllers\ProductController::class, 'getProduct'])
    ->name('admin.product.edit');

Route::post('/admin/edit-product/{product}', [\App\Http\Controllers\ProductController::class, 'editProduct'])
    ->name('admin.product.update');

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
