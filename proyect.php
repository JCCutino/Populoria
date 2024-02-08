<!doctype html>
<html lang="es" class="h-100">

<head>
    <title>Proyecto</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <script defer src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles/style.css">

    <link rel="stylesheet" href="styles/style.css">

    <link rel="shortcut icon" href="image/Populoria.svg" type="image/x-icon">
</head>

<body class="h-100">
    <?php @include("header.php"); ?>
    <main class="h-100">
        <article class="d-flex flex-column proyect-article h-75">
            <section class="d-flex justify-content-between align-content-center mt-5 h-50">
                <div class="gallery d-flex flex-column justify-content-center align-content-center w-25 mx-5 bg-color-gray">
                    <img src="image/Populoria.png" alt="" class="s-main-display">
                    <div class="d-flex images">
                        <img src="image/Populoria.png" alt="" class="s-other-display">
                        <img src="image/Populoria.png" alt="" class="s-other-display">
                        <img src="image/Populoria.png" alt="" class="s-other-display">
                    </div>
                </div>
                <div class="title w-75 mx-5 bg-color-gray">
                    <div>
                        <h1>Título del proyecto</h1>
                        <p>Descripción del proyecto...</p>
                    </div>
                    <a href=""><button class="badge rounded-pill bg-success">Solicitar</button></a>
                </div>
            </section>
            <section class="d-flex justify-content-between mt-2 h-50">
                <div class="lookingfor w-75 mx-5 bg-color-gray">
                    <h1>Estamos buscando...</h1>
                    <div>
                        <span class="badge rounded-pill bg-success">Don kamarón</span>
                        <span class="badge rounded-pill bg-success">Ingeniero</span>
                        <span class="badge rounded-pill bg-success">Diseñador</span>
                        <span class="badge rounded-pill bg-success">Luis Verga</span>
                    </div>
                </div>
                <div class="collab w-25 mx-5 bg-color-gray">
                    <h1>Colaboradores</h1>
                    <div>
                        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
                        </svg>
                        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
                        </svg>
                        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
                        </svg>
                    </div>
                </div>
            </section>
        </article>

    </main>


</body>

</html>