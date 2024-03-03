<div class="container col-md-10 mt-4 bg-primary">
            <!-- Mostrar la disponibilidad del maestro -->
            <h3>Disponibilidad del Maestro:</h3>
            <?php if ($informacionDisponibilidad): ?>
                <ul>
                    <?php foreach ($informacionDisponibilidad as $disponibilidad): ?>
                        <li>Fecha:
                            <?php echo $disponibilidad['fecha']; ?> - Hora:
                            <?php echo $disponibilidad['hora']; ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php else: ?>
                <p>No hay disponibilidad registrada para este maestro.</p>
            <?php endif; ?>
        </div>