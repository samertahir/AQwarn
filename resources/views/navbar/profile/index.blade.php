@extends('layouts.masterR')
@section('content')
<br>
<br>
<br>
<br>
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

<div class="row">
  <div class="col-sm-3">
    <div class="card">
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
      </div>
    </div>
  </div>

  <div class="col-sm-3">
    <div class="card">
      <div class="container">
          <div class="row">
            <div class="col-25">
              <label for="fname"><b> Name</b></label>
            </div>
            <div class="col-75">
              <p>"Kenneth Valdez"</p>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-25">
              <label for="lname"><b>Email</b></label>
            </div>
            <div class="col-75">
              <p>"AQwarn@gmail.com"</p>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-25">
              <label for="lname"><b>Phone</b></label>
            </div>
            <div class="col-75">
              <p>"+9230056387"</p>
            </div>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-25">
              <label for="lname"><b>Address</b></label>
            </div>
            <div class="col-75">
              <p>"Bay Area Francisco,CA"</p>
            </div>
            <button type="button" class="btn btn-primary">Follow</button>
          </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <h1>Devices Status</h1> 

<label for="device_c">Device usage :</label>
<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
</div>
<br>
</div>
<br>
<br>
<br>

<?php
$device = array("AQwarn Device1 Status"=>"35%", "AQwarn Device2 Status"=>"37%", "AQwarn Device3 Status"=>"43%");

foreach($device as $x => $val) { 
  echo "$x = $val<br>";
}
?>


 
</body>
</html>
@endsection