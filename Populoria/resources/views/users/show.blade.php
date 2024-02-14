@extends('layouts.layout')

@section('title', 'Home')

@section('links')
    {{-- En esta seccion se ponen las etiquetas para css y para js --}}
    <link href="{{ asset('styles/style.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="container mt-5">
        <div class="row">
            <!-- Contenedor de usuario -->
            <div class="col-md-5 contenedor" id="user-container">
                <section>
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ asset($user->image) }}" class="img-fluid">
                        </div>
                        <div class="col-md-6">
                            <h3>{{ $user->name }}</h3>
                            <p>{{ $user->about }}</p>
                        </div>
                    </div>
                </section>
            </div>



            <!-- Contenedor de tecnologías -->
            <div class="col-md-5 contenedor align-items-center" id="tech-container" style="margin-left: auto;">
                <section>
                    <h3 class="mb-4">Tus tecnologías</h3>
                    <div class="row justify-content-center mt-4">
                        @foreach ($user->categories as $category)
                            <div class="col-md-6">
                                <span style="background-color: {{ $category->color }}"
                                    class="badge d-flex align-items-center justify-content-center mb-2">{{ $category->name }}</span>
                            </div>
                        @endforeach
                    </div>
                </section>
            </div>
        </div>
    </div>
    </div>



    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="contenedor">
                    <h3>Tus proyectos</h3>
                    @foreach ($user->projects as $project)
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h4>{{ $project->name }}: Breve descripción del proyecto</h4>
                            </div>
                            <div class="col-md-4 text-end">
                                <span
                                    class="badge-progreso d-flex align-items-center justify-content-center mb-2 mr-2">{{ $project->progress }}</span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>


    {{-- Esta sección yo la movería a proyectos porque va a ser mucho más fácil todo --}}
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
                                <li><strong>NombreUsuario (Toroviejo):</strong> Sed do eiusmod tempor incididunt ut labore
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
    </section>

@endsection
