import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/styles/main.css', 'resources/scripts/main.js'],
            refresh: true,
        })
    ],
});

