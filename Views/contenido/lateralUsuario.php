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


<body>
    <!--========== NAV ==========-->
    <div class="nav" id="navbar">
        <nav class="nav__container">
            <div>
                <!--CHECAR ESTA LOGICA!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
                 <?php
                    // session_start();
                    // Verificar si la variable de sesión existe antes de usarla para evitar errores
                    if (isset($_SESSION['id_usuario'])) {
                        //CAMBIOS ULTIMOMOMENTO 
                        $id_usuario = $_SESSION['id_usuario'];
                ?>
                <a href="https://www.widolearn.com/index.php?c=Usuarios&a=index&n=<?php echo $id_usuario; ?>" class="nav__link nav__logo">
                    <span class="nav__logo-name">Wido</span>
                </a>
                <?php
                    } else { 
                ?>
                <a href="https://widolearn.com/" class="nav__link nav__logo">
                    <span class="nav__logo-name">Wido</span>
                </a>
                 <?php
                    } // Fin del bloque condicional
                ?>
                
                

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
                                            <a href="https://www.widolearn.com/index.php?c=Usuarios&a=claseMuestraNavegacion&idCurso=44&nombreCurso=mysql"
                                                class="nav__dropdown-item2">MYSQL</a>
                                            <a href="https://www.widolearn.com/index.php?c=Usuarios&a=claseMuestraNavegacion&idCurso=18&nombreCurso=Apps%20moviles%20con%20Thunkable"
                                                class="nav__dropdown-item2">Apps moviles con Thunkable</a>
                                            <a href="https://www.widolearn.com/index.php?c=Usuarios&a=claseMuestraNavegacion&idCurso=27&nombreCurso=chatgpt"
                                                class="nav__dropdown-item2">chatgpt</a>
                                            <a href="https://www.widolearn.com/index.php?c=Usuarios&a=claseMuestraNavegacion&idCurso=29&nombreCurso=ciberseguridad"
                                                class="nav__dropdown-item2">ciberseguridad</a>
                                            <a href="https://www.widolearn.com/index.php?c=Usuarios&a=claseMuestraNavegacion&idCurso=30&nombreCurso=Dise%C3%B1o%20p%C3%A1ginas%20Web"
                                                class="nav__dropdown-item2">Diseño páginas Web</a>
                                            <a href="https://www.widolearn.com/index.php?c=Usuarios&a=claseMuestraNavegacion&idCurso=32&nombreCurso=python"
                                                class="nav__dropdown-item2">Python</a>
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
                            //CAMBIOS ULTIMOMOMENTO 
                             $id_usuario = $_SESSION['id_usuario'];
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
                

                            <a href="https://www.widolearn.com/index.php?c=Usuarios&a=vistaAprendizajeDiseno&idUsuario=<?php echo $id_usuario; ?>" onclick="redirigirVistaAprendizaje()" class="nav__link">
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