<?php

namespace App\Http\Controllers;

use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
class ReportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function report ()

    {
        // $order_items=OrderItem::where('')


         return view('admin.reports.index');

    }
    // public function create ()
    // {

    //     return view('admin.reports.create');

    // }
    // public function edit ()
    // {

    //     return view('admin.reports.create');

    // }


}
