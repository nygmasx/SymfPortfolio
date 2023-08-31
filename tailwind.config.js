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
      keyframes: {
        slide: {
          'from': {
            transform: 'translateX(0)',
          },
          'to': {
            transform: 'translateX(50%)',
          },
        },
        // Vous pouvez ajouter d'autres keyframes ici
      },
      animation: {
        'slide': 'slide 5s infinite linear',
        'slide-paused': 'slide 35s infinite linear paused',
      },
      fontFamily:{
        signature: ['Ubuntu']
      }
    },
  },
  plugins: [
     require("daisyui")
  ],
}
