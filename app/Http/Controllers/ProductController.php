<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItems;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ProductController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
    }

    public function product ()
    {
         //Create a variable to get data from database and show it in index
         //$Category is model name & __ object name(table name)
         $Product=Product::get();


         return view('admin.products.index',compact('Product'));

        //return view('admin.products.index');

    }

    public function create ()
    {
        $category=Category::get();
        return view('admin.products.create',compact('category'));

    }
    public function edit (Request $request,$id)
    {

        $pro=Product::find($id);
       // return $product;
       $category=Category::get();
        return view('admin.products.create',compact('pro','category'));

    }
    public function store(Request $request)
    {
       //  $product= new Product();
         //$product->name=$request->name;
         //$product->price=$request->price;
         //$product->description=$request->description;
         //$product->product_img=$request->product_img;
         //$product->discount=$request->discount;
         //$product->quantity_in_hand=$request->quantity_in_hand;
         //$product->category_id=$request->category_id;
         //$product->save();
            $data=$request->all();

        if($image=$request->file('image')){
            $destination='public/image/';
            $image_name=time().'_image.'.$image->getClientOriginalExtension();
            $image->move( $destination,$image_name);
            $data['product_img']='/'.$destination.$image_name;
        }

       // return $data;
        Product::create($data);
         return redirect()->back();

    }

    public function update(Request $request,$id)
    {
        //$id=$request->$id;

        $Product=Product::find($id);
        $data=$request->all();
        if($image=$request->file('image')){
            $destination='public/image/';
            $image_name=time().'_image.'.$image->getClientOriginalExtension();
            $image->move( $destination,$image_name);
            $data['product_img']='/'.$destination.$image_name;
        }
        $Product->update($data);
        return redirect()->route('product.index');
    }

    public function delete($id)
    {
        $Product=Product::find($id);

        $Product->delete();
        return redirect()->route('product.index');
    }

    public function cartitems()
    {
        $cartitems=CartItems::get();
        return view('layouts.masterR',compact('cartitems'));

    }

    public function add($pid)

    {

        $user_id=auth()->user()->id;
        //$order_total=0;
        //$discount_rate=0;
        //$address=auth()->user()->address;

        $products =Product::find($pid);

        if(!$products){
            abort(404);
        }
        // $oldcart=User::has('login')? User::get('cart'): null;
        // $cart = new Cart();
        // $cart->user_id = $user;
        // $cart->order_total =$order_total;
        // $cart->discount_rate = $discount_rate;
        // $cart->address = 'dfdg';
        // $cart->save();

        //  $cart_id=$cart;
        //  $product_price=0;
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



}
