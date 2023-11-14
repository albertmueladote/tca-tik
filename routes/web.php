<?php

use Illuminate\Support\Facades\Route;

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
    return redirect('/menu');
});
Route::get('/menu', [App\Http\Controllers\TcaTikController::class, 'menu']);

Route::get('/products', [App\Http\Controllers\ProductController::class, 'list']);
Route::get('/product/{id_product}', [App\Http\Controllers\ProductController::class, 'detail']);
Route::get('/product/remove/{id_product}', [App\Http\Controllers\ProductController::class, 'remove']);
Route::put('/product/update/{id_product}', [App\Http\Controllers\ProductController::class, 'update']);
Route::get('/product', [App\Http\Controllers\ProductController::class, 'new']);
Route::put('/product/create', [App\Http\Controllers\ProductController::class, 'create']);

Route::get('/categories', [App\Http\Controllers\CategoryController::class, 'list']);
Route::get('/category/{id_category}', [App\Http\Controllers\CategoryController::class, 'detail']);
Route::get('/category/remove/{id_category}', [App\Http\Controllers\CategoryController::class, 'remove']);
Route::put('/category/update/{id_category}', [App\Http\Controllers\CategoryController::class, 'update']);
Route::get('/category', [App\Http\Controllers\CategoryController::class, 'new']);
Route::put('/category/create', [App\Http\Controllers\CategoryController::class, 'create']);

Route::get('/stores', [App\Http\Controllers\StoreController::class, 'list']);
Route::get('/store/{id_store}', [App\Http\Controllers\StoreController::class, 'detail']);
Route::get('/store/remove/{id_store}', [App\Http\Controllers\StoreController::class, 'remove']);
Route::put('/store/update/{id_store}', [App\Http\Controllers\StoreController::class, 'update']);
Route::get('/store', [App\Http\Controllers\StoreController::class, 'new']);
Route::put('/store/create', [App\Http\Controllers\StoreController::class, 'create']);
