<?php

use App\Http\Middleware\LogRequestEndpoint;
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
        $middleware->web(prepend:LogRequestEndpoint::class); // can be an array to pass multiple classes
    })
    ->withExceptions(function (Exceptions $exceptions) {
        $exceptions->renderable( fn() => 1);
    })->create();
