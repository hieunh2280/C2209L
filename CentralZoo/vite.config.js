import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        laravel({
            input: ['resources/css/zoo.css'],
            refresh: true,
        }),
        laravel({
            input: 'resources/img',
            refresh: true,
        })
    ],
});
