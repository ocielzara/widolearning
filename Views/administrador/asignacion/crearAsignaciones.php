<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear</title>
    <link rel="icon" type="image/png" sizes="32x32" href="public/images/home/iconWido.png">
    <link rel="icon" type="image/png" sizes="16x16" href="public/images/home/iconWido.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="public/styles/tailwind.css">
    
</head>

  <body>
    <main>
      <section class="section-crearAsignacion">
        <div class="form-container-crearAsignacion">
          <form id="formAsignacion" method="POST">
            <div class="form-group-crearAsignacion">
              <label class="label-crearAsignacion" for="mentor">Selecciona un Mentor:</label>
              <select class="select-crearAsignacion" id="mentor" name="mentor">
                <!-- Las opciones se llenarán dinámicamente -->
              </select>
            </div>

            <div class="form-group-crearAsignacion">
              <label class="label-crearAsignacion" for="curso">Selecciona un Curso:</label>
              <select class="select-crearAsignacion" id="curso" name="curso">
                <!-- Las opciones se llenarán dinámicamente -->
              </select>
            </div>

            <div class="form-group-crearAsignacion">
              <button class="btn btn-primary" type="submit">Registrar</button>
            </div>
          </form>
        </div>

        <!-- Tu script JS -->
        <script src="public/JS/swiper-bundle.min.js"></script>
        <script src="public/JS/script.js"></script>
        <script src="public/JS/API.js"></script>
      </section>
    </main>
  </body>
</html>
