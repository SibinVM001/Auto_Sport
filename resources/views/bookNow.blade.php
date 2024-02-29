@extends('layouts.app')
@section('content')
<div class="container text-light">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <h4 class="mb-4">Fill Your Details</h4>

            <form action="{{ route('user.store') }}" method="POST" class="text-light">
                @csrf

                <div class="container">
                    <div class="row mb-3 ms-1">
                        <div class="col-5">
                            <label for="name">Enter Your Full Name</label>
                        </div>
                        <div class="col-2">
                            :
                        </div>
                        <div class="col-5">
                            <input class="ps-2 input_field" type="text" name="name" id="name" value="{{ Auth::user()->name }}">
                            <input type="hidden" name="user_id" id="user_id" value="{{ Auth::user()->id }}">
                            <input type="hidden" name="model_id" id="model_id" value="{{ $model_id }}">
                        </div>
                    </div>

                    <div class="row mb-3 ms-1">
                        <div class="col-5">
                            <label for="phone">Enter Your Phone Number</label>
                        </div>
                        <div class="col-2">
                            :
                        </div>
                        <div class="col-5">
                            <input class="ps-2 input_field" type="text" name="phone" id="phone" maxlength="10">
                        </div>
                    </div>

                    <div class="row mb-3 ms-1">
                        <div class="col-5">
                            <label for="state">Select Your State</label>
                        </div>
                        <div class="col-2">
                            :
                        </div>
                        <div class="col-5">
                            <select name="state" id="state" class="ps-2 input_field">
                                <option value="State">Select State</option>
                                @foreach ($states as $state)
                                    <option value="{{ $state['id'] }}">{{ $state['state'] }}</option>
                                @endforeach
                            </select> 
                        </div>
                    </div>

                    <div class="row mb-3 ms-1">
                        <div class="col-5">
                            <label for="district">Select Your District</label>
                        </div>
                        <div class="col-2">
                            :
                        </div>
                        <div class="col-5">
                            <select name="district" id="district" class="ps-2 input_field">
                                <option value="State">Select District</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3 ms-1">
                        <div class="col-5">
                            <label for="city">Select Your City</label>
                        </div>
                        <div class="col-2">
                            :
                        </div>
                        <div class="col-5">
                            <select name="city" id="city" class="ps-2 input_field">
                                <option value="State">Select City</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3 ms-1">
                        <div class="col-5">
                            <label for="pincode">Enter Your Pincode</label>
                        </div>
                        <div class="col-2">
                            :
                        </div>
                        <div class="col-5">
                            <input type="text" name="pincode" id="pincode" class="ps-2 input_field" maxlength="6">
                        </div>
                    </div>

                    <div class="row mt-4 ms-1">
                        <div class="col-5"></div>
                        <div class="col-2"></div>
                        <div class="col-5">
                            <button class="btn btn-danger" type="submit">CONTINUE</button>
                        </div>
                    </div>
                </div>

                
            </form>
            {{-- <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div> --}}
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{ asset('js/app.js') }}"></script>
@endsection