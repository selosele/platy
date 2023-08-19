import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/js/views/index.js',
                'resources/js/views/content/register.js',
                'resources/js/views/content/sign-in.js',
            ],
            refresh: true,
        }),
    ],
    optimizeDeps: {
        include: ['jquery', 'bootstrap'],
    },
});
