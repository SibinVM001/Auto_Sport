{{-- Author : Sibin V M, Modified Date : 03-06-2022 --}}


@extends('layouts.app')
@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
{{-- <meta name="csrf-token" content="{{ csrf_token() }}" /> --}}
<div class="container text-light">
    <div class="row">
        <h4>Cart ({{ count($cart) }})</h4>
    </div>
    <div class="row">
        <div class="col-md-8">
            
            
            {{-- <form action="{{ route('user.store') }}" method="POST" class="text-light">
                @csrf --}}

                <div class="container">
                    @foreach($cart as $item)
                        @foreach($models as $model)
                            @if($model['id'] == $item['model_id'])
                                <div class="row my-4 d-flex align-items-center" style="height: 150px; border: 1px solid white">
                                    <div class="col-4">
                                        <img src="{{ asset('images/'.$model['name'].'.png') }}" alt="" width="80%">
                                    </div>
                                    <div class="col-4">
                                        @foreach($brands as $brand)
                                            @if($brand['id'] == $model['brand_id'])
                                                <h5>{{ $brand['name'] }} {{ $model['name'] }}</h5>
                                            @endif
                                        @endforeach
                                    </div>
                                    <div class="col-2">
                                        
                                        <h4>{{ PriceController::priceConversion($model['price']) }}</h4>
                                    </div>
                                    <div class="col-2">

                                        <input type="hidden" name="user_id" id="user_id" value="{{ $user_id }}">
                                        <input type="hidden" name="model_id" id="model_id" value="{{ $model['id'] }}">

                                        <button id="cartDelBtn{{ $model['id'] }}" class="btn btn-outline-danger">Delete</button>

                                        @php
                                            echo "<script>
                                                $('#cartDelBtn".$model['id']."').click(function() {
                                                    $.ajax({
                                                        url : '/cart/item/destroy',
                                                        type : 'GET',
                                                        data : {
                                                            'user_id' : ".$user_id.",
                                                            'model_id' : ".$model['id']."
                                                        },
                                                        success : function(res) {
                                                            location.reload();
                                                        }
                                                    });  
                                                });
                                            </script>"
                                        @endphp

                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @endforeach
                </div>

                {{-- <div class="container">
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
                </div> --}}

                
            {{-- </form> --}}
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
        <div class="col-md-4 mt-4">
            <div class="p-3" style="height: max-content; width: 100%; border: 1px solid white">
                <div class="row">
                    <div class="col-5">
                        <p>Total Items</p>
                    </div>
                    <div class="col-2">
                        :
                    </div>
                    <div class="col-5 text-end">
                        <p>{{ count($cart) }}</p>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-5">
                        <p>Total Price</p>
                    </div>
                    <div class="col-2">
                        :
                    </div>
                    <div class="col-5 text-end">

                        @php
                            $totalPrice = 0;
                        @endphp

                        @foreach($cart as $item)

                            @foreach($models as $model)

                                @if($model['id'] == $item['model_id'])

                                    @php
                                        $totalPrice += $model['price'];
                                    @endphp

                                @endif

                            @endforeach

                        @endforeach

                        {{ PriceController::priceConversion($totalPrice) }}

                    </div>
                </div>

                <div class="row mx-1">
                    <button class="btn btn-danger">CONTINUE</button>
                </div>
                
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('js/app.js') }}"></script>
@endsection