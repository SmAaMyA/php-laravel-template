import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'class', // Enable dark mode support
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Kanit', ...defaultTheme.fontFamily.sans],
                body: ['Bai Jamjuree', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    plugins: [],
};
