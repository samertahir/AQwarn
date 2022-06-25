<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesAboutUsController extends Controller
{
    public function index()
    {
        return view("navbar.PAGES.aboutus");
    }
}
