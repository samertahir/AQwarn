<?php

namespace App\Http\Controllers;

use App\Models\Device;
use Illuminate\Http\Request;

class DevicesController extends Controller
{
    public function index()
    {
        $devices=Device::get();
         return view('admin.devices.index',compact('devices')); 

    }
}
