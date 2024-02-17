@extends("layouts.layout")

@section("title", "Template")

@section("links")
<link href="{{ asset('styles/style.css') }}" rel="stylesheet">
@endsection

@section("content")

<div class="text-white">


    <h1>Datos de prueba para comprobar que funcionan los seeders</h1>

    @php
        use App\Models\Category;
        use App\Models\Project;
        use App\Models\User;
        $categories = Category::all();
        $users = User::all();
        $projects = Project::all();
    @endphp

    <ul>
        <h3>Categorias</h3>

        @foreach ($categories as $category)
            <li class="badge" style="background-color: {{ $category->color }}">{{ $category->name }}</li>
            <hr>
        @endforeach

    </ul>

    <ul>
        <h3>Usuarios</h3>

        @foreach ($users as $user)
            <li class="badge">{{ $user->name }}</li>
            <li class="badge">{{ $user->about }}</li>
            <li class="badge">{{ $user->email }}</li>
            <img class="img-fluid w-25" src="{{ asset($user->image) }}" alt="{{ $user->name }}">

            <h4 class="text-danger">Categorías del usuario</h4>
            @foreach ($user->categories as $category)
                <li class="badge" style="background-color: {{ $category->color }}">{{ $category->name }}
                </li>
            @endforeach
            <h4 class="text-danger">Proyectos del usuario</h4>
            @foreach ($user->projects as $project)
                <div class="text-center w-25">
                    <h5 class="bg-success rounded px-2 my-2">{{ $project->name }}</h5>
                    <p class="bg-success rounded px-2 my-2">{{ $project->description }}</p>
                    <p class="bg-success rounded px-2 my-2">{{ $project->looking }}</p>
                    <p class="{{ $project->progress }} rounded px-2 my-2">{{ $project->progress }}</p>
                </div>
            @endforeach
            <hr>
        @endforeach
    </ul>

    <div class="mx-5">

        <h3>Proyectos</h3>

        @foreach ($projects as $project)
            <div class="text-center w-25">
                <h5 class="bg-success rounded px-2 my-2">{{ $project->name }}</h5>
                <p class="bg-success rounded px-2 my-2">{{ $project->description }}</p>
                <p class="bg-success rounded px-2 my-2">{{ $project->looking }}</p>
                <p class="{{ $project->progress }} rounded px-2 my-2">{{ $project->progress }}</p>
            </div>
            <h4 class="text-danger">Imágenes dentro del proyecto</h4>

            @foreach ($project->images as $image)
                <img src="{{ $image->url }}" alt="{{ $image->name }}">
            @endforeach

            <h4 class="text-danger">Categorias dentro del proyecto</h4>

            @foreach ($project->categories as $category)
                <p class="badge" style="background-color: {{ $category->color }}">{{ $category->name }}</p>
            @endforeach

            <h4 class="text-danger">Usuarios dentro del proyecto</h4>

            @foreach ($project->users as $user)
                <p class="badge">{{ $user->name }}</p>
                <p class="badge">{{ $user->email }}</p>
                <img class="img-fluid w-25" src="{{ asset($user->image) }}" alt="{{ $user->name }}">
            @endforeach

            <h4 class="text-danger">Mensajes dentro del proyecto</h4>

            @foreach ($project->comments as $comment)
                <li class="badge">{{ $comment->text }}</li>
                <li class="badge">Nombre del emisor: {{ $comment->user->name }} (no la tortuga
                    ninja)</li>
            @endforeach
            <hr>
        @endforeach
    </div>
</di
@endsection
