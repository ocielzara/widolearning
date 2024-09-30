<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
    <link rel="stylesheet" href="public/styles/main/category.css">
    <!-- Agrega el enlace a Font Awesome para los íconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <section style="margin-top:-50px; position: relative;">
        <?php
        // Incluir el archivo de conexión
        require_once __DIR__ . '/../../../Config/database.php'; // Ajusta esta ruta si es necesario

        // Obtener la conexión usando la clase Conectar
        $conn = Conectar::conexion();

        // Consultar los cursos
        $sql = "SELECT id_curso, icono, nombre FROM cursos"; // Asegúrate de seleccionar el ID del curso
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Mostrar los resultados en contenedor horizontal
            echo '<div class="cursos-container">';
            while ($row = $result->fetch_assoc()) {
                echo '<div class="curso-item" data-id-curso="' . $row['id_curso'] . '" data-nombre-curso="' . htmlspecialchars($row['nombre'], ENT_QUOTES, 'UTF-8') . '">'; // Agregar datos personalizados
                echo '<i class="bx ' . $row['icono'] . ' icono-curso"></i>'; // Usa la clase de icono
                echo '<div class="curso-nombre">' . $row['nombre'] . '</div>'; // Envolver el nombre en un div
                echo '</div>';
            }
            echo '</div>';
        } else {
            echo '<p>No hay cursos disponibles.</p>';
        }

        // Cerrar la conexión
        $conn->close();
        ?>

        <!-- Botones de desplazamiento -->
        <button class="scroll-btn prev-btn">
            <i class="fas fa-chevron-left"></i>
        </button>
        <button class="scroll-btn next-btn">
            <i class="fas fa-chevron-right"></i>
        </button>
    </section>

     <!-- Script para botones de los cursos   -->
    <script src="public/JS/main/category-slider.js"></script>
   
</body>

</html>