<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Asesorías</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0px;
        }

        .container-principal{
            width: 100%;
            padding: 200px 0px 0px 0px;
        }

        .container {
            width: 60%;
            margin-left: 20%;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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
    </style>
</head>

<body>

    <div class="container-principal">
        <div class="container">
            <h1>Calculadora de Asesorías</h1>
            <label for="hours">Horas de asesoría:</label>
            <input type="range" id="hours" min="0" max="10" value="0">
            <span id="hoursValue">0</span> horas
            <div id="cost">Costo: $0</div>
        </div>
    </div>
    <script>
        const hoursInput = document.getElementById('hours');
        const hoursValue = document.getElementById('hoursValue');
        const costDisplay = document.getElementById('cost');
        const pricePerHour = 50; // Precio por hora

        function updateCost() {
            const hours = hoursInput.value;
            hoursValue.innerText = hours;
            const totalCost = hours * pricePerHour;
            costDisplay.innerText = `Costo: $${totalCost}`;
        }

        hoursInput.addEventListener('input', updateCost);
    </script>
</body>

</html>