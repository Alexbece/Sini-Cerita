import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                raleway: ['"Raleway"', '"sans-serif"'],
                jkt: ['"Plus Jakarta Sans"', 'sans-serif'],
            },
            colors: {
                black: "#131313",

                //Biru
                "biru-1": "#D2EDF0",
                "biru-2": "#BCE4E8",
                "biru-3": "#A5DAE0",
                "biru-4": "#8FD1D9",
                "biru-5": "#78C8D1",
                "biru-6": "#4BB5C1",

                // Hitam

                "hitam-50": "#f6f6f6",
                "hitam-100": "#e7e7e7",
                "hitam-200": "#d1d1d1",
                "hitam-300": "#b0b0b0",
                "hitam-400": "#888888",
                "hitam-500": "#6d6d6d",
                "hitam-600": "#5d5d5d",
                "hitam-700": "#4f4f4f",
                "hitam-800": "#454545",
                "hitam-900": "#3d3d3d",

                //Pink
                "pink-1": "#FEF4FA",
                "pink-2": "#FEE8F5",
                "pink-3": "#FDDCEF",
                "pink-4": "#FCC3E3",
                "pink-5": "#FBAAD8",
                "pink-6": "#F991CC",
            },
        },
    },
    plugins: [],
};
