/** @type {import('tailwindcss').Config} */
module.exports = {
    darkMode: "class",
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./node_modules/flowbite/**/*.js",
        "./vendor/rappasoft/laravel-livewire-tables/resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {},
    },

    plugins: [
        require("tailwind-scrollbar")({ nocompatible: true }),
        require("flowbite/plugin"),
    ],
};
