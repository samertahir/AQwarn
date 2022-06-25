<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class CategoryController extends Controller
{
    //public function __construct()
    //{
       // $this->middleware('auth');
    //}
    public function category ()
    {
     //Create a variable to get data from database and show it in index
     //$Category is model name & __ object name(table name)
        $category=Category::with('products')->get();
         return view('admin.category.index',compact('category'));
        //return view('admin.category.index');

    }
    public function create ()
    {

        return view('admin.category.create');

    }
    public function edit($id)
    {
        $category=Category::find($id);
       // return $category;
        return view('admin.category.create',compact('category'));
    }
    public function store(Request $request)
    {
         $category= new Category();

         $category->name=$request->name;
         $category->save();
        return redirect()->back();

    }
    public function update(Request $request,$id)
    {
        //$id=$request->$id;
        $category=Category::find($id);
        $data=$request->all();
        $category->update($data);
        return redirect()->route('category.index');
    }

    public function delete($id)
    {
        $category=Category::find($id);

        $category->delete();
        return redirect()->route('category.index');
    }
}
