<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StockController extends Controller
{
    public function stock()
    {

        return view('admin.stock.index');

    }
    public function create ()
    {

        return view('admin.stock.create');


    }
    public function edit()
    {

        return view('admin.stock.index');


    }
}
