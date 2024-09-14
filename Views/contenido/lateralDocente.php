<?php
// Verificar si la variable de sesión existe antes de usarla para evitar errores
if (isset($_SESSION['mentor_id'])) {
    $inicioDocente = $_SESSION['mentor_id'];
} else {
    echo "No se ha iniciado sesión"; // En caso de que la sesión no esté iniciada o la variable de sesión no esté definida
}
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
        --header-height: 3.5rem;
        --nav-width: 219px;

        /*========== Colors ==========*/
        --first-color: #3498db;
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

    .nav__icon {
        font-size: 1.2rem;
        margin-right: .5rem;
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
        max-height: 21px;
        transition: .4s ease-in-out;
    }

    .nav__dropdown-collapse {
        background-color: var(--first-color-light);
        border-radius: .25rem;
        margin-top: 1rem;
    }

    .nav__dropdown-content {
        display: grid;
        row-gap: .5rem;
        padding: .75rem 2.5rem .75rem 1.8rem;
    }

    .nav__dropdown-item {
        font-size: var(--smaller-font-size);
        font-weight: var(--font-medium);
        color: var(--text-color);
    }

    .nav__dropdown-item:hover {
        color: var(--first-color);
    }

    .nav__dropdown-icon {
        margin-left: auto;
        transition: .4s;
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
        background-color: #4F7CAC;
        /* Cambiar el color de fondo al pasar por encima */
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

                                            // Obtener el primer carácter del mensaje
                                            $primerCaracter = substr($mensaje, 0, 1);
                                            // Obtener el resto del mensaje sin el primer carácter
                                            $restoMensaje = substr($mensaje, 1);

                                            // Dividir la cadena en un array de palabras
                                            $palabras = explode(' ', $mensaje);

                                            // Obtener la penúltima palabra
                                            $penultimaPalabra = $palabras[count($palabras) - 5];

                                            // Generar el HTML para la notificación
                                            echo "<a href='#' class='nav__dropdown-item'>";
                                            //echo "<span class='mensaje'>$penultimaPalabra</span>";
                                            echo "<span class='mensaje'>$restoMensaje</span>";
                                            echo "<span class='fecha'>$fecha_creacion</span>";
                                            echo "</a>";
                                    ?>
                                            <form action="index.php?c=Docentes&a=confirmarCita" method="post">
                                                <input type="hidden" name="idUsuario" value="<?php echo $primerCaracter; ?>">
                                                <input type="hidden" name="fecha" value="<?php echo $penultimaPalabra; ?>">
                                                <button class="button-cr">Confirmar</button>
                                            </form>
                                            <form action="index.php?c=Docentes&a=rechazarCita" method="post">
                                                <input type="hidden" name="idUsuario" value="<?php echo $primerCaracter; ?>">
                                                <input type="hidden" name="fecha" value="<?php echo $penultimaPalabra; ?>">
                                                <button class="button-cr">Rechazar</button>
                                            </form>
                                            <br>
                                    <?php
                                        }
                                    } else {
                                        // Si no hay notificaciones, mostrar un mensaje indicando que no hay notificaciones disponibles
                                        echo "<p>No hay notificaciones disponibles</p>";
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        -->
                        
                        <a href="index.php?c=Docentes&a=vistaMentorias&id=<?php echo $_SESSION['mentor_id']; ?>" class="nav__link">
                                <i class='bx bxs-graduation nav__icon'></i>
                                <span class="nav__name">Mentorias</span>
                        </a>
                        
                        <a href="index.php?c=Docentes&a=vistaHistorialMuestras&id=<?php echo $_SESSION['mentor_id']; ?>" class="nav__link">
                                <i class='bx bx-book-content nav__icon'></i>
                                <span class="nav__name">H. clases muestra</span>
                        </a>


                    </div>

                </div>
            </div>

            <a class="nav__link nav__logout">
                <i class='bx bx-log-out nav__icon'></i>
                <form action="index.php?c=Docentes&a=cerrarSesion" method="post">
                    <button class="cerrar" type="submit" name="cerrar_sesion">Cerrar sesión</button>
                </form>
            </a>
        </nav>
    </div>

    <!--========== MAIN JS ==========-->
    <script src="assets/js/main.js">
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