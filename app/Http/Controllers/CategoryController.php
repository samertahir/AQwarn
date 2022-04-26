<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category ()
    {

        return view('admin.category.index');

    }
    public function create ()
    {

        return view('admin.category.create');

    }
    public function edit ()
    {

        return view('admin.category.index');

    }

}
