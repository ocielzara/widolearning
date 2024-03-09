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
    areas TEXT NOT NULL,
    descripcion TEXT NOT NULL,
    hobies TEXT NOT NULL,
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
    temario TEXT,
    requerimientos TEXT,
    pdf TEXT,
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





INSERT INTO `maestros`(`id_maestro`, `nombre`, `foto`, `areas`, `descripcion`, `hobies`, `correo_electronico`, `contraseña`) VALUES (null,'master teach alexia','images/docente/leanad.jpg','Curso: dibujo Tradicional 


Arte tradicional (dibujo) 
-Photoshop, Clip studio. 
-Arte digital','Hola Soy Alexia, Lic. En Diseño, Animación y Arte digital. 
Actualmente me dedico a Ilustrar por medio digital de manera Freelance.','Escuchar música 
Ilustrar 
Pintar con Acuarelas
Ver series y películas animadas ','null','null');

INSERT INTO `maestros`(`id_maestro`, `nombre`, `foto`, `areas`, `descripcion`, `hobies`, `correo_electronico`, `contraseña`) VALUES (null,'master teach eric','images/docente/carlosz.jpg','Cursos:
-Desarrollo de un brazo robótico

-Curso de Robótica (brazo robótico)

-Robótica (Carrito)

-Electrónica

-Programación (Python y C)','Hola, soy Eric, Ingeniero en Mecatrónica. Actualmente estudio la maestría en Electrónica y colaboro en distintos proyectos de investigación.','-Deportes
-Jugar videojuegos
-Leer','null','null');

INSERT INTO `maestros`(`id_maestro`, `nombre`, `foto`, `areas`, `descripcion`, `hobies`, `correo_electronico`, `contraseña`) VALUES (null,'master teach alondra','images/docente/alondraF.mp4','Curso: Finanzas personales 


-Finanzas personales

-Inversiones

-Emprendimiento

-Administración empresarial','Hola Soy Alo, Lic. en Economía y Finanzas. Candidata de MBA y Figura 3 como Asesora en estrategias de inversión por la AMIB.
Actualmente soy Analista de Inversiones en WTW en Chicago. ','-Bailar
-Escuchar música
-Leer
-Viajar
-Escuchar podcasts financieros y corporativos.
-Ir de Shopping
','null','null');





INSERT INTO `cursos`(`id_curso`, `nombre`, `foto`, `descripcion`, `temario`, `requerimientos`, `pdf`, `precio`) VALUES (null,'finanzas personales','images/curso/finanzas-personales.png','null','null','null','finanzas-pdf.pdf','null');

INSERT INTO `cursos`(`id_curso`, `nombre`, `foto`, `descripcion`, `temario`, `requerimientos`, `pdf`, `precio`) VALUES (null,'emprendimiento e innovacion','images/curso/emprendimiento-e-innovacion.png','null','null','null','emprendimiento-pdf.pdf','null');

INSERT INTO `cursos`(`id_curso`, `nombre`, `foto`, `descripcion`, `temario`, `requerimientos`, `pdf`, `precio`) VALUES (null,'robotica proyecto brazo robotico','images/curso/robotica-brazo.png','null','null','null','roboticabrazo-pdf.pdf','null');

INSERT INTO `cursos`(`id_curso`, `nombre`, `foto`, `descripcion`, `temario`, `requerimientos`, `pdf`, `precio`) VALUES (null,'dibujo tradicional','images/curso/dibujo.png','null','null','null','dibujo-pdf.pdf','null');

INSERT INTO `cursos`(`id_curso`, `nombre`, `foto`, `descripcion`, `temario`, `requerimientos`, `pdf`, `precio`) VALUES (null,'photoshop','images/curso/photoshop.png','null','null','null','photoshop-pdf.pdf','null');

INSERT INTO `cursos`(`id_curso`, `nombre`, `foto`, `descripcion`, `temario`, `requerimientos`, `pdf`, `precio`) VALUES (null,'illustrator','images/curso/illustrator.png','null','null','null','illustrator-pdf.pdf','null');

INSERT INTO `cursos`(`id_curso`, `nombre`, `foto`, `descripcion`, `temario`, `requerimientos`, `pdf`, `precio`) VALUES (null,'blender','images/curso/blender.png','null','null','null','blender-pdf.pdf','null');

INSERT INTO `cursos`(`id_curso`, `nombre`, `foto`, `descripcion`, `temario`, `requerimientos`, `pdf`, `precio`) VALUES (null,'gdevelop','images/curso/gdevelop.png','null','null','null','gdevelop-pdf.pdf','null');

INSERT INTO `cursos`(`id_curso`, `nombre`, `foto`, `descripcion`, `temario`, `requerimientos`, `pdf`, `precio`) VALUES (null,'unity 2d','images/curso/unity2d.png','null','null','null','unity2d-pdf.pdf','null');

INSERT INTO `cursos`(`id_curso`, `nombre`, `foto`, `descripcion`, `temario`, `requerimientos`, `pdf`, `precio`) VALUES (null,'unity 3d','images/curso/unity3d.png','null','null','null','unity3d-pdf.pdf','null');

INSERT INTO `cursos`(`id_curso`, `nombre`, `foto`, `descripcion`, `temario`, `requerimientos`, `pdf`, `precio`) VALUES (null,'minecraft','images/curso/minecraft.png','null','null','null','minecraft-pdf.pdf','null');

INSERT INTO `cursos`(`id_curso`, `nombre`, `foto`, `descripcion`, `temario`, `requerimientos`, `pdf`, `precio`) VALUES (null,'doblaje','images/curso/doblaje.png','null','null','null','doblaje-pdf.pdf','null');

INSERT INTO `cursos`(`id_curso`, `nombre`, `foto`, `descripcion`, `temario`, `requerimientos`, `pdf`, `precio`) VALUES (null,'databricks','images/curso/databricks.png','null','null','null','databricks-pdf.pdf','null');

INSERT INTO `cursos`(`id_curso`, `nombre`, `foto`, `descripcion`, `temario`, `requerimientos`, `pdf`, `precio`) VALUES (null,'ajedrez','images/curso/ajedrez.png','null','null','null','ajedrez-pdf.pdf','null');

INSERT INTO `cursos`(`id_curso`, `nombre`, `foto`, `descripcion`, `temario`, `requerimientos`, `pdf`, `precio`) VALUES (null,'ia','images/curso/ia.png','null','null','null','ia-pdf.pdf','null');

INSERT INTO `cursos`(`id_curso`, `nombre`, `foto`, `descripcion`, `temario`, `requerimientos`, `pdf`, `precio`) VALUES (null,'inversion','images/curso/inversion.png','null','null','null','inversion-pdf.pdf','null');

INSERT INTO `cursos`(`id_curso`, `nombre`, `foto`, `descripcion`, `temario`, `requerimientos`, `pdf`, `precio`) VALUES (null,'robotica','images/curso/robotica.png','null','null','null','robotica-pdf.pdf','null');

INSERT INTO `cursos`(`id_curso`, `nombre`, `foto`, `descripcion`, `temario`, `requerimientos`, `pdf`, `precio`) VALUES (null,'thunkable','images/curso/thunkable.png','null','null','null','thunkable-pdf.pdf','null');

INSERT INTO `cursos`(`id_curso`, `nombre`, `foto`, `descripcion`, `temario`, `requerimientos`, `pdf`, `precio`) VALUES (null,'excel','images/curso/excel.png','null','null','null','excel-pdf.pdf','null');

INSERT INTO `cursos`(`id_curso`, `nombre`, `foto`, `descripcion`, `temario`, `requerimientos`, `pdf`, `precio`) VALUES (null,'ap teach','images/curso/ap-teach.png','null','null','null','ap-teach-pdf.pdf','null');





INSERT INTO `disponibilidadmaestro`(`id_disponibilidad`, `id_maestro`, `fecha`, `hora`) VALUES (null,2,'2024-03-10','15:00:00');

INSERT INTO `disponibilidadmaestro`(`id_disponibilidad`, `id_maestro`, `fecha`, `hora`) VALUES (null,2,'2024-03-10','16:00:00');

INSERT INTO `disponibilidadmaestro`(`id_disponibilidad`, `id_maestro`, `fecha`, `hora`) VALUES (null,2,'2024-03-12','16:00:00');

INSERT INTO `disponibilidadmaestro`(`id_disponibilidad`, `id_maestro`, `fecha`, `hora`) VALUES (null,1,'2024-03-12','18:00:00');

INSERT INTO `disponibilidadmaestro`(`id_disponibilidad`, `id_maestro`, `fecha`, `hora`) VALUES (null,1,'2024-03-14','10:00:00');



