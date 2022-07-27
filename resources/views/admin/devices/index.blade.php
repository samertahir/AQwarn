@extends('layouts.masterR')
@section('content')
@foreach($devices as $dev)
<h1>{{$dev->device_name}}</h1>
<h1>{{$dev->description}}</h1>
@endforeach
@endsection
