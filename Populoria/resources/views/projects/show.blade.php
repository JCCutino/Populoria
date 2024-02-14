@extends('layouts.layout')

@section('title', 'Proyecto')

@section('links')
    {{-- En esta seccion se ponen las etiquetas para css y para js --}}
    <link href="{{ asset('styles/style.css') }}" rel="stylesheet">
@endsection

@section('content')
    <article class="d-flex flex-column proyect-article h-75">
        <section class="d-flex justify-content-between align-content-center mt-5 h-50">

            <div class="gallery d-flex flex-column justify-content-center align-content-center w-25 mx-5 bg-color-gray">
                <img src="{{ asset($project->images->first()->url) }}" alt="{{ $project->images->first()->name }}"
                    class="s-main-display">
                <div class="d-flex images">
                    @foreach ($project->images as $image)
                        <img src="{{ asset($image->url) }}" alt="{{ $image->name }}" class="s-other-display">
                    @endforeach
                </div>
            </div>

            <div class="title w-75 mx-5 bg-color-gray">
                <div>
                    <h1>{{ $project->name }}</h1>
                    <p>{{ $project->description }}</p>
                </div>
                <a href=""><button class="badge rounded-pill bg-success">Solicitar</button></a>
            </div>
        </section>
        <section class="d-flex justify-content-between mt-2 h-50">
            <div class="lookingfor w-75 mx-5 bg-color-gray">
                <h1>Estamos buscando...</h1>
                <p class="">{{ $project->looking }}</p>
                <div>
                    @foreach ($project->categories as $category)
                        <span class="badge rounded-pill"
                            style="background-color: {{ $category->color }}">{{ $category->name }}</span>
                    @endforeach
                </div>
            </div>
            <div class="collab w-25 mx-5 bg-color-gray">

                <h1>Colaboradores</h1>
                <div>
                    @foreach ($project->users as $user)
                        <div>
                            <img class="img-fluid w-25" src="{{ asset($user->image) }}" alt="{{ $user->name }}">
                            <p>{{ $user->name }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </article>

@endsection
