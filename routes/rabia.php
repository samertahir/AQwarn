<?php

use App\Http\Controllers\UserProductController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesAboutUsController;
use App\Http\Controllers\PagesErrorController;
use App\Http\Controllers\PagesOurfaqsController;
use App\Http\Controllers\PagesOurSErvicesController;
use App\Http\Controllers\ShopDeliveryFormController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShopDetailsController;
use App\Http\Controllers\OurShopController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\CounterController;
use App\Http\Controllers\FilterationController;
use App\Http\Controllers\Service1Controller;
use App\Http\Controllers\Service2Controller;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\OurMissionController;
use App\Http\Controllers\InformationController;
use Illuminate\Support\Facades\Route;

Route::get("blogs",[UserProductController::class,'index']);
Route::get("home",[HomeController::class,'index']);
Route::get("contact",[ContactController::class,'index']);
Route::get("aboutus",[PagesAboutUsController::class,'index']);
Route::get("error",[PagesErrorController::class,'index']);
Route::get("ourservices",[PagesOurSErvicesController::class,'index']);
Route::get("ourfaqs",[PagesOurfaqsController::class,'index']);
Route::get("shopdeliveryform",[ShopDeliveryFormController::class,'index']);
Route::get("profile",[ProfileController::class,'index']);
Route::get("shopdetails",[ShopDetailsController::class,'index']);
Route::get("ourshop",[OurShopController::class,'index']);
Route::get("feature layout",[FeatureController::class,'index']);
Route::get("counter",[CounterController::class,'index']);
Route::get("video",[VideoController::class,'index']);
Route::get("service 02",[Service2Controller::class,'index']);
Route::get("service 01",[Service1Controller::class,'index']);
Route::get("information layout",[InformationController::class,'index']);
Route::get("our mission layout",[OurMissionController::class,'index']);
Route::get("filteration",[FilterationController::class,'index']);

