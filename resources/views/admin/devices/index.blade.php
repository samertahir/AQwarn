@extends('layouts.masterR')
@section('content')
<br>
<br>
<br>
<br>
<!-- Add icon library -->

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
}
</style>
</head>
<body>
<div class="container">
  <div class="row">
       <div class="col-sm-4  " style="">
        <diV class="card" style="width 100%;">
          <label for="fname"><b> Name</b></label>
          <p>"Kenneth Valdez"</p>
          <label for="lname"><b>Email</b></label>
          <p>"AQwarn@gmail.com"</p>
          <label for="lname"><b>Phone</b></label> "
          <p>"+9230056387"</p>
          <label for="lname"><b>Address</b></label>
          <p>"Bay Area Francisco,CA"</p>
          <p><button class="btn btn-primary">Follow</button></p>
         </div>
        </diV>
        
       <div class="col-sm-4" style="">
       <div class="card" style="width 100%;">
        <div class="card-tittle">
          <img  src="/assets/rabia/profile.jpg" class="rounded-circle" alt="John" style="width:80%">
          </div>
          <div class="card-body">
            <h1>John Doe</h1>
            <p class="title">CEO & Founder, Example</p>
            <p>Harvard University</p>
            <a href="#"><i class="fa fa-dribbble"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-facebook"></i></a>
            <p><button class="btn btn-primary">Contact</button></p>
          </div></div>
       </div>
        
       <div class="col-sm-4  " style="">
        <diV class="card" style="width 100%;">
          <label for="device_c">Device usage :</label>
          <div>
            @foreach($devices as $dev)
            <label>{{$dev->device_name}}</label>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width:{{$dev->status}}% ;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">{{$dev->status}}</div>
              </div>
              @endforeach
          </div></div>
        </diV>
       
  </div>
</div>
@auth
    <p>Only logged in users can view this</p>
    <a href="/logout">Logout</a>
@endauth
</body>
</html>
@endsection


