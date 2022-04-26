@extends('layouts.master')
@section('content')
<div>
<form action="index.blade.php" method="post">
    @csrf
    <input type="number" name="id" id="" placeholder="Product Id" value="">
    <input type="text" name="name" placeholder="Product Name" value="">
    <input type="text" name="description" placeholder="Product Description" value="">
    <input type="number" name="price" placeholder="Product Price" value="">
    <input type="number" name="date" value="" placeholder="Added Date">
    <input type="submit" name="Update">
</form>
</div>
@endsection
