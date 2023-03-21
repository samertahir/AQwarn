@extends('layouts.master')
@section('content')


      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Order Table</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center justify-content-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Total Order</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Discount rate</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Address</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">User Id</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Email</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Contact No</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Status</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Delivery Charges</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Action</th>
                      <th class="text-secondary opacity-7"></th>
                      <th class="text-secondary opacity-7"></th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($orders as $order)
                    <tr>

                      <td>{{$order->order_total}}</td>
                      <td>{{$order->discount_rate}}</td>
                      <td>{{$order->address}}</td>
                      <td>{{$order->user_id}}</td>
                      <td>{{$order->name}}</td>
                      <td>{{$order->email}}</td>
                      <td>{{$order->contact_no}}</td>
                      <td>{{$order->status}}</td>
                      <td>{{$order->delivery_charges}}</td>
                      <td>
                        <form action="{{ route('order.update',$order->id)}}" method="post">
                            @csrf
                        <select  required name="status" >

                            <option value="" >Select Order Status</option>
                            <option value="Process" >Process</option>
                            <option value="Deliver" >Deliver</option>
                            <option value="Cancel" >Cancel</option>

                            </select>
                            <input type="submit" name="Update">
                        </form>
                    </td>
                      {{-- <td class="align-middle text-center">

                        <a href="{{ route('order.edit', $order->id) }}" class="btn btn-primary btn-sm">Edit</a></td> --}}
                    </tr>
                    @endforeach

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>

            </div>
          </div>
        </div>
      </div>

  @endsection
