import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    // tailwind.config.js
 
 theme: {
   extend: {
     colors: {
       saffron: {
         50: '#fefce8',
         100: '#fdf7c4',
         200: '#fced8c',
         300: '#fadb4a',
         400: '#f6c619',
         500: '#e6ad0c',
         600: '#c78507',
         700: '#9e5f0a',
         800: '#834b10',
         900: '#6f3d14',
       },
     },
   },
 },


    plugins: [forms],
};
