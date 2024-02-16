@extends('layouts.layout')

@section('title', 'Gestionar proyecto')

@section('links')
    {{-- En esta seccion se ponen los links para css y para js --}}
    <link href="{{ asset('styles/style.css') }}" rel="stylesheet">
    <script defer src="{{ asset('js/editProject.js') }}"></script>
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
                        <button class="badge rounded-pill bg-success h-100">👁️</button>
                    </div>
                @endif
                <p hidden>No hay ninguna solicitud pendiente</p>
            @endforeach
        </section>
        <section class="w-50 h-75 d-flex flex-column gap-5 mt-5 mx-5">
            <div class="proyect-title-admin h-50 bg-color-gray">
                <h1 class="mt-3"> {{ $project->name }}</h1>
                <p>{{ $project->description }}</p>
            </div>
            <div class="proyect-collab-admin h-50 bg-color-gray">
                <h1 class="mt-3">Colaboradores actuales</h1>
                @foreach ($project->users as $user)
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
                @endforeach
            </div>
        </section>
    </article>
@endsection
