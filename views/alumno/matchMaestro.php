<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carousel con Bootstrap</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="Views/style/carrucel.css">

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
            background-image: url(images/wido/header.png);
            background-position: center top;
            background-repeat: no-repeat;
            background-size: 100%, cover;
            /* Ajusta el tamaño de las imágenes de fondo */
            min-height: 160vh;
            display: flex;
            align-items: center;
            position: relative;
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
    </header>
    <p class="cursos-p1">Encontramos a los siguientes mentores de acuerdo a tus horarios:</p>
    <div id="cursos-slider">
        <div class="container-fluid">
            <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="9000">
                <div class="carousel-inner row w-100 mx-auto" role="listbox">
                    <?php foreach ($fotos as $index => $fotoCurso): ?>
                        <div class="carousel-item col-md-3 <?php echo $index === 0 ? 'active' : ''; ?>">
                            <div class="panel panel-default">
                                <div class="prices-1">
                                    <!-- Cuadrado con sombra -->
                                    <?php if (pathinfo($fotoCurso, PATHINFO_EXTENSION) === 'mp4'): ?>
                                        <!-- Vista previa del video con ícono de reproducción -->
                                        <div class="video-preview" id="video-box">
                                            <video id="video">
                                                <source src="<?php echo $fotoCurso ?>" type="video/mp4">
                                                Your browser does not support the video tag.
                                            </video>
                                            <div class="play-icon"></div>
                                            <!-- Ventana emergente para reproducir el video -->
                                            <div class="play-icon" data-video-src="<?php echo $fotoCurso; ?>">
                                            </div>

                                        <?php else: ?>
                                            <div id="image-box">
                                                <!-- Es una imagen -->
                                                <img src="<?php echo $fotoCurso ?>" alt="">
                                            <?php endif; ?>
                                            <form class="botones-carrucel-cursos"
                                                action="index.php?c=docentes&a=perfilDocente" method="post">
                                                <input type="hidden" name="nombre"
                                                    value="<?php echo $informacion2[$index]['nombre']; ?>">
                                                <button class="suscripcion">
                                                    <span>Ver perfil</span>
                                                </button>
                                            </form>
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

        <div id="video-popup" class="video-popup">
            <div class="video-container">
                <video id="video-popup-player" controls>
                    <source src="" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <button id="close-video-popup" class="close-btn">X</button>
            </div>
        </div>

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