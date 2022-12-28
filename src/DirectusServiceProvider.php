<?php

namespace Marnick\Directus9Laravel;

use Illuminate\Support\ServiceProvider;

class DirectusServiceProvider extends ServiceProvider
{
    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [Directus::class];
    }

}