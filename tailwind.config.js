/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
         backgroundImage: {
        'bg': "url('/img/bg.png')",
      },
    },
    plugins: [],
};
