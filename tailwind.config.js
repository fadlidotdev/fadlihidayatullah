/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                brand: "#f9332b",
                black: "#18181b",
            },

            fontFamily: {
                sans: ["Figtree", "sans-serif"],
            },

            fontSize: {
                base: "1.05rem",
            },
        },
    },
    plugins: [],
};
