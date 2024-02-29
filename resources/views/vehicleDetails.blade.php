{{-- Author : Sibin V  M, Date : 02-06-2022 --}}

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-dark text-light border-0">
                <div class="card-header border-0"><h4>{{ $vehicleBrand }} {{ $vehicleModel[0]['name'] }}</h4></div>

                <div class="card-body">
                    <div>
                        <img src="{{ asset('images/'.$vehicleModel[0]['name'].'.png') }}" alt="" width="90%">
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-5">
            <h5 class="text-light">Rs : {{ $vehicleModel[0]['price'] }}</h5>
            
            <form action="/bookNow/{{ $vehicleBrand }}/{{ $vehicleModel[0]['name'] }}" method="get">
                @csrf

                <input type="hidden" name="model_id" value="{{ $vehicleModel[0]['id'] }}">

                <button type="submit" class="btn btn-danger">BOOK NOW</button>
            </form>
        </div>
    </div>
</div>
@endsection