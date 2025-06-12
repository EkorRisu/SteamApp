/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./storage/framework/views/*.php",
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: [
                    "Instrument Sans",
                    "ui-sans-serif",
                    "system-ui",
                    "sans-serif",
                ],
            },
            colors: {
                purple: {
                    500: "#8B5CF6",
                    600: "#7C3AED",
                    700: "#6D28D9",
                },
            },
            backdropFilter: {
                none: "none",
                blur: "blur(10px)",
            },
        },
    },
    plugins: [require("@tailwindcss/forms")],
};
