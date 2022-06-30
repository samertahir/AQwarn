<?php
namespace App\Http\Controllers;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
class LocationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function loc()
    {

    //Create a variable to get data from database and show it in index
     //$Location is model name & __ object name(table name)
     $Location=Location::get();
     return view('admin.location.index',compact('Location'));
    //return view('admin.location.index');

    }
    public function create ()
    {

        return view('admin.location.create');

    }
    public function edit($id)
    {

     $location=Location::find($id);
     // return $location;
      return view('admin.location.create',compact('location'));

    }
    public function store(Request $request)
    {
         $location= new location();

         $location->name=$request->name;
         $location->save();
        return redirect()->back();

    }
    public function update(Request $request,$id)
    {
        //$id=$request->$id;
        $location=Location::find($id);
        $data=$request->all();
        $location->update($data);
        return redirect()->route('location.index');
    }

    public function delete($id)
    {
        $location=Location::find($id);

        $location->delete();
        return redirect()->route('location.index');
    }
}
