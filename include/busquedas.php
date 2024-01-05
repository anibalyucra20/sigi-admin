<?php

function buscarDatosGenerales($conexion){
	$sql = "SELECT * FROM datos_institucionales WHERE id=1";
	return mysqli_query($conexion, $sql);
}
function buscarDatosSistema($conexion){
	$sql = "SELECT * FROM datos_sistema WHERE id=1";
	return mysqli_query($conexion, $sql);
}

function buscarPresentePeriodoAcad($conexion){
	$sql = "SELECT * FROM periodo_academico ORDER BY id DESC LIMIT 1";
	return mysqli_query($conexion, $sql);
}



// ------------------------ Busquedas ------------------------------
function buscarSesionLoginById($conexion, $id){
	$sql = "SELECT * FROM sesion WHERE id='$id'";
	return mysqli_query($conexion, $sql);
}

// ----------------------- Busquedas Usuarios ------------------------
function buscarUsuarioById($conexion, $id){
	$sql = "SELECT * FROM usuarios WHERE id='$id'";
	return mysqli_query($conexion, $sql);
}
function buscarUsuarioByDni($conexion, $dni){
	$sql = "SELECT * FROM usuarios WHERE dni='$dni'";
	return mysqli_query($conexion, $sql);
}
