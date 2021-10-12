<?php

namespace Ristekusdi\WebApiLaravel;

use Illuminate\Support\ServiceProvider;

class WebApiLaravelServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Ristekusdi\WebApiLaravel\Http\Controllers\PostController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        $this->loadRoutesFrom(__DIR__.'/routes.php');
    }
}
