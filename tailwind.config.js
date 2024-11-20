import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
    ],
    theme: {
        extend: {
            fontFamily: {
                yekanbakh: ["Yekan Bakh FaNum"],
            },
            colors: {
                primary: "#2A2669",
                secondary: "#5BC5EF",
                "navy-blue": "#1C1824",
            },
        },
    },
    plugins: [
        require("@tailwindcss/typography"),
        require("tailwindcss-animated"),
        require("@lostisworld/tailwind-mask"),
    ],
};
