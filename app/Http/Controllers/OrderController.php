<?php

namespace App\Http\Controllers;

use App\Models\CartItems;
use App\Models\OrderItem;
use App\Models\Orders;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function order()
    {

        return view('admin.order.index');
    }
    public function create()
    {

        return view('admin.order.create');
    }
    public function edit()
    {

        return view('admin.order.index');
    }

    public function store(Request $request)
    {
        $user_id = auth()->user()->id;
        $cartitems=CartItems::get();

        // $product_ids = CartItems::where('user_id', $user_id)->pluck('product_id');
        // $discount = Product::whereIn('discount_rate', array())->get();
        // dd($request->all(), $user_id , $product_ids);


        // dd($discount_rate);
         $discount_rate=0;
        $delivery_charges = 150;
         $order_total=1;

        // $order_data = $request->all();
        $orders = new Orders();

        $orders->name = $request->name;
        $orders->email = $request->email;
        $orders->address = $request->address;
        $orders->contact_no = $request->contact_no;
        $orders->user_id = auth()->user()->id;
        // foreach ($cartitems as $items)
        // $orders->product_id=$items->id;
        // // $items=CartItems::where('user_id',$user_id)->where('product_id',$pid)
        // $orders->discount_rate=$items->$discount;
        $orders->discount_rate=$discount_rate;
        $orders->delivery_charges=$delivery_charges;
        $orders->order_total=$order_total;

        $orders->save();
        $cartitems=CartItems::where('user_id',Auth::id())->get();
        foreach($cartitems as $items){
            OrderItem::create([

                'product_id'=>$items->product_id,
                'order_id'=> $orders->id,
                'quantity'=> $items->quantity,
                'product_price'=>$items->products->price,
                'discount_rate'=>$items->products->discount,


            ]);
        }
        //  return redirect()->back();








    //     return $orders;
    //     $saved = $orders->save();
    //     if ($saved) {
    //         return redirect()->back()->with('success','your order is placed. ');
    //     }
    // else{
    //         return response()->json('something went wrong');
    //     }
     }

}
