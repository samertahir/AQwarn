<?php
namespace App\Helper;

use App\Models\CartItems;
use Illuminate\Support\Facades\Auth;

class Helper
{

    public function getitemscount(){
        $count=0;
        if(Auth::user()!=null)
        $id=auth()->user()->id;
        $count=CartItems::where('user_id',$id)->count();
        return $count;
    }
}
