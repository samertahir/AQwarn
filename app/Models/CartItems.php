<?php

namespace App\Models;

use GuzzleHttp\Psr7\AppendStream;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItems extends Model
{
    use HasFactory;
    protected $fillable=['id','product_id','user_id','quantity'];
   // protected $appends=[''];
}
