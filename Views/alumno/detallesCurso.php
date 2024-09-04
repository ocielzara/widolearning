<?php
session_start();
$isLoggedIn = isset($_SESSION['id_usuario']) ? true : false;
$nombreUsuario = $isLoggedIn ? $_SESSION['nombre'] : '';
$correo = $isLoggedIn ? $_SESSION['correo_electronico'] : '';
?>

<script>
    var nombreUsuario = "<?php echo $nombreUsuario; ?>";
    var correo = "<?php echo $correo; ?>";
</script>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/styles/tailwind.css">
    <link rel="icon" type="image/png" sizes="32x32" href="public/images/home/iconWido.png">
    <link rel="icon" type="image/png" sizes="16x16" href="public/images/home/iconWido.png">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>


    <link rel="stylesheet" href="styles/output.css">
    <title>Informacion</title>
</head>

<body>
    <?php include 'Views/contenido/lateralUsuario.php'; ?>
    <script>
        var nombreUsuario = <?php echo json_encode($nombreUsuario); ?>;
        var isLoggedIn = <?php echo json_encode($isLoggedIn); ?>;
        console.log("isLoggedIn:", isLoggedIn);
    </script>
    <div>
        <div class="sm:w-[90%] 2xl:h-[20rem] lg:h-[15rem] h-40">
            <img src="public/images/muestra-cursos/<?php echo $tipo; ?>.png" class="w-full h-full" alt="">
        </div>
    </div>
    <section class="sm:w-[70%] lg:w-[90%] xl:w-[80%] 2xl:w-[70%] mx-auto">
        <div class="mt-20">
            <h1 class="sm:text-4xl text-xl text-[#4F7CAC] font-bold">
                <?php echo ucfirst($nombreCurso); ?>
            </h1>
        </div>

        <div class="bg-[#D7F9FF] sm:mb-10 p-10 h-auto mt-16 rounded-3xl" id="mentorContainer"></div>

         <!-- Original Modal -->
        <div id="myModal" class="modal">
            <div class="modal-content">
                <span class="close" style="color: #000000;">&times;</span>
                <div class="p-5" id="data-mentor-id">
                    <h1 class="text-[#4F7CAC] font-bold text-2xl" id="mentor-data">Master Teach : </h1>
                    <p class="modal-parrafo my-8 font-medium" id="curso-data"></p>
                    <div class="p-5 m-5 flex justify-center">
                        <button id="agendarBtn" class="button-modal">Agendar</button>
                        <!--<button class="text-red-600">Cancelar</button>-->
                    </div>
                </div>
            </div>
        </div>
        
        <!-- New Modal for Additional Information -->
<div id="additionalInfoModal" class="modal">
    <div class="modal-content">
        <span class="close" style="color: #000000;">&times;</span>
        <div class="p-5">
            <h1 class="text-[#4F7CAC] font-bold text-2xl">Información Adicional</h1>
            <p class="modal-parrafo my-8 font-medium">Por favor, ingresa tu edad y si tienes conocimientos previos del curso.</p>
            <label for="edad" class="block font-medium">Edad:</label>
            <input type="number" id="edad" name="edad" class="block w-full p-2 border rounded mb-4">

            <label for="conocimientos" class="block font-medium">¿Cuentas con conocimientos previos?</label>
            <select id="selectConocimientos" name="conocimientos" class="block w-full p-2 border rounded mb-4">
                        <option value="si">Si</option>
                        <option value="No">No</option>
                        <option value="Un poco">Un poco</option>
            </select>
            <!--<textarea id="conocimientos" name="conocimientos" class="block w-full p-2 border rounded mb-4"></textarea>-->

            <div class="p-5 m-5 flex justify-center">
                <button id="nextBtn" class="button-modal">Siguiente</button>
            </div>
        </div>
    </div>
</div>

        
         <!-- New Modal-->
        <div id="agendadoModal" class="modal">
            <div class="modal-content">
                <span class="close" style="color: #000000;">&times;</span>
                <img id="modalImage" src="public/images/wido/pantallaEmergenteAgendado.png" alt="Agendado" class="w-full h-full object-cover">
            </div>
        </div>
        
        <!-- New Modal No Inicio sesion-->
        <div id="loginModal" class="modal">
            <div class="modal-content">
                <span class="close" style="color: #000000;">&times;</span>
                <img id="modalImageNoInicio" src="public/images/wido/avisoInicioSesion.png" alt="Agendado" class="w-full h-full object-cover">
            </div>
        </div>
    </section>

    <script src="public/JS/script.js"></script>
    <script src="public/JS/API.js"></script>
</body>

</html>