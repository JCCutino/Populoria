@extends('layouts.layout')

@section('title', 'Proyectos')

@section('links')
    <link href="{{ asset('styles/style.css') }}" rel="stylesheet">
@endsection

@section('content')
    @foreach ($projects as $project)
    @if ($project->progress === "Activo")
    <div class="container">
        <div class="row justify-content-center text-center mt-5">
            <div class="col-md-8 col-lg-6 col-lg-12">
                <div class=" contenedor proyectos d-flex flex-column flex-xxl-row align-items-center rounded">
                    <div class="col-12 col-xxl-2 mb-3 mb-xxl-0">
                        <a href="{{ route('projects.show', $project->id) }}">
                            <img src="{{ $project->images->first()->url }}" alt="{{ $project->images->first()->name }}"
                                class="img-fluid rounded" width="200">
                        </a>
                    </div>
                    <div class="ms-0 ms-xxl-5 col-12 col-xxl-6 texto mb-3 mb-xxl-0">
                        <h1>{{ $project->name }}</h1>
                        <p class="text-justify">{{ $project->description }}</p>
                        <div class="d-flex justify-content-center flex-wrap">
                            @foreach ($project->categories->chunk(2) as $chunk)
                                <div class="d-flex justify-content-center mb-2">
                                    @foreach ($chunk as $category)
                                        <h5><span class="badge me-2"
                                                style="background-color: {{ $category->color }}">{{ $category->name }}</span>
                                        </h5>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="ms-0 ms-xxl-5 col-12 col-xxl-3" id="colaboradores">
                        <div class="d-flex flex-wrap justify-content-center">
                            @foreach ($project->users as $user)
                                @if ($user->pivot->status === 'accepted' || $user->pivot->status === 'owner')
                                    <img class="colaborators-project img-fluid my-2" src="{{ asset($user->image) }}"
                                        alt="{{ $user->name }}">
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

    @endforeach
@endsection
