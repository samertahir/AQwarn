<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function product ()
    {

        return view('admin.products.index');

    }
    public function create ()
    {

        return view('admin.products.create');

    }
    public function edit ()
    {

        return view('admin.products.index');

    }
    public function store(Request $request)
    {
         $product= new Product();
         $product->product_id=$request->product_id;
         $product->name=$request->name;
         $product->price=$request->price;
         $product->description=$request->description;
         $product->product_img=$request->product_img;
         $product->discount=$request->discount;
         $product->quantity_in_add=$request->quantity_in_add;
         $product->save();
         return redirect()->back();




    }

}
