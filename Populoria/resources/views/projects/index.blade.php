@extends('layouts.layout')

@section('title', 'Proyectos')

@section('links')
    <link href="{{ asset('styles/style.css') }}" rel="stylesheet">
    <script defer src="{{ asset('js/editCategories.js') }}"> </script>
@endsection

@section('content')

<div class="row justify-content-center align-items-center g-2 text-center">
    <div class="col-md-6 contenedor">
        <div class="w-100 mx-auto bg-color-gray mb-5 py-3">
            <form action="{{ route('projects.filter') }}" method="POST">
                @csrf
                <div class="w-100 mx-auto bg-color-gray mb-5 py-3">
                    <h1 class="">Filtro de categorias</h1>
                    <div>
                        <input type="hidden" name="selected_categories" id="selected_categories">
                        @foreach ($categories as $category)
                            @php
                                $badgeColor = '#929292';
                            @endphp
                            <span class="badge rounded-pill mb-3 category" style="background-color: {{ $badgeColor }}" data-category-id="{{ $category->id }}" data-color="{{ $category->color }}" data-selected="unselected">{{ $category->name }}</span>
                        @endforeach
                    </div>
                    <button type="submit">Filtrar</button>
            </form>
            <form action="{{ route('projects.index') }}" method="GET">
                <button type="submit">Reiniciar parametros</button>
            </form>
               </div>
        </div>
    </div>
</div>
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
