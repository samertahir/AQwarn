<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilterationController extends Controller
{
    public function index()
    {
        return view("navbar.ELEMENT.filteration");
    }
}
