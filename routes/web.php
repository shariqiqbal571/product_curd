<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('products', [ProductController::class, 'index'])->name('products.index');
Route::get('products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('products', [ProductController::class, 'store'])->name('products.store');
Route::get('products/{tag}', [ProductController::class, 'show'])->name('products.show');
Route::get('product/{id}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::put('products/{id}', [ProductController::class, 'update'])->name('products.update');
Route::delete('product/{id}', [ProductController::class, 'destroy'])->name('product.destroy');


Route::put('product/update-status', [ProductController::class, 'updateStatus'])->name('product.updateStatus');




