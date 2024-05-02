<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/output.css">
    <title>Recuperar Contraseña</title>
</head>

<body>
    <div class="bg-[url('public/images/wido/login.png')] w-full h-screen">
        <form class="formulario" action="index.php?c=Usuarios&a=iniciarSesion" method="post">
            <h2 class="create-account">¡HOLA DE NUEVO</h2>
            <div class="mb-8">
                <input class="inputForm" type="email" id="email" placeholder="Correo electronico" name="correo">
                <span id="email-error" class="error text-red-600 mt-2"></span>
            </div>
            <div class="text-sm flex justify-around">
            </div>
            <button class="boton" type="submit">Recuperar</button>
            <p class="cuenta-gratis">¿Aun no tienes una cuenta?</p><a href="index.php?c=Usuarios&a=vistaRegistro" class="sign-in-btn">Registrate aqui</a><br><br>
        </form>
    </div>
</body>

</html>