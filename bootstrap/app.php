<?php

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
        $middleware->alias([
             'refresh_token'  =>   \App\Http\Middleware\RefreshCsrfToken::class,
             'tenant' => \App\Http\Middleware\IdentifyTenant::class,
             'tenant.auth' => \App\Http\Middleware\TenantAuth::class,
             'role' => \App\Http\Middleware\RoleMiddleware::class,
             'face.verified' => \App\Http\Middleware\EnsureFaceVerified::class,
             'kyc.completed' => \App\Http\Middleware\EnsureKycCompleted::class,
             'superadmin.auth'  => \App\Http\Middleware\SuperadminAuth::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
