@extends('layouts.master')
@section('content')
<div>
<form action="{{ isset($city)? route('city.update',$city->id):route('city.store')}}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Name" value="{{isset($city)? $city->name :'' }}">
    <input type="submit" name="Update">
    </form>
    </div>
@endsection
