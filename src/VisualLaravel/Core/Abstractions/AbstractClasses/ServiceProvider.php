<?php

namespace VisualLaravel\Core\Abstractions\AbstractClasses;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

abstract class ServiceProvider extends LaravelServiceProvider
{
    protected string $hint;
    protected string $module;
    protected string $name_space;

    /**
     * Get the module name
     */
    public function __construct()
    {
        $this->app = app();
        $refobj = new \ReflectionObject($this);
        $this->module = realpath(dirname($refobj->getFileName()) . '/../').'/';
        $this->name_space = $refobj->getNamespaceName();
        $lastSlash =  strrpos($this->name_space, '\\');
        if ($lastSlash) {
            $this->name_space = substr($this->name_space, 0, $lastSlash).'\\';
        }
    }

    /**
     * Register any application services.
     */
    public function register(): void
    {
        if (realpath($this->module.'config/') and realpath($this->module.'config/') <> config_path('')) {

            foreach (glob($this->module.'config/*.php') as $file) {
                if (file_exists(config_path(basename($file)))) {
                    $this->mergeConfigFrom($file, basename($file, '.php'));
                }
            }
        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        // https://laravel.com/docs/11.x/packages

        if (realpath($this->module.'routes/web.php')) {
            $this->loadRoutesFrom($this->module.'routes/web.php');
        }

        if (realpath($this->module.'database/migrations/') and realpath($this->module.'database/migrations/') <> database_path('migrations')) {
            $this->publishesMigrations([
                $this->module.'database/migrations/' => database_path('migrations'),
            ]);
        }

        if (realpath($this->module.'lang/')) {
            $this->loadTranslationsFrom($this->module.'lang/', $this->hint);
            $this->loadJsonTranslationsFrom($this->module.'lang/');
        }

        if (realpath($this->module.'View/')) {
            $this->loadViewsFrom($this->module.'View/', $this->hint);
        }

        if (realpath($this->module.'resources/views/')) {
            $this->loadViewsFrom($this->module.'resources/views/', $this->hint);
        }

        if (realpath($this->module.'View/Components/')) {
            Blade::componentNamespace($this->name_space.'Views\\Components', $this->hint);
        }

        if ($this->app->runningInConsole() and realpath($this->module.'Commands/')) {
            $this->setCommands(realpath($this->module.'Commands/'), $this->name_space);
        }
    }

    protected function setCommands(string $path, string $ns) : void
    {
        $cmds = [];
        foreach (glob($path.'/*.php') as $file) {
            $class = $ns.basename($file, '.php');
            try {
                new \ReflectionClass($class);
                $cmds[] = $class;
            } catch (\ReflectionException $e) {
                Log::warning('Visual-Laravel: Broken command class:', ['class' => $class]);
            }
        }
        if (count($cmds) > 0) {
            $this->commands($cmds);
        }
    }
}
