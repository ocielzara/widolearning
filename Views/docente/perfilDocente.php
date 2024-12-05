<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="icon" type="image/png" sizes="32x32" href="public/images/home/iconWido.png">
    <link rel="icon" type="image/png" sizes="16x16" href="public/images/home/iconWido.png">
    <link rel="stylesheet" href="styles/output.css">
    <link rel="stylesheet" href="public/styles/styleDocente.css">
    <script async src="https://js.stripe.com/v3/buy-button.js"></script>
</head>

<body class="bg-gray-100 text-gray-800">
    <!--========== HEADER ==========-->
    <?php include 'Views/contenido/Header-footer/header-new.php'; ?>
    <!--========== CONTENIDO ==========-->
    <?php
    session_start();
    $idUsuario = isset($_SESSION['id_usuario']) ? $_SESSION['id_usuario'] : '';
    ?>
    <input type="hidden" id="idUsuario" value="<?php echo htmlspecialchars($idUsuario); ?>">

    <!-- Modal Compra -->
    <div id="myModalCompra" class="modalCompra flex items-center justify-center">
        <div class="modal-contentCompra bg-white p-6 rounded-lg shadow-lg">
            <span class="close text-gray-500 hover:text-red-500">&times;</span>
            <div id="data-mentor-id">
                <h1 id="mentor-dataCompra" class="text-center text-2xl font-bold text-blue-700">Elije tu forma de pago</h1>
                <p id="curso-dataCompra" class="text-center text-lg text-gray-600 mt-4"></p>
                <div class="payment-plans mt-6"></div>
            </div>
        </div>
    </div>

    <main>
        <!-- Header Section -->
        <header class="imagenBackground relative w-full sm:h-screen h-96">
            <div class="absolute inset-0 bg-black bg-opacity-50"></div>
            <div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white mt-5"">
                <div class="w-[75%] mt-20">
                    <h1 id="mentor-name" class="text-4xl sm:text-5xl font-bold text-yellow-400">Nombre del Mentor</h1>
                </div>
                <div class="w-[75%] mt-8 bg-[#114a8f] sm:h-[30rem] rounded-[3rem] overflow-hidden shadow-lg">
                    <img src="" id="mentor-photo" alt="Mentor Photo" class="w-full h-full object-cover">
                </div>
            </div>
        </header>

        <!-- Mentor Bio Section -->
        <section class="w-[75%] mx-auto my-12">
            <div class="sm:border-l-4 border-blue-700 p-6 sm:p-10 bg-white rounded-2xl shadow-md">
                <h1 id="mentor-name2" class="text-3xl font-bold text-gray-800">¡Hola, soy Alondra!</h1>
                <p id="mentor-bio" class="text-lg text-gray-600 mt-4">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                    laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                    ullamcorper suscipit lobortis.
                </p>
            </div>
        </section>

        <!-- Cursos Section -->
        <section class="cursos-section py-16">
            <div class="w-[75%] mx-auto">
                <h1 id="mentor-cursos" class="text-center text-4xl font-bold text-gray-800">Mis Cursos</h1>
                <div id="mentor-cursos-carrusel" class="cursos-carrusel mt-8 flex justify-center flex-wrap gap-6">
                    <!-- Cards de cursos aquí -->
                </div>
            </div>
        </section>
    </main>

    <script src="public/JS/script.js"></script>
    <script src="public/JS/API.js"></script>
    <script>
        window.addEventListener('pageshow', function(event) {
            if (event.persisted) {
                window.location.reload();
            }
        });
    </script>
</body>

</html>
