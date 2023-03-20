@extends('layouts.master')
@section('content')
<div class="text-end">
    <!-- <a class="btn btn-success" href="{{ route('product.create') }}">Create</a> -->
</div>

      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Device Table</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table style="width:100%" class="table align-items-center justify-content-center mb-0">
                  <thead>
                    <tr>

                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Device Name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Device Description</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">USER ID</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2"> Status</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Device ID</th>
                    
                      
                    </tr>
                  </thead>
                  <tbody>
                </thead>
                <tbody>
                @foreach ($devices as $dev)
                <tr>

                  <td>{{$dev->device_name}}</td>
                  <td>{{$dev->description}}</td>
                  <td>{{$dev->user_id}}</td>
                  <td>{{$dev->status}}</td>
                  <td>{{$dev->device_id}}</td>
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
