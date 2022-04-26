@extends('layouts.master')
@section('content')
<div>
<form action="index.blade.php" method="post">
    @csrf
    <input type="number" name="id" value="" placeholder="Category ID">
    <input type="text" name="name" value="" placeholder="Category Name">

<input type="submit" name="Update">
</form>
</div>
@endsection
