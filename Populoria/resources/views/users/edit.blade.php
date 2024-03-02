@extends('layouts.layout')

@section('title', 'Home')

@section('links')
{{-- En esta seccion se ponen las etiquetas para css y para js --}}
<link href="{{ asset('styles/style.css') }}" rel="stylesheet">
<link href="{{ asset('styles/database.css') }}" rel="stylesheet">
<script defer src="{{ asset('js/editCategories.js') }}"> </script>

@endsection

@php
use Illuminate\Support\Str;
@endphp

@section('content')
<div class="container mt-5">
    <form method="post" action="{{ route('users.editUser') }}">
        @csrf

        <div class="row">
            <!-- Contenedor de usuario -->
            <div class="col-md-5 contenedor" id="user-container">
                <section>
                    <div class="row">
                        <div class="col-md-6 d-flex justify-content-center my-4">
                            <img src="{{ asset($user->image) }}" class="img-fluid img-user mt-3">
                        </div>
                        <div class="col-md-6">
                            <h3 class="my-3">Modificar Nombre</h3>
                            <textarea name="name" rows="1" cols="30" class="mx-2">{{ $user->name }}</textarea>

                            <h3 class="my-3">Modificar About me</h3>
                            <textarea name="about" rows="1" cols="30" class="mx-2">{{ $user->about }}</textarea>

                        </div>
                    </div>
                </section>
            </div>

            <!-- Contenedor de tecnologías -->
            <div class="col-md-5 contenedor align-items-center" id="tech-container" style="margin-left: auto;">
                <section>
                    <h3 class="mb-4 mt-3">Tus tecnologías</h3>
                    <div class="row justify-content-center mt-4">
                        <div>
                            <input type="hidden" id="idUser" name="idUser" value="{{$user->id}}">
                            <input type="hidden" name="selected_categories" id="selected_categories">
                            @foreach ($categories as $category)
                            @php
                            $userHasCategory = $user->categories->contains('id', $category->id);
                            $badgeColor = $userHasCategory ? $category->color : '#929292';
                            @endphp
                            <span class="badge rounded-pill mb-3 category" style="background-color: {{ $badgeColor }}" data-category-id="{{ $category->id }}" data-color="{{ $category->color }}" data-selected="{{ $userHasCategory ? 'selected' : 'unselected' }}">{{ $category->name }}</span>
                            @endforeach

                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-success">Guardar cambios</button>
                        </div>
                    </div>
                </section>
            </div>
        </div>


    </form>
</div>




<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="contenedor">
                <h3 class="my-3">Tus proyectos</h3>
                @foreach ($user->projects as $project)
                @if ($project->pivot->status != 'pending')
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <a class="text-primary" href="{{ route('projects.show', $project->id) }}">
                            <h4>{{ $project->name }}: {{ str::limit($project->description, 30) }}</h4>
                        </a>
                    </div>

                    <div class="col-md-2 d-flex">
                        @if ($project->pivot->status === 'owner')
                        <a href="{{ route('projects.manage', $project->id) }}">
                            <button class="btn btn-success mb-3">Ver solicitudes</button>
                        </a>
                        <a href="{{ route('projects.edit', $project->id) }}"><button class="btn btn-primary">Editar</button></a>
                        @endif
                    </div>

                    <div class="col-md-4 text-end">
                        <span class="{{ $project->progress }} d-flex align-items-center justify-content-center mb-2 mr-2">{{ $project->progress }}</span>
                    </div>
                </div>
                @endif
                @endforeach
                <hr>
                <h3 class="my-3">Proyectos pendientes de aprobación</h3>
                @foreach ($user->projects as $project)
                @if ($project->pivot->status === 'pending')
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <a class="text-primary" href="{{ route('projects.show', $project->id) }}">
                            <h4>{{ $project->name }}: {{ str::limit($project->description, 30) }}</h4>
                        </a>
                    </div>

                    <div class="col-md-2">

                    </div>

                    <div class="col-md-4 text-end">
                        <span class="{{ $project->progress }} d-flex align-items-center justify-content-center mb-2 mr-2">{{ $project->progress }}</span>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </div>
</div>


{{-- Esta sección yo la movería a proyectos porque va a ser mucho más fácil todo --}}
</section>

@endsection