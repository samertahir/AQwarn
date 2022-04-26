@extends('layouts.master')
@section('content')
<div>
<form action="index.blade.php" method="post">
    @csrf
    <input type="number" name="id" id="" placeholder="Report ID" value="">
    <input type="text" name="name" placeholder="Report Name" value="">
    <input type="text" name="description" placeholder="Report Data" value="">
    <input type="number" name="date" value="" placeholder="Date">
    <input type="submit" name="Update">
</form>
</div>
@endsection
