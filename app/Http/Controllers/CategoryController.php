<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category ()
    {
     //Create a variable to get data from database and show it in index
     //$Category is model name & __ object name(table name)
        $Category=Category::get();
         return view('admin.category.index',compact('Category'));
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
        return view('admin.category.create',compact('Category'));
    }
    public function store(Request $request)
    {
         $category= new Category();
         $category->category_id=$request->category_id;
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
        return redirect('/admin.category.index');
    }

    public function delete($id)
    {
        $category=Category::find($id);

        $category->delete();
        return redirect('/admin.category.index');
    }

}
