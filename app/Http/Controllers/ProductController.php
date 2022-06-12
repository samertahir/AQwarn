<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{

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

        return view('admin.products.create');

    }
    public function edit ($id)
    {

        $product=Product::find($id);
       // return $product;
        return view('admin.products.create',compact('Product'));

    }
    public function store(Request $request)
    {
         $product= new Product();
         $product->name=$request->name;
         $product->price=$request->price;
         $product->description=$request->description;
         $product->product_img=$request->product_img;
         $product->discount=$request->discount;
         $product->quantity_in_hand=$request->quantity_in_hand;
         $product->save();
         return redirect()->back();

    }

    public function update(Request $request,$id)
    {
        //$id=$request->$id;
        $product=Product::find($id);
        $data=$request->all();
        $product->update($data);
        return redirect('/admin.products.index');
    }

    public function delete($id)
    {
        $product=Product::find($id);

        $product->delete();
        return redirect('/admin.products.index');
    }

}
