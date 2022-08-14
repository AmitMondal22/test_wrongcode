<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\client\ClientAuth;
use App\Http\Controllers\client\AddProduct;
use App\Http\Controllers\public\Assete;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register',[ClientAuth::class,'register'])->name('register');

//product
Route::post('/list-product',[AddProduct::class,'add_product']);

//catagory
Route::get('/catagory-list', [Assete::class, 'ListCatagory'])->name('catagory-list');
