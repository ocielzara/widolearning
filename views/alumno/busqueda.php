<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busqueda</title>

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
            background-color: white;
            margin: 0;
            /* Elimina los márgenes por defecto */
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .header {
            background-image: url(images/header-docentes.png);
            background-position: center top;
            background-repeat: no-repeat;
            background-size: 100%, cover;
            /* Ajusta el tamaño de las imágenes de fondo */
            min-height: 73vh;
            display: flex;
            align-items: center;
            position: relative;
        }

        .menu.container img {
            width: 400px;
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

        .custom-text {
            font-family: 'Arial', sans-serif;
            font-size: 24px;
            font-weight: bold;
            color: black;
            padding: 5px;
            margin-top: 0px;
        }

        #section1 {
            display: flex;
            height: 2px;
            color: black;
            border: 1px solid orange;
            box-sizing: border-box;
            margin-right: 65%;
            margin-top: 0px;
            box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.5);
        }

        /* Estilos del contenedor */
        .image-container {
            width: 600px;
            /* Ancho del contenedor */
            height: 630px;
            /* Altura del contenedor */
            border-radius: 20px;
            /* Bordes redondeados */
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.8);
            /* Sombra */
            overflow: hidden;
            /* Oculta el contenido que se desborda */
            margin: 3% auto;
            /* Centra enmedio de la pagina */
        }

        /* Estilos de la imagen */
        .image-container img {
            width: 100%;
            /* La imagen ocupa todo el ancho del contenedor */
            height: auto
                /* La imagen ocupa todo el alto del contenedor */
                object-fit: cover;
            /* La imagen se ajusta para cubrir el contenedor */
        }

        .section-1 {
            margin: 0% 30% auto;
            /* Centra enmedio de la pagina */
        }

        .contenedor-1 {
            background-color: #D7E3FF;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        p {
            font-family: 'Arial', sans-serif;
            font-size: 20px;
            font-weight: bold;
            color: black;
            padding: 5px;
            margin-top: 0px;
        }

        .formulario {
            margin: 0% 30% auto;
            /* Centra enmedio de la pagina */
        }

        /* Estilo para los campos input */
        input[type="date"],
        input[type="time"] {
            padding: 8px;
            /* Añade un poco de espacio interno */
            border: 1px solid #ccc;
            /* Añade un borde gris */
            border-radius: 4px;
            /* Añade esquinas redondeadas */
            font-size: 16px;
            /* Tamaño de fuente */
            width: 200px;
            /* Ancho del campo */
            margin-bottom: 10px;
            /* Espacio inferior entre campos */
            box-sizing: border-box;
            /* Incluye el padding y borde en el ancho */
        }

        /* Estilo para el contenedor de los campos */
        .campo {
            margin-bottom: 20px;
            /* Espacio inferior para separar los campos */
        }

        /* Estilo para la etiqueta */
        label {
            display: block;
            /* Muestra la etiqueta en una nueva línea */
            margin-bottom: 5px;
            /* Espacio inferior entre etiqueta y campo */
            font-weight: bold;
            /* Texto en negrita */
        }

        /* Estilo para el botón */
        .clase-muestra {
            border-radius: 20px;
            /* Bordes redondos */
            background-color: #007bff;
            /* Color de fondo azul */
            padding: 10px 20px;
            /* Espaciado interno */
            border: none;
            /* Sin borde */
            color: #ffffff;
            /* Color de letra blanco */
            font-size: 16px;
            /* Tamaño de fuente */
            cursor: pointer;
            /* Cursor al pasar por encima */
            transition: background-color 0.3s;
            /* Transición suave del color de fondo */
            margin: 0% 20% auto;
            /* Centra enmedio de la pagina */
            width: 60%;
        }

        /* Estilo cuando se pasa el cursor sobre el botón */
        .clase-muestra:hover {
            background-color: #0056b3;
            /* Cambia el color de fondo al pasar el cursor */
        }

        /* Estilo para el contenido dentro del botón */
        .clase-muestra span {
            pointer-events: none;
            /* Evita que el texto dentro del botón sea clickeable */
        }

        .download-link {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .download-link:hover {
            background-color: #0056b3;
        }
    </style>

</head>

<body>

    <header class="header">
        <div class="menu container">
            <img src="images/logo-aerobotlearning.png" alt="Descripción de la imagen" />
        </div>
    </header>
    <div class="image-container">
        <img src="<?php echo $fotoCurso; ?>" alt="Descripción de la imagen">
    </div>
    <br>
    <div class="contenedor-1">
        <div class="section-1">
            <p class="custom-text">Hola, haz elegido el curso:
                <?php echo $nombreCurso; ?>
            </p>
            <p class="custom-text">Visualizar PDF para mayor información:</p>
            <a class="download-link" href="<?php echo $pdfCurso; ?>" target="_blank">Abrir PDF</a>
        </div>

        <form class="formulario" action="index.php?c=usuarios&a=matchMaestro" method="post">
            <p class="custom-text">Elige el horario y el dia que deseas tomar tu clase muestra:</p>
            <div class="campo">
                <label for="fecha">Fecha:</label>
                <input type="date" id="fecha" name="fecha">
            </div>

            <div class="campo">
                <label for="hora">Hora:</label>
                <input type="time" id="hora" name="hora">
            </div>
            <button class="clase-muestra">
                <span>Confirmar</span>
            </button>
        </form>
    </div>

</body>

</html>