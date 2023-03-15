/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js",
  ],
  theme: {
    extend: {
      backgroundImage: {
        'hero-pattern': "url('/img/ustafondo.jpeg')",
        'footer-texture': "url('/img/ustafondo.jpeg')",
      }
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}
