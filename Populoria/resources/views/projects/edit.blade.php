@extends('layouts.layout')

@section('title', 'Proyecto')

@section('links')
    {{-- En esta seccion se ponen las etiquetas para css y para js --}}
    <link href="{{ asset('styles/style.css') }}" rel="stylesheet">
@endsection

@php
    use App\Models\User;
@endphp

@section('content')
    <h1>EDITORIA</h1>
    <form method="post" action="">
        @csrf
        <article class="d-flex flex-column proyect-article h-75">
            <div class="container-fluid">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-lg-4 col-md-6 mx-auto">
                        <div class="d-flex ">
                            <div class="gallery mx-auto bg-color-gray d-flex flex-column my-3 contenedor">
                                <img src="{{ asset($project->images->first()->url) }}"
                                    alt="{{ $project->images->first()->name }}" class="img-project img-fluid">
                                <div class="d-flex flex-wrap images">
                                    @foreach ($project->images as $image)
                                        <img src="{{ asset($image->url) }}" alt="{{ $image->name }}"
                                            class="s-other-display img-fluid">
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8 col-md-6 mx-auto my-3">
                        <div class="d-flex justify-content-center">
                            <div class="title bg-color-gray d-flex flex-column justify-content-between contenedor">
                                <div class="">
                                    <h1 class="mb-3 mx-2">{{ $project->name }}</h1> <!-- Añadir un margen inferior -->
                                    <h4>Modificar descripción:</h4>
                                    <textarea name="description" rows="6" cols="50">{{ $project->description }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


            <div class="container-fluid">
                <div class="row d-flex align-items-center">
                    <div class="lookingfor col-lg-8 col-md-12 contenedor">
                        <div class="w-100 mx-auto bg-color-gray">
                            <div class="row">
                                <div class="col-md-6 py-3">
                                    <h1 class="">Necesitamos</h1>
                                    <h4>Modificar descripción de necesidades:</h4>
                                    <textarea name="looking" rows="6" cols="50"> {{ $project->looking }} </textarea>
                                </div>
                                <div class="col-md-6 ">
                                    <h1 class="">Tecnologías Requeridas</h1>
                                    <div>
                                        @foreach ($project->categories as $category)
                                            <span class="badge rounded-pill mb-3"
                                                style="background-color: {{ $category->color }}">{{ $category->name }}</span>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="collab col-lg-4 col-md-12">
                        <div class="w-100 mx-auto bg-color-gray my-5 py-3 contenedor">
                            <h1>Colaboradores</h1>
                            <div class="row">
                                @foreach ($project->users as $user)
                                    @if ($user->id != Auth::user()->id)
                                        <div class="col-md-6 col-6">
                                            <a href="{{ route('users.show', $user->id) }}">
                                                <img class="colaborators img-fluid w-100" src="{{ asset($user->image) }}"
                                                    alt="{{ $user->name }}">
                                            </a>
                                            <p>{{ $user->name }} <a class="btn btn-danger" href="">X</a></p>
                                        </div>
                                    @endif
                                @endforeach


                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </article>
        <div class="w-100 text-center mt-5">
            <button class="btn btn-success">Guardar cambios</button>
        </div>
       
    </form>
@endsection
