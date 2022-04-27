@extends('layouts.master')
@section('content')
<div>
<form action="{{ route('category.store') }}" method="post">
    @csrf
    <input type="number" name="id" value="category_id" placeholder="Category ID">
    <input type="text" name="name" value="name" placeholder="Category Name">

<input type="submit" name="Update">
</form>
</div>
@endsection
