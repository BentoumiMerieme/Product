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


Route::get('/product', [ProductController::class, 'index'])->name('product.index');
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/product', 'App\Http\Controllers\ProductController@store')->name('product.store');
Route::get('/product/{product}/edit', 'App\Http\Controllers\ProductController@edit')->name('product.edit');
Route::put('/product/{product}/update', 'App\Http\Controllers\ProductController@update')->name('product.update');
// Route::delete('/product/{product}/destroy', 'App\Http\Controllers\ProductController@destroy')->name('product.destroy');
Route::delete('/product/{product}/destroy', [ProductController::class, 'destroy'])->name('product.destroy');