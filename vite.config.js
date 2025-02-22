import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/css/login.css', 
                'resources/js/app.js',
                'resources/css/app.js',
                'public/js/assets/black-dashboard.css',

            ],
            refresh: true,
        }),
    ],
});
