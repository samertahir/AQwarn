<?php

namespace App\Models;

use GuzzleHttp\Psr7\AppendStream;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\This;

class CartItems extends Model
{
    use HasFactory;
    protected $fillable=['id','product_id','user_id','quantity'];
    protected $appends=['name','price','description','product_img','discount','quantity_in_hand'];
    public function getproduct(){
        $product=Product::find($this->product_id);

    }


    public function getNameAttribute(){
        $product=Product::find($this->product_id);
        return $product->name;
    }
    public function getPriceAttribute(){
        $product=Product::find($this->product_id);
        return $product->price;
    }
    public function getDescriptionAttribute(){
        $product=Product::find($this->product_id);
        return $product->description;
    }
    public function getProductImgAttribute(){
        $product=Product::find($this->product_id);
        return $product->product_img;
    }
    public function getDiscountAttribute(){
        $product=Product::find($this->product_id);
        return $product->discount;
    }
    public function getQuantityInHandAttribute(){
        $product=Product::find($this->product_id);
        return $product->quantity_in_hand;


    }
}
