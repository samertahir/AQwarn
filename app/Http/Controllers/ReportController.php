<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{


    public function report ()
    {

        return view('admin.reports.index');

    }
    public function create ()
    {

        return view('admin.reports.create');

    }
    public function edit ()
    {

        return view('admin.reports.create');

    }
}
