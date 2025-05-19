<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rifas BullDog</title>
    <link rel="stylesheet" href="../public/assets/css/styles.css">
</head>
<body>
    <header id="header" class="fixed inset-x-0 top-0 z-50 bg-transparent transition-all duration-300">
      <nav class="flex items-center justify-center p-4 lg:px-8" aria-label="Global">
        <!-- Menú móvil visible solo en móviles -->
        <div class="flex lg:hidden absolute left-6">
          <button id="open-menu" type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-white hover:text-green-400">
            <span class="sr-only">Abrir menú principal</span>
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
          </button>
        </div>
        
        <!-- Menú centrado para escritorio -->
        <div class="hidden lg:flex lg:justify-center lg:items-center lg:gap-x-12">
          <a href="../inicio.php" class="text-sm font-bold text-white hover:text-green-400 transition-colors">Inicio</a>
          <a href="../preguntas.php" class="text-sm font-bold text-white hover:text-green-400 transition-colors">Preguntas Frecuentes</a>
          <a href="../contacto.php" class="text-sm font-bold text-white hover:text-green-400 transition-colors">Contacto</a>
          <a href="../metodo_pago.php" class="text-sm font-bold text-white hover:text-green-400 transition-colors">Método de Pago</a>
          <a href="../comprar.php" class="text-sm font-bold text-white hover:text-green-400 transition-colors mx-4">Comprar Boletos</a>
          <a href="login.php" class="text-sm font-bold text-green-400 hover:text-green-300 transition-colors">Iniciar Sesión <span aria-hidden="true">&rarr;</span></a>
        </div>
      </nav>

      <!-- Menú móvil, mostrar/ocultar basado en el estado del menú -->
      <div id="mobile-menu" class="fixed inset-0 z-50 bg-gray-900/95 backdrop-blur-md px-6 py-6 transform -translate-x-full transition-transform duration-300 lg:hidden">
        <div class="flex items-center justify-end">
          <button id="close-menu" type="button" class="-m-2.5 rounded-md p-2.5 text-white hover:text-green-400">
            <span class="sr-only">Cerrar menú</span>
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="mt-6 flow-root">
          <div class="-my-6 divide-y divide-gray-500/10">
            <div class="space-y-2 py-6">
              <a href="../inicio.php" class="-mx-3 block rounded-lg px-3 py-2 text-base font-bold text-white hover:bg-green-900/20 hover:text-green-400">Inicio</a>
              <a href="../preguntas.php" class="-mx-3 block rounded-lg px-3 py-2 text-base font-bold text-white hover:bg-green-900/20 hover:text-green-400">Preguntas Frecuentes</a>
              <a href="../contacto.php" class="-mx-3 block rounded-lg px-3 py-2 text-base font-bold text-white hover:bg-green-900/20 hover:text-green-400">Contacto</a>
              <a href="../metodo_pago.php" class="-mx-3 block rounded-lg px-3 py-2 text-base font-bold text-white hover:bg-green-900/20 hover:text-green-400">Método de Pago</a>
              <a href="../comprar.php" class="-mx-3 block rounded-lg px-3 py-2 text-base font-bold text-white hover:bg-green-900/20 hover:text-green-400">Comprar Boletos</a>
              <a href="../login.php" class="-mx-3 block rounded-lg px-3 py-2 text-base font-bold text-green-400 hover:bg-green-900/20 hover:text-green-300">Iniciar Sesión</a>
            </div>
          </div>
        </div>
      </div>
    </header>
    <script src="../public/assets/js/menu.js"></script>
</body>
</html>