<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!--========== Tailwind ==========-->
    <link rel="stylesheet" href="styles/output.css">

    <link rel="stylesheet" href="Views/style/carrucel.css">

    <!--========== Swiper CSS ==========-->
    <link rel="stylesheet" href="styles/swiper-bundle.min.css">

    <!--========== BOX ICONS ==========-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

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
        font-size: 22px;
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
        margin: -10% auto;
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
        margin-top: -2%;
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


    /***BUSCADOR******************************************************************************************/

    /*========== VARIABLES CSS ==========*/
    :root {
        --header-height: 3.5rem;
        --nav-width: 219px;

        /*========== Colors ==========*/
        --first-color: #6923D0;
        --first-color-light: #F4F0FA;
        --title-color: #19181B;
        --text-color: #58555E;
        --text-color-light: #A5A1AA;
        --body-color: #F9F6FD;
        --container-color: #FFFFFF;
    }

    /*========== HEADER ==========*/
    .header__container {
        display: flex;
        align-items: center;
        height: var(--header-height);
        justify-content: space-between;

    }


    .header__search {
        display: flex;
        padding: .40rem .75rem;
        background-color: #D9F9FF;
        border-radius: .25rem;
        border-radius: 20px;
        margin: 0% auto;
        /* Centra en medio de la página */
        width: 80%;
    }

    .header__input {
        padding-left: 5px;
        width: 100%;
        border: none;
        outline: none;
        margin-left: 15px;
        background-color: #D9F9FF;
        border-left: 2px solid #009BB8;
    }

    .header__input::placeholder {
        font-family: var(--body-font);
        color: var(--text-color);
    }

    .header__icon,
    .header__toggle {
        font-size: 1.2rem;
    }

    .resultados {
        display: block;
        padding: .40rem .75rem;
        background-color: white;
        border-radius: .25rem;
        border-radius: 20px;
        margin: 0% auto;
        /* Centra en medio de la página */
        width: 80%;
    }
    </style>

    <!--AREAS APRENDISAJE CARRUCEL-->
    <script>
    $('.carousel').each(function() {
        var $carousel = $(this);
        $carousel.on('slide.bs.carousel', function(e) {
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

    $(document).ready(function() {
        /* show lightbox when clicking a thumbnail */
        $('a.thumb').click(function(event) {
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
                <?php if ($mostrar) : ?>

                <?php else : ?>
                <div class="section-3">
                    <!--index.php?c=usuarios&a=login-->
                    <a href="index.php?c=Usuarios&a=login" class="button">Clase muestra gratuita</a>
                </div>
                <?php endif; ?>
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
            <br>

            <!--Areas aprendizaje style="display: none;"-->
            <div id="contenido-areas" class="prices-1">
                <div class="contenedor-1">
                    <!-- Formulario para buscar -->
                    <div class="header__container">
                        <div class="header__search">
                            <i id="buscar" class='bx bx-search header__icon'></i>
                            <form>
                                <input type="text" id="busqueda" class="header__input"
                                    placeholder="¿Qué deseas aprender?">
                            </form>
                        </div>
                    </div>
                    <!-- Codigo de ajax -->

                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                    <script>
                    $(document).ready(function() {
                        $('#buscar').click(function() {
                            var busqueda = $('#busqueda').val();
                            $.ajax({
                                type: "POST",
                                url: "index.php?c=cursos&a=cursos",
                                data: {
                                    busqueda: busqueda
                                },
                                dataType: 'json',
                                success: function(response) {
                                    console.log(response);
                                    $('#resultados')
                                        .empty(); // Limpiamos el contenedor de resultados antes de agregar nuevos resultados
                                    // Verificamos si se encontraron cursos
                                    if (response.length > 0) {
                                        // Iteramos sobre cada curso y creamos un elemento h3 para mostrarlo
                                        response.forEach(function(curso) {
                                            //Aca modifica para que tenga link
                                            $('#resultados').append(
                                                '<a href="www.google.com">' +
                                                curso.titulo + '</a><br>');
                                        });
                                    } else {
                                        // Si no se encontraron cursos, mostramos un mensaje
                                        $('#resultados').append(
                                            '<p>No se encontraron cursos.</p>');
                                    }

                                },
                                error: function(xhr, status, error) {
                                    console.error(xhr.responseText);
                                }
                            });
                        });
                    });
                    </script>

                    <div class="resultados" id="resultados">

                    </div>
                </div>
                <p class="cursos-p">CURSOS TOP (con mayor demanda)</p>
                <div class="flex">
                    <div class="py-10 px-5 max-w-[88%] mx-28 swiper">
                        <div class=" card__content">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="w-[23rem] h-[27.5rem] rounded-[2rem] bg-[#2E3532]">
                                        <div class="w-full h-1/2">
                                            <img src="images/curso/emprendimiento-e-innovacion.png"
                                                class="w-full h-full" alt="Descripción de la imagen">
                                        </div>
                                        <div class="w-full h-1/2 flex justify-center flex-col">
                                            <form class="w-full flex my-2 justify-center"
                                                action="index.php?c=Usuarios&a=claseMuestraNavegacion" method="post">

                                                <input type="hidden" name="nombreCurso"
                                                    value="emprendimiento e innovacion">
                                                <button
                                                    class="w-[80%] bg-[#FEC400] rounded-3xl text-[#2E3532] font-bold">
                                                    <span>Clase muestra</span>
                                                </button>
                                            </form>
                                            <button
                                                class="w-[80%] mx-auto mt-3 mb-4 bg-slate-500 rounded-3xl text-slate-400">
                                                <span>proximamente</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="w-[23rem] h-[27.5rem] rounded-[2rem] bg-[#2E3532]">
                                        <div class="w-full h-1/2">
                                            <img src="images/curso/emprendimiento-e-innovacion.png"
                                                class="w-full h-full" alt="Descripción de la imagen">
                                        </div>
                                        <div class="w-full h-1/2 flex justify-center flex-col">
                                            <form class="w-full flex my-2 justify-center"
                                                action="index.php?c=Usuarios&a=claseMuestraNavegacion" method="post">

                                                <input type="hidden" name="nombreCurso"
                                                    value="emprendimiento e innovacion">
                                                <button
                                                    class="w-[80%] bg-[#FEC400] rounded-3xl text-[#2E3532] font-bold">
                                                    <span>Clase muestra</span>
                                                </button>
                                            </form>
                                            <button
                                                class="w-[80%] mx-auto mt-3 mb-4 bg-slate-500 rounded-3xl text-slate-400">
                                                <span>proximamente</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="w-[23rem] h-[27.5rem] rounded-[2rem] bg-[#2E3532]">
                                        <div class="w-full h-1/2">
                                            <img src="images/curso/emprendimiento-e-innovacion.png"
                                                class="w-full h-full" alt="Descripción de la imagen">
                                        </div>
                                        <div class="w-full h-1/2 flex justify-center flex-col">
                                            <form class="w-full flex my-2 justify-center"
                                                action="index.php?c=Usuarios&a=claseMuestraNavegacion" method="post">

                                                <input type="hidden" name="nombreCurso"
                                                    value="emprendimiento e innovacion">
                                                <button
                                                    class="w-[80%] bg-[#FEC400] rounded-3xl text-[#2E3532] font-bold">
                                                    <span>Clase muestra</span>
                                                </button>
                                            </form>
                                            <button
                                                class="w-[80%] mx-auto mt-3 mb-4 bg-slate-500 rounded-3xl text-slate-400">
                                                <span>proximamente</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="w-[23rem] h-[27.5rem] rounded-[2rem] bg-[#2E3532]">
                                        <div class="w-full h-1/2">
                                            <img src="images/curso/emprendimiento-e-innovacion.png"
                                                class="w-full h-full" alt="Descripción de la imagen">
                                        </div>
                                        <div class="w-full h-1/2 flex justify-center flex-col">
                                            <form class="w-full flex my-2 justify-center"
                                                action="index.php?c=Usuarios&a=claseMuestraNavegacion" method="post">

                                                <input type="hidden" name="nombreCurso"
                                                    value="emprendimiento e innovacion">
                                                <button
                                                    class="w-[80%] bg-[#FEC400] rounded-3xl text-[#2E3532] font-bold">
                                                    <span>Clase muestra</span>
                                                </button>
                                            </form>
                                            <button
                                                class="w-[80%] mx-auto mt-3 mb-4 bg-slate-500 rounded-3xl text-slate-400">
                                                <span>proximamente</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <br>
                <p class="cursos-p">ASESORÍAS ACADEMICAS/LABORALES</p>
                <div id="cursos-slider">
                    <div class="container-fluid">
                        <div id="carouselExample3" class="carousel slide" data-ride="carousel" data-interval="9000">
                            <div class="carousel-inner row w-100 mx-auto" role="listbox">
                                <?php foreach ($consultaAsesorias as $key => $asesoria) : ?>
                                <div class="carousel-item col-md-3 <?php echo $key === 0 ? 'active' : ''; ?>">
                                    <div class="panel panel-default">
                                        <div class="prices-1">
                                            <!-- Cuadrado con sombra -->
                                            <?php if (pathinfo($asesoria['foto'], PATHINFO_EXTENSION) === 'mp4') : ?>
                                            <!-- Vista previa del video con ícono de reproducción -->
                                            <div class="video-preview" id="video-box">
                                                <video id="video">
                                                    <source src="<?php echo $asesoria['foto']; ?>" type="video/mp4">
                                                    Your browser does not support the video tag.
                                                </video>
                                                <div class="play-icon"></div>
                                                <!-- Ventana emergente para reproducir el video -->
                                                <div class="play-icon"
                                                    data-video-src="<?php echo $asesoria['foto']; ?>">
                                                </div>

                                                <?php else : ?>
                                                <div id="image-box">
                                                    <!-- Es una imagen -->
                                                    <img src="<?php echo $asesoria['foto']; ?>" alt="">
                                                    <?php endif; ?>
                                                    <!-- Mitad inferior para el título de la imagen o video -->
                                                    <form class="botones-carrucel"
                                                        action="index.php?c=Usuarios&a=claseMuestraNavegacionAsesoria"
                                                        method="post">
                                                        <!-- Campo oculto para enviar información -->
                                                        <input type="hidden" name="nombre"
                                                            value="<?php echo $asesoria['nombre']; ?>">
                                                        <button class="clase-muestra" style="width: 100%;">
                                                            <span>Clase muestra</span>
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
                            <div id="carouselExample15" class="carousel slide" data-ride="carousel"
                                data-interval="9000">
                                <div class="carousel-inner row w-100 mx-auto" role="listbox">
                                    <?php foreach ($consultaDocentes as $key => $docente) : ?>
                                    <div class="carousel-item col-md-3 <?php echo $key === 0 ? 'active' : ''; ?>">
                                        <div class="panel panel-default">
                                            <div class="prices-1">
                                                <!-- Cuadrado con sombra -->
                                                <?php if (pathinfo($docente['foto'], PATHINFO_EXTENSION) === 'mp4') : ?>
                                                <!-- Vista previa del video con ícono de reproducción -->
                                                <div class="video-preview" id="video-box">
                                                    <video id="video">
                                                        <source src="<?php echo $docente['foto']; ?>" type="video/mp4">
                                                        Your browser does not support the video tag.
                                                    </video>
                                                    <div class="play-icon"></div>
                                                    <!-- Ventana emergente para reproducir el video -->
                                                    <div class="play-icon"
                                                        data-video-src="<?php echo $docente['foto']; ?>">
                                                    </div>

                                                    <?php else : ?>
                                                    <div id="image-box">
                                                        <!-- Es una imagen -->
                                                        <img src="<?php echo $docente['foto']; ?>"
                                                            alt="Foto de <?php echo $docente['nombre']; ?>">
                                                        <?php endif; ?>
                                                        <!-- Mitad inferior para el título de la imagen o video -->
                                                        <form class="botones-carrucel"
                                                            action="index.php?c=Docentes&a=perfilDocente" method="post">
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
                                <div id="carouselExample2" class="carousel slide" data-ride="carousel"
                                    data-interval="9000">
                                    <div class="carousel-inner row w-100 mx-auto" role="listbox">
                                        <div class="carousel-item col-md-3 active">
                                            <div class="panel panel-default">
                                                <div class="prices-1">
                                                    <!-- Cuadrado con sombra -->
                                                    <div id="image-box">
                                                        <!-- Mitad superior para la imagen -->
                                                        <img src="images/curso/ajedrez.png"
                                                            alt="Descripción de la imagen">
                                                        <!-- Mitad inferior para el título de la imagen -->
                                                        <form class="botones-carrucel-cursos"
                                                            action="index.php?c=Usuarios&a=claseMuestraNavegacion"
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

                        <p class="cursos-p">Cursos de voz</p>
                        <div id="cursos-slider">
                            <div class="container-fluid">
                                <div id="carouselExample25" class="carousel slide" data-ride="carousel"
                                    data-interval="9000">
                                    <div class="carousel-inner row w-100 mx-auto" role="listbox">
                                        <div class="carousel-item col-md-3  active">
                                            <div class="panel panel-default">
                                                <div class="prices-1">
                                                    <!-- Cuadrado con sombra -->
                                                    <div id="image-box">
                                                        <!-- Mitad superior para la imagen -->
                                                        <img src="images/curso/oratoria.png"
                                                            alt="Descripción de la imagen">
                                                        <!-- Mitad inferior para el título de la imagen -->
                                                        <form class="botones-carrucel-cursos"
                                                            action="index.php?c=Usuarios&a=claseMuestraNavegacion"
                                                            method="post">
                                                            <!-- Campo oculto para enviar información -->
                                                            <input type="hidden" name="nombreCurso" value="oratoria">
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
                                                        <img src="images/curso/locucion.png"
                                                            alt="Descripción de la imagen">
                                                        <!-- Mitad inferior para el título de la imagen -->
                                                        <form class="botones-carrucel-cursos"
                                                            action="index.php?c=Usuarios&a=claseMuestraNavegacion"
                                                            method="post">
                                                            <!-- Campo oculto para enviar información -->
                                                            <input type="hidden" name="nombreCurso"
                                                                value="locucion y doblaje">
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
                                    <a class="carousel-control-prev" href="#carouselExample25" role="button"
                                        data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next text-faded" href="#carouselExample25" role="button"
                                        data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <p class="cursos-p">Cursos de videojuegos</p>
                        <div id="cursos-slider">
                            <div class="container-fluid">
                                <div id="carouselExample4" class="carousel slide" data-ride="carousel"
                                    data-interval="9000">
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
                                                            action="index.php?c=Usuarios&a=claseMuestraNavegacion"
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
                                                        <img src="images/curso/unity3d.png"
                                                            alt="Descripción de la imagen">
                                                        <!-- Mitad inferior para el título de la imagen -->
                                                        <form class="botones-carrucel-cursos"
                                                            action="index.php?c=Usuarios&a=claseMuestraNavegacion"
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
                                                        <img src="images/curso/unity2d.png"
                                                            alt="Descripción de la imagen">
                                                        <!-- Mitad inferior para el título de la imagen -->
                                                        <form class="botones-carrucel-cursos"
                                                            action="index.php?c=Usuarios&a=claseMuestraNavegacion"
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
                                                        <img src="images/curso/gdevelop.png"
                                                            alt="Descripción de la imagen">
                                                        <!-- Mitad inferior para el título de la imagen -->
                                                        <form class="botones-carrucel-cursos"
                                                            action="index.php?c=Usuarios&a=claseMuestraNavegacion"
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
                                                        <img src="images/curso/roblox.png"
                                                            alt="Descripción de la imagen">
                                                        <!-- Mitad inferior para el título de la imagen -->
                                                        <form class="botones-carrucel-cursos"
                                                            action="index.php?c=Usuarios&a=claseMuestraNavegacion"
                                                            method="post">
                                                            <!-- Campo oculto para enviar información -->
                                                            <input type="hidden" name="nombreCurso"
                                                                value="roblox studio">
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
                                                        <img src="images/curso/lego.png" alt="Descripción de la imagen">
                                                        <!-- Mitad inferior para el título de la imagen -->
                                                        <form class="botones-carrucel-cursos"
                                                            action="index.php?c=Usuarios&a=claseMuestraNavegacion"
                                                            method="post">
                                                            <!-- Campo oculto para enviar información -->
                                                            <input type="hidden" name="nombreCurso"
                                                                value="lego fornite">
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

                        <p class="cursos-p">Cursos de salud y bienestar</p>
                        <div id="cursos-slider">
                            <div class="container-fluid">
                                <div id="carouselExample4" class="carousel slide" data-ride="carousel"
                                    data-interval="9000">
                                    <div class="carousel-inner row w-100 mx-auto" role="listbox">
                                        <div class="carousel-item col-md-3  active">
                                            <div class="panel panel-default">
                                                <div class="prices-1">
                                                    <!-- Cuadrado con sombra -->
                                                    <div id="image-box">
                                                        <!-- Mitad superior para la imagen -->
                                                        <img src="images/curso/emociones.png"
                                                            alt="Descripción de la imagen">
                                                        <!-- Mitad inferior para el título de la imagen -->
                                                        <form class="botones-carrucel-cursos"
                                                            action="index.php?c=Usuarios&a=claseMuestraNavegacion"
                                                            method="post">
                                                            <!-- Campo oculto para enviar información -->
                                                            <input type="hidden" name="nombreCurso" value="emociones">
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

                        <p class="cursos-p">Cursos de robótica</p>
                        <div id="cursos-slider">
                            <div class="container-fluid">
                                <div id="carouselExample5" class="carousel slide" data-ride="carousel"
                                    data-interval="9000">
                                    <div class="carousel-inner row w-100 mx-auto" role="listbox">
                                        <div class="carousel-item col-md-3  active">
                                            <div class="panel panel-default">
                                                <div class="prices-1">
                                                    <!-- Cuadrado con sombra -->
                                                    <div id="image-box">
                                                        <!-- Mitad superior para la imagen -->
                                                        <img src="images/curso/roboticamovil.png"
                                                            alt="Descripción de la imagen">
                                                        <!-- Mitad inferior para el título de la imagen -->
                                                        <form class="botones-carrucel-cursos"
                                                            action="index.php?c=Usuarios&a=claseMuestraNavegacion"
                                                            method="post">
                                                            <!-- Campo oculto para enviar información -->
                                                            <input type="hidden" name="nombreCurso"
                                                                value="robotica movil">
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
                                                        <img src="images/curso/robotica.png"
                                                            alt="Descripción de la imagen">
                                                        <!-- Mitad inferior para el título de la imagen -->
                                                        <form class="botones-carrucel-cursos"
                                                            action="index.php?c=Usuarios&a=claseMuestraNavegacion"
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

                        <p class="cursos-p">Cursos de programación</p>
                        <div id="cursos-slider">
                            <div class="container-fluid">
                                <div id="carouselExample6" class="carousel slide" data-ride="carousel"
                                    data-interval="9000">
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
                                                            action="index.php?c=Usuarios&a=claseMuestraNavegacion"
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
                                                        <img src="images/curso/chatgpt.png"
                                                            alt="Descripción de la imagen">
                                                        <!-- Mitad inferior para el título de la imagen -->
                                                        <form class="botones-carrucel-cursos"
                                                            action="index.php?c=Usuarios&a=claseMuestraNavegacion"
                                                            method="post">
                                                            <!-- Campo oculto para enviar información -->
                                                            <input type="hidden" name="nombreCurso" value="chatgpt">
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
                                                        <img src="images/curso/moviles-1.png"
                                                            alt="Descripción de la imagen">
                                                        <!-- Mitad inferior para el título de la imagen -->
                                                        <form class="botones-carrucel-cursos"
                                                            action="index.php?c=Usuarios&a=claseMuestraNavegacion"
                                                            method="post">
                                                            <!-- Campo oculto para enviar información -->
                                                            <input type="hidden" name="nombreCurso" value="moviles-1">
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
                                                        <img src="images/curso/ciberseguridad.png"
                                                            alt="Descripción de la imagen">
                                                        <!-- Mitad inferior para el título de la imagen -->
                                                        <form class="botones-carrucel-cursos"
                                                            action="index.php?c=Usuarios&a=claseMuestraNavegacion"
                                                            method="post">
                                                            <!-- Campo oculto para enviar información -->
                                                            <input type="hidden" name="nombreCurso"
                                                                value="ciberseguridad">
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
                                                        <img src="images/curso/web.png" alt="Descripción de la imagen">
                                                        <!-- Mitad inferior para el título de la imagen -->
                                                        <form class="botones-carrucel-cursos"
                                                            action="index.php?c=Usuarios&a=claseMuestraNavegacion"
                                                            method="post">
                                                            <!-- Campo oculto para enviar información -->
                                                            <input type="hidden" name="nombreCurso" value="web">
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
                                                        <img src="images/curso/movil-2.png"
                                                            alt="Descripción de la imagen">
                                                        <!-- Mitad inferior para el título de la imagen -->
                                                        <form class="botones-carrucel-cursos"
                                                            action="index.php?c=Usuarios&a=claseMuestraNavegacion"
                                                            method="post">
                                                            <!-- Campo oculto para enviar información -->
                                                            <input type="hidden" name="nombreCurso" value="movil-2">
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
                                                        <img src="images/curso/python.png"
                                                            alt="Descripción de la imagen">
                                                        <!-- Mitad inferior para el título de la imagen -->
                                                        <form class="botones-carrucel-cursos"
                                                            action="index.php?c=Usuarios&a=claseMuestraNavegacion"
                                                            method="post">
                                                            <!-- Campo oculto para enviar información -->
                                                            <input type="hidden" name="nombreCurso" value="python">
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

                        <p class="cursos-p">Cursos de musica</p>
                        <div id="cursos-slider">
                            <div class="container-fluid">
                                <div id="carouselExample6" class="carousel slide" data-ride="carousel"
                                    data-interval="9000">
                                    <div class="carousel-inner row w-100 mx-auto" role="listbox">
                                        <div class="carousel-item col-md-3  active">
                                            <div class="panel panel-default">
                                                <div class="prices-1">
                                                    <!-- Cuadrado con sombra -->
                                                    <div id="image-box">
                                                        <!-- Mitad superior para la imagen -->
                                                        <img src="images/curso/guitarra.png"
                                                            alt="Descripción de la imagen">
                                                        <!-- Mitad inferior para el título de la imagen -->
                                                        <form class="botones-carrucel-cursos"
                                                            action="index.php?c=Usuarios&a=claseMuestraNavegacion"
                                                            method="post">
                                                            <!-- Campo oculto para enviar información -->
                                                            <input type="hidden" name="nombreCurso" value="guitarra">
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

                        <p class="cursos-p">Cursos de MKt</p>
                        <div id="cursos-slider">
                            <div class="container-fluid">
                                <div id="carouselExample19" class="carousel slide" data-ride="carousel"
                                    data-interval="9000">
                                    <div class="carousel-inner row w-100 mx-auto" role="listbox">
                                        <div class="carousel-item col-md-3  active">
                                            <div class="panel panel-default">
                                                <div class="prices-1">
                                                    <!-- Cuadrado con sombra -->
                                                    <div id="image-box">
                                                        <!-- Mitad superior para la imagen -->
                                                        <img src="images/curso/tiktok.png"
                                                            alt="Descripción de la imagen">
                                                        <!-- Mitad inferior para el título de la imagen -->
                                                        <form class="botones-carrucel-cursos"
                                                            action="index.php?c=Usuarios&a=claseMuestraNavegacion"
                                                            method="post">
                                                            <!-- Campo oculto para enviar información -->
                                                            <input type="hidden" name="nombreCurso" value="tiktok">
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
                                                        <img src="images/curso/branding.png"
                                                            alt="Descripción de la imagen">
                                                        <!-- Mitad inferior para el título de la imagen -->
                                                        <form class="botones-carrucel-cursos"
                                                            action="index.php?c=Usuarios&a=claseMuestraNavegacion"
                                                            method="post">
                                                            <!-- Campo oculto para enviar información -->
                                                            <input type="hidden" name="nombreCurso" value="branding">
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
                                    <a class="carousel-control-prev" href="#carouselExample19" role="button"
                                        data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next text-faded" href="#carouselExample19" role="button"
                                        data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <p class="cursos-p">Cursos de idiomas</p>
                        <div id="cursos-slider">
                            <div class="container-fluid">
                                <div id="carouselExample21" class="carousel slide" data-ride="carousel"
                                    data-interval="9000">
                                    <div class="carousel-inner row w-100 mx-auto" role="listbox">
                                        <div class="carousel-item col-md-3  active">
                                            <div class="panel panel-default">
                                                <div class="prices-1">
                                                    <!-- Cuadrado con sombra -->
                                                    <div id="image-box">
                                                        <!-- Mitad superior para la imagen -->
                                                        <img src="images/curso/aleman.png"
                                                            alt="Descripción de la imagen">
                                                        <!-- Mitad inferior para el título de la imagen -->
                                                        <form class="botones-carrucel-cursos"
                                                            action="index.php?c=Usuarios&a=claseMuestraNavegacion"
                                                            method="post">
                                                            <!-- Campo oculto para enviar información -->
                                                            <input type="hidden" name="nombreCurso" value="aleman">
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
                                                        <img src="images/curso/ingles.png"
                                                            alt="Descripción de la imagen">
                                                        <!-- Mitad inferior para el título de la imagen -->
                                                        <form class="botones-carrucel-cursos"
                                                            action="index.php?c=Usuarios&a=claseMuestraNavegacion"
                                                            method="post">
                                                            <!-- Campo oculto para enviar información -->
                                                            <input type="hidden" name="nombreCurso" value="ingles">
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
                                    <a class="carousel-control-prev" href="#carouselExample21" role="button"
                                        data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next text-faded" href="#carouselExample21" role="button"
                                        data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <p class="cursos-p">Cursos de edicion digital</p>
                        <div id="cursos-slider">
                            <div class="container-fluid">
                                <div id="carouselExample22" class="carousel slide" data-ride="carousel"
                                    data-interval="9000">
                                    <div class="carousel-inner row w-100 mx-auto" role="listbox">
                                        <div class="carousel-item col-md-3  active">
                                            <div class="panel panel-default">
                                                <div class="prices-1">
                                                    <!-- Cuadrado con sombra -->
                                                    <div id="image-box">
                                                        <!-- Mitad superior para la imagen -->
                                                        <img src="images/curso/adobe-premiere.png"
                                                            alt="Descripción de la imagen">
                                                        <!-- Mitad inferior para el título de la imagen -->
                                                        <form class="botones-carrucel-cursos"
                                                            action="index.php?c=Usuarios&a=claseMuestraNavegacion"
                                                            method="post">
                                                            <!-- Campo oculto para enviar información -->
                                                            <input type="hidden" name="nombreCurso"
                                                                value="adobe premiere">
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
                                                        <img src="images/curso/adobe-after.png"
                                                            alt="Descripción de la imagen">
                                                        <!-- Mitad inferior para el título de la imagen -->
                                                        <form class="botones-carrucel-cursos"
                                                            action="index.php?c=Usuarios&a=claseMuestraNavegacion"
                                                            method="post">
                                                            <!-- Campo oculto para enviar información -->
                                                            <input type="hidden" name="nombreCurso" value="adobe after">
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
                                                        <img src="images/curso/fotografia.png"
                                                            alt="Descripción de la imagen">
                                                        <!-- Mitad inferior para el título de la imagen -->
                                                        <form class="botones-carrucel-cursos"
                                                            action="index.php?c=Usuarios&a=claseMuestraNavegacion"
                                                            method="post">
                                                            <!-- Campo oculto para enviar información -->
                                                            <input type="hidden" name="nombreCurso" value="fotografia">
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
                                    <a class="carousel-control-prev" href="#carouselExample22" role="button"
                                        data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next text-faded" href="#carouselExample22" role="button"
                                        data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <p class="cursos-p">Cursos de dibujo e ilustracion digital</p>
                        <div id="cursos-slider">
                            <div class="container-fluid">
                                <div id="carouselExample23" class="carousel slide" data-ride="carousel"
                                    data-interval="9000">
                                    <div class="carousel-inner row w-100 mx-auto" role="listbox">
                                        <div class="carousel-item col-md-3  active">
                                            <div class="panel panel-default">
                                                <div class="prices-1">
                                                    <!-- Cuadrado con sombra -->
                                                    <div id="image-box">
                                                        <!-- Mitad superior para la imagen -->
                                                        <img src="images/curso/manga.png"
                                                            alt="Descripción de la imagen">
                                                        <!-- Mitad inferior para el título de la imagen -->
                                                        <form class="botones-carrucel-cursos"
                                                            action="index.php?c=Usuarios&a=claseMuestraNavegacion"
                                                            method="post">
                                                            <!-- Campo oculto para enviar información -->
                                                            <input type="hidden" name="nombreCurso" value="manga">
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
                                                        <img src="images/curso/ilustracion.png"
                                                            alt="Descripción de la imagen">
                                                        <!-- Mitad inferior para el título de la imagen -->
                                                        <form class="botones-carrucel-cursos"
                                                            action="index.php?c=Usuarios&a=claseMuestraNavegacion"
                                                            method="post">
                                                            <!-- Campo oculto para enviar información -->
                                                            <input type="hidden" name="nombreCurso" value="ilustracion">
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
                                                            action="index.php?c=Usuarios&a=claseMuestraNavegacion"
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
                                                        <img src="images/curso/illustrator.png"
                                                            alt="Descripción de la imagen">
                                                        <!-- Mitad inferior para el título de la imagen -->
                                                        <form class="botones-carrucel-cursos"
                                                            action="index.php?c=Usuarios&a=claseMuestraNavegacion"
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


                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExample23" role="button"
                                        data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next text-faded" href="#carouselExample23" role="button"
                                        data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <p class="cursos-p">Cursos de Data Mining</p>
                        <div id="cursos-slider">
                            <div class="container-fluid">
                                <div id="carouselExample26" class="carousel slide" data-ride="carousel"
                                    data-interval="9000">
                                    <div class="carousel-inner row w-100 mx-auto" role="listbox">
                                        <div class="carousel-item col-md-3  active">
                                            <div class="panel panel-default">
                                                <div class="prices-1">
                                                    <!-- Cuadrado con sombra -->
                                                    <div id="image-box">
                                                        <!-- Mitad superior para la imagen -->
                                                        <img src="images/curso/mysql.png"
                                                            alt="Descripción de la imagen">
                                                        <!-- Mitad inferior para el título de la imagen -->
                                                        <form class="botones-carrucel-cursos"
                                                            action="index.php?c=usuarios&a=claseMuestraNavegacion"
                                                            method="post">
                                                            <!-- Campo oculto para enviar información -->
                                                            <input type="hidden" name="nombreCurso" value="mysql">
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
                                    <a class="carousel-control-prev" href="#carouselExample26" role="button"
                                        data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next text-faded" href="#carouselExample26" role="button"
                                        data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <p class="cursos-p">Cursos de CAD</p>
                        <div id="cursos-slider">
                            <div class="container-fluid">
                                <div id="carouselExample27" class="carousel slide" data-ride="carousel"
                                    data-interval="9000">
                                    <div class="carousel-inner row w-100 mx-auto" role="listbox">
                                        <div class="carousel-item col-md-3  active">
                                            <div class="panel panel-default">
                                                <div class="prices-1">
                                                    <!-- Cuadrado con sombra -->
                                                    <div id="image-box">
                                                        <!-- Mitad superior para la imagen -->
                                                        <img src="images/curso/autocad.png"
                                                            alt="Descripción de la imagen">
                                                        <!-- Mitad inferior para el título de la imagen -->
                                                        <form class="botones-carrucel-cursos"
                                                            action="index.php?c=usuarios&a=claseMuestraNavegacion"
                                                            method="post">
                                                            <!-- Campo oculto para enviar información -->
                                                            <input type="hidden" name="nombreCurso" value="autocad">
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
                                                        <img src="images/curso/solidworks.png"
                                                            alt="Descripción de la imagen">
                                                        <!-- Mitad inferior para el título de la imagen -->
                                                        <form class="botones-carrucel-cursos"
                                                            action="index.php?c=usuarios&a=claseMuestraNavegacion"
                                                            method="post">
                                                            <!-- Campo oculto para enviar información -->
                                                            <input type="hidden" name="nombreCurso" value="solidworks">
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
                                    <a class="carousel-control-prev" href="#carouselExample27" role="button"
                                        data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next text-faded" href="#carouselExample27" role="button"
                                        data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <p class="cursos-p">Cursos de Arte</p>
                        <div id="cursos-slider">
                            <div class="container-fluid">
                                <div id="carouselExample28" class="carousel slide" data-ride="carousel"
                                    data-interval="9000">
                                    <div class="carousel-inner row w-100 mx-auto" role="listbox">
                                        <div class="carousel-item col-md-3  active">
                                            <div class="panel panel-default">
                                                <div class="prices-1">
                                                    <!-- Cuadrado con sombra -->
                                                    <div id="image-box">
                                                        <!-- Mitad superior para la imagen -->
                                                        <img src="images/curso/pastel.png"
                                                            alt="Descripción de la imagen">
                                                        <!-- Mitad inferior para el título de la imagen -->
                                                        <form class="botones-carrucel-cursos"
                                                            action="index.php?c=usuarios&a=claseMuestraNavegacion"
                                                            method="post">
                                                            <!-- Campo oculto para enviar información -->
                                                            <input type="hidden" name="nombreCurso" value="pastel">
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
                                    <a class="carousel-control-prev" href="#carouselExample28" role="button"
                                        data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next text-faded" href="#carouselExample28" role="button"
                                        data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <p class="cursos-p">Cursos de Administracion y finanzas</p>
                        <div id="cursos-slider">
                            <div class="container-fluid">
                                <div id="carouselExample29" class="carousel slide" data-ride="carousel"
                                    data-interval="9000">
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
                                                        <img src="images/curso/excel.png"
                                                            alt="Descripción de la imagen">
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



                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExample29" role="button"
                                        data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next text-faded" href="#carouselExample29" role="button"
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


    <script src="JS/swiper-bundle.min.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="JS/script.js"></script>

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
    video.addEventListener('loadedmetadata', function() {
        // Obtener el cuadro del video en el segundo 0 (puedes ajustar esto si lo deseas)
        video.currentTime = 1;
    });

});


playIcons.forEach((playIcon) => {
    playIcon.addEventListener('click', function() {
        const videoSrc = playIcon.dataset
            .videoSrc; // Obtener la URL del video del atributo personalizado
        videoPopupPlayer.src = videoSrc;
        videoPopup.style.display = 'block';
    });
});

closeVideoPopup.addEventListener('click', function() {
    videoPopup.style.display = 'none';
    videoPopupPlayer.pause(); // Pausar el video al cerrar la ventana emergente
});
</script>

</html>