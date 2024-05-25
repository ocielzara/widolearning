<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="styles/output.css">
    <link rel="stylesheet" href="public/styles/styleDocente.css">
</head>

<body>
    <main>
        <header>
            <div class="imagenBackground w-full sm:h-screen h-1/2">
                <div class="flex flex-col items-center my-auto sm:p-12">
                    <div class="w-[75%] mt-52 mb-10">
                        <h1 class="text-[#FAC400] font-bold text-4xl" id="mentor-name"></h1>
                    </div>
                    <div class="w-[75%] bg-[#114a8f] sm:h-[30rem] rounded-[3rem]">
                        <img src="" id="mentor-photo" class="w-full h-full rounded-[3rem] object-contain" alt="">
                    </div>
                </div>
            </div>
        </header>
        <section>
            <div class="w-[75%] mx-auto my-10">
                <div class="sm:border-l-4 border-[#4F7CAC] sm:p-10 p-5 rounded-[3rem]">
                    <h1 class="font-bold text-3xl" id="mentor-name2">¡Hola, soy Alondra!</h1>
                    <p class="text-2xl my-5">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                        tincidunt ut
                        laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci
                        tation
                        ullamcorper suscipit lobortis</p>
                </div>
            </div>
        </section>
        <section>
            <div class="w-[75%] mx-auto sm:my-24 my-16">
                <div>
                    <h1 class="font-bold text-4xl" id="mentor-cursos"></h1>
                </div>
                <div class="flex p-10 justify-around flex-wrap" id="mentor-cursos-carrusel">

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