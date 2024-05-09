console.log("hello world!");
let filtrarDatos = [];

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
      mostrarCursos(data.slice(0, 6));
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
  const edad = document.getElementById("apellido").value;
  const telefono = document.getElementById("correo").value;
  const correo = document.getElementById("password").value;
  const contraseña = document.getElementById("password").value;
  const intereses = document.querySelectorAll(
    'input[name="intereses[]"]:checked'
  );

  const selectedIntereses = [];

  // Iterate over the selected checkboxes
  intereses.forEach(function (checkbox) {
    // Add the value of the checked checkbox to the array
    selectedIntereses.push(checkbox.value);
  });

  // Now, selectedIntereses array contains all the values of the selected checkboxes
  console.log(selectedIntereses);

  // action="index.php?c=Usuarios&a=registro"
});

const mostrarCursos = (cursos) => {
  var carruselcurso = document.getElementById("content-cursos");
  cursos.forEach((curso) => {
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
    carruselcurso.appendChild(newContent);
  });
};

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

window.onload = function () {
  obtenerCursos();
  obtenerAsesorias();
};

let buscador = document.getElementById("busqueda");
let contentBuscador = document.getElementById("buscador");

buscador.addEventListener("input", function (e) {
  var valorBusqueda = e.target.value.toLowerCase();
  var resultadosFiltrados = filtrarDatos.filter((dato) => {
    var nombreMinusculas = dato.nombre.toLowerCase();
    if (valorBusqueda === "") {
      contentBuscador.innerHTML = "";
      contentBuscador.classList.add("hidden");
      return;
    }
    return nombreMinusculas.includes(valorBusqueda);
  });

  mostrarResultados(resultadosFiltrados);
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
    newContent.className = "flex p-3 my-3 shadow-md";
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
