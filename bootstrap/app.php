<?php

use App\Http\Middleware\OnlyAdmin;
use App\Http\Middleware\OnlyUser;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'admin' => OnlyAdmin::class
        ]);
    })
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'user' => OnlyUser::class
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();