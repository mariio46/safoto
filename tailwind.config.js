/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
        "./node_modules/tw-elements/dist/js/**/*.js",
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
    ],
    theme: {
        extend: {
            fontFamily: {
                inter: ["inter"],
            },
            colors: {
                primary: "#4ade80",
            },
        },
        container: {
            center: true,
            padding: "16px",
        },
    },
    // darkMode: "class",
    plugins: [require("flowbite/plugin")],
};
