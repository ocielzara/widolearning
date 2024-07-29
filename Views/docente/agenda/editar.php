<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="public/images/home/iconWido.jpeg">
    <link rel="icon" type="image/png" sizes="16x16" href="public/images/home/iconWido.jpeg">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Editar Disponibilidad</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        text-decoration: none;
        list-style: none;
    }

    body {
        font-family: "Poppins", sans-serif;
        font-weight: bold;
        /* Hace el tipo de letra más grueso */
        background-color: white;
        margin: 0;
        /* Elimina los márgenes por defecto */
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
    }

    .header {
        background-image: url(images/wido/create.png);
        background-position: center top;
        background-repeat: no-repeat;
        background-size: 100%, cover;
        /* Ajusta el tamaño de las imágenes de fondo */
        min-height: 120vh;
        position: relative;
        z-index: 1;
        /* Establece un valor de z-index para el header */
        display: flex;
        /* Utiliza flexbox para alinear verticalmente el contenido */
        align-items: center;
        /* Centra verticalmente el contenido */
        justify-content: center;
        /* Centra horizontalmente el contenido */
    }

    .menu.container img {
        width: 350px;
        /* Establece el ancho deseado para la imagen */
        height: auto;
        /* Hace que la altura se ajuste automáticamente para mantener la proporción original */
        position: absolute;
        /* Establece el posicionamiento absoluto para la imagen dentro del contenedor */
        top: 10%;
        /* Posiciona la parte superior de la imagen en el 50% del contenedor */
        left: 2%;
        /* Posiciona la parte izquierda de la imagen en el 50% del contenedor */
    }

    .container {
        max-width: 850px;
        /* Ajusta el ancho máximo según sea necesario */
        margin: 0 auto;
        /* Centra el contenedor horizontalmente */
        background-color: white;
        /* Color de fondo */
        border-radius: 15px;
        /* Bordes redondeados */
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
        /* Efecto de sombra */
        padding: 20px;
        /* Añade un poco de espacio alrededor del contenido */
        left: 50%;
        top: 70%;
        transform: translate(-50%, -50%);
        z-index: 2;
        /* Un valor mayor de z-index para que se superponga sobre el header */
        position: absolute;
    }

    .row {
        display: flex;
        flex-direction: column;
        gap: 10px;
        /* Espacio entre los elementos */
    }

    .col {
        flex: 1;
    }

    h3 {
        left: 35%;
        top: 35%;
        transform: translate(-50%, -50%);
        z-index: 2;
        /* Un valor mayor de z-index para que se superponga sobre el header */
        position: absolute;
        font-weight: bold;
        /* Hace el tipo de letra más grueso */
    }

    input[type="date"] {
        width: 20%;
        /* Ancho del input al 100% */
        border-radius: 15px;
        /* Bordes redondeados */
    }

    input[type="time"] {
        width: 20%;
        /* Ancho del input al 100% */
        border-radius: 15px;
        /* Bordes redondeados */
    }

    .btn {
        width: 20%;
        margin: auto;
        padding: .7rem;
        border-radius: 2rem;
        background-color: #2E3532;
        font-weight: 600;
        margin-top: 3rem;
        font-size: .8rem;
        cursor: pointer;
        color: white;
        margin-left: 50%;
        border-color: white;
        margin-right: auto;
        /* Alinea el botón a la derecha */
    }

    .btn:hover {
        background-color: #4F7CAC;
        color: #FEC400;
        border-color: #4F7CAC;
        /* Color de fondo azul más oscuro */
    }

    .formulario {
        width: 130%;
    }
</style>

<body>
    <?php
    $id_disponibilidad = $_GET['id'];
    ?>

    <h3>Editar disponibilidad</h3>
    <div class="container">
        <form action="index.php?c=Docentes&a=actualizarDisponibilidad" method="post">
            <div class="mb-3">
                <label for="dia_semana" class="form-label">Día de la semana:</label>
                <select class="form-select" id="nuevaFecha" name="nuevaFecha" required>
                    <option value="Lunes">Lunes</option>
                    <option value="Martes">Martes</option>
                    <option value="Miércoles">Miércoles</option>
                    <option value="Jueves">Jueves</option>
                    <option value="Viernes">Viernes</option>
                    <option value="Sábado">Sábado</option>
                    <option value="Domingo">Domingo</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="hora" class="form-label">Hora:</label>
                <select class="form-select" id="nuevaHora" name="nuevaHora" required>
                    <?php
                    $start_time = strtotime('07:00');
                    $end_time = strtotime('23:00');
                    for ($time = $start_time; $time <= $end_time; $time = strtotime('+30 minutes', $time)) {
                        echo '<option value="' . date('H:i', $time) . '">' . date('H:i', $time) . '</option>';
                    }
                    ?>
                </select>
            </div>
            <input type="hidden" name="id" value="<?php echo $id_disponibilidad; ?>">
            <div class="mb-3">
                <button type="submit" class="btn btn-success" name="submit">Guardar</button>
            </div>
        </form>
    </div>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

</body>

</html>