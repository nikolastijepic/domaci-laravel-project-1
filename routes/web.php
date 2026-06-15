<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShopController;
use App\Http\Middleware\AdminCheckMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomepageController::class, 'index']);

Route::get('/shop', [ShopController::class, 'index']);

Route::get('/contact', [ContactController::class, 'index']);

Route::view('/about', 'about');

Route::post('/send-contact', [ContactController::class, 'sendContact'])
    ->name('contact.send');

Route::middleware(['auth', AdminCheckMiddleware::class])->prefix('admin')->group(function () {
    Route::get('/all-contacts', [ContactController::class, 'getAllContacts'])
        ->name('all.contacts');

    Route::get('delete-contact/{contact}', [ContactController::class, 'deleteContact'])
        ->name('admin.contact.delete');

    Route::get('/edit-contact/{contact}', [ContactController::class, 'getContact'])
        ->name('admin.contact.edit');

    Route::post('/edit-contact/{contact}', [ContactController::class, 'editContact'])
        ->name('admin.contact.update');


    Route::get('/add-products', [ProductController::class, 'index']);

    Route::post('/add-products', [ProductController::class, 'addProduct'])
        ->name('admin.product.add');

    Route::get('/all-products', [ProductController::class, 'getAllProducts'])
        ->name('admin.all.products');

    Route::get('/delete-product/{product}', [ProductController::class, 'deleteProduct'])
        ->name('admin.product.delete');

    Route::get('/edit-product/{product}', [ProductController::class, 'getProduct'])
        ->name('admin.product.edit');

    Route::post('/edit-product/{product}', [ProductController::class, 'editProduct'])
        ->name('admin.product.update');
});

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
