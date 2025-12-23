import { defineConfig } from 'vite'
import laravel from 'laravel-vite-plugin'
import vue from '@vitejs/plugin-vue'
import tailwindcss from '@tailwindcss/vite'

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css', // 👈 MUY IMPORTANTE
                'resources/js/app.js',
            ],
            refresh: true,
        }),
        vue(),
        tailwindcss(), // 👈 OBLIGATORIO en Tailwind v4
    ],
})
