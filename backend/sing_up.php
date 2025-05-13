<?php
include_once __DIR__ . '/db/conection.php';

function registrar_usuario($conexion, $nombre, $apellido, $fecha_nacimiento, $genero, $telefono, $correo, $password) {
    $nombre = mysqli_real_escape_string($conexion, $nombre);
    $apellido = mysqli_real_escape_string($conexion, $apellido);
    $fecha_nacimiento = mysqli_real_escape_string($conexion, $fecha_nacimiento);
    $genero = mysqli_real_escape_string($conexion, $genero);
    $telefono = mysqli_real_escape_string($conexion, $telefono);
    $correo = mysqli_real_escape_string($conexion, $correo);
    $password = mysqli_real_escape_string($conexion, $password);
    $rol = 'Usuario normal';
    $sql = "INSERT INTO usuarios (nombre, apellido, fecha_nacimiento, genero, telefono, correo_electronico, contraseña, rol) VALUES ('$nombre', '$apellido', '$fecha_nacimiento', '$genero', '$telefono', '$correo', '$password', '$rol')";
    if (mysqli_query($conexion, $sql)) {
        return 'Usuario creado correctamente. Ahora puedes iniciar sesión.';
    } else {
        return 'Error al crear usuario.';
    }
}
?>