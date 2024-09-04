<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendizaje</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <link rel="icon" type="image/png" sizes="32x32" href="public/images/home/iconWido.jpeg">
    <link rel="icon" type="image/png" sizes="16x16" href="public/images/home/iconWido.jpeg">

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

<style>

body {
        background-color: #4F7CAC;
        /* Fondo negro para toda la página */
    }
    

/* Contenedor padre del h1 */
.relative-container {
    position: relative;
    /* Establece el contexto de posicionamiento */
    width: 100%;
    /* Asegúrate de que el contenedor tenga el 100% del ancho disponible */
    padding: 0;
    /* Elimina cualquier padding */
    margin-bottom: 80px;
    /* Elimina cualquier margen */
}


/* Estilo para el contenedor de los h1 */
.header-titles {
    position: absolute;
    top: 50px;
    right: 160px;
    /* Ajusta el espacio desde el borde derecho */
    display: flex;
    flex-direction: column;
    z-index: 20; /* Asegura que esté por encima del contenedor de iconos */
}

.top-right-h1 {
    margin: 0;
    padding-bottom: 7px;
    /* Espacio entre el texto y el borde */
    border-bottom: 4px solid #D7F9FF;
    /* Borde inferior negro de 2px */
    color: white;
    font-size: 2.5rem;
    /* Tamaño del texto */
}

.bottom-h1 {
    background-color: #D7F9FF;
    /* Color azul de fondo */
    color: black;
    /* Color del texto blanco */
    border-bottom-left-radius: 40px;
    /* Bordes inferiores redondeados */
    border-bottom-right-radius: 40px;
    /* Bordes inferiores redondeados */
    padding: 10px;
    text-align: center;
    /* Centra el texto */
    font-size: 2rem;
    /* Tamaño del texto */
    margin-top: 0px;
}

.svg-top-right {
    position: absolute;
    top: 0;
    left: 0;
    width: 500px;
    height: auto;
    z-index: 10; /* Ajustar según sea necesario */
}
        
</style>

<body>
    
    <div class="relative-container flex flex-col h-full">
        <div class="sm:w-96 w-44 sm:h-1/3 sm:mx-16 logo-wido">
            <img src="public/images/home/logo.png" class="w-full h-full logo-wido-rutaAprendizaje" alt="">
        </div>
        <div class="sm:h-1/3 2xl:text-[2.5rem] xl:text-[2.6rem] text-2xl">
            <div class="sm:w-[29rem] sm:mx-36 xl:mx-28 2xl:mx-36 2xl:mt-0 xl:mt-10">
                <div class="header-titles">
                    <h1 class="top-right-h1 sm:font-bold">¡Mi ruta de aprendizaje!</h1>
                    <h1 class="bottom-h1 sm:mt-12 sm:font-medium font-bold">Cursos activos</h1>
                </div>
            </div>
        </div>
    </div>
    <div id="contenedor-iconos-cursos" class="contenedor-iconos-ruta flex flex-wrap sm:mx-36 xl:mx-28 2xl:mx-36"></div>
    
    <!-- SVG for the top right corner -->
    <svg class="svg-top-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="white" fill-opacity="1" d="M0,224L26.7,218.7C53.3,213,107,203,160,218.7C213.3,235,267,277,320,293.3C373.3,309,427,299,480,293.3C533.3,288,587,288,640,266.7C693.3,245,747,203,800,208C853.3,213,907,267,960,256C1013.3,245,1067,171,1120,138.7C1173.3,107,1227,117,1280,106.7C1333.3,96,1387,64,1413,48L1440,32L1440,0L1413.3,0C1386.7,0,1333,0,1280,0C1226.7,0,1173,0,1120,0C1066.7,0,1013,0,960,0C906.7,0,853,0,800,0C746.7,0,693,0,640,0C586.7,0,533,0,480,0C426.7,0,373,0,320,0C266.7,0,213,0,160,0C106.7,0,53,0,27,0L0,0Z"></path>
    </svg>




    <script src="public/JS/swiper-bundle.min.js"></script>
    <!--=============== MAIN JS ===============-->
    <script src="public/JS/script.js"></script>
    <script src="public/JS/API.js"></script>

</body>

</html>