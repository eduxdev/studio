document.addEventListener('DOMContentLoaded', () => {
  const header = document.getElementById('header');
  const scrollThreshold = 50;
  const openMenuButton = document.getElementById('open-menu');
  const closeMenuButton = document.getElementById('close-menu');
  const mobileMenu = document.getElementById('mobile-menu');
  
  // Función para actualizar el estilo del header al hacer scroll
  function updateHeaderStyle() {
    if (window.scrollY > scrollThreshold) {
      header.classList.add('bg-gray-900/80', 'backdrop-blur-sm', 'shadow-md');
      header.classList.remove('bg-transparent');
    } else {
      header.classList.remove('bg-gray-900/80', 'backdrop-blur-sm', 'shadow-md');
      header.classList.add('bg-transparent');
    }
  }
  
  // Verificar al cargar
  updateHeaderStyle();
  
  // Verificar al hacer scroll
  window.addEventListener('scroll', updateHeaderStyle);
  
  // Gestionar el menú móvil
  openMenuButton.addEventListener('click', () => {
    mobileMenu.classList.remove('-translate-x-full');
    mobileMenu.classList.add('translate-x-0');
    document.body.classList.add('overflow-hidden');
  });
  
  closeMenuButton.addEventListener('click', () => {
    mobileMenu.classList.remove('translate-x-0');
    mobileMenu.classList.add('-translate-x-full');
    document.body.classList.remove('overflow-hidden');
  });
});
