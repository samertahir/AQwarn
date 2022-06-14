@extends('layouts.master')
@section('content')
<div>
<form action="{{ isset($province)? route('province.update',$province->id):route('province.store')}}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Name" value="{{isset($province)? $province->name :'' }}">
    <input type="submit" name="Update">
    </form>
    </div>
@endsection
