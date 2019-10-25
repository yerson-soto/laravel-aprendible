@extends('layout')

@section('title', __('About'))

@section('content')
<div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-lg-6 text-center text-lg-left mb-3">
                <h2 class="text-primary display-4">@lang('About')</h2>
                <p class="text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi earum assumenda placeat quae et vitae, perspiciatis autem hic temporibus magnam provident voluptatibus, nobis quaerat sint. Quo eius obcaecati repellat ipsa!</p>
            </div>
            <div class="col-12 col-lg-6">
                <img class="img-fluid" src="{{ asset('img/about.svg') }}" alt="About">
            </div>
        </div>
    </div>
@endsection
