@extends('layouts.masterR')
@section('content')
<div class="row">
    <div class="col-12">
      <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
            <h6 class="text-white text-capitalize ps-3">Cart Details</h6>
          </div>
        </div>
        <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center justify-content-center mb-0">
                <thead>
                  <tr>
                    <th>Product</th>
                    <th></th>
                    <th></th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Discount</th>
                    <th>  </th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>

                    @foreach ($cartitems as $cart)
                    <tr>

                      <td>{{$cart->name}}</td>
                      <td><img src="{{$cart->product_img}}"></td>
                      <td>{!! isset($cart)? $cart-> description:'' !!}</td>
                      <td>{{$cart->price}}</td>
                      <td>{{$cart->quantity_in_hand}}</td>
                      <td>{{$cart->discount}}</td>

                      <td class="align-middle text-center">
                        <button class="btn btn-primary">-</button></td>
                      <td class="align-middle text-center">
                        <button class="btn btn-primary">+</button></td>
                      <td class="align-middle text-center">
                        <button class="btn btn-primary">DEL</button></td>
                        {{-- <a href="{{ route('product.edit',['id'=>$pro->id]) }}" class="btn btn-primary btn-sm">Edit</a></td> --}}
                    </tr>



                    @endforeach

                      </tbody>
                       @endsection
