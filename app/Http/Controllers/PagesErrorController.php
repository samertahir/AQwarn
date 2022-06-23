<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesErrorController extends Controller
{
    public function index()
    {
        return view("navbar.PAGES.errorpage");
    }
}
