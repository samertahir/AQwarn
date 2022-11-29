<?php

namespace App\Http\Controllers;

use App\Models\CartItems;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products=Product::get();
        $cartitems=CartItems::get();
        return view('navbar.HOME.index',compact('products','cartitems'));

    }

}

