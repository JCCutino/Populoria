<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Populoria</title>

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
    <link href="{{ asset('styles/style.css') }}" rel="stylesheet">
    <script defer src="{{ asset('js/app.js') }}"></script>
</head>

<body id="foto">
    <main>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="logo">
                        <img src="{{ asset('images/populoria.svg') }}" alt="Logo de Populoria">
                        <h1>POPULORIA</h1>
                        <div class="row">
                            <div class="col-md-4 mt-5">
                                <a href="registro.php"> <button type="button"
                                        class="btn btn-primary  btn-block">Registro</button></a>
                            </div>
                            <div class="col-md-4 mt-5">
                                <a href="{{route("home")}}"> <button type="button"
                                        class="btn btn-success  btn-block">Home</button></a>
                            </div>
                            <div class="col-md-4 mt-5  ">
                                <a href="login.php"> <button type="button"
                                        class="btn btn-secondary  btn-block">Login</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
                    <li class="badge">{{ $user->email }}</li>
                    <img class="img-fluid w-25" src="{{ asset($user->image) }}" alt="{{ $user->name }}">
                    <h4 class="text-danger">Categorías del usuario</h4>
                    @foreach ($user->categories as $category)
                        <li class="badge" style="background-color: {{ $category->color }}">{{ $category->name }}</li>
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
                        <p class="bg-success rounded px-2 my-2">{{ $project->progress }}</p>
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
                        <li class="badge">Nombre del emisor: {{ User::find($comment->user_id)->name }} (no la tortuga
                            ninja)</li>
                    @endforeach
                    <hr>
                @endforeach
            </div>
        </div>
    </main>
</body>

</html>
