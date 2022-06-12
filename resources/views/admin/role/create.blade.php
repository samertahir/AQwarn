@extends('layouts.master')
@section('content')
<div>
<form action="{{ isset($role)? route('role.update',$role->id):route('role.store')}}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Name" value="{{isset($role)? $role->name :'' }}">
    <input type="submit" name="Update">
    </form>
    </div>
@endsection
