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

        /* Estilos para el formulario de búsqueda */

        #search-form {
            margin: 10px;
        }

        #search-input {
            padding: 10px;
            width: 600px;
            border: 1px;
            border-radius: 25px;
            font-size: 16px;
            background-color: #D4EBFF;
        }

        button {
            padding: 10px 20px;
            background-color: #D4EBFF;
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




        .cursos-p {
            font-family: 'Arial', sans-serif;
            font-size: 19px;
            font-weight: bold;
            color: orange;
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
            <img src="images/logo-aerobotlearning.png" alt="Descripción de la imagen" />
        </div>
    </header>
    <div class="prices-1">
        <div class="contenedor-1">
<<<<<<< Updated upstream
           <!-- Formulario para buscar -->
           <form class="form">
=======
            <!-- Formulario para buscar -->
            <form  >
>>>>>>> Stashed changes
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

<<<<<<< Updated upstream
                               
=======

>>>>>>> Stashed changes

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
        <p class="cursos-p">CURSOS TOP (con mayor demanda)</p>
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
                                            <img src="images/11.png" alt="Descripción de la imagen">
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
                                            <img src="images/11.png" alt="Descripción de la imagen">
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
                                            <img src="images/11.png" alt="Descripción de la imagen">
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
        <br><br>
        <p class="cursos-p">ASESORÍAS</p>
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


        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>