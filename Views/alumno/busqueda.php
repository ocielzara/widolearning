<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/styles/tailwind.css">
    <link rel="stylesheet" href="styles/output.css">
    <title>Informacion</title>
</head>

<body>
    <div>
        <div class="w-[90%] h-[20rem] mx-auto">
            <img src="public/images/muestra-cursos/<?php echo $tipo; ?>.png" class="w-full h-full" alt="">
        </div>
    </div>
    <section class="w-[70%] mx-auto">
        <div class="mt-20">
            <h1 class="text-4xl text-[#4F7CAC] font-bold">
                <?php echo ucfirst($nombreCurso); ?>
            </h1>
        </div>

        <div class="bg-[#D7F9FF] mb-10 p-10 h-full mt-16 rounded-3xl">
            <div class="flex rounded-3xl p-10 bg-white">
                <div class="w-[23%] border-r-2 border-black">
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
                            <button class="w-[90%] mt-2 bg-[#FAC400] h-8 rounded-full" id="navigateDocente">Ver
                                portal</button>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col justify-center mx-auto">
                    <div>
                        <h1 class="text-center font-bold">Puedes seleccionar un dia para ver los horaros disponibles
                        </h1>
                        <label for="countries" class="block mb-2 text-sm font-medium mt-2 text-gray-900">
                            Selecciona un dia</label>
                        <select id="countries"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                            <option value="lunes">Lunes</option>
                            <option value="miercoles">Miercoles</option>
                            <option value="jueves">Jueves</option>
                            <option value="viernes">Viernes</option>
                            <option value="sabado">Sabado</option>
                        </select>

                    </div>
                    <div class="grid grid-cols-4 p-10">
                        <div>
                            <p class="m-2 p-1">6:30 PM</p>
                        </div>
                        <div>
                            <p class="m-2 p-1">6:30 PM</p>
                        </div>
                        <div>
                            <p class="m-2 p-1">6:30 PM</p>
                        </div>
                        <div>
                            <p class="m-2 p-1">6:30 PM</p>
                        </div>
                        <div>
                            <p class="m-2 p-1">6:30 PM</p>
                        </div>
                        <div>
                            <p class="m-2 p-1">6:30 PM</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="public/JS/script.js"></script>

</body>

</html>