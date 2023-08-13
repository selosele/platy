import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/js/views/register.js',
                'resources/js/views/sign-in.js',
            ],
            refresh: true,
        }),
    ],
    optimizeDeps: {
        include: ['jquery', 'bootstrap'],
    },
});
