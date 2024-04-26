function mostrarContraseña() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

// validar formulario

document.addEventListener("DOMContentLoaded", function () {
  const emailInput = document.querySelector('input[name="correo"]');
  const passwordInput = document.querySelector('input[name="contraseña"]');
  const emailError = document.getElementById("email-error");
  const passwordError = document.getElementById("password-error");

  // Función para mostrar mensajes de error
  function showError(input, errorSpan, errorMessage) {
    errorSpan.textContent = errorMessage;
    errorSpan.style.display = "block";
    input.classList.add("error-input");
  }

  // Función para ocultar mensajes de error
  function hideError(input, errorSpan) {
    errorSpan.textContent = "";
    errorSpan.style.display = "none";
    input.classList.remove("error-input");
  }

  // Función para validar el formato del correo electrónico
  function validateEmail(email) {
    const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return regex.test(email);
  }

  // Función de validación en tiempo real para el correo electrónico
  emailInput.addEventListener("input", function () {
    if (!validateEmail(emailInput.value)) {
      showError(emailInput, emailError, "El correo electrónico no es válido");
    } else {
      hideError(emailInput, emailError);
    }
  });

  // Función de validación para la contraseña
  passwordInput.addEventListener("input", function () {
    if (passwordInput.value.trim() === "") {
      showError(
        passwordInput,
        passwordError,
        "La contraseña no puede estar vacía"
      );
    } else {
      hideError(passwordInput, passwordError);
    }
  });

  // Evento de envío del formulario para realizar la validación final
  document
    .querySelector(".formulario")
    .addEventListener("submit", function (event) {
      if (!validateEmail(emailInput.value)) {
        showError(emailInput, emailError, "El correo electrónico no es válido");
        event.preventDefault(); // Evitar el envío del formulario si hay errores
      }

      if (passwordInput.value.trim() === "") {
        showError(
          passwordInput,
          passwordError,
          "La contraseña no puede estar vacía"
        );
        event.preventDefault(); // Evitar el envío del formulario si hay errores
      }
    });
});

/*=============== SWIPER JS ===============*/
let swiperCards = new Swiper(".card__content", {
  loop: true,
  spaceBetween: 20,
  grabCursor: false,

  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    dynamicBullets: true,
  },

  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

  breakpoints: {
    600: {
      slidesPerView: 2,
    },

    1024: {
      slidesPerView: 2,
    },

    1448: {
      slidesPerView: 3,
    },
  },
});

/*=============== BUSQUEDA DE CURSOS ===============*/

$(document).ready(function () {
  $("#buscar").click(function () {
    var busqueda = $("#busqueda").val();
    $.ajax({
      type: "POST",
      url: "index.php?c=cursos&a=cursos",
      data: {
        busqueda: busqueda,
      },
      dataType: "json",
      success: function (response) {
        console.log(response);
        $("#resultados").empty(); // Limpiamos el contenedor de resultados antes de agregar nuevos resultados
        // Verificamos si se encontraron cursos
        if (response.length > 0) {
          // Iteramos sobre cada curso y creamos un elemento h3 para mostrarlo
          response.forEach(function (curso) {
            //Aca modifica para que tenga link
            $("#resultados").append(
              '<a href="www.google.com">' + curso.titulo + "</a><br>"
            );
          });
        } else {
          // Si no se encontraron cursos, mostramos un mensaje
          $("#resultados").append("<p>No se encontraron cursos.</p>");
        }
      },
      error: function (xhr, status, error) {
        console.error(xhr.responseText);
      },
    });
  });
});

function mostrarContenidoAreas() {
  var contenidoAdicional = document.getElementById("contenido-areas");
  contenidoAdicional.style.display = "block";
  var contenidoFooter = document.getElementById("footer");
  contenidoFooter.style.display = "flex";

  // Oculta el contenido adicional de Master Teach si está visible
  var contenidoMasterTeach = document.getElementById("contenido-master-teach");
  contenidoMasterTeach.style.display = "none";
}

function mostrarContenidoMasterTeach() {
  var contenidoMasterTeach = document.getElementById("contenido-master-teach");
  contenidoMasterTeach.style.display = "block";

  // Oculta el contenido adicional de "Areas de aprendizaje" si está visible
  var contenidoAdicional = document.getElementById("contenido-areas");
  contenidoAdicional.style.display = "none";
  // Oculta el contenido footer si está visible
  var contenidoFooter = document.getElementById("footer");
  contenidoFooter.style.display = "none";
  // Oculta el contenido adicional de "contenido-mas" si está visible
  var contenidoMas = document.getElementById("contenido-mas");
  contenidoMas.style.display = "none";
}

function mostrarMas() {
  var contenidoMas = document.getElementById("contenido-mas");
  contenidoMas.style.display = "block";
}

///FUNCIONES PARA LA PREVISUALIZACION DE VIDEO EN SLIDER***********************************************************
// Obtener todos los elementos de video y previsualización
const videos = document.querySelectorAll(".carousel-item video");
const playIcons = document.querySelectorAll(".carousel-item .play-icon");
const videoPopup = document.getElementById("video-popup");
const videoPopupPlayer = document.getElementById("video-popup-player");
const closeVideoPopup = document.getElementById("close-video-popup");

// Iterar sobre cada elemento de video y previsualización
videos.forEach((video, index) => {
  // Escuchar el evento 'loadedmetadata' para asegurarse de que el video esté cargado
  video.addEventListener("loadedmetadata", function () {
    // Obtener el cuadro del video en el segundo 0 (puedes ajustar esto si lo deseas)
    video.currentTime = 1;
  });
});

playIcons.forEach((playIcon) => {
  playIcon.addEventListener("click", function () {
    const videoSrc = playIcon.dataset.videoSrc; // Obtener la URL del video del atributo personalizado
    videoPopupPlayer.src = videoSrc;
    videoPopup.style.display = "block";
  });
});

closeVideoPopup.addEventListener("click", function () {
  videoPopup.style.display = "none";
  videoPopupPlayer.pause(); // Pausar el video al cerrar la ventana emergente
});

//FUNCION PARA TRAER LOS CURSOS***********************************************************

// Definir una función para hacer la solicitud AJAX
function obtenerCursos() {
  fetch("http://localhost/widolearning/index.php?c=Cursos&a=verCursos")
    .then((response) => {
      if (!response.ok) {
        throw new Error(
          "Error al obtener los cursos. Código de estado: " + response.status
        );
      }
      return response.json(); // Parsear la respuesta JSON
    })
    .then((data) => {
      mostrarCursos(data.slice(0, 6)); // Llama a la función mostrarCursos con los primeros 6 valores del array data
    })
    .catch((error) => {
      console.error("Error en la solicitud:", error);
    });
}

const mostrarCursos = (cursos) => {
  var carruselcurso = document.getElementById("content-cursos");
  cursos.forEach((curso) => {
    var newContent = document.createElement("div");
    newContent.className = "w-auto swiper-slide overflow-hidden";
    newContent.innerHTML = `
    <div class="sm:w-[23rem] w-full h-[27.5rem] rounded-[2rem] bg-[#2E3532]">
        <div class="w-full h-1/2">
            <img src="${curso.foto}" class="w-full h-full" alt="Descripción de la imagen">
        </div>
        <div class="w-full h-1/2 flex justify-center flex-col">
            <form class="w-full flex my-2 justify-center" action="index.php?c=Usuarios&a=claseMuestraNavegacion" method="post">

                <input type="hidden" name="nombreCurso" value="${curso.nombre}">
                <button class="w-[80%] bg-[#FEC400] rounded-3xl text-[#2E3532] font-bold">
                    <span>Clase muestra</span>
                </button>
            </form>
            <button class="w-[80%] mx-auto mt-3 mb-4 bg-slate-500 rounded-3xl text-slate-400">
                <span>Temario</span>
            </button>
        </div>
    </div>
    `;
    carruselcurso.appendChild(newContent);
  });
};

window.onload = function () {
  obtenerCursos();
};
