<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

       Route::get('/', function () {
       return view('welcome');
});

       Route::get('/', function () {
       return view('admin');

});

        // Admin Route Group
        Route::group(['prefix' => 'admin'], function() {
        Route::get('/',function(){
        return view('admin');
    });



       // Admin/Products Route Group
        Route::group(['prefix' => '/products'], function() {
        Route::get('/',[ProductController::class,'product'])->name('product.index');
        Route::get('/create',[ProductController::class,'create'])->name('product.create');
        Route::post('/store',[ProductController::class,'store'])->name('product.store');
        Route::get('/edit',[ProductController::class,'edit'])->name('product.edit');
        Route::post('/update',[ProductController::class,'update'])->name('product.update');
        Route::post('/delete',[ProductController::class,'delete'])->name('product.delete');

    });

        // Admin/Categories Route Group
        Route::group(['prefix' =>'/category'], function() {
        Route::get('/',[CategoryController::class,'category'])->name('category.index');
        Route::get('/create',[CategoryController::class,'create'])->name('category.create');
        Route::post('/store',[CategoryController::class,'store'])->name('category.store');
        Route::get('/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
        Route::get('/update/{id}',[CategoryController::class,'update'])->name('category.update');
        Route::get('/delete/{id}',[CategoryController::class,'delete'])->name('category.delete');

    });


        // Admin/User Route Group
         Route::group(['prefix' => '/User'], function() {
        Route::get('/',[UserController::class,'user'])->name('user.index');
        Route::get('/create',[UserController::class,'create'])->name('user.create');
        Route::get('/edit',[UserController::class,'edit']);

    });

        // Admin/Order Route Group
        Route::group(['prefix' => '/Order'], function() {
        Route::get('/',[OrderController::class,'order'])->name('user.create');
        Route::get('/create',[OrderController::class,'create'])->name('user.create');
        Route::get('/edit',[OrderController::class,'edit'])->name('user.edit');

    });

        // Admin/Reports Route Group
        Route::group(['prefix' => '/reports'], function() {
        Route::get('/',[ReportController::class,'report']);
        Route::get('/create',[ReportController::class,'create']);
        Route::get('/edit',[ReportController::class,'edit']);

    });

        // Admin/Stock Route Group
        Route::group(['prefix' => '/stock'], function() {
        Route::get('/',[StockController::class,'stock']);
        Route::get('/create',[StockController::class,'create']);
        Route::get('/edit',[StockController::class,'edit']);

    });

        // Admin/Role Route Group
        Route::group(['prefix' => '/role'], function() {
        Route::get('/',[RoleController::class,'role']);
        Route::get('/create',[RoleController::class,'create']);
        Route::get('/edit',[RoleController::class,'edit']);

    });

        // Admin/Feedback Route Group
        Route::group(['prefix' => '/feedback'], function() {
        Route::get('/',[FeedbackController::class,'feedback']);
        Route::get('/create',[FeedbackController::class,'create']);
        Route::get('/edit',[FeedbackController::class,'edit']);

    });


});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
