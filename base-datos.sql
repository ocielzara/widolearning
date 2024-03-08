-- Crear la base de datos aerobotLearning
CREATE DATABASE aerobotLearning;

-- Usar la base de datos aerobotLearning
USE aerobotLearning;

-- Crear la tabla de Usuarios
CREATE TABLE Usuarios
(
    id_usuario INT
    AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR
    (255) NOT NULL,
    correo_electronico VARCHAR
    (255) NOT NULL,
    contraseña VARCHAR
    (255) NOT NULL
);

    -- Crear la tabla de Maestros
    CREATE TABLE Maestros
    (
        id_maestro INT
        AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR
        (255) NOT NULL,
    foto VARCHAR
        (255) NOT NULL,
    descripcion TEXT NOT NULL,
    correo_electronico VARCHAR
        (255) NOT NULL,
    contraseña VARCHAR
        (255) NOT NULL
);

        -- Crear la tabla de Cursos
        CREATE TABLE Cursos
        (
            id_curso INT
            AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR
            (255) NOT NULL,
    foto VARCHAR
            (255) NOT NULL,
    descripcion TEXT,
    precio DECIMAL
            (10, 2) NOT NULL
);

            -- Crear tabla de Inscripciones para la relación Usuario-Curso
            CREATE TABLE Inscripciones
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
                CREATE TABLE Asignaciones
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
                    CREATE TABLE MotorBusqueda
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

INSERT INTO `motorBusqueda` (`id_curso`, `titulo`, `contenido`, `palabrasClave`) VALUES
(1, 'Programacion web', 'https://grupoaerobot.com/Ciberseguridad.php', 'html css web'),
(2, 'Ciberseguridad', 'https://grupoaerobot.com/Ciberseguridad.php', 'seguridad hacker'),
(3, 'Minecraft', '', 'minecraft steve alex videjuegos programacion animacion 3d desarrollo juego codigo'),
(4, 'Roblox', 'https://grupoaerobot.com/Roblox.php', 'roblox videojuego programacion animacion 3d desarrollo juego codigo'),
(5, 'Robotica', '', 'robotica circuitos electricidad fisica motores robot robots mecanica ingenieria armado lego programacion desarrollo aplicaciones arduino'),
(6, 'Dibujo', '', 'dibujo diseño personajes ilustracion animacion tableta grafica ipad procreate krita'),
(7, 'Programacion', '', 'python c++ lenguajes programacion paginas web html java aplicaciones moviles');
                
INSERT INTO `maestros` (`id_maestro`, `nombre`, `foto`, `descripcion`, `correo_electronico`, `contraseña`) VALUES
(1, 'leana deep deep', 'images/docente/leanad.jpg', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi quasi officiis praesentium quo accusamus inventore tempora aperiam labore ex. Id commodi numquam quis corporis ab? Sint numquam veniam amet unde. leana', 'leana@gmail.com', '12345678'),
(2, 'carlos zarate gutierrez', 'images/docente/carlosz.jpg', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi quasi officiis praesentium quo accusamus inventore tempora aperiam labore ex. Id commodi numquam quis corporis ab? Sint numquam veniam amet unde. carlos', 'carlos@gmail.com', '12345678');

INSERT INTO `cursos`(`id_curso`, `nombre`, `foto`, `descripcion`, `precio`) VALUES (null,'unity','images/curso/unity.png','cursos de videojuegos','100');

INSERT INTO `cursos`(`id_curso`, `nombre`, `foto`, `descripcion`, `precio`) VALUES (null,'blender','images/curso/blender.png','cursos de modelaod','200');





INSERT INTO `disponibilidadmaestro`(`id_disponibilidad`, `id_maestro`, `fecha`, `hora`) VALUES (null,2,'2024-03-10','15:00:00');

INSERT INTO `disponibilidadmaestro`(`id_disponibilidad`, `id_maestro`, `fecha`, `hora`) VALUES (null,2,'2024-03-10','16:00:00');

INSERT INTO `disponibilidadmaestro`(`id_disponibilidad`, `id_maestro`, `fecha`, `hora`) VALUES (null,2,'2024-03-12','16:00:00');

INSERT INTO `disponibilidadmaestro`(`id_disponibilidad`, `id_maestro`, `fecha`, `hora`) VALUES (null,1,'2024-03-12','18:00:00');

INSERT INTO `disponibilidadmaestro`(`id_disponibilidad`, `id_maestro`, `fecha`, `hora`) VALUES (null,1,'2024-03-14','10:00:00');



-- DATOS OFICIALES 
INSERT INTO `maestros`(`id_maestro`, `nombre`, `foto`, `descripcion`, `correo_electronico`, `contraseña`) VALUES (null,'master teach alondra','images/docente/alondraF.mp4','¿En qué áreas te puedo ayudar?: Curso: finanzas personales, inversiones, emprendimiento, administracion empresarial. ¡Conoce a tu Master Teach Alondra! Hola Soy Alo, Lic. en Economía y Finanzas. Candidata de MBA y Figura 3 como Asesora en estrategias de inversión por la AMIB. Actualmente soy Analista de Inversiones en WTW en Chicago. Hobbies de Alo bailar, escuchar musica, leer, viajar, escuchar podcasts financieros y corporativos, ir de shopping.','null','null');