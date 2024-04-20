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
