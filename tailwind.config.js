const defaultTheme = require('tailwindcss/defaultTheme')

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
      "./node_modules/flowbite/**/*.js",
      "./src/**/*.{html,js}",
      "./node_modules/tw-elements/dist/js/**/*.js"
    ],
    darkMode: 'class',
    theme: {
      extend: {
        backgroundImage:{
            'bgi':"url('/public/img/bgi.svg')",
            'bgin':"url('/public/img/net.svg')",
        },
        fontFamily:{
            'sans': ['Oxygen', ...defaultTheme.fontFamily.sans],
        },
        backgroundSize: {
            '50%': '50%',
            '80%': '80%',
            '100%': '100%',
            '16': '4rem',
          },
        backgroundOpacity:{
            '40%': '40%',
        },
      },
    },
    plugins: [
        require('flowbite/plugin'),
        require("tw-elements/dist/plugin.cjs"),
    ],
  }
