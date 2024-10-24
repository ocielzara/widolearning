<?php
// session_start();
// Verificar si la variable de sesión existe antes de usarla para evitar errores
//if (isset ($_SESSION['idUsuario'])) {
//    $inicioUsuario = $_SESSION['idUsuario'];
//echo $inicioUsuario;
//} else {
//    echo "No se ha iniciado sesión"; // En caso de que la sesión no esté iniciada o la variable de sesión no esté definida
//}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--========== BOX ICONS ==========-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>

<style>
    /*========== GOOGLE FONTS ==========*/
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap");

    /*========== VARIABLES CSS ==========*/
    :root {
        /*--header-height: 3.5rem;*/
        --nav-width: 219px;

        /*========== Colors ==========*/
        --first-color: #6923D0;
        --first-color-light: #F4F0FA;
        --title-color: #19181B;
        --text-color: #58555E;
        --text-color-light: #A5A1AA;
        --body-color: #F9F6FD;
        --container-color: #FFFFFF;

        /*========== Font and typography ==========*/
        --body-font: 'Poppins', sans-serif;
        --normal-font-size: .938rem;
        --small-font-size: .75rem;
        --smaller-font-size: .75rem;

        /*========== Font weight ==========*/
        --font-medium: 500;
        --font-semi-bold: 600;

        /*========== z index ==========*/
        --z-fixed: 100;
    }

    @media screen and (min-width: 1024px) {
        :root {
            --normal-font-size: 1rem;
            --small-font-size: .875rem;
            --smaller-font-size: .813rem;
        }
    }

    /*========== BASE ==========*/
    *,
    ::before,
    ::after {
        box-sizing: border-box;
    }

    body {
        margin: var(--header-height) 0 0 0;
        padding: 0rem 0rem 0 0rem;
        font-family: var(--body-font);
        font-size: var(--normal-font-size);
        background-color: white;
        color: var(--text-color);
    }

    h3 {
        margin: 0;
    }

    a {
        text-decoration: none;
    }

    img {
        max-width: 100%;
        height: auto;
    }

    /*========== NAV ==========*/
    .nav {
        position: fixed;
        top: 0;
        left: -100%;
        height: 100vh;
        padding: 1rem 1rem 0;
        background-color: var(--container-color);
        box-shadow: 1px 0 0 rgba(22, 8, 43, 0.1);
        z-index: var(--z-fixed);
        transition: .4s;
    }

    .nav__container {
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        padding-bottom: 3rem;
        overflow: auto;
        scrollbar-width: none;
        /* For mozilla */
    }

    /* For Google Chrome and others */
    .nav__container::-webkit-scrollbar {
        display: none;
    }

    .nav__logo {
        font-weight: var(--font-semi-bold);
        margin-bottom: 2.5rem;
    }

    .nav__list,
    .nav__items {
        display: grid;
    }

    .nav__list {
        row-gap: 2.5rem;
    }

    .nav__items {
        row-gap: 1.5rem;
    }

    .nav__subtitle {
        font-size: var(--normal-font-size);
        text-transform: uppercase;
        letter-spacing: .1rem;
        color: var(--text-color-light);
    }

    .nav__link {
        display: flex;
        align-items: center;
        color: var(--text-color);
    }

    .nav__link:hover {
        color: var(--first-color);
    }

    .nav__linkSub {
        display: flex;
        align-items: center;
        color: #D7F9FF;
    }

    .nav__linkSub:hover {
        color: ;
    }


    .nav__icon {
        font-size: 1.2rem;
        margin-right: .5rem;
    }

    .nav__iconSub {
        font-size: 1.2rem;
    }

    .nav__name {
        font-size: var(--small-font-size);
        font-weight: var(--font-medium);
        white-space: nowrap;
    }

    .nav__logout {
        margin-top: 5rem;
    }

    /* Dropdown */
    .nav__dropdown {
        overflow: hidden;
    }

    .nav__dropdown-collapse {
        background-color: var(--first-color-light);
        border-radius: .25rem;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.4s ease-in-out;
    }

    .nav__dropdown:hover .nav__dropdown-collapse {
        max-height: 100rem;
        /* Ajusta este valor según la altura de tu submenú */
    }

    .nav__submenu {
        position: absolute;
        top: 0;
        left: 100%;
        margin-left: 0;
        padding-left: 1rem;
        box-shadow: 1px 0 0 rgba(22, 8, 43, 0.1);
        z-index: var(--z-fixed);
        background-color: #4F7CAC;
        width: 490px;
    }

    .nav__dropdown:hover .nav__submenu {
        max-height: 100rem;
        /* Ajusta este valor según la altura de tu submenú */
    }

    .nav__dropdown-content {
        display: grid;
        row-gap: .5rem;
        padding: .75rem 1rem;
        /* Ajusta el padding según tus necesidades */
    }

    .nav__dropdown-item {
        font-size: var(--smaller-font-size);
        font-weight: var(--font-medium);
        color: #D7F9FF;
    }

    /* Show dropdown collapse */
    .nav__dropdown:hover {
        max-height: 100rem;
    }

    /* Rotate icon arrow */
    .nav__dropdown:hover .nav__dropdown-icon {
        transform: rotate(180deg);
    }




    /*===== Show menu =====*/
    .show-menu {
        left: 0;
    }

    /*===== Active link =====*/
    .active {
        color: var(--first-color);
    }

    /* ========== MEDIA QUERIES ==========*/
    /* For small devices reduce search*/
    @media screen and (max-width: 320px) {
        .header__search {
            width: 70%;
        }
    }

    @media screen and (min-width: 768px) {
        body {
            padding: 0rem 0rem 0 4.4rem;
        }

        .header {
            padding: 0 3rem 0 6rem;
        }

        .header__container {
            height: calc(var(--header-height) + .5rem);
        }

        .header__search {
            padding: .55rem .75rem;
        }

        .header__toggle {
            display: none;
        }

        .header__logo {
            display: block;
        }

        .header__img {
            width: 40px;
            height: 40px;
            order: 1;
        }

        .nav {
            left: 0;
            padding: 1.2rem 1.5rem 0;
            width: 68px;
            /* Reduced navbar */
        }

        .nav__items {
            row-gap: 1.7rem;
        }

        .nav__icon {
            font-size: 1.3rem;
        }

        /* Element opacity */
        .nav__logo-name,
        .nav__name,
        .nav__subtitle,
        .nav__dropdown-icon {
            opacity: 0;
            transition: .3s;
        }


        /* Navbar expanded */
        .nav:hover {
            width: var(--nav-width);
        }

        /* Visible elements */
        .nav:hover .nav__logo-name {
            opacity: 1;
        }

        .nav:hover .nav__subtitle {
            opacity: 1;
        }

        .nav:hover .nav__name {
            opacity: 1;
        }

        .nav:hover .nav__dropdown-icon {
            opacity: 1;
        }
    }

    .cerrar {
        background-color: var(--first-color);
        /* Color de fondo del botón */
        color: white;
        /* Color del texto */
        padding: 0.5rem 1rem;
        /* Espaciado interno */
        border: none;
        /* Eliminar borde */
        border-radius: 5px;
        /* Borde redondeado */
        cursor: pointer;
        /* Cambiar el cursor al pasar por encima */
        transition: background-color 0.3s ease;
        /* Efecto de transición */
    }

    .cerrar:hover {
        background-color: #5318a8;
        /* Cambiar el color de fondo al pasar por encima */
    }

    /* Estilo para el contenedor del icono */
    .icon-circle {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 30px;
        /* Ajusta el tamaño según tus necesidades */
        height: 30px;
        /* Ajusta el tamaño según tus necesidades */
        background-color: #D7F9FF;
        /* Color de fondo del círculo */
        border-radius: 50%;
        /* Hace que el contenedor sea un círculo */
        margin-right: .5rem;
    }

    /* Opcional: Estilo adicional para el icono dentro del círculo */
    .icon-circle i {
        color: black;
        /* Cambia este valor según el color que prefieras para el icono */
    }

    .sidebar__programacion {
        border-radius: .25rem;
        display: none;
        position: absolute;
        top: 0;
        left: 60%;
        margin-left: 10px;
        padding-left: 1rem;
        box-shadow: 1px 0 0 rgba(22, 8, 43, 0.1);
        z-index: calc(var(--z-fixed) + 1);
        /* Asegurarse de que esté por encima */
        background-color: #D7F9FF;
        width: 200px;
        height: 30rem;
    }

    .nav__contenedorProgramacion:hover .sidebar__programacion {
        display: block;
    }
    
    .sidebar__juegos {
        border-radius: .25rem;
        display: none;
        position: absolute;
        top: 0;
        left: 60%;
        margin-left: 10px;
        padding-left: 1rem;
        box-shadow: 1px 0 0 rgba(22, 8, 43, 0.1);
        z-index: calc(var(--z-fixed) + 1);
        /* Asegurarse de que esté por encima */
        background-color: #D7F9FF;
        width: 200px;
        transition: max-height 0.4s ease-in-out;
        height: 30rem;
    }

    .nav__contenedorJuegos:hover .sidebar__juegos {
        display: block;
    }
    
    .sidebar__dibujo {
        border-radius: .25rem;
        display: none;
        position: absolute;
        top: 0;
        left: 60%;
        margin-left: 10px;
        padding-left: 1rem;
        box-shadow: 1px 0 0 rgba(22, 8, 43, 0.1);
        z-index: calc(var(--z-fixed) + 1);
        /* Asegurarse de que esté por encima */
        background-color: #D7F9FF;
        width: 200px;
        transition: max-height 0.4s ease-in-out;
        height: 30rem;
    }

    .nav__contenedorDibujo:hover .sidebar__dibujo {
        display: block;
    }
    
    .sidebar__ingenieria {
        border-radius: .25rem;
        display: none;
        position: absolute;
        top: 0;
        left: 60%;
        margin-left: 10px;
        padding-left: 1rem;
        box-shadow: 1px 0 0 rgba(22, 8, 43, 0.1);
        z-index: calc(var(--z-fixed) + 1);
        /* Asegurarse de que esté por encima */
        background-color: #D7F9FF;
        width: 200px;
        transition: max-height 0.4s ease-in-out;
        height: 30rem;
    }

    .nav__contenedorIngenieria:hover .sidebar__ingenieria {
        display: block;
    }
    
     .sidebar__administracion {
        border-radius: .25rem;
        display: none;
        position: absolute;
        top: 0;
        left: 60%;
        margin-left: 10px;
        padding-left: 1rem;
        box-shadow: 1px 0 0 rgba(22, 8, 43, 0.1);
        z-index: calc(var(--z-fixed) + 1);
        /* Asegurarse de que esté por encima */
        background-color: #D7F9FF;
        width: 200px;
        transition: max-height 0.4s ease-in-out;
        height: 30rem;
    }

    .nav__contenedorAdministracion:hover .sidebar__administracion {
        display: block;
    }
    
     .sidebar__otras {
        border-radius: .25rem;
        display: none;
        position: absolute;
        top: 0;
        left: 60%;
        margin-left: 10px;
        padding-left: 1rem;
        box-shadow: 1px 0 0 rgba(22, 8, 43, 0.1);
        z-index: calc(var(--z-fixed) + 1);
        /* Asegurarse de que esté por encima */
        background-color: #D7F9FF;
        width: 200px;
        transition: max-height 0.4s ease-in-out;
        height: 30rem;
    }

    .nav__contenedorOtras:hover .sidebar__otras {
        display: block;
    }

    .nav__dropdown-item2 {
        font-size: var(--smaller-font-size);
        font-weight: var(--font-medium);
        color: #4F7CAC;
        display: grid;
        row-gap: .5rem;
        padding: .20rem 1rem;
        /* Ajusta el padding según tus necesidades */
    }
</style>

<body>
    <!--========== NAV ==========-->
    <div class="nav" id="navbar">
        <nav class="nav__container">
            <div>
                <a href="#" class="nav__link nav__logo">
                    <span class="nav__logo-name">Wido</span>
                </a>

                <div class="nav__list">
                    <div class="nav__items">
                        <!--
                        <a href="#" class="nav__link">
                            <i class='bx bx-home nav__icon'></i>
                            <span class="nav__name">Home</span>
                        </a>
                        -->

                        <div class="nav__dropdown">
                            <a href="#" class="nav__link nav__toggle">
                                <i class='bx bx-chalkboard nav__icon'></i>
                                <span class="nav__name">Cursos</span>
                                <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                            </a>

                            <div class="nav__dropdown-collapse nav__submenu">
                                <div class="nav__dropdown-content">
                                    <div href="#" class="nav__contenedorProgramacion">
                                        <a href="#" class="nav__linkSub nav__toggle">
                                            <span class="icon-circle">
                                                <i class='bx bx-code nav__iconSub'></i>
                                            </span>
                                            <span class="nav__name">Área de programación</span>
                                        </a>
                                        <div class="sidebar__programacion">
                                            <a href="https://www.widolearn.com/index.php?c=Usuarios&a=claseMuestraNavegacion&idCurso=15&nombreCurso=Inteligencia%20artificial%20con%20Python"
                                                class="nav__dropdown-item2">Inteligencia artificial con Python</a>
                                            <a href="https://www.widolearn.com/index.php?c=Usuarios&a=claseMuestraNavegacion&idCurso=18&nombreCurso=Apps%20moviles%20con%20Thunkable"
                                                class="nav__dropdown-item2">Apps moviles con Thunkable</a>
                                            <a href="https://www.widolearn.com/index.php?c=Usuarios&a=claseMuestraNavegacion&idCurso=27&nombreCurso=chatgpt"
                                                class="nav__dropdown-item2">chatgpt</a>
                                            <a href="https://www.widolearn.com/index.php?c=Usuarios&a=claseMuestraNavegacion&idCurso=29&nombreCurso=ciberseguridad"
                                                class="nav__dropdown-item2">ciberseguridad</a>
                                            <a href="https://www.widolearn.com/index.php?c=Usuarios&a=claseMuestraNavegacion&idCurso=30&nombreCurso=Dise%C3%B1o%20p%C3%A1ginas%20Web"
                                                class="nav__dropdown-item2">Diseño páginas Web</a>
                                            <a href="https://www.widolearn.com/index.php?c=Usuarios&a=claseMuestraNavegacion&idCurso=32&nombreCurso=python"
                                                class="nav__dropdown-item2">python</a>
                                        </div>
                                    </div>

                                    <div href="#" class="nav__contenedorJuegos">
                                        <a href="#" class="nav__linkSub nav__toggle">
                                            <span class="icon-circle">
                                                <i class='bx bx-paper-plane nav__iconSub'></i>
                                            </span>
                                            <span class="nav__name">Área de videojuegos</span>
                                        </a>
                                        <div class="sidebar__juegos">
                                            <a href="https://www.widolearn.com/index.php?c=Usuarios&a=claseMuestraNavegacion&idCurso=8&nombreCurso=gdevelop"
                                                class="nav__dropdown-item2">Gdevelop</a>
                                            <a href="https://www.widolearn.com/index.php?c=Usuarios&a=claseMuestraNavegacion&idCurso=9&nombreCurso=unity%202d"
                                                class="nav__dropdown-item2">Unity 2d</a>
                                            <a href="https://www.widolearn.com/index.php?c=Usuarios&a=claseMuestraNavegacion&idCurso=10&nombreCurso=unity%203d"
                                                class="nav__dropdown-item2">Unity 3d</a>
                                            <a href="https://www.widolearn.com/index.php?c=Usuarios&a=claseMuestraNavegacion&idCurso=11&nombreCurso=minecraft"
                                                class="nav__dropdown-item2">Minecraft</a>
                                            <a href="https://www.widolearn.com/index.php?c=Usuarios&a=claseMuestraNavegacion&idCurso=23&nombreCurso=roblox%20studio"
                                                class="nav__dropdown-item2">Roblox studio</a>
                                            <a href="https://www.widolearn.com/index.php?c=Usuarios&a=claseMuestraNavegacion&idCurso=24&nombreCurso=lego%20fornite"
                                                class="nav__dropdown-item2">Lego fornite</a>
                                            <a href="https://www.widolearn.com/index.php?c=Usuarios&a=claseMuestraNavegacion&idCurso=7&nombreCurso=Blender%202D%20y%203D"
                                                class="nav__dropdown-item2">Blender 2D y 3D</a>
                                        </div>
                                    </div>
                                    <div href="#" class="nav__contenedorDibujo">
                                        <a href="#" class="nav__linkSub nav__toggle">
                                            <span class="icon-circle">
                                                <i class='bx bx-edit nav__iconSub'></i>
                                            </span>
                                            <span class="nav__name">Área de Diseño y Dibujo</span>
                                        </a>
                                        <div class="sidebar__dibujo">
                                            <a href="https://www.widolearn.com/index.php?c=Usuarios&a=claseMuestraNavegacion&idCurso=4&nombreCurso=dibujo%20tradicional"
                                                class="nav__dropdown-item2">Dibujo tradicional</a>
                                            <a href="https://www.widolearn.com/index.php?c=Usuarios&a=claseMuestraNavegacion&idCurso=5&nombreCurso=unity%202d"
                                                class="nav__dropdown-item2">Photoshop</a>
                                            <a href="https://www.widolearn.com/index.php?c=Usuarios&a=claseMuestraNavegacion&idCurso=6&nombreCurso=illustrator"
                                                class="nav__dropdown-item2">Illustrator</a>
                                            <a href="https://www.widolearn.com/index.php?c=Usuarios&a=claseMuestraNavegacion&idCurso=42&nombreCurso=Dibujo%20manga"
                                                class="nav__dropdown-item2">Dibujo manga</a>
                                        </div>
                                    </div>
                                    
                                    <div href="#" class="nav__contenedorIngenieria">
                                        <a href="#" class="nav__linkSub nav__toggle">
                                            <span class="icon-circle">
                                                <i class='bx bx-wrench nav__iconSub'></i>
                                            </span>
                                            <span class="nav__name">Área de Ingeniería</span>
                                        </a>
                                        <div class="sidebar__ingenieria">
                                            <a href="https://www.widolearn.com/index.php?c=Usuarios&a=claseMuestraNavegacion&idCurso=17&nombreCurso=robotica"
                                                class="nav__dropdown-item2">robotica</a>
                                        </div>
                                    </div>
                                    
                                    <div href="#" class="nav__contenedorAdministracion">
                                         <a href="#" class="nav__linkSub nav__toggle">
                                            <span class="icon-circle">
                                                <i class='bx bx-calculator nav__iconSub'></i>
                                            </span>
                                            <span class="nav__name">Área de administración</span>
                                        </a>
                                        <div class="sidebar__administracion">
                                            <a href="https://www.widolearn.com/index.php?c=Usuarios&a=claseMuestraNavegacion&idCurso=1&nombreCurso=finanzas%20personales"
                                                class="nav__dropdown-item2">Finanzas personales</a>
                                            <a href="https://www.widolearn.com/index.php?c=Usuarios&a=claseMuestraNavegacion&idCurso=2&nombreCurso=emprendimiento%20e%20innovacion"
                                                class="nav__dropdown-item2">Emprendimiento e innovacion</a>
                                            <a href="https://www.widolearn.com/index.php?c=Usuarios&a=claseMuestraNavegacion&idCurso=16&nombreCurso=Estrategias%20de%20inversi%C3%B3n"
                                                class="nav__dropdown-item2">Estrategias de inversión</a>
                                            <a href="https://www.widolearn.com/index.php?c=Usuarios&a=claseMuestraNavegacion&idCurso=19&nombreCurso=excel"
                                                class="nav__dropdown-item2">Excel</a>
                                        </div>
                                    </div>
                                   
                                    <a href="#" class="nav__linkSub nav__toggle">
                                        <span class="icon-circle">
                                            <i class='bx bx-cloud nav__iconSub'></i>
                                        </span>
                                        <span class="nav__name">Emprendimiento e innovación</span>
                                    </a>
                                    
                                    <div href="#" class="nav__contenedorOtras">
                                          <a href="#" class="nav__linkSub nav__toggle">
                                            <span class="icon-circle">
                                                <i class='bx bx-rocket nav__iconSub'></i>
                                            </span>
                                            <span class="nav__name">Otras áreas</span>
                                        </a>
                                        <div class="sidebar__otras">
                                            <a href="https://www.widolearn.com/index.php?c=Usuarios&a=claseMuestraNavegacion&idCurso=14&nombreCurso=ajedrez"
                                                class="nav__dropdown-item2">Ajedrez</a>
                                            <a href="https://www.widolearn.com/index.php?c=Usuarios&a=claseMuestraNavegacion&idCurso=48&nombreCurso=oratoria"
                                                class="nav__dropdown-item2">Oratoria</a>
                                            
                                        </div>
                                    </div>
                            
                                </div>
                            </div>
                        </div>

                        <div class="nav__dropdown">
                            <a href="#" class="nav__link nav__toggle">
                                <i class='bx bx-glasses nav__icon'></i>
                                <span class="nav__name">Asesorias</span>
                                <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                            </a>

                            <div class="nav__dropdown-collapse nav__submenu">
                                <div class="nav__dropdown-content">
                                    <a href="#" class="nav__dropdown-item">Matematicas ingreso universidad</a>
                                    <a href="#" class="nav__dropdown-item">Matematicas todos los grados escolares</a>
                                    <a href="#" class="nav__dropdown-item">Quimica</a>
                                </div>
                            </div>
                        </div>

                        <?php
                        // session_start();
                        // Verificar si la variable de sesión existe antes de usarla para evitar errores
                        if (isset($_SESSION['id_usuario'])) {

                            ?>
                            <div class="nav__dropdown">
                                <a href="#" class="nav__link">
                                    <i class='bx bx-bell nav__icon'></i>
                                    <span class="nav__name">Notificaciones</span>
                                    <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                                </a>



                                <div class="nav__dropdown-collapse">
                                    <div class="nav__dropdown-content">
                                        <?php
                                        // Verificar si hay notificaciones
                                        if (!empty($consultaNotificacion)) {
                                            // Iterar sobre las notificaciones y mostrarlas
                                            foreach ($consultaNotificacion as $notificacion) {
                                                // Obtener los campos de la notificación
                                                $mensaje = $notificacion['mensaje'];
                                                $estado = $notificacion['estado'];
                                                $fecha_creacion = $notificacion['fecha_creacion'];

                                                // Generar el HTML para la notificación
                                                echo "<a href='#' class='nav__dropdown-item'>";
                                                echo "<span class='mensaje'>$mensaje </span>";
                                                echo "<span class='fecha'>$fecha_creacion</span>";
                                                echo "</a>";
                                            }
                                        } else {
                                            // Si no hay notificaciones, mostrar un mensaje indicando que no hay notificaciones disponibles
                                            echo "<p>No hay notificaciones disponibles</p>";
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                

                            <a href="#" onclick="redirigirVistaAprendizaje()" class="nav__link">
                                <i class='bx bx-star nav__icon'></i>
                                <span class="nav__name">Mi ruta</span>
                            </a>

                        </div>

                    </div>
                </div>

                <h3 class="nav__subtitle">Usuario</h3>

                <a href="#" class="nav__link">
                    <i class='bx bx-user nav__icon'></i>
                    <span class="nav__name"><?php echo $_SESSION['nombre']; ?></span>
                </a>

                <a class="nav__link nav__logout">
                    <i class='bx bx-log-out nav__icon'></i>
                    <form action="index.php?c=Usuarios&a=cerrarSesion" method="post">
                        <button class="cerrar" type="submit" name="cerrar_sesion">Cerrar sesión</button>
                    </form>
                </a>
                <?php
                        } // Fin del bloque condicional
                        ?>
        </nav>
    </div>

    <!--========== MAIN JS ==========-->
    <script src="assets/js/main.js">

        document.querySelectorAll('.nav__dropdown').forEach(function (dropdown) {
            dropdown.addEventListener('mouseenter', function () {
                this.querySelector('.nav__dropdown-collapse').style.maxHeight = '100rem';
            });

            dropdown.addEventListener('mouseleave', function () {
                this.querySelector('.nav__dropdown-collapse').style.maxHeight = '0';
            });
        });

        /*==================== SHOW NAVBAR ====================*/
        const showMenu = (headerToggle, navbarId) => {
            const toggleBtn = document.getElementById(headerToggle),
                nav = document.getElementById(navbarId)

            // Validate that variables exist
            if (headerToggle && navbarId) {
                toggleBtn.addEventListener('click', () => {
                    // We add the show-menu class to the div tag with the nav__menu class
                    nav.classList.toggle('show-menu')
                    // change icon
                    toggleBtn.classList.toggle('bx-x')
                })
            }
        }
        showMenu('header-toggle', 'navbar')

        /*==================== LINK ACTIVE ====================*/
        const linkColor = document.querySelectorAll('.nav__link')

        function colorLink() {
            linkColor.forEach(l => l.classList.remove('active'))
            this.classList.add('active')
        }

        linkColor.forEach(l => l.addEventListener('click', colorLink))
    </script>
</body>

</html>