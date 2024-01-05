<?php
session_start();
include("include/conexion.php");
include("include/busquedas.php");
include("include/funciones.php");

$id_cargo = buscar_rol_sesion($conexion, $_SESSION['id_sesion'], $_SESSION['token']);


switch ($id_cargo) {
    case 1:
        header("location: direccion");
        break;
    case 2:
        header("location: secretaria");
        break;
    default:
        header("location: login/");
        break;
}
