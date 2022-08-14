<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\client\ClientAuth;
use App\Http\Controllers\client\AddProduct;
use App\Http\Controllers\public\Assete;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register',[ClientAuth::class,'register'])->name('register');


// ================================================================================================
//product
Route::post('/add-product',[AddProduct::class,'add_product']);
// get product
Route::get('/list_product',[AddProduct::class,'list_product']);
//product info
Route::get('/product-info/{id}',[AddProduct::class,'product_info']);
//edite post
Route::post('/edit-product',[AddProduct::class,'edit_product']);
// ================================================================================================

//catagory
Route::get('/catagory-list', [Assete::class, 'ListCatagory'])->name('catagory-list');
