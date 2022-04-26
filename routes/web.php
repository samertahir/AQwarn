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



    // Admin Route Group
Route::group(['prefix' => 'admin'], function() {
    Route::get('/',function(){
        return view('admin');
    });



     // Admin/Categories Route Group
     Route::group(['prefix' =>'/category'], function() {
        Route::get('/',[CategoryController::class,'category']);
        Route::post('/create',[CategoryController::class,'create']);
        Route::get('/edit',[CategoryController::class,'edit']);

    });

    // Admin/Products Route Group
    Route::group(['prefix' => '/products'], function() {
        Route::get('/',[ProductController::class,'product']);
        Route::post('/create',[ProductController::class,'create']);
        Route::get('/edit',[ProductController::class,'edit']);

    });


    // Admin/User Route Group
    Route::group(['prefix' => '/User'], function() {
        Route::get('/',[UserController::class,'user']);
        Route::post('/create',[UserController::class,'create']);
        Route::get('/edit',[UserController::class,'edit']);

    });

    // Admin/Order Route Group
    Route::group(['prefix' => '/Order'], function() {
        Route::get('/',[OrderController::class,'order']);
        Route::post('/create',[OrderController::class,'create']);
        Route::get('/edit',[OrderController::class,'edit']);

    });

    // Admin/Reports Route Group
    Route::group(['prefix' => '/reports'], function() {
        Route::get('/',[ReportController::class,'report']);
        Route::post('/create',[ReportController::class,'create']);
        Route::get('/edit',[ReportController::class,'edit']);

    });

    // Admin/Stock Route Group
    Route::group(['prefix' => '/stock'], function() {
        Route::get('/',[StockController::class,'stock']);
        Route::post('/create',[StockController::class,'create']);
        Route::get('/edit',[StockController::class,'edit']);

    });

    // Admin/Role Route Group
    Route::group(['prefix' => '/role'], function() {
        Route::get('/',[RoleController::class,'role']);
        Route::post('/create',[RoleController::class,'create']);
        Route::get('/edit',[RoleController::class,'edit']);

    });

    // Admin/Feedback Route Group
    Route::group(['prefix' => '/feedback'], function() {
        Route::get('/',[FeedbackController::class,'feedback']);
        Route::post('/create',[FeedbackController::class,'create']);
        Route::get('/edit',[FeedbackController::class,'edit']);

    });


});
