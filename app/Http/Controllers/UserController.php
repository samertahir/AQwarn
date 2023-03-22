<?php

namespace App\Http\Controllers;

use App\Models\User;
use illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function user ()
    {

        $users=User::get();
        return view('admin.user.index',compact('users'));

    }
    // public function create ()
    // {

    //     return view('admin.user.create');

    // }
    // public function edit ()
    // {

    //     return view('admin.user.index');

    // }


    }

