function mostrarToastify(texto, tipo) {
  const background = tipo === "success" ? "green" : "red";
  Toastify({
    text: texto,
    duration: 5000,
    style: {
      background: background,
    },
  }).showToast();
}

window.onload = function () {
  obtenerCursos();
  obtenerAsesorias();
};

let filtrarDatos = [];

function openPDF(pdfUrl) {
  document.getElementById("pdfEmbed").src = pdfUrl;
  document.getElementById("pdfModal").style.display = "block";
}

function closePDF() {
  document.getElementById("pdfModal").style.display = "none";
  document.getElementById("pdfEmbed").src = "";
}
let buscador = document.getElementById("inputSearch");
let contentBuscador = document.getElementById("buscador");

document.addEventListener("DOMContentLoaded", function () {
  if (buscador) {
    buscador.addEventListener("input", function (e) {
      var valorBusqueda = e.target.value.toLowerCase();
      var resultadosFiltrados = filtrarDatos.filter((dato) => {
        return dato.nombre.toLowerCase().includes(valorBusqueda);
      });

      mostrarResultados(resultadosFiltrados);
    });
  } else {
    console.error("No se encontró el elemento buscador");
  }
});

document.addEventListener("click", function (e) {
  if (!buscador.contains(e.target) && !contentBuscador.contains(e.target)) {
    contentBuscador.classList.add("hidden");
  }
});

function mostrarResultados(resultados) {
  contentBuscador.innerHTML = "";

  resultados.forEach(function (resultado) {
    var newContent = document.createElement("div");
    newContent.className = "flex p-3 my-3 shadow-md cursor-pointer";
    newContent.innerHTML = `
      <div class="imageBuscador">
        <img src="public/${resultado.foto}" class="w-full h-full" alt="">
      </div>
      <div>
        <h1 class="font-bold text-2xl text-center my-4 mx-5 items-center">${resultado.nombre}</h1>
      </div>
    `;
    contentBuscador.appendChild(newContent);
  });

  if (resultados.length > 0) {
    contentBuscador.classList.remove("hidden");
  } else {
    contentBuscador.classList.add("hidden");
  }
}

function mostrarContraseña() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

const mostrarAsesorias = (data) => {
  var carruselAsesorias = document.getElementById("content-asesorias");
  data.forEach((curso) => {
    var newContent = document.createElement("div");
    newContent.className = "containderCard swiper-slide";
    newContent.innerHTML = `
      <div class="ssubContentCard">
          <div class="cardImage">
              <img src="public/${curso.foto}" alt="Descripción de la imagen">
          </div>
          <div class="cardContent">
              <form action="index.php?c=Usuarios&a=claseMuestraNavegacion" method="post">
  
                  <input type="hidden" name="nombreCurso" value="${curso.nombre}">
                  <button class="button1">
                      <span>Clase muestra</span>
                  </button>
              </form>
              <button class="button2">
                  <span>Temario</span>
              </button>
          </div>
      </div>
      `;
    carruselAsesorias.appendChild(newContent);
  });
};

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
      var carruselcurso = document.getElementById("content-cursos");
      data.forEach((curso) => {
        var newContent = document.createElement("div");
        newContent.className = "containderCard swiper-slide";
        newContent.innerHTML = `
      <div class="ssubContentCard">
          <div class="cardImage">
              <img src="public/${curso.foto}" alt="Descripción de la imagen">
          </div>
          <div class="cardContent">
              <form action="index.php?c=Usuarios&a=claseMuestraNavegacion" method="post">
  
                  <input type="hidden" name="nombreCurso" value="${curso.nombre}">
                  <button class="button1">
                      <span>Clase muestra</span>
                  </button>
              </form>
              <button class="button2" onclick="openPDF('public/images/curso-pdf/adobe-after-pdf.pdf')">
                  <span>Temario</span>
              </button>
          </div>
      </div>
      `;
        carruselcurso.appendChild(newContent);
      });
      filtrarDatos.push(...data);
    })
    .catch((error) => {
      console.error("Error en la solicitud:", error);
    });
}

function obtenerAsesorias() {
  fetch("http://localhost/widolearning/index.php?c=Cursos&a=verAsesorias")
    .then((res) => {
      if (!res.ok) {
        throw new Error(
          "Error al obtener los cursos. Código de estado: " + res.status
        );
      }
      return res.json(); // Parsear la respuesta JSON
    })
    .then((data) => {
      mostrarAsesorias(data);
    })
    .catch((error) => {
      console.error("Error en la solicitud:", error);
    });
}

document.getElementById("registroForm").addEventListener("submit", (e) => {
  e.preventDefault();
  const nombre = document.getElementById("nombre").value;
  const edad = document.getElementById("edad").value;
  const correo = document.getElementById("correo").value;
  const telefono = document.getElementById("telefono").value;
  const contraseña = document.getElementById("contraseña").value;
  const intereses = document.querySelectorAll(
    'input[name="intereses[]"]:checked'
  );
  const selectedIntereses = [];

  intereses.forEach(function (checkbox) {
    selectedIntereses.push(checkbox.value);
  });

  const nombreError = document.getElementById("nombre-error");
  const edadError = document.getElementById("edad-error");
  const correoError = document.getElementById("correo-error");
  const telefonoError = document.getElementById("telefono-error");
  const contraseñaError = document.getElementById("contraseña-error");
  const interesesError = document.getElementById("intereses-error");
  let isValid = true;

  if (nombre === "" || /\d/.test(nombre)) {
    nombreError.textContent = "Favor de ingresar un nombre";
    isValid = false;
  }

  if (edad === "") {
    edadError.textContent = "Favor de ingresar su edad";
    isValid = false;
  }

  if (correo === "" || !correo.includes("@")) {
    correoError.textContent = "Favor de ingresar un correo valido";
    isValid = false;
  }

  if (telefono === "" || telefono.length < 9) {
    telefonoError.textContent = "Favord de ingresar un numero de telefono";
    isValid = false;
  }
  if (contraseñaError === "" || contraseña.length < 6) {
    contraseñaError.textContent =
      "Favor de ingresar una contraseña con al menos 6 digitos";
    isValid = false;
  }
  if (selectedIntereses.length < 2) {
    interesesError.textContent = "Favor de seleccionar mas de dos interese";
    isValid = false;
  }

  if (isValid) {
    enviarForm(nombre, edad, telefono, correo, contraseña, selectedIntereses);
  }
});

function enviarForm(
  nombre,
  edad,
  telefono,
  correo,
  contraseña,
  selectedIntereses
) {
  fetch("http://localhost/widolearning/index.php?c=Usuarios&a=registro", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify({
      nombre: nombre,
      edad: edad,
      telefono: telefono,
      correo: correo,
      contraseña: contraseña,
      intereses: selectedIntereses,
    }),
  })
    .then((response) => {
      if (response.ok) {
        return response.json();
      } else {
        console.error("Error sending data to API:", response);
        throw new Error("Error sending data to API: " + response.statusText);
      }
    })
    .then((data) => {
      if (data.success) {
        console.log("Data sent successfully: " + data.message);
        // Optionally, reset the form
        document.getElementById("registroForm").reset();
        // Show success message to the user
        mostrarToastify(data.message, "success");
      } else {
        mostrarToastify(data.error, "error");
      }
    })
    .catch((error) => {
      console.error("Network error:", error);
      // Show error message to the user
      mostrarToastify("Network error: " + error.message, "error");
    });
}

function login() {
  const correo = document.getElementById("email").value;
  const contraseña = document.getElementById("password").value;

  fetch("http://localhost/widolearning/index.php?c=Usuarios&a=iniciarSesion", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify({
      correo: correo,
      contraseña: contraseña,
    }),
  })
    .then((response) => response.json())
    .then((data) => {
      if (data.success) {
        console.log("Data sent successfully: " + data.message);
        window.location.href = `index.php?c=Usuarios&a=index&n=${data.idUsuario}`;
      } else {
        console.error("Login failed: " + data.message);
        mostrarToastify(data.message, "error");
      }
    })
    .catch((error) => {
      console.error("Network error:", error);
      mostrarToastify("Network error: " + error.message, "error");
    });
}

/**  Buscar resultados de la base de datos */
