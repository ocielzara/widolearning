<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista asignaciones</title>
    <link rel="icon" type="image/png" sizes="32x32" href="public/images/home/iconWido.png">
    <link rel="icon" type="image/png" sizes="16x16" href="public/images/home/iconWido.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="public/styles/tailwind.css">
    
</head>

<body>

    <!--========== CONTENTS ==========-->
    <?php include 'Views/contenido/lateralAdministrador.php'; ?>
    
   <main>
        <section>
            <div class="container">
                <a href="index.php?c=Administradors&a=crearAsignacionVista&id=<?php echo $_SESSION['id_usuario']; ?>" class="btn btn-dark mb-3">Crear</a>
                <table class="table table-hover text-center">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Mentor</th>
                            <th scope="col">Curso</th>
                            <th scope="col">Accion</th>
                        </tr>
                    </thead>
                    <tbody id="contenedor-asignaciones">
                        <!-- Las filas se añadirán aquí por JavaScript -->
                    </tbody>
                </table>
            </div>

            <!-- Bootstrap -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

            <!-- Tu script JS -->
            <script src="public/JS/swiper-bundle.min.js"></script>
            <script src="public/JS/script.js"></script>
            <script src="public/JS/API.js"></script>
        </section>
    </main>
</body>

</html>
