<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Device;
use App\Models\user;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class ProfileController extends Controller
{
  
    public function index()
    {
      
        
        $devices= device::get();
        $users=user::get();
        $user=auth()->user();
         return view('admin.profile.index',compact('devices','user','users'));
         
        

    }
//     public function update($id,$status)
//     {
//         // return $id.$status;

//      $devices=Device::find($id);
// $devices->status=$status;
// $devices->save();
// return $devices;
//     }
public function get()
{
  
    
    $devices= Device::get();
    // $users=user::get();
     return view('admin.device.index',compact('devices'));
     
    

}

    
}
