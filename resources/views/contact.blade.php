@extends('layout')

@section('title', __('Contact'))

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6 bg-white rounded px-4">
                <h2 class="pt-3">{{ __('Contact Us') }}</h2>
                <hr>
                <form action="{{ route('contact.store') }}" method="POST">
                    @csrf
                        <div class="form-group">
                            <input
                                type="text"
                                name="name"
                                placeholder="{{ __('Name') }}"
                                value="{{ old('name') }}"
                                class="form-control shadow-sm bg-light @error('name') is-invalid @enderror"
                            >
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                    <div class="form-group">
                        <input
                            type="text"
                            name="email"
                            placeholder="{{ __('Email') }}"
                            value="{{ old('email') }}"
                            class="form-control shadow-sm bg-light @error('email') is-invalid @enderror"
                        >
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                            <input
                                type="subject"
                                name="subject"
                                placeholder="{{ __('Subject') }}"
                                value="{{ old('subject') }}"
                                class="form-control shadow-sm bg-light @error('subject') is-invalid @enderror"
                            >
                            @error('subject')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>

                   <div class="form-group">
                        <textarea
                            name="content"
                            placeholder="{{ __('Message') }}"
                            class="form-control shadow-sm bg-light @error('content') is-invalid @enderror"
                        >{{ old('content') }}</textarea>
                        @error('content')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                   </div>


                    <button
                        class="btn btn-outline-primary btn-block py-2 my-4"
                    >
                        {{ __('Send') }}
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
