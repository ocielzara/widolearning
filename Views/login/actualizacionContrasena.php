<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/output.css">
    <link rel="icon" type="image/png" sizes="32x32" href="public/images/home/iconWido.png">
    <link rel="icon" type="image/png" sizes="16x16" href="public/images/home/iconWido.png">
    <link rel="stylesheet" href="public/styles/tailwind.css">
    <title>Actualizar Contraseña</title>
</head>

<body>
    <div class="bg-recuperar p-10 flex justify-center items-center my-auto">
        <div class="w-[30rem] h-[30rem] bg-opacity-50 bg-black text-white ml-auto mr-52 p-10 rounded-3xl">
            <form class="w-full h-full flex flex-col" action="index.php?c=Usuarios&a=actualizarContrasena" method="post">
                <h2 class="create-account text-center font-bold my-5 text-[#D7F9FF]">ACTUALIZAR CONTRASEÑA</h2>
                <div class="mb-8 m-5 text-[#D7F9FF] flex flex-col justify-center">
                    <input class="inputForm" type="email" id="email" placeholder="Correo electronico" name="email">
                    <span id="email-error" class="error text-red-600 mt-2"></span>
                </div>
                <div class="mb-8 m-5 text-[#D7F9FF] flex flex-col justify-center">
                    <input class="inputForm" type="password" id="password" placeholder="Contraseña" name="newPassword">
                    <span id="password-error" class="error text-red-600 mt-2"></span>
                </div>
                <div class="text-sm flex justify-around">
                </div>
                <button class="boton w-full h-12 rounded-full mt-8 bg-[#4F7CAC]" type="submit">Actualizar</button>
            </form>
        </div>
    </div>
</body>

</html>