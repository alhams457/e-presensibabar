<?php

use App\Http\Middleware\JwtMiddleware;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
<<<<<<< HEAD
        $middleware->alias([
            'session.expiration' => \App\Http\Middleware\SessionExpiration::class,
        ]);
=======
        $middleware->alias(['jwt.auth' => JwtMiddleware::class]);
>>>>>>> 6bc58f92cffa2db67b220a6ea8a375c52a688fcc
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
