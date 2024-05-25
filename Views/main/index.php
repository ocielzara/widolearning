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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php include 'Views/contenido/lateralUsuario.php'; ?>
    <div class="2xl:p-16 w-full sm:h-screen">
        <div class="imageBackground w-full sm:h-full h-48 sm:mb-0 mb-96">
            <div class="flex flex-col h-full relative sm:top-0 top-48">
                <div class="sm:w-96 w-44 sm:h-1/3 sm:mx-16 logo-wido">
                    <img src="public/images/home/logo.png" class="w-full h-full logo-wido" alt="">
                </div>
                <div class="sm:h-1/3 2xl:text-[2.5rem] xl:text-[2.6rem] text-2xl">
                    <div class="sm:w-[29rem] sm:mx-36 xl:mx-28 2xl:mx-36 2xl:mt-0 xl:mt-10">
                        <h1 class="sm:font-bold text-[#4F7CAC]">Accede a
                            diferentes cursos por
                            videollamada
                        </h1>
                        <h1 class="sm:mt-12 mt-3 sm:font-medium font-bold xl:text-4xl text-[#000000]">
                            Educacion de
                            calidad personalizada
                        </h1>
                    </div>
                </div>
                <div class="sm:h-1/3">
                    <?php if ($mostrar) : ?>

                    <?php else : ?>
                        <div class="flex lg:my-[7.5rem] 2xl:my-[5rem] xl:my-[4rem] sm:mx-44 xl:mx-32 p-10">
                            <button class="bg-[#FEC400] cursor-pointer w-80 flex font-bold justify-center sm:h-16 h-10 text-center items-center rounded-3xl text-black" onclick="iniciarSesion()">
                                Clase
                                muestra
                                gratuita
                            </button>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>

    </div>

    <main>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <a href="https://api.whatsapp.com/message/4IGVTKTG6JFAM1?autoload=1&app_absent=0" onclick="obtenerCursos()" class="float" target="_blank">
            <i class="fa fa-whatsapp my-float"></i>
        </a>


        <section class="sectiona1 my-16 como-funciona sm:max-w-7xl 2xl:max-w-7xl xl:max-w-5xl  mx-auto">
            <div>
                <div class="border-b-2 sm:w-[30rem] text-center border-[#4F7CAC]">
                    <h1 class="sm:text-5xl text-3xl font-bold py-3  text-[#4F7CAC]">
                        ¿Como funciona?
                    </h1>
                </div>
                <div class="flex sm:flex-row flex-col sm:justify-between text-center text-black my-12 xl:p-0 px-12">
                    <div>
                        <div class="xl:w-[16rem] xl:h-60 sm:w-[19.5rem] sm:h-72">
                            <img src="public/images/home/comofunciona1.png" class="w-full h-full" alt="busca el curso o mentor">
                        </div>
                        <h2 class="mx-auto my-3 text-3xl w-[16rem] font-bold">Busca el curso o mentor ideal</h2>
                    </div>
                    <div>
                        <div class="xl:w-[15rem] xl:h-60 sm:w-[18rem] sm:h-72">
                            <img src="public/images/home/comofunciona2.png" class="w-full h-full" alt="adapta a tus tiempos">
                        </div>
                        <h2 class="mx-auto my-3 xl:mt-12 text-[1.75rem] w-[18rem] font-bold">Agenda, adaptado a tus
                            tiempos</h2>
                    </div>
                    <div>
                        <div class="xl:w-[14rem] xl:h-60 sm:w-[19.5rem] sm:h-72">
                            <img src="public/images/home/comofunciona3.png" class="w-full h-full" alt="aprende personalizado">
                        </div>
                        <div>
                            <h2 class="mx-auto mt-3 text-3xl w-[16rem] font-bold">Aprende personalizado</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="max-w-5xl mx-auto my-28">
                <div class="header__container">
                    <div class="header__search">
                        <i id="buscar" class='bx bx-search header__icon'></i>

                        <input type="text" id="inputSearch" class="header__input" placeholder="¿Qué deseas aprender?">

                    </div>
                </div>
                <div class="bg-white hidden border-2 py-2 sm:px-4 shadow rounded-xl mt-4 sm:mx-28 sm:w-[50rem] min-h-auto max-h-[32rem] overflow-y-auto w-full buscador" id="buscador">
                </div>

            </div>

            <div class="p-4 bg-[#d3deea] flex sm:flex-row flex-col justify-around">
                <button class="bg-[#4F7CAC] sm:w-80 h-16 sm:mb-0 mb-3 font-bold rounded-full text-base text-[#FEC400]" type="button" onclick="mostrarContenidoAreas()">Areas
                    de
                    aprendizaje</button>
                <button class="bg-[#2E3532] sm:w-64 h-16 font-bold rounded-full text-base" type="button" onclick="mostrarContenidoMasterTeach()">Master Teach</button>
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

            <div id="pdfModal">
                <div id="pdfContent">
                    <span class="close text-black" onclick="closePDF()">&times;</span>
                    <embed id="pdfEmbed" src="" type="application/pdf" width="100%" height="600px" />
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
                        <div class="swiper-container-2 overflow-hidden">
                            <div class="swiper-wrapper" id="content-asesorias">
                            </div>
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
                            <a class="carousel-control-next text-faded" href="#carouselExample15" role="button" data-slide="next">
                                <span class="carousel-control-next-icon p-2" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>

                <br>
            </div>

            <div id="footer" class="flex justify-center my-10 w-full">
                <button class="text-[#FAC400] bg-[#4F7CAC] rounded-full font-bold w-96  text-xl" type="button" id="toggleButton">Mostrar
                    más
                    categorías</button>
            </div>

            <div id="extraContent" class="hidden">
                <div id="contenido-mas" class="prices-1">
                    <div class="border-b-2 my-10 inline-block border-[#4F7CAC]">
                        <h1 class="sm:text-5xl text-3xl sm:text-left text-center font-bold py-3 text-[#4F7CAC]">
                            OTRO
                        </h1>
                    </div>
                    <div class="flex my-10">
                        <div class="py-10 sm:px-5 px-0 xl:mx-32 md:mx-16 swiper">
                            <div class="card__content overflow-hidden">
                                <div class="swiper-wrapper" id="otros">
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

                    <div id="contenido-mas" class="prices-1">
                        <div class="border-b-2 my-10 inline-block border-[#4F7CAC]">
                            <h1 class="sm:text-5xl text-3xl sm:text-left text-center font-bold py-3 text-[#4F7CAC]">
                                CURSOS DE VOZ
                            </h1>
                        </div>
                        <div class="flex my-10">
                            <div class="py-10 sm:px-5 px-0 xl:mx-32 md:mx-16 swiper">
                                <div class="card__content overflow-hidden">
                                    <div class="swiper-wrapper" id="voz">
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

                        <div id="contenido-mas" class="prices-1">
                            <div class="border-b-2 my-10 inline-block border-[#4F7CAC]">
                                <h1 class="sm:text-5xl text-3xl sm:text-left text-center font-bold py-3 text-[#4F7CAC]">
                                    CURSOS DE VIDEOJUEGOS
                                </h1>
                            </div>
                            <div class="flex my-10">
                                <div class="py-10 sm:px-5 px-0 xl:mx-32 md:mx-16 swiper">
                                    <div class="card__content overflow-hidden">
                                        <div class="swiper-wrapper" id="videojuegos">
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

                            <div id="contenido-mas" class="prices-1">
                                <div class="border-b-2 my-10 inline-block border-[#4F7CAC]">
                                    <h1 class="sm:text-5xl text-3xl sm:text-left text-center font-bold py-3 text-[#4F7CAC]">
                                        CURSOS DE SALUD Y BIENESTAR
                                    </h1>
                                </div>
                                <div class="flex my-10">
                                    <div class="py-10 sm:px-5 px-0 xl:mx-32 md:mx-16 swiper">
                                        <div class="card__content overflow-hidden">
                                            <div class="swiper-wrapper" id="salud">
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

                                <div class="border-b-2 my-10 inline-block border-[#4F7CAC]">
                                    <h1 class="sm:text-5xl text-3xl sm:text-left text-center font-bold py-3 text-[#4F7CAC]">
                                        CURSOS DE PROGRAMACION
                                    </h1>
                                </div>

                                <div class="flex my-10">
                                    <div class="py-10 sm:px-5 px-0 xl:mx-32 md:mx-16 swiper">
                                        <div class="card__content overflow-hidden">
                                            <div class="swiper-wrapper" id="programacion">
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

                                <div id="contenido-mas" class="prices-1">
                                    <div class="border-b-2 my-10 inline-block border-[#4F7CAC]">
                                        <h1 class="sm:text-5xl text-3xl sm:text-left text-center font-bold py-3 text-[#4F7CAC]">
                                            CURSOS DE MUSICA
                                        </h1>
                                    </div>
                                    <div class="flex my-10">
                                        <div class="py-10 sm:px-5 px-0 xl:mx-32 md:mx-16 swiper">
                                            <div class="card__content overflow-hidden">
                                                <div class="swiper-wrapper" id="musica">
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

                                    <div id="contenido-mas" class="prices-1">
                                        <div class="border-b-2 my-10 inline-block border-[#4F7CAC]">
                                            <h1 class="sm:text-5xl text-3xl sm:text-left text-center font-bold py-3 text-[#4F7CAC]">
                                                CURSOS DE MKT
                                            </h1>
                                        </div>
                                        <div class="flex my-10">
                                            <div class="py-10 sm:px-5 px-0 xl:mx-32 md:mx-16 swiper">
                                                <div class="card__content overflow-hidden">
                                                    <div class="swiper-wrapper" id="mkt">
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

                                        <div id="contenido-mas" class="prices-1">
                                            <div class="border-b-2 my-10 inline-block border-[#4F7CAC]">
                                                <h1 class="sm:text-5xl text-3xl sm:text-left text-center font-bold py-3 text-[#4F7CAC]">
                                                    CURSOS DE IDIOMAS
                                                </h1>
                                            </div>
                                            <div class="flex my-10">
                                                <div class="py-10 sm:px-5 px-0 xl:mx-32 md:mx-16 swiper">
                                                    <div class="card__content overflow-hidden">
                                                        <div class="swiper-wrapper" id="idiomas">
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

                                            <div id="contenido-mas" class="prices-1">
                                                <div class="border-b-2 my-10 inline-block border-[#4F7CAC]">
                                                    <h1 class="sm:text-5xl text-3xl sm:text-left text-center font-bold py-3 text-[#4F7CAC]">
                                                        CURSOS DE DIBUJO E ILUSTRACION DIGITAL
                                                    </h1>
                                                </div>
                                                <div class="flex my-10">
                                                    <div class="py-10 sm:px-5 px-0 xl:mx-32 md:mx-16 swiper">
                                                        <div class="card__content overflow-hidden">
                                                            <div class="swiper-wrapper" id="dibujo-ilustracion">
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

                                                <div id="contenido-mas" class="prices-1">
                                                    <div class="border-b-2 my-10 inline-block border-[#4F7CAC]">
                                                        <h1 class="sm:text-5xl text-3xl sm:text-left text-center font-bold py-3 text-[#4F7CAC]">
                                                            CURSOS DE DATA MINING
                                                        </h1>
                                                    </div>
                                                    <div class="flex my-10">
                                                        <div class="py-10 sm:px-5 px-0 xl:mx-32 md:mx-16 swiper">
                                                            <div class="card__content overflow-hidden">
                                                                <div class="swiper-wrapper" id="data-mining">
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

                                                    <div id="contenido-mas" class="prices-1">
                                                        <div class="border-b-2 my-10 inline-block border-[#4F7CAC]">
                                                            <h1 class="sm:text-5xl text-3xl sm:text-left text-center font-bold py-3 text-[#4F7CAC]">
                                                                CURSOS DE CAD
                                                            </h1>
                                                        </div>
                                                        <div class="flex my-10">
                                                            <div class="py-10 sm:px-5 px-0 xl:mx-32 md:mx-16 swiper">
                                                                <div class="card__content overflow-hidden">
                                                                    <div class="swiper-wrapper" id="CAD">
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

                                                        <div id="contenido-mas" class="prices-1">
                                                            <div class="border-b-2 my-10 inline-block border-[#4F7CAC]">
                                                                <h1 class="sm:text-5xl text-3xl sm:text-left text-center font-bold py-3 text-[#4F7CAC]">
                                                                    CURSOS DE ARTE
                                                                </h1>
                                                            </div>
                                                            <div class="flex my-10">
                                                                <div class="py-10 sm:px-5 px-0 xl:mx-32 md:mx-16 swiper">
                                                                    <div class="card__content overflow-hidden">
                                                                        <div class="swiper-wrapper" id="arte">
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

                                                            <div id="contenido-mas" class="prices-1">
                                                                <div class="border-b-2 my-10 inline-block border-[#4F7CAC]">
                                                                    <h1 class="sm:text-5xl text-3xl sm:text-left text-center font-bold py-3 text-[#4F7CAC]">
                                                                        CURSOS DE ADMINISTRACION Y FINANZAS
                                                                    </h1>
                                                                </div>
                                                                <div class="flex my-10">
                                                                    <div class="py-10 sm:px-5 px-0 xl:mx-32 md:mx-16 swiper">
                                                                        <div class="card__content overflow-hidden">
                                                                            <div class="swiper-wrapper" id="administracion">
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


                                                            <div id="video-popup" class="video-popup">
                                                                <div class="video-container">
                                                                    <video id="video-popup-player" controls>
                                                                        <source src="" type="video/mp4">
                                                                        Your browser does not support the
                                                                        video tag.
                                                                    </video>
                                                                    <button id="close-video-popup" class="close-btn">X</button>
                                                                </div>
                                                            </div>

        </section>

        <section class="porque-estudiar">
            <div class="xl:h-[75rem] w-full h-full bg-[#2E3532] sm:p-10 p-5 md:rounded-br-[30rem] my-10">

                <div class="md:mx-52 my-10">
                    <h1 class="text-white mb-3 text-4xl font-bold">¿Porque estudiar en Wido?</h1>
                    <h2 class="md:mx-16 text-[#FEC400] text-2xl font-semibold">La educacion online para que alcances
                        tus metas</h2>
                </div>
                <div class="h-full">
                    <div class="flex lg:flex-row flex-col w-full">
                        <div class="md:w-1/2">
                            <div class="xl:w-[20rem] sm:w-[27rem] xl:ml-auto xl:mr-10">
                                <img src="public/images/home/porqueestudiar.png" class="w-full h-full" alt="personalizacion">
                            </div>
                        </div>
                        <div class="text-white md:w-1/2 md:my-auto my-8">
                            <div class="text-2xl xl:w-[24rem]">
                                <h1 class="w-72 text-[#D7F9FF] font-bold border-b-2 pb-1 border-[#FAC400] text-center">
                                    Personalizacion
                                </h1>
                                <p class="my-4 xl:w-[27rem]">En Wido aprendes en vivo de forma personalizado con un
                                    <span class="font-bold">Master Teach</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="flex lg:flex-row-reverse flex-col my-16 w-full">
                        <div class="md:w-1/2 w-full">
                            <div class="xl:w-[23rem] sm:w-[28rem] xl:ml-10">
                                <img src="public/images/home/porqueestudia2.png" class="w-full h-full" alt="personalizacion">
                            </div>
                        </div>
                        <div class="text-white md:w-1/2 md:my-auto my-8">
                            <div class="ml-auto text-2xl xl:text-right">
                                <h1 class="sm:w-[27rem] text-[#D7F9FF] font-bold ml-auto border-b-2 pb-1 border-[#FAC400]">
                                    Cursos / Asesorias escolares y laborales
                                </h1>
                                <p class="my-4 xl:w-[27rem] xl:ml-auto">Accede a cursos y asesorias de acuerdo a tus
                                    objetivos
                                    y
                                    tiempos</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex lg:flex-row flex-col w-full mt-16">
                        <div class="md:w-1/2">
                            <div class="xl:w-[25rem] sm:w-[28rem] ml-auto mr-5">
                                <img src="public/images/home/porqueestudia3.png" class="w-full h-full" alt="meeting">
                            </div>
                        </div>
                        <div class="text-white md:w-1/2 md:my-auto my-8">
                            <div class="text-2xl">
                                <h1 class="sm:w-96 text-[#D7F9FF] font-bold border-b-2 pb-1 border-[#FAC400] text-center">
                                    Nos adaptamos a ti
                                </h1>
                                <p class="my-4 xl:w-[26rem]">En Wido <span class="font-bold">nos adaptamos a tus
                                        objetivos
                                        de
                                        aprendizaje</span> y al nivel que tengas en cada curso creando un temario
                                    ideal para ti</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section class="cursos-gratis">
            <div class="sm:max-h-full my-16 flex sm:flex-row flex-col flex-wrap justify-evenly">
                <div class="mx-20 xl:mr-10 sm:w-[20rem]">
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
                <div class="my-36 xl:mx-0 mx-20 sm:w-[20rem]">
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
                <h1 class="font-bold xl:text-2xl sm:text-3xl text-2xl border-b-2 w-40">Legal</h1>
                <span class="xl:text-2xl sm:text-3xl text-xl sm:mt-5 mt-3 w-80">Terminos y condiciones</span>
                <span class="xl:text-2xl sm:text-3xl text-xl sm:mt-5 mt-3">Aviso de privacidad</span>
                <span class="xl:text-2xl sm:text-3xl text-xl sm:mt-5 mt-3 w-72">Reglamento y politicas de clase</span>
            </div>
            <div class="text-[#D7F9FF] flex flex-col mx-auto mt-5">
                <h1 class="font-bold xl:text-2xl sm:text-3xl text-2xl border-b-2 w-40">Empresa</h1>
                <span class="xl:text-2xl sm:text-3xl text-xl sm:mt-5 mt-3">Ubicacion:</span>
                <span class="xl:text-2xl sm:text-3xl text-xl sm:w-[33.8rem]">Av. General Ramon Corona 2514 Col. Nuevo
                    Mexico,
                    Zapopan,
                    Mexico</span>
                <span class="xl:text-2xl sm:text-3xl text-xl mt-5 sm:w-[34.5rem]">Hábitat de Negocios Tecnológico de
                    Monterrey
                    Campus
                    Guadalajara
                    Piso
                    4.</span>
            </div>
            <div class="text-[#D7F9FF] flex flex-col sm:mx-auto mt-5">
                <h1 class="font-bold xl:text-2xl sm:text-3xl text-2xl border-b-2 w-40">Contacto</h1>
                <span class="xl:text-2xl sm:text-3xl text-xl mt-5">hola@widolearn.com</span>
                <span class="xl:text-2xl sm:text-3xl text-xl mt-3">22 28 27 90 92</span>
                <div class="sm:my-auto my-5 sm:ml-auto sm:mx-0 mx-auto">
                    <span class="xl:text-2xl sm:text-4xl text-2xl mx-3"><i class="fa-brands fa-facebook "></i></span>
                    <span class="xl:text-2xl sm:text-4xl text-2xl mx-3"><i class="fa-brands fa-instagram"></i></span>
                    <span class="xl:text-2xl sm:text-4xl text-2xl mx-3"><i class="fa-brands fa-whatsapp"></i></span>
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