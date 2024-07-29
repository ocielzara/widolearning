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
    background-color: #D7F9FF;
    border-radius: 50%;
    margin-right: 1rem;
    margin-bottom: 1rem;
}

.nav__iconSub {
    font-size: 1.9rem;
}

 .contenedor-iconos {
        margin-top: -10rem; /* Ajusta este valor para mover los íconos hacia arriba o hacia abajo */
        position: relative; /* Añadido */
        z-index: 10; /* Añadido */
    }
    
</style>

<body>
    <div class="2xl:p-16 w-full sm:h-screen">
        <div class="w-full sm:h-full h-48 sm:mb-0 mb-96">
            <div class="flex flex-col h-full relative sm:top-0 top-48">
                <div class="sm:w-96 w-44 sm:h-1/3 sm:mx-16 logo-wido">
                    <img src="public/images/home/logo.png" class="w-full h-full logo-wido" alt="">
                </div>
                <div class="sm:h-1/3 2xl:text-[2.5rem] xl:text-[2.6rem] text-2xl">
                    <div class="sm:w-[29rem] sm:mx-36 xl:mx-28 2xl:mx-36 2xl:mt-0 xl:mt-10">
                        <h1 class="sm:font-bold text-[#4F7CAC]">¡Mi ruta de aprendizaje!
                        </h1>
                        <h1 class="sm:mt-12 mt-3 sm:font-medium font-bold xl:text-4xl text-[#000000]">
                            Mis cursos inscritos
                        </h1>
                    </div>
                </div>
            </div>
            <div id="contenedor-iconos-cursos" class="contenedor-iconos flex flex-wrap sm:mx-36 xl:mx-28 2xl:mx-36"></div>
        </div>
    </div>
    
    
    <script src="public/JS/swiper-bundle.min.js"></script>
    <!--=============== MAIN JS ===============-->
    <script src="public/JS/script.js"></script>
    <script src="public/JS/API.js"></script>

</body>

</html>