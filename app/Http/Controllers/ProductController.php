<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function product ()
    {

        return view('admin.products.index');

    }
    public function create ()
    {

        return view('admin.products.create');

    }
    public function edit ()
    {

        return view('admin.products.index');

    }
}
