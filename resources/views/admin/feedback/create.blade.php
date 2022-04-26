@extends('layouts.master')
@section('content')
<div>
<form action="index.blade.php" method="post">
    @csrf
    <input type="Name" name="name" id="" placeholder="User Name" value="">
    <input type="number" name="number" placeholder="Contact No" value="">
    <input type="text" name="subject" placeholder="Subject" value="">
    <input type="text" name="Message" placeholder="Message" value="">
    <input type="email" name="email"  placeholder="Email" value="" >
    <input type="number" name="date" value="" placeholder="Feedback Date">
    <input type="submit" name="Update">
</form>
</div>
@endsection
