/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      backgroundImage: {
        'hero-pattern': "url('/img/ustafondo.jpeg')",
        'footer-texture': "url('/img/ustafondo.jpeg')",
      }
    },
  },
  plugins: [],
}
