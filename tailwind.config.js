/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        "Poppins": ["Poppins", "sans-serif"]
      },
      backgroundImage: {
        "tailwind-bg" : 'url("assets/images/tailwind_bg.png")',
      },
      boxShadow: {
        "sebelas" : "rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px;",
      },
      borderRadius : {
        "detail-brg" : "0px 100px 300px 0px",
      }
    },
  },
  plugins: [],
}