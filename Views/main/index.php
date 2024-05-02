<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <!--========== Tailwind ==========-->
    <link rel="stylesheet" href="styles/output.css">
    <link rel="stylesheet" href="public/styles/tailwind.css">

    <link rel="stylesheet" href="public/styles/carrucel.css">

    <!--========== Swiper CSS ==========-->
    <link rel="stylesheet" href="public/styles/swiper-bundle.min.css">

    <!--========== BOX ICONS ==========-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php include 'Views/contenido/lateralUsuario.php'; ?>
    <div class="sm:p-16 w-full sm:h-screen">
        <div class="imageBackground w-full sm:h-full h-48 sm:mb-0 mb-96">
            <div class="flex flex-col h-full relative sm:top-0 top-48">
                <div class="sm:w-96 w-44 sm:h-1/3 sm:mx-16 ">
                    <img src="public/images/home/logo.png" class="w-full h-full" alt="">
                </div>
                <div class="sm:h-1/3 sm:text-left sm:text-[2.5rem] text-2xl">
                    <div class="sm:w-[29rem] sm:mx-48">
                        <h1 class="s font-bold text-[#4F7CAC]">Accede a
                            diferentes cursos por
                            videollamada
                        </h1>
                        <h1 class="sm:mt-12 mt-3 sm:font-medium font-bold text-[#000000]">
                            Educacion de
                            calidad personalizada
                        </h1>
                    </div>
                </div>
                <div class="sm:h-1/3">
                    <?php if ($mostrar) : ?>

                    <?php else : ?>
                    <div class="flex sm:my-[7.5rem] sm:mx-44 p-10">
                        <div
                            class="bg-[#FEC400] w-80 flex justify-center sm:h-16 h-10 text-center items-center rounded-3xl">
                            <a href='index.php?c=Usuarios&a=login' class="text-lg text-black font-semibold">Clase
                                muestra
                                gratuita</a>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>

    </div>

    <main>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <a href="#" onclick="obtenerCursos()" class="float" target="_blank">
            <i class="fa fa-whatsapp my-float"></i>
        </a>


        <section class="sectiona1 my-16 como-funciona sm:max-w-7xl mx-auto">
            <div>
                <div class="border-b-2 sm:w-[30rem] text-center border-[#4F7CAC]">
                    <h1 class="sm:text-5xl text-3xl font-bold py-3  text-[#4F7CAC]">
                        ¿Como funciona?
                    </h1>
                </div>
                <div class="flex sm:flex-row flex-col sm:justify-between text-center my-12 px-12">
                    <div>
                        <div class="w-[19.5rem] h-72">
                            <img src="public/images/home/comofunciona1.png" class="w-full h-full"
                                alt="busca el curso o mentor">
                        </div>
                        <h2 class="mx-auto my-3 text-3xl w-[16rem] font-bold">Busca el curso o mentor ideal</h2>
                    </div>
                    <div>
                        <div class="w-[18rem] h-72">
                            <img src="public/images/home/comofunciona2.png" alt="adapta a tus tiempos">
                        </div>
                        <h2 class="mx-auto my-3 text-3xl w-[18rem] font-bold">Agenda, adaptado a tus tiempos</h2>
                    </div>
                    <div>
                        <div class="w-[17rem] h-72">
                            <img src="public/images/home/comofunciona3.png" alt="aprende personalizado">
                        </div>
                        <h2 class="mx-auto my-3 text-3xl w-[16rem] font-bold">Aprende personalizado</h2>
                    </div>
                </div>
            </div>
            <div class="max-w-5xl mx-auto my-28">
                <div class="header__container">
                    <div class="header__search">
                        <i id="buscar" class='bx bx-search header__icon'></i>
                        <form>
                            <input type="text" id="busqueda" class="header__input" placeholder="¿Qué deseas aprender?">
                        </form>
                    </div>
                </div>

                <div class="resultados" id="resultados">
                </div>
            </div>

            <div class="p-4 bg-[#d3deea] flex sm:flex-row flex-col justify-around">
                <button class="bg-[#4F7CAC] sm:w-80 h-16 sm:mb-0 mb-3 font-bold rounded-full text-base text-[#FEC400]"
                    type="button" onclick="mostrarContenidoAreas()">Areas
                    de
                    aprendizaje</button>
                <button class="bg-[#2E3532] sm:w-64 h-16 font-bold rounded-full text-base" type="button"
                    onclick="mostrarContenidoMasterTeach()">Master Teach</button>
            </div>
        </section>


        <section class="section2 cursos-demanda max-w-7xl mx-auto">
            <div class="border-b-2 my-10 inline-block border-[#4F7CAC]">
                <h1 class="sm:text-5xl text-3xl sm:text-left text-center font-bold py-3 text-[#4F7CAC]">
                    CURSOS TOP (con mayor demanda)
                </h1>
            </div>
            <div class="flex my-10">
                <div class="py-10 sm:px-5 px-0 xl:mx-32 md:mx-16 swiper">
                    <div class="card__content overflow-hidden">
                        <div class="swiper-wrapper" id="content-cursos">
                        </div>
                    </div>
                    <div class="swiper-button-next">
                        <i class="ri-arrow-right-s-line "></i>
                    </div>
                    <div class="swiper-button-prev">
                        <i class="ri-arrow-left-s-line"></i>
                    </div>
                </div>
            </div>

            <div id="contenido-areas" class="prices-1">
                <div class="border-b-2 my-10 inline-block border-[#4F7CAC]">
                    <h1 class="sm:text-5xl text-2xl sm:text-left text-center font-bold py-3 text-[#4F7CAC]">
                        ASESORÍAS ACADEMICAS/LABORALES
                    </h1>
                </div>
                <div class="flex my-10">
                    <div class="py-10 sm:px-5 px-0 xl:mx-32 md:mx-16 swiper">
                        <div class="card__content overflow-hidden">
                            <div class="swiper-wrapper" id="content-asesorias">
                            </div>
                        </div>
                        <div class="swiper-button-next">
                            <i class="ri-arrow-right-s-line "></i>
                        </div>
                        <div class="swiper-button-prev">
                            <i class="ri-arrow-left-s-line"></i>
                        </div>
                    </div>
                </div>


            </div>

            <!--Master teach-->
            <div id="contenido-master-teach" class="prices-1" style="display: none;">
                <div class="contenedor-1">
                </div>

                <p class="cursos-p">DOCENTES</p>
                <div id="cursos-slider">
                    <div class="container-fluid">
                        <div id="carouselExample15" class="carousel slide" data-ride="carousel" data-interval="9000">
                            <div class="carousel-inner row w-100 mx-auto" role="listbox">
                            </div>
                            <a class="carousel-control-prev" href="#carouselExample15" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next text-faded" href="#carouselExample15" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon p-2" aria-hidden="true"></span>
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
                                                <img src="public/images/curso/ajedrez.png"
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
                            <a class="carousel-control-prev" href="#carouselExample2" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next text-faded" href="#carouselExample2" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon p-2" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>

                <p class="cursos-p">Cursos de voz</p>
                <div id="cursos-slider">
                    <div class="container-fluid">
                        <div id="carouselExample25" class="carousel slide" data-ride="carousel" data-interval="9000">
                            <div class="carousel-inner row w-100 mx-auto" role="listbox">
                                <div class="carousel-item col-md-3  active">
                                    <div class="panel panel-default">
                                        <div class="prices-1">
                                            <!-- Cuadrado con sombra -->
                                            <div id="image-box">
                                                <!-- Mitad superior para la imagen -->
                                                <img src="public/images/curso/oratoria.png"
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
                                                <img src="public/images/curso/locucion.png"
                                                    alt="Descripción de la imagen">
                                                <!-- Mitad inferior para el título de la imagen -->
                                                <form class="botones-carrucel-cursos"
                                                    action="index.php?c=Usuarios&a=claseMuestraNavegacion"
                                                    method="post">
                                                    <!-- Campo oculto para enviar información -->
                                                    <input type="hidden" name="nombreCurso" value="locucion y doblaje">
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
                            <a class="carousel-control-prev" href="#carouselExample25" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next text-faded" href="#carouselExample25" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon p-2" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>

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
                                                <img src="public/images/curso/minecraft.png"
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
                                                <img src="public/images/curso/unity3d.png"
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
                                                <img src="public/images/curso/unity2d.png"
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
                                                <img src="public/images/curso/gdevelop.png"
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
                                                <img src="public/images/curso/roblox.png"
                                                    alt="Descripción de la imagen">
                                                <!-- Mitad inferior para el título de la imagen -->
                                                <form class="botones-carrucel-cursos"
                                                    action="index.php?c=Usuarios&a=claseMuestraNavegacion"
                                                    method="post">
                                                    <!-- Campo oculto para enviar información -->
                                                    <input type="hidden" name="nombreCurso" value="roblox studio">
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
                                                <img src="public/images/curso/lego.png" alt="Descripción de la imagen">
                                                <!-- Mitad inferior para el título de la imagen -->
                                                <form class="botones-carrucel-cursos"
                                                    action="index.php?c=Usuarios&a=claseMuestraNavegacion"
                                                    method="post">
                                                    <!-- Campo oculto para enviar información -->
                                                    <input type="hidden" name="nombreCurso" value="lego fornite">
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
                            <a class="carousel-control-prev" href="#carouselExample4" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next text-faded" href="#carouselExample4" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon p-2" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>

                <p class="cursos-p">Cursos de salud y bienestar</p>
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
                                                <img src="public/images/curso/emociones.png"
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
                            <a class="carousel-control-prev" href="#carouselExample4" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next text-faded" href="#carouselExample4" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon p-2" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>

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
                                                <img src="public/images/curso/roboticamovil.png"
                                                    alt="Descripción de la imagen">
                                                <!-- Mitad inferior para el título de la imagen -->
                                                <form class="botones-carrucel-cursos"
                                                    action="index.php?c=Usuarios&a=claseMuestraNavegacion"
                                                    method="post">
                                                    <!-- Campo oculto para enviar información -->
                                                    <input type="hidden" name="nombreCurso" value="robotica movil">
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
                                                <img src="public/images/curso/robotica.png"
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
                            <a class="carousel-control-prev" href="#carouselExample5" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next text-faded" href="#carouselExample5" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon p-2" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>

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
                                                <img src="public/images/curso/ia.png" alt="Descripción de la imagen">
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
                                                <img src="public/images/curso/chatgpt.png"
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
                                                <img src="public/images/curso/moviles-1.png"
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
                                                <img src="public/images/curso/ciberseguridad.png"
                                                    alt="Descripción de la imagen">
                                                <!-- Mitad inferior para el título de la imagen -->
                                                <form class="botones-carrucel-cursos"
                                                    action="index.php?c=Usuarios&a=claseMuestraNavegacion"
                                                    method="post">
                                                    <!-- Campo oculto para enviar información -->
                                                    <input type="hidden" name="nombreCurso" value="ciberseguridad">
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
                                                <img src="public/images/curso/web.png" alt="Descripción de la imagen">
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
                                                <img src="public/images/curso/movil-2.png"
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
                                                <img src="public/images/curso/python.png"
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
                            <a class="carousel-control-prev" href="#carouselExample6" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next text-faded" href="#carouselExample6" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon p-2" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>

                <p class="cursos-p">Cursos de musica</p>
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
                                                <img src="public/images/curso/guitarra.png"
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
                            <a class="carousel-control-prev" href="#carouselExample6" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next text-faded" href="#carouselExample6" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon p-2" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>

                <p class="cursos-p">Cursos de MKt</p>
                <div id="cursos-slider">
                    <div class="container-fluid">
                        <div id="carouselExample19" class="carousel slide" data-ride="carousel" data-interval="9000">
                            <div class="carousel-inner row w-100 mx-auto" role="listbox">
                                <div class="carousel-item col-md-3  active">
                                    <div class="panel panel-default">
                                        <div class="prices-1">
                                            <!-- Cuadrado con sombra -->
                                            <div id="image-box">
                                                <!-- Mitad superior para la imagen -->
                                                <img src="public/images/curso/tiktok.png"
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
                                                <img src="public/images/curso/branding.png"
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
                            <a class="carousel-control-prev" href="#carouselExample19" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next text-faded" href="#carouselExample19" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon p-2" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>

                <p class="cursos-p">Cursos de idiomas</p>
                <div id="cursos-slider">
                    <div class="container-fluid">
                        <div id="carouselExample21" class="carousel slide" data-ride="carousel" data-interval="9000">
                            <div class="carousel-inner row w-100 mx-auto" role="listbox">
                                <div class="carousel-item col-md-3  active">
                                    <div class="panel panel-default">
                                        <div class="prices-1">
                                            <!-- Cuadrado con sombra -->
                                            <div id="image-box">
                                                <!-- Mitad superior para la imagen -->
                                                <img src="public/images/curso/aleman.png"
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
                                                <img src="public/images/curso/ingles.png"
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
                            <a class="carousel-control-prev" href="#carouselExample21" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next text-faded" href="#carouselExample21" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon p-2" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>

                <p class="cursos-p">Cursos de edicion digital</p>
                <div id="cursos-slider">
                    <div class="container-fluid">
                        <div id="carouselExample22" class="carousel slide" data-ride="carousel" data-interval="9000">
                            <div class="carousel-inner row w-100 mx-auto" role="listbox">
                                <div class="carousel-item col-md-3  active">
                                    <div class="panel panel-default">
                                        <div class="prices-1">
                                            <!-- Cuadrado con sombra -->
                                            <div id="image-box">
                                                <!-- Mitad superior para la imagen -->
                                                <img src="public/images/curso/adobe-premiere.png"
                                                    alt="Descripción de la imagen">
                                                <!-- Mitad inferior para el título de la imagen -->
                                                <form class="botones-carrucel-cursos"
                                                    action="index.php?c=Usuarios&a=claseMuestraNavegacion"
                                                    method="post">
                                                    <!-- Campo oculto para enviar información -->
                                                    <input type="hidden" name="nombreCurso" value="adobe premiere">
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
                                                <img src="public/images/curso/adobe-after.png"
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
                                                <img src="public/images/curso/fotografia.png"
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
                            <a class="carousel-control-prev" href="#carouselExample22" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next text-faded" href="#carouselExample22" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon p-2" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>

                <p class="cursos-p">Cursos de dibujo e ilustracion digital</p>
                <div id="cursos-slider">
                    <div class="container-fluid">
                        <div id="carouselExample23" class="carousel slide" data-ride="carousel" data-interval="9000">
                            <div class="carousel-inner row w-100 mx-auto" role="listbox">
                                <div class="carousel-item col-md-3  active">
                                    <div class="panel panel-default">
                                        <div class="prices-1">
                                            <!-- Cuadrado con sombra -->
                                            <div id="image-box">
                                                <!-- Mitad superior para la imagen -->
                                                <img src="public/images/curso/manga.png" alt="Descripción de la imagen">
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
                                                <img src="public/images/curso/ilustracion.png"
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
                                                <img src="public/images/curso/photoshop.png"
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
                                                <img src="public/images/curso/illustrator.png"
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
                            <a class="carousel-control-prev" href="#carouselExample23" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next text-faded" href="#carouselExample23" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon p-2" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>

                <p class="cursos-p">Cursos de Data Mining</p>
                <div id="cursos-slider">
                    <div class="container-fluid">
                        <div id="carouselExample26" class="carousel slide" data-ride="carousel" data-interval="9000">
                            <div class="carousel-inner row w-100 mx-auto" role="listbox">
                                <div class="carousel-item col-md-3  active">
                                    <div class="panel panel-default">
                                        <div class="prices-1">
                                            <!-- Cuadrado con sombra -->
                                            <div id="image-box">
                                                <!-- Mitad superior para la imagen -->
                                                <img src="public/images/curso/mysql.png" alt="Descripción de la imagen">
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
                                                <img src="public/images/curso/databricks.png"
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
                            <a class="carousel-control-prev" href="#carouselExample26" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next text-faded" href="#carouselExample26" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon p-2" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>

                <p class="cursos-p">Cursos de CAD</p>
                <div id="cursos-slider">
                    <div class="container-fluid">
                        <div id="carouselExample27" class="carousel slide" data-ride="carousel" data-interval="9000">
                            <div class="carousel-inner row w-100 mx-auto" role="listbox">
                                <div class="carousel-item col-md-3  active">
                                    <div class="panel panel-default">
                                        <div class="prices-1">
                                            <!-- Cuadrado con sombra -->
                                            <div id="image-box">
                                                <!-- Mitad superior para la imagen -->
                                                <img src="public/images/curso/autocad.png"
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
                                                <img src="public/images/curso/solidworks.png"
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
                            <a class="carousel-control-prev" href="#carouselExample27" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next text-faded" href="#carouselExample27" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon p-2" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>

                <p class="cursos-p">Cursos de Arte</p>
                <div id="cursos-slider">
                    <div class="container-fluid">
                        <div id="carouselExample28" class="carousel slide" data-ride="carousel" data-interval="9000">
                            <div class="carousel-inner row w-100 mx-auto" role="listbox">
                                <div class="carousel-item col-md-3  active">
                                    <div class="panel panel-default">
                                        <div class="prices-1">
                                            <!-- Cuadrado con sombra -->
                                            <div id="image-box">
                                                <!-- Mitad superior para la imagen -->
                                                <img src="public/images/curso/pastel.png"
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
                            <a class="carousel-control-prev" href="#carouselExample28" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next text-faded" href="#carouselExample28" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon p-2" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>

                <p class="cursos-p">Cursos de Administracion y finanzas</p>
                <div id="cursos-slider">
                    <div class="container-fluid">
                        <div id="carouselExample29" class="carousel slide" data-ride="carousel" data-interval="9000">
                            <div class="carousel-inner row w-100 mx-auto" role="listbox">
                                <div class="carousel-item col-md-3  active">
                                    <div class="panel panel-default">
                                        <div class="prices-1">
                                            <!-- Cuadrado con sombra -->
                                            <div id="image-box">
                                                <!-- Mitad superior para la imagen -->
                                                <img src="public/images/curso/finanzas-personales.png"
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
                                                <img src="public/images/curso/emprendimiento-e-innovacion.png"
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
                                                <img src="public/images/curso/inversion.png"
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
                                                <img src="public/images/curso/excel.png" alt="Descripción de la imagen">
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
                            <a class="carousel-control-prev" href="#carouselExample29" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next text-faded" href="#carouselExample29" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon p-2" aria-hidden="true"></span>
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
        </section>

        <section class="porque-estudiar">
            <div class="w-full h-full bg-[#2E3532] sm:p-10 p-5 sm:rounded-br-[40rem] my-10">

                <div class="sm:mx-52 my-10">
                    <h1 class="text-white mb-3 text-4xl font-bold">¿Porque estudiar en?</h1>
                    <h2 class="sm:mx-16 text-[#FEC400] text-2xl font-semibold">La educacion online para que alcances
                        tus metas</h2>
                </div>
                <div class="h-full sm:mx-[15%] sm:p-16">
                    <div class="flex lg:flex-row flex-col w-full">
                        <div class="sm:w-1/2">
                            <div class="sm:w-[27rem] w-80">
                                <img src="public/images/home/porqueestudiar.png" class="w-full h-full"
                                    alt="personalizacion">
                            </div>
                        </div>
                        <div class="text-white text-3xl sm:w-1/2 sm:my-auto my-8">
                            <div>
                                <h1 class="w-72 text-[#D7F9FF] font-bold border-b-2 pb-1 border-[#FAC400] text-center">
                                    Personalizacion
                                </h1>
                                <p class="my-4">En Wido aprendes en vivo de forma personalizado con un <span
                                        class="font-bold">Master Teach</span> </p>
                            </div>
                        </div>
                    </div>
                    <div class="flex lg:flex-row-reverse flex-col my-16 w-full">
                        <div class="sm:w-1/2">
                            <div class="sm:w-[28rem] w-80 ml-auto">
                                <img src="public/images/home/porqueestudia2.png" class="w-full h-full"
                                    alt="personalizacion">
                            </div>
                        </div>
                        <div class="text-white text-3xl sm:w-1/2 sm:my-auto my-8">
                            <div class="">
                                <h1 class="sm:w-[27rem] text-[#D7F9FF] font-bold border-b-2 pb-1 border-[#FAC400]">
                                    Cursos / Asesorias escolares y laborales
                                </h1>
                                <p class="my-4">Accede a cursos y asesorias de acuerdo a tus objetivos y tiempos</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex lg:flex-row flex-col w-full mt-16">
                        <div class="sm:w-1/2">
                            <div class="sm:w-[28rem] w-80">
                                <img src="public/images/home/porqueestudia3.png" class="w-full h-full" alt="meeting">
                            </div>
                        </div>
                        <div class="text-white text-3xl sm:w-1/2 sm:my-auto my-8">
                            <div class="">
                                <h1
                                    class="sm:w-96 text-[#D7F9FF] font-bold border-b-2 pb-1 border-[#FAC400] text-center">
                                    Nos adaptamos a ti
                                </h1>
                                <p class="my-4">En Wido <span class="font-bold">nos adaptamos a tus objetivos de
                                        aprendizaje</span> y al nivel que tengas en cada curso creando un temario
                                    ideal para ti</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section class="cursos-gratis">
            <div class="sm:w-[85%] sm:max-h-full mx-auto my-16 flex sm:flex-row flex-col flex-wrap justify-evenly">
                <div class="mx-20 sm:w-[20rem]">
                    <div>
                        <img src="public/images/home/cursosgratis.png" class="w-full h-full" alt="cursogratis">
                    </div>
                    <div>
                        <h1 class="border-b-2 border-[#FAC400] text-[#4F7CAC] text-center text-3xl font-bold my-3">
                            Cursos
                            GRATIS
                        </h1>
                        <p class="text-xl sm:mx-10 font-medium">Cursos OnDemand totalmente gratis. En Wido a
                            diferencia de
                            otras plataformas nuestros
                            cursos
                            grabados no tienen costo.</p>
                    </div>
                </div>
                <div class="mx-20 my-36 sm:w-[20rem]">
                    <div>
                        <img src="public/images/home/conectamasterteach.png" class="w-full h-full" alt="">
                    </div>
                    <div>
                        <h1 class="border-b-2 border-[#FAC400] text-[#4F7CAC] text-center text-3xl font-bold my-3">
                            Conecta con tu Master Teach</h1>
                        <p class="text-xl sm:mx-10 font-medium">No pierdas de vista a tus mentores favoritos. Podrás
                            estar en contacto con ellos de por
                            vida
                            por medio de nuestro sistema de suscripción a los canales 100% gratis</p>
                    </div>
                </div>
                <div class="mx-20 sm:w-[20rem]">
                    <div>
                        <img src="public/images/home/obtenrrecompensas.png" class="w-full h-full" alt="">
                    </div>
                    <div>
                        <h1 class="border-b-2 border-[#FAC400] text-[#4F7CAC] text-center text-3xl font-bold my-3">
                            Obten
                            recompensas</h1>
                        <p class="text-xl sm:mx-10 font-medium">En Wido premiamos a nuestros estudiantes por medio de
                            un sistema de gamificación.</p>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <footer>
        <div class="bg-[#2E3532] xl:h-[35rem] p-10 flex sm:flex-row flex-col flex-wrap">
            <div class="text-[#D7F9FF] flex flex-col sm:ml-16 mt-5">
                <h1 class="font-bold sm:text-3xl text-2xl border-b-2 w-40">Legal</h1>
                <span class="sm:text-3xl text-xl sm:mt-5 mt-3 w-80">Terminos y condiciones</span>
                <span class="sm:text-3xl text-xl sm:mt-5 mt-3">Aviso de privacidad</span>
                <span class="sm:text-3xl text-xl sm:mt-5 mt-3 w-72">Reglamento y politicas de clase</span>
            </div>
            <div class="text-[#D7F9FF] flex flex-col mx-auto mt-5">
                <h1 class="font-bold sm:text-3xl text-2xl border-b-2 w-40">Empresa</h1>
                <span class="sm:text-3xl text-xl sm:mt-5 mt-3">Ubicacion:</span>
                <span class="sm:text-3xl text-xl sm:w-[33.8rem]">Av. General Ramon Corona 2514 Col. Nuevo Mexico,
                    Zapopan,
                    Mexico</span>
                <span class="sm:text-3xl text-xl mt-5 sm:w-[34.5rem]">Hábitat de Negocios Tecnológico de Monterrey
                    Campus
                    Guadalajara
                    Piso
                    4.</span>
            </div>
            <div class="text-[#D7F9FF] flex flex-col mx-auto mt-5">
                <h1 class="font-bold sm:text-3xl text-2xl border-b-2 w-40">Contacto</h1>
                <span class="sm:text-3xl text-xl mt-5">hola@widolearn.com</span>
                <span class="sm:text-3xl text-xl mt-3">22 28 27 90 92</span>
                <div class="sm:my-auto my-5 ml-auto">
                    <span class="sm:text-4xl text-2xl mx-3"><i class="fa-brands fa-facebook "></i></span>
                    <span class="sm:text-4xl text-2xl mx-3"><i class="fa-brands fa-instagram"></i></span>
                    <span class="sm:text-4xl text-2xl mx-3"><i class="fa-brands fa-whatsapp"></i></span>
                </div>
            </div>
        </div>
        <div class="bg-[#4F7CAC]">
            <div class="sm:p-10 text-center sm:text-3xl p-5 text-xl font-semibold">
                <span class="text-black"><i class="fa fa-copyright" aria-hidden="true"></i> copyright</span>
                <span class="text-white">Grupo Aerobot SAPI de CV.</span>
                <span class="text-black">All Rights Reserved</span>
            </div>
        </div>
    </footer>

    <script src="public/JS/swiper-bundle.min.js"></script>
    <!--=============== MAIN JS ===============-->
    <script src="public/JS/script.js"></script>
    <script src="public/JS/API.js"></script>

</body>

</html>