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
    <!--<link rel="stylesheet" href="public/JS/splide-4.1.3/dist/css/splide.min.css">-->

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
    <!--========== HEADER ==========-->
    <?php include 'Views/contenido/Header-footer/header-new.php'; ?>
    <!--==========         ==========-->

    <!--========== SLIDER ==========-->
    <?php include 'Views/contenido/Inicio/slider-main.php'; ?>
    <!--==========         ==========-->

    <div style="width:100%; margin-top:-70px;">
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
    </div>

    <!--========== Categorias cursos ==========-->
    <?php include 'Views/contenido/Inicio/curso-category.php'; ?>
    <!--==========         ==========-->

    <section class="sectiona1 my-16 como-funciona sm:max-w-7xl 2xl:max-w-7xl xl:max-w-5xl mx-auto">
        <div class="p-4 bg-[#fff] flex sm:flex-row flex-col justify-around">
            <button id="btn-areas" class="btn bg-[#4F7CAC] sm:w-80 h-16 sm:mb-0 mb-3 font-bold rounded-full text-base text-[#FFFFFF]"
                type="button" onclick="mostrarContenidoAreas()">Áreas de aprendizaje</button>
            <button id="btn-master" class="btn bg-[#2E3532] sm:w-64 h-16 font-bold rounded-full text-base text-[#FFFFFF]"
                type="button" onclick="mostrarContenidoMasterTeach()">Profesores</button>
            <button id="btn-asesorias" class="btn bg-[#2E3532] sm:w-64 h-16 font-bold rounded-full text-base mb-10 text-[#FFFFFF]"
                type="button" onclick="mostrarContenidoAsesorias()">Asesorías</button>
        </div>

    </section>




    <!--========== Cursos ==========-->
    <?php include 'Views/contenido/Inicio/cursos-section.php'; ?>
    <!--==========         ==========-->

    <!--========== Cursos ==========-->
    <?php include 'Views/contenido/Inicio/master-teach.php'; ?>
    <!--==========         ==========-->

    <!--========== Contenido ==========-->
    <?php include 'Views/contenido/Inicio/contenido.php'; ?>
    <!--==========         ==========-->


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
                        <stripe-buy-button
                            buy-button-id="buy_btn_1OurNQCiGkywhmkuimUxFNd8"
                            publishable-key="pk_live_51OuqPCCiGkywhmkuV2nok90bajPjNUHxaG9zVsaV9rxUW5DHk68o9X5bME8vma7Ks6x2ZAUDCSWbfHWnXGLR5KhZ00xrK59zi2">
                        </stripe-buy-button>
                        <stripe-buy-button
                            buy-button-id="buy_btn_1PnpRyCiGkywhmku2TZTVfd2"
                            publishable-key="pk_live_51OuqPCCiGkywhmkuV2nok90bajPjNUHxaG9zVsaV9rxUW5DHk68o9X5bME8vma7Ks6x2ZAUDCSWbfHWnXGLR5KhZ00xrK59zi2"
                            </stripe-buy-button>
                    </div>
                </div>
            </div>
        </div>





        <section class="section2 cursos-demanda 2xl:max-w-[90rem] 2xl:mx-auto">

            <div id="pdfModal">
                <div id="pdfContent">
                    <span class="close" style="color: black; cursor: pointer;" onclick="closePDF()">&times;</span>
                    <embed id="pdfEmbed" src="" type="application/pdf" width="100%" height="600px" />
                </div>
            </div>



            <!-- <div id="footer" class="flex justify-center my-10 w-full">
                <button class="text-[#FAC400] bg-[#4F7CAC] rounded-full font-bold w-96  text-xl" type="button"
                    id="toggleButton">Mostrar
                    más
                    categorías</button>
            </div> -->

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
                            <!--    <div class="swiper-button-next">
                                <i class="ri-arrow-right-s-line "></i>
                            </div>
                            <div class="swiper-button-prev">
                                <i class="ri-arrow-left-s-line"></i>
                             </div> --->
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
                                <!--    <div class="swiper-button-next">
                                    <i class="ri-arrow-right-s-line "></i>
                                </div>
                                <div class="swiper-button-prev">
                                    <i class="ri-arrow-left-s-line"></i>
                                 </div> --->
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
                                    <!--    <div class="swiper-button-next">
                                        <i class="ri-arrow-right-s-line "></i>
                                    </div>
                                    <div class="swiper-button-prev">
                                        <i class="ri-arrow-left-s-line"></i>
                                     </div> --->
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
                                        <!--    <div class="swiper-button-next">
                                            <i class="ri-arrow-right-s-line "></i>
                                        </div>
                                        <div class="swiper-button-prev">
                                            <i class="ri-arrow-left-s-line"></i>
                                         </div> --->
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
                                            <!--    <div class="swiper-button-next">
                                                <i class="ri-arrow-right-s-line "></i>
                                            </div>
                                            <div class="swiper-button-prev">
                                                <i class="ri-arrow-left-s-line"></i>
                                             </div> --->
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
                                                <!--    <div class="swiper-button-next">
                                                    <i class="ri-arrow-right-s-line "></i>
                                                </div>
                                                <div class="swiper-button-prev">
                                                    <i class="ri-arrow-left-s-line"></i>
                                                 </div> --->
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
                                                    <!--    <div class="swiper-button-next">
                                                        <i class="ri-arrow-right-s-line "></i>
                                                    </div>
                                                    <div class="swiper-button-prev">
                                                        <i class="ri-arrow-left-s-line"></i>
                                                     </div> --->
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
                                                        <div class="flex overflow-x-auto space-x-4 p-4" id="dibujo-ilustracion">
                                                        </div>
                                                        <!--    <div class="swiper-button-next">
                                                            <i class="ri-arrow-right-s-line "></i>
                                                        </div>
                                                        <div class="swiper-button-prev">
                                                            <i class="ri-arrow-left-s-line"></i>
                                                         </div> --->
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
                                                            <div class="flex overflow-x-auto space-x-4 p-4" id="data-mining">
                                                            </div>
                                                            <!--    <div class="swiper-button-next">
                                                                <i class="ri-arrow-right-s-line "></i>
                                                            </div>
                                                            <div class="swiper-button-prev">
                                                                <i class="ri-arrow-left-s-line"></i>
                                                             </div> --->
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
                                                                <div class="flex overflow-x-auto space-x-4 p-4" id="CAD">
                                                                </div>
                                                                <!--    <div class="swiper-button-next">
                                                                    <i class="ri-arrow-right-s-line "></i>
                                                                </div>
                                                                <div class="swiper-button-prev">
                                                                    <i class="ri-arrow-left-s-line"></i>
                                                                 </div> --->
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
                                                                    <div class="flex overflow-x-auto space-x-4 p-4" id="arte">
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
        </section>

    </main>

    <!--========== Cursos ==========-->
    <?php include 'Views/contenido/Header-footer/footer.php'; ?>
    <!--==========         ==========-->



    <script src="public/JS/swiper-bundle.min.js"></script>
    <!--=============== MAIN JS ===============-->
    <script src="public/JS/script.js"></script>
    <script src="public/JS/API.js"></script>
    <!--
    <script src="public/JS/splide-4.1.3/dist/js/splide.min.js"></script>
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        var splide = new Splide(".splide", {
            perPage: 4,
            rewind: true,
            rewindSpeed: 1000,
            breakpoints: {
                640: {
                    perPage: 1,
                },
            }
        });
        splide.mount();
    });
    </script>
    -->

</body>

</html>