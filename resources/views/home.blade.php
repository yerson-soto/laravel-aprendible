@extends('layout')

@section('title', __('Home'))

@section('content')
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-lg-6 text-center text-lg-left mb-3">
                <h2 class="text-primary display-4">@lang('Web Development')</h2>
                <p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore quas expedita dolorum similique illo autem praesentium esse.</p>
                <div>
                    <a class="btn btn-primary mr-2" href="{{ route('contact') }}">
                        {{ __('Contact Us') }}
                    </a>
                    <a class="btn btn-outline-primary" href="{{ route('projects.index') }}">
                        {{ __('Portfolio') }}
                    </a>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <img class="img-fluid" src="{{ asset('img/home.svg') }}" alt="Web Development">
            </div>
        </div>
    </div>
@endsection
