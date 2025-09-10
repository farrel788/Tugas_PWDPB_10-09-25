<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('products', ProductController::class);
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');
Route::delete('/products', [ProductController::class, 'destroyAll'])->name('products.destroyAll');
Route::get('/products/search', [ProductController::class, 'search'])->name('products.search');