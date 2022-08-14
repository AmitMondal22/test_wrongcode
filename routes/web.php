<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;
use App\Http\Controllers\AuthSuperAdmin;
use App\Http\Controllers\superAdmin\Dashboard;
use App\Http\Controllers\superAdmin\Progress;

use App\Http\Controllers\superAdmin\Assets;

// Route::get('/', function () {
//     return view('weome');
// });


//super admin login page
Route::prefix('s-admin')->group(function () {


    // Route::get('login',[AuthSuperAdmin]);

    Route::match(['get', 'post'], '/register',[AuthSuperAdmin::class,'register'])->name('register');
    Route::match(['get', 'post'], '/login',[AuthSuperAdmin::class,'login'])->name('login');


    //super Admin auth
    Route::middleware(["middleware"=>"superAdmin"])->group(function(){
        Route::match(['get', 'post'], '/logout',[AuthSuperAdmin::class,'logout'])->name('logout');

        //dashboard
        Route::get('/', [Dashboard::class, 'index'])->name('home');

        //progress
        Route::match(['get', 'post'],'/progress-add', [Progress::class, 'index'])->name('progress-add');
        Route::get('/progress', [Progress::class, 'progress'])->name('progress');

        //catagory
        Route::match(['get', 'post'],'/catagory-add', [Assets::class, 'AddCatagory'])->name('catagory-add');
        Route::get('/catagory-list', [Assets::class, 'ListCatagory'])->name('catagory-list');
    });

});
Route::get('/home', [Admin::class, 'index']);

