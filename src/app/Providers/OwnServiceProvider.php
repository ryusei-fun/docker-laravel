<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class OwnServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('myName', function () {
            return 'Juhn Doe';
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
