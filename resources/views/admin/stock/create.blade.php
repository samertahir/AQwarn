@extends('layouts.master')
@section('content')
<div>
<form action="index.blade.php" method="post">
    @csrf
    <input type="number" name="id" placeholder="Stock ID"  value="" >
    <input type="text" name="name" placeholder="Stock Name" value="">
    <input type="submit" name="Update">
    </form>
    </div>
@endsection
