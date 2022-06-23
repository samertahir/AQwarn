@extends('layouts.master')
@section('content')
<div>
<form action="{{ isset($location)? route('location.update',$location->id):route('location.store')}}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Name" value="{{isset($locaion)? $location->name :'' }}">
    <input type="submit" name="Update">
    </form>
    </div>
@endsection
