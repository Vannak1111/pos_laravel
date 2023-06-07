<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
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
Route::get('user',[UserController::class,'index']);
Route::get('user/create',[UserController::class,'create']);
Route::post('user',[UserController::class,'store']);
Route::delete('user/{id}',[UserController::class,'destroy']);
Route::get('user/{id}/edit',[UserController::class,'edit']);
Route::put('user/{id}',[UserController::class,'update']);
// Product
Route::controller(ProductController::class)->group(function (){
    Route::get('product','index');
    Route::get('product/create', 'create');
    Route::post('product','store');
    Route::delete('product/{id}','destroy');
    Route::get('product/{id}/edit','edit');
    Route::put('product/{id}','update');
});

