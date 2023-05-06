/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    fontFamily: {
      'dcre': ['Tangerine','cursive'],
      'dcre2': ['Josefin Sans', 'sans-serif'],
     },
    extend: {},
  },
  plugins: [require("daisyui")],
}