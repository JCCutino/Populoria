@extends('layouts.layout')

@section('title', 'Crear proyecto')

@section('links')
    {{-- En esta seccion se ponen las etiquetas para css y para js --}}
    <link href="{{ asset('styles/luis.css') }}" rel="stylesheet">
@endsection

@section('content')
    <section class="align-items-center d-flex justify-content-center mt-5">
        <div class="text-center justify-content-center">
            <div class="container mt-5 p-5" id="creacion">
                <div>
                    <h4 class="mb-4">Crear un nuevo proyecto</h4>
                    <form action="/procesar_formulario" method="post" enctype="multipart/form-data">
                        <!-- Campo para nombre -->
                        <div class="row form-group">
                            <div class="col-6 d-block">
                                <label for="nombre">Nombre del Proyecto:</label>
                                <input type="text" id="nombre" name="nombre" class="form-control" required>
                            </div>

                            <div class="col-6 d-block">
                                <label for="tecnologias">Tecnologías Utilizadas:</label>
                                <input type="text" id="tecnologias" name="tecnologias" class="form-control" required>
                            </div>
                        </div>
                        <!-- Campo para descripción -->
                        <div class="row">
                            <div class="col-6">
                                <label for="descripcion">Descripción:</label>
                                <textarea id="descripcion" name="descripcion" class="form-control" rows="2" required></textarea>
                            </div>
                            <div class="col-6">
                                <label for="imagen">Subir Imagen:</label>
                                <input type="file" id="imagen" name="imagen" accept="image/*" class="form-control"
                                    required>
                            </div>
                        </div>
                        <!-- Botón de enviar -->
                        <input class="mt-5 btn crearProyecto" type="submit" value="Publicar">
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
