<?php

namespace Rossity\LaravelQuickbase;

use Illuminate\Support\ServiceProvider;

class LaravelQuickbaseServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'rossity');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'rossity');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/quickbase.php', 'quickbase');

        // Register the service the package provides.
        $this->app->singleton('quickbase', function ($app) {
            return new Quickbase(
                config('quickbase.default_realm_hostname'),
                config('quickbase.default_user_agent'),
                config('quickbase.user_token')
            );
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['quickbase'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole(): void
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/quickbase.php' => config_path('quickbase.php'),
        ], 'quickbase.config');


        // Registering package commands.
        // $this->commands([]);
    }
}
