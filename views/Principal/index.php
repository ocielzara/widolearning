<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carousel con Bootstrap</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
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
            background-image: url(../../images/header-docentes.png);
            background-position: center top;
            background-repeat: no-repeat;
            background-size: 100%, cover;
            /* Ajusta el tamaño de las imágenes de fondo */
            min-height: 73vh;
            display: flex;
            align-items: center;
            position: relative;
        }

        .contenedor-1 {
            width: 800px;
            /* Ancho del contenedor */
            height: 200px;
            /* Altura del contenedor */
            border-radius: 20px;
            /* Bordes redondeados */
            overflow: hidden;
            /* Oculta el contenido que se desborda */
            margin: 0% auto;
            /* Centra en medio de la página */
            padding: 0px;
        }

        .cursos-p {
            font-family: 'Arial', sans-serif;
            font-size: 19px;
            font-weight: bold;
            color: orange;
            padding: 5px;
            margin-top: 0px;
            margin-left: 5%;
            /* Centra en medio de la página */
        }

        .welcome {
            display: flex;
            margin-top: -15%;
        }

        .welcome-1 {
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            width: 50%;
            /*border: 1px solid #ccc;*/
        }

        .menu.container img {
            width: 650px;
            /* Establece el ancho deseado para la imagen */
            height: auto;
            /* Hace que la altura se ajuste automáticamente para mantener la proporción original */
            top: 0%;
            /* Posiciona la parte superior de la imagen en el 50% del contenedor */
            left: 2%;
            /* Posiciona la parte izquierda de la imagen en el 50% del contenedor */
        }

        .section-1 {
            /*border: 1px solid #ccc;*/
            box-sizing: border-box;
            height: 50px;
            margin: -18% 28% auto;
            /* Centra en medio de la página */
            padding: 5px;
            width: 70%;
        }

        .frace-azul {
            font-family: 'Arial', sans-serif;
            font-size: 16px;
            font-weight: bold;
            color: #ABDAFF;
            padding: 5px;
            margin-top: 0px;
            margin-left: 5%;
            /* Centra en medio de la página */
        }

        .section-2 {
            /*border: 1px solid #ccc;*/
            box-sizing: border-box;
            height: 50px;
            margin: 0% auto;
            /* Centra en medio de la página */
            padding: 5px;
            width: 60%;
        }

        .frace-negra {
            font-family: 'Arial', sans-serif;
            font-size: 21px;
            font-weight: bold;
            color: black;
            padding: 5px;
            margin-top: 0px;
            margin-left: 5%;
            /* Centra en medio de la página */
        }

        .section-3 {
            /*border: 1px solid #ccc;*/
            box-sizing: border-box;
            height: 50px;
            margin: 5% auto;
            /* Centra en medio de la página */
            padding: 5px;
            width: 60%;
        }

        .button {
            padding: 10px 20px;
            width: 100%;
            margin: 0% auto;
            border-radius: 20px;
            border: none;
            background-color: orange;
            /* Color de fondo azul */
            color: white;
            cursor: pointer;
            transition: background-color 0.3s;
            /* Transición suave del color de fondo */
        }

        .button:hover {
            background-color: #096dad;
            /* Color de fondo azul más oscuro */
        }

        .welcome-2 {
            width: 50%;
            padding: 150px 250px 150px 100px;
        }

        .imagen img {
            width: 120%;
            height: auto;
            /* Hace que la altura se ajuste automáticamente para mantener la proporción original */
            /* border: 1px solid #ccc;*/
            margin: -35% auto;
            /* Centra en medio de la página */
        }

        .after-footer {
            background-image: url(../../images/header-docentes-2.png);
            background-position: center top;
            background-repeat: no-repeat;
            background-size: 100%, cover;
            /* Ajusta el tamaño de las imágenes de fondo */
            min-height: 73vh;
            display: flex;
            align-items: center;
            position: relative;
            margin: -9% auto;
        }

        .degradado-1 {
            position: relative;
            z-index: 2;
            /* Asegura que el footer esté por encima de after-footer */
            background-image: linear-gradient(to top, rgba(255, 255, 255, 10), rgba(255, 255, 255, 0));
            width: 100%;
            min-height: 23vh;
            display: flex;
            align-items: center;
            position: relative;
            margin: -10% auto;
        }

        .degradado-2 {
            position: relative;
            z-index: 2;
            /* Asegura que el footer esté por encima de after-footer */
            background-image: linear-gradient(to top, rgba(255, 255, 255, 10), rgba(255, 255, 255, 0));
            width: 100%;
            min-height: 23vh;
            display: flex;
            align-items: center;
            position: relative;
            margin: -10% auto;
        }

        .degradado-3 {
            position: relative;
            z-index: 2;
            /* Asegura que el footer esté por encima de after-footer */
            background-image: linear-gradient(to top, rgba(255, 255, 255, 10), rgba(255, 255, 255, 0));
            width: 100%;
            min-height: 23vh;
            display: flex;
            align-items: center;
            position: relative;
            margin: -10% auto;
        }

        .footer {
            display: flex;
            justify-content: center;
            margin-top: 10%;
        }

        .b1 {
            padding: 10px 20px;
            width: 20%;
            margin: 0% auto;
            border-radius: 20px;
            border: none;
            background-color: #000000;
            /* Color de fondo azul */
            color: white;
            cursor: pointer;
            transition: background-color 0.3s;
            /* Transición suave del color de fondo */
        }

        .b1:hover {
            background-color: #343434;
            /* Color de fondo azul más oscuro */
        }

        .b2 {
            padding: 10px 20px;
            width: 20%;
            margin: 0% auto;
            border-radius: 20px;
            border: none;
            background-color: #7B7B7B;
            /* Color de fondo azul */
            color: white;
            cursor: pointer;
            transition: background-color 0.3s;
            /* Transición suave del color de fondo */
        }

        .b2:hover {
            background-color: #7B7B7B;
            /* Color de fondo azul más oscuro */
        }

        .footer .button {
            margin: 0 20px; /* Ajusta el espacio entre los botones en el footer */
        }
    </style>
</head>

<body>

    <header class="header">
    </header>
    <div class="welcome">
        <div class="welcome-1">
            <div class="menu container">
                <img src="../../images/logo-aerobotlearning.png" alt="Descripción de la imagen" />
            </div>
            <div class="section-1">
                <p class="frace-azul">El aprendizaje personalizado a tus necesidades</p>
            </div>
            <div class="section-2">
                <p class="frace-negra">Accede a diferentes cursos con un mentor por videollamada</p>
            </div>
            <div class="section-3">
                <button class="button" type="submit">Clase muestra gratuita</button>
            </div>
        </div>
        <div class="welcome-2">
            <div class="imagen"><img src="../../images/imagen-1.png" alt=""></div>
        </div>
    </div>

    <div class="after-footer">
    </div>
    <div class="degradado-1"></div>
    <div class="degradado-2"></div>
    <div class="degradado-3"></div>
    <div class="footer">
            <button class="b1" type="submit">Areas de aprendisaje</button>

            <button class="b1" type="submit">Master Teach</button>
 
    
            <button class="b2" type="submit">Reels (proximamente)</button>

    </div>
</body>
</html>