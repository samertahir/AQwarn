<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function role()
    {

        return view('admin.role.index');

    }
    public function create ()
    {

        return view('admin.role.create');

    }
    public function edit()
    {

        return view('admin.role.index');

    }
}
