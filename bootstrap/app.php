<?php


use App\Http\Middleware\Testcase101;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use PHPUnit\Event\Code\Test;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
    $middleware->web(Testcase101::class);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
