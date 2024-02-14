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
                            <a href="{{ route('users.show', $user->id) }}"><img class="project img-fluid w-25"
                                    src="{{ asset($user->image) }}" alt="{{ $user->name }}"></a>
                            <p>{{ $user->name }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="contenedor">
                        <!-- Sección de comentarios -->
                        <section class="mt-5">
                            <h3>Sección de comentarios</h3>

                            <!-- Mostrar comentarios -->
                            <div class="comentarios-container mb-4">
                                <h4>Comentarios de otros usarios:</h4>
                                <ul class="list-unstyled">
                                    <li><strong>NombreUsuario (Juancc12):</strong> Lorem ipsum dolor sit amet.</li>
                                    <li><strong>NombreUsuario (LuisYerga):</strong> Consectetur adipiscing elit.</li>
                                    <li><strong>NombreUsuario (Toroviejo):</strong> Sed do eiusmod tempor incididunt ut
                                        labore
                                        et dolore magna aliqua.</li>
                                </ul>
                            </div>

                            <!-- Área de comentario -->
                            <div class="text-center">
                                <textarea name="comentarios" rows="6" cols="50" placeholder="Introduce un mensaje sobre este usuario"
                                    required></textarea>
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
