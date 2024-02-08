<!doctype html>
<html lang="en">
    <head>
        <title></title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />

        <link rel="stylesheet" href="cssLuis/luis.css">
    </head>

    <body class="bodyCrear">
        <header>
            <?php @include("header.php"); ?>
        </header>
        <main>
            <section class="align-items-center d-flex justify-content-center mt-5">
                <div class="text-center justify-content-center">
                    <div class="d-flex align-items-center ms-5">
                        <img src="fotos/icono-ventilacion.webp" alt="Icono de Ventilación" id="fotoLogo" class="ps-5">                   
                        <h3 class="ps-3">POPULORIA</h3>
                    </div>
                    <div class="container mt-5 p-5" id="creacion">
                        <div>
                            <h4 class="mb-4">Crear un nuevo proyecto</h4>
                            <form action="/procesar_formulario" method="post" enctype="multipart/form-data">
                                <!-- Campo para nombre -->
                                <div class="row form-group">
                                    <div class="col-6 d-block">
                                        <label for="nombre" >Nombre del Proyecto:</label>
                                        <input type="text" id="nombre" name="nombre" class="form-control" required>
                                    </div>
                                
                                    <div class="col-6 d-block">
                                        <label for="tecnologias">Tecnologías Utilizadas:</label>
                                        <input type="text" id="tecnologias" name="tecnologias" class="form-control" required>
                                    </div>
                                </div>
                                <!-- Campo para descripción -->
                                <div class="row">
                                    <div class="col-6">
                                        <label for="descripcion">Descripción:</label>
                                        <textarea id="descripcion" name="descripcion" class="form-control" rows="2" required></textarea>
                                    </div>
                                    <div class="col-6">
                                        <label for="imagen">Subir Imagen:</label>
                                        <input type="file" id="imagen" name="imagen" accept="image/*" class="form-control" required>
                                    </div>
                                </div>
                                <!-- Botón de enviar -->
                                <input class="mt-5 btn crearProyecto" type="submit" value="Publicar">
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        





        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
