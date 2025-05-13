<?php
include './backend/db/conection.php';
include './backend/sing_in.php';
include './backend/sing_up.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['login'])) {
    $correo = $_POST['email'];
    $password = $_POST['password'];
    $error = login_usuario($conexion, $correo, $password);
  } elseif (isset($_POST['register'])) {
    $correo = $_POST['reg_email'];
    $password = $_POST['reg_password'];
    $nombre = $_POST['reg_nombre'];
    $apellido = $_POST['reg_apellido'];
    $fecha_nacimiento = $_POST['reg_fecha_nacimiento'];
    $genero = $_POST['reg_genero'];
    $telefono = $_POST['reg_telefono'];
    $success = registrar_usuario($conexion, $nombre, $apellido, $fecha_nacimiento, $genero, $telefono, $correo, $password);
    if ($success !== 'Usuario creado correctamente. Ahora puedes iniciar sesión.') {
      $error = $success;
      unset($success);
    }
  }
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="./public/assets/css/styles.css">
</head>

<body>
  <?php include 'header.php'; ?>
  <div style="display: flex; justify-content: center; align-items: center; min-height: 60vh; flex-direction: column;">
    <?php if (!empty($error)) {
      echo '<p style="color:red;">' . $error . '</p>';
    } ?>
    <?php if (!empty($success)) {
      echo '<p style="color:green;">' . $success . '</p>';
    } ?>
    <form action="" method="POST" style="margin-bottom: 2rem;">
      <h2>Iniciar sesión</h2>
      <label for="email">Correo electrónico:</label>
      <input type="email" name="email" id="email" required>
      <br>
      <label for="password">Contraseña:</label>
      <input type="password" name="password" id="password" required>
      <br>
      <button type="submit" name="login">Iniciar sesión</button>
    </form>
    <form action="" method="POST">
      <h2>Crear usuario</h2>
      <label for="reg_nombre">Nombre:</label>
      <input type="text" name="reg_nombre" id="reg_nombre" required>
      <br>
      <label for="reg_apellido">Apellido:</label>
      <input type="text" name="reg_apellido" id="reg_apellido" required>
      <br>
      <label for="reg_fecha_nacimiento">Fecha de nacimiento:</label>
      <input type="date" name="reg_fecha_nacimiento" id="reg_fecha_nacimiento" required>
      <br>
      <label for="reg_genero">Género:</label>
      <select name="reg_genero" id="reg_genero" required>
        <option value="Hombre">Hombre</option>
        <option value="Mujer">Mujer</option>
      </select>
      <br>
      <label for="reg_telefono">Teléfono:</label>
      <input type="number" name="reg_telefono" id="reg_telefono" required>
      <br>
      <label for="reg_email">Correo electrónico:</label>
      <input type="email" name="reg_email" id="reg_email" required>
      <br>
      <label for="reg_password">Contraseña:</label>
      <input type="password" name="reg_password" id="reg_password" required>
      <br>
      <button type="submit" name="register">Crear usuario</button>
    </form>
  </div>
  <?php include 'footer.php'; ?>
</body>

</html>