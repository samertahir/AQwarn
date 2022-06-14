<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
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
