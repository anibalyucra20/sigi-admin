<?php 


function buscar_rol_sesion($conexion, $id_sesion, $token)
{
    $b_sesion = buscarSesionLoginById($conexion, $id_sesion);
    $r_b_sesion = mysqli_fetch_array($b_sesion);
    if (password_verify($r_b_sesion['token'], $token)) {
        $b_docente = buscarUsuarioById($conexion, $r_b_sesion['id_usuario']);
        $r_b_docente = mysqli_fetch_array($b_docente);
        return $r_b_docente['id_rol'];
    }
    return 0;
}

function generar_llave()
{
    $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    function generate_string($input, $strength)
    {
        $input_length = strlen($input);
        $random_string = '';
        for ($i = 0; $i < $strength; $i++) {
            $random_character = $input[mt_rand(0, $input_length - 1)];
            $random_string .= $random_character;
        }
        return $random_string;
    }
    $llave = generate_string($permitted_chars, 30);
    return $llave;
}


function buscar_usuario_sesion($conexion, $id_sesion, $token)
{
    $b_sesion = buscarSesionLoginById($conexion, $id_sesion);
    $r_b_sesion = mysqli_fetch_array($b_sesion);
    if (password_verify($r_b_sesion['token'], $token)) {
        return $r_b_sesion['id_docente'];
    }
    return 0;
}

function reg_sesion($conexion, $id_docente, $token)
{
    $fecha_hora_inicio = date("Y-m-d H:i:s");
    $fecha_hora_fin = strtotime('+1 minute', strtotime($fecha_hora_inicio));
    $fecha_hora_fin = date("Y-m-d H:i:s", $fecha_hora_fin);

    $insertar = "INSERT INTO sesiones (id_usuario, fecha_hora_inicio, fecha_hora_fin, token) VALUES ('$id_docente','$fecha_hora_inicio','$fecha_hora_fin','$token')";
    $ejecutar_insertar = mysqli_query($conexion, $insertar);
    if ($ejecutar_insertar) {
        //ultimo registro de sesion
        $id_sesion = mysqli_insert_id($conexion);
        return $id_sesion;
    } else {
        return 0;
    }
}