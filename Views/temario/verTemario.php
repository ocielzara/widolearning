<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($curso['nombre']); ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public/styles/styles.css">
</head>

<body>

    <!--========== HEADER ==========-->
    <?php include 'Views/contenido/Header-footer/header-new.php'; ?>
    <!--==========         ==========-->

    <div class="container">
        <div class="course-info">
            <div class="course-header">
                <h1><?php echo htmlspecialchars($curso['nombre']); ?></h1>
                <img src="<?php echo htmlspecialchars('public/' . $curso['foto']); ?>" alt="Logo de <?php echo htmlspecialchars($curso['nombre']); ?>" class="course-image">
            </div>
            <p><strong>Duración del curso: 20 horas</strong></p>
            <p><?php echo htmlspecialchars($curso['descripcion']); ?></p>

            <div class="learning" style="background-color: #eef3f7;">
                <h2>¿Qué aprenderás?</h2>
                <ul>
                    <?php
                    // Decodifica el JSON para obtener los puntos de aprendizaje
                    $learningPoints = json_decode($curso['learning_points'], true);
                    if (!empty($learningPoints)) {
                        foreach ($learningPoints as $point) {
                            echo "<li>" . htmlspecialchars($point) . "</li>";
                        }
                    } else {
                        echo "<li>No se encontraron puntos de aprendizaje.</li>";
                    }
                    ?>
                </ul>
            </div>

            <div class="requirements">
                <h3>REQUERIMIENTOS</h3>
                <ul>
                    <?php
                    // Decodifica el JSON para obtener los requisitos
                    $requirements = json_decode($curso['requirements'], true);
                    if (!empty($requirements)) {
                        foreach ($requirements as $requirement) {
                            echo "<li>" . htmlspecialchars($requirement) . "</li>";
                        }
                    } else {
                        echo "<li>No se encontraron requisitos.</li>";
                    }
                    ?>
                </ul>
            </div>
        </div>

        <!-- Planes de pago -->
        <div class="payment-plans">
            <h2>PLANES DE PAGO</h2>
            <?php if ($curso['tipo'] === 'asesorias2'): ?>
                <h2>Planes de Pago</h2>
                <p>Aquí te explicaré cómo funciona esta calculadora. Según las horas que elijas, ese será el monto a pagar.</p>
                <p>Si seleccionas 5 horas, recibirás un descuento de $15 por hora, y si seleccionas 10 horas o más, el descuento será de $30 por hora.</p>

                <div class="plan">
                    <label for="hora"><strong>PRECIO POR HORA</strong><br>$290</label>
                </div>
                <div class="plan">
                    <label for="cincoHoras"><strong>PRECIO POR 5 HORAS O MÁS</strong><br>$275 por hora (Total: $1375)</label>
                </div>
                <div class="plan">
                    <label for="diezHoras"><strong>PRECIO POR 10 HORAS O MÁS</strong><br>$260 por hora</label>
                </div>


            <?php else: ?>
                <div class="plan">
                    <label for="hora"><strong>PRECIO POR HORA</strong><br>$350</label>
                </div>
                <div class="plan">
                    <label for="unico"><strong>PAGO ÚNICO</strong><br>$5,900 <span>Ahorra $400 al pagar en una sola exhibición.</span></label>
                </div>
                <div class="plan">
                    <label for="mensual"><strong>PAGO MENSUAL</strong><br>$2,100 <span>Realiza 3 pagos mensuales.</span></label>
                </div>
            <?php endif; ?>
        </div>
    </div>
</body>

</html>