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
        width: 150px;
        /* Establece el ancho deseado para la imagen */
        height: auto;
        /* Hace que la altura se ajuste automáticamente para mantener la proporción original */
        position: absolute;
        /* Establece el posicionamiento absoluto para la imagen dentro del contenedor */
        top: 10%;
        /* Posiciona la parte superior de la imagen en el 50% del contenedor */
        left: 5%;
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

    .prices-1 {
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

        .cardCarrusel {
            width: 15%;
            /* Ancho ajustable según preferencias */
            margin: 5px;
            /* Espacio entre las cards */
        }
    </style>
</head>

<body>

    <header class="header">
        <div class="menu container">
            <img src="../../images/logotio-azul.png" alt="Descripción de la imagen" />
        </div>
    </header>
    <p class="custom-text">Portal de jorge</p>
    <div id="section1"></div>
    <div class="prices-1">
                                    <!-- Cuadrado con sombra -->
                                    <div id="image-box">
                                        <!-- Mitad superior para la imagen -->
                                        <img src="../../images/imagen-prueba.png" alt="Descripción de la imagen">
                                </div>

    <div class="container mt-4">
        <div class="card">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="../../images/11.png" class="img-fluid rounded-start" alt="Imagen">
                </div>
                <div class="col-md-4">
                    <div class="card-body">
                        <h5 class="card-title">Título de la Tarjeta</h5>
                        <p class="card-text">Este es un ejemplo de texto pequeño que puede ir en la tarjeta.</p>
                        <p class="card-text"><small class="text-muted">Última actualización hace 3 minutos</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4 bg-primary">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="d-flex flex-wrap justify-content-around">
                        <div class="cardCarrusel ">
                            <img src="../../images/atardecer.jpg" height="110" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card 1</h5>
                                <p class="card-text">This is a sample card 1.</p>
                            </div>
                        </div>
                        <div class="cardCarrusel">
                            <img src="../../images/hippo.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card 2</h5>
                                <p class="card-text">This is a sample card 2.</p>
                            </div>
                        </div>
                        <div class="cardCarrusel">
                            <img src="https://via.placeholder.com/150" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card 3</h5>
                                <p class="card-text">This is a sample card 3.</p>
                            </div>
                        </div>
                        <div class="cardCarrusel">
                            <img src="https://via.placeholder.com/150" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card 4</h5>
                                <p class="card-text">This is a sample card 4.</p>
                            </div>
                        </div>
                        <div class="cardCarrusel">
                            <img src="https://via.placeholder.com/150" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card 4</h5>
                                <p class="card-text">This is a sample card 4.</p>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- dxsadas -->
                <div class="carousel-item">
                    <div class="d-flex flex-wrap justify-content-around">
                        <div class="cardCarrusel">
                            <img src="https://via.placeholder.com/150" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card 5</h5>
                                <p class="card-text">This is a sample card 1.</p>
                            </div>
                        </div>
                        <div class="cardCarrusel">
                            <img src="https://via.placeholder.com/150" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card 6</h5>
                                <p class="card-text">This is a sample card 2.</p>
                            </div>
                        </div>
                        <div class="cardCarrusel">
                            <img src="https://via.placeholder.com/150" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card 7</h5>
                                <p class="card-text">This is a sample card 3.</p>
                            </div>
                        </div>
                        <div class="cardCarrusel">
                            <img src="https://via.placeholder.com/150" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card 8</h5>
                                <p class="card-text">This is a sample card 4.</p>
                            </div>
                        </div>
                        <div class="cardCarrusel">
                            <img src="https://via.placeholder.com/150" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card 9</h5>
                                <p class="card-text">This is a sample card 4.</p>
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