<?php 


function buscar_rol_sesion($conexion, $id_sesion, $token)
{
    $b_sesion = buscarSesionLoginById($conexion, $id_sesion);
    $r_b_sesion = mysqli_fetch_array($b_sesion);
    if (password_verify($r_b_sesion['token'], $token)) {
        $b_docente = buscarDocenteById($conexion, $r_b_sesion['id_docente']);
        $r_b_docente = mysqli_fetch_array($b_docente);
        return $r_b_docente['id_cargo'];
    }
    return 0;
}