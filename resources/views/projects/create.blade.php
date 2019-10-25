@extends('layout')

@section('title', __('New Project'))

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6 bg-white rounded px-4">
                <h2 class="pt-4">{{ __('Create a new project') }}</h2>
                <hr>

                @include('partials.validation-errors')

                <form action="{{ route('projects.store') }}" method="POST">

                    @include('projects._form', ['btnText' => 'Create'])
                    <a class="btn btn-link btn-block" href="{{ route('projects.index') }}">
                        {{ __('Cancel') }}
                    </a>
                </form>
            </div>
        </div>
    </div>
@endsection
