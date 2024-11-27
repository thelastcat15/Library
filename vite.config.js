import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    // server: {
    //     origin: 'https://library-git-main-firstfenixs-projects.vercel.app/', // Add your HTTPS origin
    // },
    build: {
        outDir: 'public/build',
    },
    base: '/build/'
});