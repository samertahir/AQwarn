@extends('layouts.master')
@section('content')
<div>
<form action="index.blade.php" method="post">
    @csrf
    <input type="number" name="id"   placeholder="User ID"  value="" >
    <input type="text" name="name"       placeholder="Item Name" value="">
    <input type="number" name="price" placeholder="Unit Price" value="" id="">
    <input type="number" name="discount" placeholder="Discount" value="" id="">

    <input type="text" name="record" placeholder="Record" value="" id="">
<input type="submit" name="Update">
</form>
</div>

@endsection
