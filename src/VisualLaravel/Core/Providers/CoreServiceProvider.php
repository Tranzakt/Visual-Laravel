<?php

namespace VisualLaravel\Core\Providers;

use Illuminate\Foundation\Console\AboutCommand;
use VisualLaravel\Core\Abstractions\AbstractClasses\ServiceProvider;


final class CoreServiceProvider extends ServiceProvider
{
    protected string $hint = "vlCore";

    /**
     * Register any application services.
     */
    public function register(): void
    {
        parent::register();
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        parent::boot();
        AboutCommand::add('VisualLaravel', fn () => ['Version' => '0.0.1']);
    }
}
