@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-dark text-light">
                <div class="card-header">{{ __('Error') }}</div>

                <div class="card-body">
                   <h1>{{ __('404') }}</h1> 
                    {{ __('Page not found') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection