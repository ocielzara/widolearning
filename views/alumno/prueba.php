function setupCloseButton(infoContainer) {
    const closeBtn = document.getElementById("close-btn");
    closeBtn.addEventListener("click", function () {
        infoContainer.style.display = "none";
    });
}



    document.addEventListener("DOMContentLoaded", function () {
    // Obtener el elemento del título de la imagen
    const tituloImagen = document.querySelectorAll("#image-box p");

    // Agregar un evento de clic a cada título de imagen
tituloImagen.forEach(function (titulo) {
    titulo.addEventListener("click", function () {
        // Obtener el texto del elemento <p>
        const tituloTexto = titulo.textContent.trim();

        // Realizar la solicitud AJAX al endpoint en tu aplicación
        const xhr = new XMLHttpRequest();
        xhr.open("POST", "index.php?c=usuarios&a=obtenerInformacionDesdeBD", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onload = function () {
            if (xhr.status === 200) {
                // Obtener la información obtenida de la base de datos
                const informacion = JSON.parse(xhr.responseText);
                const descripcion = informacion.descripcion;
                console.error("si ", descripcion);
                // Mostrar la información en el contenedor
                infoContainer.innerHTML = descripcion;
                // Mostrar el contenedor de información
                infoContainer.style.display = "block";
            } else {
                // Manejar errores si es necesario
                console.error("Error al obtener la información de la base de datos");
            }
        };
        // Enviar el texto del título como datos de la solicitud
        xhr.send("titulo=" + encodeURIComponent(tituloTexto));
    });
});


   // Obtener el contenedor de información
   const infoContainer = document.getElementById("info-container");

// Llama a la función para configurar el evento de clic en el botón de cierre
setupCloseButton(infoContainer);
});