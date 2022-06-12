@extends('layouts.master')
@section('content')
<div>
<form action="{{ isset($cate)? route('category.update',$cate->id):route('role.store')}}" method="post">
    @csrf

    <input type="text" name="name" placeholder="Category Name" value="{{isset($cate)? $cate->name :'' }}">

<input type="submit" name="Update">
</form>
</div>
@endsection
