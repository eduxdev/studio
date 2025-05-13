<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Treisi Guillen</title>
    <link rel="stylesheet" href="../public/assets/css/styles.css">
</head>
<body>
    <header class="absolute inset-x-0 top-0 z-50">
      <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
        <div class="flex lg:flex-1">
          <a href="../inicio.php" class="-m-1.5 p-1.5">
            <span class="sr-only">Talk Hands</span>
            <img class="h-15 w-8 rounded-lg" src="../public/assets/imagenes/t.png" alt="logo">
          </a>
        </div>
        <div class="flex lg:hidden">
          <button id="open-menu" type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
            <span class="sr-only">Abrir menú principal</span>
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
          </button>
        </div>
        <div class="hidden lg:flex lg:gap-x-12">
          <a href="../inicio.php" class="text-sm font-semibold text-gray-900">Inicio</a>
          <a href="../productos.php" class="text-sm font-semibold text-gray-900">Productos</a>
          <a href="../servicios.php" class="text-sm font-semibold text-gray-900">Servicios</a>
          <a href="../nosotros.php" class="text-sm font-semibold text-gray-900">Sobre Nosotros</a>
        </div>
        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
          <a href="login.php" class="text-sm font-semibold text-gray-900">Iniciar Sesión <span aria-hidden="true">&rarr;</span></a>
        </div>
      </nav>

      <!-- Menú móvil, mostrar/ocultar basado en el estado del menú -->
      <div id="mobile-menu" class="hidden fixed inset-0 z-50 bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
        <div class="flex items-center justify-between">
          <a href="../inicio.php" class="-m-1.5 p-1.5">
            <span class="sr-only">Treisi Guillen</span>
  
          </a>
          <button id="close-menu" type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
            <span class="sr-only">Cerrar menú</span>
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="mt-6 flow-root">
          <div class="-my-6 divide-y divide-gray-500/10">
            <div class="space-y-2 py-6">
              <a href="../inicio.php" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold text-gray-900 hover:bg-gray-50">Inicio</a>
              <a href="../productos.php" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold text-gray-900 hover:bg-gray-50">Productos</a>
              <a href="../servicios.php" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold text-gray-900 hover:bg-gray-50">Servicios</a>
              <a href="../nosotros.php" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold text-gray-900 hover:bg-gray-50">Sobre Nosotros</a>
              <a href="../login.php" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold text-indigo-600 hover:bg-gray-50">Iniciar Sesión</a>
            </div>
            
          </div>
        </div>
      </div>
    </header>
    <script src="../public/assets/js/menu.js"></script>
</body>
</html>