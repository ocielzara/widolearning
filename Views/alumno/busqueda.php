<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/styles/tailwind.css">
    <link rel="stylesheet" href="styles/output.css">
    <title>Busqueda</title>
</head>

<body>
    <div>
        <div class="w-[90%] h-[20rem] mx-auto">
            <img src="public/images/muestra-cursos/Diseño área-02.png" class="w-full h-full" alt="">
        </div>
    </div>
    <section class="w-[70%] mx-auto">
        <div class="mt-20">
            <h1 class="text-4xl text-[#4F7CAC] font-bold">
                <?php echo $nombreCurso; ?>
            </h1>
        </div>

        <div class="bg-[#D7F9FF] mb-10 p-10 h-full mt-16 rounded-3xl">
            <div class="flex rounded-3xl p-10 bg-white">
                <div class="w-[23%]">
                    <div class="flex">
                        <div class="w-1/2 h-36">
                            <img src="public/images/docente/alexia.jpg" class="w-full h-full rounded-full" alt="">
                        </div>
                        <div class="w-1/2">
                            <h1 class="w-16 ml-5 my-8 text-center font-semibold">Andrea Hernandez Miramar</h1>
                        </div>
                    </div>
                    <div class="m-5">
                        <p class="font-bold">Especialista en:</p>
                        <div class="flex flex-col py-2">
                            <button class="w-[90%] my-1 bg-slate-200 h-8 rounded-full">Dibujo Manga</button>
                            <button class="w-[90%] mt-2 bg-[#FAC400] h-8 rounded-full">Ver portal</button>
                        </div>
                    </div>
                </div>
                <div>
                    <div>
                        <h1>Calendario</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>