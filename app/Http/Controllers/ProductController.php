<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
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


    public function add($pid)

    {
        auth()->user()->id;
        $products =Product::find($pid);
        
        if(!$products){
            abort(404);
        }
   }

}
