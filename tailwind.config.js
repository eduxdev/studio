/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./**/*.{php,html,js}",
    "./node_modules/flyonui/dist/js/*.js",
    "./node_modules/notyf/**/*.js"
  ],
  theme: {
    extend: {},
  },
  plugins: [
    require("flyonui"),
    require("flyonui/plugin")
  ],
  flyonui: {
    vendors: true // Habilitar la generación de CSS específico para vendors
  }
} 