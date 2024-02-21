-- Crear la base de datos aerobotLearning
CREATE DATABASE aerobotLearning;

-- Usar la base de datos aerobotLearning
USE aerobotLearning;

-- Crear la tabla de Usuarios
CREATE TABLE Usuarios (
    id_usuario INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    correo_electronico VARCHAR(255) NOT NULL,
    contraseña VARCHAR(255) NOT NULL
);

CREATE TABLE Maestros (
    id_usuario INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    correo_electronico VARCHAR(255) NOT NULL,
    contraseña VARCHAR(255) NOT NULL
);


CREATE TABLE `motorBusqueda` (
  `idCurso` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `contenido` text COLLATE utf8_spanish2_ci,
  `palabrasClave` varchar(255) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `motorBusqueda`
--

INSERT INTO `motorBusqueda` (`idCurso`, `titulo`, `contenido`, `palabrasClave`) VALUES
(1, 'Programacion web', 'https://grupoaerobot.com/Ciberseguridad.php', 'html css web'),
(2, 'Ciberseguridad', 'https://grupoaerobot.com/Ciberseguridad.php', 'seguridad hacker'),
(3, 'Minecraft', '', 'minecraft steve alex videjuegos programacion animacion 3d desarrollo juego codigo'),
(4, 'Roblox', 'https://grupoaerobot.com/Roblox.php', 'roblox videojuego programacion animacion 3d desarrollo juego codigo'),
(5, 'Robotica', '', 'robotica circuitos electricidad fisica motores robot robots mecanica ingenieria armado lego programacion desarrollo aplicaciones arduino'),
(6, 'Dibujo', '', 'dibujo diseño personajes ilustracion animacion tableta grafica ipad procreate krita'),
(7, 'Programacion', '', 'python c++ lenguajes programacion paginas web html java aplicaciones moviles');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `motorBusqueda`
--
ALTER TABLE `motorBusqueda`
  ADD PRIMARY KEY (`idCurso`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `motorBusqueda`
--
ALTER TABLE `motorBusqueda`
  MODIFY `idCurso` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;