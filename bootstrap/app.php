<?php

use App\Http\Middleware\PoliceMan;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->alias([
            'PoliceMan' => PoliceMan::class
        ]); // sera appliqué uniquement sur les route spécifié en web.php

        // GLOBAL_MIDDLEWARE
        $middleware->append(PoliceMan::class); //sera appliqué sur toute les routes
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
