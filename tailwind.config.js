const defaultTheme = require('tailwindcss/defaultTheme')

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
      "./node_modules/flowbite/**/*.js"


    ],
    darkMode: 'class',
    theme: {
      extend: {
        backgroundImage:{
            'bgi':"url('/public/img/bgi.svg')",
            'bgip':"url('/public/img/bgi.png')",
        },
        fontFamily:{
            'sans': ['Oxygen', ...defaultTheme.fontFamily.sans],
        }
      },
    },
    plugins: [
        require('flowbite/plugin')
    ],
  }
