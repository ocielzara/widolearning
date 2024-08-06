<?php

class Conectar
{
	public static function conexion()
	{
		$servidor = "localhost";
		$usuario = "root";
		$contraseña = "12345";
		$baseDeDatos = "widolearningv2";

		// Crear y devolver la conexión
		$conexion = new mysqli($servidor, $usuario, $contraseña, $baseDeDatos);

		// Verificar si hay errores en la conexión
		if ($conexion->connect_error) {
			die("Error de conexión: " . $conexion->connect_error);
		}

		return $conexion;
	}
}
