const baseUrl = "https://www.widolearn.com";
//const baseUrl = "http://localhost/widolearning";
// http://localhost/widolearning/

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
  mostrarMasCategorias("otros");
  mostrarMasCategorias("programacion");
  mostrarMasCategorias("CAD");
  mostrarMasCategorias("administracion");
  mostrarMasCategorias("dibujo-ilustracion");
  mostrarMasCategorias("videojuegos");
  mostrarMasCategorias("mkt");
  mostrarMasCategorias("data-mining");
  mostrarMasCategorias("arte");
  mostrarMasCategorias("idiomas");
  mostrarMasCategorias("musica");
  mostrarMasCategorias("salud");
  mostrarMasCategorias("voz");
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

function redirigirClaseMuestra(idCurso, nombreCurso) {
  const url = `${baseUrl}/index.php?c=Usuarios&a=claseMuestraNavegacion&idCurso=${idCurso}&nombreCurso=${encodeURIComponent(
    nombreCurso
  )}`;
  window.location.href = url;
}

function mostrarResultados(resultados) {
  contentBuscador.innerHTML = "";

  resultados.forEach(function (resultado) {
    var newContent = document.createElement("div");
    newContent.className = "flex p-3 my-3 shadow-md";
    newContent.innerHTML = `
      <div class="imageBuscador" >
        <img src="public/${resultado.foto}" class="w-full h-full" alt="">
      </div>
      <div class="m-auto cursor-pointer" onclick="redirigirClaseMuestra(${resultado.id_curso}, '${resultado.nombre}')">
        <h1 class="font-bold sm:text-2xl text-center my-4 mx-5 items-center">${resultado.nombre}</h1>
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

function mostrarMasCategorias(typoCurso) {
  fetch(`${baseUrl}/index.php?c=Cursos&a=verCursosCategorias&tipo=${typoCurso}`)
    .then((response) => {
      if (!response.ok) {
        throw new Error(
          "Error al obtener los cursos. Código de estado: " + response.status
        );
      }
      return response.json();
    })
    .then((data) => {
      var carruselcurso = document.getElementById(typoCurso);
      data.forEach((curso) => {
        var newContent = document.createElement("div");
        newContent.className = "containderCard swiper-slide w-[320px]";
        newContent.innerHTML = `
          <div class="ssubContentCard">
            <div class="cardImage">
              <img src="public/${curso.foto}" alt="Descripción de la imagen">
            </div>
            <div class="cardContent">
              <button class="button1" onclick="redirigirClaseMuestra(${curso.id_curso}, '${curso.nombre}')">
                <span>Clase muestra</span>
              </button>
              <button class="button2" onclick="openPDF('public/${curso.pdf}')">
                <span>Temario</span>
              </button>
            </div>
          </div>
        `;
        carruselcurso.appendChild(newContent);
      });
    })
    .catch((error) => {
      console.error("Error en la solicitud:", error);
    });
}
function obtenerCursos() {
  fetch(`${baseUrl}/index.php?c=Cursos&a=verCursos`)
    .then((response) => {
      if (!response.ok) {
        throw new Error(
          "Error al obtener los cursos. Código de estado: " + response.status
        );
      }
      return response.json();
    })
    .then((data) => {
      filtrarDatos.push(...data);
      var carruselcurso = document.getElementById("content-cursos");
      data.forEach((curso) => {
        var newContent = document.createElement("div");
        newContent.className = "containderCard swiper-slide w-[320px]";
        newContent.innerHTML = `
          <div class="ssubContentCard">
            <div class="cardImage">
              <img src="public/${curso.foto}" alt="Descripción de la imagen">
            </div>
            <div class="cardContent">
              <button class="button1" onclick="redirigirClaseMuestra(${curso.id_curso}, '${curso.nombre}')">
                <span>Clase muestra</span>
              </button>
              <button class="button2" onclick="openPDF('public/${curso.pdf}')">
                <span>Temario</span>
              </button>
            </div>
          </div>
        `;
        carruselcurso.appendChild(newContent);
      });
    })
    .catch((error) => {
      console.error("Error en la solicitud:", error);
    });
}

function obtenerAsesorias() {
  fetch(`${baseUrl}/index.php?c=Cursos&a=verAsesorias`)
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
/// Obtener los maestros que imparten cada curso

document.addEventListener("DOMContentLoaded", function () {
  const urlParams = new URLSearchParams(window.location.search);
  const idCurso = urlParams.get("idCurso");
  console.log(`Fetching data for course ID: ${idCurso}`);

  fetch(
    `${baseUrl}/index.php?c=Docentes&a=verMentoresporIdCursos&cursoId=${idCurso}`
  )
    .then((response) => {
      if (!response.ok) {
        throw new Error(`Network response was not ok: ${response.statusText}`);
      }
      return response.json();
    })
    .then((data) => {
      console.log("Data received:", data);
      var carruselcurso = document.getElementById("mentorContainer");

      if (!Array.isArray(data) || data.length === 0) {
        throw new Error("No data found");
      }

      const mentoresDisponibilidad = {};

      // Agrupar disponibilidades por mentor
      data.forEach((item) => {
        if (!mentoresDisponibilidad[item.Mentor_ID]) {
          mentoresDisponibilidad[item.Mentor_ID] = {
            Mentor: item.Mentor,
            MentorFoto: item.MentorFoto,
            Curso: item.Curso,
            CursoFoto: item.CursoFoto,
            TipoCurso: item.TipoCurso,
            PDF: item.PDF,
            Disponibilidad: [],
          };
        }
        if (item.dia_semana && item.hora) {
          mentoresDisponibilidad[item.Mentor_ID].Disponibilidad.push({
            dia_semana: item.dia_semana,
            hora: item.hora,
          });
        }
      });

      Object.keys(mentoresDisponibilidad).forEach((mentorId) => {
        const mentor = mentoresDisponibilidad[mentorId];
        const mentorFoto = mentor.MentorFoto
          ? `public/images/docente/${mentor.MentorFoto}/${mentor.MentorFoto}-profile.png`
          : "public/images/docente/blank-profile.png";
        const especialidad = mentor.Curso;
        const nombre =
          especialidad.charAt(0).toUpperCase() + especialidad.slice(1);

        // Crear objeto de disponibilidades agrupadas por día de la semana
        const disponibilidades = {};
        mentor.Disponibilidad.forEach((dispo) => {
          console.log(
            `Processing availability: ${dispo.dia_semana} at ${dispo.hora}`
          );
          const dia = dispo.dia_semana.toLowerCase();
          if (!disponibilidades[dia]) {
            disponibilidades[dia] = [];
          }
          disponibilidades[dia].push(dispo.hora);
        });

        var newContent = document.createElement("div");
        newContent.className =
          "flex sm:flex-row flex-col rounded-3xl p-10 bg-white contentMentor";
        newContent.innerHTML = `
              <div class="xl:w-[40%] sm:w-[23%] sm:border-r-2 sm:border-black">
                  <div class="flex sm:flex-row flex-col">
                      <div class="sm:w-1/2 2xl:w-[40%] w-40 sm:h-36 h-40 mx-auto">
                        <img src="${mentorFoto}" class="w-full h-full rounded-full" alt="">
                      </div>
                      <div class="sm:w-1/2 my-auto textMentor">
                          <h1 class="sm:w-16 text-center font-semibold">${mentor.Mentor}</h1>
                      </div>
                  </div>
                  <div class="m-5">
                      <p class="font-bold sm:text-left text-center">Especialista en:</p>
                      <div class="flex flex-col sm:items-start items-center py-2">
                          <button class="w-[90%] my-1 h-8 font-semibold">${nombre}</button>
                          <button class="mt-2 bottonBG font-bold h-8 rounded-full cursor-pointer" onclick="verPerfilMentor(${mentorId})" id="navigateDocente">Ver portal</button>
                      </div>
                  </div>
              </div>
              <div class="flex flex-col justify-center mx-auto">
                  <div class="mx-auto">
                      <h1 class="text-center sm:my-0 my-5 font-bold">Puedes seleccionar un día para ver los horarios disponibles</h1>
                      <label for="days_${mentorId}" class="block mb-2 text-sm font-medium mt-2 text-gray-900">
                          Selecciona un día</label>
                      <select id="days_${mentorId}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block sm:w-96 w-full p-2.5 ">
                          <option value="lunes">Lunes</option>
                          <option value="martes">Martes</option>
                          <option value="miercoles">Miércoles</option>
                          <option value="jueves">Jueves</option>
                          <option value="viernes">Viernes</option>
                          <option value="sabado">Sábado</option>
                          <option value="domingo">Domingo</option>
                      </select>
                  </div>
                  <div class="fechaContent grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 my-5" id="horarios_${mentorId}">
                  </div>
              </div>
              `;
        carruselcurso.appendChild(newContent);

        // Agregar evento para cambiar los horarios cuando se seleccione un día
        const select = document.getElementById(`days_${mentorId}`);
        select.addEventListener("change", function () {
          const selectedDay = this.value;
          const horariosContainer = document.getElementById(
            `horarios_${mentorId}`
          );
          horariosContainer.innerHTML = ""; // Limpiar horarios previos

          if (disponibilidades[selectedDay]) {
            disponibilidades[selectedDay].forEach((hora) => {
              const horaElement = document.createElement("div");
              horaElement.innerHTML = `<p class="m-2 p-1">${hora}</p>`;
              horariosContainer.appendChild(horaElement);
            });
          } else {
            const noDisponibilidadElement = document.createElement("div");
            noDisponibilidadElement.className = "sm:mx-20";
            noDisponibilidadElement.innerHTML = `<p class="m-2 mx-auto w-full sm:w-72 p-1">No hay horarios disponibles</p>`;
            horariosContainer.appendChild(noDisponibilidadElement);
          }
        });

        // Disparar el evento change para mostrar los horarios del primer día por defecto
        select.dispatchEvent(new Event("change"));
      });
    })
    .catch((error) => {
      console.error("Error fetching mentor data:", error);
      var carruselcurso = document.getElementById("mentorContainer");
      var newContent = document.createElement("h1");
      newContent.className = "w-full h-full font-bold text-4xl text-center";
      newContent.innerHTML = `PROXIMAMENTE`;
      carruselcurso.appendChild(newContent);
    });
});

function verPerfilMentor(idMentor) {
  const url = `${baseUrl}/index.php?c=Docentes&a=informacionMentorId&idCurso=${idMentor}`;
  window.location.href = url;
}
function iniciarSesion() {
  const url = `${baseUrl}/index.php?c=Usuarios&a=login`;
  window.location.href = url;
}

document.addEventListener("DOMContentLoaded", function () {
  const urlParams = new URLSearchParams(window.location.search);
  const idCurso = urlParams.get("idCurso");

  fetch(
    `${baseUrl}/index.php?c=Docentes&a=informacionMentorId&idCurso=${idCurso}`,
    {
      headers: {
        "X-Requested-With": "XMLHttpRequest",
      },
    }
  )
    .then((response) => {
      if (!response.ok) {
        throw new Error("Network response was not ok " + response.statusText);
      }
      return response.json();
    })
    .then((data) => {
      const mentorName = document.getElementById("mentor-name");
      const mentorPhoto = document.getElementById("mentor-photo");
      const mentorName2 = document.getElementById("mentor-name2");
      const mentorName3 = document.getElementById("mentor-cursos");
      var carruselcurso = document.getElementById("mentor-cursos-carrusel");

      mentorName.textContent = `PORTAL DE ${data[0].Mentor}`;
      mentorName2.textContent = `¡Hola, soy ${data[0].Mentor}!`;
      mentorName3.textContent = `¿Que otros cursos imparte ${data[0].Mentor}?`;
      mentorPhoto.src = `public/images/docente/${data[0].MentorFoto}/${data[0].MentorFoto}-description.png`;
      data.forEach((curso) => {
        var newContent = document.createElement("div");
        newContent.className = "containderCard w-[320px]";
        newContent.innerHTML = `
          <div class="subContentCard">
            <div class="cardImage">
              <img src="public/${curso.CursoFoto}" alt="Descripción de la imagen">
            </div>
            <div class="cardContent rounded-full">
              <button class="button1" onclick="redirigirClaseMuestra(${curso.id_curso}, '${curso.Curso}')">
                <span>Clase muestra</span>
              </button>
              <button class="button2" onclick="openPDF('public/${curso.pdf}')">
                <span>Temario</span>
              </button>
            </div>
          </div>
        `;
        carruselcurso.appendChild(newContent);
      });
    })
    .catch((error) => console.error("Error al obtener los datos:", error));
});

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
  fetch(`${baseUrl}/index.php?c=Usuarios&a=registro`, {
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

  fetch(`${baseUrl}/index.php?c=Usuarios&a=iniciarSesion`, {
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
