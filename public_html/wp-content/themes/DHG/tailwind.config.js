/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: "media",
  content: [
    "./*.php",
    "./src/**/*.{html,js,php}",
    "./src/components/**/*.{html,js,php}",
    "./templates/**/*.{html,js,php}",
    "./template/**/*.{html,js,php}",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
};
