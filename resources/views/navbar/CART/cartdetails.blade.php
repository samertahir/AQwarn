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
                      <td>{{$cart->quantity}}</td>
                      <td>{{$cart->discount}}</td>

                      <td class="align-middle text-center">
                        <a href="{{'decrement/'.$cart->id}}" class="btn btn-primary btn-sm">-</a></td>
                      <td class="align-middle text-center">
                        {{-- <a href="" class="btn btn-primary btn-sm">+</a> --}}
                        <a href="{{'increment/'.$cart->id}} " class="btn btn-primary btn-sm">+</a>
                        {{-- <a href="{{ route('cartdetail.increment',['id'=>$cart->id]) }}" class="btn btn-primary btn-sm">+</a> --}}
                        </td>
                      <td class="align-middle text-center">
                        {{-- <button class="btn btn-danger">DEL</button> --}}
                        <a href="{{ 'delete/'.$cart->user_id.$cart->id }}" class="btn btn-danger btn-sm">DEL</a></td>
                        {{-- <a href="{{ route('cartdetail.delete',['id'=>$cart->user_id],['id'=>$cart->id]) }}" class="btn btn-danger btn-sm">DEL</a></td> --}}
                    </td>
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
