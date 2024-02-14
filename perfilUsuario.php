<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <script defer src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="styles/style.css">
</head>

<body>
  <?php @include("header.php"); ?>

  <main>
    <div class="container mt-5">
      <div class="row">
        <!-- Contenedor de usuario -->
        <div class="col-md-5 contenedor" id="user-container">
          <section>
            <div class="row">
              <div class="col-md-6">
                <img src="image/Don_Kamaron.png" class="img-fluid">
              </div>
              <div class="col-md-6">
                <h3>Don Kamaron</h3>
                <p>En don Kamaron tenemos el mejor lugar para comer en familia o en pareja, los mejores mariscos solo los encuentras aquí en el restaurante don Kamaron</p>
              </div>
            </div>
          </section>
        </div>
        <!-- Contenedor de tecnologías -->
        <div class="col-md-5 contenedor align-items-center" id="tech-container" style="margin-left: auto;">
          <section>
            <h3 class="mb-4">Tus tecnologías</h3>
            <div class="row justify-content-center mt-4">
              <div class="col-md-6">
                <span class="badge d-flex align-items-center justify-content-center mb-2">HTML</span>
              </div>
              <div class="col-md-6">
                <span class="badge d-flex align-items-center justify-content-center mb-2">CSS</span>
              </div>
              <div class="col-md-6 mt-3">
                <span class="badge d-flex align-items-center justify-content-center mb-2">PHP</span>
              </div>
              <div class="col-md-6 mt-3">
                <span class="badge d-flex align-items-center justify-content-center mb-2">JavaScript</span>
              </div>
            </div>
          </section>
        </div>


        </section>
      </div>
    </div>
    </div>



    <div class="container mt-5">
      <div class="row">
        <div class="col-md-12">
          <div class="contenedor">
            <h3>Tus proyectos</h3>
            <div class="row align-items-center">
              <div class="col-md-8">
                <h4>Proyecto 1: Breve descripción del proyecto</h4>
              </div>
              <div class="col-md-4 text-end">
                <span class="badge-progreso d-flex align-items-center justify-content-center mb-2 mr-2">Estado: En progreso</span>
              </div>
            </div>
            <div class="row align-items-center">
              <div class="col-md-8">
                <h4>Proyecto 2: Breve descripción del proyecto</h4>
              </div>
              <div class="col-md-4 text-end">
                <span class="badge-completado d-flex align-items-center justify-content-center mb-2 mr-2">Estado: Completado</span>
              </div>
            </div>
            <div class="row align-items-center">
              <div class="col-md-8">
                <h4>Proyecto 3: Breve descripción del proyecto</h4>
              </div>
              <div class="col-md-4 text-end">
                <span class="badge-cancelado d-flex align-items-center justify-content-center mb-2 mr-2">Estado: Cancelado</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



    <div class="container mt-5 mb-5">
      <div class="row">
        <div class="col-md-12">
          <div class="contenedor">
            <!-- Sección de comentarios -->
            <section class="mt-5">
              <h3>Sección de comentarios</h3>

              <!-- Mostrar comentarios -->
              <div class="comentarios-container mb-4">
                <h4>Comentarios de otros usarios:</h4>
                <ul class="list-unstyled">
                  <li><strong>NombreUsuario (Juancc12):</strong> Lorem ipsum dolor sit amet.</li>
                  <li><strong>NombreUsuario (LuisYerga):</strong> Consectetur adipiscing elit.</li>
                  <li><strong>NombreUsuario (Toroviejo):</strong> Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                </ul>
              </div>

              <!-- Área de comentario -->
              <div class="text-center">
                <textarea name="comentarios" rows="6" cols="50" placeholder="Introduce un mensaje sobre este usuario" required></textarea>
                <br>
                <button class="btn-form badge mt-3 mb-3">Enviar</button>
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>
    </section>

  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>