<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link rel="stylesheet" href="public/styles/main/header.css">
    <!--remixicon CSS -->
    <link
        href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css"
        rel="stylesheet" />
    <link rel="stylesheet"
        href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;1,200&display=swap" rel="stylesheet">
</head>

<body>

    <header>
        <a href="https://www.widolearn.com/index.php?c=Usuarios&a=index&n=" class="logo">
            <img src="public/images/home/logo2.png" alt="Logo" class="logo-img">
        </a>
        <ul class="navbar">
            <li><a href="" class="active">Inicio</a></li>
            <li><a href="">Cursos</a></li>
            <li><a href="">Profesores</a></li>
            <li><a href="">Asesorias</a></li>
            <li><a href="">Precios</a></li>
          
            

            <?php
            // session_start(); // Descomentar si es necesario
            // Verificar si la variable de sesión existe antes de usarla para evitar errores
            if (isset($_SESSION['id_usuario'])) {
                $id_usuario = $_SESSION['id_usuario'];
            ?>

                <li>
                    <a href="https://www.widolearn.com/index.php?c=Usuarios&a=vistaAprendizajeDiseno&idUsuario=<?php echo $id_usuario; ?>" class="nav__link">
                        Mi ruta
                    </a>
                </li>

                <li class="nav__dropdown">
                    <a href="#" class="nav__link">
                        Notificaciones
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
                                    $fecha_creacion = $notificacion['fecha_creacion'];

                                    // Generar el HTML para la notificación
                                    echo "<a href='#' class='nav__dropdown-item'>";
                                    echo "<span class='mensaje'>$mensaje</span>";
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
                </li>

            <?php
            }
            ?>
        </ul>

        <div class="main">
            <?php
            // session_start(); // Descomentar si es necesario
            // Verificar si la variable de sesión existe antes de usarla para evitar errores
            if (isset($_SESSION['id_usuario'])) {
            ?>

                <a href="#" class="user">
                    <i class="ri-user-fill"></i><?php echo $_SESSION['nombre']; ?>
                </a>


                <a href="#" class="user" onclick="document.getElementById('cerrarSesionForm').submit(); return false;">
                    <i class="bx bx-log-out nav__icon"></i>Cerrar sesión
                </a>

                <form id="cerrarSesionForm" action="index.php?c=Usuarios&a=cerrarSesion" method="post" style="display: none;">
                    <input type="hidden" name="cerrar_sesion" value="1">
                </form>




            <?php
            } else {
            ?>
                <a href="#" class="user" onclick="iniciarSesion()"><i class="ri-user-fill"></i>Sign In</a>
                <a href="index.php?c=Usuarios&a=vistaRegistro">Register</a>
            <?php
            }
            ?>
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </header>

    <script src="public/JS/main/header.js"></script>
</body>

</html>