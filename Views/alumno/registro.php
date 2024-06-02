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
    <link rel="icon" type="image/png" sizes="32x32" href="public/images/home/iconWido.jpeg">
    <link rel="icon" type="image/png" sizes="16x16" href="public/images/home/iconWido.jpeg">
    <link rel="stylesheet" href="public/styles/tailwind.css">
    <link rel="stylesheet" href="styles/output.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <title>Bienvenido a mi Formulario</title>
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
</style>

<body>

    <div class="container-form sign-up">
        <form class="formulario" method="post" id="registroForm">
            <div class="left-content">
                <h2 class="create-account">Crear una cuenta</h2>
                <div class="flex flex-col mb-8">
                    <input class="datos" id="nombre" type="text" name="nombre" placeholder="Nombre completo">
                    <span id="nombre-error" class="error-message text-red-600 text-base mt-2"></span>
                </div>
                <div class="flex flex-col mb-8">
                    <input class="datos" id="edad" type="text" name="edad" placeholder="Edad">
                    <span id="edad-error" class="error-message text-red-600 text-base mt-2"></span>
                </div>
                <div class="flex flex-col mb-8">
                    <input class="datos" id="correo" type="email" name="email" placeholder="Correo electronico">
                    <span id="correo-error" class="error-message text-red-600 text-base mt-2"></span>
                </div>
                <div class="flex flex-col mb-8">
                    <input class="datos" id="telefono" type="text" name="telefono" placeholder="Whatsapp" maxlength="10" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                    <span id="telefono-error" class="error-message text-red-600 text-base mt-2"></span>
                </div>
                <div class="flex flex-col mb-8">
                    <input class="datos" type="password" id="contraseña" name="contraseña" placeholder="Contraseña">
                    <span id="contraseña-error" class="error-message text-red-600 text-base mt-2"></span>
                </div>
            </div>
            <div class="right-content">
                <h3>Selecciona tus intereses:</h3>
                <span id="intereses-error" class="text-red-600 text-base mt-2"></span>
                <div class="intereses-container">
                    <label for="tecnologia">
                        <input type="checkbox" id="tecnologia" name="intereses[]" value="tecnología">
                        Tecnología
                    </label>
                    <label for="artes">
                        <input type="checkbox" id="artes" name="intereses[]" value="artes">
                        Artes
                    </label>
                    <label for="diseño">
                        <input type="checkbox" id="diseño" name="intereses[]" value="diseño">
                        Diseño
                    </label>
                    <label for="finanzas">
                        <input type="checkbox" id="finanzas" name="intereses[]" value="finanzas">
                        Finanzas
                    </label>
                    <label for="administracion">
                        <input type="checkbox" id="administracion" name="intereses[]" value="administración">
                        Administración
                    </label>
                    <label for="programacion">
                        <input type="checkbox" id="programacion" name="intereses[]" value="programación">
                        Programación
                    </label>
                    <label for="videojuegos">
                        <input type="checkbox" id="videojuegos" name="intereses[]" value="videojuegos">
                        Videojuegos
                    </label>
                </div>
                <button class="boton" type="submit">Registrarse</button>
            </div>
        </form>
    </div>
    <div class="bottom-content">
        <p class="cuenta-gratis">Ya tengo una cuenta</p>
        <a href="index.php?c=Usuarios&a=login" class="sign-in-btn">Iniciar sesion</a>
    </div>
    <script src="public/JS/API.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
</body>

</html>