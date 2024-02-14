@extends('layouts.layout')

@section('title', 'Proyectos')

@section('links')
    <link href="{{ asset('styles/luis.css') }}" rel="stylesheet">
@endsection

@section('content')
    @foreach ($projects as $project)
        <div class="d-block m-5 justify-content-center text-center">
            <section id="project" class="mt-5">
                <div class="proyectos d-block d-xxl-inline-flex project rounded">

                    <div class="col-12 col-xxl-2">
                        <a href="{{ route('projects.show', $project->id) }}">
                            <img src="{{ $project->images->first()->url }}" alt="{{ $project->images->first()->name }}"
                                width="200">
                        </a>
                    </div>


                    <div class=" d-block ms-xxl-5 col-12 col-xxl-6 texto">
                        <h1>{{ $project->name }}</h1>
                        <p class="text-justify">{{ $project->description }}
                        </p>
                        <div class="d-inline-flex mt-auto">
                            @foreach ($project->categories as $category)
                                <h5><span class="badge"
                                        style="background-color: {{ $category->color }}">{{ $category->name }}</span></h5>
                            @endforeach
                        </div>
                    </div>
                    <div class="ms-xxl-5 col-12 col-xxl-3" id="colaboradores">
                        @foreach ($project->users as $user)
                            <img src="{{ asset($user->image) }}" alt="{{ $user->name }}" class="img-fluid" width="100">
                        @endforeach
                    </div>
                </div>
            </section>
        </div>
    @endforeach
@endsection
