<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function order ()
    {

        return view('admin.order.index');

    }
    public function create ()
    {

        return view('admin.order.create');

    }
    public function edit ()
    {

        return view('admin.order.index');

    }
}
