@extends('layouts.master')
@section('content')
<div>
<form action="{{ isset($cate)? route('category.update',$cate->id):route('category.store')}}" method="post" >
    @csrf

    <input type="text" name="name" placeholder="Category Name" value="{{$category->name}}" required>

<input type="submit" name="Update">
</form>
</div>
@endsection
