/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./Views/**/*.php"],
  theme: {
    extend: {
      backgroundImage: {
        homeweb: "url('./public/images/home/homeweb.png')",
        portadamobil: "url('./public/images/home/portadamobil.png')",
      },
    },
  },
  plugins: [],
};
