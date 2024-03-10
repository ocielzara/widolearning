<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carousel con Bootstrap</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

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

        .custom-text {
            font-family: 'Arial', sans-serif;
            font-size: 24px;
            font-weight: bold;
            text-transform: uppercase;
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
            width: 700px;
            /* Ancho del contenedor */
            height: 400px;
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
            height: 100%;
            /* La imagen ocupa todo el alto del contenedor */
            object-fit: cover;
            /* La imagen se ajusta para cubrir el contenedor */
        }

        /* Estilos de la imagen */
        .image-container video {
            width: 100%;
            /* La imagen ocupa todo el ancho del contenedor */
            height: 100%;
            /* La imagen ocupa todo el alto del contenedor */
            object-fit: cover;
            /* La imagen se ajusta para cubrir el contenedor */
        }

        .contenedor-1a {
            width: 850px;
            /* Ancho del contenedor */
            height: 550px;
            /* Altura del contenedor */
            border-radius: 20px;
            /* Bordes redondeados */
            overflow: hidden;
            /* Oculta el contenido que se desborda */
            margin: 3% auto;
            /* Centra en medio de la página */
            background-image: linear-gradient(to top, orange 100%, transparent 100%),
                linear-gradient(to left, orange 100%, transparent 100%),
                linear-gradient(to top, orange 50%, transparent 50%);
            /* Combina tres gradientes lineales para pintar las partes superior, izquierda e inferior */
            background-size: 100% 2px, 2px 100%, 100% 2px;
            /* Tamaño de cada gradiente (ancho x alto) */
            background-repeat: no-repeat;
            /* Evita que los gradientes se repitan */
            padding: 30px;
        }

        .saludo {
            font-family: 'Arial', sans-serif;
            font-size: 20px;
            font-weight: bold;
            color: black;
            padding: 5px;
            margin-top: 0px;
        }

        .cursos-p1 {
            font-family: 'Arial', sans-serif;
            font-size: 19px;
            font-weight: bold;
            color: #50D2FF;
            padding: 5px;
            margin-top: 0px;
            margin-left: 5%;
            /* Centra en medio de la página */
        }

        .prices-1 {
            padding: 5px;
            /* Espacio interno */
        }

        /* Estilo del cuadrado con sombra */
        #image-box {
            width: 200px;
            /* Ajusta el ancho según tus necesidades */
            height: 230px;
            /* Ajusta la altura según tus necesidades */
            background-color: #50B2FF;
            /* Color de fondo del cuadrado */
            border-radius: 20px;
            /* Redondea los bordes más */
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.5);
            /* Sombra */
            /* margin-left: 10px;*/
            margin-top: 20px;
            /* */
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        #image-box img {
            width: 100%;
            /* La imagen ocupa el 100% del ancho del contenedor */
            height: 65%;
            flex: 0.2;
            /* La imagen ocupa la mitad superior */
            border-radius: 20px 20px 0 0;
            /* Bordes redondeados solo arriba */
            margin-top: -40px;
        }

        #image-box p {
            flex: 0.9;
            /* El título ocupa la mitad inferior */
            margin: 0px 0;
            /*text-align: center;*/
            font-size: 11px;
        }

        .clase-muestra {
            border-radius: 20px;
            /* Bordes redondeados */
            background-color: #FF8000;
            /* Color de fondo azul */
            color: white;
            /* Color del texto blanco */
            padding: 1px 5px;
            /* Espacio interno */
            border: none;
            /* Sin borde */
            cursor: pointer;
            /* Cursor de puntero */
            transition: background-color 0.3s;
            /* Transición suave del color de fondo */
            width: 75%;
            margin-top: 10px;
            box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.5);
        }

        /* Cambiar el color de fondo cuando el cursor pasa sobre el botón */
        .clase-muestra:hover {
            background-color: #FFC500;
            /* Color de fondo azul más oscuro */
        }

        .suscripcion {
            border-radius: 20px;
            /* Bordes redondeados */
            background-color: #D2D2D2;
            /* Color de fondo azul */
            color: white;
            /* Color del texto blanco */
            padding: 1px 5px;
            /* Espacio interno */
            border: none;
            /* Sin borde */
            cursor: pointer;
            /* Cursor de puntero */
            transition: background-color 0.3s;
            /* Transición suave del color de fondo */
            width: 75%;
            margin-top: 10px;
            box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.5);
        }

        /* Cambiar el color de fondo cuando el cursor pasa sobre el botón */
        .suscripcion:hover {
            background-color: #D2D2D2;
            /* Color de fondo azul más oscuro */
        }

        .suscripcion span {}


        .cardCarrusel {
            width: 15%;
            /* Ancho ajustable según preferencias */
            margin: 5px;
            /* Espacio entre las cards */
        }

        .bg-primary {
            --bs-bg-opacity: 1;
            background-color: white !important;
        }

        .carousel {
            background-image: url(images/home-opaco.png);
            background-position: center top;
            background-repeat: no-repeat;
            background-size: 100%, cover;
            /* Ajusta el tamaño de las imágenes de fondo */
            min-height: 50vh;
            display: flex;
            align-items: center;
            position: relative;
            border-radius: 30px;
            /* Redondea los bordes más */
        }

        /*********************************************************************************************/

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

        /* Estilos para el formulario de búsqueda */

        #search-form {
            margin: 10px;
        }

        #search-input {
            padding: 10px;
            width: 600px;
            border: 1px;
            border-radius: 25px;
            font-size: 16px;
            background-color: #D4EBFF;
        }

        button {
            padding: 10px 20px;
            background-color: #D4EBFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        /* Estilos para los resultados de la búsqueda */
        #search-results {
            margin: 20px;
            padding: 10px;
            /* border: 1px solid #ccc;
            border-radius: 5px;*/
        }

        /* Estilos para los elementos de resultado */
        .result-item {
            margin-bottom: 10px;
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




        .prices-1 {
            padding: 5px;
            /* Espacio interno */
        }

        /* Estilo del cuadrado con sombra */
        #image-box {
            width: 200px;
            /* Ajusta el ancho según tus necesidades */
            height: 230px;
            /* Ajusta la altura según tus necesidades */
            background-color: #50B2FF;
            /* Color de fondo del cuadrado */
            border-radius: 20px;
            /* Redondea los bordes más */
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.5);
            /* Sombra */
            /* margin-left: 10px;*/
            margin-top: 20px;
            /* */
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        #image-box img {
            width: 100%;
            /* La imagen ocupa el 100% del ancho del contenedor */
            height: 65%;
            flex: 0.2;
            /* La imagen ocupa la mitad superior */
            border-radius: 20px 20px 0 0;
            /* Bordes redondeados solo arriba */
            margin-top: -40px;
        }

        #image-box p {
            flex: 0.9;
            /* El título ocupa la mitad inferior */
            margin: 0px 0;
            /*text-align: center;*/
            font-size: 11px;
        }

        .clase-muestra {
            border-radius: 20px;
            /* Bordes redondeados */
            background-color: #FF8000;
            /* Color de fondo azul */
            color: white;
            /* Color del texto blanco */
            padding: 1px 5px;
            /* Espacio interno */
            border: none;
            /* Sin borde */
            cursor: pointer;
            /* Cursor de puntero */
            transition: background-color 0.3s;
            /* Transición suave del color de fondo */
            width: 75%;
            margin-top: 10px;
            box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.5);
        }

        /* Cambiar el color de fondo cuando el cursor pasa sobre el botón */
        .clase-muestra:hover {
            background-color: #FFC500;
            /* Color de fondo azul más oscuro */
        }

        .suscripcion {
            border-radius: 20px;
            /* Bordes redondeados */
            background-color: #D2D2D2;
            /* Color de fondo azul */
            color: white;
            /* Color del texto blanco */
            padding: 1px 5px;
            /* Espacio interno */
            border: none;
            /* Sin borde */
            cursor: pointer;
            /* Cursor de puntero */
            transition: background-color 0.3s;
            /* Transición suave del color de fondo */
            width: 75%;
            margin-top: 10px;
            box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.5);
        }

        /* Cambiar el color de fondo cuando el cursor pasa sobre el botón */
        .suscripcion:hover {
            background-color: #D2D2D2;
            /* Color de fondo azul más oscuro */
        }

        .suscripcion span {}


        .cardCarrusel {
            width: 15%;
            /* Ancho ajustable según preferencias */
            margin: 5px;
            /* Espacio entre las cards */
        }

        .bg-primary {
            --bs-bg-opacity: 1;
            background-color: white !important;
        }

        .carousel {
            background-image: url(images/home-opaco.png);
            background-position: center top;
            background-repeat: no-repeat;
            background-size: 100%, cover;
            /* Ajusta el tamaño de las imágenes de fondo */
            min-height: 50vh;
            display: flex;
            align-items: center;
            position: relative;
            border-radius: 30px;
            /* Redondea los bordes más */
        }

        @media (min-width: 768px) {

            /* show 3 items */
            .carousel-inner .active,
            .carousel-inner .active+.carousel-item,
            .carousel-inner .active+.carousel-item+.carousel-item,
            .carousel-inner .active+.carousel-item+.carousel-item+.carousel-item {
                display: block;
            }

            .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left),
            .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left)+.carousel-item,
            .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left)+.carousel-item+.carousel-item,
            .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left)+.carousel-item+.carousel-item+.carousel-item {
                transition: none;
            }

            .carousel-inner .carousel-item-next,
            .carousel-inner .carousel-item-prev {
                position: relative;
                transform: translate3d(0, 0, 0);
            }

            .carousel-inner .active.carousel-item+.carousel-item+.carousel-item+.carousel-item+.carousel-item {
                position: absolute;
                top: 0;
                right: -25%;
                z-index: -1;
                display: block;
                visibility: visible;
            }

            /* left or forward direction */
            .active.carousel-item-left+.carousel-item-next.carousel-item-left,
            .carousel-item-next.carousel-item-left+.carousel-item,
            .carousel-item-next.carousel-item-left+.carousel-item+.carousel-item,
            .carousel-item-next.carousel-item-left+.carousel-item+.carousel-item+.carousel-item,
            .carousel-item-next.carousel-item-left+.carousel-item+.carousel-item+.carousel-item+.carousel-item {
                position: relative;
                transform: translate3d(-100%, 0, 0);
                visibility: visible;
            }

            /* farthest right hidden item must be abso position for animations */
            .carousel-inner .carousel-item-prev.carousel-item-right {
                position: absolute;
                top: 0;
                left: 0;
                z-index: -1;
                display: block;
                visibility: visible;
            }

            /* right or prev direction */
            .active.carousel-item-right+.carousel-item-prev.carousel-item-right,
            .carousel-item-prev.carousel-item-right+.carousel-item,
            .carousel-item-prev.carousel-item-right+.carousel-item+.carousel-item,
            .carousel-item-prev.carousel-item-right+.carousel-item+.carousel-item+.carousel-item,
            .carousel-item-prev.carousel-item-right+.carousel-item+.carousel-item+.carousel-item+.carousel-item {
                position: relative;
                transform: translate3d(100%, 0, 0);
                visibility: visible;
                display: block;
                visibility: visible;
            }

        }

        /* Bootstrap Lightbox using Modal */

        #profile-grid {
            overflow: auto;
            white-space: normal;
        }

        #profile-grid .profile {
            padding-bottom: 40px;
        }

        #profile-grid .panel {
            padding: 0
        }

        #profile-grid .panel-body {
            padding: 15px
        }

        #profile-grid .profile-name {
            font-weight: bold;
        }

        #profile-grid .thumbnail {
            margin-bottom: 6px;
        }

        #profile-grid .panel-thumbnail {
            overflow: hidden;
        }

        #profile-grid .img-rounded {
            border-radius: 4px 4px 0 0;
        }

        .carousel-control-next,
        .carousel-control-prev {
            position: absolute;
            top: 0;
            bottom: 0;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            width: 5%;
            color: black;
            text-align: center;
            opacity: .;
        }

        /**************************************************************************************************** */

        .disponibilidad {
            width: 90%;
            height: auto;
            background-color: white;
            border-radius: 20px;
            margin: 3% auto;
            /* Centra en medio de la página */
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
            display: flex;
            padding: 10px;
        }

        /* Estilos para cada zona */
        .calendarioZona,
        .horarioZona,
        .resumenZona {
            flex: 1;
            /* Ocupa el mismo espacio */
            margin: 0 10px;
            /* Margen entre las zonas */
            background-color: white;
            /* Color de fondo */
            padding: 20px;
            /* Espacio interno */
            border-radius: 10px;
            /* Bordes redondeados */
            /*border: 1px solid #ccc;*/
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        td {
            cursor: pointer;
        }

        td:hover {
            background-color: #f0f0f0;
        }

        .boton-iniciar {
            border-radius: 20px;
            /* Bordes redondeados */
            background-color: #4BD3FF;
            /* Color de fondo azul */
            color: white;
            /* Color del texto blanco */
            padding: 1px 5px;
            /* Espacio interno */
            border: none;
            /* Sin borde */
            cursor: pointer;
            /* Cursor de puntero */
            transition: background-color 0.3s;
            /* Transición suave del color de fondo */
            width: 20%;
            margin-top: 10px;
        }

        /* Cambiar el color de fondo cuando el cursor pasa sobre el botón */
        .boton-iniciar:hover {
            background-color: #4B94FF;
            /* Color de fondo azul más oscuro */
        }

        .unavailable-day {
            background-color: #C6C6C6;
        }

        .available-day {
            background-color: #C1FFA2;
        }

        .diasDisponibles {
            background-color: #C1FFA2;
            width: 20px;
            height: 20px;
            border-radius: 20px;
        }

        /* Estilo para los botones de horarios */
        .button-horario {
            background-color: white;
            color: black;
            border: 1px solid rgba(0, 0, 0, 0.1);
            border-radius: 20px;
            /* Ajusta el radio según lo necesites */
            padding: 10px 20px;
            margin: 5px;
            cursor: pointer;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
            /* Efecto de sombreado */
        }

        .button-horario:hover {
            background-color: #f0f0f0;
            /* Cambia el color de fondo al pasar el ratón */
        }

        .button-agendar {
            background-color: #FF8C1F;
            color: white;
            border: 1px solid rgba(0, 0, 0, 0.1);
            border-radius: 20px;
            /* Ajusta el radio según lo necesites */
            padding: 10px 20px;
            margin: 5px;
            cursor: pointer;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
            /* Efecto de sombreado */
        }

        .button-agendar:hover {
            background-color: #FF8008;
            /* Cambia el color de fondo al pasar el ratón */
        }

        .line-spacing {
            line-height: 0.5;
    }


    </style>

    <!--AREAS APRENDISAJE CARRUCEL-->
    <script>
        $('.carousel').each(function () {
            var $carousel = $(this);
            $carousel.on('slide.bs.carousel', function (e) {
                var $e = $(e.relatedTarget);
                var idx = $e.index();
                var itemsPerSlide = 4;
                var totalItems = $('.carousel-item', $carousel).length;
                if (idx >= totalItems - (itemsPerSlide - 1)) {
                    var it = itemsPerSlide - (totalItems - idx);
                    for (var i = 0; i < it; i++) {
                        if (e.direction == "left") {
                            $('.carousel-item', $carousel).eq(i).appendTo('.carousel-inner', $carousel);
                        } else {
                            $('.carousel-item', $carousel).eq(0).appendTo('.carousel-inner', $carousel);
                        }
                    }
                }
            });
            $carousel.carousel({
                interval: 2000
            });
        });

        $(document).ready(function () {
            /* show lightbox when clicking a thumbnail */
            $('a.thumb').click(function (event) {
                event.preventDefault();
                var content = $('.modal-body');
                content.empty();
                var title = $(this).attr("title");
                $('.modal-title').html(title);
                content.html($(this).html());
                $(".modal-profile").modal({
                    show: true
                });
            });
        });
    </script>

</head>

<body>

    <header class="header">
        <div class="menu container">
            <img src="images/logo-aerobotlearning.png" alt="Descripción de la imagen" />
        </div>
    </header>
    <p class="custom-text">Portal de
        <?php echo $nombreDocente; ?>
    </p>
    <div id="section1"></div>
    <div class="prices-1">
        <div class="image-container">
            <?php if (pathinfo($fotoDocente, PATHINFO_EXTENSION) === 'mp4'): ?>
                <video id="video" controls>
                    <source src="<?php echo $fotoDocente; ?>" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            <?php else: ?>
                <img src="<?php echo $fotoDocente; ?>" alt="Descripción de la imagen">
            <?php endif; ?>
        </div>
        <div class="contenedor-1a">
            <p class="saludo">¡Hola, soy
                <?php echo $nombreDocente; ?>!
            </p>
            <p>
                <?php echo $descripcionDocente; ?>
            </p>
            <p class="saludo">¿En qué áreas te puedo ayudar?</p>
            <p class="line-spacing">
            <?php echo nl2br($texto_con_saltos_areasDocente); ?>
            </p>
            <p class="saludo">Hobbies</p>
            <p class="line-spacing">
            <?php echo nl2br($texto_con_saltos_hobiesDocente); ?>
            </p>
        </div>
        <p class="cursos-p1">¿Qué otros cursos imparte
            <?php echo $nombreDocente; ?>?
        </p>
        <div id="cursos-slider">
            <div class="container-fluid">
                <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="9000">
                    <div class="carousel-inner row w-100 mx-auto" role="listbox">
                        <?php foreach ($fotosCursos as $index => $fotoCurso): ?>
                            <div class="carousel-item col-md-3 <?php echo $index === 0 ? 'active' : ''; ?>">
                                <div class="panel panel-default">
                                    <div class="prices-1">
                                        <div id="image-box">
                                            <img src="<?php echo $fotoCurso; ?>" alt="Descripción de la imagen">
                                            <button class="clase-muestra">
                                                <span>Clase muestra</span>
                                            </button>
                                            <button class="suscripcion">
                                                <span>proximamente</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next text-faded" href="#carouselExample" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>

        <!--DISPONIBILIDAD-->
        <div class="disponibilidad">
            <div class="calendarioZona">
                <div class="encuesta " id="calendar"></div>
                <center>
                    <button onclick="prevMonth()" class="boton-iniciar">Anterior</button>
                    <button onclick="nextMonth()" class="boton-iniciar">Siguiente</button>
                </center>

                <div class="diasDisponibles"></div><p>Dias disponibles</p>

            </div>
            <div class="horarioZona">

            </div>
            <div class="resumenZona">
                <form action="agendar.php" method="post" enctype="multipart/form-data">
                    <div class="encuesta3 inline">
                        <h3>Resumen</h3>
                        <hr>
                        <p id="p1">Fecha</p>
                        <p id="p2">Hora: [Seleccionar]</p>
                    </div>
                    <button class="button-agendar" name="Agendar" value="Agendar">Agendar</button>
                </form>
            </div>
        </div>





        <script>
            //CALENDARIO
            const fechasDisponibles = <?php echo json_encode($fechasDisponibles); ?>;
            console.log(fechasDisponibles);
            const fechasHorasDisponibles = <?php echo json_encode($fechasHorasDisponibles); ?>;
            console.log(fechasHorasDisponibles);

            function createCalendar(year, month) {
                const monthNames = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
                const currentDate = new Date(year, month - 1, 1);
                const firstDayOfMonth = currentDate.getDay();
                const daysInMonth = new Date(year, month, 0).getDate();

                let html = '<h2>' + monthNames[month - 1] + ' ' + year + '</h2>';
                html += '<table>';
                html += '<tr><th>Domingo</th><th>Lunes</th><th>Martes</th><th>Miércoles</th><th>Jueves</th><th>Viernes</th><th>Sábado</th></tr>';
                html += '<tr>';

                let dayCounter = 1;

                for (let i = 0; i < 7; i++) {
                    if (i < firstDayOfMonth) {
                        html += '<td></td>';
                    } else {
                        // Extraer el día actual del bucle
                        const currentDate = new Date(year, month - 1, dayCounter);
                        const currentDay = currentDate.getDate();
                        //Convierto formato Fri Mar 01 2024 00:00:00 GMT-0600 (hora estándar central) a YYYY-MM-DD
                        var fechaFormateada = formatearFecha(currentDate);
                        // Verificar si el día está disponible
                        const isAvailable = fechasDisponibles.includes(fechaFormateada);
                        console.log(fechaFormateada);
                        console.log(fechasDisponibles.includes(fechaFormateada));
                        if (isAvailable) {
                            html += '<td class="available-day" onclick="showDay(' + dayCounter + ', ' + month + ', ' + year + ')">' + dayCounter + '</td>';
                        } else {
                            html += '<td class="unavailable-day">' + dayCounter + '</td>';
                        }
                        dayCounter++;
                    }
                }

                html += '</tr>';

                for (let i = 0; i < 5; i++) {
                    html += '<tr>';
                    for (let j = 0; j < 7; j++) {
                        if (dayCounter <= daysInMonth) {
                            const currentDate = new Date(year, month - 1, dayCounter);
                            const currentDay = currentDate.getDate();
                            //Convierto formato Fri Mar 01 2024 00:00:00 GMT-0600 (hora estándar central) a YYYY-MM-DD
                            var fechaFormateada = formatearFecha(currentDate);
                            // Verificar si el día está disponible
                            const isAvailable = fechasDisponibles.includes(fechaFormateada);
                            console.log(fechaFormateada);
                            console.log(fechasDisponibles.includes(fechaFormateada));
                            if (isAvailable) {
                                html += '<td class="available-day" onclick="showDay(' + dayCounter + ', ' + month + ', ' + year + ')">' + dayCounter + '</td>';
                            } else {
                                html += '<td class="unavailable-day">' + dayCounter + '</td>';
                            }
                            dayCounter++;
                        } else {
                            html += '<td></td>';
                        }
                    }
                    html += '</tr>';
                }

                html += '</table>';
                return html;
            }

            function showDay(day, month, year) {
                const fecha = document.getElementById('p1');
                fecha.innerHTML = "Seleccionaste el: " + day + ' / ' + month + ' / ' + year;
                // Llamar a una función para mostrar los horarios disponibles
                showAvailableTimes(day, month, year);
            }

            function updateCalendar(year, month) {
                const calendarDiv = document.getElementById('calendar');
                calendarDiv.innerHTML = createCalendar(year, month);
            }

            const currentDate = new Date();
            let currentYear = currentDate.getFullYear();
            let currentMonth = currentDate.getMonth() + 1;

            updateCalendar(currentYear, currentMonth);

            function prevMonth() {
                currentMonth--;
                if (currentMonth < 1) {
                    currentMonth = 12;
                    currentYear--;
                }
                updateCalendar(currentYear, currentMonth);
            }

            function nextMonth() {
                currentMonth++;
                if (currentMonth > 12) {
                    currentMonth = 1;
                    currentYear++;
                }
                updateCalendar(currentYear, currentMonth);
            }

            //Nuevas funciones 

            function formatearFecha(fechaString) {
                // Crear un objeto Date a partir de la cadena de fecha
                var fecha = new Date(fechaString);

                // Obtener los componentes de la fecha
                var año = fecha.getFullYear();
                var mes = ('0' + (fecha.getMonth() + 1)).slice(-2); // Se agrega 1 al mes ya que enero es 0
                var dia = ('0' + fecha.getDate()).slice(-2);

                // Formatear la fecha en el formato deseado (YYYY-MM-DD)
                var fechaFormateada = año + '-' + mes + '-' + dia;

                return fechaFormateada;
            }

            function showAvailableTimes(day, month, year) {
                // Formatear la fecha seleccionada en el formato YYYY-MM-DD
                const selectedDate = year + '-' + (month < 10 ? '0' + month : month) + '-' + (day < 10 ? '0' + day : day);

                // Filtrar los horarios disponibles para la fecha seleccionada
                const availableTimes = fechasHorasDisponibles.filter(item => item[0] === selectedDate);

                // Mostrar los horarios disponibles en el div horarioZona
                const horarioZona = document.querySelector('.horarioZona');
                horarioZona.innerHTML = '<h3>Horarios Disponibles:</h3>';
                if (availableTimes.length > 0) {
                    const div = document.createElement('div');
                    div.classList.add('horario-buttons');
                    availableTimes.forEach(item => {
                        const button = document.createElement('button');
                        button.classList.add('button-horario');
                        button.textContent = item[1];
                        button.onclick = function () {
                            // Al hacer clic en un horario, actualizar el elemento <p id="p2">Hora</p>
                            document.getElementById('p2').textContent = 'Hora: ' + item[1];
                        };
                        div.appendChild(button);
                    });
                    horarioZona.appendChild(div);
                } else {
                    horarioZona.innerHTML += '<p>No hay horarios disponibles para este día.</p>';
                }
            }


            //FUNCIONES PARA LA PREVISUALIZACION DE VIDEO EN SLIDER***********************************************************++
            // Obtener el video y la imagen de previsualización por sus ID
            const video = document.getElementById('video');
            const preview = document.getElementById('preview');

            // Escuchar el evento 'loadedmetadata' para asegurarse de que el video esté cargado
            video.addEventListener('loadedmetadata', function () {
                // Obtener el cuadro del video en el segundo 0 (puedes ajustar esto si lo deseas)
                video.currentTime = 1;
            });

            // Escuchar el evento 'canplay' para asegurarse de que el video pueda reproducirse
            video.addEventListener('canplay', function () {
                // Capturar un cuadro del video y mostrarlo como una previsualización
                const canvas = document.createElement('canvas');
                canvas.width = video.videoWidth;
                canvas.height = video.videoHeight;
                const ctx = canvas.getContext('2d');
                ctx.drawImage(video, 0, 0, canvas.width, canvas.height);
                preview.src = canvas.toDataURL();
                preview.style.display = 'block';
            });
        </script>

</body>

</html>