<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet" />
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
		margin: 0;
		/* Elimina los márgenes por defecto */
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
		position: relative;
		/* Agrega posición relativa para .header */
	}

	.menu.container img {
		width: 500px;
		/* Establece el ancho deseado para la imagen */
		height: auto;
		/* Hace que la altura se ajuste automáticamente para mantener la proporción original */
		position: absolute;
		/* Establece el posicionamiento absoluto para la imagen dentro del contenedor */
		top: 10%;
		/* Posiciona la parte superior de la imagen en el 50% del contenedor */
		left: 5%;
		/* Posiciona la parte izquierda de la imagen en el 50% del contenedor */
	}

	.bloque1 {
		border-radius: 40px 0 0 40px;
		/* redondea la esquina superior izquierda y la esquina inferior izquierda */
		width: 30%;
		height: auto;
		background-color: rgba(255,
				255,
				255,
				0.5);
		/* Blanco con 50% de transparencia */
		align-items: center;
		display: block;
		justify-content: center;
		position: absolute;
		/* Establece posición absoluta para .bloque1 */
		top: 0;
		/* Lo coloca en la parte superior */
		right: 0;
		/* Lo coloca al inicio horizontal */
		padding: 50px;
		/* Ajusta el espacio interno del contenedor */
		box-shadow: 0px 0px 35px 0px rgba(0, 0, 0, 0.75);
		/* A帽ade una sombra alrededor del bloque */
	}

	.mi-espacio {
		border-radius: 20px;
		/* Bordes redondeados */
		background-color: #08b7ff;
		/* Color de fondo azul */
		color: white;
		/* Color del texto blanco */
		padding: 15px 25px;
		/* Espacio interno */
		border: none;
		/* Sin borde */
		cursor: pointer;
		/* Cursor de puntero */
		transition: background-color 0.3s;
		/* Transición suave del color de fondo */
		width: 100%;
		margin-bottom: 13px;
	}

	/* Cambiar el color de fondo cuando el cursor pasa sobre el botón */
	.mi-espacio:hover {
		background-color: #096dad;
		/* Color de fondo azul más oscuro */
	}

	.registrarse {
		border-radius: 20px;
		/* Bordes redondeados */
		background-color: white;
		/* Color de fondo azul */
		color: black;
		/* Color del texto blanco */
		padding: 15px 25px;
		/* Espacio interno */
		border: none;
		/* Sin borde */
		cursor: pointer;
		/* Cursor de puntero */
		transition: background-color 0.3s;
		/* Transición suave del color de fondo */
		width: 100%;
		margin-bottom: 13px;
	}

	/* Cambiar el color de fondo cuando el cursor pasa sobre el botón */
	.registrarse:hover {
		background-color: gray;
		/* Color de fondo azul más oscuro */
	}

	.ver-cursos {
		border-radius: 20px;
		/* Bordes redondeados */
		background-color: #0efff9;
		/* Color de fondo azul */
		color: black;
		/* Color del texto blanco */
		padding: 15px 25px;
		/* Espacio interno */
		border: none;
		/* Sin borde */
		cursor: pointer;
		/* Cursor de puntero */
		transition: background-color 0.3s;
		/* Transición suave del color de fondo */
		width: 100%;
		margin-bottom: 13px;
	}

	/* Cambiar el color de fondo cuando el cursor pasa sobre el botón */
	.ver-cursos:hover {
		background-color: #08b7ff;
		/* Color de fondo azul más oscuro */
	}

	h2 {
		display: block;
		font-size: 1.7em;
		margin-block-start: 1em;
		margin-block-end: 1em;
		margin-inline-start: 0px;
		margin-inline-end: 0px;
		font-weight: bold;
		color: black;
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
		background-color: rgba(0, 0, 0, 0.8);
		/* Color de fondo transparente oscuro */
		padding: 20px;
		border-radius: 0px;
		/* Bordes redondos */
		color: white;
		/* Color del texto */
	}

	.formulario-inicio-sesion {
		display: none;
		/* Oculta el formulario al inicio */
	}

	.formulario-inicio-sesion {
		background-color: white;
		/* Color de fondo blanco al inicio */
		position: fixed;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		border-radius: 20px;
		/* Bordes redondeados */
		padding: 20px 0px 0px;
		z-index: 9999;
		/* Asegura que esté por encima de otros elementos */
		backdrop-filter: blur(5px);
		/* Hace borroso el fondo */
		text-align: center;
		box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.5);
		/* Sombra */
	}

	.formulario-inicio-sesion form {
		background-color: rgba(240, 240, 240, 0.9);
		/* Color de fondo gris muy claro */
		border-radius: 20px;
		/* Bordes redondeados */
		padding: 20px;
	}

	.formulario-inicio-sesion h2 {
		margin-bottom: 20px;
	}

	.formulario-inicio-sesion p {
		text-align: left;
		/* Alinea el texto a la izquierda */
		margin-bottom: 5px;
		/* Añade un pequeño espacio entre los párrafos */
	}

	.formulario-inicio-sesion input {
		margin-bottom: 10px;
		padding: 10px;
		border-radius: 20px;
		border: 1px solid #ccc;
		width: 100%;
	}

	.formulario-inicio-sesion button {
		padding: 10px 20px;
		border-radius: 20px;
		border: none;
		background-color: #08b7ff;
		/* Color de fondo azul */
		color: white;
		cursor: pointer;
		transition: background-color 0.3s;
		/* Transición suave del color de fondo */
	}

	.formulario-inicio-sesion button:hover {
		background-color: #096dad;
		/* Color de fondo azul más oscuro */
	}



	.formulario-registro {
		display: none;
		/* Oculta el formulario al inicio */
	}

	.formulario-registro {
		background-color: white;
		/* Color de fondo blanco al inicio */
		position: fixed;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		border-radius: 20px;
		/* Bordes redondeados */
		padding: 20px 0px 0px;
		z-index: 9999;
		/* Asegura que esté por encima de otros elementos */
		backdrop-filter: blur(5px);
		/* Hace borroso el fondo */
		text-align: center;
		box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.5);
		/* Sombra */
	}

	.formulario-registro form {
		background-color: rgba(240, 240, 240, 0.9);
		/* Color de fondo gris muy claro */
		border-radius: 20px;
		/* Bordes redondeados */
		padding: 20px;
	}

	.formulario-registro h2 {
		margin-bottom: 20px;
	}

	.formulario-registro p {
		text-align: left;
		/* Alinea el texto a la izquierda */
		margin-bottom: 5px;
		/* Añade un pequeño espacio entre los párrafos */
	}

	.formulario-registro input {
		margin-bottom: 10px;
		padding: 10px;
		border-radius: 20px;
		border: 1px solid #ccc;
		width: 100%;
	}

	.formulario-registro button {
		padding: 10px 20px;
		border-radius: 20px;
		border: none;
		background-color: #08b7ff;
		/* Color de fondo azul */
		color: white;
		cursor: pointer;
		transition: background-color 0.3s;
		/* Transición suave del color de fondo */
	}

	.formulario-registro button:hover {
		background-color: #096dad;
		/* Color de fondo azul más oscuro */
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
			position: relative;
			/* Agrega posición relativa para .header */
		}

		.bloque1 {
			text-align: center;
			/* Alinea el contenido al centro */
			position: static;
			/* Elimina la posición absoluta */
			width: 100%;
			/* Ocupa todo el ancho disponible */
			padding: 50px 20px;
			/* Ajusta el espacio interno del contenedor */
		}
	}
</style>

<body>
	<header class="header">
		<div class="menu container">
			<img src="images/titulo.png" alt="Descripción de la imagen" />
		</div>
		<div class="bloque1">
			<h2>Tu experiencia de aprendizaje te espera</h2>
			<button class="mi-espacio">
				<span>Mi espacio</span>
			</button>
			<br>
			<button class="Registrarse">
				<span>Registrarse</span>
			</button>
			<br>
			<form action="index.php?c=usuarios&a=muestra" method="post">
			<button class="ver-cursos">
				<span>Ver cursos</span>
			</button>
			</form>
			
			<form action="index.php?c=docentes&a=index" method="post">
			<button class="ver-cursos">
				<span>Soy docente</span>
			</button>
			</form>
			<br>
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
			<h4>Cursos en linea y presenciales</h4>
		</div>
	</header>

	<div id="formulario-inicio-sesion" class="formulario-inicio-sesion">
		<button id="cerrar-formulario" style="position: absolute; top: 10px; right: 10px; cursor: pointer;">X</button>
		<h2>¡Hola de nuevo!</h2>
		<form action="index.php?c=usuarios&a=iniciarSesion" method="post">
			<!-- Aquí puedes agregar los campos de usuario y contraseña -->
			<p>Celular:</p>
			<input type="password" name="contraseña" required>
			<p>Correo electronico:</p>
			<input type="text" name="correo" required>
			<button type="submit">Iniciar Sesión</button>
		</form>
	</div>

	<div id="formulario-registro" class="formulario-registro">
		<button id="cerrar-formulario2" style="position: absolute; top: 10px; right: 10px; cursor: pointer;">X</button>
		<h2>¡Estás apunto de crear tu mundo!</h2>
		<form action="index.php?c=usuarios&a=registro" method="post">
			<!-- Aquí puedes agregar los campos de usuario y contraseña -->
			<p>Nombre completo (Titular de la cuenta):</p>
			<input type="text" name="nombre" required>
			<p>Correo electronico:</p>
			<input type="text" name="correo" required>
			<p>Celular:</p>
			<input type="password" name="celular" required>
			<button type="submit">Registrarse</button>
		</form>
	</div>


</body>
<script>
	// Mi espacio
	document.addEventListener("DOMContentLoaded", function () {
		var botonMiEspacio = document.querySelector(".mi-espacio");
		var formularioInicioSesion = document.getElementById("formulario-inicio-sesion");
		var botonCerrarFormulario = document.getElementById("cerrar-formulario");

		botonMiEspacio.addEventListener("click", function (event) {
			event.preventDefault(); // Evita el comportamiento predeterminado del botón (enviar formulario)
			formularioInicioSesion.style.display = "block";
		});

		botonCerrarFormulario.addEventListener("click", function (event) {
			event.preventDefault(); // Evita el comportamiento predeterminado del botón (enviar formulario)
			formularioInicioSesion.style.display = "none";
		});


	});

	// Registrarse
	document.addEventListener("DOMContentLoaded", function () {
		var botonMiEspacio = document.querySelector(".registrarse");
		var formularioInicioSesion = document.getElementById("formulario-registro");
		var botonCerrarFormulario = document.getElementById("cerrar-formulario2");

		botonMiEspacio.addEventListener("click", function (event) {
			event.preventDefault(); // Evita el comportamiento predeterminado del botón (enviar formulario)
			formularioInicioSesion.style.display = "block";
		});

		botonCerrarFormulario.addEventListener("click", function (event) {
			event.preventDefault(); // Evita el comportamiento predeterminado del botón (enviar formulario)
			formularioInicioSesion.style.display = "none";
		});


	});



</script>

</html>