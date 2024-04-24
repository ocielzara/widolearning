<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carousel con Bootstrap</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="Views/style/carrucel.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-decoration: none;
            list-style: none;
        }

        body {
            font-family: "Poppins", sans-serif;
            background-color: white;
            margin: 0;
            /* Elimina los márgenes por defecto */
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .header {
            background-image: url(images/header-docentes.png);
            background-position: center top;
            background-repeat: no-repeat;
            background-size: 100%, cover;
            /* Ajusta el tamaño de las imágenes de fondo */
            min-height: 73vh;
            display: flex;
            align-items: center;
            position: relative;
        }

        .prices-1 {}

        .menu.container img {
            width: 350px;
            /* Establece el ancho deseado para la imagen */
            height: auto;
            /* Hace que la altura se ajuste automáticamente para mantener la proporción original */
            position: absolute;
            /* Establece el posicionamiento absoluto para la imagen dentro del contenedor */
            top: 10%;
            /* Posiciona la parte superior de la imagen en el 50% del contenedor */
            left: 2%;
            /* Posiciona la parte izquierda de la imagen en el 50% del contenedor */
        }

        .custom-text {
            font-family: 'Arial', sans-serif;
            font-size: 24px;
            font-weight: bold;
            text-transform: uppercase;
            color: #FEC400;
            padding: 5px;
            left: 30%;
            top: 32%;
            transform: translate(-50%, -50%);
            z-index: 2;
            /* Un valor mayor de z-index para que se superponga sobre el header */
            position: absolute;
        }

        #section1 {
            display: flex;
            height: 2px;
            color: black;
            border: 1px solid orange;
            box-sizing: border-box;
            margin-right: 65%;
            margin-top: 0px;
            box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.5);
        }

        /* Estilos del contenedor */
        .image-container {
            width: 700px;
            /* Ancho del contenedor */
            height: 600px;
            /* Altura del contenedor */
            border-radius: 20px;
            /* Bordes redondeados */
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.8);
            /* Sombra */
            overflow: hidden;
            /* Oculta el contenido que se desborda */
            z-index: 2;
            position: absolute;
            left: 50%;
            top: 90%;
            transform: translate(-50%, -50%);
        }

        /* Estilos de la imagen */
        .image-container img {
            width: 100%;
            /* La imagen ocupa todo el ancho del contenedor */
            height: 100%;
            /* La imagen ocupa todo el alto del contenedor */
            object-fit: cover;
            /* La imagen se ajusta para cubrir el contenedor */
        }

        /* Estilos de la imagen */
        .image-container video {
            width: 100%;
            /* La imagen ocupa todo el ancho del contenedor */
            height: 100%;
            /* La imagen ocupa todo el alto del contenedor */
            object-fit: cover;
            /* La imagen se ajusta para cubrir el contenedor */
        }

        .contenedor-1a {
            width: 850px;
            /* Ancho del contenedor */
            height: 550px;
            /* Altura del contenedor */
            border-radius: 20px;
            /* Bordes redondeados */
            overflow: hidden;
            /* Oculta el contenido que se desborda */
            margin: 0% auto;
            /* Centra en medio de la página */
            background-image: linear-gradient(to top, #4F7CAC 100%, transparent 100%),
                linear-gradient(to left, #4F7CAC 100%, transparent 100%),
                linear-gradient(to top, #4F7CAC 50%, transparent 50%);
            /* Combina tres gradientes lineales para pintar las partes superior, izquierda e inferior */
            background-size: 100% 2px, 2px 100%, 100% 2px;
            /* Tamaño de cada gradiente (ancho x alto) */
            background-repeat: no-repeat;
            /* Evita que los gradientes se repitan */
            padding: 30px;
        }

        .saludo {
            font-family: 'Arial', sans-serif;
            font-size: 20px;
            font-weight: bold;
            color: black;
            padding: 5px;
            margin-top: 0px;
        }

        .cursos-p1 {
            font-family: 'Arial', sans-serif;
            font-size: 19px;
            font-weight: bold;
            color: #2E3532;
            padding: 5px;
            margin-top: 0px;
            margin-left: 5%;
            /* Centra en medio de la página */
        }

        .prices-1 {
            padding: 5px;
            /* Espacio interno */
        }
        /*********************************************************************************************/

       
        /**************************************************************************************************** */

        .disponibilidad {
            width: 90%;
            height: auto;
            background-color: white;
            border-radius: 20px;
            margin: 3% auto;
            /* Centra en medio de la página */
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
            display: flex;
            padding: 10px;
        }

        /* Estilos para cada zona */
        .calendarioZona,
        .horarioZona,
        .resumenZona {
            flex: 1;
            /* Ocupa el mismo espacio */
            margin: 0 10px;
            /* Margen entre las zonas */
            background-color: white;
            /* Color de fondo */
            padding: 20px;
            /* Espacio interno */
            border-radius: 10px;
            /* Bordes redondeados */
            /*border: 1px solid #ccc;*/
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        td {
            cursor: pointer;
        }

        td:hover {
            background-color: #f0f0f0;
        }

        .boton-iniciar {
            border-radius: 20px;
            /* Bordes redondeados */
            background-color: #4F7CAC;
            /* Color de fondo azul */
            color: white;
            /* Color del texto blanco */
            padding: 1px 5px;
            /* Espacio interno */
            border: none;
            /* Sin borde */
            cursor: pointer;
            /* Cursor de puntero */
            transition: background-color 0.3s;
            /* Transición suave del color de fondo */
            width: 20%;
            margin-top: 10px;
        }

        /* Cambiar el color de fondo cuando el cursor pasa sobre el botón */
        .boton-iniciar:hover {
            background-color: #2E3532;
            /* Color de fondo azul más oscuro */
        }

        .unavailable-day {
            background-color: #C6C6C6;
        }

        .available-day {
            background-color: #C1FFA2;
        }

        .diasDisponibles {
            background-color: #C1FFA2;
            width: 20px;
            height: 20px;
            border-radius: 20px;
        }

        /* Estilo para los botones de horarios */
        .button-horario {
            background-color: white;
            color: black;
            border: 1px solid rgba(0, 0, 0, 0.1);
            border-radius: 20px;
            /* Ajusta el radio según lo necesites */
            padding: 10px 20px;
            margin: 5px;
            cursor: pointer;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
            /* Efecto de sombreado */
        }

        .button-horario:hover {
            background-color: #f0f0f0;
            /* Cambia el color de fondo al pasar el ratón */
        }

        .button-agendar {
            background-color: #4F7CAC;
            color: white;
            border: 1px solid rgba(0, 0, 0, 0.1);
            border-radius: 20px;
            /* Ajusta el radio según lo necesites */
            padding: 10px 20px;
            margin: 5px;
            cursor: pointer;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
            /* Efecto de sombreado */
        }

        .button-agendar:hover {
            background-color: #2E3532;
            /* Cambia el color de fondo al pasar el ratón */
        }

        .line-spacing {
            line-height: 0.5;
        }
    </style>

    <!--AREAS APRENDISAJE CARRUCEL-->
    <script>
        $('.carousel').each(function () {
            var $carousel = $(this);
            $carousel.on('slide.bs.carousel', function (e) {
                var $e = $(e.relatedTarget);
                var idx = $e.index();
                var itemsPerSlide = 4;
                var totalItems = $('.carousel-item', $carousel).length;
                if (idx >= totalItems - (itemsPerSlide - 1)) {
                    var it = itemsPerSlide - (totalItems - idx);
                    for (var i = 0; i < it; i++) {
                        if (e.direction == "left") {
                            $('.carousel-item', $carousel).eq(i).appendTo('.carousel-inner', $carousel);
                        } else {
                            $('.carousel-item', $carousel).eq(0).appendTo('.carousel-inner', $carousel);
                        }
                    }
                }
            });
            $carousel.carousel({
                interval: 2000
            });
        });

        $(document).ready(function () {
            /* show lightbox when clicking a thumbnail */
            $('a.thumb').click(function (event) {
                event.preventDefault();
                var content = $('.modal-body');
                content.empty();
                var title = $(this).attr("title");
                $('.modal-title').html(title);
                content.html($(this).html());
                $(".modal-profile").modal({
                    show: true
                });
            });
        });
    </script>

</head>

<body>

    <!--
    <header class="header">
        <div class="menu container">
            <img src="images/logo-aerobotlearning.png" alt="Descripción de la imagen" />
        </div>
    </header>
--->

    <?php include 'Views/contenido/header.php'; ?>

    <p class="custom-text">Portal de
        <?php echo $nombreDocente; ?>
    </p>
    <!--
    <div id="section1"></div>
    -->
    <div class="image-container">
        <?php if (pathinfo($fotoDocente, PATHINFO_EXTENSION) === 'mp4'): ?>
            <video id="video" controls>
                <source src="<?php echo $fotoDocente; ?>" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        <?php else: ?>
            <img src="<?php echo $fotoDocente; ?>" alt="Descripción de la imagen">
        <?php endif; ?>
    </div>
    <div class="contenedor-1a">
        <p class="saludo">¡Hola, soy
            <?php echo $nombreDocente; ?>!
        </p>
        <p>
            <?php echo $descripcionDocente; ?>
        </p>
        <p class="saludo">¿En qué áreas te puedo ayudar?</p>
        <p class="line-spacing">
            <?php echo nl2br($texto_con_saltos_areasDocente); ?>
        </p>
        <p class="saludo">Hobbies</p>
        <p class="line-spacing">
            <?php echo nl2br($texto_con_saltos_hobiesDocente); ?>
        </p>
    </div>
    <p class="cursos-p1">¿Qué otros cursos imparte
        <?php echo $nombreDocente; ?>?
    </p>
    <div id="cursos-slider">
        <div class="container-fluid">
            <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="9000">
                <div class="carousel-inner row w-100 mx-auto" role="listbox">
                    <?php foreach ($fotosCursos as $index => $fotoCurso): ?>
                        <div class="carousel-item col-md-3 <?php echo $index === 0 ? 'active' : ''; ?>">
                            <div class="panel panel-default">
                                <div class="prices-1">
                                    <div id="image-box">
                                        <img src="<?php echo $fotoCurso; ?>" alt="Descripción de la imagen">
                                        <button class="clase-muestra">
                                            <span>Clase muestra</span>
                                        </button>
                                        <button class="suscripcion">
                                            <span>proximamente</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next text-faded" href="#carouselExample" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

    <!--DISPONIBILIDAD-->
    <div class="disponibilidad">
        <div class="calendarioZona">
            <div class="encuesta " id="calendar"></div>
            <center>
                <button onclick="prevMonth()" class="boton-iniciar">Anterior</button>
                <button onclick="nextMonth()" class="boton-iniciar">Siguiente</button>
            </center>

            <div class="diasDisponibles"></div>
            <p>Dias disponibles</p>

        </div>
        <div class="horarioZona">

        </div>
        <div class="resumenZona">
            <form action="index.php?c=Usuarios&a=apartarCita" method="post" enctype="multipart/form-data">
                <div class="encuesta3 inline">
                    <h3>Resumen</h3>
                    <hr>
                    <p id="p1">Fecha</p>
                    <p id="p2">Hora: [Seleccionar]</p>
                    <input type="hidden" name="fecha_seleccionada" id="fecha_seleccionada">
                    <input type="hidden" name="hora_seleccionada" id="hora_seleccionada">
                    <input type="hidden" name="idDocente" value="<?php echo $idDocente; ?>">
                </div>
                <button class="button-agendar" name="Agendar" value="Agendar">Agendar</button>
            </form>
        </div>
    </div>



    <script>
        //CALENDARIO
        const fechasDisponibles = <?php echo json_encode($fechasDisponibles); ?>;
        console.log(fechasDisponibles);
        const fechasHorasDisponibles = <?php echo json_encode($fechasHorasDisponibles); ?>;
        console.log(fechasHorasDisponibles);

        function createCalendar(year, month) {
            const monthNames = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
            const currentDate = new Date(year, month - 1, 1);
            const firstDayOfMonth = currentDate.getDay();
            const daysInMonth = new Date(year, month, 0).getDate();

            let html = '<h2>' + monthNames[month - 1] + ' ' + year + '</h2>';
            html += '<table>';
            html += '<tr><th>Domingo</th><th>Lunes</th><th>Martes</th><th>Miércoles</th><th>Jueves</th><th>Viernes</th><th>Sábado</th></tr>';
            html += '<tr>';

            let dayCounter = 1;

            for (let i = 0; i < 7; i++) {
                if (i < firstDayOfMonth) {
                    html += '<td></td>';
                } else {
                    // Extraer el día actual del bucle
                    const currentDate = new Date(year, month - 1, dayCounter);
                    const currentDay = currentDate.getDate();
                    //Convierto formato Fri Mar 01 2024 00:00:00 GMT-0600 (hora estándar central) a YYYY-MM-DD
                    var fechaFormateada = formatearFecha(currentDate);
                    // Verificar si el día está disponible
                    const isAvailable = fechasDisponibles.includes(fechaFormateada);
                    console.log(fechaFormateada);
                    console.log(fechasDisponibles.includes(fechaFormateada));
                    if (isAvailable) {
                        html += '<td class="available-day" onclick="showDay(' + dayCounter + ', ' + month + ', ' + year + ')">' + dayCounter + '</td>';
                    } else {
                        html += '<td class="unavailable-day">' + dayCounter + '</td>';
                    }
                    dayCounter++;
                }
            }

            html += '</tr>';

            for (let i = 0; i < 5; i++) {
                html += '<tr>';
                for (let j = 0; j < 7; j++) {
                    if (dayCounter <= daysInMonth) {
                        const currentDate = new Date(year, month - 1, dayCounter);
                        const currentDay = currentDate.getDate();
                        //Convierto formato Fri Mar 01 2024 00:00:00 GMT-0600 (hora estándar central) a YYYY-MM-DD
                        var fechaFormateada = formatearFecha(currentDate);
                        // Verificar si el día está disponible
                        const isAvailable = fechasDisponibles.includes(fechaFormateada);
                        console.log(fechaFormateada);
                        console.log(fechasDisponibles.includes(fechaFormateada));
                        if (isAvailable) {
                            html += '<td class="available-day" onclick="showDay(' + dayCounter + ', ' + month + ', ' + year + ')">' + dayCounter + '</td>';
                        } else {
                            html += '<td class="unavailable-day">' + dayCounter + '</td>';
                        }
                        dayCounter++;
                    } else {
                        html += '<td></td>';
                    }
                }
                html += '</tr>';
            }

            html += '</table>';
            return html;
        }

        function showDay(day, month, year) {
            const fecha = document.getElementById('p1');
            fecha.innerHTML = "Seleccionaste el: " + day + ' / ' + month + ' / ' + year;
            // Actualizar el valor del campo de entrada oculto para la fecha
            document.getElementById('fecha_seleccionada').value = year + '-' + (month < 10 ? '0' + month : month) + '-' + (day < 10 ? '0' + day : day);
            // Llamar a una función para mostrar los horarios disponibles
            showAvailableTimes(day, month, year);
        }

        function updateCalendar(year, month) {
            const calendarDiv = document.getElementById('calendar');
            calendarDiv.innerHTML = createCalendar(year, month);
        }

        const currentDate = new Date();
        let currentYear = currentDate.getFullYear();
        let currentMonth = currentDate.getMonth() + 1;

        updateCalendar(currentYear, currentMonth);

        function prevMonth() {
            currentMonth--;
            if (currentMonth < 1) {
                currentMonth = 12;
                currentYear--;
            }
            updateCalendar(currentYear, currentMonth);
        }

        function nextMonth() {
            currentMonth++;
            if (currentMonth > 12) {
                currentMonth = 1;
                currentYear++;
            }
            updateCalendar(currentYear, currentMonth);
        }

        //Nuevas funciones 

        function formatearFecha(fechaString) {
            // Crear un objeto Date a partir de la cadena de fecha
            var fecha = new Date(fechaString);

            // Obtener los componentes de la fecha
            var año = fecha.getFullYear();
            var mes = ('0' + (fecha.getMonth() + 1)).slice(-2); // Se agrega 1 al mes ya que enero es 0
            var dia = ('0' + fecha.getDate()).slice(-2);

            // Formatear la fecha en el formato deseado (YYYY-MM-DD)
            var fechaFormateada = año + '-' + mes + '-' + dia;

            return fechaFormateada;
        }

        function showAvailableTimes(day, month, year) {
            // Formatear la fecha seleccionada en el formato YYYY-MM-DD
            const selectedDate = year + '-' + (month < 10 ? '0' + month : month) + '-' + (day < 10 ? '0' + day : day);

            // Filtrar los horarios disponibles para la fecha seleccionada
            const availableTimes = fechasHorasDisponibles.filter(item => item[0] === selectedDate);

            // Mostrar los horarios disponibles en el div horarioZona
            const horarioZona = document.querySelector('.horarioZona');
            horarioZona.innerHTML = '<h3>Horarios Disponibles:</h3>';
            if (availableTimes.length > 0) {
                const div = document.createElement('div');
                div.classList.add('horario-buttons');
                availableTimes.forEach(item => {
                    const button = document.createElement('button');
                    button.classList.add('button-horario');
                    button.textContent = item[1];
                    button.onclick = function () {
                        // Al hacer clic en un horario, actualizar el elemento <p id="p2">Hora</p>
                        document.getElementById('p2').textContent = 'Hora: ' + item[1];
                        // Actualizar el valor del campo de entrada oculto para la hora
                        document.getElementById('hora_seleccionada').value = item[1];
                    };
                    div.appendChild(button);
                });
                horarioZona.appendChild(div);
            } else {
                horarioZona.innerHTML += '<p>No hay horarios disponibles para este día.</p>';
            }
        }


        //FUNCIONES PARA LA PREVISUALIZACION DE VIDEO EN SLIDER***********************************************************++
        // Obtener el video y la imagen de previsualización por sus ID
        const video = document.getElementById('video');
        const preview = document.getElementById('preview');

        // Escuchar el evento 'loadedmetadata' para asegurarse de que el video esté cargado
        video.addEventListener('loadedmetadata', function () {
            // Obtener el cuadro del video en el segundo 0 (puedes ajustar esto si lo deseas)
            video.currentTime = 1;
        });

        // Escuchar el evento 'canplay' para asegurarse de que el video pueda reproducirse
        video.addEventListener('canplay', function () {
            // Capturar un cuadro del video y mostrarlo como una previsualización
            const canvas = document.createElement('canvas');
            canvas.width = video.videoWidth;
            canvas.height = video.videoHeight;
            const ctx = canvas.getContext('2d');
            ctx.drawImage(video, 0, 0, canvas.width, canvas.height);
            preview.src = canvas.toDataURL();
            preview.style.display = 'block';
        });
    </script>

</body>

</html>