<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// User
Route::prefix('user')->controller(UserController::class)->group(function(){
 Route::get('/','index');
    Route::get('/create', 'create');
    Route::post('/','store');
    Route::delete('/{id}','destroy');
    Route::get('/{id}/edit','edit');
    Route::put('/{id}','update');
});
// Product
Route::prefix('product')->controller(ProductController::class)->group(function (){
    Route::get('/','index');
    Route::get('/create', 'create');
    Route::post('/','store');
    Route::delete('/{id}','destroy');
    Route::get('/{id}/edit','edit');
    Route::put('/{id}','update');
});

// Supplier
Route::prefix('supplier')->controller(SupplierController::class)->group(function(){
    Route::get('/','index');
    Route::get('/create','create');
    Route::post('/','store');
    Route::delete('/{id}','destory');
    Route::get('/{id}/edit','edit');
    Route::put('/{id}','update');
});
