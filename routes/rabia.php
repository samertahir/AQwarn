<?php

use App\Http\Controllers\UserProductController;
use Illuminate\Support\Facades\Route;

Route::get("blogs",[UserProductController::class,'index']);