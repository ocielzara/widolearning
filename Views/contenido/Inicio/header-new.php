<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link rel="stylesheet" href="public/styles/main/header.css">
    <!--remixicon CSS -->
    <link
        href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css"
        rel="stylesheet" />
    <link rel="stylesheet"
        href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;1,200&display=swap" rel="stylesheet">
 
</head>

<body>

    <header>
        <a href="#" class="logo">
            <img src="public/images/home/logo2.png" alt="Logo" class="logo-img">
        </a>
        <ul class="navbar">
            <li><a href="" class="active">Inicio</a></li>
            <li><a href="">Cursos</a></li>
            <li><a href="">Profesores</a></li>
            <li><a href="">Precios </a></li>
            <li><a href="">Acerca de </a></li>
        </ul>

        <div class="main">
            <a href="#" class="user"  onclick="iniciarSesion()"><i class="ri-user-fill"></i>Sign In</a>
            <a href="index.php?c=Usuarios&a=vistaRegistro">Register</a>
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </header>

    <script src="public/JS/main/header.js"></script>  
</body>

</html>