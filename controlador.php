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
    case 3:
        header("location: unidad_academica");
        break;
    case 4:
        header("location: coordinador");
        break;
    case 5:
        header("location: docente");
        break;

    default:
        header("location: login/");
        break;
}
