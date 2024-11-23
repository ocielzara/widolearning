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
    <title>Index</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<style>
    :root {
        --clr-primary: #7380ec;
        --clr-danger: #ff7782;
        --clr-success: #41f1b6;
        --clr-white: #fff;
        --clr-dark: #363949;

        --card-border-radius: 2rem;
        --border-radius-1: 0.4rem;

        --card-padding: 1.8rem;
    }

    html,
    body {
        background-color: #f6f6f9;
        margin: 0;
        padding: 0;
        font-family: 'Roboto', sans-serif;
    }

    .administrador-main h1 {
        color: #000;
        /* Color negro */
        font-size: 2rem;
        /* Tamaño más grande, ajusta según lo necesites */
        font-weight: bold;
        /* Para hacerlo más destacado */
    }


    .administrador-main h2 {
        color: #000;
        /* Color negro */
        font-size: 1.2rem;
        /* Tamaño más grande, ajusta según lo necesites */
        font-weight: bold;
        /* Para hacerlo más destacado */
    }

    .administrador {
        background: #f6f6f9;
    }

    .administrador-main {
        margin-top: 1.4rem;
        width: auto;
    }


    .administrador-main .insights {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 1.6rem;
    }

    .administrador-main .insights>div {
        background-color: var(--clr-white);
        padding: var(--card-padding);
        border-radius: var(--card-border-radius);
        margin-top: 1rem;
        box-shadow: var(--box-shadow);
        transition: all .3s ease;
    }

    .administrador-main .insights>div:hover {
        box-shadow: none;
    }

    .administrador-main .insights>div span {
        background: #4f7cac;
        padding: 0.5rem;
        border-radius: 50%;
        color: var(--clr-white);
        font-size: 2rem;
    }

    .administrador-main .insights>div.expenses span {
        background: #FEC400;
    }

    .icon {
        width: 40px;
        height: 40px;
    }

    .administrador-main .insights>div.income span {
        background: #2e3532;
    }

    .administrador-main .insights>div .middle {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .administrador-main .insights>div .middle h1 {
        font-size: 1.6rem;
    }

    .administrador-main h1 {
        color: var(--clr-dark);
    }

    .administrador-main .insights h3 {
        color: var(--clr-dark);
    }

    .administrador-main .insights p {
        color: var(--clr-dark);
    }

    .administrador-main .insights .progress {
        position: relative;
        height: 78px;
        width: 78px;
        border-radius: 50px;
        overflow: hidden;
        /* Oculta cualquier contenido que sobresalga */
    }

    .administrador-main .recent_order_mentor table {
        background-color: var(--clr-white);
        width: 100%;
        border-radius: var(--card-border-radius);
    }

    .administrador-main .recent_order_curso table {
        background-color: var(--clr-white);
        width: 100%;
        border-radius: var(--card-border-radius);
    }

    thead th {
        text-align: left;
        padding: 10px;
        /* Añade algo de padding para que el texto no se vea pegado a los bordes */
        background-color: #d5d5d5;
        /* Cambia el color de fondo del encabezado si es necesario */
    }

    tbody td {
        text-align: left;
        padding: 10px;
        background-color: var(--clr-white);
        border-top: 1px solid #e0e0e0;
        /* Línea para separar las filas */
    }

    thead th:nth-child(1),
    tbody td:nth-child(1) {
        width: 20%;
        /* La primera columna será del 20% */
    }

    thead th:nth-child(2),
    tbody td:nth-child(2) {
        width: 15%;
        /* La segunda columna será del 15% */
    }

    thead th:nth-child(3),
    tbody td:nth-child(3) {
        width: 20%;
        /* La tercera columna será del 20% */
    }

    thead th:nth-child(4),
    tbody td:nth-child(4) {
        width: 15%;
        /* La cuarta columna será del 15% */
    }

    thead th:nth-child(5),
    tbody td:nth-child(5) {
        width: 15%;
        /* La quinta columna será del 15% */
    }

    thead th:nth-child(6),
    tbody td:nth-child(6) {
        width: 15%;
        /* La sexta columna será del 15% */
    }


    .progress-bar {
        width: 100%;
        background-color: #e0e0e0;
        border-radius: 20px;
        height: 20px;
        margin-top: 5px;
    }

    .progress-fill {
        height: 100%;
        border-radius: 20px;
    }

    #interesesPieChart {
        display: block;
        /* Asegúrate de que se comporte como un bloque */
        margin: 0 auto;
        /* Centrar el canvas horizontalmente */
        width: 500px;
        /* Ajusta el ancho visual */
        height: 500px;
        /* Ajusta la altura visual */
    }

    .recent_order_mentor,
    .recent_order_curso {
        position: relative;
        padding-top: 10px;
    }

    h2 {
        font-size: 1.2rem;
        background-color: #4F7CAC;
        color: #fff;
        margin: 0;
        padding: 10px;
        border-radius: 8px;
        text-align: left;
    }

    .toggle-icon {
        position: absolute;
        right: 20px;
        top: 15px;
        font-size: 1.2rem;
        color: #fff;
        cursor: pointer;
        transition: transform 0.3s ease;
    }

    .toggle-table {
        display: table;
        /* Las tablas están visibles por defecto */
        margin-top: 10px;
        width: 100%;
        border-collapse: collapse;
    }

    table,
    th,
    td {
        border: 1px solid #ddd;
        padding: 8px;
    }

    th {
        background-color: #f4f4f4;
        font-weight: bold;
    }

    td {
        text-align: center;
    }
    .btn-historial {
        display: inline-block;
        padding: 10px 20px;
        font-size: 16px;
        font-weight: bold;
        color: white;
        background-color: #4F7CAC;
        border: none;
        border-radius: 5px;
        text-align: center;
        cursor: pointer;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        transition: background-color 0.3s ease, transform 0.2s ease;
    }

    .btn-historial:hover {
        background-color: #4F7CAC;
        transform: translateY(-2px);
    }

    .btn-historial:active {
        background-color: #004089;
        transform: translateY(0);
    }
</style>

<body>

    <?php include 'Views/contenido/lateralAdministrador.php'; ?>
    <!-- Main Content -->
    <main class="administrador">
        <div class="administrador-main">
            <h1>Bienvenido al Panel de Administración</h1>
            <p class="mt-2">Gestiona tu plataforma de aprendizaje con facilidad y eficiencia.</p>

            <button class="btn-historial" onclick="redirigirHistorial()">Ver Historial</button>

            <div class="insights">

                <div class="sales">
                    <span class="material-symbols-sharp"><i class='icon bx bx-face'></i></span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total alumnos</h3>
                            <h1 id="totalAlumnos">200</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle r="30" cy="40" cx="40"></circle>
                            </svg>
                            <div class="number">80%</div>
                        </div>
                    </div>
                    <small>Ultimo minuto</small>
                </div>

                <div class="expenses">
                    <span class="material-symbols-sharp"><i class='icon bx bxs-face'></i></span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total mentores</h3>
                            <h1 id="totalMentores">200</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle r="30" cy="40" cx="40"></circle>
                            </svg>
                            <div class="number">80%</div>
                        </div>
                    </div>
                    <small>Ultimo minuto</small>
                </div>

                <div class="income">
                    <span class="material-symbols-sharp"><i class='icon bx bxs-food-menu'></i></span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total Cursos</h3>
                            <h1 id="totalCursos">200</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle r="30" cy="40" cx="40"></circle>
                            </svg>
                            <div class="number">80%</div>
                        </div>
                    </div>
                    <small>Ultimo minuto</small>
                </div>

            </div>

            <div class="recent_order_mentor">
                <h2>Top mentores</h2>
                <span id="icon-mentores" class="toggle-icon" onclick="toggleTable('table-mentores', 'icon-mentores')">&#9650;</span>
                <table id="table-mentores" class="toggle-table">
                    <thead>
                        <tr>
                            <th>Nombre Mentor</th>
                            <th>Inscripciones</th>
                            <th>Progreso</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Las filas se llenarán dinámicamente aquí -->
                    </tbody>
                </table>
            </div>

            <div class="recent_order_curso">
                <h2>Top cursos</h2>
                <span id="icon-cursos" class="toggle-icon" onclick="toggleTable('table-cursos', 'icon-cursos')">&#9650;</span>
                <table id="table-cursos" class="toggle-table">
                    <thead>
                        <tr>
                            <th>Nombre Curso</th>
                            <th>Inscripciones</th>
                            <th>Progreso</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Las filas se llenarán dinámicamente aquí -->
                    </tbody>
                </table>
            </div>

            <div class="recent_order_curso">
                <h2>Historial de clases muestra</h2>
                <span id="icon-historial" class="toggle-icon" onclick="toggleTable('table-historial', 'icon-historial')">&#9650;</span>
                <table id="table-historial" class="toggle-table">
                    <thead>
                        <tr>
                            <th>Usuario</th>
                            <th>Correo Electrónico</th>
                            <th>Teléfono</th> <!-- Encabezado de teléfono -->
                            <th>Curso</th>
                            <th>Profesor</th>
                            <th>Fecha de Creación</th>
                            <th>Estado</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php if (!empty($nuevasInscripciones)): ?>
                            <?php foreach ($nuevasInscripciones as $inscripcion): ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($inscripcion['NombreUsuario']); ?></td>
                                    <td><?php echo htmlspecialchars($inscripcion['CorreoUsuario']); ?></td>
                                    <td><?php echo htmlspecialchars($inscripcion['telefono']); ?></td> <!-- Nueva columna de teléfono -->
                                    <td><?php echo htmlspecialchars($inscripcion['NombreCurso']); ?></td>
                                    <td><?php echo htmlspecialchars($inscripcion['NombreMentor']); ?></td>
                                    <td><?php echo htmlspecialchars($inscripcion['fecha']); ?></td>
                                    <td><?php echo htmlspecialchars($inscripcion['estado']); ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="7">No hay inscripciones recientes</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>

                </table>
            </div>

            <canvas id="interesesPieChart"></canvas>
    </main>

    <script>
        function toggleTable(tableId, iconId) {
            const table = document.getElementById(tableId);
            const icon = document.getElementById(iconId);

            // Alterna la visibilidad de la tabla
            table.style.display = (table.style.display === 'none') ? 'table' : 'none';

            // Cambia el ícono del triángulo
            icon.innerHTML = table.style.display === 'none' ? '&#9660;' : '&#9650;'; // ▼ y ▲
        }
    </script>

    <script src="public/JS/API.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
</body>

</html>