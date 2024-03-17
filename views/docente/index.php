<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<style>

</style>

<body>
    <?php include 'Views/contenido/lateralDocente.php'; ?>
    <!--========== CONTENTS ==========-->
    <main>
        <section>
            <?php include 'Views/contenido/header.php'; ?>
            <div class="container">
                <!-- Otras partes de tu código aquí -->
                <a href="index.php?c=Docentes&a=agendaIndex&id=<?php echo $idDocente; ?>" class="btn btn-dark mb-3">Crear</a>
                <table class="table table-hover text-center">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Hora</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($consulta as $fila): ?>
                            <tr>
                                <td>
                                    <?php echo $fila['id_disponibilidad']; ?>
                                </td>
                                <td>
                                    <?php echo $fila['fecha']; ?>
                                </td>
                                <td>
                                    <?php echo $fila['hora']; ?>
                                </td>
                                <td>
                                    <a href="index.php?c=Docentes&a=agendaEditar&id=<?php echo $fila['id_disponibilidad']; ?>" class="link-dark"><i
                                            class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                                    <a href="index.php?c=Docentes&a=agendaEliminar&id=<?php echo $fila['id_disponibilidad']; ?>" class="link-dark"><i
                                            class="fa-solid fa-trash fs-5"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <!-- Bootstrap -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
                crossorigin="anonymous"></script>

        </section>
    </main>

</body>

</html>