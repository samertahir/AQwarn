<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OurShopController extends Controller
{
    public function index()
    {
        return view("navbar.SHOP.ourshop");
    }
}
