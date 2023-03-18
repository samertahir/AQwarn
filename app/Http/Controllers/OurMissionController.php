<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OurMissionController extends Controller
{
    public function index()
    {
        return view("navbar.ELEMENT.our mission layout");
    }
}
