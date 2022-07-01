<?php
namespace App\Http\Controllers;
use App\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
class ProvinceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
 }

    public function prov()
    {

    //Create a variable to get data from database and show it in index
     //$Province is model name & __ object name(table name)
     $Province=Province::get();
     return view('admin.province.index',compact('Province'));
    //return view('admin.province.index');

    }
    public function create ()
    {

        return view('admin.province.create');

    }
    public function edit($id)
    {

     $province=Province::find($id);
     // return $province;
      return view('admin.province.create',compact('province'));

    }
    public function store(Request $request)
    {
         $province= new province();

         $province->name=$request->name;
         $province->save();
        return redirect()->back();

    }
    public function update(Request $request,$id)
    {
        //$id=$request->$id;
        $province=Province::find($id);
        $data=$request->all();
        $province->update($data);
        return redirect()->route('province.index');
    }

    public function delete($id)
    {
        $province=Province::find($id);

        $province->delete();
        return redirect()->route('province.index');
    }
}


