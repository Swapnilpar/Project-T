import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 
                    'resources/css/news.css',
                    'resources/sass/global.scss',
                    'resources/sass/home.scss',
                    'resources/sass/news.scss',
                    'resources/sass/tools.scss',
                    'resources/js/app.js',
                    'resources/js/news.js'
                ],
            refresh: true,
        }),
    ],
});
