import forms from "@tailwindcss/forms";
const plugin = require("tailwindcss/plugin");

/** @type {import('tailwindcss').Config} */
export default {
    mode: "jit",
    darkMode: "class",
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        screens: {
            sm: "600px",
            md: "900px",
            lg: "1024px",
            xl: "1280px",
            "2xl": "1536px",
        },
        extend: {
            fontFamily: {
                poppins: "poppins",
                questrial: "Questrial",
            },
            colors: {
                primary: "#A061F6",
                secondaryRed: "#FF6370",
                secondaryYellow: "#F4CC0A",
                secondaryBlue: "#2984FF",
                secondaryGreen: "#4EC579",
                table: "#d6dcee",
                facebook: "4875CF",
                "main-bg": "#f5f5f9",
                "main-dark": "#1E2128",
                "card-dark": "#242632",
                "dark-light": "#363947",
                "hover-color-dark": "#2d303d",
                dark: "#2d303d",
            },
            gridTemplateColumns: {
                "16-auto": "250px auto",
                "minmax-uto-200": "repeat(auto-fit, minmax(200px, 1fr))",
            },
        },
    },

    plugins: [
        forms,

        plugin(function ({ addUtilities }) {
            const newUtilities = {
                ".text-muted": {
                    opacity: 0.8,
                },
                ".transition-a": {
                    transition: "all 0.3s ease-in-out",
                },
                ".card-shadow": {
                    boxShadow: " 0 0 0.375rem 0.25rem rgb(161 172 184 / 15%)",
                },
                ".shadow-light": {
                    boxShadow: "0 0.3rem 0.6rem .2rem rgba(0, 0, 0, 0.1)",
                },
                ".border-light": {
                    border: "1px solid rgba(46, 46, 46, 0.1)",
                },
                ".input-shadow": {
                    boxShadow: "0 0 0 1000px #f5f5f9 inset !important",
                },
                ".input-dark-shadow": {
                    boxShadow: "0 0 0 1000px #13131A inset !important",
                },
                ".inputAutofillColor": {
                    "-webkit-text-fill-color": "#ccc",
                },
                ".flex-center-center": {
                    display: "flex",
                    alignItems: "center",
                    justifyContent: "center",
                },
                ".flex-center-between": {
                    display: "flex",
                    alignItems: "center",
                    justifyContent: "space-between",
                },
                ".flex-align-center": {
                    display: "flex",
                    alignItems: "center",
                },
            };
            addUtilities(newUtilities);
        }),
    ],
};
