<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carousel con Bootstrap</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
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
            background-image: url(../../images/header-docentes.png);
            background-position: center top;
            background-repeat: no-repeat;
            background-size: 100%, cover;
            /* Ajusta el tamaño de las imágenes de fondo */
            min-height: 73vh;
            display: flex;
            align-items: center;
            position: relative;
        }

        .menu.container img {
            width: 350px;
            /* Establece el ancho deseado para la imagen */
            height: auto;
            /* Hace que la altura se ajuste automáticamente para mantener la proporción original */
            position: absolute;
            /* Establece el posicionamiento absoluto para la imagen dentro del contenedor */
            top: 10%;
            /* Posiciona la parte superior de la imagen en el 50% del contenedor */
            left: 2%;
            /* Posiciona la parte izquierda de la imagen en el 50% del contenedor */
        }

        .custom-text {
            font-family: 'Arial', sans-serif;
            font-size: 24px;
            font-weight: bold;
            text-transform: uppercase;
            color: black;
            padding: 5px;
            margin-top: 0px;
        }

        #section1 {
            display: flex;
            height: 2px;
            color: black;
            border: 1px solid orange;
            box-sizing: border-box;
            margin-right: 65%;
            margin-top: 0px;
            box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.5);
        }

        /* Estilos del contenedor */
        .image-container {
            width: 700px;
            /* Ancho del contenedor */
            height: 400px;
            /* Altura del contenedor */
            border-radius: 20px;
            /* Bordes redondeados */
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.8);
            /* Sombra */
            overflow: hidden;
            /* Oculta el contenido que se desborda */
            margin: 3% auto;
            /* Centra enmedio de la pagina */
        }

        /* Estilos de la imagen */
        .image-container img {
            width: 100%;
            /* La imagen ocupa todo el ancho del contenedor */
            height: 100%;
            /* La imagen ocupa todo el alto del contenedor */
            object-fit: cover;
            /* La imagen se ajusta para cubrir el contenedor */
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
            margin: 3% auto;
            /* Centra en medio de la página */
            background-image: linear-gradient(to top, orange 100%, transparent 100%),
                linear-gradient(to left, orange 100%, transparent 100%),
                linear-gradient(to top, orange 50%, transparent 50%);
            /* Combina tres gradientes lineales para pintar las partes superior, izquierda e inferior */
            background-size: 100% 2px, 2px 100%, 100% 2px;
            /* Tamaño de cada gradiente (ancho x alto) */
            background-repeat: no-repeat;
            /* Evita que los gradientes se repitan */
            padding: 30px;
        }

        .saludo {
            font-family: 'Arial', sans-serif;
            font-size: 20px;
            font-weight: bold;
            color: black;
            padding: 5px;
            margin-top: 0px;
        }

        .cursos-p {
            font-family: 'Arial', sans-serif;
            font-size: 19px;
            font-weight: bold;
            color: #50D2FF;
            padding: 5px;
            margin-top: 0px;
            margin-left: 5%;
            /* Centra en medio de la página */
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
            background-color: #50B2FF;
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
            background-color: #FF8000;
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
        .clase-muestra:hover {
            background-color: #FFC500;
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
            background-image: url(../../images/home-opaco.png);
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
    </style>
</head>

<body>

    <header class="header">
        <div class="menu container">
            <img src="../../images/logo-aerobotlearning.png" alt="Descripción de la imagen" />
        </div>
    </header>
    <p class="custom-text">Portal de leana</p>
    <div id="section1"></div>
    <div class="prices-1">
        <div class="image-container">
            <img src="../../images/imagen-prueba2.jpg" alt="Descripción de la imagen">
        </div>
        <div class="contenedor-1">
            <p class="saludo">¡Hola, soy Leana!</p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi quasi officiis praesentium quo
                accusamus inventore tempora aperiam labore ex. Id commodi numquam quis corporis ab? Sint numquam veniam
                amet unde.</p>
        </div>
        <p class="cursos-p">¿Qué otros cursos imparte Leana?</p>
        <div class="container mt-4 bg-primary">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="d-flex flex-wrap justify-content-around">
                            <div class="cardCarrusel">
                                <div class="card-body">
                                    <div class="prices-1">
                                        <!-- Cuadrado con sombra -->
                                        <div id="image-box">
                                            <!-- Mitad superior para la imagen -->
                                            <img src="../../images/11.png" alt="Descripción de la imagen">
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
                            <div class="cardCarrusel">
                                <div class="card-body">
                                    <div class="prices-1">
                                        <!-- Cuadrado con sombra -->
                                        <div id="image-box">
                                            <!-- Mitad superior para la imagen -->
                                            <img src="../../images/11.png" alt="Descripción de la imagen">
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
                            <div class="cardCarrusel">
                                <div class="card-body">
                                    <div class="prices-1">
                                        <!-- Cuadrado con sombra -->
                                        <div id="image-box">
                                            <!-- Mitad superior para la imagen -->
                                            <img src="../../images/11.png" alt="Descripción de la imagen">
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
                            <div class="cardCarrusel">
                                <div class="card-body">
                                    <div class="prices-1">
                                        <!-- Cuadrado con sombra -->
                                        <div id="image-box">
                                            <!-- Mitad superior para la imagen -->
                                            <img src="../../images/11.png" alt="Descripción de la imagen">
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
                            <div class="cardCarrusel">
                                <div class="card-body">
                                    <div class="prices-1">
                                        <!-- Cuadrado con sombra -->
                                        <div id="image-box">
                                            <!-- Mitad superior para la imagen -->
                                            <img src="../../images/11.png" alt="Descripción de la imagen">
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
                    </div>
                    <!-- dxsadas -->
                    <div class="carousel-item">
                        <div class="d-flex flex-wrap justify-content-around">
                            <div class="cardCarrusel">
                                <div class="card-body">
                                    <div class="prices-1">
                                        <!-- Cuadrado con sombra -->
                                        <div id="image-box">
                                            <!-- Mitad superior para la imagen -->
                                            <img src="../../images/11.png" alt="Descripción de la imagen">
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
                            <div class="cardCarrusel">
                                <div class="card-body">
                                    <div class="prices-1">
                                        <!-- Cuadrado con sombra -->
                                        <div id="image-box">
                                            <!-- Mitad superior para la imagen -->
                                            <img src="../../images/11.png" alt="Descripción de la imagen">
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
                            <div class="cardCarrusel">
                                <div class="card-body">
                                    <div class="prices-1">
                                        <!-- Cuadrado con sombra -->
                                        <div id="image-box">
                                            <!-- Mitad superior para la imagen -->
                                            <img src="../../images/11.png" alt="Descripción de la imagen">
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
                            <div class="cardCarrusel">
                                <div class="card-body">
                                    <div class="prices-1">
                                        <!-- Cuadrado con sombra -->
                                        <div id="image-box">
                                            <!-- Mitad superior para la imagen -->
                                            <img src="../../images/11.png" alt="Descripción de la imagen">
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
                            <div class="cardCarrusel">
                                <div class="card-body">
                                    <div class="prices-1">
                                        <!-- Cuadrado con sombra -->
                                        <div id="image-box">
                                            <!-- Mitad superior para la imagen -->
                                            <img src="../../images/11.png" alt="Descripción de la imagen">
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
                    </div>

                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div>
        <div class="container col-md-10 mt-4 bg-primary">
            <div class="row">
                <div class="col-md-4 mt-4 mb-2">
                    <!-- Calendar -->
                    <div id="calendar" class="p-3">
                        <input type="date" name="" id="">
                    </div>
                </div>
                <div class="col-md-4 mt-4  mb-2">
                    <!-- Card: Horas disponibles -->
                    <div class="card text-center">
                        <div class="card-header">
                            Horas disponibles
                        </div>
                        <div class="card-body">
                            <p class="card-text">10:00 am</p>
                            <p class="card-text">12:00 pm</p>
                            <p class="card-text">12:00 pm</p>
                            <p class="card-text">12:00 pm</p>
                            <!-- Agrega más horas disponibles aquí -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4  mb-2">
                    <!-- Card: Resumen -->
                    <div class="card">
                        <div class="card-header">
                            Resumen
                        </div>
                        <div class="card-body">
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.</p>
                            <button class="btn btn-primary">registrarse</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>