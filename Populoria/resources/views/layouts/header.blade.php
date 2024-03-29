<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="shortcut icon" href="{{ asset('images/Populoria.svg') }}" type="image/x-icon">

    {{-- Aqui está bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <script defer src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>

    {{-- Aquí están el css principal y el js principal --}}
    <link href="{{ asset('styles/header.css') }}" rel="stylesheet">
    @yield('links')
</head>

<body>
    <header class="p-3">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-around w-100">

                <a href="{{ route('projects.index') }}">Buscar proyectos</a>
                {{-- Esta sección la eliminaba del header y la debaja solo en el perfil --}}
                <a href="{{ route('projects.create') }}">Crear Proyecto</a>

                <a href="{{ route('home') }}"
                    class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none icon">
                    <img src="{{ asset('images/Populoria.svg') }}" alt="Populoria-Logo" class="img-fluid icon">
                </a>

                <a href="{{ route('users.show', Auth::user()->id) }}">Perfil</a>
                {{-- Este hay que cambiarlo también --}}
                <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                    @csrf
                    <a><button class="logOut">Cerrar sesión</button></a>
                </form>

            </div>
        </div>
    </header>
    <main>
