<?php

namespace Timbioz\Helper;

use Illuminate\Support\ServiceProvider;

class HelperServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . "/routes/web.php");
        $this->loadViewsFrom(__DIR__ . "/resources/views", "helper");
        $this->loadMigrationsFrom(__DIR__ . "/migrations");
    }


}
