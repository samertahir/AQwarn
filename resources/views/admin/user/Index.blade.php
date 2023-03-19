@extends('layouts.master')
@section('content')

<div class="text-end">
   
</div>

      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">USER Table</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table style="width:100%" class="table align-items-center justify-content-center mb-0">
                  <thead>
                    <tr>

                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">USER ID</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">E-mail</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Password</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Contact_no</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">CNIC-No</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">DoB</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Device_ID</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Street_ID</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">City_ID</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Location_ID</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Province_ID</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Role_ID</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Address</th>
        
                    </tr>
                  </thead>
                  <tbody>
                </thead>
                <tbody>
                @foreach ($users as $use)
                <tr>

                  <td>{{$use->id}}</td>
                  <td>{{$use->name}}</td>
                  <td>{{$use->email}}</td>
                  <td>{{$use->password}}</td>
                  <td>{{$use->contact_no}}</td>
                  <td>{{$use->cnic_no}}</td>
                  <td>{{$use->dob}}</td>
                  <td>{{$use->street_id}}</td>
                  <td>{{$use->city_id}}</td>
                  <td>{{$use->location_id}}</td>
                  <td>{{$use->province_id}}</td>
                  <td>{{$use->role_id}}</td>
                  <td>{{$use->address}}</td>
                    </tr>
                @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

  @endsection
