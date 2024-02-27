<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet" />
    <title>Alumno-sesion</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</head>

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
        background-image: url(images/header-alumnos.png), url(images/image.png);
        background-position: center top;
        background-repeat: no-repeat;
        background-size: 100%, cover;
        /* Ajusta el tamaño de las imágenes de fondo */
        min-height: 37vh;
        display: flex;
        align-items: center;
        position: relative;
    }

    .menu.container img {
        width: 150px;
        /* Establece el ancho deseado para la imagen */
        height: auto;
        /* Hace que la altura se ajuste automáticamente para mantener la proporción original */
        position: absolute;
        /* Establece el posicionamiento absoluto para la imagen dentro del contenedor */
        top: 20%;
        /* Posiciona la parte superior de la imagen en el 50% del contenedor */
        left: 85%;
        /* Posiciona la parte izquierda de la imagen en el 50% del contenedor */
    }

    .custom-text {
        font-family: 'Arial', sans-serif;
        font-size: 24px;
        font-weight: bold;
        text-transform: uppercase;
        color: #FFCA33;
        padding: 5px;
        margin-top: 0px;
    }

    .custom-text-nombre {
        font-family: 'Arial', sans-serif;
        font-size: 28px;
        font-weight: bold;
        text-transform: uppercase;
        color: black;
        padding: 5px;
        margin-left: 50px;
    }

    #container {
        display: flex;
        height: 50vh;
        /* Establece la altura de la página completa */
    }

    #section2 {
        flex: 1.5;
        /* Divide las secciones de forma igualitaria */
        /* border: 1px solid #ccc;*/
        box-sizing: border-box;
        display: block;
        margin-right: 25px;
        height: 50px;
    }

    #section3 {
        background-position: center top;
        background-repeat: no-repeat;
        background-size: 50%, cover;
        /* Ajusta el tamaño de las imágenes de fondo */

        display: block;
        align-items: center;


        flex: 1;
        /* Cambia el tamaño de la sección 1 */
        /*border: 1px solid #ccc;*/
        height: 700px;
        margin-top: -100px;

    }

    #info-container {
    display: none;
    position: fixed;
    top: 50%;
    right: 20px;
    transform: translateY(-50%);
    width: 300px;
    background-color: #A7A7A7;
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    z-index: 9999; /* Asegura que esté por encima de otros elementos */
}


    .boton-escuelas-azul {
        border-radius: 20px;
        /* Bordes redondeados */
        background-color: #8BB0FF;
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
        width: 100%;
        margin-bottom: 0px;
        box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.5);
    }

    /* Cambiar el color de fondo cuando el cursor pasa sobre el botón */
    .boton-escuelas-azul:hover {
        background-color: #DEDEDE;
        /* Color de fondo azul más oscuro */
    }

    .boton-escuelas-morado {
        border-radius: 20px;
        /* Bordes redondeados */
        background-color: #BA50FF;
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
        width: 100%;
        margin-bottom: 0px;
        box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.5);
    }

    /* Cambiar el color de fondo cuando el cursor pasa sobre el botón */
    .boton-escuelas-morado:hover {
        background-color: #DEDEDE;
        /* Color de fondo azul más oscuro */
    }

    #section4 {
        display: block;
        height: 700px;
        color: black;

        box-sizing: border-box;
        margin-right: 41%;
        margin-top: -150px;
    }

    #section5 {
        display: flex;
        height: 2px;
        color: black;
        border: 1px solid #33FFE6;
        box-sizing: border-box;
        margin-right: 65%;
        margin-top: 0px;
        box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.5);
    }

    .custom-text-interesarte {
        font-family: 'Arial', sans-serif;
        font-size: 19px;
        font-weight: bold;

        color: black;
        padding: 5px;
        margin-left: 50px;
    }

    .cursos {
        border-radius: 20px;
        /* Bordes redondeados */
        background-color: #33FFE6;
        /* Color de fondo azul */
        color: black;
        /* Color del texto blanco */
        padding: 15px 25px;
        /* Espacio interno */
        border: none;
        /* Sin borde */
        cursor: pointer;
        /* Transición suave del color de fondo */
        width: 5%;
        height: 25%;
        margin-bottom: 20%;
        margin-left: 5%;
    }

    .custom-text-cursos {
        font-family: 'Arial', sans-serif;
        font-size: 20px;
        font-weight: bold;
        text-transform: uppercase;
        color: black;
        padding: 1px;
        margin-left: -15px;
        transform: rotate(270deg);
        margin-top: 120px;
    }

    #cursos-slider {
        border-radius: 20px;
        /* Bordes redondeados */
        background-color: #C2FFFB;
        /* Color de fondo azul */
        color: black;
        /* Color del texto blanco */
        padding: 15px 25px;
        /* Espacio interno */
        border: none;
        /* Sin borde */
        cursor: pointer;
        /* Transición suave del color de fondo */
        width: 95%;
        height: 20%;
        margin-top: -320px;
        margin-left: 10%;
        /* Aplicando un degradado de color */
        background-image: linear-gradient(to right, #C2FFFB, white);
    }

    .asesorias {
        border-radius: 20px;
        /* Bordes redondeados */
        background-color: #33FFE6;
        /* Color de fondo azul */
        color: black;
        /* Color del texto blanco */
        padding: 15px 25px;
        /* Espacio interno */
        border: none;
        /* Sin borde */
        cursor: pointer;
        /* Transición suave del color de fondo */
        width: 5%;
        height: 25%;
        margin-bottom: 20%;
        margin-left: 5%;
        margin-top: 10%;
    }

    .escuelas {
        border-radius: 20px;
        /* Bordes redondeados */
        background-color: #33FFE6;
        /* Color de fondo azul */
        color: black;
        /* Color del texto blanco */
        padding: 15px 25px;
        /* Espacio interno */
        border: none;
        /* Sin borde */
        cursor: pointer;
        /* Transición suave del color de fondo */
        width: 5%;
        height: 25%;
        margin-bottom: 20%;
        margin-left: 5%;
        margin-top: 10%;
    }

    #cursos-slider-asesorias {
        display: flex;
        border-radius: 20px;
        /* Bordes redondeados */
        background-color: #C2FFFB;
        /* Color de fondo azul */
        color: black;
        /* Color del texto blanco */
        padding: 15px 25px;
        /* Espacio interno */
        border: none;
        /* Sin borde */
        cursor: pointer;
        /* Transición suave del color de fondo */
        width: 95%;
        height: 20%;
        margin-top: -320px;
        margin-left: 10%;
        /* Aplicando un degradado de color */
        background-image: linear-gradient(to right, #C2FFFB, white);
    }

    #cursos-slider-escuelas {
        display: flex;
        border-radius: 20px;
        /* Bordes redondeados */
        background-color: #C2FFFB;
        /* Color de fondo azul */
        color: black;
        /* Color del texto blanco */
        padding: 15px 25px;
        /* Espacio interno */
        border: none;
        /* Sin borde */
        cursor: pointer;
        /* Transición suave del color de fondo */
        width: 95%;
        height: 20%;
        margin-top: -320px;
        margin-left: 10%;
        /* Aplicando un degradado de color */
        background-image: linear-gradient(to right, #C2FFFB, white);
    }



    /* Estilos para el formulario de búsqueda */

    #search-form {
        margin: 10px;
    }

    #search-input {
        padding: 10px;
        width: 600px;
        border: 1px solid #33FFE6;
        border-radius: 25px;
        font-size: 16px;
    }

    button {
        padding: 10px 20px;
        background-color: #33FFE6;
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


    @media(max-width:991px) {
        .header {
            background-image: url(images/homeLiso.png);
            background-position: center top;
            background-repeat: no-repeat;
            background-size: cover;
            min-height: 120vh;
            display: flex;
            align-items: center;
            position: relative;
            /* Agrega posición relativa para .header */
        }

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

    .prices {
        display: flex;
    }

    .prices-1 {
        padding: 5px;
        /* Espacio interno */
    }

    .prices-3 {
        padding: 5px;
        /* Espacio interno */
    }

    /* Estilo del cuadrado con sombra */
    #image-box {
        width: 100px;
        /* Ajusta el ancho según tus necesidades */
        height: 110px;
        /* Ajusta la altura según tus necesidades */
        background-color: #fff;
        /* Color de fondo del cuadrado */
        border-radius: 20px;
        /* Redondea los bordes más */
        box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.5);
        /* Sombra */
        margin-left: 10px;
        /* */
        margin-top: 0px;
        /* */
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    #image-box-3 {
        width: 100px;
        /* Ajusta el ancho según tus necesidades */
        height: 110px;
        /* Ajusta la altura según tus necesidades */
        background-color: #fff;
        /* Color de fondo del cuadrado */
        border-radius: 20px;
        /* Redondea los bordes más */
        box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.5);
        /* Sombra */
        margin-left: 10px;
        /* */
        margin-top: 0px;
        /* */
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 6px;
    }

    #image-box img {
        width: 100%;
        /* La imagen ocupa el 100% del ancho del contenedor */
        height: 75%;
        flex: 1;
        /* La imagen ocupa la mitad superior */
        border-radius: 20px 20px 0 0;
        /* Bordes redondeados solo arriba */
    }

    #image-box p {
        flex: 1;
        /* El título ocupa la mitad inferior */
        margin: 0px 0;
        /*text-align: center;*/
        font-size: 11px;
    }

    #image-box-3 p {
        flex: 1;
        /* El título ocupa la mitad inferior */
        margin: 0px 0;
        /*text-align: center;*/
        font-size: 14px;
        align-items: center;
        justify-content: center;
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
</style>
<script>
    $('#carouselExample').on('slide.bs.carousel', function(e) {


        var $e = $(e.relatedTarget);
        var idx = $e.index();
        var itemsPerSlide = 4;
        var totalItems = $('.carousel-item').length;

        if (idx >= totalItems - (itemsPerSlide - 1)) {
            var it = itemsPerSlide - (totalItems - idx);
            for (var i = 0; i < it; i++) {
                // append slides to end
                if (e.direction == "left") {
                    $('.carousel-item').eq(i).appendTo('.carousel-inner');
                } else {
                    $('.carousel-item').eq(0).appendTo('.carousel-inner');
                }
            }
        }
    });


    $('#carouselExample').carousel({
        interval: 2000
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

<body>
    <header class="header">
        <div class="menu container">
            <img src="images/logotio-azul.png" alt="Descripción de la imagen" />
        </div>
    </header>

    <div id="container">
        <div id="section2">
          <!-- Formulario para buscar -->
          <form class="form">
                <input type="text" id="busqueda" class="form-control mr-sm-2" placeholder="Buscar cursos">
                <button type="button" id="buscar" class="btn btn-primary">Buscar</button>
            </form>
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
                                $('#resultados').empty(); // Limpiamos el contenedor de resultados antes de agregar nuevos resultados

                               

                                // Verificamos si se encontraron cursos
                                if (response.length > 0) {
                                    // Iteramos sobre cada curso y creamos un elemento h3 para mostrarlo
                                    response.forEach(function(curso) {
                                        //Aca modifica para que tenga link
                                        $('#resultados').append('<a href="www.google.com">' + curso.titulo + '</a><br>');
                                    });
                                } else {
                                    // Si no se encontraron cursos, mostramos un mensaje
                                    $('#resultados').append('<p>No se encontraron cursos.</p>');
                                }

                            },
                            error: function(xhr, status, error) {
                                console.error(xhr.responseText);
                            }
                        });
                    });
                });
            </script>

            <div id="resultados">

            </div>
        </div>
        <div id="section3">
            <div id="info-container" style="display: none;">
            <button id="close-btn" style="position: absolute; top: 10px; right: 10px; cursor: pointer; background-color:#676767; padding: 5px;">X</button>
                <!-- Aquí se mostrará la información -->
            </div>
        </div>
    </div>
    <div id="section4">
        <p class="custom-text-interesarte">Podría interesante...</p>
        <div id="section5"></div>
        <br>
        <div class="cursos">
            <p class="custom-text-cursos">CURSOS</p>
        </div>
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
                                        <img src="images/11.png" alt="Descripción de la imagen">
                                        <!-- Mitad inferior para el título de la imagen -->
                                        <p id="informacion">prueba</p>
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
                                        <p>titulo</p>
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
                                        <p>Título de la Imagen</p>
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
                                        <p>Título de la Imagen</p>
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
                                        <p>Título de la Imagen</p>
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
                                        <p>Título de la Imagen</p>
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
                                        <p>Título de la Imagen</p>
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
                                        <p>Título de la Imagen</p>
                                    </div>
                                </div>

                            </div>
                        </div>
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
        <br>
        <div class="asesorias">
            <p class="custom-text-cursos">ASESORIAS</p>
        </div>
        <div id="cursos-slider-asesorias">
            <div class="prices-1">
                <!-- Cuadrado con sombra -->
                <div id="image-box">
                    <!-- Mitad superior para la imagen -->
                    <img src="images/11.png" alt="Descripción de la imagen">
                    <!-- Mitad inferior para el título de la imagen -->
                    <p>Título de la Imagen</p>
                </div>
            </div>
            <div class="prices-1">
                <!-- Cuadrado con sombra -->
                <div id="image-box">
                    <!-- Mitad superior para la imagen -->
                    <img src="images/11.png" alt="Descripción de la imagen">
                    <!-- Mitad inferior para el título de la imagen -->
                    <p>Título de la Imagen</p>
                </div>
            </div>
            <div class="prices-3">
                <!-- Cuadrado con sombra -->
                <div id="image-box-3">
                    <p>Personaliza tu asesoria ELIGE OTRO TEMA</p>
                </div>
            </div>
        </div>
        <div class="escuelas">
            <p class="custom-text-cursos">ESCUELAS</p>
        </div>
        <div id="cursos-slider-escuelas">
            <div class="prices-1">
                <!-- Cuadrado con sombra -->
                <div id="image-box">
                    <!-- Mitad superior para la imagen -->
                    <img src="images/11.png" alt="Descripción de la imagen">
                    <!-- Mitad inferior para el título de la imagen -->
                    <button class="boton-escuelas-azul">
                        <span>AP-TEACH</span>
                    </button>
                </div>
            </div>
            <div class="prices-1">
                <!-- Cuadrado con sombra -->
                <div id="image-box">
                    <!-- Mitad superior para la imagen -->
                    <img src="images/11.png" alt="Descripción de la imagen">
                    <!-- Mitad inferior para el título de la imagen -->
                    <button class="boton-escuelas-morado">
                        <span>POP-UP</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const searchForm = document.getElementById("search-form");
        const searchInput = document.getElementById("search-input");
        const searchResults = document.getElementById("search-results");

        searchForm.addEventListener("submit", function(event) {
            event.preventDefault(); // Evita que se envíe el formulario

            const searchTerm = searchInput.value.trim().toLowerCase(); // Convertir a minúsculas

            if (searchTerm !== "") {
                // Realizar la solicitud AJAX al servidor
                const xhr = new XMLHttpRequest();
                xhr.open("POST", "index.php?c=usuarios&a=motorBusqueda", true);
                xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhr.onload = function() {
                    if (xhr.status === 200) {
                        // Parsear la respuesta JSON y mostrar los resultados
                        const resultados = JSON.parse(xhr.responseText);
                        if (resultados.length > 0) {
                            searchResults.innerHTML = "";
                            resultados.forEach(result => {
                                const resultItem = document.createElement("div");
                                resultItem.classList.add("result-item");
                                // Se envuelve el título en un enlace <a> con el atributo href que apunta a la URL correspondiente
                                resultItem.innerHTML = `<h3><a href="${result.contenido}">${result.titulo}</a></h3>`;
                                searchResults.appendChild(resultItem);
                            });
                        } else {
                            searchResults.innerHTML = "<p>No se encontraron resultados</p>";
                        }
                    } else {
                        searchResults.innerHTML = "<p>Error al obtener los datos del servidor</p>";
                    }
                };
                xhr.send("keyword=" + searchTerm);
            } else {
                searchResults.innerHTML = "<p>Por favor, ingresa una palabra clave</p>";
            }
        });
    });




    document.addEventListener("DOMContentLoaded", function () {
    // Obtener el elemento del título de la imagen
    const tituloImagen = document.querySelectorAll("#image-box p");
    // Obtener el contenedor de información
    const infoContainer = document.getElementById("info-container");

    // Agregar un evento de clic a cada título de imagen
    tituloImagen.forEach(function (titulo) {
        titulo.addEventListener("click", function () {
            // Obtener el texto del elemento <p>
            const tituloTexto = titulo.textContent.trim();

            // Realizar la solicitud AJAX al endpoint en tu aplicación
            const xhr = new XMLHttpRequest();
            xhr.open("POST", "index.php?c=usuarios&a=obtenerInformacionDesdeBD", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onload = function () {
                if (xhr.status === 200) {
                    // Obtener la información obtenida de la base de datos
                    const informacion = JSON.parse(xhr.responseText);
                    const descripcion = informacion.descripcion;
                    console.error("si ", descripcion);
                    // Mostrar la información en el contenedor
                    infoContainer.innerHTML = descripcion;
                    // Mostrar el contenedor de información
                    infoContainer.style.display = "block";
                } else {
                    // Manejar errores si es necesario
                    console.error("Error al obtener la información de la base de datos");
                }
            };
            // Enviar el texto del título como datos de la solicitud
            xhr.send("titulo=" + encodeURIComponent(tituloTexto));
        });
    });

    // Agregar un evento de clic al documento para cerrar el contenedor cuando se hace clic fuera de él
    document.addEventListener("click", function (event) {
        // Verificar si el clic ocurrió fuera del contenedor de información
        if (!infoContainer.contains(event.target)) {
            // Ocultar el contenedor de información
            infoContainer.style.display = "none";
        }
    });
});

    

</script>

</html>