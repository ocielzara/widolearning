<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" type="image/png" sizes="32x32" href="public/images/home/iconWido.png">
    <link rel="icon" type="image/png" sizes="16x16" href="public/images/home/iconWido.png">
    <link rel="stylesheet" href="public/styles/tailwind.css">
    <link rel="stylesheet" href="styles/output.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <title>Registro administrador</title>
</head>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Roboto', sans-serif;
    }

    body {
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background-image: url(public/images/wido/registro.png);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        color: #DFFAFF;
    }
    
     select.datos option {
        color: black; /* Color de texto negro para las opciones */
    }
    
     select.datos {
        color: white; /* Color de texto negro para el select */
    }
    
</style>

<body>
    

    <div class="container-form sign-up">
        <form class="formulario" method="post" id="registroFormMentores" enctype="multipart/form-data">
            <div class="left-content">
                <h2 class="create-account">Registrar Mentor</h2>
                <div class="flex flex-col mb-8">
                    <input class="datos" id="nombreMentor" type="text" name="nombreMentor" placeholder="Nombre completo">
                    <span id="nombreMentor-error" class="error-message text-red-600 text-base mt-2"></span>
                </div>
                <!--
                 <div class="flex flex-col mb-8">
                    <select id="selectArea" name="area" class="datos">
                        <option value="administracion">administracion</option>
                        <option value="dibujo-ilustracion">dibujo-ilustracion</option>
                        <option value="videojuegos">videojuegos</option>
                        <option value="data-mining">data-mining</option>
                        <option value="programacion">programacion</option>
                        <option value="salud">salud</option>
                        <option value="idiomas">idiomas</option>
                        <option value="musica">musica</option>
                        <option value="otros">otros</option>
                    </select>
                </div>
                -->
                 <!-- Agregar select para cursos -->
                <div class="flex flex-col mb-8">
                    <select id="selectCursos" name="cursoId" class="datos">
                        <option value="">Seleccione un curso</option>
                        <!-- Las opciones se llenarán dinámicamente con JavaScript -->
                    </select>
                </div>
                <div class="flex flex-col mb-8">
                    <input class="datos" id="correoMentor" type="email" name="emailMentor" placeholder="Correo electronico">
                    <span id="correoMentor-error" class="error-message text-red-600 text-base mt-2"></span>
                </div>
                <div class="flex flex-col mb-8">
                    <input class="datos" id="tipoMentor" type="text" name="tipoMentor" placeholder="Curso o Asesoria">
                    <span id="tipoMentor-error" class="error-message text-red-600 text-base mt-2"></span>
                </div>
                <div class="flex flex-col mb-8">
                    <input class="datos" id="telefonoMentor" type="text" name="telefonoMentor" placeholder="Whatsapp" maxlength="10" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                    <span id="telefonoMentor-error" class="error-message text-red-600 text-base mt-2"></span>
                </div>
                <div class="flex flex-col mb-8">
                    <input class="datos" type="text" id="acercaMentor" name="acercaMentor" placeholder="Informacion y hobbies del docente">
                    <span id="acercaMentor-error" class="error-message text-red-600 text-base mt-2"></span>
                </div>
            </div>
            <div class="right-content">
                <div class="flex flex-col mb-8">
                     Tarjeta (nombre)
                    <input class="datos" type="file" id="fotoMentorPerfil" name="fotoMentorPerfil" required>
                </div>
                <div class="flex flex-col mb-8">
                    Perfil (nombre-profile)
                    <input class="datos" type="file" id="fotoMentorTarejta" name="fotoMentorTarjeta" required>
                </div>
                <div class="flex flex-col mb-8">
                    Portada (nombre-description)
                    <input class="datos" type="file" id="fotoMentorPortada" name="fotoMentorPortada" required>
                </div>
                <button class="boton" type="submit">Registrarse</button>
            </div>
        </form>
    </div>
    <script src="public/JS/API.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
</body>

</html>