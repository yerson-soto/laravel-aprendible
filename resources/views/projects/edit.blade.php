@extends('layout')

@section('title', __('New Project'))

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6 bg-white rounded px-4">
                <h2 class="p-4">{{ __('Edit project') }}</h2>
                <hr>

                @include('partials.validation-errors')

                <form action="{{ route('projects.update', $project) }}" method="POST">

                    @method('PATCH')

                    @include('projects._form', ['btnText' => 'Update'])
                    <a class="btn btn-link btn-block" href="{{ route('projects.index') }}">
                        {{ __('Cancel') }}
                    </a>
                </form>
            </div>
        </div>
    </div>
@endsection
