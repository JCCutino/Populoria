<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Populoria</title>

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
                            <div class="col-md-6 mt-5">
                                <a href="registro.php"> <button type="button"
                                        class="btn btn-primary  btn-block">Registro</button></a>
                            </div>
                            <div class="col-md-6 mt-5  ">
                                <a href="login.php"> <button type="button"
                                        class="btn btn-secondary  btn-block">Login</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
