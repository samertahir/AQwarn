<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user ()
    {

        return view('admin.user.index');

    }
    public function create ()
    {

        return view('admin.user.create');

    }
    public function edit ()
    {

        return view('admin.user.index');

    }
}
