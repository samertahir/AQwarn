@extends('layouts.master')
@section('content')
<div>
<form action="index.blade.php" method="post">
    @csrf
    <input type="text" name="name" placeholder="User Name" value="">
    <input type="password" name="password" placeholder="Password" value="">
    <input type="number"  name="" placeholder="Password">
    <textarea name="" placeholder="Address" value=""> </textarea>
    <input type="number" name="DOB" placeholder="DOB" value="">
    <input type="submit" name="Update">
</form>
</div>
@endsection
