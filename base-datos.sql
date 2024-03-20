-- Crear la base de datos aerobotLearning
CREATE DATABASE aerobotLearning;

-- Usar la base de datos aerobotLearning
USE aerobotLearning;

-- Crear la tabla de Usuarios
CREATE TABLE usuarios
(
    id_usuario INT
    AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR
    (255) NOT NULL,
    edad VARCHAR
    (3) NOT NULL,
    telefono VARCHAR
    (11),
    interes VARCHAR
    (255),
    correo_electronico VARCHAR
    (255) NOT NULL,
    contraseña VARCHAR
    (255) NOT NULL
);

    -- Crear la tabla de Maestros
    CREATE TABLE maestros
    (
        id_maestro INT
        AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR
        (255) NOT NULL,
    foto VARCHAR
        (255) NOT NULL,
    areas TEXT NOT NULL,
    descripcion TEXT NOT NULL,
    hobies TEXT NOT NULL,
    correo_electronico VARCHAR
        (255) NOT NULL,
    contraseña VARCHAR
        (255) NOT NULL
);

        -- Crear la tabla de Cursos
        CREATE TABLE cursos
        (
            id_curso INT
            AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR
            (255) NOT NULL,
    foto VARCHAR
            (255) NOT NULL,
    descripcion TEXT,
    temario TEXT,
    requerimientos TEXT,
    pdf TEXT,
    precio DECIMAL
            (10, 2) NOT NULL
);

            -- Crear tabla de Inscripciones para la relación Usuario-Curso
            CREATE TABLE inscripciones
            (
                id_inscripcion INT
                AUTO_INCREMENT PRIMARY KEY,
    id_usuario INT,
    id_curso INT,
    estado ENUM
                ('cursando', 'completado') DEFAULT 'cursando',
    FOREIGN KEY
                (id_usuario) REFERENCES Usuarios
                (id_usuario),
    FOREIGN KEY
                (id_curso) REFERENCES Cursos
                (id_curso)
);

                -- Crear tabla de Asignaciones para la relación Maestro-Curso
                CREATE TABLE asignaciones
                (
                    id_asignacion INT
                    AUTO_INCREMENT PRIMARY KEY,
    id_maestro INT,
    id_curso INT,
    FOREIGN KEY
                    (id_maestro) REFERENCES Maestros
                    (id_maestro),
    FOREIGN KEY
                    (id_curso) REFERENCES Cursos
                    (id_curso)
);

                    -- Crear tabla para motor de búsqueda de cursos
                    CREATE TABLE motorBusqueda
                    (
                        id_curso INT
                        AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR
                        (255) NOT NULL,
    contenido TEXT,
    palabrasClave VARCHAR
                        (255)
);

-- Crear tabla para disponibilidadMaestro
CREATE TABLE disponibilidadMaestro (
    id_disponibilidad INT AUTO_INCREMENT PRIMARY KEY,
    id_maestro INT,
    fecha DATE,
    hora TIME,
    FOREIGN KEY (id_maestro) REFERENCES Maestros(id_maestro)
);


CREATE TABLE notificaciones (
    id_notificacion INT AUTO_INCREMENT PRIMARY KEY,
    id_usuario INT,
    id_maestro INT,
    mensaje TEXT,
    estado ENUM('leida', 'noLeida') DEFAULT 'noLeida',
    fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario),
    FOREIGN KEY (id_maestro) REFERENCES maestros(id_maestro)
);



INSERT INTO `motorBusqueda` (`id_curso`, `titulo`, `contenido`, `palabrasClave`) VALUES
(1, 'Programacion web', 'https://grupoaerobot.com/Ciberseguridad.php', 'html css web'),
(2, 'Ciberseguridad', 'https://grupoaerobot.com/Ciberseguridad.php', 'seguridad hacker'),
(3, 'Minecraft', '', 'minecraft steve alex videjuegos programacion animacion 3d desarrollo juego codigo'),
(4, 'Roblox', 'https://grupoaerobot.com/Roblox.php', 'roblox videojuego programacion animacion 3d desarrollo juego codigo'),
(5, 'Robotica', '', 'robotica circuitos electricidad fisica motores robot robots mecanica ingenieria armado lego programacion desarrollo aplicaciones arduino'),
(6, 'Dibujo', '', 'dibujo diseño personajes ilustracion animacion tableta grafica ipad procreate krita'),
(7, 'Programacion', '', 'python c++ lenguajes programacion paginas web html java aplicaciones moviles');


INSERT INTO `maestros` (`id_maestro`, `nombre`, `foto`, `areas`, `descripcion`, `hobies`, `correo_electronico`, `contraseña`) VALUES
(1, 'master teach Alexia', 'images/docente/leanad.jpg', 'Curso: dibujo Tradicional \n\n\n-Arte tradicional (dibujo) \n-Photoshop, Clip studio. \n-Arte digital', 'Hola Soy Alexia, Lic. En Diseño, Animación y Arte digital. \r\nActualmente me dedico a Ilustrar por medio digital de manera Freelance.', '-Escuchar música \n-Ilustrar \n-Pintar con Acuarelas\n-Ver series y películas animadas ', 'alexia@gmail.com', '12345678'),
(2, 'master teach Eric', 'images/docente/carlosz.jpg', 'Cursos:\r\n-Desarrollo de un brazo robótico\r\n\r\n-Curso de Robótica (brazo robótico)\r\n\r\n-Robótica (Carrito)\r\n\r\n-Electrónica\r\n\r\n-Programación (Python y C)', 'Hola, soy Eric, Ingeniero en Mecatrónica. Actualmente estudio la maestría en Electrónica y colaboro en distintos proyectos de investigación.', '-Deportes\r\n-Jugar videojuegos\r\n-Leer', 'null', 'null'),
(3, 'master teach Alondra', 'images/docente/alondraF.mp4', 'Curso: Finanzas personales \r\n\r\n\r\n-Finanzas personales\r\n\r\n-Inversiones\r\n\r\n-Emprendimiento\r\n\r\n-Administración empresarial', 'Hola Soy Alo, Lic. en Economía y Finanzas. Candidata de MBA y Figura 3 como Asesora en estrategias de inversión por la AMIB.\r\nActualmente soy Analista de Inversiones en WTW en Chicago. ', '-Bailar\r\n-Escuchar música\r\n-Leer\r\n-Viajar\r\n-Escuchar podcasts financieros y corporativos.\r\n-Ir de Shopping\r\n', 'alondra@gmail.com', '12345678');


INSERT INTO `cursos` (`id_curso`, `nombre`, `foto`, `descripcion`, `temario`, `requerimientos`, `pdf`, `precio`) VALUES
(1, 'finanzas personales', 'images/curso/finanzas-personales.png', 'null', 'null', 'null', 'images/curso-pdf/finanzas-pdf.pdf', 0.00),
(2, 'emprendimiento e innovacion', 'images/curso/emprendimiento-e-innovacion.png', 'null', 'null', 'null', 'images/curso-pdf/emprendimiento-pdf.pdf', 0.00),
(3, 'robotica proyecto brazo robotico', 'images/curso/robotica-brazo.png', 'null', 'null', 'null', 'images/curso-pdf/roboticabrazo-pdf.pdf', 0.00),
(4, 'dibujo tradicional', 'images/curso/dibujo.png', 'null', 'null', 'null', 'images/curso-pdf/dibujo-pdf.pdf', 0.00),
(5, 'photoshop', 'images/curso/photoshop.png', 'null', 'null', 'null', 'images/curso-pdf/photoshop-pdf.pdf', 0.00),
(6, 'illustrator', 'images/curso/illustrator.png', 'null', 'null', 'null', 'images/curso-pdf/illustrator-pdf.pdf', 0.00),
(7, 'blender', 'images/curso/blender.png', 'null', 'null', 'null', 'images/curso-pdf/blender-pdf.pdf', 0.00),
(8, 'gdevelop', 'images/curso/gdevelop.png', 'null', 'null', 'null', 'images/curso-pdf/gdevelop-pdf.pdf', 0.00),
(9, 'unity 2d', 'images/curso/unity2d.png', 'null', 'null', 'null', 'images/curso-pdf/unity2d-pdf.pdf', 0.00),
(10, 'unity 3d', 'images/curso/unity3d.png', 'null', 'null', 'null', 'images/curso-pdf/unity3d-pdf.pdf', 0.00),
(11, 'minecraft', 'images/curso/minecraft.png', 'null', 'null', 'null', 'images/curso-pdf/minecraft-pdf.pdf', 0.00),
(12, 'doblaje', 'images/curso/doblaje.png', 'null', 'null', 'null', 'images/curso-pdf/doblaje-pdf.pdf', 0.00),
(13, 'databricks', 'images/curso/databricks.png', 'null', 'null', 'null', 'images/curso-pdf/databricks-pdf.pdf', 0.00),
(14, 'ajedrez', 'images/curso/ajedrez.png', 'null', 'null', 'null', 'images/curso-pdf/ajedrez-pdf.pdf', 0.00),
(15, 'ia', 'images/curso/ia.png', 'null', 'null', 'null', 'images/curso-pdf/ia-pdf.pdf', 0.00),
(16, 'inversion', 'images/curso/inversion.png', 'null', 'null', 'null', 'images/curso-pdf/inversion-pdf.pdf', 0.00),
(17, 'robotica', 'images/curso/robotica.png', 'null', 'null', 'null', 'images/curso-pdf/robotica-pdf.pdf', 0.00),
(18, 'thunkable', 'images/curso/thunkable.png', 'null', 'null', 'null', 'images/curso-pdf/thunkable-pdf.pdf', 0.00),
(19, 'excel', 'images/curso/excel.png', 'null', 'null', 'null', 'images/curso-pdf/excel-pdf.pdf', 0.00),
(20, 'ap teach', 'images/curso/ap-teach.png', 'null', 'null', 'null', 'images/curso-pdf/ap-teach-pdf.pdf', 0.00);



INSERT INTO `disponibilidadmaestro` (`id_disponibilidad`, `id_maestro`, `fecha`, `hora`) VALUES
(2, 3, '2024-03-15', '16:00:00'),
(3, 3, '2024-03-15', '17:00:00'),
(4, 3, '2024-03-15', '11:00:00'),
(7, 3, '2024-03-20', '10:35:00');



INSERT INTO `asignaciones` (`id_asignacion`, `id_maestro`, `id_curso`) VALUES
(1, 3, 1),
(2, 2, 3),
(3, 1, 4),
(4, 1, 5);





























-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-03-2024 a las 06:25:05
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `aerobotlearning`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignaciones`
--

CREATE TABLE `asignaciones` (
  `id_asignacion` int(11) NOT NULL,
  `id_maestro` int(11) DEFAULT NULL,
  `id_curso` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `asignaciones`
--

INSERT INTO `asignaciones` (`id_asignacion`, `id_maestro`, `id_curso`) VALUES
(1, 3, 1),
(2, 2, 3),
(3, 1, 4),
(4, 1, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `id_curso` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `temario` text DEFAULT NULL,
  `requerimientos` text DEFAULT NULL,
  `pdf` text DEFAULT NULL,
  `precio` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`id_curso`, `nombre`, `foto`, `descripcion`, `temario`, `requerimientos`, `pdf`, `precio`) VALUES
(1, 'finanzas personales', 'images/curso/finanzas-personales.png', 'null', 'null', 'null', 'images/curso-pdf/finanzas-pdf.pdf', 0.00),
(2, 'emprendimiento e innovacion', 'images/curso/emprendimiento-e-innovacion.png', 'null', 'null', 'null', 'images/curso-pdf/emprendimiento-pdf.pdf', 0.00),
(3, 'robotica proyecto brazo robotico', 'images/curso/robotica-brazo.png', 'null', 'null', 'null', 'images/curso-pdf/roboticabrazo-pdf.pdf', 0.00),
(4, 'dibujo tradicional', 'images/curso/dibujo.png', 'null', 'null', 'null', 'images/curso-pdf/dibujo-pdf.pdf', 0.00),
(5, 'photoshop', 'images/curso/photoshop.png', 'null', 'null', 'null', 'images/curso-pdf/photoshop-pdf.pdf', 0.00),
(6, 'illustrator', 'images/curso/illustrator.png', 'null', 'null', 'null', 'images/curso-pdf/illustrator-pdf.pdf', 0.00),
(7, 'blender', 'images/curso/blender.png', 'null', 'null', 'null', 'images/curso-pdf/blender-pdf.pdf', 0.00),
(8, 'gdevelop', 'images/curso/gdevelop.png', 'null', 'null', 'null', 'images/curso-pdf/gdevelop-pdf.pdf', 0.00),
(9, 'unity 2d', 'images/curso/unity2d.png', 'null', 'null', 'null', 'images/curso-pdf/unity2d-pdf.pdf', 0.00),
(10, 'unity 3d', 'images/curso/unity3d.png', 'null', 'null', 'null', 'images/curso-pdf/unity3d-pdf.pdf', 0.00),
(11, 'minecraft', 'images/curso/minecraft.png', 'null', 'null', 'null', 'images/curso-pdf/minecraft-pdf.pdf', 0.00),
(12, 'doblaje', 'images/curso/doblaje.png', 'null', 'null', 'null', 'images/curso-pdf/doblaje-pdf.pdf', 0.00),
(13, 'databricks', 'images/curso/databricks.png', 'null', 'null', 'null', 'images/curso-pdf/databricks-pdf.pdf', 0.00),
(14, 'ajedrez', 'images/curso/ajedrez.png', 'null', 'null', 'null', 'images/curso-pdf/ajedrez-pdf.pdf', 0.00),
(15, 'ia', 'images/curso/ia.png', 'null', 'null', 'null', 'images/curso-pdf/ia-pdf.pdf', 0.00),
(16, 'inversion', 'images/curso/inversion.png', 'null', 'null', 'null', 'images/curso-pdf/inversion-pdf.pdf', 0.00),
(17, 'robotica', 'images/curso/robotica.png', 'null', 'null', 'null', 'images/curso-pdf/robotica-pdf.pdf', 0.00),
(18, 'thunkable', 'images/curso/thunkable.png', 'null', 'null', 'null', 'images/curso-pdf/thunkable-pdf.pdf', 0.00),
(19, 'excel', 'images/curso/excel.png', 'null', 'null', 'null', 'images/curso-pdf/excel-pdf.pdf', 0.00),
(20, 'ap teach', 'images/curso/ap-teach.png', 'null', 'null', 'null', 'images/curso-pdf/ap-teach-pdf.pdf', 0.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `disponibilidadmaestro`
--

CREATE TABLE `disponibilidadmaestro` (
  `id_disponibilidad` int(11) NOT NULL,
  `id_maestro` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `disponibilidadmaestro`
--

INSERT INTO `disponibilidadmaestro` (`id_disponibilidad`, `id_maestro`, `fecha`, `hora`) VALUES
(1, 3, '2024-03-15', '15:00:00'),
(2, 3, '2024-03-15', '16:00:00'),
(3, 3, '2024-03-15', '17:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripciones`
--

CREATE TABLE `inscripciones` (
  `id_inscripcion` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `id_curso` int(11) DEFAULT NULL,
  `estado` enum('cursando','completado') DEFAULT 'cursando'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maestros`
--

CREATE TABLE `maestros` (
  `id_maestro` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `areas` text NOT NULL,
  `descripcion` text NOT NULL,
  `hobies` text NOT NULL,
  `correo_electronico` varchar(255) NOT NULL,
  `contraseña` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `maestros`
--

INSERT INTO `maestros` (`id_maestro`, `nombre`, `foto`, `areas`, `descripcion`, `hobies`, `correo_electronico`, `contraseña`) VALUES
(1, 'master teach Alexia', 'images/docente/leanad.jpg', 'Curso: dibujo Tradicional \n\n\n-Arte tradicional (dibujo) \n-Photoshop, Clip studio. \n-Arte digital', 'Hola Soy Alexia, Lic. En Diseño, Animación y Arte digital. \r\nActualmente me dedico a Ilustrar por medio digital de manera Freelance.', '-Escuchar música \n-Ilustrar \n-Pintar con Acuarelas\n-Ver series y películas animadas ', 'null', 'null'),
(2, 'master teach Eric', 'images/docente/carlosz.jpg', 'Cursos:\r\n-Desarrollo de un brazo robótico\r\n\r\n-Curso de Robótica (brazo robótico)\r\n\r\n-Robótica (Carrito)\r\n\r\n-Electrónica\r\n\r\n-Programación (Python y C)', 'Hola, soy Eric, Ingeniero en Mecatrónica. Actualmente estudio la maestría en Electrónica y colaboro en distintos proyectos de investigación.', '-Deportes\r\n-Jugar videojuegos\r\n-Leer', 'null', 'null'),
(3, 'master teach Alondra', 'images/docente/alondraF.mp4', 'Curso: Finanzas personales \r\n\r\n\r\n-Finanzas personales\r\n\r\n-Inversiones\r\n\r\n-Emprendimiento\r\n\r\n-Administración empresarial', 'Hola Soy Alo, Lic. en Economía y Finanzas. Candidata de MBA y Figura 3 como Asesora en estrategias de inversión por la AMIB.\r\nActualmente soy Analista de Inversiones en WTW en Chicago. ', '-Bailar\r\n-Escuchar música\r\n-Leer\r\n-Viajar\r\n-Escuchar podcasts financieros y corporativos.\r\n-Ir de Shopping\r\n', 'null', 'null');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `motorbusqueda`
--

CREATE TABLE `motorbusqueda` (
  `id_curso` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `contenido` text DEFAULT NULL,
  `palabrasClave` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `motorbusqueda`
--

INSERT INTO `motorbusqueda` (`id_curso`, `titulo`, `contenido`, `palabrasClave`) VALUES
(1, 'Programacion web', 'https://grupoaerobot.com/Ciberseguridad.php', 'html css web'),
(2, 'Ciberseguridad', 'https://grupoaerobot.com/Ciberseguridad.php', 'seguridad hacker'),
(3, 'Minecraft', '', 'minecraft steve alex videjuegos programacion animacion 3d desarrollo juego codigo'),
(4, 'Roblox', 'https://grupoaerobot.com/Roblox.php', 'roblox videojuego programacion animacion 3d desarrollo juego codigo'),
(5, 'Robotica', '', 'robotica circuitos electricidad fisica motores robot robots mecanica ingenieria armado lego programacion desarrollo aplicaciones arduino'),
(6, 'Dibujo', '', 'dibujo diseño personajes ilustracion animacion tableta grafica ipad procreate krita'),
(7, 'Programacion', '', 'python c++ lenguajes programacion paginas web html java aplicaciones moviles');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `correo_electronico` varchar(255) NOT NULL,
  `contraseña` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asignaciones`
--
ALTER TABLE `asignaciones`
  ADD PRIMARY KEY (`id_asignacion`),
  ADD KEY `id_maestro` (`id_maestro`),
  ADD KEY `id_curso` (`id_curso`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id_curso`);

--
-- Indices de la tabla `disponibilidadmaestro`
--
ALTER TABLE `disponibilidadmaestro`
  ADD PRIMARY KEY (`id_disponibilidad`),
  ADD KEY `id_maestro` (`id_maestro`);

--
-- Indices de la tabla `inscripciones`
--
ALTER TABLE `inscripciones`
  ADD PRIMARY KEY (`id_inscripcion`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_curso` (`id_curso`);

--
-- Indices de la tabla `maestros`
--
ALTER TABLE `maestros`
  ADD PRIMARY KEY (`id_maestro`);

--
-- Indices de la tabla `motorbusqueda`
--
ALTER TABLE `motorbusqueda`
  ADD PRIMARY KEY (`id_curso`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asignaciones`
--
ALTER TABLE `asignaciones`
  MODIFY `id_asignacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id_curso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `disponibilidadmaestro`
--
ALTER TABLE `disponibilidadmaestro`
  MODIFY `id_disponibilidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `inscripciones`
--
ALTER TABLE `inscripciones`
  MODIFY `id_inscripcion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `maestros`
--
ALTER TABLE `maestros`
  MODIFY `id_maestro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `motorbusqueda`
--
ALTER TABLE `motorbusqueda`
  MODIFY `id_curso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asignaciones`
--
ALTER TABLE `asignaciones`
  ADD CONSTRAINT `asignaciones_ibfk_1` FOREIGN KEY (`id_maestro`) REFERENCES `maestros` (`id_maestro`),
  ADD CONSTRAINT `asignaciones_ibfk_2` FOREIGN KEY (`id_curso`) REFERENCES `cursos` (`id_curso`);

--
-- Filtros para la tabla `disponibilidadmaestro`
--
ALTER TABLE `disponibilidadmaestro`
  ADD CONSTRAINT `disponibilidadmaestro_ibfk_1` FOREIGN KEY (`id_maestro`) REFERENCES `maestros` (`id_maestro`);

--
-- Filtros para la tabla `inscripciones`
--
ALTER TABLE `inscripciones`
  ADD CONSTRAINT `inscripciones_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `inscripciones_ibfk_2` FOREIGN KEY (`id_curso`) REFERENCES `cursos` (`id_curso`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
