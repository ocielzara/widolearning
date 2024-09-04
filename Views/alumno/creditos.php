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
    .icon-circle {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 80px;
    height: 80px;
    background-color: white;
    border-radius: 50%;
    margin-right: 3rem;
    margin-bottom: 3rem;
    position: relative; /* Añadido para que el pseudo-elemento se posicione relativamente a este contenedor */
}

.icon-circle::after {
        content: '';
        position: absolute;
        top: 50%;
        left: 86%;
        transform: translateY(-50%);
        width: 60px; /* Ajusta el ancho de la línea según tus necesidades */
        height: 6px;
        background-color: rgb(79 124 172);
        display: none; /* Inicialmente oculto */
        border-radius: 50px;
    }
    
    .icon-circle.show-line::after {
    display: block; /* Muestra la línea si la clase show-line está presente */
}

    .icon-circle:last-child::after {
        content: none; /* Quita la línea del último ícono */
    }

.nav__iconSub {
    font-size: 1.9rem;
}

 .contenedor-iconos {
        margin-top: -8rem; /* Ajusta este valor para mover los íconos hacia arriba o hacia abajo */
        position: relative; /* Añadido */
        z-index: 10; /* Añadido */
    }
    

.navbar-creditos .container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    /* padding: 1rem 2rem; Ajusta el relleno según tus necesidades */
}

.icon-wrapper {
  position: relative;
  display: inline-block;
  width: 80px; /* Ajusta el tamaño según tus necesidades */
  height: 80px; /* Ajusta el tamaño según tus necesidades */
}

.icon-background {
  width: 100%;
  height: 100%;
}

.icon {
  position: absolute;
  top: 40%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.icon-number-right {
  position: absolute;
  top: 5px;
  left: 2px;
  font-size: 0.75rem; /* Ajusta el tamaño del número según tus necesidades */
  color: #000; /* Color del número */
  padding: 2px 4px; /* Espaciado alrededor del número */
  border-radius: 4px; /* Bordes redondeados */
}

.icon-number-left {
  position: absolute;
  top: 4px;
  right: 5px;
  font-size: 0.75rem; /* Ajusta el tamaño del número según tus necesidades */
  color: #000; /* Color del número */
  padding: 2px 4px; /* Espaciado alrededor del número */
  border-radius: 4px; /* Bordes redondeados */
}

    
</style>

<body>
    <header class="navbar-creditos">
    <div class="container">
        <img src="public/images/home/logo.png" class="w-full h-full logo-wido-rutaAprendizaje" alt="">
    </div>
    </header>

    <div class="2xl:p-16 w-full sm:h-screen">
        <div class="w-full sm:h-full h-48 sm:mb-0 mb-96">
            <div class="flex flex-col h-full relative sm:top-0 top-48">
                <div class="sm:w-96 w-44 sm:h-1/3 sm:mx-16 logo-wido">
                    <!----->
                </div>
                <div class="sm:h-1/3 2xl:text-[2.5rem] xl:text-[2.6rem] text-2xl">
                    <div class="sm:w-[29rem] sm:mx-36 xl:mx-28 2xl:mx-36 2xl:mt-0 xl:mt-10">
                        <h1 id="curso-nombre" class="highlighted-bottom-border-creditos sm:font-bold text-[black]"></h1>
                        <h1 id="total-creditos" class="sm:mt-12 mt-3 sm:font-medium font-bold text-small-creditos  text-[#000000]">Total créditos:</h1>
                        <h1 id="cursados" class="sm:mt-12 mt-3 sm:font-medium font-bold text-small-creditos text-[#000000]">Cursados:</h1>
                        <h1 id="mentor-nombre" class="sm:mt-12 mt-3 sm:font-medium font-bold text-small-creditos text-[#4F7CAC]">Mentor:</h1>
                    </div>
                </div>
            </div>
            <div id="contenedor-creditos" class="contenedor-iconos flex flex-wrap sm:mx-36 xl:mx-28 2xl:mx-36"></div>
        </div>
    </div>
    
    
    <script src="public/JS/swiper-bundle.min.js"></script>
    <!--=============== MAIN JS ===============-->
    <script src="public/JS/script.js"></script>
    <script src="public/JS/API.js"></script>

</body>

</html>