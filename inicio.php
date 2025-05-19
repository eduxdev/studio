<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rifas BullDog</title>
    <link rel="stylesheet" href="./public/assets/css/styles.css">
</head>
<body class="bg-gray-100">
<?php include 'header.php'; ?>

<!-- Hero Banner con Vehículos -->
<section class="relative h-screen w-full overflow-hidden">
    <!-- Overlay general -->
    <div class="absolute inset-0 bg-gradient-to-b from-black/30 to-black/60 z-10"></div>
    
    <!-- Contenedor de vehículos -->
    <div class="flex h-full w-full">
        <!-- Jeep Rubicon -->
        <div class="relative flex-1 overflow-hidden transition-all duration-500 ease-in-out hover:flex-[1.5]">
            <div class="absolute inset-0 bg-cover bg-center filter brightness-70 contrast-110 transition-transform duration-500 ease-in-out hover:scale-105" style="background-image: url('./public/assets/imagenes/rubicon.jpg')"></div>
            <div class="absolute bottom-8 left-0 w-full px-4 text-center text-white z-20 opacity-0 translate-y-5 transition-all duration-300 ease-in-out group-hover:opacity-100 group-hover:translate-y-0">
                <h3 class="text-xl font-bold mb-1"></h3>
                <p></p>
            </div>
        </div>
        
        <!-- Cadillac -->
        <div class="relative flex-1 overflow-hidden transition-all duration-500 ease-in-out hover:flex-[1.5]">
            <div class="absolute inset-0 bg-cover bg-center filter brightness-70 contrast-110 transition-transform duration-500 ease-in-out hover:scale-105" style="background-image: url('./public/assets/imagenes/cadillac.jpg')"></div>
            <div class="absolute bottom-8 left-0 w-full px-4 text-center text-white z-20 opacity-0 translate-y-5 transition-all duration-300 ease-in-out group-hover:opacity-100 group-hover:translate-y-0">
                <h3 class="text-xl font-bold mb-1"></h3>
                <p></p>
            </div>
        </div>
        
        <!-- GMC -->
        <div class="relative flex-1 overflow-hidden transition-all duration-500 ease-in-out hover:flex-[1.5]">
            <div class="absolute inset-0 bg-cover bg-center filter brightness-70 contrast-110 transition-transform duration-500 ease-in-out hover:scale-105" style="background-image: url('./public/assets/imagenes/gmc.jpg')"></div>
            <div class="absolute bottom-8 left-0 w-full px-4 text-center text-white z-20 opacity-0 translate-y-5 transition-all duration-300 ease-in-out group-hover:opacity-100 group-hover:translate-y-0">
                <h3 class="text-xl font-bold mb-1"></h3>
                <p></p>
            </div>
        </div>
    </div>
    
    <!-- Llamado a la acción central -->
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-30 text-center w-full max-w-lg px-4">
        <h1 class="text-4xl sm:text-5xl font-extrabold text-white mb-6 drop-shadow-lg">GANA EL VEHÍCULO DE TUS SUEÑOS</h1>
        <a href="comprar.php" class="inline-block bg-green-400 text-gray-900 font-bold text-lg px-8 py-4 rounded-full uppercase tracking-wide shadow-lg transition-all duration-300 ease-in-out border-2 border-transparent hover:bg-white hover:text-green-500 hover:border-green-400 hover:-translate-y-1 hover:shadow-xl">
            Lista de disponibles
        </a>
    </div>
</section>

<!-- Sección de Preguntas Frecuentes -->
<section class="py-20 bg-gradient-to-br from-green-600 via-green-500 to-green-600 text-white">
  <div class="container mx-auto px-4 max-w-5xl">
    <h2 class="text-4xl font-bold text-center mb-4">PREGUNTAS FRECUENTES</h2>
    <div class="h-1 w-24 bg-white mx-auto mb-12 rounded-full"></div>
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
      <!-- Columna 1 -->
      <div class="space-y-8">
        <!-- Pregunta 1 -->
        <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 shadow-lg transform transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
          <h3 class="text-xl font-bold mb-4 flex items-center">
            <svg class="w-6 h-6 mr-2 text-green-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            ¿CÓMO SE ELIGE A LOS GANADORES?
          </h3>
          <p class="text-white/90 mb-3 pl-8">Todos nuestros sorteos se realizan en base a la Lotería Nacional para la Asistencia Pública mexicana.</p>
          <p class="text-white/90 pl-8">El ganador será el participante cuyo número de boleto coincida con las últimas cifras del primer premio ganador de la Lotería Nacional.</p>
        </div>
        
        <!-- Pregunta 2 -->
        <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 shadow-lg transform transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
          <h3 class="text-xl font-bold mb-4 flex items-center">
            <svg class="w-6 h-6 mr-2 text-green-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            ¿QUÉ SUCEDE CUANDO EL NÚMERO GANADOR ES UN BOLETO NO VENDIDO?
          </h3>
          <p class="text-white/90 mb-3 pl-8">Se elige un nuevo ganador realizando la misma dinámica en otra fecha cercana (se anunciará la nueva fecha).</p>
          <p class="text-white/90 pl-8">Esto significa que, ¡tendrías el doble de oportunidades de ganar con tu mismo boleto!</p>
        </div>
      </div>
      
      <!-- Columna 2 -->
      <div class="space-y-8">
        <!-- Pregunta 3 -->
        <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 shadow-lg transform transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
          <h3 class="text-xl font-bold mb-4 flex items-center">
            <svg class="w-6 h-6 mr-2 text-green-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            ¿DÓNDE SE PUBLICA A LOS GANADORES?
          </h3>
          <p class="text-white/90 mb-3 pl-8">En nuestra página oficial de Facebook puedes encontrar todos y cada uno de nuestros sorteos anteriores, así como las transmisiones en vivo con Lotería Nacional y las entregas de premios a los ganadores!</p>
          <p class="text-white/90 pl-8">Encuentra transmisión en vivo de los sorteos en nuestra página de Facebook en las fechas indicadas a las 20:00 hrs CDMX.</p>
        </div>
        
        <!-- Contacto rápido -->
        <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 shadow-lg transform transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
          <h3 class="text-xl font-bold mb-4 flex items-center">
            <svg class="w-6 h-6 mr-2 text-green-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
            </svg>
            CONTÁCTANOS
          </h3>
          <p class="text-white/90 mb-3 pl-8">¿Tienes más preguntas? Contáctanos directamente:</p>
          <div class="flex items-center mt-4 pl-8">
            <svg class="w-5 h-5 mr-2 text-green-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
            </svg>
            <a href="https://wa.me/8994520309" class="text-white font-medium hover:text-green-300 transition-colors">WHATSAPP: (899) 452 0309</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Sección Acerca de Nosotros -->
<section class="py-16 bg-gray-900 text-white">
  <div class="container mx-auto px-4 max-w-5xl">
    <div class="text-center mb-10">
      <h2 class="text-3xl font-bold">ACERCA DE NOSOTROS</h2>
      <div class="h-1 w-20 bg-green-500 mx-auto mt-4 rounded-full"></div>
    </div>
    
    <div class="max-w-3xl mx-auto text-center">
      <div class="mb-8">
        <p class="text-lg mb-4">Sorteos ENTRE AMIGOS en base a LOTERÍA NACIONAL</p>
        <div class="text-3xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-green-600">ARRIESGA POCO Y GANA MUCHO!</div>
      </div>
      
      <div class="py-8 border-t border-gray-800">
        <h3 class="text-xl font-bold mb-6 flex items-center justify-center">
          <svg class="w-6 h-6 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
          </svg>
          CONTÁCTANOS
        </h3>
        <a href="https://wa.me/+528994520309" class="block bg-green-600 hover:bg-green-700 transition-colors px-6 py-3 rounded-lg text-lg font-bold mx-auto max-w-xs">
          WHATSAPP: (899) 452 0309
        </a>
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>

<script>
// Hacer que las imágenes de vehículos tengan movimiento al hacer hover
document.addEventListener('DOMContentLoaded', () => {
  const vehicleSlides = document.querySelectorAll('.flex-1');
  
  vehicleSlides.forEach(slide => {
    slide.addEventListener('mouseenter', () => {
      slide.classList.add('group');
      const info = slide.querySelector('div:nth-child(2)');
      if (info) {
        info.classList.remove('opacity-0', 'translate-y-5');
        info.classList.add('opacity-100', 'translate-y-0');
      }
    });
    
    slide.addEventListener('mouseleave', () => {
      slide.classList.remove('group');
      const info = slide.querySelector('div:nth-child(2)');
      if (info) {
        info.classList.add('opacity-0', 'translate-y-5');
        info.classList.remove('opacity-100', 'translate-y-0');
      }
    });
  });
});
</script>
</body>
</html>
