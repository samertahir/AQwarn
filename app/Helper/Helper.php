<?php

use App\Models\CartItems;
use Illuminate\Support\Facades\Auth;


     function getitems_count(){
        $count=0;

        if(Auth::user()!=null)
        {
        $id=auth()->user()->id;
        $count=CartItems::where('user_id',$id)->count();}
        return $count;
    }
