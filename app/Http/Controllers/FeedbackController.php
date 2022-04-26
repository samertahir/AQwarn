<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeedbackController extends Controller
{
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
