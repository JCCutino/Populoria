@extends('layouts.layout')

@section('title', 'Proyecto')

@section('links')
    {{-- En esta seccion se ponen las etiquetas para css y para js --}}
    <link href="{{ asset('styles/style.css') }}" rel="stylesheet">
@endsection

@php
    use App\Models\User;
    $userId = Auth::user()->id;
@endphp

@section('content')

<article class="d-flex flex-column proyect-article h-75 mt-4">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <!-- Primer contenedor -->
            <div class="col-lg-4 col-md-6 mx-auto">
                <div class="d-flex">
                    <div class="gallery mx-auto bg-color-gray d-flex flex-column my-3 contenedor">
                        <img src="{{ asset($project->images->first()->url) }}" alt="{{ $project->images->first()->name }}"
                            class="img-project img-fluid">
                        <div class="d-flex flex-wrap images">
                            @foreach ($project->images as $image)
                                <img src="{{ asset($image->url) }}" alt="{{ $image->name }}"
                                    class="s-other-display img-fluid">
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row justify-content-center"> <!-- Centrar el contenedor -->
            <div class="col-12 col-lg-4 contenedor h-50"> <!-- Ajustado a col-12 y col-lg-6 para ocupar el 50% del ancho en pantallas grandes -->
                <div class="w-100 mx-auto mb-5 py-3"> <!-- Ancho al 100% y centrado horizontalmente -->
                    <div class="d-flex justify-content-center">
                        <div class="title d-flex flex-column justify-content-between ">
                            <div>
                                <h1 class="mb-3 mx-2">{{ $project->name }}</h1> <!-- Añadir un margen inferior -->
                                <p class="mb-4 mx-2">{{ $project->description }}</p> <!-- Añadir un margen inferior -->
                            </div>
                            {{-- Cambiar por el id del usuario autenticado --}}
                            @if ($project->users->first()->id != 1)
                                <a class="no-cursor" href="#"><button
                                        class="btn btn-success mb-3">Solicitar</button></a>
                            @elseif($project->users->first()->id == 1)
                                <a
                                    href="{{ route('projects.edit', $project->id) }}"><button class="btn btn-success mb-3">Ver solicitudes</button></a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="container-fluid">
        <div class="row justify-content-center"> <!-- Centrar el contenedor -->
            <div class="lookingfor col-12 col-lg-4 contenedor h-50"> <!-- Ajustado a col-12 y col-lg-6 para ocupar el 50% del ancho en pantallas grandes -->
                <div class="w-100 mx-auto bg-color-gray mb-5 py-3"> <!-- Ancho al 100% y centrado horizontalmente -->
                    <h1>Necesitamos</h1>
                    <p class="mb-2 p-4">{{ $project->looking }}</p>
                    <h1 class="mt-4">Tecnologías Requeridas</h1>
                    <div>
                        @foreach ($project->categories as $category)
                            <span class="badge rounded-pill mb-3" style="background-color: {{ $category->color }}">{{ $category->name }}</span>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-fluid">
        <div class="row justify-content-center"> 
                <div class="collab col-lg-4 col-md-12">
                    <div class="w-100 mx-auto bg-color-gray my-5 py-3 contenedor">
                        <h1>Colaboradores</h1>
                        <div class="row">
                            @foreach ($project->users as $user)
                                @if ($user->pivot->status == 'accepted' || $user->pivot->status == 'owner')
                                    <div class="col-md-6 col-6">
                                        <a href="{{ route('users.show', $user->id) }}">
                                            <img class="colaborators img-fluid w-100" src="{{ asset($user->image) }}"
                                                alt="{{ $user->name }}">
                                        </a>
                                        <p>{{ $user->name }}</p>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="contenedor">
                        <!-- Sección de comentarios -->
                        <section class="mt-5">
                            <!-- Mostrar comentarios -->
                            <div class="comentarios-container mb-4">
                                <h4>Comentarios de otros usarios:</h4>
                                <ul class="list-unstyled">
                                    @foreach ($project->comments as $comment)
                                        <li><strong>{{ User::find($comment->user_id)->name }} :</strong>
                                            {{ $comment->text }}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                            <!-- Área de comentario -->
                            <div class="text-center">
                                <form action="{{ route('save.commentProject') }}" method="POST">
                                    @csrf
                                    <textarea name="comment" rows="6" cols="50" placeholder="Participa en el foro" required></textarea>
                                    <input name="user_id" value="1" hidden>
                                    <input name="project_id" value="{{ $project->id }}" hidden>
                                    <br>
                                    <button class="btn-form badge mt-3 mb-3" type="submit">Enviar</button>
                                </form>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </article>


@endsection
