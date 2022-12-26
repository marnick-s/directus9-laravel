<?php

namespace Slations\DirectusSdk\Laravel;

use Illuminate\Support\ServiceProvider;

class LaravelDirectusServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/directus.php' => config_path('directus.php'),
        ]);
    }

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/directus.php', 'directus'
        );

        $this->app->singleton(LaravelDirectus::class, function ($app, $connection = null) {
            return LaravelDirectus::getInstance($connection);
        });

        $this->app->singleton('directus', function ($app, $connection = null) {
            return LaravelDirectus::getInstance($connection);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [LaravelDirectus::class];
    }

}