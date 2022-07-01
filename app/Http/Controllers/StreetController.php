<?php

namespace App\Http\Controllers;

use App\Models\Street;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
class StreetController extends Controller
{
    //public function __construct()
    //{
      //  $this->middleware('auth');
    //}

    public function street()
    {

    //Create a variable to get data from database and show it in index
     //$Role is model name & __ object name(table name)
     $Street=Street::get();
     return view('admin.street.index',compact('Street'));
    //return view('admin.street.index');

    }
    public function create ()
    {

        return view('admin.street.create');

    }
    public function edit($id)
    {

     $street=Street::find($id);
     // return $street;
      return view('admin.street.create',compact('street'));

    }
    public function store(Request $request)
    {
         $street= new street();

         $street->name=$request->name;
         $street->save();
        return redirect()->back();

    }
    public function update(Request $request,$id)
    {
        //$id=$request->$id;
        $street=Street::find($id);
        $data=$request->all();
        $street->update($data);
        return redirect()->route('street.index');
    }

    public function delete($id)
    {
        $street=Street::find($id);

        $street->delete();
        return redirect()->route('street.index');
    }
}
