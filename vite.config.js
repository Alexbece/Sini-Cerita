import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css", // CSS utama
                "resources/js/app.js", // JS utama
                "resources/css/admin.css", // CSS utama
                "resources/js/admin.js", // JS utama
            ],
            refresh: true,
        }),
    ],
    // server: {
    //     host: "0.0.0.0", // Pastikan Vite bisa diakses dari luar
    //     port: 5173,
    //     strictPort: true,
    //     hmr: {
    //         protocol: "wss",
    //         host: "f222-111-94-163-251.ngrok-free.app",
    //         clientPort: 443,
    //     },
    //     cors: true, // Izinkan akses dari luar
    // },
});
