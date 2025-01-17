<?php

namespace Hatchet\LaravelCloudWatchLogger;

use Illuminate\Support\ServiceProvider;

class LaravelCloudWatchLoggerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('laravel-cloudwatch-logger.php'),
            ], 'config');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'laravel-cloudwatch-logger');

        // Register the main class to use with the facade
        $this->app->bind(LaravelCloudWatchLoggerFactory::class, function () {
            return new LaravelCloudWatchLoggerFactory();
        });
    }
}
