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
    <link rel="stylesheet" href="styles/output.css">
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
        background-image: url(images/wido/login.png);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        color: #DFFAFF;
    }

    .container-form {
        width: 100%;
        height: auto;
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

    @media only screen and (max-width: 640px) {
        .welcome-back {
            display: none;
        }
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
        color: #DFFAFF;
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
        border-radius: 50px;
    }

    .create-account {
        padding: 2.7rem 0;
        font-size: 1.7rem;
        color: #DFFAFF;
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
        border: solid thin #DFFAFF;
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

    .inputForm {
        width: 70%;
        display: block;
        margin: auto;
        background-color: transparent;
        border: none;
        border-bottom: #DFFAFF thin solid;
        text-align: center;
        outline: none;
        padding: .2rem 0;
        font-size: .9rem;
        color: #DFFAFF;
    }

    .boton {
        width: 60%;
        margin: auto;
        padding: .7rem;
        border-radius: 2rem;
        background-color: #4F7CAC;
        font-weight: 600;
        margin-top: 3rem;
        font-size: .8rem;
        cursor: pointer;
        color: #FEC400;
    }

    .boton-master {
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
        background-color: rgba(255, 255, 255, 0.4);
        /* Color blanco con 50% de opacidad */
    }

    .boton:hover {
        background-color: #4F7CAD;
        color: #FEC400;
        /* Color de fondo azul más oscuro */
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


    .cuenta-gratis,
    .sign-in-btn {
        display: inline-block;
        margin-right: 10px;
        /* Espacio entre los elementos si es necesario */
    }

    .sign-in-btn {
        color: #FFD800;
    }
</style>

<body>

    <div class="welcome-1">
    </div>

    <div class="container-form sign-up">
        <div class="welcome-back">
            <div class="message">
            </div>
        </div>
        <form class="formulario" action="index.php?c=Usuarios&a=iniciarSesion" method="post">
            <h2 class="create-account">¡HOLA DE NUEVO</h2>
            <div class="mb-8">
                <input class="inputForm" type="email" id="email" placeholder="Correo electronico" name="correo">
                <span id="email-error" class="error text-red-600 mt-2"></span>
            </div>
            <div class="mb-8">
                <input class="inputForm" type="password" id="password" placeholder="Contraseña" name="contraseña">
                <span id="password-error" class="error text-red-600 mt-2"></span>
            </div>
            <div class="text-sm flex justify-around">
                <div>
                    <input type="checkbox" onclick="mostrarContraseña()"> Show Password
                </div>
                <div>
                    <a href="index.php?c=Usuarios&a=recuperarContraseña" class="">Olvidaste tu <br> constraseña?</a>
                </div>
            </div>
            <button class="boton" type="submit">Iniciar sesion</button>
            <p class="cuenta-gratis">¿Aun no tienes una cuenta?</p><a href="index.php?c=Usuarios&a=vistaRegistro" class="sign-in-btn">Registrate aqui</a><br><br>
            <a href="index.php?c=Docentes&a=login" class="boton-master">Soy master teach</a>
        </form>
    </div>
    <script src="JS/script.js"></script>
</body>

</html>