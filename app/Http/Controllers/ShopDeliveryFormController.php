<?php

namespace App\Http\Controllers;
use App\Models\CartItems;

use Illuminate\Http\Request;

class ShopDeliveryFormController extends Controller
{
    public function index()
    {
        $cartitems=CartItems::get();
        return view("navbar.SHOP.deliveryform",compact('cartitems'));
    }

}
