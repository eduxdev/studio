<?php
include_once __DIR__ . '/db/conection.php';
session_start();

function login_usuario($conexion, $correo, $password) {
    $correo = mysqli_real_escape_string($conexion, $correo);
    $password = mysqli_real_escape_string($conexion, $password);
    $sql = "SELECT * FROM usuarios WHERE correo_electronico = '$correo'";
    $result = mysqli_query($conexion, $sql);
    if ($result && mysqli_num_rows($result) === 1) {
        $usuario = mysqli_fetch_assoc($result);
        if ($password === $usuario['contraseña']) {
            $_SESSION['usuario'] = $usuario['correo_electronico'];
            $_SESSION['rol'] = $usuario['rol'];
            if ($usuario['rol'] === 'Administrador') {
                header('Location: ./admin/d_admin.php');
                exit();
            } else {
                header('Location: ./usuario/d_usuario.php');
                exit();
            }
        } else {
            return 'Contraseña incorrecta.';
        }
    } else {
        return 'Usuario no encontrado.';
    }
    return null;
}
?>