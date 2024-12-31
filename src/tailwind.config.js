import preset from './vendor/filament/filament/tailwind.config.preset';

export default {
    presets: [preset],
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
        './VisualLaravel/Core/Filament/**/*.php',
        './storage/framework/views/*.php',
        './VisualLaravel/Core/resources/views/**/*.blade.php',
        './VisualLaravel/Core/resources/views/filament/**/*.blade.php',
    ],
};