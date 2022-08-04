<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;
use App\Http\Controllers\AuthSuperAdmin;
use App\Http\Controllers\superAdmin\Dashboard;
use App\Http\Controllers\superAdmin\Progress;

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
    });

});
Route::get('/home', [Admin::class, 'index']);

