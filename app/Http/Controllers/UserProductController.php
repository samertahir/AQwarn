<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserProductController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
    }
    public function index()
    {
        return view("navbar.BLOG.index");
    }
    // public function feedback()
    // {
    //     $feedback=new Feedback();

    // }
}
