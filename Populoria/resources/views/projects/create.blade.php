@extends('layouts.layout')

@section('title', 'Crear proyecto')

@section('links')
    <link href="{{ asset('styles/style.css') }}" rel="stylesheet">
    <script defer src="{{ asset('js/createProject.js') }}"></script>
@endsection

@section('content')
    <section class="align-items-center d-flex justify-content-center mt-5">
        <div class="text-center justify-content-center contenedor">
            <div class="container mt-5 p-5" id="creacion">
                <div>
                    <h4 class="mb-4">Crear un nuevo proyecto</h4>
                    <form action="{{ route('projects.createNew') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="col-12 d-block">
                            <label for="name">Nombre del Proyecto:</label>
                            <input type="text" id="name" name="name" class="form-control" required>
                        </div>

                        <div class="col-12 d-block">
                            <label for="description">Descripción del proyecto:</label>
                            <input type="text" id="description" name="description" class="form-control" required>
                        </div>

                        <div class="col-12 d-block">
                            <label for="looking">Perfiles que busco:</label>
                            <input type="text" id="looking" name="looking" class="form-control" required>
                        </div>

                        <div class="tecnologies col-12">
                            <h5>Tecnologías</h5>
                            <div class="tecnologiesContainer">
                                @foreach ($categories as $category)
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="categories[]"
                                            value="{{ $category->id }}">
                                        <label class="form-check-label">{{ $category->name }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="row" id="imagesContainer">
                            <div class="col-6">
                                <label for="image">Subir Imagen:</label>
                                <input type="file" id="image" name="images[]" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-12 addPhoto">
                            <div class="btn btn-success mt-4" onclick="addPhoto()">Añadir otra foto</div>
                        </div>

                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                        <input class="mt-5 btn crearProyecto" type="submit" value="Publicar">
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
