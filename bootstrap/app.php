<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
        // here you can also add more routes using then closure  
        //then
        //also you can create  routes manually using  the  using  closure
    )
    ->withMiddleware(function (Middleware $middleware) {
        // here we register our middlewares 

        $middleware->alias([
            'role' => \App\Http\Middleware\RoleMiddleware::class,
        ]);


    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
