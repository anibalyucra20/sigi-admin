<?php
// ------------------------ Busquedas ------------------------------

















function buscarSesionLoginById($conexion, $id){
	$sql = "SELECT * FROM sesion WHERE id='$id'";
	return mysqli_query($conexion, $sql);
}
function buscarDocenteById($conexion, $id){
	$sql = "SELECT * FROM docente WHERE id='$id'";
	return mysqli_query($conexion, $sql);
}