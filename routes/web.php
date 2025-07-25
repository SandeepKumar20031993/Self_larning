<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', [ProductController::class, 'index']);

// Products CRUD Routes
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/{id?}', [ProductController::class, 'edit'])->name('products.edit');
Route::get('/products/delete/{id?}', [ProductController::class, 'delete'])->name('products.delete');
Route::put('/products/{id?}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/{id?}', [ProductController::class, 'destroy'])->name('products.destroy');
