<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CartItemsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\StreetController;
use App\Http\Controllers\ProvinceController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShopDeliveryFormController;
use App\Http\Controllers\ShopDetailsController;
use App\Models\Admin;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
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



         Route::get('/addCart/{pid}',[CartItemsController::class,'add'])->name('cart.addcart');
         Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function(){

             // Admin Route Group

            Route::get('/',function(){
            return view('admin');
        });
            // Admin/Products Route Group
            Route::group(['prefix' => '/products'], function() {
            Route::get('/',[ProductController::class,'product'])->name('product.index');
            Route::get('/create',[ProductController::class,'create'])->name('product.create');
            Route::post('/store',[ProductController::class,'store'])->name('product.store');
            Route::get('/edit/{id}',[ProductController::class,'edit'])->name('product.edit');
            Route::post('/update/{id}',[ProductController::class,'update'])->name('product.update');
            Route::get('/delete/{id}',[ProductController::class,'delete'])->name('product.delete');

        });

            // Admin/Categories Route Group
            Route::group(['prefix' =>'/category'], function() {
            Route::get('/',[CategoryController::class,'category'])->name('category.index');
            Route::get('/create',[CategoryController::class,'create'])->name('category.create');
            Route::post('/store',[CategoryController::class,'store'])->name('category.store');
            Route::get('/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
            Route::post('/update/{id}',[CategoryController::class,'update'])->name('category.update');
            Route::get('/delete/{id}',[CategoryController::class,'delete'])->name('category.delete');

        });
       // Admin/Devices Route Group
           Route::group(['prefix' =>'/device'], function() {
            Route::get('/',[ProfileController::class,'get'])->name('device.index');
        //    Route::get('/create',[CategoryController::class,'create'])->name('category.create');
        //    Route::post('/store',[CategoryController::class,'store'])->name('category.store');
        //    Route::get('/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
        //    Route::post('/update/{id}',[CategoryController::class,'update'])->name('category.update');
        //    Route::get('/delete/{id}',[CategoryController::class,'delete'])->name('category.delete');

});

            // Admin/User Route Group
            Route::group(['prefix' => '/user'], function() {
            Route::get('/',[UserController::class,'user'])->name('user.index');
            // Route::get('/create',[UserController::class,'create'])->name('user.create');
            // Route::post('/store',[UserController::class,'store'])->name('user.store');
            // Route::get('/edit',[UserController::class,'edit'])->name('user.edit');
            // Route::get('/update',[UserController::class,'update'])->name('user.update');
            // Route::get('/delete',[UserController::class,'delete'])->name('user.delete');

        });

            // Admin/Order Route Group
            Route::group(['prefix' => '/order'], function() {
            Route::get('/',[OrderController::class,'order'])->name('order.index');
            Route::get('/create',[OrderController::class,'create'])->name('order.create');
            Route::get('/store',[OrderController::class,'store'])->name('order.store');
            Route::get('/edit',[OrderController::class,'edit'])->name('order.edit');
            Route::get('/update',[OrderController::class,'update'])->name('order.update');
            Route::get('/delete',[OrderController::class,'delete'])->name('order.delete');

        });

            // Admin/Reports Route Group
            Route::group(['prefix' => '/reports'], function() {
            Route::get('/',[ReportController::class,'report'])->name('reports.index');
            Route::get('/create',[ReportController::class,'create'])->name('reports.create');
            Route::get('/store',[ReportController::class,'store'])->name('reports.store');
            Route::get('/edit',[ReportController::class,'edit'])->name('reports.edit');
            Route::get('/update',[ReportController::class,'update'])->name('reports.update');
            Route::get('/delete',[ReportController::class,'delete'])->name('reports.delete');
        });

            // Admin/Stock Route Group
            Route::group(['prefix' => '/stock'], function() {
            Route::get('/',[StockController::class,'stock'])->name('stock.index');
            Route::get('/create',[StockController::class,'create'])->name('stock.create');
            Route::get('/store',[StockController::class,'store'])->name('stock.store');
            Route::get('/edit',[StockController::class,'edit'])->name('stock.edit');
            Route::get('/update',[StockController::class,'update'])->name('stock.update');
            Route::get('/delete',[StockController::class,'delete'])->name('stock.delete');

        });

            // Admin/Role Route Group
            Route::group(['prefix' => '/role'], function() {
            Route::get('/',[RoleController::class,'role'])->name('role.index');
            Route::get('/create',[RoleController::class,'create'])->name('role.create');
            Route::post('/store',[RoleController::class,'store'])->name('role.store');
            Route::get('/edit/{id}',[RoleController::class,'edit'])->name('role.edit');
            Route::post('/update/{id}',[RoleController::class,'update'])->name('role.update');
            Route::get('/delete/{id}',[RoleController::class,'delete'])->name('role.delete');

        });
            // Admin/Location Route Group

             Route::group(['prefix' => '/location'], function() {
             Route::get('/',[LocationController::class,'loc'])->name('location.index');
             Route::get('/create',[LocationController::class,'create'])->name('location.create');
             Route::post('/store',[LocationController::class,'store'])->name('location.store');
             Route::get('/edit/{id}',[LocationController::class,'edit'])->name('location.edit');
             Route::post('/update/{id}',[LocationController::class,'update'])->name('location.update');
             Route::get('/delete/{id}',[LocationController::class,'delete'])->name('location.delete');
});
            // Admin/Province Route Group

             Route::group(['prefix' => '/province'], function() {
             Route::get('/',[ProvinceController::class,'prov'])->name('province.index');
             Route::get('/create',[ProvinceController::class,'create'])->name('province.create');
             Route::post('/store',[ProvinceController::class,'store'])->name('province.store');
             Route::get('/edit/{id}',[ProvinceController::class,'edit'])->name('province.edit');
             Route::post('/update/{id}',[ProvinceController::class,'update'])->name('province.update');
             Route::get('/delete/{id}',[ProvinceController::class,'delete'])->name('province.delete');
            });
            // Admin/City Route Group

            Route::group(['prefix' => '/city'], function() {
            Route::get('/',[CityController::class,'city'])->name('city.index');
            Route::get('/create',[CityController::class,'create'])->name('city.create');
            Route::post('/store',[CityController::class,'store'])->name('city.store');
            Route::get('/edit/{id}',[CityController::class,'edit'])->name('city.edit');
            Route::post('/update/{id}',[CityController::class,'update'])->name('city.update');
            Route::get('/delete/{id}',[CityController::class,'delete'])->name('city.delete');
            });

           // Admin/Street Route Group

            Route::group(['prefix' => '/street'], function() {
            Route::get('/',[StreetController::class,'street'])->name('street.index');
            Route::get('/create',[StreetController::class,'create'])->name('street.create');
            Route::post('/store',[StreetController::class,'store'])->name('street.store');
            Route::get('/edit/{id}',[StreetController::class,'edit'])->name('street.edit');
            Route::post('/update/{id}',[StreetController::class,'update'])->name('street.update');
            Route::get('/delete/{id}',[StreetController::class,'delete'])->name('street.delete');
    });

            // Admin/Feedback Route Group
            Route::group(['prefix' => '/feedback'], function() {
            Route::get('/',[FeedbackController::class,'feedback'])->name('feedback.index');
            Route::get('/create',[FeedbackController::class,'create']);
            Route::get('/edit',[FeedbackController::class,'edit']);

        });

    });





   Auth ::routes();

   //cartitems
   Route::get("cartdetails",[CartItemsController::class,'index']);
   Route::get("delete/{id}",[CartItemsController::class,'delete']);
   Route::get("increment/{id}",[CartItemsController::class,'increment']);
   Route::get("decrement/{id}",[CartItemsController::class,'decrement']);
 //    delivery Order
  Route::get('shopdeliveryform',[ShopDeliveryFormController::class,'index']);
   Route::post('/shopdeliveryform',[OrderController::class,'store'])->name('shop.store');


      Route::get('/role',[App\Http\Controllers\HomeController::class,'index' ])->name('home');
    //Route::group(['middleware'=>['auth','admin']],function(){});
   // Route::middleware([])->group(['prefix'=>'admin'])
    Route::get('protected', ['middleware' => ['auth', 'admin'], function() {
    return "this page requires that you be logged in and an Admin";
}]);
 // Route::post('logout',[App\Http\Controllers\Auth\LoginController::class,'logout'])->name('logout');


