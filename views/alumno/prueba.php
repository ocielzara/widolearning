<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css"
      rel="stylesheet"
    />
    <title>Home</title>
  </head>

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      text-decoration: none;
      list-style: none;
    }

    body {
      font-family: "Poppins", sans-serif;
      background-color: #1f1f1f;
      margin: 0; /* Elimina los márgenes por defecto */
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
    }

    .header {
      background-image: url(images/home.png);
      background-position: center top;
      background-repeat: no-repeat;
      background-size: cover;
      min-height: 120vh;
      display: flex;
      align-items: center;
      position: relative; /* Agrega posición relativa para .header */
    }

    .menu.container img {
      width: 500px; /* Establece el ancho deseado para la imagen */
      height: auto; /* Hace que la altura se ajuste automáticamente para mantener la proporción original */
      position: absolute; /* Establece el posicionamiento absoluto para la imagen dentro del contenedor */
      top: 10%; /* Posiciona la parte superior de la imagen en el 50% del contenedor */
      left: 5%; /* Posiciona la parte izquierda de la imagen en el 50% del contenedor */
    }

    .bloque1 {
      border-radius: 40px 0 0 40px; /* redondea la esquina superior izquierda y la esquina inferior izquierda */
      width: 30%;
      height: auto;
      background-color: rgba(
        255,
        255,
        255,
        0.5
      ); /* Blanco con 50% de transparencia */
      align-items: center;
      display: block;
      justify-content: center;
      position: absolute; /* Establece posición absoluta para .bloque1 */
      top: 0; /* Lo coloca en la parte superior */
      right: 0; /* Lo coloca al inicio horizontal */
      padding: 50px; /* Ajusta el espacio interno del contenedor */
      box-shadow: 0px 0px 35px 0px rgba(0, 0, 0, 0.75); /* A帽ade una sombra alrededor del bloque */
    }

    h2 {
      display: block;
      font-size: 1.7em;
      margin-block-start: 1em;
      margin-block-end: 1em;
      margin-inline-start: 0px;
      margin-inline-end: 0px;
      font-weight: bold;
      color: white;
    }

    #whatsapp-button {
      display: flex;
      align-items: center;
      background-color: #ffffff;
      border: none;
      border-radius: 20px; /* Bordes redondos */
      padding: 5px 20px 5px 60px; /* Ajusta el padding para dejar espacio para el avatar */
      position: relative; /* Agrega posición relativa para el contenedor del botón */
    }

    .avatar {
      width: 60px; /* Ajusta el tamaño del avatar */
      height: 60px;
      border-radius: 50%; /* Avatar circular */
      position: absolute; /* Establece posición absoluta para el avatar */
      left: -10; /* Ajusta la posición del avatar */
    }

    #whatsapp-button span {
      font-size: 16px;
      color: #000000;
      margin-left: 5px; /* Añade un margen entre el avatar y el texto */
    }

    .center {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }

    .input {
      display: none;
    }

    .button {
      position: relative;
      box-sizing: border-box;
      display: inline-block;
      width: 30px;
      height: 30px;
      border-radius: 50px;
      margin: 5px;
      background: none;
      border: 1px solid #fff;
      color: #fff;
      cursor: pointer;
      text-align: center;
      font-size: 16px;
      font-weight: 400;
      line-height: 27px;
      transition: all 0.5s ease-in-out;
    }

    .iconos {
      width: 200px;
      display: flex;
      justify-content: space-around;
      margin: auto;
    }

    .border-icon {
      height: 10px;
      width: 10px;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 1.2rem;
      border: solid thin white;
      border-radius: 50%;
      font-size: 1.2rem;
      transition: all 0.3s ease-in;
      margin: 5px;
    }

    .border-icon:hover {
      background-color: white;
      cursor: pointer;
    }

    .frace img {
      background-position: center top;
      background-repeat: no-repeat;
      background-size: cover;
      width: 350px;
    }
    
    .informacion {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  background-color: rgba(0, 0, 0, 0.8); /* Color de fondo transparente oscuro */
  padding: 20px;
  border-radius: 0px; /* Bordes redondos */
  color: white; /* Color del texto */
}

 @media(max-width:991px) {
    .header {
      background-image: url(images/homeLiso.png);
      background-position: center top;
      background-repeat: no-repeat;
      background-size: cover;
      min-height: 120vh;
      display: flex;
      align-items: center;
      position: relative; /* Agrega posición relativa para .header */
    }
    
    .bloque1 {
    text-align: center; /* Alinea el contenido al centro */
    position: static; /* Elimina la posición absoluta */
    width: 100%; /* Ocupa todo el ancho disponible */
    padding: 50px 20px; /* Ajusta el espacio interno del contenedor */
  }
    }
  </style>

  <body>
    <header class="header">
      <div class="menu container">
        <img src="images/titulo.png" alt="Descripción de la imagen" />
      </div>
      <div class="bloque1">
        <h2>Proximamente una nueva experiencia de aprendizaje</h2>
        <button
          id="whatsapp-button"
          class="btn btn-primary btn-whatsapp"
          data-phone="2282470462"
          data-message="Hola, quisiera saber mas acerca de "
        >
          <img src="images/whatsapp.png" alt="Avatar" class="avatar" />
          <span>Solicita tu clase muestra gratuita</span>
        </button>
        <br />
        <a href="https://forms.gle/cAMGNCpCLx6SmMQe9" id="whatsapp-button">
          <img src="images/agenda.png" alt="Avatar" class="avatar" />
          <span>Agenda tu primera clase GRATIS</span>
        </a>
        <br />
        <div class="iconos">
          <div class="border-icon">
            <i class="bx bxl-facebook-circle"></i>
          </div>
          <div class="border-icon">
            <i class="bx bxl-instagram"></i>
          </div>
          <div class="border-icon">
            <i class="bx bxl-tiktok"></i>
          </div>
          <div class="border-icon">
            <i class="bx bxl-youtube"></i>
          </div>
          <div class="border-icon">
            <i class="bx bxl-gmail"></i>
          </div>
        </div>
        <br />
        <div class="frace">
          <img src="images/frace.png" alt="Descripción de la imagen" />
        </div>
      </div>
      <div class="informacion">
        <h4>Cursos en linea particulares | Roblox | Programacion | Dibujo | Y mas</h4>
      </div>
    </header>
  </body>
  <script>
    //Whatsapp
    document.addEventListener("DOMContentLoaded", function () {
      var whatsappButtons = document.querySelectorAll(".btn-whatsapp");
      whatsappButtons.forEach(function (button) {
        button.addEventListener("click", function () {
          var phone = this.getAttribute("data-phone");
          var message = this.getAttribute("data-message");
          var whatsappLink =
            "https://wa.me/" + phone + "?text=" + encodeURIComponent(message);
          window.open(whatsappLink, "_blank");
        });
      });
    });
  </script>
</html>
