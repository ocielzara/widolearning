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
        <div class="sm:w-[90%] sm:h-[20rem] mx-auto">
            <img src="public/images/muestra-cursos/<?php echo $tipo; ?>.png" class="w-full h-full" alt="">
        </div>
    </div>
    <section class="sm:w-[70%] lg:w-[90%] xl:w-[80%] 2xl:w-[70%] mx-auto">
        <div class="mt-20">
            <h1 class="sm:text-4xl text-xl text-[#4F7CAC] font-bold">
                <?php echo ucfirst($nombreCurso); ?>
            </h1>
        </div>

        <div class="bg-[#D7F9FF] sm:mb-10 p-10 h-auto mt-16 rounded-3xl" id="mentorContainer">

        </div>
    </section>
    <script src="public/JS/script.js"></script>
    <script src="public/JS/API.js"></script>
</body>

</html>