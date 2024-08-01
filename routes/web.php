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
    return view('welcome');
});
route::get('categories', [\App\Http\Controllers\CategoryController::class,'index']);
route::get('categories/create', [\App\Http\Controllers\CategoryController::class,'create']);
route::post('categories/create', [\App\Http\Controllers\CategoryController::class,'store']);
route::get('categories/{id}/edit',[\App\Http\Controllers\CategoryController::class,'edit']);
route::put('categories/{id}/edit',[\App\Http\Controllers\CategoryController::class,'update']);
route::get('categories/{id}/delete',[\App\Http\Controllers\CategoryController::class,'destroy']);

route::get('products',[\App\Http\Controllers\ProductController::class,'index']);
route::get('products/create',[\App\Http\Controllers\ProductController::class,'create']);
route::post('products/create',[\App\Http\Controllers\ProductController::class,'store']);
route::get('products/{id}/edit',[\App\Http\Controllers\ProductController::class,'edit']);
route::put('products/{id}/edit',[\App\Http\Controllers\ProductController::class,'update']);
route::get('products/{id}/delete',[\App\Http\Controllers\ProductController::class,'destroy']);