<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="public/styles/main/cursos.css">

    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <link rel="icon" type="image/png" sizes="32x32" href="public/images/home/iconWido.png">
    <link rel="icon" type="image/png" sizes="16x16" href="public/images/home/iconWido.png">

   
  
    <!--------------------------------STRIPE----------------------------------->
    <script async src="https://js.stripe.com/v3/buy-button.js"></script>

    <style>
        h2{
            font-size: 28px;
        }
    </style>
</head>

<body>

    <!--========== HEADER ==========-->
    <?php include 'Views/contenido/Header-footer/header-new.php'; ?>
    <!--==========         ==========-->


    <section class="corse-container" id="contenido-master-teach" style="margin-top: 155px;">

        <div style="display:flex; justify-content:right;">
            <input type="text" id="searchInput" placeholder="Buscar mentor..." oninput="buscarMentores()">
        </div>


        <div class="subheading">
            <h2>TODOS LOS MENTORES</h2>
            <div class="line-container">
                <span class="line"></span>
                <span class="circle"></span>
            </div>

        </div>

        <div id="carousel-container">
            <button class="boton-atras" id="prevBtnn"><i class="ri-arrow-drop-left-line"></i></button> <!-- Botón para ir a la izquierda -->

            <div id="content-mentores" class="contenedor-tarjetas"></div> <!-- Contenedor de tarjetas -->

            <button class="boton-adelante" id="nextBtnn"><i class="ri-arrow-drop-right-line"></i></button> <!-- Botón para ir a la derecha -->
        </div>


        <div class="subheading">
            <h2>ADMINISTRACIÓN</h2>
            <div class="line-container">
                <span class="line"></span>
                <span class="circle"></span>
            </div>
        </div>

        <div id="carousel-container">
            <button class="boton-atras" id="prevBtnn"><i class="ri-arrow-drop-left-line"></i></button> <!-- Botón para ir a la izquierda -->

            <div id="administracion-mentores" class="contenedor-tarjetas"></div> <!-- Contenedor de tarjetas -->

            <button class="boton-adelante" id="nextBtnn"><i class="ri-arrow-drop-right-line"></i></button> <!-- Botón para ir a la derecha -->
        </div>

        <div class="subheading">
            <h2>PROGRAMACIÓN</h2>
            <div class="line-container">
                <span class="line"></span>
                <span class="circle"></span>
            </div>
        </div>
        <div id="carousel-container">
            <button class="boton-atras" id="prevBtnn"><i class="ri-arrow-drop-left-line"></i></button> <!-- Botón para ir a la izquierda -->

            <div id="programacion-mentores" class="contenedor-tarjetas"></div> <!-- Contenedor de tarjetas -->

            <button class="boton-adelante" id="nextBtnn"><i class="ri-arrow-drop-right-line"></i></button> <!-- Botón para ir a la derecha -->
        </div>

        <div class="subheading">
            <h2>CAD</h2>
            <div class="line-container">
                <span class="line"></span>
                <span class="circle"></span>
            </div>
        </div>
        <div id="carousel-container">
            <button class="boton-atras" id="prevBtnn"><i class="ri-arrow-drop-left-line"></i></button> <!-- Botón para ir a la izquierda -->

            <div id="CAD-mentores" class="contenedor-tarjetas"></div> <!-- Contenedor de tarjetas -->

            <button class="boton-adelante" id="nextBtnn"><i class="ri-arrow-drop-right-line"></i></button> <!-- Botón para ir a la derecha -->
        </div>

        <div class="subheading">
            <h2>EDICIÓN DIGITAL</h2>
            <div class="line-container">
                <span class="line"></span>
                <span class="circle"></span>
            </div>
        </div>
        <div id="carousel-container">
            <button class="boton-atras" id="prevBtnn"><i class="ri-arrow-drop-left-line"></i></button> <!-- Botón para ir a la izquierda -->

            <div id="CAD-mentores" class="contenedor-tarjetas"></div> <!-- Contenedor de tarjetas -->

            <button class="boton-adelante" id="nextBtnn"><i class="ri-arrow-drop-right-line"></i></button> <!-- Botón para ir a la derecha -->
        </div>

        <div class="subheading">
            <h2>DIBUJO ILUSTRACIÓN</h2>
            <div class="line-container">
                <span class="line"></span>
                <span class="circle"></span>
            </div>
        </div>
        <div id="carousel-container">
            <button class="boton-atras" id="prevBtnn"><i class="ri-arrow-drop-left-line"></i></button> <!-- Botón para ir a la izquierda -->

            <div id="dibujo-ilustracion-mentores" class="contenedor-tarjetas"></div> <!-- Contenedor de tarjetas -->

            <button class="boton-adelante" id="nextBtnn"><i class="ri-arrow-drop-right-line"></i></button> <!-- Botón para ir a la derecha -->
        </div>

        <div class="subheading">
            <h2>MODELADO Y ANIMACIÓN</h2>
            <div class="line-container">
                <span class="line"></span>
                <span class="circle"></span>
            </div>
        </div>
        <div id="carousel-container">
            <button class="boton-atras" id="prevBtnn"><i class="ri-arrow-drop-left-line"></i></button> <!-- Botón para ir a la izquierda -->

            <div id="modelado-animacion-mentores" class="contenedor-tarjetas"></div> <!-- Contenedor de tarjetas -->

            <button class="boton-adelante" id="nextBtnn"><i class="ri-arrow-drop-right-line"></i></button> <!-- Botón para ir a la derecha -->
        </div>

        <div class="subheading">
            <h2>ROBOTICA Y ELECTRONICA</h2>
            <div class="line-container">
                <span class="line"></span>
                <span class="circle"></span>
            </div>
        </div>
        <div id="carousel-container">
            <button class="boton-atras" id="prevBtnn"><i class="ri-arrow-drop-left-line"></i></button> <!-- Botón para ir a la izquierda -->

            <div id="robotica-electronica-mentores" class="contenedor-tarjetas"></div> <!-- Contenedor de tarjetas -->

            <button class="boton-adelante" id="nextBtnn"><i class="ri-arrow-drop-right-line"></i></button> <!-- Botón para ir a la derecha -->
        </div>

        <div class="subheading">
            <h2>VIDEOJUEGOS</h2>
            <div class="line-container">
                <span class="line"></span>
                <span class="circle"></span>
            </div>
        </div>
        <div id="carousel-container">
            <button class="boton-atras" id="prevBtnn"><i class="ri-arrow-drop-left-line"></i></button> <!-- Botón para ir a la izquierda -->

            <div id="videojuegos-mentores" class="contenedor-tarjetas"></div> <!-- Contenedor de tarjetas -->

            <button class="boton-adelante" id="nextBtnn"><i class="ri-arrow-drop-right-line"></i></button> <!-- Botón para ir a la derecha -->
        </div>

        <div class="subheading">
            <h2>MKT</h2>
            <div class="line-container">
                <span class="line"></span>
                <span class="circle"></span>
            </div>
        </div>
        <div id="carousel-container">
            <button class="boton-atras" id="prevBtnn"><i class="ri-arrow-drop-left-line"></i></button> <!-- Botón para ir a la izquierda -->

            <div id="mkt-mentores" class="contenedor-tarjetas"></div> <!-- Contenedor de tarjetas -->

            <button class="boton-adelante" id="nextBtnn"><i class="ri-arrow-drop-right-line"></i></button> <!-- Botón para ir a la derecha -->
        </div>

        <div class="subheading">
            <h2>DATA MINING</h2>
            <div class="line-container">
                <span class="line"></span>
                <span class="circle"></span>
            </div>
        </div>
        <div id="carousel-container">
            <button class="boton-atras" id="prevBtnn"><i class="ri-arrow-drop-left-line"></i></button> <!-- Botón para ir a la izquierda -->

            <div id="data-mining-mentores" class="contenedor-tarjetas"></div> <!-- Contenedor de tarjetas -->

            <button class="boton-adelante" id="nextBtnn"><i class="ri-arrow-drop-right-line"></i></button> <!-- Botón para ir a la derecha -->
        </div>
        <!--
            <div class="border-b-2 my-10 inline-block border-[#4F7CAC]">
                <h1 class="sm:text-5xl text-3xl sm:text-left text-center font-bold py-3 text-[#4F7CAC]">
                    ARTE
                </h1>
            </div>
            <div class="flex my-10">
                <div class="py-10 sm:px-5 px-0 xl:mx-32 md:mx-16 swiper">
                    <div class="card__content overflow-hidden">
                        <div class="swiper-wrapper" id="arte-mentores">
                        </div>
                    </div>
                    
                </div>
            </div>
            -->

        <div class="subheading">
            <h2>IDIOMAS</h2>
            <div class="line-container">
                <span class="line"></span>
                <span class="circle"></span>
            </div>
        </div>
        <div id="carousel-container">
            <button class="boton-atras" id="prevBtnn"><i class="ri-arrow-drop-left-line"></i></button> <!-- Botón para ir a la izquierda -->

            <div id="idiomas-mentores" class="contenedor-tarjetas"></div> <!-- Contenedor de tarjetas -->

            <button class="boton-adelante" id="nextBtnn"><i class="ri-arrow-drop-right-line"></i></button> <!-- Botón para ir a la derecha -->
        </div>

        <div class="subheading">
            <h2>MUSICA</h2>
            <div class="line-container">
                <span class="line"></span>
                <span class="circle"></span>
            </div>
        </div>
        <div id="carousel-container">
            <button class="boton-atras" id="prevBtnn"><i class="ri-arrow-drop-left-line"></i></button> <!-- Botón para ir a la izquierda -->

            <div id="musica-mentores" class="contenedor-tarjetas"></div> <!-- Contenedor de tarjetas -->

            <button class="boton-adelante" id="nextBtnn"><i class="ri-arrow-drop-right-line"></i></button> <!-- Botón para ir a la derecha -->
        </div>

        <div class="subheading">
            <h2>SALUD</h2>
            <div class="line-container">
                <span class="line"></span>
                <span class="circle"></span>
            </div>
        </div>
        <div id="carousel-container">
            <button class="boton-atras" id="prevBtnn"><i class="ri-arrow-drop-left-line"></i></button> <!-- Botón para ir a la izquierda -->

            <div id="salud-mentores" class="contenedor-tarjetas"></div> <!-- Contenedor de tarjetas -->

            <button class="boton-adelante" id="nextBtnn"><i class="ri-arrow-drop-right-line"></i></button> <!-- Botón para ir a la derecha -->
        </div>

        <div class="subheading">
            <h2>OTROS</h2>
            <div class="line-container">
                <span class="line"></span>
                <span class="circle"></span>
            </div>
        </div>
        <div id="carousel-container">
            <button class="boton-atras" id="prevBtnn"><i class="ri-arrow-drop-left-line"></i></button> <!-- Botón para ir a la izquierda -->

            <div id="otros-mentores" class="contenedor-tarjetas"></div> <!-- Contenedor de tarjetas -->

            <button class="boton-adelante" id="nextBtnn"><i class="ri-arrow-drop-right-line"></i></button> <!-- Botón para ir a la derecha -->
        </div>
    </section>
</body>

<script src="public/JS/swiper-bundle.min.js"></script>
<!--=============== MAIN JS ===============-->
<script src="public/JS/script.js"></script>
<script src="public/JS/API.js"></script>

</html>