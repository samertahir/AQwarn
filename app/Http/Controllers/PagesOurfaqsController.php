<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesOurfaqsController extends Controller
{
    public function index()
    {
        return view("navbar.PAGES.ourfaqs");
    }
}
