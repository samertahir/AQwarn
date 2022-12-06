<?php

namespace App\Http\Controllers;

use App\Models\Device;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class DevicesController extends Controller
{
    public function index()
    {
        $devices=Device::get();
        $user=auth()->user();
        
        
        // return $user;
        
        
         return view('admin.devices.index',compact('devices','user'));
         
         

    }
    public function update($id,$status)
    {
        // return $id.$status;

     $devices=Device::find($id);
$devices->status=$status;
$devices->save();
return $devices;
    }
   
    
}
