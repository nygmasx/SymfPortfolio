/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./assets/**/*.js",
    "./assets/react/controllers/*.jsx",
    "./assets/react/controllers/components/*.jsx",
    "./templates/**/*.html.twig",
  ],
  theme: {
    extend: {
      fontFamily:{
        signature: ['Ubuntu']
      }
    },
  },
  plugins: [],
}

