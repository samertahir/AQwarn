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
    // public function edit($id)
    // {
    //     // dd($id);
    //     $order=Orders::find($id);



    //     return view('admin.order.create',compact('order'));
    // }
    public function index()
    {
         //Create a variable to get data from database and show it in index
         //$Category is model name & __ object name(table name)
         $orders=Orders::get();


         return view('admin.order.index',compact('orders'));
        }


    public function store(Request $request)
    {
        $user_id = auth()->user()->id;
        // $cartitems=CartItems::get();

        // $product_ids = CartItems::where('user_id', $user_id)->pluck('product_id');
        // $discount = Product::whereIn('discount_rate', array())->get();
        // dd($request->all(), $user_id , $product_ids);


        // dd($discount_rate);
         $discount_rate=0;
         $delivery_charges = 150;
         $order_total=0;

        // $order_data = $request->all();
        $orders = new Orders();

        $orders->name = $request->name;
        $orders->email = $request->email;
        $orders->address = $request->address;
        $orders->contact_no = $request->contact_no;
        $orders->user_id = $user_id;
        // foreach ($cartitems as $items)
        // $orders->product_id=$items->id;
        // // $items=CartItems::where('user_id',$user_id)->where('product_id',$pid)
        // $orders->discount_rate=$items->$discount;

        if($orders->is_pre_order=$request->is_pre_order){


        $orders->date=$request->date;
    }
        else{
            $orders ->date=date('Y-m-d H:i:s');
        }


        $orders->discount_rate=$discount_rate;
        $orders->delivery_charges=$delivery_charges;
        $orders->order_total=$order_total;

        // $orders->save();
        $saved = $orders->save();
        if ($saved) {
                     return redirect()->back()->with('success','your order is placed. ');
                }
            else{
                    return response()->json('something went wrong');
                }
        $cartitems=CartItems::where('user_id',$user_id)->get();
        foreach($cartitems as $items){
            OrderItem::create([

                'product_id'=>$items->product_id,
                'order_id'=> $orders->id,
                'quantity'=> $items->quantity,
                'product_price'=>$items->price,
                // 'discount_rate'=>$items->products->discount,



            ]);
            $order_total+=$items->price*$items->quantity;
            $discount_rate+=$items->discount;
        //   $product=Product::where('id', '=', $orderItem->product_id)->decrement('quantity',$item->quantity);
            $products =Product::find($items->product_id)->decrement('quantity_in_hand',$items->quantity);
        }
        $orders->update(['order_total'=> $order_total, 'discount_rate'=>$discount_rate]);
        $cartitems=CartItems::where('user_id',$user_id)->delete();


        return redirect('/home');

    //     return $orders;
    //     $saved = $orders->save();
    //     if ($saved) {
    //         return redirect()->back()->with('success','your order is placed. ');
    //     }
    // else{
    //         return response()->json('something went wrong');
    //     }
     }
     public function update(Request $request,$id)
    {
        //$id=$request->$id;

        $orders=Orders::find($id);
        $data=$request->all();
        // $data=$request->$orders->status;
        // $orders->status=$request->status;
        //   dd($data);
        if($request->status=="Deliver"){
            $data['date'] = date('Y-m-d H:i:s');
        }
        $orders->update($data);
        return redirect()->route('order.index');

    }


}
