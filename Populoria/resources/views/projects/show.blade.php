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
<article class="d-flex flex-column proyect-article h-75">
    <div class="container-fluid">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-lg-4 col-md-6 mx-auto">
                <div class="d-flex ">
                    <div class="gallery mx-auto bg-color-gray d-flex flex-column my-3 contenedor">
                        <img src="{{ asset($project->images->first()->url) }}" alt="{{ $project->images->first()->name }}" class="img-project img-fluid">
                        <div class="d-flex flex-wrap images">
                            @foreach ($project->images as $image)
                            <img src="{{ asset($image->url) }}" alt="{{ $image->name }}" class="s-other-display img-fluid">
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
                            <p class="mb-4 mx-2">{{ $project->description }}</p> <!-- Añadir un margen inferior -->
                        </div>
                        <a class="no-cursor" href="#"><button class="btn btn-success mb-3">Solicitar</button></a>
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
                            <h1 class="">Descripción</h1>
                            <p class="mb-2 p-4">{{ $project->description }}</p>
                        </div>
                        <div class="col-md-6 ">
                            <h1 class="">Tecnologías Requeridas</h1>
                            <div>
                                @foreach ($project->categories as $category)
                                <span class="badge rounded-pill mb-3" style="background-color: {{ $category->color }}">{{ $category->name }}</span>
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
                        @php $count = 0 @endphp
                        @foreach ($project->users as $user)
                        <div class="col-md-6 col-6">
                            <a href="{{ route('users.show', $user->id) }}">
                                <img class="colaborators img-fluid w-100" src="{{ asset($user->image) }}" alt="{{ $user->name }}">
                            </a>
                            <p>{{ $user->name }}</p>
                        </div>
                        @php $count++ @endphp
                        @if($count % 2 == 0 || $loop->last)
                    </div>
                    @if (!$loop->last)
                    <div class="row">
                        @endif
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
                            <textarea name="comentarios" rows="6" cols="50" placeholder="Introduce un mensaje sobre este usuario" required></textarea>
                            <br>
                            <button class="btn-form badge mt-3 mb-3">Enviar</button>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</article>

@endsection