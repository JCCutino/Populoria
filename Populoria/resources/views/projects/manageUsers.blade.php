@extends('layouts.layout')

@section('title', 'Gestionar proyecto')

@section('links')
    {{-- En esta seccion se ponen los links para css y para js --}}
    <link href="{{ asset('styles/style.css') }}" rel="stylesheet">
    <link href="{{ asset('styles/database.css') }}" rel="stylesheet">
    <script defer src="{{ asset('js/manageProject.js') }}"></script>
@endsection

@section('content')

    <article class="d-flex w-100 h-100 proyect-article">
        <section class="requests w-50 h-75 bg-color-gray mt-5 mx-5 d-flex flex-column gap-5">
            <h1 class="mt-3 appliances">Solicitudes</h1>
            @foreach ($project->users as $user)
                @if ($user->pivot->status == 'pending')
                    <div class="d-flex w-100 justify-content-around align-items-center">
                        <img class="image-fluid w-25" src="{{ asset($user->image) }}" alt="{{ $user->name }}">
                        <p>{{ $user->name }}</p>
                        <button type="button" class="badge rounded-pill bg-success h-100" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            👁️
                        </button>
                    </div>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Perfil de {{ $user->name }}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <a href="{{ route('users.show', $user->id) }}"><img class="img-fluid w-25 userImage rounded-circle" src="{{ asset($user->image) }}" alt="{{ $user->name }}"></a>
                                    <div>
                                        <li class="badge">{{ $user->name }}</li>
                                        <li class="badge">{{ $user->about }}</li>
                                        <li class="badge">{{ $user->email }}</li>
                                    </div>

                                    <h4 class="text-danger">Categorías del usuario</h4>
                                    @foreach ($user->categories as $category)
                                        <li class="badge" style="background-color: {{ $category->color }}">
                                            {{ $category->name }}
                                        </li>
                                    @endforeach
                                    <h4 class="text-danger">Proyectos del usuario</h4>
                                    @foreach ($user->projects as $project)
                                        @if ($project->pivot->status != 'pending')
                                            <div class="text-center">
                                                <h5 class="bg-success rounded px-2 my-2">{{ $project->name }}</h5>
                                                <p class="bg-success rounded px-2 my-2">{{ $project->description }}</p>
                                                <p class="bg-success rounded px-2 my-2">{{ $project->looking }}</p>
                                                <p class="{{ $project->progress }} rounded px-2 my-2">
                                                    {{ $project->progress }}</p>
                                            </div>
                                        @endif
                                    @endforeach
                                    <hr>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
            <p hidden>No hay ninguna solicitud pendiente</p>
        </section>
        <section class="w-50 h-75 d-flex flex-column gap-5 mt-5 mx-5">
            <div class="proyect-title-admin h-50 bg-color-gray">
                <h1 class="mt-3"> {{ $project->name }}</h1>
                <p>{{ $project->description }}</p>
            </div>
            <div class="proyect-collab-admin h-50 bg-color-gray">
                <h1 class="mt-3">Colaboradores actuales</h1>
                @foreach ($project->users as $user)
                    <div>
                        @switch($user->pivot->status)
                            @case('owner')
                                <img class="img-fluid w-25" src="{{ asset($user->image) }}" alt="{{ $user->name }}">
                                <p class="">{{ $user->name }}</p>
                                <p class="badge bg-primary">Dueño</p>
                            @break

                            @case('accepted')
                                <img class="img-fluid w-25" src="{{ asset($user->image) }}" alt="{{ $user->name }}">
                                <p class="">{{ $user->name }}</p>
                                <p class="badge bg-success">Aceptado</p>
                            @break

                            @default
                        @endswitch
                    </div>
                @endforeach
            </div>
        </section>
    </article>
@endsection
