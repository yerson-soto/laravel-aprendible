@extends('layout')

@section('title', __('Portfolio'))

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="display-4">{{ __('Our projects') }}</h2>
            @auth
                <a class="btn btn-outline-danger" href="{{ route('projects.create') }}">{{ __('Create new project') }}</a>
            @endauth
        </div>
        <ul>
            @if (isset($projects) && $projects)
                <div class="row justify-content-center justify-content-md-start">
                        @foreach ($projects as $project)

                            <li class="col-10 col-sm-6 col-md-4 card card-body list-group-item py-4">
                                <a class="text-decoration-none text-secondary" href="{{ route('projects.show', $project) }}">
                                    <h4 class="">{{ $project->title }}</h4>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem corrupti, excepturi quod saepe eos harum earum illo consectetur molestias.</p>
                                    <div class="d-flex justify-content">
                                        <span>{{ $project->created_at->format('d-m-Y') }}</span>
                                    </div>
                                </a>
                            </li>
                    @endforeach
                </div>
            @else
                <li>{{ __('No projects to show') }}</li>
            @endif

        </ul>
    </div>
@endsection
