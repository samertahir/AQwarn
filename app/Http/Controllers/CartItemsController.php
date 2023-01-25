<?php

namespace App\Http\Controllers;

use App\Models\CartItems;
use App\Models\Product;
use Illuminate\Http\Request;

class CartItemsController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
    }
    public function index()
    {

        $user_id=auth()->user()->id;
        $cartitems=CartItems::where('user_id',$user_id)->get();
        //return $cartitems;
        return view('navbar.CART.cartdetails',compact('cartitems'));

    }
    // public function delete($id)
    // {
    //     $user_id=auth()->user()->id;
    //     $cartitems_id=CartItems::find($id);
    //     $cartitems=CartItems::where('user_id',$user_id,$cartitems_id);


    //     $cartitems->delete();
    //     return redirect()->back();
    // }


}
