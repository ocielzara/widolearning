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
