import tailwindcss from '@tailwindcss/vite';
import laravel from 'laravel-vite-plugin';
import { defineConfig } from 'vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/admin-bar.css',
                'resources/css/header.css',
                'resources/css/footer.css',
                'resources/js/theme-toggle.js',
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
