/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                transparent: 'transparent',
                current: 'currentColor',
                // Ghost Printer palette
                'pumpkin': {
                    50: '#fffaec',
                    100: '#fff4d3',
                    200: '#ffe5a5',
                    300: '#ffd06d',
                    400: '#ffb032',
                    500: '#ff960a',
                    600: '#ff7f02',
                    700: '#cc5c02',
                    800: '#a1470b',
                    900: '#823c0c',
                    DEFAULT: 'rgb(255 127 2)',
                    'dark': '#3d2718',
                },
            }
        },
    },
    plugins: [],
}
