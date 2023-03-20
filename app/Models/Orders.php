<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    protected $fillable=['id','order_total','discount_rate','address','user_id','name','email','contact_no','status','delivery_charges'];

}
