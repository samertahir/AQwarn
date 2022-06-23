<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
class StockController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
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
