import { defineConfig } from 'vite'
import { codecovVitePlugin } from "@codecov/vite-plugin";
import laravel, { refreshPaths } from 'laravel-vite-plugin'

export default defineConfig({
    plugins: [
        laravel({
            input: ['VisualLaravel/Core/resources/css/app.css', 'VisualLaravel/Core/resources/js/app.js'],
            refresh: [
                ...refreshPaths,
                'VisualLaravel/Base/Filament/**',
                'VisualLaravel/Base/Providers/Filament/**',
                'VisualLaravel/Core/Forms/Components/**',
                'VisualLaravel/Core/Livewire/**',
                'VisualLaravel/Core/Infolists/Components/**',
                'VisualLaravel/Core/Tables/Columns/**',
            ],
        }),
        // Put the Codecov vite plugin after all other plugins
        codecovVitePlugin({
          enableBundleAnalysis: process.env.CODECOV_TOKEN !== undefined,
          bundleName: "Visual-Laravel-Vite-Bundle",
          uploadToken: process.env.CODECOV_TOKEN,
        }),
    ],
})
