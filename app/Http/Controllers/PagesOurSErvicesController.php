<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesOurSErvicesController extends Controller
{
    public function index()
    {
        return view("navbar.PAGES.ourservices");
    }
}
