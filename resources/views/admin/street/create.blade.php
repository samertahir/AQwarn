@extends('layouts.master')
@section('content')
<div>
<form action="{{ isset($street)? route('street.update',$street->id):route('street.store')}}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Name" value="{{isset($street)? $street->name :'' }}">
    <input type="submit" name="Update">
    </form>
    </div>
@endsection
