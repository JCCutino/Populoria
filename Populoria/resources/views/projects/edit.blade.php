@extends('layouts.layout')

@section('title', 'Proyecto')

@section('links')
{{-- En esta seccion se ponen las etiquetas para css y para js --}}
<link href="{{ asset('styles/style.css') }}" rel="stylesheet">
@endsection

@section('content')
<form method="post" action="{{ route('projects.editProject') }}">
    @csrf
    <article class="d-flex flex-column proyect-article h-75 mt-4">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 mx-auto">
                    <div class="d-flex">
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
            </div>
        </div>

        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 contenedor">
                    <div class="w-100 mx-auto mb-5 py-3">
                        <div class="d-flex justify-content-center">
                            <div class="title d-flex flex-column justify-content-between">
                                <div>
                                    <input type="hidden" id="idProject" name="idProject" value="{{$project->id}}">
                                    <h4 class="mx-2">Modificar título:</h4>
                                    <textarea name="title" rows="1" cols="30" class="mx-2">{{ $project->name }}</textarea>
                                    <h4 class="mx-2">Modificar descripción:</h4>
                                    <textarea name="description" rows="6" cols="50" class="mx-2">{{ $project->description }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="lookingfor col-lg-4 col-md-6 contenedor">
                    <div class="w-100 mx-auto bg-color-gray mb-5 py-3">
                        <h1>Necesitamos</h1>
                        <h4 class="mx-2">Modificar descripción de necesidades:</h4>
                        <textarea name="looking" rows="6" cols="50" class="mx-2">{{ $project->looking }}</textarea>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center align-items-center g-2">
                <div class="col-md-6 contenedor">
                    <div class="w-100 mx-auto bg-color-gray mb-5 py-3">
                        <h1 class="">Tecnologías Requeridas</h1>
                        <div>
                            <input type="hidden" name="selected_categories" id="selected_categories">
                            @foreach ($categories as $category)
                            <span class="badge rounded-pill mb-3 category" style="background-color: {{ $category->selected ? $category->color : '#929292' }}" data-category-id="{{ $category->id }}" data-color="{{ $category->color }}" data-selected="{{ $category->selected ? 'selected' : 'unselected' }}">{{ $category->name }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
<script>
    document.querySelectorAll('.category').forEach(function(category) {
        category.addEventListener('click', function() {
            if (this.getAttribute('data-selected') === 'selected') {
                this.setAttribute('data-selected', 'unselected');
                this.style.backgroundColor = '#929292';
            } else {
                this.setAttribute('data-selected', 'selected');
                this.style.backgroundColor = this.getAttribute('data-color');
            }

            let selectedCategories = [];
            document.querySelectorAll('.category').forEach(function(category) {
                if (category.getAttribute('data-selected') === 'selected') {
                    selectedCategories.push(category.getAttribute('data-category-id'));
                }
            });

            document.getElementById('selected_categories').value = JSON.stringify(selectedCategories);
        });
    });
</script>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="collab col-lg-4 col-md-6">
                    <div class="w-100 mx-auto bg-color-gray mt-3 py-3 contenedor">
                        <h1>Colaboradores</h1>
                        <div class="row">
                            @foreach ($project->users as $user)
                            @if ($user->id != Auth::user()->id)
                            <div class="col-md-6 col-6">
                                <a href="{{ route('users.show', $user->id) }}">
                                    <img class="colaborators img-fluid w-100" src="{{ asset($user->image) }}" alt="{{ $user->name }}">
                                </a>
                                <p>{{ $user->name }} <a class="btn btn-danger" href="#">X</a></p>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mb-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="w-100 text-center mt-5">
                        <button class="btn btn-success">Guardar cambios</button>
                    </div>
                </div>
            </div>
        </div>
    </article>
</form>
@endsection