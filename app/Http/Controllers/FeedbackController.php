<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class FeedbackController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function feedback ()
    {

        return view('admin.feedback.index');

    }
    public function create ()
    {

        return view('admin.feedback.create');

    }
    public function edit()
    {

        return view('admin.feedback.index');

    }
}
