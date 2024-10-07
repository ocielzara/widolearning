<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

// Importar sus controladores
require_once "Config/config.php";
require_once "Core/routes.php";
require_once "Config/database.php";
require_once "Controllers/Usuarios.php";
require_once "Controllers/Docentes.php";
require_once "Controllers/Cursos.php";
// Nuevo periodo junio julio 24
require_once "Controllers/Administradors.php";

// Mediante la URL vamos a saber qué controlador se usa
// ejemplo index.php?c=sedes
if (isset($_GET['c'])) {
    $controlador = cargarControlador($_GET['c']);

    if (isset($_GET['a'])) {
        // Capturar el ID del curso usando 'idCurso'
        $idCurso = $_GET['idCurso'] ?? null; // Capturamos el idCurso
        
        if (isset($idCurso) && isset($_GET['id2'])) {
            cargarAccion($controlador, $_GET['a'], $idCurso, $_GET['id2']);
        } else if (isset($idCurso)) {
            cargarAccion($controlador, $_GET['a'], $idCurso);
        } else {
            cargarAccion($controlador, $_GET['a']);
        }
    } else {
        cargarAccion($controlador, ACCION_PRINCIPAL);
    }
} else {
    $controlador = cargarControlador(CONTROLADOR_PRINCIPAL);
    $accionTmp = ACCION_PRINCIPAL;
    $controlador->$accionTmp();
}
