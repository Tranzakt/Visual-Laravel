import { defineConfig } from 'vite'
import laravel, { refreshPaths } from 'laravel-vite-plugin'

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: [
                ...refreshPaths,
                'VisualLaravel/core/Filament/**',
                'VisualLaravel/core/Forms/Components/**',
                'VisualLaravel/core/Livewire/**',
                'VisualLaravel/core/Infolists/Components/**',
                'VisualLaravel/core/Providers/Filament/**',
                'VisualLaravel/core/Tables/Columns/**',
            ],
        }),
    ],
})
