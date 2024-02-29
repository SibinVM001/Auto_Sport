@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h4 class="text-light">{{ __('We Have') }}</h4>
        @foreach ($vehicleType as $item)
            <div class="col-md-4">
                
                <div class="card bg-dark text-light border-0">
                    {{-- <div class="card-header">{{ $item['type'] }}</div> --}}

                    <div class="card-body d-flex align-items-center justify-content-center" style="height: 250px">
                        <img class="vehicleTypeImg" src="{{ asset('images/'.$item['type'].'.png') }}" alt="" width="80%">
                        {{-- @dd($data) --}}
                        
                            {{-- <p>{{ $item['type'] }}</p> --}}
                        
                        {{-- @if (session('status'))
                            <div class="alert alert-success" role="alert"> --}}
                                {{-- {{ session('status') }} --}}
                            {{-- </div>
                        @endif

                        {{ __('You are logged in!') }} --}}
                    </div>
                </div>
            </div>
        @endforeach

        <div class="col-md-4">
            <div class="card bg-dark text-light">
                <div class="card-header">{{ __('Models') }}</div>

                <div class="card-body">
                    @foreach ($vehicleBrand as $item)
                        <p>{{ $item['name'] }}</p>
                    @endforeach
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert"> --}}
                            {{-- {{ session('status') }} --}}
                        {{-- </div>
                    @endif

                    {{ __('You are logged in!') }} --}}
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card bg-dark text-light">
                <div class="card-header">{{ __('Models') }}</div>

                <div class="card-body">
                    @foreach ($vehicleModel as $item)
                        <p>{{ $item['name'] }}</p>
                    @endforeach
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert"> --}}
                            {{-- {{ session('status') }} --}}
                        {{-- </div>
                    @endif

                    {{ __('You are logged in!') }} --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection