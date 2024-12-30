<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The middleware aliases that can be used in the application.
     *
     * @var array
     */
    protected $middlewareAliases = [
        // Other middleware aliases...
        'right' => \App\Http\Middleware\RightMiddleware::class,
    ];

    /**
     * Register services.
     */
    public function register(): void
    {
        // You don't register middleware here.
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->app['router']->aliasMiddleware('right', \App\Http\Middleware\RightMiddleware::class);
    }
}
