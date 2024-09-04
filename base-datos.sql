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
    telefono VARCHAR
    (11),
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


 CREATE TABLE asesoria
        (
            id_asesoria INT
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
                (id_usuario) REFERENCES usuarios
                (id_usuario),
    FOREIGN KEY
                (id_curso) REFERENCES cursos
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
                    (id_maestro) REFERENCES maestros
                    (id_maestro),
    FOREIGN KEY
                    (id_curso) REFERENCES cursos
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
    FOREIGN KEY (id_maestro) REFERENCES maestros(id_maestro)
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


INSERT INTO `maestros` (`id_maestro`, `nombre`, `foto`, `areas`, `descripcion`, `hobies`, `telefono`, `correo_electronico`, `contraseña`) VALUES
(1, 'master teach Alexia', 'images/docente/alexia.jpg', 'Curso: dibujo Tradicional \n\n\n-Arte tradicional (dibujo) \n-Photoshop, Clip studio. \n-Arte digital', 'Hola Soy Alexia, Lic. En Diseño, Animación y Arte digital. \r\nActualmente me dedico a Ilustrar por medio digital de manera Freelance.', '-Escuchar música \n-Ilustrar \n-Pintar con Acuarelas\n-Ver series y películas animadas ', NULL, 'alexia@gmail.com', '12345678'),
(2, 'master teach Eric', 'images/docente/eric.jpg', 'Cursos:\r\n-Desarrollo de un brazo robótico\r\n\r\n-Curso de Robótica (brazo robótico)\r\n\r\n-Robótica (Carrito)\r\n\r\n-Electrónica\r\n\r\n-Programación (Python y C)', 'Hola, soy Eric, Ingeniero en Mecatrónica. Actualmente estudio la maestría en Electrónica y colaboro en distintos proyectos de investigación.', '-Deportes\r\n-Jugar videojuegos\r\n-Leer', NULL, 'eric@gmail.com', '12345678'),
(3, 'master teach Alondra', 'images/docente/alondraF.mp4', 'Curso: Finanzas personales \r\n\r\n\r\n-Finanzas personales\r\n\r\n-Inversiones\r\n\r\n-Emprendimiento\r\n\r\n-Administración empresarial', 'Hola Soy Alo, Lic. en Economía y Finanzas. Candidata de MBA y Figura 3 como Asesora en estrategias de inversión por la AMIB.\r\nActualmente soy Analista de Inversiones en WTW en Chicago.', '-Bailar\r\n-Escuchar música\r\n-Leer\r\n-Viajar\r\n-Escuchar podcasts financieros y corporativos.\r\n-Ir de Shopping\r\n', NULL, 'alondra@gmail.com', '12345678');


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
(20, 'ap teach', 'images/curso/ap-teach.png', 'null', 'null', 'null', 'images/curso-pdf/ap-teach-pdf.pdf', 0.00),
(21, 'oratoria', 'images/curso/oratoria.png', 'null', 'null', 'null', 'images/curso-pdf/oratoria-pdf.pdf', 0.00),
(22, 'locucion y doblaje', 'images/curso/locucion.png', 'null', 'null', 'null', 'images/curso-pdf/locucion-pdf.pdf', 0.00),
(null, 'roblox studio', 'images/curso/roblox.png', 'null', 'null', 'null', 'images/curso-pdf/roblox-pdf.pdf', 0.00),
(null, 'lego fornite', 'images/curso/lego.png', 'null', 'null', 'null', 'images/curso-pdf/lego-pdf.pdf', 0.00),
(null, 'emociones', 'images/curso/emociones.png', 'null', 'null', 'null', 'images/curso-pdf/emociones-pdf.pdf', 0.00),
(null, 'robotica movil', 'images/curso/roboticamovil.png', 'null', 'null', 'null', 'images/curso-pdf/roboticamovil-pdf.pdf', 0.00),
(null, 'chatgpt', 'images/curso/chatgpt.png', 'null', 'null', 'null', 'images/curso-pdf/chatgpt-pdf.pdf', 0.00),
(null, 'moviles-1', 'images/curso/moviles-1.png', 'null', 'null', 'null', 'images/curso-pdf/moviles-1-pdf.pdf', 0.00),
(null, 'ciberseguridad', 'images/curso/ciberseguridad.png', 'null', 'null', 'null', 'images/curso-pdf/ciberseguridad-pdf.pdf', 0.00),
(null, 'web', 'images/curso/web.png', 'null', 'null', 'null', 'images/curso-pdf/web-pdf.pdf', 0.00),
(null, 'movil-2', 'images/curso/movil-2.png', 'null', 'null', 'null', 'images/curso-pdf/movil-2-pdf.pdf', 0.00),
(null, 'python', 'images/curso/python.png', 'null', 'null', 'null', 'images/curso-pdf/python-pdf.pdf', 0.00),
(null, 'guitarra', 'images/curso/guitarra.png', 'null', 'null', 'null', 'images/curso-pdf/guitarra-pdf.pdf', 0.00),
(null, 'modelado', 'images/curso/modelado.png', 'null', 'null', 'null', 'images/curso-pdf/modelado-pdf.pdf', 0.00),
(null, 'tiktok', 'images/curso/tiktok.png', 'null', 'null', 'null', 'images/curso-pdf/tiktok-pdf.pdf', 0.00),
(null, 'branding', 'images/curso/branding.png', 'null', 'null', 'null', 'images/curso-pdf/branding-pdf.pdf', 0.00),
(null, 'aleman', 'images/curso/aleman.png', 'null', 'null', 'null', 'images/curso-pdf/aleman-pdf.pdf', 0.00),
(null, 'ingles', 'images/curso/ingles.png', 'null', 'null', 'null', 'images/curso-pdf/ingles-pdf.pdf', 0.00),
(null, 'adobe premiere', 'images/curso/adobe-premiere.png', 'null', 'null', 'null', 'images/curso-pdf/adobe-premiere-pdf.pdf', 0.00),
(null, 'adobe after', 'images/curso/adobe-after.png', 'null', 'null', 'null', 'images/curso-pdf/adobe-after-pdf.pdf', 0.00),
(null, 'fotografia', 'images/curso/fotografia.png', 'null', 'null', 'null', 'images/curso-pdf/fotografia-pdf.pdf', 0.00),
(null, 'manga', 'images/curso/manga.png', 'null', 'null', 'null', 'images/curso-pdf/manga-pdf.pdf', 0.00),
(null, 'ilustracion', 'images/curso/ilustracion.png', 'null', 'null', 'null', 'images/curso-pdf/ilustracion-pdf.pdf', 0.00),
(null, 'mysql', 'images/curso/mysql.png', 'null', 'null', 'null', 'images/curso-pdf/mysql-pdf.pdf', 0.00),
(null, 'autocad', 'images/curso/autocad.png', 'null', 'null', 'null', 'images/curso-pdf/autocad-pdf.pdf', 0.00),
(null, 'solidworks', 'images/curso/solidworks.png', 'null', 'null', 'null', 'images/curso-pdf/solidworks-pdf.pdf', 0.00),
(null, 'pastel', 'images/curso/pastel.png', 'null', 'null', 'null', 'images/curso-pdf/pastel-pdf.pdf', 0.00);



INSERT INTO `asesoria` (`id_asesoria`, `nombre`, `foto`, `descripcion`, `temario`, `requerimientos`, `pdf`, `precio`) VALUES
(1, 'matematicas-1', 'images/asesorias/matematicas-1.png', 'null', 'null', 'null', 'images/asesorias-pdf/matematicas-1-pdf.pdf', 0.00),
(2, 'matematicas-2', 'images/asesorias/matematicas-2.png', 'null', 'null', 'null', 'images/asesorias-pdf/matematicas-2-pdf.pdf', 0.00),
(3, 'quimica', 'images/asesorias/quimica.png', 'null', 'null', 'null', 'images/asesorias-pdf/quimica-pdf.pdf', 0.00);
