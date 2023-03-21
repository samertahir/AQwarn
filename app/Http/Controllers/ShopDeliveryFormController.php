<?php

namespace App\Http\Controllers;
use App\Models\CartItems;

use Illuminate\Http\Request;

class ShopDeliveryFormController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
    }
    public function index()
    {
         $user_id = auth()->user()->id;
        $cartitems=CartItems::where('user_id',$user_id)->get();


        // $cartitems=CartItems::get();
         if($cartitems->count()<1){
           abort(404);
           }
        return view("navbar.SHOP.deliveryform",compact('cartitems'));
    }

}
