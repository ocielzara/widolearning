<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wido</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <link rel="icon" type="image/png" sizes="32x32" href="public/images/home/iconWido.png">
    <link rel="icon" type="image/png" sizes="16x16" href="public/images/home/iconWido.png">

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

    <!--------------------------------STRIPE----------------------------------->
    <script async src="https://js.stripe.com/v3/buy-button.js"></script>

</head>

<body>
    <?php include 'Views/contenido/lateralUsuario.php'; ?>
    <div class="2xl:p-16 w-full sm:h-screen">
        <div class="imageBackground w-full sm:h-full h-48 sm:mb-0 mb-96">
            <div class="flex flex-col h-full relative sm:top-0 top-48">
                <div class="sm:w-96 w-44 sm:h-1/3 sm:mx-16 2xl:mx-5 logo-wido">
                    <img src="public/images/home/logo.png" class="w-full h-full logo-wido" alt="">
                </div>
                <div class="sm:h-1/3 2xl:text-[2.5rem] xl:text-[2em] text-2xl">
                    <div class="sm:w-[29rem] sm:mx-36 xl:mx-28 2xl:mx-32 2xl:mt-0 xl:mt-10">
                        <h1 class="sm:font-bold text-[#4F7CAC]">Accede a
                            diferentes cursos por
                            videollamada
                        </h1>
                        <h1 class="sm:mt-12 mt-3 sm:font-medium font-bold 2xl:text-4xl xl:text-3xl text-[#000000]">
                            Educacion de
                            calidad personalizada
                        </h1>
                    </div>
                </div>
                <div class="sm:h-1/3">
                    <?php if (isset($_SESSION['nombre'])) : ?>
                    <?php else : ?>
                        <div class="flex lg:my-[7.5rem] 2xl:my-[5rem] xl:my-[4rem] sm:mx-44 xl:mx-32 p-10">
                            <button
                                class="bg-[#FEC400] cursor-pointer w-80 flex font-bold justify-center sm:h-16 h-10 text-center items-center rounded-3xl text-black"
                                onclick="iniciarSesion()">
                                Clase muestra gratuita
                            </button>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
        </div>

    </div>

    <main>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <a href="https://api.whatsapp.com/message/4IGVTKTG6JFAM1?autoload=1&app_absent=0" onclick="obtenerCursos()"
            class="float" target="_blank">
            <i class="fa fa-whatsapp my-float"></i>
        </a>

        <div id="myModalCompra" class="modalCompra">
            <div class="modal-contentCompra">
                <span class="close" style="color: #000000;">&times;</span>
                <div class="p-5" id="data-mentor-id">
                    <h1 class="text-[#4F7CAC] font-bold text-2xl" id="mentor-dataCompra"></h1>
                    <p class="modal-parrafo my-8 font-medium" id="curso-dataCompra"></p>
                    <div class="payment-options">
                        <div class="payment-option left">
                            Pago único
                        </div>
                        <div class="payment-option right">
                            Pago en partes
                        </div>
                    </div>
                    <div class="button-container">
                        <stripe-buy-button buy-button-id="buy_btn_1OurNQCiGkywhmkuimUxFNd8"
                            publishable-key="pk_live_51OuqPCCiGkywhmkuV2nok90bajPjNUHxaG9zVsaV9rxUW5DHk68o9X5bME8vma7Ks6x2ZAUDCSWbfHWnXGLR5KhZ00xrK59zi2">
                        </stripe-buy-button>
                        <stripe-buy-button buy-button-id="buy_btn_1OurNQCiGkywhmkuimUxFNd8"
                            publishable-key="pk_live_51OuqPCCiGkywhmkuV2nok90bajPjNUHxaG9zVsaV9rxUW5DHk68o9X5bME8vma7Ks6x2ZAUDCSWbfHWnXGLR5KhZ00xrK59zi2">
                        </stripe-buy-button>
                    </div>
                </div>
            </div>
        </div>


        <section class="sectiona1 my-16 como-funciona sm:max-w-7xl 2xl:max-w-7xl xl:max-w-5xl  mx-auto">
            <div>
                <div class="sm:w-[30rem] text-center">
                    <h1
                        class="border-b-2 border-[#4F7CAC] 2xl:text-4xl xl:text-3xl text-xl font-bold py-3  text-[#4F7CAC]">
                        ¿Como funciona?
                    </h1>
                </div>
                <div class="flex sm:flex-row flex-col sm:justify-between text-center text-black my-12 xl:p-0 px-12">
                    <div>
                        <div>
                            <img src="public/images/home/comofunciona1.png" class="2xl:w-60 lg:w-48 2xl:h-64 lg:h-48
                            w-56 h-56 sm:mx-0 mx-auto" alt="busca el curso o mentor">
                        </div>
                        <h2 class="mx-auto my-3 2xl:text-3xl xl:text-xl text-2xl w-[16rem] font-bold">Busca el curso o
                            mentor ideal</h2>
                    </div>
                    <div>
                        <div>
                            <img src="public/images/home/comofunciona2.png" class="2xl:w-60 lg:w-48 2xl:h-64 lg:h-48
                            w-56 h-56 sm:mx-0 mx-auto" alt="adapta a tus tiempos">
                        </div>
                        <h2 class="mx-auto my-3 xl:mt-12 2xl:text-3xl xl:text-xl text-2xl w-[18rem] font-bold">Agenda,
                            adaptado a tus
                            tiempos</h2>
                    </div>
                    <div>
                        <div>
                            <img src="public/images/home/comofunciona3.png" class="2xl:w-60 lg:w-48 2xl:h-64 lg:h-48
                            w-56 h-56 sm:mx-0 mx-auto" alt="aprende personalizado">
                        </div>
                        <div>
                            <h2 class="mx-auto mt-3 2xl:text-3xl xl:text-xl text-2xl w-[16rem] font-bold">Aprende
                                personalizado</h2>
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
                <div class="bg-white hidden border-2 py-2 sm:px-4 shadow rounded-xl mt-4 sm:mx-28 sm:w-[50rem] min-h-auto max-h-[32rem] overflow-y-auto w-full buscador"
                    id="buscador">
                </div>

            </div>

            <div class="p-4 bg-[#d3deea] flex sm:flex-row flex-col justify-around">
                <button id="btn-areas"
                    class="bg-[#4F7CAC] sm:w-80 h-16 sm:mb-0 mb-3 font-bold rounded-full text-base text-[#FEC400]"
                    type="button" onclick="mostrarContenidoAreas()">Areas
                    de
                    aprendizaje</button>
                <button id="btn-master" class="bg-[#2E3532] sm:w-64 h-16 font-bold rounded-full text-base" type="button"
                    onclick="mostrarContenidoMasterTeach()">Master Teach</button>
            </div>

        </section>


        <!--
         <section class="splide h-[30rem] 2xl:mx-44" aria-label="Splide Basic HTML Example">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <div class="sm:w-auto sm:mx-0 mx-auto w-[20rem] ">
                            <div class="w-[20rem] h-56">
                                <img src="public/images/curso/aleman.png" class="w-full h-full" title="curso-img" />
                            </div>
                            <div class="border1 bg-[#2E3532] w-[20rem] h-56 flex flex-col items-center">
                                <button class="mt-auto mb-3 w-[80%] p-2 rounded-2xl bg-[#FEC400]">Clase Muestra</button>
                                <button class="mb-auto w-[80%] p-2 rounded-2xl bg-slate-500">Temario</button>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
        </section>
                    -->

        <section class="section2 cursos-demanda 2xl:max-w-[90rem] 2xl:mx-auto">
            <div id="contenido-top">
                <div class="my-10">
                    <h1
                        class="md:w-fit border-b-2 border-[#4F7CAC] md:text-start text-center 2xl:text-5xl lg:text-2xl text-xl sm:ml-20 font-bold py-3 text-[#4F7CAC]">
                        CURSOS TOP (con mayor demanda)
                    </h1>
                </div>
                <div class="flex my-10 w-[96%]">
                    <div class="py-10 sm:px-5 px-0 xl:mx-32 md:mx-16 swiper">
                        <div class="flex overflow-x-auto space-x-4 p-4" id="content-cursos">
                        </div>
                    </div>
                </div>
            </div>

            <div id="pdfModal">
                <div id="pdfContent">
                    <span class="close" style="color: black; cursor: pointer;" onclick="closePDF()">&times;</span>
                    <embed id="pdfEmbed" src="" type="application/pdf" width="100%" height="600px" />
                </div>
            </div>

            <div id="contenido-areas" class="prices-1">
                <div class="my-10">
                    <h1
                        class="md:w-fit border-b-2 border-[#4F7CAC] md:text-start text-center 2xl:text-5xl lg:text-2xl text-xl sm:ml-20 font-bold py-3 text-[#4F7CAC]">
                        ASESORÍAS ACADEMICAS/LABORALES
                    </h1>
                </div>
                <div class="flex my-10">
                    <div class="py-10 sm:px-5 px-0 xl:mx-32 md:mx-16 swiper">
                        <div class="flex overflow-x-auto space-x-4 p-4" id="content-asesorias">
                        </div>
                    </div>
                </div>
            </div>

            <div id="contenido-programacion">
                <div class="my-10">
                    <h1
                        class="border-b-2 border-[#4F7CAC] sm:text-start 2xl:text-5xl lg:text-2xl text-2xl sm:ml-20 font-bold py-3 text-[#4F7CAC]">
                        CURSOS DE PROGRAMACION
                    </h1>
                </div>

                <div class="flex my-10">
                    <div class="py-10 sm:px-5 px-0 xl:mx-32 md:mx-16 swiper">
                        <div class="py-10 sm:px-5 px-0 xl:mx-32 md:mx-16 swiper">
                            <div class="flex overflow-x-auto space-x-4 p-4" id="programacion">
                            </div>
                        </div>
                        <!--    <div class="swiper-button-next">
                            <i class="ri-arrow-right-s-line "></i>
                        </div>
                        <div class="swiper-button-prev">
                            <i class="ri-arrow-left-s-line"></i>
                        </div> --->
                    </div>
                </div>
            </div>

            <div id="contenido-administracion">
                <div class="my-10 inline-block">
                    <h1
                        class="border-b-2 border-[#4F7CAC] sm:text-start text-center 2xl:text-5xl lg:text-2xl text-3xl sm:ml-20 font-bold py-3 text-[#4F7CAC]">
                        CURSOS DE ADMINISTRACION Y FINAZAS
                    </h1>
                </div>

                <div class="flex my-10">
                    <div class="py-10 sm:px-5 px-0 xl:mx-32 md:mx-16 swiper">
                        <div class="py-10 sm:px-5 px-0 xl:mx-32 md:mx-16 swiper">
                            <div class="flex overflow-x-auto space-x-4 p-4" id="administracion">
                            </div>
                        </div>

                        <!--    <div class="swiper-button-next">
                            <i class="ri-arrow-right-s-line "></i>
                        </div>
                        <div class="swiper-button-prev">
                            <i class="ri-arrow-left-s-line"></i>
                        </div> --->
                    </div>
                </div>
            </div>




            <!--Master teach-->
            <div id="contenido-master-teach" class="prices-1" style="display: none;">
                <div class=" my-10 inline-block">
                    <h1
                        class="border-b-2 border-[#4F7CAC] sm:text-start text-center lg:text-4xl text-3xl sm:ml-20 font-bold py-3 text-[#4F7CAC]">
                        TODOS LOS MENTORES
                    </h1>
                </div>

                <div class="flex my-10">
                    <div class="py-10 sm:px-5 px-0 xl:mx-32 md:mx-16 swiper">
                        <div class="flex overflow-x-auto space-x-4 p-4" id="content-mentores">
                        </div>

                    </div>
                </div>


                <div class=" my-10 inline-block">
                    <h1
                        class="border-b-2 border-[#4F7CAC] sm:text-start text-center lg:text-4xl text-3xl sm:ml-20 font-bold py-3 text-[#4F7CAC]">
                        ADMINISTRACION
                    </h1>
                </div>
                <div class="flex my-10">
                    <div class="py-10 sm:px-5 px-0 xl:mx-32 md:mx-16 swiper">
                        <div class="card__content overflow-hidden ">
                            <div class="swiper-wrapper" id="administracion-mentores">
                            </div>
                        </div>
                        <!--    <div class="swiper-button-next">
                            <i class="ri-arrow-right-s-line "></i>
                        </div>
                        <div class="swiper-button-prev">
                            <i class="ri-arrow-left-s-line"></i>
                        </div> --->
                    </div>
                </div>

                <div class=" my-10 inline-block">
                    <h1
                        class="border-b-2 border-[#4F7CAC] sm:text-start text-center lg:text-4xl text-3xl sm:ml-20 font-bold py-3 text-[#4F7CAC]">
                        PROGRAMACION
                    </h1>
                </div>
                <div class="flex my-10">
                    <div class="py-10 sm:px-5 px-0 xl:mx-32 md:mx-16 swiper">
                        <div class="card__content overflow-hidden ">
                            <div class="swiper-wrapper" id="programacion-mentores">
                            </div>
                        </div>
                        <!--    <div class="swiper-button-next">
                            <i class="ri-arrow-right-s-line "></i>
                        </div>
                        <div class="swiper-button-prev">
                            <i class="ri-arrow-left-s-line"></i>
                        </div> --->
                    </div>
                </div>

                <div class=" my-10 inline-block">
                    <h1
                        class="border-b-2 border-[#4F7CAC] sm:text-start text-center lg:text-4xl text-3xl sm:ml-20 font-bold py-3 text-[#4F7CAC]">
                        CAD
                    </h1>
                </div>
                <div class="flex my-10">
                    <div class="py-10 sm:px-5 px-0 xl:mx-32 md:mx-16 swiper">
                        <div class="card__content overflow-hidden ">
                            <div class="swiper-wrapper" id="CAD-mentores">
                            </div>
                        </div>
                        <!--    <div class="swiper-button-next">
                            <i class="ri-arrow-right-s-line "></i>
                        </div>
                        <div class="swiper-button-prev">
                            <i class="ri-arrow-left-s-line"></i>
                        </div> --->
                    </div>
                </div>

                <div class=" my-10 inline-block">
                    <h1
                        class="border-b-2 border-[#4F7CAC] sm:text-start text-center lg:text-4xl text-3xl sm:ml-20 font-bold py-3 text-[#4F7CAC]">
                        EDICION DIGITAL
                    </h1>
                </div>
                <div class="flex my-10">
                    <div class="py-10 sm:px-5 px-0 xl:mx-32 md:mx-16 swiper">
                        <div class="card__content overflow-hidden ">
                            <div class="swiper-wrapper" id="CAD-mentores">
                            </div>
                        </div>
                        <!--    <div class="swiper-button-next">
                            <i class="ri-arrow-right-s-line "></i>
                        </div>
                        <div class="swiper-button-prev">
                            <i class="ri-arrow-left-s-line"></i>
                        </div> --->
                    </div>
                </div>

                <div class=" my-10 inline-block">
                    <h1
                        class="border-b-2 border-[#4F7CAC] sm:text-start text-center lg:text-4xl text-3xl sm:ml-20 font-bold py-3 text-[#4F7CAC]">
                        DIBUJO ILUSTRACION
                    </h1>
                </div>
                <div class="flex my-10">
                    <div class="py-10 sm:px-5 px-0 xl:mx-32 md:mx-16 swiper">
                        <div class="card__content overflow-hidden ">
                            <div class="swiper-wrapper" id="dibujo-ilustracion-mentores">
                            </div>
                        </div>
                        <!--    <div class="swiper-button-next">
                            <i class="ri-arrow-right-s-line "></i>
                        </div>
                        <div class="swiper-button-prev">
                            <i class="ri-arrow-left-s-line"></i>
                        </div> --->
                    </div>
                </div>

                <div class=" my-10 inline-block">
                    <h1
                        class="border-b-2 border-[#4F7CAC] sm:text-start text-center lg:text-4xl text-3xl sm:ml-20 font-bold py-3 text-[#4F7CAC]">
                        MODELADO Y ANIMACION
                    </h1>
                </div>
                <div class="flex my-10">
                    <div class="py-10 sm:px-5 px-0 xl:mx-32 md:mx-16 swiper">
                        <div class="card__content overflow-hidden ">
                            <div class="swiper-wrapper" id="modelado-animacion-mentores">
                            </div>
                        </div>
                        <!--    <div class="swiper-button-next">
                            <i class="ri-arrow-right-s-line "></i>
                        </div>
                        <div class="swiper-button-prev">
                            <i class="ri-arrow-left-s-line"></i>
                        </div> --->
                    </div>
                </div>

                <div class=" my-10 inline-block">
                    <h1
                        class="border-b-2 border-[#4F7CAC] sm:text-start text-center lg:text-4xl text-3xl sm:ml-20 font-bold py-3 text-[#4F7CAC]">
                        ROBOTICA Y ELECTRONICA
                    </h1>
                </div>
                <div class="flex my-10">
                    <div class="py-10 sm:px-5 px-0 xl:mx-32 md:mx-16 swiper">
                        <div class="card__content overflow-hidden ">
                            <div class="swiper-wrapper" id="robotica-electronica-mentores">
                            </div>
                        </div>
                        <!--    <div class="swiper-button-next">
                            <i class="ri-arrow-right-s-line "></i>
                        </div>
                        <div class="swiper-button-prev">
                            <i class="ri-arrow-left-s-line"></i>
                        </div> --->
                    </div>
                </div>

                <div class=" my-10 inline-block">
                    <h1
                        class="border-b-2 border-[#4F7CAC] sm:text-start text-center lg:text-4xl text-3xl sm:ml-20 font-bold py-3 text-[#4F7CAC]">
                        VIDEO JUEGOS
                    </h1>
                </div>
                <div class="flex my-10">
                    <div class="py-10 sm:px-5 px-0 xl:mx-32 md:mx-16 swiper">
                        <div class="card__content overflow-hidden ">
                            <div class="swiper-wrapper" id="videojuegos-mentores">
                            </div>
                        </div>
                        <!--    <div class="swiper-button-next">
                            <i class="ri-arrow-right-s-line "></i>
                        </div>
                        <div class="swiper-button-prev">
                            <i class="ri-arrow-left-s-line"></i>
                        </div> --->
                    </div>
                </div>

                <div class=" my-10 inline-block">
                    <h1
                        class="border-b-2 border-[#4F7CAC] sm:text-start text-center lg:text-4xl text-3xl sm:ml-20 font-bold py-3 text-[#4F7CAC]">
                        MKT
                    </h1>
                </div>
                <div class="flex my-10">
                    <div class="py-10 sm:px-5 px-0 xl:mx-32 md:mx-16 swiper">
                        <div class="card__content overflow-hidden ">
                            <div class="swiper-wrapper" id="mkt-mentores">
                            </div>
                        </div>
                        <!--    <div class="swiper-button-next">
                            <i class="ri-arrow-right-s-line "></i>
                        </div>
                        <div class="swiper-button-prev">
                            <i class="ri-arrow-left-s-line"></i>
                        </div> --->
                    </div>
                </div>

                <div class=" my-10 inline-block">
                    <h1
                        class="border-b-2 border-[#4F7CAC] sm:text-start text-center lg:text-4xl text-3xl sm:ml-20 font-bold py-3 text-[#4F7CAC]">
                        DATA MINING
                    </h1>
                </div>
                <div class="flex my-10">
                    <div class="py-10 sm:px-5 px-0 xl:mx-32 md:mx-16 swiper">
                        <div class="card__content overflow-hidden ">
                            <div class="swiper-wrapper" id="data-mining-mentores">
                            </div>
                        </div>
                        <!--    <div class="swiper-button-next">
                            <i class="ri-arrow-right-s-line "></i>
                        </div>
                        <div class="swiper-button-prev">
                            <i class="ri-arrow-left-s-line"></i>
                        </div> --->
                    </div>
                </div>
                <!--
                    <div class="border-b-2 my-10 inline-block border-[#4F7CAC]">
                        <h1 class="sm:text-5xl text-3xl sm:text-left text-center font-bold py-3 text-[#4F7CAC]">
                            ARTE
                        </h1>
                    </div>
                    <div class="flex my-10">
                        <div class="py-10 sm:px-5 px-0 xl:mx-32 md:mx-16 swiper">
                            <div class="card__content overflow-hidden ">
                                <div class="swiper-wrapper" id="arte-mentores">
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
                    -->

                <div class=" my-10 inline-block">
                    <h1
                        class="border-b-2 border-[#4F7CAC] sm:text-start text-center lg:text-4xl text-3xl sm:ml-20 font-bold py-3 text-[#4F7CAC]">
                        IDIOMAS
                    </h1>
                </div>
                <div class="flex my-10">
                    <div class="py-10 sm:px-5 px-0 xl:mx-32 md:mx-16 swiper">
                        <div class="card__content overflow-hidden ">
                            <div class="swiper-wrapper" id="idiomas-mentores">
                            </div>
                        </div>
                        <!--    <div class="swiper-button-next">
                            <i class="ri-arrow-right-s-line "></i>
                        </div>
                        <div class="swiper-button-prev">
                            <i class="ri-arrow-left-s-line"></i>
                        </div> --->
                    </div>
                </div>

                <div class=" my-10 inline-block">
                    <h1
                        class="border-b-2 border-[#4F7CAC] sm:text-start text-center lg:text-4xl text-3xl sm:ml-20 font-bold py-3 text-[#4F7CAC]">
                        MUSICA
                    </h1>
                </div>
                <div class="flex my-10">
                    <div class="py-10 sm:px-5 px-0 xl:mx-32 md:mx-16 swiper">
                        <div class="card__content overflow-hidden ">
                            <div class="swiper-wrapper" id="musica-mentores">
                            </div>
                        </div>
                        <!--    <div class="swiper-button-next">
                            <i class="ri-arrow-right-s-line "></i>
                        </div>
                        <div class="swiper-button-prev">
                            <i class="ri-arrow-left-s-line"></i>
                        </div> --->
                    </div>
                </div>

                <div class=" my-10 inline-block">
                    <h1
                        class="border-b-2 border-[#4F7CAC] sm:text-start text-center lg:text-4xl text-3xl sm:ml-20 font-bold py-3 text-[#4F7CAC]">
                        SALUD
                    </h1>
                </div>
                <div class="flex my-10">
                    <div class="py-10 sm:px-5 px-0 xl:mx-32 md:mx-16 swiper">
                        <div class="card__content overflow-hidden ">
                            <div class="swiper-wrapper" id="salud-mentores">
                            </div>
                        </div>
                        <!--    <div class="swiper-button-next">
                            <i class="ri-arrow-right-s-line "></i>
                        </div>
                        <div class="swiper-button-prev">
                            <i class="ri-arrow-left-s-line"></i>
                        </div> --->
                    </div>
                </div>

                <div class=" my-10 inline-block">
                    <h1
                        class="border-b-2 border-[#4F7CAC] sm:text-start text-center lg:text-4xl text-3xl sm:ml-20 font-bold py-3 text-[#4F7CAC]">
                        OTROS
                    </h1>
                </div>
                <div class="flex my-10">
                    <div class="py-10 sm:px-5 px-0 xl:mx-32 md:mx-16 swiper">
                        <div class="flex overflow-x-auto space-x-4 p-4" id="otros-mentores">
                        </div>
                    </div>
                </div>


            </div>

            <div id="footer" class="flex justify-center my-10 w-full">
                <button class="text-[#FAC400] bg-[#4F7CAC] rounded-full font-bold w-96  text-xl" type="button"
                    id="toggleButton">Mostrar
                    más
                    categorías</button>
            </div>

            <div id="extraContent" class="hidden">
                <div id="contenido-mas" class="prices-1">
                    <div class="my-10 inline-block">
                        <h1
                            class="border-b-2 border-[#4F7CAC] sm:text-start text-center lg:text-4xl text-3xl sm:ml-20 font-bold py-3 text-[#4F7CAC]">
                            OTRO
                        </h1>
                    </div>
                    <div class="flex my-10">
                        <div class="py-10 sm:px-5 px-0 xl:mx-32 md:mx-16 swiper">
                            <div class="flex overflow-x-auto space-x-4 p-4" id="otros">
                            </div>
                        </div>
                    </div>

                    <div id="contenido-mas" class="prices-1">
                        <div class="my-10 inline-block">
                            <h1
                                class="border-b-2 border-[#4F7CAC] sm:text-start text-center lg:text-4xl text-3xl sm:ml-20 font-bold py-3 text-[#4F7CAC]">
                                CURSOS DE VOZ
                            </h1>
                        </div>
                        <div class="flex my-10">
                            <div class="py-10 sm:px-5 px-0 xl:mx-32 md:mx-16 swiper">
                                <div class="flex overflow-x-auto space-x-4 p-4" id="voz">
                                </div>
                            </div>
                        </div>

                        <div id="contenido-mas" class="prices-1">
                            <div class="my-10 inline-block">
                                <h1
                                    class="border-b-2 border-[#4F7CAC] sm:text-start text-center lg:text-4xl text-3xl sm:ml-20 font-bold py-3 text-[#4F7CAC]">
                                    CURSOS DE VIDEOJUEGOS
                                </h1>
                            </div>
                            <div class="flex my-10">
                                <div class="py-10 sm:px-5 px-0 xl:mx-32 md:mx-16 swiper">
                                    <div class="flex overflow-x-auto space-x-4 p-4" id="videojuegos">
                                    </div>
                                </div>
                            </div>

                            <div id="contenido-mas" class="prices-1">
                                <div class="my-10 inline-block">
                                    <h1
                                        class="border-b-2 border-[#4F7CAC] sm:text-start text-center lg:text-4xl text-3xl sm:ml-20 font-bold py-3 text-[#4F7CAC]">
                                        CURSOS DE SALUD Y BIENESTAR
                                    </h1>
                                </div>
                                <div class="flex my-10">
                                    <div class="py-10 sm:px-5 px-0 xl:mx-32 md:mx-16 swiper">
                                        <div class="flex overflow-x-auto space-x-4 p-4" id="salud">
                                        </div>
                                    </div>
                                </div>

                                <div id="contenido-mas" class="prices-1">
                                    <div class="my-10 inline-block">
                                        <h1
                                            class="border-b-2 border-[#4F7CAC] sm:text-start text-center lg:text-4xl text-3xl sm:ml-20 font-bold py-3 text-[#4F7CAC]">
                                            CURSOS DE MUSICA
                                        </h1>
                                    </div>
                                    <div class="flex my-10">
                                        <div class="py-10 sm:px-5 px-0 xl:mx-32 md:mx-16 swiper">
                                            <div class="flex overflow-x-auto space-x-4 p-4" id="musica">
                                            </div>
                                        </div>
                                    </div>

                                    <div id="contenido-mas" class="prices-1">
                                        <div class="my-10 inline-block">
                                            <h1
                                                class="border-b-2 border-[#4F7CAC] sm:text-start text-center lg:text-4xl text-3xl sm:ml-20 font-bold py-3 text-[#4F7CAC]">
                                                CURSOS DE MKT
                                            </h1>
                                        </div>
                                        <div class="flex my-10">
                                            <div class="py-10 sm:px-5 px-0 xl:mx-32 md:mx-16 swiper">
                                                <div class="flex overflow-x-auto space-x-4 p-4" id="mkt">
                                                </div>
                                            </div>
                                        </div>

                                        <div id="contenido-mas" class="prices-1">
                                            <div class="my-10 inline-block">
                                                <h1
                                                    class="border-b-2 border-[#4F7CAC] sm:text-start text-center lg:text-4xl text-3xl sm:ml-20 font-bold py-3 text-[#4F7CAC]">
                                                    CURSOS DE IDIOMAS
                                                </h1>
                                            </div>
                                            <div class="flex my-10">
                                                <div class="py-10 sm:px-5 px-0 xl:mx-32 md:mx-16 swiper">
                                                    <div class="flex overflow-x-auto space-x-4 p-4" id="idiomas">
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="contenido-mas" class="prices-1">
                                                <div class="my-10 inline-block">
                                                    <h1
                                                        class="border-b-2 border-[#4F7CAC] sm:text-start text-center lg:text-4xl text-3xl sm:ml-20 font-bold py-3 text-[#4F7CAC]">
                                                        CURSOS DE DIBUJO E ILUSTRACION DIGITAL
                                                    </h1>
                                                </div>
                                                <div class="flex my-10">
                                                    <div class="py-10 sm:px-5 px-0 xl:mx-32 md:mx-16 swiper">
                                                        <div class="flex overflow-x-auto space-x-4 p-4"
                                                            id="dibujo-ilustracion">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div id="contenido-mas" class="prices-1">
                                                    <div class="my-10 inline-block">
                                                        <h1
                                                            class="border-b-2 border-[#4F7CAC] sm:text-start text-center lg:text-4xl text-3xl sm:ml-20 font-bold py-3 text-[#4F7CAC]">
                                                            CURSOS DE DATA MINING
                                                        </h1>
                                                    </div>
                                                    <div class="flex my-10">
                                                        <div class="py-10 sm:px-5 px-0 xl:mx-32 md:mx-16 swiper">
                                                            <div class="flex overflow-x-auto space-x-4 p-4"
                                                                id="data-mining">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div id="contenido-mas" class="prices-1">
                                                        <div class="my-10 inline-block">
                                                            <h1
                                                                class="border-b-2 border-[#4F7CAC] sm:text-start text-center lg:text-4xl text-3xl sm:ml-20 font-bold py-3 text-[#4F7CAC]">
                                                                CURSOS DE CAD
                                                            </h1>
                                                        </div>
                                                        <div class="flex my-10">
                                                            <div class="py-10 sm:px-5 px-0 xl:mx-32 md:mx-16 swiper">
                                                                <div class="flex overflow-x-auto space-x-4 p-4"
                                                                    id="CAD">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div id="contenido-mas" class="prices-1">
                                                            <div class="my-10 inline-block">
                                                                <h1
                                                                    class="border-b-2 border-[#4F7CAC] sm:text-start text-center lg:text-4xl text-3xl sm:ml-20 font-bold py-3 text-[#4F7CAC]">
                                                                    CURSOS DE ARTE
                                                                </h1>
                                                            </div>
                                                            <div class="flex my-10">
                                                                <div
                                                                    class="py-10 sm:px-5 px-0 xl:mx-32 md:mx-16 swiper">
                                                                    <div class="flex overflow-x-auto space-x-4 p-4"
                                                                        id="arte">
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>

        </section>

        <section class="porque-estudiar">
            <div class="xl:h-[75rem] w-full h-full bg-[#2E3532] sm:p-10 p-5 md:rounded-br-[30rem] my-10">

                <div class="md:mx-52 my-10 2xl:text-3xl xl:text-xl">
                    <h1 class="text-white mb-3 font-bold">¿Porque estudiar en Wido?</h1>
                    <h2 class="md:mx-16 text-[#FEC400] text-xl font-semibold">La educacion online para que alcances
                        tus metas</h2>
                </div>
                <div class="h-full">
                    <div class="flex lg:flex-row flex-col w-full">
                        <div class="md:w-1/2">
                            <div class="2xl:w-[20rem] xl:w-[15rem] sm:w-[25rem] xl:ml-auto xl:mr-10">
                                <img src="public/images/home/porqueestudiar.png" class="w-full h-full"
                                    alt="personalizacion">
                            </div>
                        </div>
                        <div class="text-white md:w-1/2 md:my-auto my-8">
                            <div class="2xl:text-2xl xl:text-xl xl:w-[24rem]">
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
                            <div class="2xl:w-[20rem] xl:w-[15rem] sm:w-[28rem] xl:ml-10">
                                <img src="public/images/home/porqueestudia2.png" class="w-full h-full"
                                    alt="personalizacion">
                            </div>
                        </div>
                        <div class="text-white md:w-1/2 md:my-auto my-8">
                            <div class="ml-auto 2xl:text-2xl xl:text-xl xl:text-right">
                                <h1
                                    class="sm:w-[27rem] text-[#D7F9FF] font-bold ml-auto border-b-2 pb-1 border-[#FAC400]">
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
                            <div class="2xl:w-[20rem] xl:w-[15rem] sm:w-[28rem] ml-auto mr-5">
                                <img src="public/images/home/porqueestudia3.png" class="w-full h-full" alt="meeting">
                            </div>
                        </div>
                        <div class="text-white md:w-1/2 md:my-auto my-8">
                            <div class="2xl:text-2xl xl:text-xl">
                                <h1
                                    class="sm:w-96 text-[#D7F9FF] font-bold border-b-2 pb-1 border-[#FAC400] text-center">
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
                <div class="mx-20 xl:mr-10 2xl:w-[20rem] xl:w-[15rem]">
                    <div>
                        <img src="public/images/home/cursosgratis.png" class="w-full h-full" alt="cursogratis">
                    </div>
                    <div>
                        <h1
                            class="border-b-2 border-[#FAC400] text-[#4F7CAC] text-center 2xl:text-3xl xl:text-xl font-bold my-3">
                            Cursos
                            GRATIS
                        </h1>
                        <p class="2xl:text-xl xl:text-lg sm:mx-10 font-medium">Cursos OnDemand totalmente gratis. En
                            Wido a
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
                        <h1
                            class="border-b-2 border-[#FAC400] text-[#4F7CAC] 2xl:mx-0 lg:mx-16 text-center 2xl:text-3xl xl:text-xl font-bold my-3">
                            Conecta con tu Master Teach</h1>
                        <p class="2xl:text-xl xl:text-lg sm:mx-10 font-medium">No pierdas de vista a tus mentores
                            favoritos. Podrás
                            estar en contacto con ellos de por
                            vida
                            por medio de nuestro sistema de suscripción a los canales 100% gratis</p>
                    </div>
                </div>
                <div class="mx-20 2xl:w-[20rem] xl:w-[15rem]">
                    <div>
                        <img src="public/images/home/obtenrrecompensas.png" class="w-full h-full" alt="">
                    </div>
                    <div>
                        <h1
                            class="border-b-2 border-[#FAC400] text-[#4F7CAC] text-center 2xl:text-3xl xl:text-xl font-bold my-3">
                            Obten
                            recompensas</h1>
                        <p class="2xl:text-xl xl:text-lg sm:mx-10 font-medium">En Wido premiamos a nuestros estudiantes
                            por medio de
                            un sistema de gamificación.</p>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <footer>
        <div class="bg-[#2E3532] xl:h-[35rem] p-10 flex sm:flex-row flex-col flex-wrap">
            <div class="text-[#D7F9FF] flex flex-col sm:ml-16 mt-5">
                <h1 class="font-bold 2xl:text-2xl xl:text-lg sm:text-3xl text-2xl border-b-2 w-40">Legal</h1>
                <a href="https://drive.google.com/file/d/1KtdaVcsr4WbdazkH_lgWK9I5u8TzL8in/view?usp=drive_link"
                    class="2xl:text-2xl xl:text-lg sm:text-3xl text-xl sm:mt-5 mt-3 w-80">Términos y condiciones</a>
                <a href="https://drive.google.com/file/d/1q7vgJURN8r1Q3Tw-3DBtHEtYDva1xTmQ/view?usp=drive_link"
                    class="2xl:text-2xl xl:text-lg sm:text-3xl text-xl sm:mt-5 mt-3 w-80">Aviso de privacidad</a>
                <span class="2xl:text-2xl xl:text-lg sm:text-3xl text-xl sm:mt-5 mt-3 w-72">Reglamento y politicas de
                    clase</span>
            </div>
            <div class="text-[#D7F9FF] flex flex-col mx-auto mt-5">
                <h1 class="font-bold 2xl:text-2xl xl:text-lg sm:text-3xl text-2xl border-b-2 w-40">Empresa</h1>
                <span class="2xl:text-2xl xl:text-lg sm:text-3xl text-xl sm:mt-5 mt-3">Ubicacion:</span>
                <span class="2xl:text-2xl xl:text-lg sm:text-3xl text-xl sm:w-[33.8rem]">Av. General Ramon Corona 2514
                    Col. Nuevo
                    Mexico,
                    Zapopan,
                    Mexico</span>
                <span class="2xl:text-2xl xl:text-lg sm:text-3xl text-xl mt-5 sm:w-[34.5rem]">Hábitat de Negocios
                    Tecnológico de
                    Monterrey
                    Campus
                    Guadalajara
                    Piso
                    4.</span>
            </div>
            <div class="text-[#D7F9FF] flex flex-col sm:mx-auto mt-5">
                <h1 class="font-bold 2xl:text-2xl xl:text-lg sm:text-3xl text-2xl border-b-2 w-40">Contacto</h1>
                <span class="2xl:text-2xl xl:text-lg sm:text-3xl text-xl mt-5">hola@widolearn.com</span>
                <span class="2xl:text-2xl xl:text-lg sm:text-3xl text-xl mt-3">22 28 27 90 92</span>
                <div class="sm:my-auto my-5 sm:ml-auto sm:mx-0 mx-auto">
                    <a href="https://www.facebook.com/people/Wido/100068506694813/"
                        class="xl:text-2xl sm:text-4xl text-2xl mx-3" target="_blank">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                    <a href="https://www.instagram.com/wido_oficial?igsh=MTY0M2dyMHNja3pxdA"
                        class="xl:text-2xl sm:text-4xl text-2xl mx-3" target="_blank">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="#" class="xl:text-2xl sm:text-4xl text-2xl mx-3" target="_blank">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="bg-[#4F7CAC]">
            <div class="sm:p-10 text-center  2xl:text-3xl lg:text-xl p-5 text-xl font-semibold">
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