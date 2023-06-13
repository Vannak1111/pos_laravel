<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Auth\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->namespace("App\\Http\\Controllers\\Api\\")->group(function (){
    Route::prefix('product')-> controller(ProductController::class)->group(function (){
    Route::get('/','index');
    Route::post('/','store');
    Route::delete('/{id}','destroy');
    Route::post('/{id}','update');
});
});
 
Route::controller(AuthController::class)->group(function (){
   Route::post('login','login');
   Route::post('register','register');
});
