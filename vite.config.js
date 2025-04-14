import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/css/admin.css',
                'resources/js/admin.js',
            ],
            refresh: true,
        }),
    ],
    server: {
        host: "0.0.0.0", // Pastikan Vite bisa diakses dari luar
        port: 5173,
        strictPort: true,
        hmr: {
            protocol: "wss",
            host: "3f63-182-253-179-222.ngrok-free.app",
            clientPort: 443,
        },
        cors: true, // Izinkan akses dari luar
    },
});
