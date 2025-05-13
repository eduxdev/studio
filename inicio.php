<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Talk Hands</title>
    <link rel="stylesheet" href="./public/assets/css/styles.css">
</head>
<body>
<?php include 'header.php'; ?>

<div class="relative isolate h-screen bg-cover bg-center bg-gradient-to-tr from-pink-400 via-purple-400 to-indigo-400 animate-[gradient-x_10s_ease_infinite]" style="background-image: url('./public/assets/imagenes/hero-estudio.jpg');">
  <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
    <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
  </div>
  <div class="mx-auto flex h-full max-w-6xl flex-col sm:flex-row justify-between items-center py-32 sm:py-48 lg:py-56">
    <div class="sm:w-1/2 flex justify-center">
      <img src="./public/assets/imagenes/t.png" alt="Imagen Studio" class="max-w-xs sm:max-w-sm rounded-lg shadow-lg">
    </div>
    <div class="text-center sm:text-left sm:w-1/2 space-y-6">
      <p class="text-lg leading-8 text-gray-600">Ofrecemos servicios de uñas, cejas, gelish, pedicura y rubber. ¡Déjanos consentirte y resaltar tu belleza!</p>
      <div class="flex items-center justify-center sm:justify-start gap-x-6">
        <a href="servicios.php" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Ver Servicios</a>
        <a href="nosotros.php" class="text-sm font-semibold leading-6 text-gray-900">Conócenos <span aria-hidden="true">→</span></a>
      </div>
    </div>
  </div>
</div>  

<?php include 'footer.php'; ?>
</body>
</html>
