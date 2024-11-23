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
</head>

<body>
    <!--========== HEADER ==========-->
    <?php include 'Views/contenido/Header-footer/header-new.php'; ?>
    <!--==========         ==========-->

    <div class="imagenBackground w-full sm:h-screen h-1/2">
        <div class="flex flex-col items-center my-auto sm:p-12">
            <div class="w-[75%] mt-52 mb-10 clear text-center">
                <h1 class="text-[#FAC400] font-bold text-4xl drop-shadow-md" id="mentor-name"></h1>
            </div>
            <div class="w-[75%] bg-[#114a8f] sm:h-[30rem] rounded-[3rem] overflow-hidden shadow-lg hover:shadow-2xl transition-shadow duration-300">
                <img src="" id="mentor-photo" class="w-full h-full object-cover" alt="">
            </div>
        </div>
    </div>


    <section>
        <div class="mentor-card w-[75%] mx-auto my-10 p-5 sm:p-10 rounded-[3rem] shadow-lg bg-white relative border-l-8">
            <h1 class="font-bold text-3xl text-gray-800 mb-5" id="mentor-name2">¡Hola, soy Alondra!</h1>
            <br>
            <p class="text-2xl text-gray-700 leading-relaxed" id="mentor-bio">
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
                dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                suscipit lobortis.
            </p>
        </div>

    </section>

    <section class="cursos-section">
        <div class="cursos-container">
            <h1 class="cursos-title" id="mentor-cursos">Cursos</h1>
            <div class="cursos-carrusel" id="mentor-cursos-carrusel">
                <!-- Aquí irán los cursos -->
            </div>

            <div id="pdfModal" class="pdf-modal">
                <div id="pdfContent" class="pdf-content">
                    <span class="close" onclick="closePDF()">&times;</span>
                    <embed id="pdfEmbed" src="" type="application/pdf" />
                </div>
            </div>
        </div>
    </section>



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