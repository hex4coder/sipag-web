import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    server: {
        host: '0.0.0.0',
        hmr: {
            host: '0.0.0.0'
        },
        watch: {
		    // https://vitejs.dev/config/server-options.html#server-watch
            usePolling: true
        }
    },
});
