@extends('layouts.layout')

@section('title', 'Gestionar proyecto')

@section('links')
    {{-- En esta seccion se ponen los links para css y para js --}}
    <link href="{{ asset('styles/style.css') }}" rel="stylesheet">
@endsection

@section('content')

    <article class="d-flex w-100 h-100 proyect-article">
        <section class="requests w-50 h-75 bg-color-gray mt-5 mx-5 d-flex flex-column gap-5">
            <h1 class="mt-3">Solicitudes</h1>
            <div class="d-flex w-100 justify-content-around align-items-center">
                <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg"
                    role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777"
                        dy=".3em">140x140</text>
                </svg>
                <p>Nombre</p>
                <button class="badge rounded-pill bg-success h-100">👁️</button>
            </div>
            <div class="d-flex w-100 justify-content-around align-items-center">
                <svg class="bd-placeholder-img rounded-circle" width="140" height="140"
                    xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140"
                    preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777"
                        dy=".3em">140x140</text>
                </svg>
                <p>Nombre</p>
                <button class="badge rounded-pill bg-success h-100">👁️</button>
            </div>
            <div class="d-flex w-100 justify-content-around align-items-center">
                <svg class="bd-placeholder-img rounded-circle" width="140" height="140"
                    xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140"
                    preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777"
                        dy=".3em">140x140</text>
                </svg>
                <p>Nombre</p>
                <button class="badge rounded-pill bg-success h-100">👁️</button>
            </div>
            <div class="d-flex w-100 justify-content-around align-items-center">
                <svg class="bd-placeholder-img rounded-circle" width="140" height="140"
                    xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140"
                    preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777"
                        dy=".3em">140x140</text>
                </svg>
                <p>Nombre</p>
                <button class="badge rounded-pill bg-success h-100">👁️</button>
            </div>
        </section>
        <section class="w-50 h-75 d-flex flex-column gap-5 mt-5 mx-5">
            <div class="proyect-title-admin h-50 bg-color-gray">
                <h1 class="mt-3">Título del proyecto</h1>
                <p>Descripción del proyecto...</p>
            </div>
            <div class="proyect-collab-admin h-50 bg-color-gray">
                <h1 class="mt-3">Colaboradores actuales</h1>
                <div class="d-flex justify-content-center align-items-center h-100 gap-5">
                    <svg class="bd-placeholder-img rounded-circle" width="140" height="140"
                        xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777"
                            dy=".3em">140x140</text>
                    </svg>
                    <svg class="bd-placeholder-img rounded-circle" width="140" height="140"
                        xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777"
                            dy=".3em">140x140</text>
                    </svg>
                    <svg class="bd-placeholder-img rounded-circle" width="140" height="140"
                        xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777"
                            dy=".3em">140x140</text>
                    </svg>
                </div>
            </div>
        </section>
    </article>
@endsection
