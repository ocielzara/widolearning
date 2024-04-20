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

    <link rel="stylesheet" href="Views/style/carrucel.css">

    <!--========== Swiper CSS ==========-->
    <link rel="stylesheet" href="styles/swiper-bundle.min.css">

    <!--========== BOX ICONS ==========-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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

        /*========== HEADER ==========*/
        .header__container {
            display: flex;
            align-items: center;
            height: var(--header-height);
            justify-content: space-between;

        }

        .header__search {
            display: flex;
            padding: 1rem .90rem;
            background-color: #D9F9FF;
            border-radius: .25rem;
            border-radius: 20px;
            margin: 0% auto;
            /* Centra en medio de la página */
            width: 80%;
        }

        .header__input {
            font-size: 1.8rem;
            padding-left: 5rem;
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
            padding: 0 2rem;
            margin: auto 0;
            font-size: 1.8rem;
        }
    </style>


</head>

<body>
    <div class="p-16 w-full h-screen">
        <div class="imageBackground bg-no-repeat bg-center bg-cover w-full h-full" style="background-image: url('<?php echo 'images/home/homeweb.png'; ?>');">
            <div class="flex flex-col h-full">
                <div class="h-1/3">Wido</div>
                <div class="h-1/3">
                    <div class="w-[29rem] mx-48">
                        <h1 style="font-size: 3rem;" class="font-bold text-[#4F7CAC]">Accede a diferentes cursos por
                            videollamada
                        </h1>
                        <h1 class="mt-12 text-5xl font-medium text-[#000000]">Educacion de calidad personalizada
                        </h1>
                    </div>
                </div>
                <div class="h-1/3">
                    <div class="flex my-32 mx-44 p-10">
                        <div class="bg-[#FEC400] w-80 flex justify-center h-16 text-center items-center rounded-3xl">
                            <a href='index.php?c=Usuarios&a=login' class="text-base text-black font-semibold">Clase
                                muestra
                                gratuita</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>


    <main>
        <section class="sectiona1 my-16 como-funciona max-w-7xl mx-auto">
            <div>
                <div class="border-b-2 w-[30rem] text-center border-[#4F7CAC]">
                    <h1 class="text-5xl font-bold py-3 text-[#4F7CAC]">
                        ¿Como funciona?
                    </h1>
                </div>
                <div class="flex justify-between text-center my-12 px-12">
                    <div>
                        <div class="w-[19.5rem] h-72">
                            <img src="images/home/comofunciona1.png" class="w-full h-full" alt="busca el curso o mentor">
                        </div>
                        <h2 class="mx-auto my-3 text-3xl w-[16rem] font-bold">Busca el curso o mentor ideal</h2>
                    </div>
                    <div>
                        <div class="w-[18rem] h-72">
                            <img src="images/home/comofunciona2.png" alt="adapta a tus tiempos">
                        </div>
                        <h2 class="mx-auto my-3 text-3xl w-[18rem] font-bold">Agenda, adaptado a tus tiempos</h2>
                    </div>
                    <div>
                        <div class="w-[17rem] h-72">
                            <img src="images/home/comofunciona3.png" alt="aprende personalizado">
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

            <div class="p-4 bg-[#d3deea] flex justify-around">
                <button class="bg-[#4F7CAC] w-80 h-16 font-bold rounded-full text-base text-[#FEC400]" type="button" onclick="mostrarContenidoAreas()">Areas
                    de
                    aprendizaje</button>
                <button class="bg-[#2E3532] w-64 h-16 font-bold rounded-full text-base" type="button" onclick="mostrarContenidoMasterTeach()">Master Teach</button>
            </div>
        </section>


        <section class="section2 cursos-demanda max-w-7xl mx-auto">
            <div class="border-b-2 my-10 inline-block border-[#4F7CAC]">
                <h1 class="text-5xl font-bold py-3 text-[#4F7CAC]">
                    CURSOS TOP (con mayor demanda)
                </h1>
            </div>
            <div class="flex my-10">
                <div class="py-10 sm:px-5 px-0 xl:mx-32 md:mx-16 swiper">
                    <div class="card__content overflow-hidden">
                        <div class="swiper-wrapper">
                            <div class="w-auto swiper-slide overflow-hidden">
                                <div class="sm:w-[23rem] w-full h-[27.5rem] rounded-[2rem] bg-[#2E3532]">
                                    <div class="w-full h-1/2">
                                        <img src="images/curso/emprendimiento-e-innovacion.png" class="w-full h-full" alt="Descripción de la imagen">
                                    </div>
                                    <div class="w-full h-1/2 flex justify-center flex-col">
                                        <form class="w-full flex my-2 justify-center" action="index.php?c=Usuarios&a=claseMuestraNavegacion" method="post">

                                            <input type="hidden" name="nombreCurso" value="emprendimiento e innovacion">
                                            <button class="w-[80%] bg-[#FEC400] rounded-3xl text-[#2E3532] font-bold">
                                                <span>Clase muestra</span>
                                            </button>
                                        </form>
                                        <button class="w-[80%] mx-auto mt-3 mb-4 bg-slate-500 rounded-3xl text-slate-400">
                                            <span>proximamente</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="w-auto swiper-slide overflow-hidden">
                                <div class="sm:w-[23rem] w-full h-[27.5rem] rounded-[2rem] bg-[#2E3532]">
                                    <div class="w-full h-1/2">
                                        <img src="images/curso/emprendimiento-e-innovacion.png" class="w-full h-full" alt="Descripción de la imagen">
                                    </div>
                                    <div class="w-full h-1/2 flex justify-center flex-col">
                                        <form class="w-full flex my-2 justify-center" action="index.php?c=Usuarios&a=claseMuestraNavegacion" method="post">

                                            <input type="hidden" name="nombreCurso" value="emprendimiento e innovacion">
                                            <button class="w-[80%] bg-[#FEC400] rounded-3xl text-[#2E3532] font-bold">
                                                <span>Clase muestra</span>
                                            </button>
                                        </form>
                                        <button class="w-[80%] mx-auto mt-3 mb-4 bg-slate-500 rounded-3xl text-slate-400">
                                            <span>proximamente</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="w-auto swiper-slide overflow-hidden">
                                <div class="sm:w-[23rem] w-full h-[27.5rem] rounded-[2rem] bg-[#2E3532]">
                                    <div class="w-full h-1/2">
                                        <img src="images/curso/emprendimiento-e-innovacion.png" class="w-full h-full" alt="Descripción de la imagen">
                                    </div>
                                    <div class="w-full h-1/2 flex justify-center flex-col">
                                        <form class="w-full flex my-2 justify-center" action="index.php?c=Usuarios&a=claseMuestraNavegacion" method="post">

                                            <input type="hidden" name="nombreCurso" value="emprendimiento e innovacion">
                                            <button class="w-[80%] bg-[#FEC400] rounded-3xl text-[#2E3532] font-bold">
                                                <span>Clase muestra</span>
                                            </button>
                                        </form>
                                        <button class="w-[80%] mx-auto mt-3 mb-4 bg-slate-500 rounded-3xl text-slate-400">
                                            <span>proximamente</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="w-auto swiper-slide overflow-hidden">
                                <div class="sm:w-[23rem] w-full h-[27.5rem] rounded-[2rem] bg-[#2E3532]">
                                    <div class="w-full h-1/2">
                                        <img src="images/curso/emprendimiento-e-innovacion.png" class="w-full h-full" alt="Descripción de la imagen">
                                    </div>
                                    <div class="w-full h-1/2 flex justify-center flex-col">
                                        <form class="w-full flex my-2 justify-center" action="index.php?c=Usuarios&a=claseMuestraNavegacion" method="post">

                                            <input type="hidden" name="nombreCurso" value="emprendimiento e innovacion">
                                            <button class="w-[80%] bg-[#FEC400] rounded-3xl text-[#2E3532] font-bold">
                                                <span>Clase muestra</span>
                                            </button>
                                        </form>
                                        <button class="w-[80%] mx-auto mt-3 mb-4 bg-slate-500 rounded-3xl text-slate-400">
                                            <span>proximamente</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="w-auto swiper-slide overflow-hidden">
                                <div class="sm:w-[23rem] w-full h-[27.5rem] rounded-[2rem] bg-[#2E3532]">
                                    <div class="w-full h-1/2">
                                        <img src="images/curso/emprendimiento-e-innovacion.png" class="w-full h-full" alt="Descripción de la imagen">
                                    </div>
                                    <div class="w-full h-1/2 flex justify-center flex-col">
                                        <form class="w-full flex my-2 justify-center" action="index.php?c=Usuarios&a=claseMuestraNavegacion" method="post">

                                            <input type="hidden" name="nombreCurso" value="emprendimiento e innovacion">
                                            <button class="w-[80%] bg-[#FEC400] rounded-3xl text-[#2E3532] font-bold">
                                                <span>Clase muestra</span>
                                            </button>
                                        </form>
                                        <button class="w-[80%] mx-auto mt-3 mb-4 bg-slate-500 rounded-3xl text-slate-400">
                                            <span>proximamente</span>
                                        </button>
                                    </div>
                                </div>
                            </div>

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

        </section>

        <section>
            <br>

            <!--Areas aprendizaje style="display: none;"-->
            <div id="contenido-areas" class="prices-1">

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
                                                        <div class="play-icon" data-video-src="<?php echo $asesoria['foto']; ?>">
                                                        </div>

                                                    <?php else : ?>
                                                        <div id="image-box">
                                                            <!-- Es una imagen -->
                                                            <img src="<?php echo $asesoria['foto']; ?>" alt="">
                                                        <?php endif; ?>
                                                        <!-- Mitad inferior para el título de la imagen o video -->
                                                        <form class="botones-carrucel" action="index.php?c=Usuarios&a=claseMuestraNavegacionAsesoria" method="post">
                                                            <!-- Campo oculto para enviar información -->
                                                            <input type="hidden" name="nombre" value="<?php echo $asesoria['nombre']; ?>">
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

                                    <a class="carousel-control-prev" href="#carouselExample3" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next text-faded" href="#carouselExample3" role="button" data-slide="next">
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
                    </div>

                    <p class="cursos-p">DOCENTES</p>
                    <div id="cursos-slider">
                        <div class="container-fluid">
                            <div id="carouselExample15" class="carousel slide" data-ride="carousel" data-interval="9000">
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
                                                            <div class="play-icon" data-video-src="<?php echo $docente['foto']; ?>">
                                                            </div>

                                                        <?php else : ?>
                                                            <div id="image-box">
                                                                <!-- Es una imagen -->
                                                                <img src="<?php echo $docente['foto']; ?>" alt="Foto de <?php echo $docente['nombre']; ?>">
                                                            <?php endif; ?>
                                                            <!-- Mitad inferior para el título de la imagen o video -->
                                                            <form class="botones-carrucel" action="index.php?c=Docentes&a=perfilDocente" method="post">
                                                                <!-- Campo oculto para enviar información -->
                                                                <input type="hidden" name="nombre" value="<?php echo $docente['nombre']; ?>">
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
                                        <a class="carousel-control-prev" href="#carouselExample15" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next text-faded" href="#carouselExample15" role="button" data-slide="next">
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
                                                        <form class="botones-carrucel-cursos" action="index.php?c=Usuarios&a=claseMuestraNavegacion" method="post">
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
                                    <a class="carousel-control-next text-faded" href="#carouselExample2" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
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
                                                        <img src="images/curso/oratoria.png" alt="Descripción de la imagen">
                                                        <!-- Mitad inferior para el título de la imagen -->
                                                        <form class="botones-carrucel-cursos" action="index.php?c=Usuarios&a=claseMuestraNavegacion" method="post">
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
                                                        <img src="images/curso/locucion.png" alt="Descripción de la imagen">
                                                        <!-- Mitad inferior para el título de la imagen -->
                                                        <form class="botones-carrucel-cursos" action="index.php?c=Usuarios&a=claseMuestraNavegacion" method="post">
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
                                    <a class="carousel-control-next text-faded" href="#carouselExample25" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
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
                                                        <img src="images/curso/minecraft.png" alt="Descripción de la imagen">
                                                        <!-- Mitad inferior para el título de la imagen -->
                                                        <form class="botones-carrucel-cursos" action="index.php?c=Usuarios&a=claseMuestraNavegacion" method="post">
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
                                                        <form class="botones-carrucel-cursos" action="index.php?c=Usuarios&a=claseMuestraNavegacion" method="post">
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
                                                        <form class="botones-carrucel-cursos" action="index.php?c=Usuarios&a=claseMuestraNavegacion" method="post">
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
                                                        <form class="botones-carrucel-cursos" action="index.php?c=Usuarios&a=claseMuestraNavegacion" method="post">
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
                                                        <img src="images/curso/roblox.png" alt="Descripción de la imagen">
                                                        <!-- Mitad inferior para el título de la imagen -->
                                                        <form class="botones-carrucel-cursos" action="index.php?c=Usuarios&a=claseMuestraNavegacion" method="post">
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
                                                        <img src="images/curso/lego.png" alt="Descripción de la imagen">
                                                        <!-- Mitad inferior para el título de la imagen -->
                                                        <form class="botones-carrucel-cursos" action="index.php?c=Usuarios&a=claseMuestraNavegacion" method="post">
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
                                    <a class="carousel-control-next text-faded" href="#carouselExample4" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
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
                                                        <img src="images/curso/emociones.png" alt="Descripción de la imagen">
                                                        <!-- Mitad inferior para el título de la imagen -->
                                                        <form class="botones-carrucel-cursos" action="index.php?c=Usuarios&a=claseMuestraNavegacion" method="post">
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
                                    <a class="carousel-control-next text-faded" href="#carouselExample4" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
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
                                                        <img src="images/curso/roboticamovil.png" alt="Descripción de la imagen">
                                                        <!-- Mitad inferior para el título de la imagen -->
                                                        <form class="botones-carrucel-cursos" action="index.php?c=Usuarios&a=claseMuestraNavegacion" method="post">
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
                                                        <img src="images/curso/robotica.png" alt="Descripción de la imagen">
                                                        <!-- Mitad inferior para el título de la imagen -->
                                                        <form class="botones-carrucel-cursos" action="index.php?c=Usuarios&a=claseMuestraNavegacion" method="post">
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
                                    <a class="carousel-control-next text-faded" href="#carouselExample5" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
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
                                                        <img src="images/curso/ia.png" alt="Descripción de la imagen">
                                                        <!-- Mitad inferior para el título de la imagen -->
                                                        <form class="botones-carrucel-cursos" action="index.php?c=Usuarios&a=claseMuestraNavegacion" method="post">
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
                                                        <img src="images/curso/chatgpt.png" alt="Descripción de la imagen">
                                                        <!-- Mitad inferior para el título de la imagen -->
                                                        <form class="botones-carrucel-cursos" action="index.php?c=Usuarios&a=claseMuestraNavegacion" method="post">
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
                                                        <img src="images/curso/moviles-1.png" alt="Descripción de la imagen">
                                                        <!-- Mitad inferior para el título de la imagen -->
                                                        <form class="botones-carrucel-cursos" action="index.php?c=Usuarios&a=claseMuestraNavegacion" method="post">
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
                                                        <img src="images/curso/ciberseguridad.png" alt="Descripción de la imagen">
                                                        <!-- Mitad inferior para el título de la imagen -->
                                                        <form class="botones-carrucel-cursos" action="index.php?c=Usuarios&a=claseMuestraNavegacion" method="post">
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
                                                        <img src="images/curso/web.png" alt="Descripción de la imagen">
                                                        <!-- Mitad inferior para el título de la imagen -->
                                                        <form class="botones-carrucel-cursos" action="index.php?c=Usuarios&a=claseMuestraNavegacion" method="post">
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
                                                        <img src="images/curso/movil-2.png" alt="Descripción de la imagen">
                                                        <!-- Mitad inferior para el título de la imagen -->
                                                        <form class="botones-carrucel-cursos" action="index.php?c=Usuarios&a=claseMuestraNavegacion" method="post">
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
                                                        <img src="images/curso/python.png" alt="Descripción de la imagen">
                                                        <!-- Mitad inferior para el título de la imagen -->
                                                        <form class="botones-carrucel-cursos" action="index.php?c=Usuarios&a=claseMuestraNavegacion" method="post">
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
                                    <a class="carousel-control-next text-faded" href="#carouselExample6" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
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
                                                        <img src="images/curso/guitarra.png" alt="Descripción de la imagen">
                                                        <!-- Mitad inferior para el título de la imagen -->
                                                        <form class="botones-carrucel-cursos" action="index.php?c=Usuarios&a=claseMuestraNavegacion" method="post">
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
                                    <a class="carousel-control-next text-faded" href="#carouselExample6" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
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
                                                        <img src="images/curso/tiktok.png" alt="Descripción de la imagen">
                                                        <!-- Mitad inferior para el título de la imagen -->
                                                        <form class="botones-carrucel-cursos" action="index.php?c=Usuarios&a=claseMuestraNavegacion" method="post">
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
                                                        <img src="images/curso/branding.png" alt="Descripción de la imagen">
                                                        <!-- Mitad inferior para el título de la imagen -->
                                                        <form class="botones-carrucel-cursos" action="index.php?c=Usuarios&a=claseMuestraNavegacion" method="post">
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
                                    <a class="carousel-control-next text-faded" href="#carouselExample19" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
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
                                                        <img src="images/curso/aleman.png" alt="Descripción de la imagen">
                                                        <!-- Mitad inferior para el título de la imagen -->
                                                        <form class="botones-carrucel-cursos" action="index.php?c=Usuarios&a=claseMuestraNavegacion" method="post">
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
                                                        <img src="images/curso/ingles.png" alt="Descripción de la imagen">
                                                        <!-- Mitad inferior para el título de la imagen -->
                                                        <form class="botones-carrucel-cursos" action="index.php?c=Usuarios&a=claseMuestraNavegacion" method="post">
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
                                    <a class="carousel-control-next text-faded" href="#carouselExample21" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
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
                                                        <img src="images/curso/adobe-premiere.png" alt="Descripción de la imagen">
                                                        <!-- Mitad inferior para el título de la imagen -->
                                                        <form class="botones-carrucel-cursos" action="index.php?c=Usuarios&a=claseMuestraNavegacion" method="post">
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
                                                        <img src="images/curso/adobe-after.png" alt="Descripción de la imagen">
                                                        <!-- Mitad inferior para el título de la imagen -->
                                                        <form class="botones-carrucel-cursos" action="index.php?c=Usuarios&a=claseMuestraNavegacion" method="post">
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
                                                        <img src="images/curso/fotografia.png" alt="Descripción de la imagen">
                                                        <!-- Mitad inferior para el título de la imagen -->
                                                        <form class="botones-carrucel-cursos" action="index.php?c=Usuarios&a=claseMuestraNavegacion" method="post">
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
                                    <a class="carousel-control-next text-faded" href="#carouselExample22" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
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
                                                        <img src="images/curso/manga.png" alt="Descripción de la imagen">
                                                        <!-- Mitad inferior para el título de la imagen -->
                                                        <form class="botones-carrucel-cursos" action="index.php?c=Usuarios&a=claseMuestraNavegacion" method="post">
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
                                                        <img src="images/curso/ilustracion.png" alt="Descripción de la imagen">
                                                        <!-- Mitad inferior para el título de la imagen -->
                                                        <form class="botones-carrucel-cursos" action="index.php?c=Usuarios&a=claseMuestraNavegacion" method="post">
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
                                                        <img src="images/curso/photoshop.png" alt="Descripción de la imagen">
                                                        <!-- Mitad inferior para el título de la imagen -->
                                                        <form class="botones-carrucel-cursos" action="index.php?c=Usuarios&a=claseMuestraNavegacion" method="post">
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
                                                        <form class="botones-carrucel-cursos" action="index.php?c=Usuarios&a=claseMuestraNavegacion" method="post">
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
                                    <a class="carousel-control-next text-faded" href="#carouselExample23" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
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
                                                        <img src="images/curso/mysql.png" alt="Descripción de la imagen">
                                                        <!-- Mitad inferior para el título de la imagen -->
                                                        <form class="botones-carrucel-cursos" action="index.php?c=usuarios&a=claseMuestraNavegacion" method="post">
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
                                                        <img src="images/curso/databricks.png" alt="Descripción de la imagen">
                                                        <!-- Mitad inferior para el título de la imagen -->
                                                        <form class="botones-carrucel-cursos" action="index.php?c=usuarios&a=claseMuestraNavegacion" method="post">
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
                                    <a class="carousel-control-next text-faded" href="#carouselExample26" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
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
                                                        <img src="images/curso/autocad.png" alt="Descripción de la imagen">
                                                        <!-- Mitad inferior para el título de la imagen -->
                                                        <form class="botones-carrucel-cursos" action="index.php?c=usuarios&a=claseMuestraNavegacion" method="post">
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
                                                        <img src="images/curso/solidworks.png" alt="Descripción de la imagen">
                                                        <!-- Mitad inferior para el título de la imagen -->
                                                        <form class="botones-carrucel-cursos" action="index.php?c=usuarios&a=claseMuestraNavegacion" method="post">
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
                                    <a class="carousel-control-next text-faded" href="#carouselExample27" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
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
                                                        <img src="images/curso/pastel.png" alt="Descripción de la imagen">
                                                        <!-- Mitad inferior para el título de la imagen -->
                                                        <form class="botones-carrucel-cursos" action="index.php?c=usuarios&a=claseMuestraNavegacion" method="post">
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
                                    <a class="carousel-control-next text-faded" href="#carouselExample28" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
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
                                                        <img src="images/curso/finanzas-personales.png" alt="Descripción de la imagen">
                                                        <!-- Mitad inferior para el título de la imagen -->
                                                        <form class="botones-carrucel-cursos" action="index.php?c=usuarios&a=claseMuestraNavegacion" method="post">
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
                                                        <img src="images/curso/emprendimiento-e-innovacion.png" alt="Descripción de la imagen">
                                                        <!-- Mitad inferior para el título de la imagen -->
                                                        <form class="botones-carrucel-cursos" action="index.php?c=usuarios&a=claseMuestraNavegacion" method="post">
                                                            <!-- Campo oculto para enviar información -->
                                                            <input type="hidden" name="nombreCurso" value="emprendimiento e innovacion">
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
                                                        <form class="botones-carrucel-cursos" action="index.php?c=usuarios&a=claseMuestraNavegacion" method="post">
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
                                                        <img src="images/curso/excel.png" alt="Descripción de la imagen">
                                                        <!-- Mitad inferior para el título de la imagen -->
                                                        <form class="botones-carrucel-cursos" action="index.php?c=usuarios&a=claseMuestraNavegacion" method="post">
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
                                    <a class="carousel-control-next text-faded" href="#carouselExample29" role="button" data-slide="next">
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
    <footer>
        <div class="bg-[#2E3532] h-[35rem] flex flex-row">
            <div class="text-[#D7F9FF] flex flex-col p-10 ml-16 mt-5">
                <h1 class="font-bold text-3xl border-b-2 w-40">Legal</h1>
                <span class="text-3xl mt-5 w-80">Terminos y condiciones</span>
                <span class="text-3xl mt-5">Aviso de privacidad</span>
                <span class="text-3xl mt-5 w-72">Reglamento y politicas de clase</span>
            </div>
            <div class="text-[#D7F9FF] flex flex-col p-10 mt-5">
                <h1 class="font-bold text-3xl border-b-2 w-40">Empresa</h1>
                <span class="text-3xl mt-5">Ubicacion:</span>
                <span class="text-3xl w-[33.8rem]">Av. General Ramon Corona 2514 Col. Nuevo Mexico, Zapopan,
                    Mexico</span>
                <span class="text-3xl mt-5 w-[34.5rem]">Hábitat de Negocios Tecnológico de Monterrey Campus Guadalajara
                    Piso
                    4.</span>
            </div>
            <div class="text-[#D7F9FF] flex flex-col p-10 mt-5">
                <h1 class="font-bold text-3xl border-b-2 w-40">Contacto</h1>
                <span class="text-3xl mt-5">hola@widolearn.com</span>
                <span class="text-3xl mt-3">22 28 27 90 92</span>
                <div class="my-auto ml-auto">
                    <span class="text-4xl mx-3"><i class="fa-brands fa-facebook "></i></span>
                    <span class="text-4xl mx-3"><i class="fa-brands fa-instagram"></i></span>
                    <span class="text-4xl mx-3"><i class="fa-brands fa-whatsapp"></i></span>
                </div>
            </div>
        </div>
        <div class="bg-[#4F7CAC]">
            <div class="p-10 text-center text-3xl font-semibold">
                <span class="text-black"><i class="fa fa-copyright" aria-hidden="true"></i> copyright</span>
                <span class="text-white">Grupo Aerobot SAPI de CV.</span>
                <span class="text-black">All Rights Reserved</span>
            </div>
        </div>
    </footer>

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