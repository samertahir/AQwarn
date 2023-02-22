<?php

namespace App\Http\Controllers;

use App\Models\CartItems;
use App\Models\Product;
use GrahamCampbell\ResultType\Success;
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
    public function cartitems()
    {
        $cartitems=CartItems::get();
        return view('layouts.masterR',compact('cartitems'));

    }

    public function add($pid)

    {

        $user_id=auth()->user()->id;

        $products =Product::find($pid);

        if(!$products){
            abort(404);
        }

         $quantity=1;

        $items=CartItems::where('user_id',$user_id)->where('product_id',$pid)->first();
        if($items!=null){

        $items->increment('quantity');
        return redirect()->back();


        }

    else{
        $cartitems = new CartItems();
        $cartitems->product_id= $pid;
        $cartitems->user_id = $user_id;
        $cartitems->quantity=$quantity;

        $cartitems->save();
        return redirect()->back();

    }

    }
     public function count(){
        $user_id=auth()->user()->id;
        $cartitems=CartItems::where('user_id',$user_id)->count();

     }







    public function delete($id)
    {
        $user_id=auth()->user()->id;
        // $cartitems_id=CartItems::find($id);
        // $cartitems=CartItems::where('user_id',$user_id)->where('id',$id);
        // return $cartitems;
         $cartitems=CartItems::where('user_id',$user_id)->where('id',$id)->first();
        //  return $cartitems;
         $cartitems->delete();
        return redirect('/cartdetails');

        // return redirect()->route('cartitemsdetail.delete');
    }

    public function increment($id)
    {

          $cartitems_id=CartItems::find($id);
        //  $quantity_inc=$cartitems_id->quantity+1;
          $quantity_inc=$cartitems_id->quantity;

        // get quantity_in_hand in next line
         $quantity_in_hand=$cartitems_id->quantity_in_hand;
        //  return $quantity_in_hand;
        // condition for quantity
           if($quantity_in_hand>=$quantity_inc){
        //     // $cartitems_id->update(['quantity'=>$quantity_inc]);
              $cartitems_id->increment('quantity');
             return redirect()->back()->with('success','Success!');
         }
          else
         return redirect()->back()->with('failed','Failed!');

        //  return $quantity_in_hand;

         //  return $cartitems_id;
        //  return redirect('/cartdetails');

    }

    public function decrement($id)
     {
         $cartitems_id=CartItems::find($id);
        // $quantity_dec=$cartitems_id->quantity-1;
        // $cartitems_id->update(['quantity'=>$quantity_dec]);
        $quantity_dec=$cartitems_id->quantity;
         if($quantity_dec>1){
            $cartitems_id->decrement('quantity');
         return redirect()->back()->with('success','Success!');
        }
        else
        return redirect()->back()->with('failed','Failed!');


   }


}
