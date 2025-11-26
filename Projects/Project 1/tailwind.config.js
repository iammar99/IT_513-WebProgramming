/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.php",                         // root PHP files
    "./*.html",                        // root HTML files
    "./Processing_pages/**/*.php",     // all PHP in subfolders
    "./Processing_pages/**/*.html",    // all HTML in subfolders
    "./includes/**/*.php"              // includes folder PHP files
  ],
  theme: {
    extend: {},
  },
  plugins: [],
};
