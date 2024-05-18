console.log("Hello world!");

document.addEventListener("DOMContentLoaded", function () {
  console.log("domContentLoaded");
  const navigateButton = document.getElementById("navigateDocente");

  navigateButton.addEventListener("click", function () {
    console.log("Le diste click");
    window.location.href = "index.php?c=Docentes&a=perfilDocente";
  });
});

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

let swiperCards2 = new Swiper(".swiper-container-2", {
  loop: true,
  spaceBetween: 20,
  grabCursor: false,
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
