<?php

class Conectar
{

	public static function conexion()
	{

		$servidor = "localhost"; // Dirección del servidor de la base de datos
		$usuario = "root"; // Nombre de usuario de la base de datos
		$contraseña = "12345"; // Contraseña de la base de datos (deja en blanco si no tiene contraseña)
		$baseDeDatos = "aerobotLearning"; // Nombre de la base de datos

		// Crear y devolver la conexión
		$conexion = new mysqli($servidor, $usuario, $contraseña, $baseDeDatos);

		// Verificar si hay errores en la conexión
		if ($conexion->connect_error) {
			die("Error de conexión: " . $conexion->connect_error);
		}

		return $conexion;
	}
}
