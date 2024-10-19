<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Asesorías</title>
    <style>
        .container-principal {
            width: 100%;
        }

        .container2 {
            width: 80%;
            margin-left: 20%;
            margin: auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
        }

        input[type="range"] {
            width: 100%;
        }

        #cost {
            margin-top: 20px;
            font-size: 1.5em;
            text-align: center;
        }

        #promotion {
            margin-top: 10px;
            font-size: 1.2em;
            text-align: center;
            color: green;
            display: none; /* Por defecto oculto */
        }

    </style>

    <link rel="stylesheet" href="public/styles/styles.css">
</head>

<body>

    <!--========== HEADER ==========-->
    <?php include 'Views/contenido/Header-footer/header-new.php'; ?>
    <!--==========         ==========-->

    <div class="container">
        <div class="course-info">
            <div class="course-header">
                <h1>Calculadora para asesorías</h1>
            </div>
            <p><strong>Aquí podrás calcular las horas que deseas aprender en los cursos, y según lo que elijas, ese será tu precio.</strong></p>

            <div class="learning" style="background-color: #eef3f7;">
                <div class="container-principal">
                    <div class="container2">
                        <h1>Calculadora de Asesorías</h1>
                        <label for="hours">Horas de asesoría:</label>
                        <input type="range" id="hours" min="1" max="20" value="1">
                        <span id="hoursValue">1</span> horas
                        <div id="cost">Costo: $290</div>
                        <div id="promotion"></div> <!-- Promociones dinámicas -->
                    </div>
                </div>
            </div>

        </div>
        <div class="payment-plans" style="margin-top:0%">
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
        </div>

    </div>

    <script>
        const hoursInput = document.getElementById('hours');
        const hoursValue = document.getElementById('hoursValue');
        const costDisplay = document.getElementById('cost');
        const promotionDisplay = document.getElementById('promotion');

        function updateCost() {
            const hours = hoursInput.value;
            let pricePerHour = 290; // Precio base por hora
            let promotionText = '';

            if (hours >= 10) {
                pricePerHour = 260; // Precio para 10 horas o más
                promotionText = '¡Descuento aplicado! $30 de descuento por hora.';
                promotionDisplay.style.display = 'block'; // Mostrar promoción
            } else if (hours >= 5) {
                pricePerHour = 275; // Precio para 5 horas o más
                promotionText = '¡Descuento aplicado! $15 de descuento por hora.';
                promotionDisplay.style.display = 'block'; // Mostrar promoción
            } else {
                promotionDisplay.style.display = 'none'; // Ocultar promoción si son menos de 5 horas
            }

            const totalCost = hours * pricePerHour;
            hoursValue.innerText = hours;
            costDisplay.innerText = `Costo: $${totalCost}`;
            promotionDisplay.innerText = promotionText; // Actualizar promoción
        }

        hoursInput.addEventListener('input', updateCost);
    </script>
</body>

</html>
