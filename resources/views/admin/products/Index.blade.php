@extends('layouts.master')
@section('content')
<div class="text-end">
    <a class="btn btn-success" href="{{ route('product.create') }}">Create</a>
</div>

      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Product Table</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center justify-content-center mb-0">
                  <thead>
                    <tr>

                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Product Name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Product Description</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Product Price</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2"> Product Discount</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Quantity-in-hand</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Image</th>

                      <th class="text-secondary opacity-7"></th>
                      <th class="text-secondary opacity-7"></th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                </thead>
                <tbody>
                @foreach ($Product as $pro)
                <tr>

                  <td>{{$pro->name}}</td>
                  <td>{!! isset($pro)? $pro-> description:'' !!}</td>
                  <td>{{$pro->price}}</td>
                  <td>{{$pro->discount}}</td>
                  <td>{{$pro->quantity_in_hand}}</td>
                  <td><img src="{{$pro->product_img}}"></td>
                  <td class="align-middle text-center">
                      <a href="{{ route('product.edit',['id'=>$pro->id]) }}" class="btn btn-primary btn-sm">Edit</a></td>
                  <td class="align-middle text-center">
                      <a href="{{ route('product.delete',['id'=>$pro->id]) }}" class="btn btn-primary btn-sm">Delete</a></td>
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
