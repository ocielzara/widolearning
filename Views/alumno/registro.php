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
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background-image: url(images/wido/registro.png);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        color: #DFFAFF;
    }

    .container-form {
        width: 100%;
        height: 100vh;
        display: flex;
        justify-content: space-around;
        transition: all .5s ease-out;
    }

    .formulario {
        width: 1000px;
        padding: 1rem;
        margin: 2rem;
        background-color: rgba(6, 6, 6, 0.7);
        border-radius: 20px;
        display: flex;
    }

    .create-account {
        padding: 2.7rem 0;
        font-size: 1.7rem;
        color: #DFFAFF;
    }

    .datos {
        width: 70%;
        margin: auto;
        margin-bottom: 2rem;
        background-color: transparent;
        border: none;
        border-bottom: #DFFAFF thin solid;
        text-align: center;
        outline: none;
        padding: .2rem 0;
        font-size: .8rem;
        color: #DFFAFF;
    }

    .boton {
        width: 40%;
        margin: auto;
        padding: .7rem;
        border-radius: 2rem;
        background-color: white;
        font-weight: 600;
        margin-top: 3rem;
        font-size: .8rem;
        cursor: pointer;
        color: #222;
        margin-left: 50%;
    }

    .boton:hover {
        background-color: #4F7CAC;
        color: #FEC400;
        /* Color de fondo azul más oscuro */
    }

    /************************************ */

    .formulario input::placeholder {
        color: white;
        /* Color del texto del placeholder */
    }

    .cuenta-gratis {
        color: white;
    }


    .sign-in-btn {
        color: #FFD800;
    }


    .left-content {
        width: 50%;
        border-right: 2px solid #DFFAFF;
        text-align: center;
        /* Aquí estableces el borde derecho de color rojo */
    }

    .right-content {
        width: 50%;
        padding: 2.7rem 0;
        margin-left: 40px;
    }

    h3 {
        margin-bottom: 40px;
    }

    .intereses-container label {
        display: block;
        /* Establece los labels como elementos de bloque */
        margin-bottom: 0.5rem;
        /* Espacio entre cada checkbox y su título */
        margin-left: 120px;
        margin-top: 15px;
    }

    .bottom-content {
        position: absolute;
        /* Posiciona el contenedor de forma absoluta */
        bottom: 3rem;
        /* Coloca el contenedor 20px desde el borde inferior */
        right: 5rem;
        /* Coloca el contenedor 20px desde el borde derecho */
        text-align: right;
        /* Alinea el texto a la derecha dentro del contenedor */
    }


    .cuenta-gratis,
    .sign-in-btn {
        display: inline-block;
        margin-right: 10px;
        /* Espacio entre los elementos si es necesario */
    }

    .intereses-container input {
        background-color: #DFFAFF;
    }


    @media only screen and (max-width: 640px) {
        .container-form {
            height: auto;
            flex-direction: row;
        }

        .formulario {
            flex-direction: column;
        }

        .left-content {
            width: 100%;
            border-right: none;
        }

        .right-content {
            width: 100%;
            padding: 0;
        }

        .intereses-container label {
            margin-left: 4rem;
        }

        .bottom-content {
            bottom: 0.5rem;
        }

        .boton {
            margin-left: 20%;
        }
    }
</style>

<body>

    <div class="container-form sign-up">
        <form class="formulario" action="index.php?c=Usuarios&a=registro" method="post">
            <div class="left-content">
                <h2 class="create-account">Crear una cuenta</h2>
                <input class="datos" type="text" name="nombre" placeholder="Nombre completo" required>
                <input class="datos" type="text" name="edad" placeholder="Edad" required>
                <input class="datos" type="email" name="email" placeholder="Correo electronico" required>
                <input class="datos" type="text" name="telefono" placeholder="Whatsapp" maxlength="10" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" required>
                <input class="datos" type="password" name="contraseña" placeholder="Contraseña" required>
            </div>
            <div class="right-content">
                <h3>Selecciona tus intereses:</h3>
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
</body>

</html>