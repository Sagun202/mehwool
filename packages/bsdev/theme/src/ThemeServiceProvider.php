<?php

namespace Bsdev\Theme;

use Bsdev\Theme\Facades\Theme;
use Bsdev\Theme\Middleware\CheckStatus;
use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;

class ThemeServiceProvider extends ServiceProvider
{
    public function boot()
    {

        $this->loadMigrationsFrom(__DIR__ . '/migrations');
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/views', 'theme');
        $this->publishes([
            __DIR__ . '/public' => public_path('theme'),
        ], 'public');
        $router = $this->app->make(Router::class);
        $this->publishes([
            __DIR__ . '/config/theme.php' => config_path('theme.php'),
        ], 'theme');
        $router->aliasMiddleware('checkstatus', CheckStatus::class);

    }
    public function register()
    {
        $this->app->bind('theme', function () {
            return new Theme;
        });
    }
}
