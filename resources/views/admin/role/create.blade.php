@extends('layouts.master')
@section('content')
<div>
<form action="index.blade.php" method="post">
    @csrf
    <input type="number" name="id" placeholder="Role ID"  value="" >
    <input type="text" name="name" placeholder="Role Name" value="">
    <input type="submit" name="Update">
    </form>
    </div>
@endsection
