@extends('layouts.master')
@section('content')
<div>
<form action="{{ route('product.store') }}" method="post">
    @csrf
    <input type="number" name="product_id" id="" placeholder="Product Id" value="">
    <input type="text" name="name" placeholder="Product Name" value="">
    <input type="text" name="description" placeholder="Product Description" value="">
    <input type="number" name="price" placeholder="Product Price" value="">
    <input type="number" name="discount" placeholder="Product Discount" value="">
    <input type="number" name="quantity_in_add" value="" placeholder="quantity_in_add">
    <img src="" name="">
    <input type="submit" name="Update">
</form>
</div>
@endsection
