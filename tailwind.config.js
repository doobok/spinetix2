const colors = require('tailwindcss/colors')
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.js',
        './resources/js/**/*.vue',
    ],
    darkMode: 'class', // or 'media' or 'class'
    theme: {
        extend: {
            animation: {
                // 'pulse-once': 'pulse 0.1s ease-in-out 1',
            },
            inset: {
                '100': '100%',
            },

            padding: {
                '120': '120px',
            },

            colors: {
                'primary': '#337ab7',
                'theme-color': '#0055b8',
                // 'theme-color': '#337ab7',
                'theme-color-2': '#FFCF3A'
            }
        },
    },
    variants: {
        extend: {},
    },
    plugins: [
        require("nightwind"),
        // require('@tailwindcss/typography'),
    ],
}
