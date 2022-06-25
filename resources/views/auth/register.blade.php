@extends('layouts.app')
<?php
use App\Models\City;
use App\Models\Province;
use App\Models\Street;
use App\Models\Location;
$cities=City::get();
$streets=Street::get();
$provinces=Province::get();
$locations=Location::get();
?>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="contact_no" class="col-md-4 col-form-label text-md-end">{{ __('Contact No') }}</label>

                            <div class="col-md-6">
                                <input id="contact_no" type="text" class="form-control @error('contact_no') is-invalid @enderror" name="contact_no" value="{{ old('contact_no') }}" required autocomplete="contact_no" autofocus>

                                @error('contact_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="CNIC_no" class="col-md-4 col-form-label text-md-end">{{ __('CNIC No') }}</label>

                            <div class="col-md-6">
                                <input  id="CNIC_no" type="text" class="form-control @error('CNIC_no') is-invalid @enderror" name="cnic_no" value="{{ old('CNIC_no') }}" required autocomplete="CNIC_no" autofocus>

                                @error('CNIC_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="dob" class="col-md-4 col-form-label text-md-end">{{ __('DOB') }}</label>

                            <div class="col-md-6">
                                <input  id="DoB" type="date" class="form-control @error('DoB') is-invalid @enderror" name="dob" value="{{ old('DoB') }}" required autocomplete="DoB" autofocus>

                                @error('DoB')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                            </div>
                            <div class="col-md-6">
                            <select class="form-select" aria-label="Default select example" name="province_id">
                                <option selected value="{{ null }}">Select Provice</option>
                                @foreach ($provinces as $pro)
                                <option value="{{$pro->id }}">{{$pro->name }}</option>
                                @endforeach
                              </select>
                            </div>

                            </div>
                        <div class="row mb-3">
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-6">
                        <select class="form-select" aria-label="Default select example" name="city_id">
                            <option selected  value="{{ null }}"> Select City</option>
                            @foreach ($cities as $ct)
                            <option value="{{$ct->id }}">{{ $ct->name }}</option>
                            @endforeach
                          </select>
                        </div>

                        </div>


                            <div class="row mb-3">
                                <div class="col-md-4">
                                </div>
                                <div class="col-md-6">
                                <select class="form-select" aria-label="Default select example" name="street_id">
                                    <option selected value="{{ null }}">Select Street</option>
                                    @foreach ($streets as $str)
                                    <option value="{{$str->id }}">{{$str->name }}</option>
                                     @endforeach
                                  </select>
                                </div>

                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-4">
                                    </div>
                                <div class="col-md-6">
                                    <select class="form-select" aria-label="Default select example" name="location_id">
                                        <option selected value="{{ null }}">Select Location</option>
                                        @foreach ($locations as $loc )
                                        <option value="{{$loc->id }}">{{$loc->name }}</option>
                                        @endforeach
                                      </select>
                                    </div>

                                    </div>




                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
