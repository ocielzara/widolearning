//const baseUrl = "https://www.widolearn.com";
const baseUrl = "http://localhost/widolearning";
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
  // Obtén el parámetro 'idUusario' de la URL actual
  const urlParams = new URLSearchParams(window.location.search);
  const idUsu = urlParams.get("n");

  obtenerCursos(idUsu);
  obtenerAsesorias();
  obtenerMentores();
  mostrarMasCategorias(idUsu, "otros");
  mostrarMasCategorias(idUsu, "programacion");
  mostrarMasCategorias(idUsu, "CAD");
  mostrarMasCategorias(idUsu, "administracion");
  mostrarMasCategorias(idUsu, "dibujo-ilustracion");
  mostrarMasCategorias(idUsu, "videojuegos");
  mostrarMasCategorias(idUsu, "mkt");
  mostrarMasCategorias(idUsu, "data-mining");
  mostrarMasCategorias(idUsu, "arte");
  mostrarMasCategorias(idUsu, "idiomas");
  mostrarMasCategorias(idUsu, "musica");
  mostrarMasCategorias(idUsu, "salud");
  mostrarMasCategorias(idUsu, "voz");
  obtenerMentoresPorTipo("administracion");
  obtenerMentoresPorTipo("modelado-animacion");
  obtenerMentoresPorTipo("robotica-electronica");
  obtenerMentoresPorTipo("edicion-digital");
  obtenerMentoresPorTipo("programacion");
  obtenerMentoresPorTipo("CAD");
  obtenerMentoresPorTipo("dibujo-ilustracion");
  obtenerMentoresPorTipo("videojuegos");
  obtenerMentoresPorTipo("mkt");
  obtenerMentoresPorTipo("data-mining");
  obtenerMentoresPorTipo("arte");
  obtenerMentoresPorTipo("idiomas");
  obtenerMentoresPorTipo("musica");
  obtenerMentoresPorTipo("salud");
  obtenerMentoresPorTipo("otros");

  const idUsuario = urlParams.get("idUsuario");
  obtenerCursosPorUsuario(idUsuario);
  const idCurso = urlParams.get("idCurso");
  obtenerCreditosCursos(idUsuario, idCurso);
  const id = urlParams.get("id");
  obtenerDatosMisAlumnos(id);
  obtenerIscripciones(id);
  const mentorId = urlParams.get("mentorId");
  obtenerDatosDisponibilidadMentor(mentorId);
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

//CAMBIOS JULIO 24
function redirigirVerPerfil(Mentor_ID) {
  const url = `${baseUrl}/index.php?c=Docentes&a=informacionMentorId&idCurso=${Mentor_ID}
  )}`;
  window.location.href = url;
}

function redirigirVistaAprendizaje() {
  // Obtén el parámetro 'n' de la URL actual
  const urlParams = new URLSearchParams(window.location.search);
  const idUsuario = urlParams.get("n");

  if (idUsuario) {
    // Construye la URL de redirección
    const url = `${baseUrl}/index.php?c=Usuarios&a=vistaAprendizajeDiseno&idUsuario=${idUsuario}`;
    // Redirige el navegador a la URL construida
    window.location.href = url;
  } else {
    console.error("No se encontró el idUsuario en la URL actual.");
  }
}

function obtenerCursosPorUsuario(idUsuario) {
  fetch(
    `${baseUrl}/index.php?c=Usuarios&a=vistaAprendizaje&idUsuario=${encodeURIComponent(
      idUsuario
    )}`
  )
    .then((response) => {
      if (!response.ok) {
        throw new Error(
          "Error al obtener los cursos. Código de estado: " + response.status
        );
      }
      return response.json();
    })
    .then((data) => {
      var contenedorIconos = document.getElementById(
        "contenedor-iconos-cursos"
      );
      data.forEach((curso) => {
        var newContent = document.createElement("a");
        newContent.className = "icon-circle";
        newContent.href = `${baseUrl}/index.php?c=Usuarios&a=vistaCreditos&idUsuario=${idUsuario}&idCurso=${curso.id_curso}`;
        newContent.innerHTML = `<i class='bx ${curso.icono_curso} nav__iconSub'></i>`;
        contenedorIconos.appendChild(newContent);
      });
    })
    .catch((error) => {
      console.error("Error en la solicitud:", error);
    });
}

function obtenerCreditosCursos(idUsuario, idCurso) {
  fetch(
    `${baseUrl}/index.php?c=Usuarios&a=creditosCursos&idUsuario=${encodeURIComponent(
      idUsuario
    )}&idCurso=${encodeURIComponent(idCurso)}`
  )
    .then((response) => {
      if (!response.ok) {
        throw new Error(
          "Error al obtener los cursos. Código de estado: " + response.status
        );
      }
      return response.json();
    })
    .then((data) => {
      const curso = data[0]; // Asumiendo que la respuesta contiene un solo objeto

      // Inserta los datos en el HTML
      document.getElementById(
        "curso-nombre"
      ).innerText = `Curso: ${curso.nombre_curso}`;
      document.getElementById(
        "mentor-nombre"
      ).innerText = `Mentor: ${curso.nombre_mentor}`;
      document.getElementById(
        "total-creditos"
      ).innerText = `Total créditos: ${curso.creditos}`;
      document.getElementById(
        "cursados"
      ).innerText = `Cursados: ${curso.cursados}`;

      // Inserta los iconos en el contenedor
      var contenedorIconos = document.getElementById("contenedor-creditos");
      contenedorIconos.innerHTML = ""; // Limpia el contenedor antes de agregar nuevos elementos

      for (let i = 0; i < curso.creditos; i++) {
        var newContent = document.createElement("a");
        newContent.className = "icon-circle";

        // Aplicar estilo normal u opaco según el número de cursados
        if (i < curso.cursados) {
          newContent.innerHTML = `<a href='https://us02web.zoom.us/j/82296455704?pwd=SVR2d#success'><i class='bx ${curso.icono_curso} nav__iconSub'></i></a>`;
        } else {
          newContent.innerHTML = `<i class='bx ${curso.icono_curso} nav__iconSub' style='opacity: 0.3;'></i>`;
        }

        contenedorIconos.appendChild(newContent);
      }
    })
    .catch((error) => {
      console.error("Error en la solicitud:", error);
    });
}

function obtenerDatosMisAlumnos(idMentor) {
  fetch(
    `${baseUrl}/index.php?c=Docentes&a=mentorias&id=${encodeURIComponent(
      idMentor
    )}`
  )
    .then((response) => {
      if (!response.ok) {
        throw new Error(
          "Error al obtener los cursos. Código de estado: " + response.status
        );
      }
      return response.json();
    })
    .then((data) => {
      var contenedor = document.getElementById("contenedor-datos-mentor");

      if (data.length > 0) {
        data.forEach((item) => {
          var row = document.createElement("tr");

          row.innerHTML = `
            <td>${item.nombreCurso}</td>
            <td>${item.nombreUsuario}</td>
            <td>${item.creditos}</td>
            <td>${item.cursados}</td>
            <td><button class="btn btn-primary" onclick="incrementarCursados(${item.idRuta}, ${item.cursados})">Incrementar</button></td>
            <td><button class="btn btn-primary" onclick="decrementarCursados(${item.idRuta}, ${item.cursados})">Decrementar</button></td>
          `;

          contenedor.appendChild(row);
        });
      } else {
        var row = document.createElement("tr");
        row.innerHTML = '<td colspan="6">No hay datos disponibles</td>';
        contenedor.appendChild(row);
      }
    })
    .catch((error) => {
      console.error("Error en la solicitud:", error);
    });
}

//DUDAS???????????????????????????????????????????????????????
function obtenerDatosDisponibilidadMentor(idMentor) {
  fetch(
    `${baseUrl}/index.php?c=Docentes&a=indexJson&mentorId=${encodeURIComponent(
      idMentor
    )}`
  )
    .then((response) => {
      if (!response.ok) {
        throw new Error(
          "Error al obtener los cursos. Código de estado: " + response.status
        );
      }
      return response.json();
    })
    .then((data) => {})
    .catch((error) => {
      console.error("Error en la solicitud:", error);
    });
}

function incrementarCursados(idRuta, cursados) {
  const data = {
    idRuta: idRuta,
    cursados: cursados,
  };

  console.log("Datos a enviar:", data); // Verificar datos antes de enviar
  fetch(`${baseUrl}/index.php?c=Docentes&a=actualizarCursados`, {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify({
      idRuta: idRuta,
      cursados: cursados,
    }),
  })
    .then((response) => response.json())
    .then((data) => {
      console.log("Respuesta del servidor:", data); // Log para verificar respuesta
      if (data.success) {
        alert("Cursados actualizado exitosamente.");
        location.reload(); // Recarga la página para ver los cambios
      } else {
        alert("Error al actualizar los cursados.");
      }
    })
    .catch((error) => {
      console.error("Error en la solicitud:", error);
    });
}

function decrementarCursados(idRuta, cursados) {
  const data = {
    idRuta: idRuta,
    cursados: cursados,
  };

  console.log("Datos a enviar:", data); // Verificar datos antes de enviar
  fetch(`${baseUrl}/index.php?c=Docentes&a=actualizarCursadosDecrementar`, {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify({
      idRuta: idRuta,
      cursados: cursados,
    }),
  })
    .then((response) => response.json())
    .then((data) => {
      console.log("Respuesta del servidor:", data); // Log para verificar respuesta
      if (data.success) {
        alert("Cursados actualizado exitosamente.");
        location.reload(); // Recarga la página para ver los cambios
      } else {
        alert("Error al actualizar los cursados.");
      }
    })
    .catch((error) => {
      console.error("Error en la solicitud:", error);
    });
}

//MOSTRAR INSCRIPCIONES
function obtenerIscripciones(idAdministrador) {
  fetch(
    `${baseUrl}/index.php?c=Administradors&a=inscripcion&id=${encodeURIComponent(
      idAdministrador
    )}`
  )
    .then((response) => {
      if (!response.ok) {
        throw new Error(
          "Error al obtener los cursos. Código de estado: " + response.status
        );
      }
      return response.json();
    })
    .then((data) => {
      var contenedor = document.getElementById(
        "contenedor-datos-administrador"
      );

      if (data.length > 0) {
        data.forEach((item) => {
          var row = document.createElement("tr");

          row.innerHTML = `
            <td>${item.nombre_usuario}</td>
            <td>${item.nombre_mentor}</td>
            <td>${item.nombre_curso}</td>
            ${
              item.estado === "empezo"
                ? `<td><button class="btn btn-primary" onclick="confirmaCompra(${item.id_inscripcion})">Confirmar compra</button></td>`
                : ""
            }
          `;

          contenedor.appendChild(row);
        });
      } else {
        var row = document.createElement("tr");
        row.innerHTML = '<td colspan="6">No hay datos disponibles</td>';
        contenedor.appendChild(row);
      }
    })
    .catch((error) => {
      console.error("Error en la solicitud:", error);
    });
}

function confirmaCompra(idInscripcion) {
  const data = {
    idInscripcion: idInscripcion,
  };

  console.log("Datos a enviar:", data); // Verificar datos antes de enviar
  fetch(`${baseUrl}/index.php?c=Administradors&a=confirmar`, {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify({
      idInscripcion: idInscripcion,
    }),
  })
    .then((response) => response.json())
    .then((data) => {
      console.log("Respuesta del servidor:", data); // Log para verificar respuesta
      if (data.success) {
        alert("Confirmacion exitosa.");
        location.reload(); // Recarga la página para ver los cambios
      } else {
        alert("Error al confirmar.");
      }
    })
    .catch((error) => {
      console.error("Error en la solicitud:", error);
    });
}

function cursosAdmi() {
  fetch(`${baseUrl}/index.php?c=Administradors&a=allCursos`)
    .then((response) => {
      if (!response.ok) {
        throw new Error(
          "Error al obtener los cursos. Código de estado: " + response.status
        );
      }
      return response.json();
    })
    .then((data) => {
      // Llamar a una función para mostrar los cursos en un select
      mostrarCursos(data);
    })
    .catch((error) => {
      console.error("Error en la solicitud:", error);
    });
}

function mostrarCursos(cursos) {
  const selectCursos = document.getElementById("selectCursos");
  selectCursos.innerHTML = ""; // Limpiar cualquier opción existente

  cursos.forEach((curso) => {
    const option = document.createElement("option");
    option.value = curso.id_curso;
    option.textContent = curso.nombre;
    selectCursos.appendChild(option);
  });
}

// Llamar a la función para cargar los cursos al cargar la página
document.addEventListener("DOMContentLoaded", cursosAdmi);

//FIN

function mostrarResultados(resultados) {
  contentBuscador.innerHTML = "";

  if (resultados.length > 0) {
    resultados.forEach(function (resultado) {
      var newContent = document.createElement("div");
      newContent.className =
        "flex p-3 my-3 hover-item cursor-pointer rounded-xl shadow-md";
      newContent.innerHTML = `
        <div class="flex items-center space-x-2">
          <span class="icon-circle">
              <i class='bx ${resultado.icono} nav__iconSub'></i>
          </span>
          <div class="m-auto cursor-pointer" onclick="redirigirClaseMuestra(${resultado.id_curso}, '${resultado.nombre}')">
              <h1 class="font-bold sm:text-2xl text-center leading-tight m-0 p-0">${resultado.nombre}</h1>
          </div>
        </div>
      `;
      contentBuscador.appendChild(newContent);
    });

    contentBuscador.classList.remove("hidden");
  } else {
    var noResultsMessage = document.createElement("div");
    noResultsMessage.className = "flex p-3 my-3 rounded-xl shadow-md";
    noResultsMessage.innerHTML = `
      <div class="w-full text-center">
        <h1 class="font-bold sm:text-2xl text-center leading-tight m-0 p-0">Oh, no hemos encontrado este curso, pero puedes comunicarte a nuestro WhatsApp para encontrar a tu mentor ideal</h1>
      </div>
    `;
    contentBuscador.appendChild(noResultsMessage);
    contentBuscador.classList.remove("hidden");
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

async function mostrarMasCategorias(idUsuario, typoCurso) {
  try {
    const response = await fetch(
      `${baseUrl}/index.php?c=Cursos&a=verCursosCategorias&tipo=${typoCurso}`
    );
    if (!response.ok) {
      throw new Error(
        "Error al obtener los cursos. Código de estado: " + response.status
      );
    }
    const cursos = await response.json();
    const carruselcurso = document.getElementById(typoCurso);

    for (const curso of cursos) {
      // Obtén el estado de inscripción para el curso actual
      const estado = await obtenerEstadoInscripcion(idUsuario, curso.id_curso);

      const newContent = document.createElement("div");
      newContent.className = "containderCard swiper-slide w-[320px]";
      newContent.innerHTML = `
        <div class="ssubContentCard">
          <div class="cardImage">
            <img src="public/${curso.foto}" alt="Descripción de la imagen">
          </div>
          <div class="cardContent">
            ${generarBotonSegunEstado(
              curso.id_curso,
              curso.nombre,
              curso.pdf,
              estado
            )}
          </div>
        </div>
      `;
      carruselcurso.appendChild(newContent);
    }
  } catch (error) {
    console.error("Error en la solicitud:", error);
  }
}

async function obtenerCursos(idUsuario) {
  try {
    const response = await fetch(`${baseUrl}/index.php?c=Cursos&a=verCursos`);
    if (!response.ok) {
      throw new Error(
        "Error al obtener los cursos. Código de estado: " + response.status
      );
    }
    const cursos = await response.json();
    filtrarDatos.push(...cursos);
    var carruselcurso = document.getElementById("content-cursos");
    for (const curso of cursos) {
      const estado = await obtenerEstadoInscripcion(idUsuario, curso.id_curso);
      // Mostrar alert con la información del estado
      //alert(`Curso: ${curso.id_curso}\nEstado: ${estado}`);
      var newContent = document.createElement("div");
      newContent.className = "containderCard swiper-slide w-[320px]";
      newContent.innerHTML = `
        <div class="ssubContentCard">
          <div class="cardImage">
            <img src="public/${curso.foto}" alt="Descripción de la imagen">
          </div>
          <div class="cardContent">
            ${generarBotonSegunEstado(
              curso.id_curso,
              curso.nombre,
              curso.pdf,
              estado
            )}
          </div>
        </div>
      `;
      carruselcurso.appendChild(newContent);
    }
  } catch (error) {
    console.error("Error en la solicitud:", error);
  }
}

async function obtenerEstadoInscripcion(idUsuario, idCurso) {
  try {
    const response = await fetch(
      `${baseUrl}/index.php?c=Usuarios&a=getEstado&idUsuario=${idUsuario}&idCurso=${idCurso}`
    );
    if (!response.ok) {
      throw new Error(
        "Error al obtener el estado de inscripción. Código de estado: " +
          response.status
      );
    }
    const data = await response.json();
    return data.estado || null;
  } catch (error) {
    console.error("Error en la solicitud:", error);
    return null;
  }
}

function generarBotonSegunEstado(idCurso, nombreCurso, pdfCurso, estado) {
  if (estado === "empezo") {
    return `
      <button class="button1" onclick="mostrarModalCompra('${nombreCurso}')">
        <span>Comprar</span>
      </button>
      <button class="button2" onclick="openPDF('public/${pdfCurso}')">
        <span>Temario</span>
      </button>
    `;
  } else if (estado === "cursando") {
    return `
      <button class="button1" onclick="redirigirClaseMuestra(${idCurso}, '${nombreCurso}')">
        <span>Mi curso</span>
      </button>
      <button class="button2" onclick="openPDF('public/${pdfCurso}')">
        <span>Temario</span>
      </button>
    `;
  } else {
    return `
      <button class="button1" onclick="redirigirClaseMuestra(${idCurso}, '${nombreCurso}')">
        <span>Clase muestra</span>
      </button>
      <button class="button2" onclick="openPDF('public/${pdfCurso}')">
        <span>Temario</span>
      </button>
    `;
  }
}

//NEW JULIO 24
function mostrarModalCompra(cursoName) {
  const modal = document.getElementById("myModalCompra");
  const modalTitle = document.getElementById("mentor-dataCompra");
  modalTitle.textContent = "Elije tu forma de pago";

  const cursoData = document.getElementById("curso-dataCompra");
  cursoData.textContent = cursoName;

  modal.style.display = "block";
}

document.addEventListener("DOMContentLoaded", () => {
  const modal = document.getElementById("myModalCompra");
  const closeModal = document.getElementsByClassName("close")[0];

  closeModal.addEventListener("click", function () {
    modal.style.display = "none";
  });

  window.addEventListener("click", function (event) {
    if (event.target === modal) {
      modal.style.display = "none";
    }
  });
});
//FIN

//CAMBIOS JULIO 24
function obtenerMentores() {
  fetch(`${baseUrl}/index.php?c=Usuarios&a=verMentores`)
    .then((response) => {
      if (!response.ok) {
        throw new Error(
          "Error al obtener los mentores. Código de estado: " + response.status
        );
      }
      return response.json();
    })
    .then((data) => {
      var carruselMentores = document.getElementById("content-mentores");
      data.forEach((mentor) => {
        var newContent = document.createElement("div");
        newContent.className = "containderCard swiper-slide w-[320px]";
        newContent.innerHTML = `
                        <div class="ssubContentCard">
                            <div class="cardImageMentor">
                                <img src="public/images/docente/${mentor.Mentor_Foto}/${mentor.Mentor_Foto}.png" alt="${mentor.Mentor_Nombre}">
                            </div>
                            <div class="cardContent flex flex-col items-end p-4">
                                <h1 class="text-white font-bold mb-2 justify-end">${mentor.Mentor_Nombre}</h1>
                                <p class="text-white mb-2">${mentor.acercademi}...</p>
                                <button class="button1" onclick="redirigirVerPerfil(${mentor.Mentor_ID})">
                                <span>Ver perfil</span>
                                </button>
                            </div>
                        </div>
                    `;
        carruselMentores.appendChild(newContent);
      });

      // Inicializar el slider de Swiper después de cargar los mentores
      var swiperMentores = new Swiper(".swiper", {
        loop: true,
        spaceBetween: 20,
        grabCursor: true,
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
            slidesPerView: 3,
          },
        },
      });
    })
    .catch((error) => {
      console.error("Error en la solicitud:", error);
    });
}

function obtenerMentoresPorTipo(tipoCurso) {
  fetch(
    `${baseUrl}/index.php?c=Usuarios&a=verMentoresPorTipo&tipoCurso=${encodeURIComponent(
      tipoCurso
    )}`
  )
    .then((response) => {
      if (!response.ok) {
        throw new Error(
          "Error al obtener los mentores. Código de estado: " + response.status
        );
      }
      return response.json();
    })
    .then((data) => {
      var carruselMentores = document.getElementById(`${tipoCurso}-mentores`);
      data.forEach((mentor) => {
        var newContent = document.createElement("div");
        newContent.className = "containderCard swiper-slide w-[320px]";
        newContent.innerHTML = `
          <div class="ssubContentCard">
            <div class="cardImageMentor">
              <img src="public/images/docente/${mentor.Mentor_Foto}/${mentor.Mentor_Foto}.png" alt="${mentor.Mentor_Nombre}">
            </div>
            <div class="cardContent flex flex-col items-end p-4">
              <h3 class="text-white font-bold mb-2">${mentor.Mentor_Nombre}</h3>
              <p class="text-white mb-2">${mentor.acercademi}...</p>
              <button class="button1" onclick="redirigirVerPerfil(${mentor.Mentor_ID})">
              <span>Ver perfil</span>
              </button>
            </div>
          </div>
        `;
        carruselMentores.appendChild(newContent);
      });
      // Inicializar el slider de Swiper después de cargar los mentores
      var swiperMentores = new Swiper(".swiper", {
        loop: true,
        spaceBetween: 20,
        grabCursor: true,
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
            slidesPerView: 3,
          },
        },
      });
    })
    .catch((error) => {
      console.error("Error en la solicitud:", error);
    });
}
//fin

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
      var carruselcurso = document.getElementById("mentorContainer");

      if (!Array.isArray(data) || data.length === 0) {
        throw new Error("No data found");
      }

      const mentoresDisponibilidad = {};

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

        const disponibilidades = {};
        mentor.Disponibilidad.forEach((dispo) => {
          console.log(
            `Processing availability: ${dispo.dia_semana} at ${dispo.hora}`
          );
          const dia = dispo.dia_semana.toLowerCase();
          if (!disponibilidades[dia]) {
            disponibilidades[dia] = [];
          }
          // Quita los segundos de la hora
          const hora = dispo.hora.substring(0, 5);
          disponibilidades[dia].push(hora);
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
                <div class="espacioAgenda">
                  <div class="agenda">
                      <div class="current-date" id="currentDate-${mentorId}"></div>
                      <div class="navigation">
                      <button id="prevWeek-${mentorId}">Anterior</button>
                      <div class="header" id="timezone-${mentorId}"></div>
                      <button id="nextWeek-${mentorId}">Siguiente</button>
                      </div>
                   <div class="grid" id="calendar-${mentorId}">
                  <!-- Celdas de fechas y horas -->
                   </div>
                   </div>
               </div>
                `;
        carruselcurso.appendChild(newContent);

        const closeButtons = document.querySelectorAll(".close");
        closeButtons.forEach((button) => {
          button.onclick = function () {
            const modal = button.closest(".modal");
            modal.style.display = "none";
          };
        });

        // Populate the calendar with availability
        populateCalendar(
          mentorId,
          disponibilidades,
          mentor.Mentor,
          mentor.Curso
        );
      });

      //NUEVO CAMBIO AGENDA
      function getDateAfterHours(hours) {
        const now = new Date();
        now.setHours(now.getHours() + hours, 0, 0, 0);
        return now;
      }
      //FIN AGENDA

      function populateCalendar(
        mentorId,
        disponibilidades,
        mentorName,
        cursoName
      ) {
        console.log(disponibilidades); // Muestra el objeto disponibilidades en la consola
        console.log(mentorId); // Muestra ID en la consola
        const calendarElement = document.getElementById(`calendar-${mentorId}`);
        const timezoneElement = document.getElementById(`timezone-${mentorId}`);
        const timezone = "America/Mexico_City";
        timezoneElement.textContent = `(-06:00) ${timezone}`;

        const daysOfWeek = [
          "lunes",
          "martes",
          "miércoles",
          "jueves",
          "viernes",
          "sábado",
          "domingo",
        ];
        const daysOfWeekShort = [
          "Lun",
          "Mar",
          "Mie",
          "Jue",
          "Vie",
          "Sab",
          "Dom",
        ];
        let startDate = new Date(); // Fecha de inicio como hoy
        startDate.setDate(startDate.getDate() - startDate.getDay() + 1); // Ajusta para comenzar en lunes

        const timeSlots = [
          "09:00",
          "10:00",
          "11:00",
          "12:00",
          "13:00",
          "14:00",
          "15:00",
          "16:00",
          "17:00",
          "18:00",
        ];

        //NUEVO CAMBIO AGENDA
        // Calcular la fecha límite (48 horas a partir de ahora)
        const dateLimit = getDateAfterHours(48);
        console.log(`Fecha límite para mostrar horarios: ${dateLimit}`);
        //FIN AGENDA

        function updateCalendar() {
          calendarElement.innerHTML = "";
          for (let i = 0; i < daysOfWeek.length; i++) {
            const date = new Date(startDate);
            date.setDate(startDate.getDate() + i);
            const headerCell = document.createElement("div");
            headerCell.classList.add("cell", "header-cell");
            headerCell.innerHTML = `${daysOfWeekShort[
              i
            ].toUpperCase()}<br>${date.getDate()} ${date.toLocaleString("es", {
              month: "short",
            })}`;
            calendarElement.appendChild(headerCell);
          }

          for (let i = 0; i < timeSlots.length; i++) {
            for (let j = 0; j < daysOfWeek.length; j++) {
              const cell = document.createElement("div");
              cell.classList.add("cell", "time");
              const day = daysOfWeek[j];
              console.log(disponibilidades[day]);
              //CAMBIOS AJENDA
              const date = new Date(startDate);
              date.setDate(startDate.getDate() + j);
              const cellDateTime = new Date(
                `${date.toDateString()} ${timeSlots[i]}`
              );
              // Mostrar en la consola
              console.log(`Fecha y hora combinadas: ${cellDateTime}`);
              //FIN AGENDA
              if (
                disponibilidades[day] &&
                disponibilidades[day].includes(timeSlots[i]) &&
                cellDateTime >= dateLimit
              ) {
                cell.textContent = timeSlots[i];
                // Añadir identificador a la celda
                cell.dataset.hora = timeSlots[i];
                cell.dataset.dia = daysOfWeek[j];
                cell.dataset.mentorId = mentorId;
                cell.dataset.mentorName = mentorName;
                cell.dataset.cursoName = cursoName;
                // Añadir evento de clic
                cell.addEventListener("click", function () {
                  if (!isLoggedIn) {
                    showLoginModal();
                    return;
                  }
                  // Obtener los datos directamente de los atributos dataset de la celda
                  const mentorId = this.dataset.mentorId;
                  const mentorName = this.dataset.mentorName;
                  const cursoName = this.dataset.cursoName;
                  const hora = this.dataset.hora;
                  const dia = this.dataset.dia;

                  if (mentorName && cursoName && hora && dia) {
                    document.getElementById("nextBtn").dataset.mentorId =
                      mentorId;
                    document.getElementById("nextBtn").dataset.hora = hora;
                    document.getElementById("nextBtn").dataset.dia = dia;
                    document.getElementById("nextBtn").dataset.mentorName =
                      mentorName;
                    document.getElementById("nextBtn").dataset.cursoName =
                      cursoName;

                    var additionalInfoModal = document.getElementById(
                      "additionalInfoModal"
                    );
                    additionalInfoModal.style.display = "block";
                  } else {
                    console.error("Faltan datos para mostrar en el modal.");
                  }
                });
              } else {
                cell.style.padding = "5px"; // Aplicar padding de 1px a las celdas vacías
                //cell.textContent = "";
              }
              calendarElement.appendChild(cell);
            }
          }
        }

        function updateCurrentDate() {
          const today = new Date();
          const currentDateElement = document.getElementById(
            `currentDate-${mentorId}`
          );
          currentDateElement.textContent = `Hoy es: ${today.toLocaleDateString(
            "es",
            { weekday: "long", year: "numeric", month: "long", day: "numeric" }
          )}`;
        }

        document
          .getElementById(`prevWeek-${mentorId}`)
          .addEventListener("click", function () {
            startDate.setDate(startDate.getDate() - 7);
            updateCalendar();
          });

        document
          .getElementById(`nextWeek-${mentorId}`)
          .addEventListener("click", function () {
            startDate.setDate(startDate.getDate() + 7);
            updateCalendar();
          });

        document
          .getElementById("nextBtn")
          .addEventListener("click", function () {
            const mentorId = this.dataset.mentorId;
            const hora = this.dataset.hora;
            const dia = this.dataset.dia;
            const mentorName = this.dataset.mentorName;
            const cursoName = this.dataset.cursoName;

            const edad = document.getElementById("edad").value;
            const conocimientos = document.getElementById(
              "selectConocimientos"
            ).value;

            if (!edad || !conocimientos) {
              alert("Por favor, completa toda la información.");
              return;
            }

            document.getElementById(
              "mentor-data"
            ).textContent = `Master Teach: ${mentorName}`;
            document.getElementById(
              "curso-data"
            ).textContent = `Deseas agendar el curso ${cursoName} con el mentor: ${mentorName} en la siguiente hora : ${hora}. Edad: ${edad}, Conocimientos Previos: ${conocimientos}`;

            var modal = document.getElementById("myModal");
            modal.style.display = "block";

            var additionalInfoModal = document.getElementById(
              "additionalInfoModal"
            );
            additionalInfoModal.style.display = "none";

            const agendarBtn = document.getElementById("agendarBtn");
            agendarBtn.setAttribute("data-mentor-id", mentorId);
            agendarBtn.setAttribute("data-hora", hora);
            agendarBtn.setAttribute("data-dia", dia);
            agendarBtn.setAttribute("data-mentor-name", mentorName);
            agendarBtn.setAttribute("data-curso-name", cursoName);
            agendarBtn.setAttribute("data-edad", edad);
            agendarBtn.setAttribute("data-conocimientos", conocimientos);
          });

        updateCurrentDate();
        updateCalendar();
      }

      document
        .getElementById("agendarBtn")
        .addEventListener("click", function () {
          const mentorID = this.getAttribute("data-mentor-id");
          const hora = this.getAttribute("data-hora");
          const dia = this.getAttribute("data-dia");
          const mentorName = this.getAttribute("data-mentor-name");
          const cursoName = this.getAttribute("data-curso-name");
          const alumnoName = nombreUsuario;
          const correoUsuario = correo;
          const edad = this.getAttribute("data-edad");
          const conocimientos = this.getAttribute("data-conocimientos");

          //alert(`Mentor ID: ${mentorID}, Nombre del Mentor: ${mentorName}, Nombre del Curso: ${cursoName}, Hora: ${hora}, Día: ${dia}, alumno: ${alumnoName}, correo: ${correoUsuario}`);

          const payload = {
            mentorID,
            hora,
            dia,
            mentorName,
            cursoName,
            alumnoName,
            correoUsuario,
            edad,
            conocimientos,
          };

          fetch(`${baseUrl}/index.php?c=Usuarios&a=agendarCita`, {
            method: "POST",
            headers: {
              "Content-Type": "application/json",
            },
            body: JSON.stringify(payload),
          })
            .then((response) => response.json())
            .then((data) => {
              if (data.success) {
                var agendadoModal = document.getElementById("agendadoModal");
                agendadoModal.style.display = "block";

                var modal = document.getElementById("myModal");
                modal.style.display = "none";
              } else {
                Toastify({
                  text: data.message,
                  duration: 3000,
                  gravity: "top",
                  position: "right",
                  backgroundColor: "#FF0000",
                  stopOnFocus: true,
                }).showToast();
              }
            })
            .catch((error) => {
              console.error("Error al agendar:", error);

              Toastify({
                text: "Error al agendar el curso. Por favor, intenta nuevamente.",
                duration: 3000,
                gravity: "top",
                position: "right",
                backgroundColor: "#FF0000",
                stopOnFocus: true,
              }).showToast();
            });
        });

      var closeButtons = document.querySelectorAll(".close");
      closeButtons.forEach((button) => {
        button.onclick = function () {
          const modal = button.closest(".modal");
          modal.style.display = "none";
        };
      });
    })
    .catch((error) => {
      console.error("Error fetching mentor data:", error);
      var carruselcurso = document.getElementById("mentorContainer");
      var newContent = document.createElement("h1");
      newContent.className = "w-full h-full font-bold text-4xl text-center";
      newContent.innerHTML = `Próximamente: Por el momento este curso no tiene profesores, sin embargo, puedes escribirnos en nuestro WhatsApp para encontrar a tu profesor de este curso 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
          <a href="https://api.whatsapp.com/message/4IGVTKTG6JFAM1?autoload=1&app_absent=0" onclick="obtenerCursos()" class="float" target="_blank">
              <i class="fa fa-whatsapp my-float"></i>
          </a>`;
      carruselcurso.appendChild(newContent);
    });

  var cerrarAgendadoBtn = document.getElementById("cerrarAgendado");
  cerrarAgendadoBtn.addEventListener("click", function () {
    var agendadoModal = document.getElementById("agendadoModal");
    agendadoModal.style.display = "none";
  });

  function showLoginModal() {
    var loginModal = document.getElementById("loginModal");
    loginModal.style.display = "block";

    setTimeout(function () {
      window.location.href =
        "https://www.widolearn.com/index.php?c=Usuarios&a=login";
    }, 3000); // Redireccionar después de 3 segundos
  }

  var modal = document.getElementById("myModal");
  var span = document.getElementsByClassName("close")[0];
  span.onclick = function () {
    modal.style.display = "none";
  };
  window.onclick = function (event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  };
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
      const mentorBio = document.getElementById("mentor-bio");
      const mentorName3 = document.getElementById("mentor-cursos");
      var carruselcurso = document.getElementById("mentor-cursos-carrusel");

      mentorName.textContent = `PORTAL DE ${data[0].Mentor}`;
      mentorName2.textContent = `¡Hola, soy ${data[0].Mentor}!`;
      mentorBio.textContent = data[0].MentorAcerca;
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

document.addEventListener("DOMContentLoaded", function () {
  document.getElementById("registroForm").addEventListener("submit", (e) => {
    e.preventDefault();

    //alert("¡Se ha presionado el botón de Registrarse!"); // Depuración para verificar el evento submit

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
        if (data.tipo === "admin") {
          window.location.href = `https://www.widolearn.com/index.php?c=Administradors&a=index`;
        } else {
          window.location.href = `index.php?c=Usuarios&a=index&n=${data.idUsuario}`;
        }
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

function agendar() {
  console.log("Oprimiste la tecla");
}

//*******************************************************************
document.addEventListener("DOMContentLoaded", function () {
  document
    .getElementById("registroFormMentores")
    .addEventListener("submit", (e) => {
      e.preventDefault();

      // alert("¡Se ha presionado el botón de Registrarse!"); // Depuración para verificar el evento submit

      const nombreMentor = document.getElementById("nombreMentor").value.trim();
      //const areaMentor = document.getElementById("selectArea").value;
      const correoMentor = document.getElementById("correoMentor").value.trim();
      const tipoMentor = document.getElementById("tipoMentor").value.trim();
      const telefonoMentor = document
        .getElementById("telefonoMentor")
        .value.trim();
      const acercaMentor = document.getElementById("acercaMentor").value.trim();
      const fotoMentor = document.getElementById("fotoMentorPerfil").files[0];
      const fotoMentorTarjeta =
        document.getElementById("fotoMentorTarejta").files[0];
      const fotoMentorPortada =
        document.getElementById("fotoMentorPortada").files[0];

      const cursoId = document.getElementById("selectCursos").value; // Capturar el valor del select

      const nombreMentorError = document.getElementById("nombreMentor-error");
      //const areaMentorError = document.getElementById("areaMentor-error");
      const correoMentorError = document.getElementById("correoMentor-error");
      const tipoMentorError = document.getElementById("tipoMentor-error");
      const telefonoMentorError = document.getElementById(
        "telefonoMentor-error"
      );
      const acercaMentorError = document.getElementById("acercaMentor-error");

      // alert("¡Se ha presionado el botón de Registrarse!"+nombreMentor); // Depuración para verificar el evento submit

      let isValid = true;

      // Limpiar mensajes de error previos
      nombreMentorError.textContent = "";
      //areaMentorError.textContent = "";
      correoMentorError.textContent = "";
      tipoMentorError.textContent = "";
      telefonoMentorError.textContent = "";
      acercaMentorError.textContent = "";

      if (nombreMentor === "" || /\d/.test(nombreMentor)) {
        nombreMentorError.textContent = "Favor de ingresar un nombre válido";
        isValid = false;
      }

      /*
        if (areaMentor === "") {
            areaMentorError.textContent = "Favor de ingresar un área válida";
            isValid = false;
        }
        */

      if (correoMentor === "" || !correoMentor.includes("@")) {
        correoMentorError.textContent = "Favor de ingresar un correo válido";
        isValid = false;
      }

      if (tipoMentor === "") {
        tipoMentorError.textContent = "Favor de ingresar un curso o asesoría";
        isValid = false;
      }

      if (telefonoMentor === "" || telefonoMentor.length < 9) {
        telefonoMentorError.textContent =
          "Favor de ingresar un número de teléfono válido";
        isValid = false;
      }

      if (acercaMentor === "") {
        acercaMentorError.textContent =
          "Favor de ingresar información y hobbies del mentor";
        isValid = false;
      }

      if (cursoId === "") {
        //Agregar validación para el select
        alert("Por favor, seleccione un curso.");
        isValid = false;
      }

      if (isValid) {
        const formData = new FormData();
        formData.append("nombreMentor", nombreMentor);
        //formData.append("areaMentor", areaMentor);
        formData.append("correoMentor", correoMentor);
        formData.append("tipoMentor", tipoMentor);
        formData.append("telefonoMentor", telefonoMentor);
        formData.append("acercaMentor", acercaMentor);
        formData.append("fotoMentorPerfil", fotoMentor);
        formData.append("fotoMentorTarjeta", fotoMentorTarjeta);
        formData.append("fotoMentorPortada", fotoMentorPortada);
        formData.append("cursoId", cursoId); // Agregar el cursoId al FormData

        enviarFormularioMentor(formData);
      }
    });
});

function enviarFormularioMentor(formData) {
  fetch(`${baseUrl}/index.php?c=Administradors&a=registro`, {
    method: "POST",
    body: formData,
  })
    .then((response) => {
      if (response.ok) {
        //alert("Va bien"); // Depuración
        return response.json();
      } else {
        console.error("Error sending data to API:", response);
        throw new Error("Error sending data to API: " + response.statusText);
      }
    })
    .then((data) => {
      if (data.success) {
        //alert("Va bien"); // Depuración
        console.log("Data sent successfully: " + data.message);
        document.getElementById("registroFormMentores").reset(); // Resetear el formulario
        mostrarToastify(data.message, "success"); // Mostrar mensaje de éxito
      } else {
        mostrarToastify(data.error, "error if (data.success)"); // Mostrar mensaje de error
      }
    })
    .catch((error) => {
      console.error("Network error:", error);
      mostrarToastify(
        "Network error enviarFormularioMentor: " + error.message,
        "error"
      ); // Mostrar error de red
    });
}
