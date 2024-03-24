<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
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
        height: 150vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background-image: url(images/wido/login.png);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        color: white;
    }

    .container-form {
        width: 90%;
        height: 150vh;
        display: flex;
        justify-content: space-around;
        transition: all .5s ease-out;
    }

    .container-form-sesion {
        width: 90%;
        height: 100vh;
        display: flex;
        justify-content: space-around;
        transition: all .5s ease-out;
    }

    .welcome-back {
        display: flex;
        align-items: center;
        text-align: center;
    }

    .message {
        padding: 1rem;
    }

    .message h2 {
        font-size: 1.7rem;
        padding: 1rem 0;
    }

    .message button {
        padding: 1rem;
        font-weight: 400;
        background-color: #FEC400;
        border-radius: 2rem;
        border: none;
        outline: none;
        cursor: pointer;
        font-size: .9rem;
        margin-top: 2rem;
        transition: all .3s ease-in;
        color: #2E3532;
    }

    .message button:hover {
        background-color: white;
    }

    .formulario {
        width: 400px;
        padding: 1rem;
        margin: 2rem;
        background-color: rgba(6, 6, 6, 0.6);
        text-align: center;
        border-radius: 20px;
    }

    .create-account {
        padding: 2.7rem 0;
        font-size: 1.7rem;
        color: white;
    }

    .iconos {
        width: 200px;
        display: flex;
        justify-content: space-around;
        margin: auto;
    }

    .border-icon {
        height: 20px;
        width: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 1.5rem;
        border: solid thin white;
        border-radius: 50%;
        font-size: 1.5rem;
        transition: all .3s ease-in;
    }

    .border-icon:hover {
        background-color: #4a4aee;
        cursor: pointer;
    }

    .cuenta-gratis {
        padding: 2rem 0;
    }

    .formulario input {
        width: 70%;
        display: block;
        margin: auto;
        margin-bottom: 2rem;
        background-color: transparent;
        border: none;
        border-bottom: white thin solid;
        text-align: center;
        outline: none;
        padding: .2rem 0;
        font-size: .8rem;
        color: #ffffff;
    }

    .boton {
        width: 60%;
        margin: auto;
        padding: .7rem;
        border-radius: 2rem;
        background-color: white;
        font-weight: 600;
        margin-top: 3rem;
        font-size: .8rem;
        cursor: pointer;
        color: #222;
    }

    .boton:hover {
        background-color: #2E3532;
        color: white;
    }

    .sign-in {
        position: absolute;
        opacity: 0;
        visibility: hidden;
    }

    .sign-in.active {
        opacity: 1;
        visibility: visible;
    }

    .sign-up.active {
        opacity: 0;
        visibility: hidden;
    }

    /************************************ */

    .welcome-1 {
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
        width: 50%;
        /*border: 1px solid #ccc;*/
    }

    .menu.container img {
        width: 600px;
        /* Establece el ancho deseado para la imagen */
        height: auto;
        /* Hace que la altura se ajuste automáticamente para mantener la proporción original */
        top: 0%;
        /* Posiciona la parte superior de la imagen en el 50% del contenedor */
        left: 2%;
        /* Posiciona la parte izquierda de la imagen en el 50% del contenedor */
    }

    .formulario input::placeholder {
        color: white;
        /* Color del texto del placeholder */
    }

    .cuenta-gratis {
        color: white;
    }

    .intereses-container {
        display: flex;
        margin-bottom: -40px;
    }

    .columna {
        flex: 1;
    }

    .columna input {
        margin-right: 10px;
    }
</style>

<body>

    <div class="welcome-1">
        <div class="menu container">
            <img src="images/wido/wido-logo-09.png" alt="Descripción de la imagen" />
        </div>
    </div>
    <div class="container-form sign-up">
        <div class="welcome-back">
            <div class="message">
                <h2>Bienvenido</h2>
                <p>Si ya tienes una cuenta por favor inicia sesion aqui</p>
                <button class="sign-up-btn">Iniciar Sesion</button>
            </div>
        </div>
        <form class="formulario" action="index.php?c=Usuarios&a=registro" method="post">
            <h2 class="create-account">Crear una cuenta</h2>
            <p class="cuenta-gratis">Crear una cuenta gratis</p>
            <input type="text" name="nombre" placeholder="nombre" required>
            <input type="text" name="edad" placeholder="edad" required>
            <input type="text" name="telefono" placeholder="telefono" maxlength="10"
                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                required>
            <input type="email" name="email" placeholder="email" required>
            <input type="password" name="contraseña" placeholder="contraseña" required>
            <h3>Selecciona tus intereses:</h3>
            <div class="intereses-container">
                <div class="columna">
                    <label for="tecnologia">Tecnología</label><br>
                    <input type="checkbox" id="tecnologia" name="intereses[]" value="tecnología">
                    <label for="artes">Artes</label><br>
                    <input type="checkbox" id="artes" name="intereses[]" value="artes">
                    <label for="diseño">Diseño</label><br>
                    <input type="checkbox" id="diseño" name="intereses[]" value="diseño">
                    <label for="finanzas">Finanzas</label><br>
                    <input type="checkbox" id="finanzas" name="intereses[]" value="finanzas">
                </div>
                <div class="columna">
                    <label for="administracion">Administración</label><br>
                    <input type="checkbox" id="administracion" name="intereses[]" value="administración">
                    <label for="programacion">Programación</label><br>
                    <input type="checkbox" id="programacion" name="intereses[]" value="programación">
                    <label for="videojuegos">Videojuegos</label><br>
                    <input type="checkbox" id="videojuegos" name="intereses[]" value="videojuegos">
                </div>
            </div>
            <button class="boton" type="submit">Registrarse</button>
        </form>
    </div>
    <div class="container-form-sesion sign-in">
        <form class="formulario" action="index.php?c=Usuarios&a=iniciarSesion" method="post">
            <h2 class="create-account">Iniciar Sesion</h2>
            <p class="cuenta-gratis">¿Aun no tienes una cuenta?</p>
            <input type="email" placeholder="Email" name="correo" required>
            <input type="password" placeholder="Contraseña" name="contraseña" required>
            <button class="boton" type="submit">Iniciar sesion</button><br><br>
            <a href="index.php?c=Docentes&a=login" class="boton">Soy master teach</a>
        </form>
        <div class="welcome-back">
            <div class="message">
                <h2>Bienvenido de nuevo</h2>
                <p>Si aun no tienes una cuenta por favor registrese aqui</p>
                <button class="sign-in-btn">Registrarse</button>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
<script>
    const $btnSignIn = document.querySelector('.sign-in-btn'),
        $btnSignUp = document.querySelector('.sign-up-btn'),
        $signUp = document.querySelector('.sign-up'),
        $signIn = document.querySelector('.sign-in');

    document.addEventListener('click', e => {
        if (e.target === $btnSignIn || e.target === $btnSignUp) {
            $signIn.classList.toggle('active');
            $signUp.classList.toggle('active')
        }
    });
</script>

</html>