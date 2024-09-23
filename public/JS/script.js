document.addEventListener("DOMContentLoaded", function () {
  const navigateButton = document.getElementById("navigateDocente");

  navigateButton.addEventListener("click", function () {
    window.location.href = "index.php?c=Docentes&a=perfilDocente";
  });
});

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
  autoplay: {
    delay: 2000,
    disableOnInteraction: false,
  },

  /*pagination: {
    el: ".swiper-pagination",
    clickable: true,
    dynamicBullets: true,
  },

  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },*/

  scrollbars: {
    el: ".swiper-scrollbar",
    draggable: true, // Permite arrastrar el scrollbar
    hide: false, // Muestra el scrollbar de forma permanente
  },
  breakpoints: {
    600: {
      slidesPerView: 1,
      spaceBetween: 10,
    },

    1024: {
      slidesPerView: 2,
    },

    1280: {
      slidesPerView: 4,
    },
  },
});

let swiperCards2 = new Swiper(".swiper-container-2", {
  loop: true,
  spaceBetween: 20,
  grabCursor: false,
  autoplay: {
    delay: 2000,
    disableOnInteraction: false,
  },
  breakpoints: {
    600: {
      slidesPerView: 1,
    },
    1024: {
      slidesPerView: 2,
    },
    1448: {
      slidesPerView: 3,
    },
  },
});

/**   */

document.addEventListener("DOMContentLoaded", function () {
  var splide = new Splide(".splide");
  splide.mount();
});

document.addEventListener("DOMContentLoaded", function () {
  var button = document.getElementById("toggleButton");
  var content = document.getElementById("extraContent");

  button.addEventListener("click", function () {
    if (content.classList.contains("hidden")) {
      content.classList.remove("hidden");
      button.textContent = "Ocultar";
    } else {
      content.classList.add("hidden");
      button.textContent = "Mostrar más";
    }
  });
});
//CAMBIOS JULIO 24
let swiperInstance;
//fin
function mostrarContenidoAreas() {
  document.getElementById("contenido-areas").style.display = "block";
  document.getElementById("contenido-master-teach").style.display = "none";
  document.getElementById("asesorias-Cursos").style.display = "none";

  // Cambiar el estilo de los botones
  toggleButtonStyles('btn-areas');
}

function mostrarContenidoMasterTeach() {
  document.getElementById("contenido-master-teach").style.display = "block";
  document.getElementById("contenido-areas").style.display = "none";
  document.getElementById("asesorias-Cursos").style.display = "none";

  // Cambiar el estilo de los botones
  toggleButtonStyles('btn-master');
}

function mostrarContenidoAsesorias() {
  document.getElementById("asesorias-Cursos").style.display = "block";
  document.getElementById("contenido-areas").style.display = "none";
  document.getElementById("contenido-master-teach").style.display = "none";

  // Cambiar el estilo de los botones
  toggleButtonStyles('btn-asesorias');
}

function toggleButtonStyles(activeButtonId) {
  // Obtener todos los botones
  var buttons = document.querySelectorAll('.btn');

  // Iterar sobre los botones para actualizar su fondo de manera manual
  buttons.forEach(function(button) {
    if (button.id === activeButtonId) {
      // Cambiar el color de fondo al color activo (#4F7CAC)
      button.style.backgroundColor = '#4F7CAC';
    } else {
      // Restablecer el color de fondo al color inactivo (#2E3532)
      button.style.backgroundColor = '#2E3532';
    }
  });
}


function mostrarMas() {
  var contenidoMas = document.getElementById("contenido-mas");
  contenidoMas.style.display = "block";
}

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

//NUEVOS ESTILOS JULIO 24 !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!



function reinitSwiper() {
  // Destruir la instancia existente de Swiper si existe
  if (swiperInstance) {
    swiperInstance.destroy(true, true);
  }

  // Inicializar Swiper después de un pequeño retraso
  setTimeout(function() {
    swiperInstance = new Swiper(".card__content", {
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
          slidesPerView: 1,
        },

        1024: {
          slidesPerView: 2,
        },

        1440: {
          slidesPerView: 2,
        },

        1448: {
          slidesPerView: 4,
        },
      },
    });
  }, 100); // Ajusta el tiempo según sea necesario
}