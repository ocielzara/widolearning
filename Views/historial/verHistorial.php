<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historial de Clases Muestra</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        h1, h2 {
            text-align: center;
            color: #333;
        }

        .recent_order_curso {
            width: 80%;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 8px;
            
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            
        }

        th, td {
            text-align: left;
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #4F7CAC;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .button-container {
            text-align:start;
            margin-top: 20px;
            
        }

        .back-button {
            padding: 10px 20px;
            font-size: 16px;
            color: white;
            background-color: #4F7CAC;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .back-button:hover {
            background-color: #0056b3;
        }
    </style>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</head>
<body>
    <div class="recent_order_curso">
        <h2>Historial de clases muestra</h2>
        <div class="button-container">
            <button class="back-button" onclick="goBack()">Regresar</button>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Usuario</th>
                    <th>Correo Electrónico</th>
                    <th>Teléfono</th>
                    <th>Curso</th>
                    <th>Profesor</th>
                    <th>Fecha de Creación</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($historial)): ?>
                    <?php foreach ($historial as $item): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($item['NombreUsuario']); ?></td>
                            <td><?php echo htmlspecialchars($item['CorreoUsuario']); ?></td>
                            <td><?php echo htmlspecialchars($item['telefono']); ?></td>
                            <td><?php echo htmlspecialchars($item['NombreCurso']); ?></td>
                            <td><?php echo htmlspecialchars($item['NombreMentor']); ?></td>
                            <td><?php echo htmlspecialchars($item['fecha']); ?></td>
                            <td><?php echo htmlspecialchars($item['estado']); ?></td>
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
</body>
</html>
