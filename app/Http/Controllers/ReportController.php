<?php

namespace App\Http\Controllers;

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
