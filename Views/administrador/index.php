<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" type="image/png" sizes="32x32" href="public/images/home/iconWido.png">
    <link rel="icon" type="image/png" sizes="16x16" href="public/images/home/iconWido.png">
    <link rel="stylesheet" href="public/styles/tailwind.css">
    <link rel="stylesheet" href="styles/output.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <title>Registro administrador</title>
</head>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Roboto', sans-serif;
    }

    body {
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background-image: url(public/images/wido/registro.png);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        color: #DFFAFF;
    }
    
     select.datos option {
        color: black; /* Color de texto negro para las opciones */
    }
    
     select.datos {
        color: white; /* Color de texto negro para el select */
    }
    
</style>

<body>
    
    <?php include 'Views/contenido/lateralAdministrador.php'; ?>


    <!-- Header -->
    <header class="bg-blue-500 text-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 py-6">
            <h1 class="text-3xl font-bold">Bienvenido al Panel de Administración</h1>
            <p class="mt-2">Gestiona tu plataforma de aprendizaje con facilidad y eficiencia.</p>
        </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 mt-6">
        <!-- Tarjetas informativas -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Tarjeta 1 -->
            <div class="bg-white shadow-lg rounded-lg p-6">
                <div class="flex items-center space-x-4">
                    <div class="p-3 bg-green-100 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-500" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V4a2 2 0 00-2-2H6zm1 10a1 1 0 011-1h4a1 1 0 110 2H8a1 1 0 01-1-1zm0-4a1 1 0 011-1h4a1 1 0 110 2H8a1 1 0 01-1-1z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-700">Total de Cursos</h3>
                        <p class="text-gray-500 mt-1">34 cursos disponibles</p>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 2 -->
            <div class="bg-white shadow-lg rounded-lg p-6">
                <div class="flex items-center space-x-4">
                    <div class="p-3 bg-blue-100 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M10 2a2 2 0 00-2 2v1H5a3 3 0 00-3 3v8a3 3 0 003 3h10a3 3 0 003-3V8a3 3 0 00-3-3h-3V4a2 2 0 00-2-2zm-2 4V4a2 2 0 114 0v2H8z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-700">Total de Estudiantes</h3>
                        <p class="text-gray-500 mt-1">120 estudiantes activos</p>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 3 -->
            <div class="bg-white shadow-lg rounded-lg p-6">
                <div class="flex items-center space-x-4">
                    <div class="p-3 bg-yellow-100 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5 3a1 1 0 011-1h8a1 1 0 011 1v10a1 1 0 01-1 1H6a1 1 0 01-1-1V3z" clip-rule="evenodd" />
                            <path d="M4 14.5a.5.5 0 01.5-.5h11a.5.5 0 01.5.5V15a2 2 0 01-2 2H6a2 2 0 01-2-2v-.5z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-700">Total de Mentores</h3>
                        <p class="text-gray-500 mt-1">10 mentores registrados</p>
                    </div>
                </div>
            </div>
        </div>

    </main>

   
    
    <script src="public/JS/API.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
</body>

</html>