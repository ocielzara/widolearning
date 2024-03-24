<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
            background-image: url(images/wido/home.png);
            background-position: center top;
            background-repeat: no-repeat;
            background-size: 100%, cover;
            /* Ajusta el tamaño de las imágenes de fondo */
            min-height: 112vh;
            display: flex;
            align-items: center;
            position: relative;
            margin-top: -7%;
        }

        .informacion {
            background-image: url(images/wido/informacion.png);
            background-position: center top;
            background-repeat: no-repeat;
            background-size: 100%, cover;
            /* Ajusta el tamaño de las imágenes de fondo */
            min-height: 340vh;
            display: flex;
            align-items: center;
            position: relative;
            margin-top: 0%;
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
            color: #4F7CAC;
            padding: 5px;
            margin-top: 0px;
            margin-left: 5%;
            /* Centra en medio de la página */
        }

        .welcome-1 {
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            width: 50%;
            margin: -19% 10% auto;
            /*border: 1px solid #ccc;*/
            position: absolute;
        }

        /*
        .menu.container img {
            width: 650px; 
            height: auto;
            top: 0%;
            left: 2%;
        }
        */

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
            padding: 10px;
            width: 60%;
        }

        .button {
            padding: 15px 70px;
            width: 100%;
            margin: 0% auto;
            border-radius: 20px;
            border: none;
            background-color: orange;
            /* Color de fondo azul */
            color: #4F7CAC;
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
            background-color: #4F7CAC;
            color: #FEC400;
            /* Color de fondo azul más oscuro */
        }

        .button-mas {
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

        .button-mas:hover {
            background-color: #4F7CAC;
            color: #FEC400;
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
            background-color: #4F7CAC;
            color: #FEC400;
            /* Color de fondo azul más oscuro */
        }

        .sub-footer {
            display: flex;
            justify-content: center;
            margin-top: 10%;
        }

        .sub-footer .button {
            margin: 0 20px;
            /* Ajusta el espacio entre los botones en el footer */
        }

        .footer {
            display: flex;
            justify-content: center;
            margin-top: 10%;
        }

        .footer .button {
            margin: 0 20px;
            /* Ajusta el espacio entre los botones en el footer */
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
            background-color: #2E3532;
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

        /* Estilo del cuadrado con sombra */
        #video-box {
            width: 220px;
            /* Ajusta el ancho según tus necesidades */
            height: 250px;
            /* Ajusta la altura según tus necesidades */
            background-color: #2E3532;
            /* Color de fondo del cuadrado */
            border-radius: 20px;
            /* Redondea los bordes más */
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.5);
            /* Sombra */
            /* margin-left: 10px;*/
            margin-top: 3px;
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

        #video-box video {
            width: 100%;
            /* La imagen ocupa el 100% del ancho del contenedor */
            height: 100%;
            flex: 0.2;
            /* La imagen ocupa la mitad superior */
            border-radius: 20px 20px 0 0;
            /* Bordes redondeados solo arriba */
            margin-top: -60px;
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
            background-color: #FEC400;
            /* Color de fondo azul */
            color: #2E3532;
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
            background-color: white;
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
            /*background-image: url(images/home-opaco.png);*/
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

        .carousel-control-prev-icon {
            background-image: url(images/wido/boton-slider-prev.png);
            padding: 25px;
        }

        .carousel-control-next-icon {
            background-image: url(images/wido/boton-slider.png);
            padding: 25px;
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
            width: 1%;
            color: black;
            text-align: center;
            opacity: .;
        }

        .botones-carrucel {
            width: 75%;
        }

        .botones-carrucel-cursos {
            width: 100%;
            margin-left: 25%;
        }








        /* Estilos para la vista previa del video */
        .video-preview {
            position: relative;
            display: inline-block;
        }

        /* Estilos para el ícono de reproducción */
        .play-icon {
            position: absolute;
            top: 30%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 70px;
            /* Ajusta el tamaño del icono según sea necesario */
            height: 70px;
            background-image: url('images/boton/boton.png');
            /* Ruta del ícono de reproducción */
            background-size: cover;
            cursor: pointer;
            /* Cambia el cursor al pasar sobre el ícono */
        }

        /* Estilos para la ventana emergente */

        .video-popup {
            position: fixed;
            top: 0;
            left: 15%;
            width: 70%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            /* Fondo oscuro semi-transparente */
            display: none;
            z-index: 9999;
            /* Asegura que esté por encima de otros elementos */
            border-radius: 20px;
            /* Bordes redondeados */
        }

        .video-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100%;
            /* Ancho del contenedor de video */
            height: 100%;
            /* Altura del contenedor de video */
            border-radius: 20px;
            /* Bordes redondeados */
            overflow: hidden;
            /* Oculta el contenido que se desborda */
        }




        #video-popup-player {
            width: 100%;
            height: 100%;
            display: block;
        }

        .close-btn {
            position: absolute;
            top: 10px;
            /* Ajusta la posición vertical según sea necesario */
            right: 10px;
            /* Ajusta la posición horizontal según sea necesario */
            background-color: black;
            border: none;
            color: #fff;
            font-size: 15px;
            cursor: pointer;
            z-index: 10000;
            /* Asegura que esté por encima del video */
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

    <?php include 'Views/contenido/lateralUsuario.php'; ?>
    <!--========== CONTENTS ==========-->
    <main>
        <section>
            <header class="header">
            </header>
            <div class="welcome-1">
                <!--
            <div class="menu container">
                <img src="images/logo-aerobotlearning.png" alt="Descripción de la imagen" />
            </div>
            <div class="section-1">
                <p class="frace-azul">El aprendizaje personalizado a tus necesidades</p>
            </div>
            <div class="section-2">
                <p class="frace-negra">Accede a diferentes cursos con un mentor por videollamada</p>
            </div>
            -->
                <div class="section-3">
                    <!--index.php?c=usuarios&a=login-->
                    <a href="index.php?c=usuarios&a=login" class="button">Clase muestra gratuita</a>
                </div>
            </div>
            <!--
        <div class="welcome-2">
            <div class="imagen"><img src="images/imagen-1.png" alt=""></div>
        </div>
        -->

            <div class="sub-footer">
                <button class="b1" type="button" onclick="mostrarContenidoAreas()">Areas de aprendizaje</button>

                <button class="b1" type="button" onclick="mostrarContenidoMasterTeach()">Master Teach</button>


                <button class="b2" type="submit">Reels (proximamente)</button>

            </div>
            <br><br>

            <!--Areas aprendizaje style="display: none;"-->
            <div id="contenido-areas" class="prices-1">
                <div class="contenedor-1">
                    <!-- Formulario para buscar -->
                    <form>
                        <input type="text" id="busqueda" class="form-control mr-sm-2" placeholder="Buscar cursos">
                        <button type="button" id="buscar" class="btn btn-primary">Buscar</button>
                    </form>
                    <!-- Codigo de ajax -->

                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                    <script>
                        $(document).ready(function () {
                            $('#buscar').click(function () {
                                var busqueda = $('#busqueda').val();
                                $.ajax({
                                    type: "POST",
                                    url: "index.php?c=cursos&a=cursos",
                                    data: {
                                        busqueda: busqueda
                                    },
                                    dataType: 'json',
                                    success: function (response) {
                                        console.log(response);
                                        $('#resultados').empty(); // Limpiamos el contenedor de resultados antes de agregar nuevos resultados
                                        // Verificamos si se encontraron cursos
                                        if (response.length > 0) {
                                            // Iteramos sobre cada curso y creamos un elemento h3 para mostrarlo
                                            response.forEach(function (curso) {
                                                //Aca modifica para que tenga link
                                                $('#resultados').append('<a href="www.google.com">' + curso.titulo + '</a><br>');
                                            });
                                        } else {
                                            // Si no se encontraron cursos, mostramos un mensaje
                                            $('#resultados').append('<p>No se encontraron cursos.</p>');
                                        }

                                    },
                                    error: function (xhr, status, error) {
                                        console.error(xhr.responseText);
                                    }
                                });
                            });
                        });
                    </script>

                    <div id="resultados">

                    </div>
                </div>
                <p class="cursos-p">CURSOS TOP (con mayor demanda)</p>
                <div id="cursos-slider">
                    <div class="container-fluid">
                        <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="9000">
                            <div class="carousel-inner row w-100 mx-auto" role="listbox">
                                <div class="carousel-item col-md-3  active">
                                    <div class="panel panel-default">
                                        <div class="prices-1">
                                            <!-- Cuadrado con sombra -->
                                            <div id="image-box">
                                                <!-- Mitad superior para la imagen -->
                                                <img src="images/curso/finanzas-personales.png"
                                                    alt="Descripción de la imagen">
                                                <!-- Mitad inferior para el título de la imagen -->
                                                <form class="botones-carrucel-cursos"
                                                    action="index.php?c=usuarios&a=claseMuestraNavegacion"
                                                    method="post">
                                                    <!-- Campo oculto para enviar información -->
                                                    <input type="hidden" name="nombreCurso" value="finanzas personales">
                                                    <button class="clase-muestra">
                                                        <span>Clase muestra</span>
                                                    </button>
                                                </form>
                                                <button class="suscripcion">
                                                    <span>proximamente</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item col-md-3 ">
                                    <div class="panel panel-default">
                                        <div class="prices-1">
                                            <!-- Cuadrado con sombra -->
                                            <div id="image-box">
                                                <!-- Mitad superior para la imagen -->
                                                <img src="images/curso/emprendimiento-e-innovacion.png"
                                                    alt="Descripción de la imagen">
                                                <!-- Mitad inferior para el título de la imagen -->
                                                <form class="botones-carrucel-cursos"
                                                    action="index.php?c=usuarios&a=claseMuestraNavegacion"
                                                    method="post">
                                                    <!-- Campo oculto para enviar información -->
                                                    <input type="hidden" name="nombreCurso"
                                                        value="emprendimiento e innovacion">
                                                    <button class="clase-muestra">
                                                        <span>Clase muestra</span>
                                                    </button>
                                                </form>
                                                <button class="suscripcion">
                                                    <span>proximamente</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item col-md-3 ">
                                    <div class="panel panel-default">
                                        <div class="prices-1">
                                            <!-- Cuadrado con sombra -->
                                            <div id="image-box">
                                                <!-- Mitad superior para la imagen -->
                                                <img src="images/curso/robotica-brazo.png"
                                                    alt="Descripción de la imagen">
                                                <!-- Mitad inferior para el título de la imagen -->
                                                <form class="botones-carrucel-cursos"
                                                    action="index.php?c=usuarios&a=claseMuestraNavegacion"
                                                    method="post">
                                                    <!-- Campo oculto para enviar información -->
                                                    <input type="hidden" name="nombreCurso"
                                                        value="robotica proyecto brazo robotico">
                                                    <button class="clase-muestra">
                                                        <span>Clase muestra</span>
                                                    </button>
                                                </form>
                                                <button class="suscripcion">
                                                    <span>proximamente</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item col-md-3 ">
                                    <div class="panel panel-default">
                                        <div class="prices-1">
                                            <!-- Cuadrado con sombra -->
                                            <div id="image-box">
                                                <!-- Mitad superior para la imagen -->
                                                <img src="images/curso/dibujo.png" alt="Descripción de la imagen">
                                                <!-- Mitad inferior para el título de la imagen -->
                                                <form class="botones-carrucel-cursos"
                                                    action="index.php?c=usuarios&a=claseMuestraNavegacion"
                                                    method="post">
                                                    <!-- Campo oculto para enviar información -->
                                                    <input type="hidden" name="nombreCurso" value="dibujo tradicional">
                                                    <button class="clase-muestra">
                                                        <span>Clase muestra</span>
                                                    </button>
                                                </form>
                                                <button class="suscripcion">
                                                    <span>proximamente</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item col-md-3 ">
                                    <div class="panel panel-default">
                                        <div class="prices-1">
                                            <!-- Cuadrado con sombra -->
                                            <div id="image-box">
                                                <!-- Mitad superior para la imagen -->
                                                <img src="images/curso/photoshop.png" alt="Descripción de la imagen">
                                                <!-- Mitad inferior para el título de la imagen -->
                                                <form class="botones-carrucel-cursos"
                                                    action="index.php?c=usuarios&a=claseMuestraNavegacion"
                                                    method="post">
                                                    <!-- Campo oculto para enviar información -->
                                                    <input type="hidden" name="nombreCurso" value="photoshop">
                                                    <button class="clase-muestra">
                                                        <span>Clase muestra</span>
                                                    </button>
                                                </form>
                                                <button class="suscripcion">
                                                    <span>proximamente</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item col-md-3 ">
                                    <div class="panel panel-default">
                                        <div class="prices-1">
                                            <!-- Cuadrado con sombra -->
                                            <div id="image-box">
                                                <!-- Mitad superior para la imagen -->
                                                <img src="images/curso/illustrator.png" alt="Descripción de la imagen">
                                                <!-- Mitad inferior para el título de la imagen -->
                                                <form class="botones-carrucel-cursos"
                                                    action="index.php?c=usuarios&a=claseMuestraNavegacion"
                                                    method="post">
                                                    <!-- Campo oculto para enviar información -->
                                                    <input type="hidden" name="nombreCurso" value="illustrator">
                                                    <button class="clase-muestra">
                                                        <span>Clase muestra</span>
                                                    </button>
                                                </form>
                                                <button class="suscripcion">
                                                    <span>proximamente</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item col-md-3 ">
                                    <div class="panel panel-default">
                                        <div class="prices-1">
                                            <!-- Cuadrado con sombra -->
                                            <div id="image-box">
                                                <!-- Mitad superior para la imagen -->
                                                <img src="images/curso/blender.png" alt="Descripción de la imagen">
                                                <!-- Mitad inferior para el título de la imagen -->
                                                <form class="botones-carrucel-cursos"
                                                    action="index.php?c=usuarios&a=claseMuestraNavegacion"
                                                    method="post">
                                                    <!-- Campo oculto para enviar información -->
                                                    <input type="hidden" name="nombreCurso" value="blender">
                                                    <button class="clase-muestra">
                                                        <span>Clase muestra</span>
                                                    </button>
                                                </form>
                                                <button class="suscripcion">
                                                    <span>proximamente</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item col-md-3  ">
                                    <div class="panel panel-default">
                                        <div class="prices-1">
                                            <!-- Cuadrado con sombra -->
                                            <div id="image-box">
                                                <!-- Mitad superior para la imagen -->
                                                <img src="images/curso/gdevelop.png" alt="Descripción de la imagen">
                                                <!-- Mitad inferior para el título de la imagen -->
                                                <form class="botones-carrucel-cursos"
                                                    action="index.php?c=usuarios&a=claseMuestraNavegacion"
                                                    method="post">
                                                    <!-- Campo oculto para enviar información -->
                                                    <input type="hidden" name="nombreCurso" value="gdevelop">
                                                    <button class="clase-muestra">
                                                        <span>Clase muestra</span>
                                                    </button>
                                                </form>
                                                <button class="suscripcion">
                                                    <span>proximamente</span>
                                                </button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="carousel-item col-md-3 ">
                                    <div class="panel panel-default">
                                        <div class="prices-1">
                                            <!-- Cuadrado con sombra -->
                                            <div id="image-box">
                                                <!-- Mitad superior para la imagen -->
                                                <img src="images/curso/unity2d.png" alt="Descripción de la imagen">
                                                <!-- Mitad inferior para el título de la imagen -->
                                                <form class="botones-carrucel-cursos"
                                                    action="index.php?c=usuarios&a=claseMuestraNavegacion"
                                                    method="post">
                                                    <!-- Campo oculto para enviar información -->
                                                    <input type="hidden" name="nombreCurso" value="unity 2d">
                                                    <button class="clase-muestra">
                                                        <span>Clase muestra</span>
                                                    </button>
                                                </form>
                                                <button class="suscripcion">
                                                    <span>proximamente</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item col-md-3 ">
                                    <div class="panel panel-default">
                                        <div class="prices-1">
                                            <!-- Cuadrado con sombra -->
                                            <div id="image-box">
                                                <!-- Mitad superior para la imagen -->
                                                <img src="images/curso/unity3d.png" alt="Descripción de la imagen">
                                                <!-- Mitad inferior para el título de la imagen -->
                                                <form class="botones-carrucel-cursos"
                                                    action="index.php?c=usuarios&a=claseMuestraNavegacion"
                                                    method="post">
                                                    <!-- Campo oculto para enviar información -->
                                                    <input type="hidden" name="nombreCurso" value="unity 3d">
                                                    <button class="clase-muestra">
                                                        <span>Clase muestra</span>
                                                    </button>
                                                </form>
                                                <button class="suscripcion">
                                                    <span>proximamente</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item col-md-3 ">
                                    <div class="panel panel-default">
                                        <div class="prices-1">
                                            <!-- Cuadrado con sombra -->
                                            <div id="image-box">
                                                <!-- Mitad superior para la imagen -->
                                                <img src="images/curso/minecraft.png" alt="Descripción de la imagen">
                                                <!-- Mitad inferior para el título de la imagen -->
                                                <form class="botones-carrucel-cursos"
                                                    action="index.php?c=usuarios&a=claseMuestraNavegacion"
                                                    method="post">
                                                    <!-- Campo oculto para enviar información -->
                                                    <input type="hidden" name="nombreCurso" value="minecraft">
                                                    <button class="clase-muestra">
                                                        <span>Clase muestra</span>
                                                    </button>
                                                </form>
                                                <button class="suscripcion">
                                                    <span>proximamente</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item col-md-3 ">
                                    <div class="panel panel-default">
                                        <div class="prices-1">
                                            <!-- Cuadrado con sombra -->
                                            <div id="image-box">
                                                <!-- Mitad superior para la imagen -->
                                                <img src="images/curso/doblaje.png" alt="Descripción de la imagen">
                                                <!-- Mitad inferior para el título de la imagen -->
                                                <form class="botones-carrucel-cursos"
                                                    action="index.php?c=usuarios&a=claseMuestraNavegacion"
                                                    method="post">
                                                    <!-- Campo oculto para enviar información -->
                                                    <input type="hidden" name="nombreCurso" value="doblaje">
                                                    <button class="clase-muestra">
                                                        <span>Clase muestra</span>
                                                    </button>
                                                </form>
                                                <button class="suscripcion">
                                                    <span>proximamente</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item col-md-3 ">
                                    <div class="panel panel-default">
                                        <div class="prices-1">
                                            <!-- Cuadrado con sombra -->
                                            <div id="image-box">
                                                <!-- Mitad superior para la imagen -->
                                                <img src="images/curso/databricks.png" alt="Descripción de la imagen">
                                                <!-- Mitad inferior para el título de la imagen -->
                                                <form class="botones-carrucel-cursos"
                                                    action="index.php?c=usuarios&a=claseMuestraNavegacion"
                                                    method="post">
                                                    <!-- Campo oculto para enviar información -->
                                                    <input type="hidden" name="nombreCurso" value="databricks">
                                                    <button class="clase-muestra">
                                                        <span>Clase muestra</span>
                                                    </button>
                                                </form>
                                                <button class="suscripcion">
                                                    <span>proximamente</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item col-md-3 ">
                                    <div class="panel panel-default">
                                        <div class="prices-1">
                                            <!-- Cuadrado con sombra -->
                                            <div id="image-box">
                                                <!-- Mitad superior para la imagen -->
                                                <img src="images/curso/ajedrez.png" alt="Descripción de la imagen">
                                                <!-- Mitad inferior para el título de la imagen -->
                                                <form class="botones-carrucel-cursos"
                                                    action="index.php?c=usuarios&a=claseMuestraNavegacion"
                                                    method="post">
                                                    <!-- Campo oculto para enviar información -->
                                                    <input type="hidden" name="nombreCurso" value="ajedrez">
                                                    <button class="clase-muestra">
                                                        <span>Clase muestra</span>
                                                    </button>
                                                </form>
                                                <button class="suscripcion">
                                                    <span>proximamente</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item col-md-3 ">
                                    <div class="panel panel-default">
                                        <div class="prices-1">
                                            <!-- Cuadrado con sombra -->
                                            <div id="image-box">
                                                <!-- Mitad superior para la imagen -->
                                                <img src="images/curso/ia.png" alt="Descripción de la imagen">
                                                <!-- Mitad inferior para el título de la imagen -->
                                                <form class="botones-carrucel-cursos"
                                                    action="index.php?c=usuarios&a=claseMuestraNavegacion"
                                                    method="post">
                                                    <!-- Campo oculto para enviar información -->
                                                    <input type="hidden" name="nombreCurso" value="ia">
                                                    <button class="clase-muestra">
                                                        <span>Clase muestra</span>
                                                    </button>
                                                </form>
                                                <button class="suscripcion">
                                                    <span>proximamente</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item col-md-3 ">
                                    <div class="panel panel-default">
                                        <div class="prices-1">
                                            <!-- Cuadrado con sombra -->
                                            <div id="image-box">
                                                <!-- Mitad superior para la imagen -->
                                                <img src="images/curso/inversion.png" alt="Descripción de la imagen">
                                                <!-- Mitad inferior para el título de la imagen -->
                                                <form class="botones-carrucel-cursos"
                                                    action="index.php?c=usuarios&a=claseMuestraNavegacion"
                                                    method="post">
                                                    <!-- Campo oculto para enviar información -->
                                                    <input type="hidden" name="nombreCurso" value="inversion">
                                                    <button class="clase-muestra">
                                                        <span>Clase muestra</span>
                                                    </button>
                                                </form>
                                                <button class="suscripcion">
                                                    <span>proximamente</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item col-md-3 ">
                                    <div class="panel panel-default">
                                        <div class="prices-1">
                                            <!-- Cuadrado con sombra -->
                                            <div id="image-box">
                                                <!-- Mitad superior para la imagen -->
                                                <img src="images/curso/robotica.png" alt="Descripción de la imagen">
                                                <!-- Mitad inferior para el título de la imagen -->
                                                <form class="botones-carrucel-cursos"
                                                    action="index.php?c=usuarios&a=claseMuestraNavegacion"
                                                    method="post">
                                                    <!-- Campo oculto para enviar información -->
                                                    <input type="hidden" name="nombreCurso" value="robotica">
                                                    <button class="clase-muestra">
                                                        <span>Clase muestra</span>
                                                    </button>
                                                </form>
                                                <button class="suscripcion">
                                                    <span>proximamente</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item col-md-3 ">
                                    <div class="panel panel-default">
                                        <div class="prices-1">
                                            <!-- Cuadrado con sombra -->
                                            <div id="image-box">
                                                <!-- Mitad superior para la imagen -->
                                                <img src="images/curso/thunkable.png" alt="Descripción de la imagen">
                                                <!-- Mitad inferior para el título de la imagen -->
                                                <form class="botones-carrucel-cursos"
                                                    action="index.php?c=usuarios&a=claseMuestraNavegacion"
                                                    method="post">
                                                    <!-- Campo oculto para enviar información -->
                                                    <input type="hidden" name="nombreCurso" value="thunkable">
                                                    <button class="clase-muestra">
                                                        <span>Clase muestra</span>
                                                    </button>
                                                </form>
                                                <button class="suscripcion">
                                                    <span>proximamente</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item col-md-3 ">
                                    <div class="panel panel-default">
                                        <div class="prices-1">
                                            <!-- Cuadrado con sombra -->
                                            <div id="image-box">
                                                <!-- Mitad superior para la imagen -->
                                                <img src="images/curso/excel.png" alt="Descripción de la imagen">
                                                <!-- Mitad inferior para el título de la imagen -->
                                                <form class="botones-carrucel-cursos"
                                                    action="index.php?c=usuarios&a=claseMuestraNavegacion"
                                                    method="post">
                                                    <!-- Campo oculto para enviar información -->
                                                    <input type="hidden" name="nombreCurso" value="excel">
                                                    <button class="clase-muestra">
                                                        <span>Clase muestra</span>
                                                    </button>
                                                </form>
                                                <button class="suscripcion">
                                                    <span>proximamente</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item col-md-3 ">
                                    <div class="panel panel-default">
                                        <div class="prices-1">
                                            <!-- Cuadrado con sombra -->
                                            <div id="image-box">
                                                <!-- Mitad superior para la imagen -->
                                                <img src="images/curso/ap-teach.png" alt="Descripción de la imagen">
                                                <!-- Mitad inferior para el título de la imagen -->
                                                <form class="botones-carrucel-cursos"
                                                    action="index.php?c=usuarios&a=claseMuestraNavegacion"
                                                    method="post">
                                                    <!-- Campo oculto para enviar información -->
                                                    <input type="hidden" name="nombreCurso" value="ap teach">
                                                    <button class="clase-muestra">
                                                        <span>Clase muestra</span>
                                                    </button>
                                                </form>
                                                <button class="suscripcion">
                                                    <span>proximamente</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next text-faded" href="#carouselExample" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
                <br><br>
                <p class="cursos-p">ASESORÍAS</p>
                <div id="cursos-slider">
                    <div class="container-fluid">
                        <div id="carouselExample3" class="carousel slide" data-ride="carousel" data-interval="9000">
                            <div class="carousel-inner row w-100 mx-auto" role="listbox">
                                <div class="carousel-item col-md-3  active">
                                    <div class="panel panel-default">
                                        <div class="prices-1">
                                            <!-- Cuadrado con sombra -->
                                            <div id="image-box">
                                                <!-- Mitad superior para la imagen -->
                                                <img src="images/11.png" alt="Descripción de la imagen">
                                                <!-- Mitad inferior para el título de la imagen -->
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
                                <div class="carousel-item col-md-3 ">
                                    <div class="panel panel-default">
                                        <div class="prices-1">
                                            <!-- Cuadrado con sombra -->
                                            <div id="image-box">
                                                <!-- Mitad superior para la imagen -->
                                                <img src="images/11.png" alt="Descripción de la imagen">
                                                <!-- Mitad inferior para el título de la imagen -->
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
                                <div class="carousel-item col-md-3 ">
                                    <div class="panel panel-default">
                                        <div class="prices-1">
                                            <!-- Cuadrado con sombra -->
                                            <div id="image-box">
                                                <!-- Mitad superior para la imagen -->
                                                <img src="images/11.png" alt="Descripción de la imagen">
                                                <!-- Mitad inferior para el título de la imagen -->
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
                                <div class="carousel-item col-md-3 ">
                                    <div class="panel panel-default">
                                        <div class="prices-1">
                                            <!-- Cuadrado con sombra -->
                                            <div id="image-box">
                                                <!-- Mitad superior para la imagen -->
                                                <img src="images/11.png" alt="Descripción de la imagen">
                                                <!-- Mitad inferior para el título de la imagen -->
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
                                <div class="carousel-item col-md-3 ">
                                    <div class="panel panel-default">
                                        <div class="prices-1">
                                            <!-- Cuadrado con sombra -->
                                            <div id="image-box">
                                                <!-- Mitad superior para la imagen -->
                                                <img src="images/11.png" alt="Descripción de la imagen">
                                                <!-- Mitad inferior para el título de la imagen -->
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
                                <div class="carousel-item col-md-3 ">
                                    <div class="panel panel-default">
                                        <div class="prices-1">
                                            <!-- Cuadrado con sombra -->
                                            <div id="image-box">
                                                <!-- Mitad superior para la imagen -->
                                                <img src="images/11.png" alt="Descripción de la imagen">
                                                <!-- Mitad inferior para el título de la imagen -->
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
                                <div class="carousel-item col-md-3 ">
                                    <div class="panel panel-default">
                                        <div class="prices-1">
                                            <!-- Cuadrado con sombra -->
                                            <div id="image-box">
                                                <!-- Mitad superior para la imagen -->
                                                <img src="images/11.png" alt="Descripción de la imagen">
                                                <!-- Mitad inferior para el título de la imagen -->
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
                                <div class="carousel-item col-md-3  ">
                                    <div class="panel panel-default">
                                        <div class="prices-1">
                                            <!-- Cuadrado con sombra -->
                                            <div id="image-box">
                                                <!-- Mitad superior para la imagen -->
                                                <img src="images/11.png" alt="Descripción de la imagen">
                                                <!-- Mitad inferior para el título de la imagen -->
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
                            </div>
                            <a class="carousel-control-prev" href="#carouselExample3" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next text-faded" href="#carouselExample3" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!--Master teach-->
            <div id="contenido-master-teach" class="prices-1" style="display: none;">
                <div class="contenedor-1">
                    <!-- Formulario para buscar 
            <form>
                <input type="text" id="busqueda" class="form-control mr-sm-2" placeholder="Buscar cursos">
                <button type="button" id="buscar" class="btn btn-primary">Buscar</button>
            </form>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script>
                $(document).ready(function () {
                    $('#buscar').click(function () {
                        var busqueda = $('#busqueda').val();
                        $.ajax({
                            type: "POST",
                            url: "index.php?c=cursos&a=cursos",
                            data: {
                                busqueda: busqueda
                            },
                            dataType: 'json',
                            success: function (response) {
                                console.log(response);
                                $('#resultados').empty(); // Limpiamos el contenedor de resultados antes de agregar nuevos resultados
                                // Verificamos si se encontraron cursos
                                if (response.length > 0) {
                                    // Iteramos sobre cada curso y creamos un elemento h3 para mostrarlo
                                    response.forEach(function (curso) {
                                        //Aca modifica para que tenga link
                                        $('#resultados').append('<a href="www.google.com">' + curso.titulo + '</a><br>');
                                    });
                                } else {
                                    // Si no se encontraron cursos, mostramos un mensaje
                                    $('#resultados').append('<p>No se encontraron cursos.</p>');
                                }

                            },
                            error: function (xhr, status, error) {
                                console.error(xhr.responseText);
                            }
                        });
                    });
                });
            </script>

            <div id="resultados">

            </div>
            -->
                </div>

                <p class="cursos-p">DOCENTES</p>
                <div id="cursos-slider">
                    <div class="container-fluid">
                        <div id="carouselExample15" class="carousel slide" data-ride="carousel" data-interval="9000">
                            <div class="carousel-inner row w-100 mx-auto" role="listbox">
                                <?php foreach ($consultaDocentes as $key => $docente): ?>
                                    <div class="carousel-item col-md-3 <?php echo $key === 0 ? 'active' : ''; ?>">
                                        <div class="panel panel-default">
                                            <div class="prices-1">
                                                <!-- Cuadrado con sombra -->
                                                <?php if (pathinfo($docente['foto'], PATHINFO_EXTENSION) === 'mp4'): ?>
                                                    <!-- Vista previa del video con ícono de reproducción -->
                                                    <div class="video-preview" id="video-box">
                                                        <video id="video">
                                                            <source src="<?php echo $docente['foto']; ?>" type="video/mp4">
                                                            Your browser does not support the video tag.
                                                        </video>
                                                        <div class="play-icon"></div>
                                                        <!-- Ventana emergente para reproducir el video -->
                                                        <div class="play-icon" data-video-src="<?php echo $docente['foto']; ?>">
                                                        </div>

                                                    <?php else: ?>
                                                        <div id="image-box">
                                                            <!-- Es una imagen -->
                                                            <img src="<?php echo $docente['foto']; ?>"
                                                                alt="Foto de <?php echo $docente['nombre']; ?>">
                                                        <?php endif; ?>
                                                        <!-- Mitad inferior para el título de la imagen o video -->
                                                        <form class="botones-carrucel"
                                                            action="index.php?c=docentes&a=perfilDocente" method="post">
                                                            <!-- Campo oculto para enviar información -->
                                                            <input type="hidden" name="nombre"
                                                                value="<?php echo $docente['nombre']; ?>">
                                                            <button class="clase-muestra" style="width: 100%;">
                                                                <span>Ver perfil</span>
                                                            </button>
                                                        </form>
                                                        <button class="suscripcion">
                                                            <span>
                                                                proximamente
                                                            </span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExample15" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next text-faded" href="#carouselExample15" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <br>
                </div>

                <div id="footer" class="footer">
                    <button class="button-mas" type="button" onclick="mostrarMas()">Mostrar más categorías</button>
                </div>
                <br>

                <div id="contenido-mas" class="prices-1" style="display: none;">
                    <p class="cursos-p">Otro</p>
                    <div id="cursos-slider">
                        <div class="container-fluid">
                            <div id="carouselExample2" class="carousel slide" data-ride="carousel" data-interval="9000">
                                <div class="carousel-inner row w-100 mx-auto" role="listbox">
                                    <div class="carousel-item col-md-3 active">
                                        <div class="panel panel-default">
                                            <div class="prices-1">
                                                <!-- Cuadrado con sombra -->
                                                <div id="image-box">
                                                    <!-- Mitad superior para la imagen -->
                                                    <img src="images/curso/ajedrez.png" alt="Descripción de la imagen">
                                                    <!-- Mitad inferior para el título de la imagen -->
                                                    <form class="botones-carrucel-cursos"
                                                        action="index.php?c=usuarios&a=claseMuestraNavegacion"
                                                        method="post">
                                                        <!-- Campo oculto para enviar información -->
                                                        <input type="hidden" name="nombreCurso" value="ajedrez">
                                                        <button class="clase-muestra">
                                                            <span>Clase muestra</span>
                                                        </button>
                                                    </form>
                                                    <button class="suscripcion">
                                                        <span>proximamente</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <a class="carousel-control-prev" href="#carouselExample2" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next text-faded" href="#carouselExample2" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <p class="cursos-p">Cursos de voz</p>
                    <div id="cursos-slider">
                        <div class="container-fluid">
                            <div id="carouselExample3" class="carousel slide" data-ride="carousel" data-interval="9000">
                                <div class="carousel-inner row w-100 mx-auto" role="listbox">
                                    <div class="carousel-item col-md-3  active">
                                        <div class="panel panel-default">
                                            <div class="prices-1">
                                                <!-- Cuadrado con sombra -->
                                                <div id="image-box">
                                                    <!-- Mitad superior para la imagen -->
                                                    <img src="images/curso/doblaje.png" alt="Descripción de la imagen">
                                                    <!-- Mitad inferior para el título de la imagen -->
                                                    <form class="botones-carrucel-cursos"
                                                        action="index.php?c=usuarios&a=claseMuestraNavegacion"
                                                        method="post">
                                                        <!-- Campo oculto para enviar información -->
                                                        <input type="hidden" name="nombreCurso" value="doblaje">
                                                        <button class="clase-muestra">
                                                            <span>Clase muestra</span>
                                                        </button>
                                                    </form>
                                                    <button class="suscripcion">
                                                        <span>proximamente</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <a class="carousel-control-prev" href="#carouselExample3" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next text-faded" href="#carouselExample3" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <p class="cursos-p">Cursos de videojuegos</p>
                    <div id="cursos-slider">
                        <div class="container-fluid">
                            <div id="carouselExample4" class="carousel slide" data-ride="carousel" data-interval="9000">
                                <div class="carousel-inner row w-100 mx-auto" role="listbox">
                                    <div class="carousel-item col-md-3  active">
                                        <div class="panel panel-default">
                                            <div class="prices-1">
                                                <!-- Cuadrado con sombra -->
                                                <div id="image-box">
                                                    <!-- Mitad superior para la imagen -->
                                                    <img src="images/curso/minecraft.png"
                                                        alt="Descripción de la imagen">
                                                    <!-- Mitad inferior para el título de la imagen -->
                                                    <form class="botones-carrucel-cursos"
                                                        action="index.php?c=usuarios&a=claseMuestraNavegacion"
                                                        method="post">
                                                        <!-- Campo oculto para enviar información -->
                                                        <input type="hidden" name="nombreCurso" value="minecraft">
                                                        <button class="clase-muestra">
                                                            <span>Clase muestra</span>
                                                        </button>
                                                    </form>
                                                    <button class="suscripcion">
                                                        <span>proximamente</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item col-md-3 ">
                                        <div class="panel panel-default">
                                            <div class="prices-1">
                                                <!-- Cuadrado con sombra -->
                                                <div id="image-box">
                                                    <!-- Mitad superior para la imagen -->
                                                    <img src="images/curso/unity3d.png" alt="Descripción de la imagen">
                                                    <!-- Mitad inferior para el título de la imagen -->
                                                    <form class="botones-carrucel-cursos"
                                                        action="index.php?c=usuarios&a=claseMuestraNavegacion"
                                                        method="post">
                                                        <!-- Campo oculto para enviar información -->
                                                        <input type="hidden" name="nombreCurso" value="unity 3d">
                                                        <button class="clase-muestra">
                                                            <span>Clase muestra</span>
                                                        </button>
                                                    </form>
                                                    <button class="suscripcion">
                                                        <span>proximamente</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item col-md-3 ">
                                        <div class="panel panel-default">
                                            <div class="prices-1">
                                                <!-- Cuadrado con sombra -->
                                                <div id="image-box">
                                                    <!-- Mitad superior para la imagen -->
                                                    <img src="images/curso/unity2d.png" alt="Descripción de la imagen">
                                                    <!-- Mitad inferior para el título de la imagen -->
                                                    <form class="botones-carrucel-cursos"
                                                        action="index.php?c=usuarios&a=claseMuestraNavegacion"
                                                        method="post">
                                                        <!-- Campo oculto para enviar información -->
                                                        <input type="hidden" name="nombreCurso" value="unity 2d">
                                                        <button class="clase-muestra">
                                                            <span>Clase muestra</span>
                                                        </button>
                                                    </form>
                                                    <button class="suscripcion">
                                                        <span>proximamente</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item col-md-3 ">
                                        <div class="panel panel-default">
                                            <div class="prices-1">
                                                <!-- Cuadrado con sombra -->
                                                <div id="image-box">
                                                    <!-- Mitad superior para la imagen -->
                                                    <img src="images/curso/gdevelop.png" alt="Descripción de la imagen">
                                                    <!-- Mitad inferior para el título de la imagen -->
                                                    <form class="botones-carrucel-cursos"
                                                        action="index.php?c=usuarios&a=claseMuestraNavegacion"
                                                        method="post">
                                                        <!-- Campo oculto para enviar información -->
                                                        <input type="hidden" name="nombreCurso" value="gdevelop">
                                                        <button class="clase-muestra">
                                                            <span>Clase muestra</span>
                                                        </button>
                                                    </form>
                                                    <button class="suscripcion">
                                                        <span>proximamente</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <a class="carousel-control-prev" href="#carouselExample4" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next text-faded" href="#carouselExample4" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <p class="cursos-p">Cursos de robótica</p>
                    <div id="cursos-slider">
                        <div class="container-fluid">
                            <div id="carouselExample5" class="carousel slide" data-ride="carousel" data-interval="9000">
                                <div class="carousel-inner row w-100 mx-auto" role="listbox">
                                    <div class="carousel-item col-md-3  active">
                                        <div class="panel panel-default">
                                            <div class="prices-1">
                                                <!-- Cuadrado con sombra -->
                                                <div id="image-box">
                                                    <!-- Mitad superior para la imagen -->
                                                    <img src="images/curso/robotica-brazo.png"
                                                        alt="Descripción de la imagen">
                                                    <!-- Mitad inferior para el título de la imagen -->
                                                    <form class="botones-carrucel-cursos"
                                                        action="index.php?c=usuarios&a=claseMuestraNavegacion"
                                                        method="post">
                                                        <!-- Campo oculto para enviar información -->
                                                        <input type="hidden" name="nombreCurso"
                                                            value="robotica proyecto brazo robotico">
                                                        <button class="clase-muestra">
                                                            <span>Clase muestra</span>
                                                        </button>
                                                    </form>
                                                    <button class="suscripcion">
                                                        <span>proximamente</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item col-md-3 ">
                                        <div class="panel panel-default">
                                            <div class="prices-1">
                                                <!-- Cuadrado con sombra -->
                                                <div id="image-box">
                                                    <!-- Mitad superior para la imagen -->
                                                    <img src="images/curso/robotica.png" alt="Descripción de la imagen">
                                                    <!-- Mitad inferior para el título de la imagen -->
                                                    <form class="botones-carrucel-cursos"
                                                        action="index.php?c=usuarios&a=claseMuestraNavegacion"
                                                        method="post">
                                                        <!-- Campo oculto para enviar información -->
                                                        <input type="hidden" name="nombreCurso" value="robotica">
                                                        <button class="clase-muestra">
                                                            <span>Clase muestra</span>
                                                        </button>
                                                    </form>
                                                    <button class="suscripcion">
                                                        <span>proximamente</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item col-md-3 ">
                                        <div class="panel panel-default">
                                            <div class="prices-1">
                                                <!-- Cuadrado con sombra -->
                                                <div id="image-box">
                                                    <!-- Mitad superior para la imagen -->
                                                    <img src="images/curso/ap-teach.png" alt="Descripción de la imagen">
                                                    <!-- Mitad inferior para el título de la imagen -->
                                                    <form class="botones-carrucel-cursos"
                                                        action="index.php?c=usuarios&a=claseMuestraNavegacion"
                                                        method="post">
                                                        <!-- Campo oculto para enviar información -->
                                                        <input type="hidden" name="nombreCurso" value="ap teach">
                                                        <button class="clase-muestra">
                                                            <span>Clase muestra</span>
                                                        </button>
                                                    </form>
                                                    <button class="suscripcion">
                                                        <span>proximamente</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <a class="carousel-control-prev" href="#carouselExample5" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next text-faded" href="#carouselExample5" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <p class="cursos-p">Cursos de programación</p>
                    <div id="cursos-slider">
                        <div class="container-fluid">
                            <div id="carouselExample6" class="carousel slide" data-ride="carousel" data-interval="9000">
                                <div class="carousel-inner row w-100 mx-auto" role="listbox">
                                    <div class="carousel-item col-md-3  active">
                                        <div class="panel panel-default">
                                            <div class="prices-1">
                                                <!-- Cuadrado con sombra -->
                                                <div id="image-box">
                                                    <!-- Mitad superior para la imagen -->
                                                    <img src="images/curso/ia.png" alt="Descripción de la imagen">
                                                    <!-- Mitad inferior para el título de la imagen -->
                                                    <form class="botones-carrucel-cursos"
                                                        action="index.php?c=usuarios&a=claseMuestraNavegacion"
                                                        method="post">
                                                        <!-- Campo oculto para enviar información -->
                                                        <input type="hidden" name="nombreCurso" value="ia">
                                                        <button class="clase-muestra">
                                                            <span>Clase muestra</span>
                                                        </button>
                                                    </form>
                                                    <button class="suscripcion">
                                                        <span>proximamente</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item col-md-3 ">
                                        <div class="panel panel-default">
                                            <div class="prices-1">
                                                <!-- Cuadrado con sombra -->
                                                <div id="image-box">
                                                    <!-- Mitad superior para la imagen -->
                                                    <img src="images/curso/thunkable.png"
                                                        alt="Descripción de la imagen">
                                                    <!-- Mitad inferior para el título de la imagen -->
                                                    <form class="botones-carrucel-cursos"
                                                        action="index.php?c=usuarios&a=claseMuestraNavegacion"
                                                        method="post">
                                                        <!-- Campo oculto para enviar información -->
                                                        <input type="hidden" name="nombreCurso" value="thunkable">
                                                        <button class="clase-muestra">
                                                            <span>Clase muestra</span>
                                                        </button>
                                                    </form>
                                                    <button class="suscripcion">
                                                        <span>proximamente</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <a class="carousel-control-prev" href="#carouselExample6" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next text-faded" href="#carouselExample6" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <p class="cursos-p">Cursos de dibujo e Ilustración digital</p>
                    <div id="cursos-slider">
                        <div class="container-fluid">
                            <div id="carouselExample7" class="carousel slide" data-ride="carousel" data-interval="9000">
                                <div class="carousel-inner row w-100 mx-auto" role="listbox">
                                    <div class="carousel-item col-md-3  active">
                                        <div class="panel panel-default">
                                            <div class="prices-1">
                                                <!-- Cuadrado con sombra -->
                                                <div id="image-box">
                                                    <!-- Mitad superior para la imagen -->
                                                    <img src="images/curso/illustrator.png"
                                                        alt="Descripción de la imagen">
                                                    <!-- Mitad inferior para el título de la imagen -->
                                                    <form class="botones-carrucel-cursos"
                                                        action="index.php?c=usuarios&a=claseMuestraNavegacion"
                                                        method="post">
                                                        <!-- Campo oculto para enviar información -->
                                                        <input type="hidden" name="nombreCurso" value="illustrator">
                                                        <button class="clase-muestra">
                                                            <span>Clase muestra</span>
                                                        </button>
                                                    </form>
                                                    <button class="suscripcion">
                                                        <span>proximamente</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item col-md-3 ">
                                        <div class="panel panel-default">
                                            <div class="prices-1">
                                                <!-- Cuadrado con sombra -->
                                                <div id="image-box">
                                                    <!-- Mitad superior para la imagen -->
                                                    <img src="images/curso/photoshop.png"
                                                        alt="Descripción de la imagen">
                                                    <!-- Mitad inferior para el título de la imagen -->
                                                    <form class="botones-carrucel-cursos"
                                                        action="index.php?c=usuarios&a=claseMuestraNavegacion"
                                                        method="post">
                                                        <!-- Campo oculto para enviar información -->
                                                        <input type="hidden" name="nombreCurso" value="photoshop">
                                                        <button class="clase-muestra">
                                                            <span>Clase muestra</span>
                                                        </button>
                                                    </form>
                                                    <button class="suscripcion">
                                                        <span>proximamente</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item col-md-3 ">
                                        <div class="panel panel-default">
                                            <div class="prices-1">
                                                <!-- Cuadrado con sombra -->
                                                <div id="image-box">
                                                    <!-- Mitad superior para la imagen -->
                                                    <img src="images/curso/dibujo.png" alt="Descripción de la imagen">
                                                    <!-- Mitad inferior para el título de la imagen -->
                                                    <form class="botones-carrucel-cursos"
                                                        action="index.php?c=usuarios&a=claseMuestraNavegacion"
                                                        method="post">
                                                        <!-- Campo oculto para enviar información -->
                                                        <input type="hidden" name="nombreCurso"
                                                            value="dibujo tradicional">
                                                        <button class="clase-muestra">
                                                            <span>Clase muestra</span>
                                                        </button>
                                                    </form>
                                                    <button class="suscripcion">
                                                        <span>proximamente</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <a class="carousel-control-prev" href="#carouselExample7" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next text-faded" href="#carouselExample7" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <p class="cursos-p">Cursos de Data Mining</p>
                    <div id="cursos-slider">
                        <div class="container-fluid">
                            <div id="carouselExample8" class="carousel slide" data-ride="carousel" data-interval="9000">
                                <div class="carousel-inner row w-100 mx-auto" role="listbox">
                                    <div class="carousel-item col-md-3  active">
                                        <div class="panel panel-default">
                                            <div class="prices-1">
                                                <!-- Cuadrado con sombra -->
                                                <div id="image-box">
                                                    <!-- Mitad superior para la imagen -->
                                                    <img src="images/curso/databricks.png"
                                                        alt="Descripción de la imagen">
                                                    <!-- Mitad inferior para el título de la imagen -->
                                                    <form class="botones-carrucel-cursos"
                                                        action="index.php?c=usuarios&a=claseMuestraNavegacion"
                                                        method="post">
                                                        <!-- Campo oculto para enviar información -->
                                                        <input type="hidden" name="nombreCurso" value="databricks">
                                                        <button class="clase-muestra">
                                                            <span>Clase muestra</span>
                                                        </button>
                                                    </form>
                                                    <button class="suscripcion">
                                                        <span>proximamente</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <a class="carousel-control-prev" href="#carouselExample8" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next text-faded" href="#carouselExample8" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <p class="cursos-p">Cursos de Administración y finanzas</p>
                    <div id="cursos-slider">
                        <div class="container-fluid">
                            <div id="carouselExample9" class="carousel slide" data-ride="carousel" data-interval="9000">
                                <div class="carousel-inner row w-100 mx-auto" role="listbox">
                                    <div class="carousel-item col-md-3  active">
                                        <div class="panel panel-default">
                                            <div class="prices-1">
                                                <!-- Cuadrado con sombra -->
                                                <div id="image-box">
                                                    <!-- Mitad superior para la imagen -->
                                                    <img src="images/curso/excel.png" alt="Descripción de la imagen">
                                                    <!-- Mitad inferior para el título de la imagen -->
                                                    <form class="botones-carrucel-cursos"
                                                        action="index.php?c=usuarios&a=claseMuestraNavegacion"
                                                        method="post">
                                                        <!-- Campo oculto para enviar información -->
                                                        <input type="hidden" name="nombreCurso" value="excel">
                                                        <button class="clase-muestra">
                                                            <span>Clase muestra</span>
                                                        </button>
                                                    </form>
                                                    <button class="suscripcion">
                                                        <span>proximamente</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item col-md-3 ">
                                        <div class="panel panel-default">
                                            <div class="prices-1">
                                                <!-- Cuadrado con sombra -->
                                                <div id="image-box">
                                                    <!-- Mitad superior para la imagen -->
                                                    <img src="images/curso/inversion.png"
                                                        alt="Descripción de la imagen">
                                                    <!-- Mitad inferior para el título de la imagen -->
                                                    <form class="botones-carrucel-cursos"
                                                        action="index.php?c=usuarios&a=claseMuestraNavegacion"
                                                        method="post">
                                                        <!-- Campo oculto para enviar información -->
                                                        <input type="hidden" name="nombreCurso" value="inversion">
                                                        <button class="clase-muestra">
                                                            <span>Clase muestra</span>
                                                        </button>
                                                    </form>
                                                    <button class="suscripcion">
                                                        <span>proximamente</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item col-md-3 ">
                                        <div class="panel panel-default">
                                            <div class="prices-1">
                                                <!-- Cuadrado con sombra -->
                                                <div id="image-box">
                                                    <!-- Mitad superior para la imagen -->
                                                    <img src="images/curso/emprendimiento-e-innovacion.png"
                                                        alt="Descripción de la imagen">
                                                    <!-- Mitad inferior para el título de la imagen -->
                                                    <form class="botones-carrucel-cursos"
                                                        action="index.php?c=usuarios&a=claseMuestraNavegacion"
                                                        method="post">
                                                        <!-- Campo oculto para enviar información -->
                                                        <input type="hidden" name="nombreCurso"
                                                            value="emprendimiento e innovacion">
                                                        <button class="clase-muestra">
                                                            <span>Clase muestra</span>
                                                        </button>
                                                    </form>
                                                    <button class="suscripcion">
                                                        <span>proximamente</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item col-md-3 ">
                                        <div class="panel panel-default">
                                            <div class="prices-1">
                                                <!-- Cuadrado con sombra -->
                                                <div id="image-box">
                                                    <!-- Mitad superior para la imagen -->
                                                    <img src="images/curso/finanzas-personales.png"
                                                        alt="Descripción de la imagen">
                                                    <!-- Mitad inferior para el título de la imagen -->
                                                    <form class="botones-carrucel-cursos"
                                                        action="index.php?c=usuarios&a=claseMuestraNavegacion"
                                                        method="post">
                                                        <!-- Campo oculto para enviar información -->
                                                        <input type="hidden" name="nombreCurso"
                                                            value="finanzas personales">
                                                        <button class="clase-muestra">
                                                            <span>Clase muestra</span>
                                                        </button>
                                                    </form>
                                                    <button class="suscripcion">
                                                        <span>proximamente</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <a class="carousel-control-prev" href="#carouselExample9" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next text-faded" href="#carouselExample9" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <p class="cursos-p">Curso de modelado 2D y 3D</p>
                    <div id="cursos-slider">
                        <div class="container-fluid">
                            <div id="carouselExample10" class="carousel slide" data-ride="carousel"
                                data-interval="9000">
                                <div class="carousel-inner row w-100 mx-auto" role="listbox">
                                    <div class="carousel-item col-md-3  active">
                                        <div class="panel panel-default">
                                            <div class="prices-1">
                                                <!-- Cuadrado con sombra -->
                                                <div id="image-box">
                                                    <!-- Mitad superior para la imagen -->
                                                    <img src="images/curso/blender.png" alt="Descripción de la imagen">
                                                    <!-- Mitad inferior para el título de la imagen -->
                                                    <form class="botones-carrucel-cursos"
                                                        action="index.php?c=usuarios&a=claseMuestraNavegacion"
                                                        method="post">
                                                        <!-- Campo oculto para enviar información -->
                                                        <input type="hidden" name="nombreCurso" value="blender">
                                                        <button class="clase-muestra">
                                                            <span>Clase muestra</span>
                                                        </button>
                                                    </form>
                                                    <button class="suscripcion">
                                                        <span>proximamente</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <a class="carousel-control-prev" href="#carouselExample10" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next text-faded" href="#carouselExample10" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="video-popup" class="video-popup">
                    <div class="video-container">
                        <video id="video-popup-player" controls>
                            <source src="" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <button id="close-video-popup" class="close-btn">X</button>
                    </div>
                </div>


                <div class="informacion">
                </div>
        </section>
    </main>


</body>
<script>
    function mostrarContenidoAreas() {
        var contenidoAdicional = document.getElementById("contenido-areas");
        contenidoAdicional.style.display = "block";
        var contenidoFooter = document.getElementById("footer");
        contenidoFooter.style.display = "flex";

        // Oculta el contenido adicional de Master Teach si está visible
        var contenidoMasterTeach = document.getElementById("contenido-master-teach");
        contenidoMasterTeach.style.display = "none";
    }

    function mostrarContenidoMasterTeach() {
        var contenidoMasterTeach = document.getElementById("contenido-master-teach");
        contenidoMasterTeach.style.display = "block";

        // Oculta el contenido adicional de "Areas de aprendizaje" si está visible
        var contenidoAdicional = document.getElementById("contenido-areas");
        contenidoAdicional.style.display = "none";
        // Oculta el contenido footer si está visible
        var contenidoFooter = document.getElementById("footer");
        contenidoFooter.style.display = "none";
        // Oculta el contenido adicional de "contenido-mas" si está visible
        var contenidoMas = document.getElementById("contenido-mas");
        contenidoMas.style.display = "none";
    }

    function mostrarMas() {
        var contenidoMas = document.getElementById("contenido-mas");
        contenidoMas.style.display = "block";
    }





    ///FUNCIONES PARA LA PREVISUALIZACION DE VIDEO EN SLIDER***********************************************************
    // Obtener todos los elementos de video y previsualización
    const videos = document.querySelectorAll('.carousel-item video');
    const playIcons = document.querySelectorAll('.carousel-item .play-icon');
    const videoPopup = document.getElementById('video-popup');
    const videoPopupPlayer = document.getElementById('video-popup-player');
    const closeVideoPopup = document.getElementById('close-video-popup');

    // Iterar sobre cada elemento de video y previsualización
    videos.forEach((video, index) => {
        // Escuchar el evento 'loadedmetadata' para asegurarse de que el video esté cargado
        video.addEventListener('loadedmetadata', function () {
            // Obtener el cuadro del video en el segundo 0 (puedes ajustar esto si lo deseas)
            video.currentTime = 1;
        });

    });


    playIcons.forEach((playIcon) => {
        playIcon.addEventListener('click', function () {
            const videoSrc = playIcon.dataset.videoSrc; // Obtener la URL del video del atributo personalizado
            videoPopupPlayer.src = videoSrc;
            videoPopup.style.display = 'block';
        });
    });

    closeVideoPopup.addEventListener('click', function () {
        videoPopup.style.display = 'none';
        videoPopupPlayer.pause(); // Pausar el video al cerrar la ventana emergente
    });
</script>

</html>