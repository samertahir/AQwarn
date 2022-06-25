@extends('layouts.master')
@section('content')
<div>
<form action="{{ isset($pro)? route('product.update',$pro->id):route('product.store')}}" method="post" enctype="multipart/form-data">
    @csrf

    <input type="text" name="name" placeholder="Product Name" value="{{isset($pro)? $pro->name :'' }}">
    <input type="text" name="description" placeholder="Product Description" value="{{isset($pro)? $pro-> description:''}}">
    <input type="number" name="price" placeholder="Product Price" value="{{isset($pro)? $pro->price :''}}">
    <input type="number" name="discount" placeholder="Product Discount" value="{{isset($pro)? $pro->price :''}}">
    <input type="text" name="quantity_in_hand"  placeholder="quantity_in_hand" value="{{isset($pro)? $pro->quantity_in_hand :''}}">
<select  required name="category_id" >
    <option value="{{ 'null' }}">Select Category</option>
    @foreach ($category as $cat)
    <option value="  {{$cat->id}}">{{$cat->name}}</option>
     @endforeach
</select>
    <input type="file" src="" name="image" width="50" >
    <input type="submit" name="Update">
</form>
</div>
@endsection
