<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: realpath(__DIR__.'/../'))
    ->withRouting(
        web: realpath(__DIR__.'/../VisualLaravel/Core/routes/web.php'),
        api: realpath(__DIR__.'/../VisualLaravel/Core/routes/api.php'),
        commands: realpath(__DIR__.'/../VisualLaravel/Core/routes/console.php'),
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })
    ->create()
    ->useAppPath(realpath(__DIR__.'/../VisualLaravel/Core/'))
    ->useConfigPath(realpath(__DIR__.'/../VisualLaravel/Core/config/'))
    ->useDatabasePath(realpath(__DIR__.'/../VisualLaravel/Core/database/'))
    ->useLangPath(realpath(__DIR__.'/../VisualLaravel/Core/lang/'))
    ->useStoragePath(realpath(__DIR__.'/../Storage/VisualLaravel/Core/'));