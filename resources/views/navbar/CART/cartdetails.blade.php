@extends('layouts.masterR')
@section('content')
<div class="row">
    <div class="col-12">
      <div class="card my-4">
        <div class="card-header">

            <h4>Cart Details</h4>

        </div>

        <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center justify-content-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Product</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2"></th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2"></th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Price</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Quantity</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Discount</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">  </th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Action</th>
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
                        <button class="btn btn-danger">DEL</button></td>
                        {{-- <a href="{{ route('product.edit',['id'=>$pro->id]) }}" class="btn btn-primary btn-sm">Edit</a></td> --}}
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
