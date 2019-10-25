@extends('layout')

@section('title', $project->title)

@section('content')
   <div class="container">
        <div class="row">
            <div class="col-10 col-md-8">
                <h2 class="display-4">{{ $project->title }}</h2>
                <p class="text-muted">Creado {{ $project->created_at->diffForHumans() }}</p>
                <p class="font-weight-lighter">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga sed cum iure? Facere, illum culpa. Minus placeat debitis libero nisi dolore eaque odit, obcaecati fuga ea consequuntur necessitatibus modi provident. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui voluptatibus atque obcaecati, deleniti iste debitis molestias quae consequuntur veniam dicta placeat tempore nostrum, rerum eligendi, velit nobis doloribus fugit facere?</p>
                <div class="d-flex justify-content-between">
                        <a href="{{ route('projects.index') }}">
                            {{ __('Go back') }}
                        </a>
                        @auth
                            <div class="btn-group">
                                <a class="btn btn-info text-white" href="{{ route('projects.edit', $project) }}">{{ __('Edit') }}</a>
                                <form action="{{ route('projects.destroy', $project) }}" method="POST" class="btn btn-danger">
                                    @csrf
                                    @method('DELETE')
                                    <button class="border-0 border-none bg-transparent text-white">{{ __('Delete') }}</button>
                                </form>
                            </div>
                        @endauth
                </div>
            </div>
        </div>
   </div>
@endsection
