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

<body class="min-h-screen bg-white relative">
  <?php include 'header.php'; ?>
  <div class="isolate bg-white px-6 py-24 sm:py-32 lg:px-8 flex flex-col items-center justify-center min-h-screen">
    <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]" aria-hidden="true">
      <div class="relative left-1/2 -z-10 aspect-[1155/678] w-[36.125rem] max-w-none -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-40rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
    <div class="mx-auto max-w-xl w-full bg-white/90 rounded-2xl shadow-2xl p-10">
      <div class="text-center mb-8">
        
        <h2 class="mt-6 text-3xl font-bold tracking-tight text-gray-900">Inicia sesión en tu cuenta</h2>
        <p class="mt-2 text-lg text-gray-600">Accede a tu cuenta o regístrate para disfrutar de nuestros servicios.</p>
      </div>
      <?php if (!empty($error)) { echo '<p class="mb-4 text-center text-red-600 font-semibold">' . $error . '</p>'; } ?>
      <?php if (!empty($success)) { echo '<p class="mb-4 text-center text-green-600 font-semibold">' . $success . '</p>'; } ?>
      <form action="" method="POST" class="grid grid-cols-1 gap-x-8 gap-y-6">
        <div>
          <label for="email" class="block text-sm font-semibold text-gray-900">Correo electrónico</label>
          <div class="mt-2.5">
            <input type="email" name="email" id="email" autocomplete="email" required class="block w-full rounded-lg bg-white px-4 py-3 text-base text-gray-900 border border-gray-300 placeholder:text-gray-400 focus:border-indigo-600 focus:ring-0 shadow-sm transition-all duration-200">
          </div>
        </div>
        <div>
          <label for="password" class="block text-sm font-semibold text-gray-900">Contraseña</label>
          <div class="mt-2.5">
            <input type="password" name="password" id="password" autocomplete="current-password" required class="block w-full rounded-lg bg-white px-4 py-3 text-base text-gray-900 border border-gray-300 placeholder:text-gray-400 focus:border-indigo-600 focus:ring-0 shadow-sm transition-all duration-200">
          </div>
        </div>
        <div class="pt-2">
          <button type="submit" name="login" class="block w-full rounded-lg bg-indigo-600 px-4 py-3 text-center text-base font-semibold text-white shadow-md hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 transition-all duration-200">Iniciar sesión</button>
        </div>
      </form>
      <div class="mt-10 border-t pt-10">
        <h3 class="text-lg font-semibold text-gray-900 text-center mb-4">¿No tienes cuenta? Regístrate</h3>
        <form action="" method="POST" class="grid grid-cols-1 gap-x-8 gap-y-6">
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-8 gap-y-6">
            <div>
              <label for="reg_nombre" class="block text-sm font-semibold text-gray-900">Nombre</label>
              <div class="mt-2.5">
                <input type="text" name="reg_nombre" id="reg_nombre" required class="block w-full rounded-lg bg-white px-4 py-3 text-base text-gray-900 border border-gray-300 placeholder:text-gray-400 focus:border-indigo-600 focus:ring-0 shadow-sm transition-all duration-200">
              </div>
            </div>
            <div>
              <label for="reg_apellido" class="block text-sm font-semibold text-gray-900">Apellido</label>
              <div class="mt-2.5">
                <input type="text" name="reg_apellido" id="reg_apellido" required class="block w-full rounded-lg bg-white px-4 py-3 text-base text-gray-900 border border-gray-300 placeholder:text-gray-400 focus:border-indigo-600 focus:ring-0 shadow-sm transition-all duration-200">
              </div>
            </div>
          </div>
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-8 gap-y-6">
            <div>
              <label for="reg_fecha_nacimiento" class="block text-sm font-semibold text-gray-900">Fecha de nacimiento</label>
              <div class="mt-2.5">
                <input type="date" name="reg_fecha_nacimiento" id="reg_fecha_nacimiento" required class="block w-full rounded-lg bg-white px-4 py-3 text-base text-gray-900 border border-gray-300 focus:border-indigo-600 focus:ring-0 shadow-sm transition-all duration-200">
              </div>
            </div>
            <div>
              <label for="reg_genero" class="block text-sm font-semibold text-gray-900">Género</label>
              <div class="mt-2.5">
                <select name="reg_genero" id="reg_genero" required class="block w-full rounded-lg bg-white px-4 py-3 text-base text-gray-900 border border-gray-300 focus:border-indigo-600 focus:ring-0 shadow-sm transition-all duration-200">
                  <option value="" disabled selected>Selecciona</option>
                  <option value="Hombre">Hombre</option>
                  <option value="Mujer">Mujer</option>
                </select>
              </div>
            </div>
          </div>
          <div>
            <label for="reg_telefono" class="block text-sm font-semibold text-gray-900">Teléfono</label>
            <div class="mt-2.5">
              <input type="number" name="reg_telefono" id="reg_telefono" required class="block w-full rounded-lg bg-white px-4 py-3 text-base text-gray-900 border border-gray-300 placeholder:text-gray-400 focus:border-indigo-600 focus:ring-0 shadow-sm transition-all duration-200">
            </div>
          </div>
          <div>
            <label for="reg_email" class="block text-sm font-semibold text-gray-900">Correo electrónico</label>
            <div class="mt-2.5">
              <input type="email" name="reg_email" id="reg_email" required class="block w-full rounded-lg bg-white px-4 py-3 text-base text-gray-900 border border-gray-300 placeholder:text-gray-400 focus:border-indigo-600 focus:ring-0 shadow-sm transition-all duration-200">
            </div>
          </div>
          <div>
            <label for="reg_password" class="block text-sm font-semibold text-gray-900">Contraseña</label>
            <div class="mt-2.5">
              <input type="password" name="reg_password" id="reg_password" required class="block w-full rounded-lg bg-white px-4 py-3 text-base text-gray-900 border border-gray-300 placeholder:text-gray-400 focus:border-indigo-600 focus:ring-0 shadow-sm transition-all duration-200">
            </div>
          </div>
          <div class="pt-2">
            <button type="submit" name="register" class="block w-full rounded-lg bg-indigo-600 px-4 py-3 text-center text-base font-semibold text-white shadow-md hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 transition-all duration-200">Crear usuario</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <?php include 'footer.php'; ?>
</body>

</html>