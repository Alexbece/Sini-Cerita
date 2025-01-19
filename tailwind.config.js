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
                poppins: ["Poppins", "sans-serif"],
                raleway: ["Raleway", "sans-serif"],
            },
            colors: {
                black: "#131313",
                // Hijau
                "hijau-50": "#EFFAF4",
                "hijau-100": "#d9f2e2",
                "hijau-200": "#b6e4ca",
                "hijau-300": "#86cfab",
                "hijau-400": "#54b386",
                "hijau-500": "#32976c",
                "hijau-600": "#227955",
                accent: "#1b6146",
                "hijau-800": "#184d39",
                "hijau-900": "#144030",
                "hijau-950": "#0a241b",

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
            },
        },
    },
    plugins: [],
};
