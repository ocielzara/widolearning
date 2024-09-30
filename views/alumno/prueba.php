<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de Citas</title>
    <style>
        .espacioAgenda {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .agenda {
            text-align: center;
        }
        .header {
            font-size: 1.2em;
            margin-bottom: 10px;
        }
        .grid {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 10px;
        }
        .cell {
            background-color: #e0f7fa;
            border: 1px solid #b2ebf2;
            padding: 10px;
            cursor: pointer;
            transition: background-color 0.3s;
            border-radius: 10px;
        }
        .cell:hover {
            background-color: #b2ebf2;
        }
        .header-cell {
            background-color: #00acc1;
            color: white;
            font-weight: bold;
        }
        .time {
            font-size: 0.8em;
        }
        .navigation {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }
        .navigation button {
            background-color: #00acc1;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            font-size: 0.9em;
            border-radius: 10px;
        }
        .navigation button:hover {
            background-color: #007c91;
        }
        .current-date {
            margin-bottom: 10px;
            font-size: 1.2em;
        }
    </style>
</head>
<body>
    <div class="espacioAgenda">
    <div class="agenda">
        <div class="current-date" id="currentDate"></div>
        <div class="navigation">
            <button id="prevWeek">Anterior</button>
            <div class="header" id="timezone"></div>
            <button id="nextWeek">Siguiente</button>
        </div>
        <div class="grid" id="calendar">
            <!-- Celdas de fechas y horas -->
        </div>
    </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const timezone = "America/Mexico_City";
            document.getElementById("timezone").textContent = `(-06:00) ${timezone}`;
            
            const daysOfWeek = ["Lun", "Mar", "Mie", "Jue", "Vie", "Sab", "Dom"];
            let startDate = new Date(); // Fecha de inicio como hoy
            startDate.setDate(startDate.getDate() - startDate.getDay() + 1); // Ajusta para comenzar en lunes

            const hours = [
                ["09:00", "11:00", "12:00", "13:00"],
                ["14:00", "15:00", "16:00", "17:00"],
                ["14:00", "15:00", "16:00", "17:00"],
                ["15:00", "12:00", "", ""]
            ];

            const calendarElement = document.getElementById("calendar");

            function updateCalendar() {
                calendarElement.innerHTML = '';
                // Añadir celdas de encabezado con fechas
                for (let i = 0; i < daysOfWeek.length; i++) {
                    const date = new Date(startDate);
                    date.setDate(startDate.getDate() + i);
                    const headerCell = document.createElement("div");
                    headerCell.classList.add("cell", "header-cell");
                    headerCell.innerHTML = `${daysOfWeek[i]}<br>${date.getDate()} ${date.toLocaleString('es', { month: 'short' })}`;
                    calendarElement.appendChild(headerCell);
                }

                // Añadir celdas de horas
                for (let i = 0; i < 4; i++) {
                    for (let j = 0; j < daysOfWeek.length; j++) {
                        const cell = document.createElement("div");
                        cell.classList.add("cell", "time");
                        cell.textContent = hours[i % hours.length][j % hours[0].length] || "";
                        calendarElement.appendChild(cell);
                    }
                }
            }

            function updateCurrentDate() {
                const today = new Date();
                const currentDateElement = document.getElementById("currentDate");
                currentDateElement.textContent = `Hoy es: ${today.toLocaleDateString('es', { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' })}`;
            }

            document.getElementById("prevWeek").addEventListener("click", function() {
                startDate.setDate(startDate.getDate() - 7);
                updateCalendar();
            });

            document.getElementById("nextWeek").addEventListener("click", function() {
                startDate.setDate(startDate.getDate() + 7);
                updateCalendar();
            });

            updateCurrentDate();
            updateCalendar();
        });
    </script>
</body>
</html>
