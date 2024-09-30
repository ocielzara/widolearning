<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de Citas</title>
    <style>
       
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
