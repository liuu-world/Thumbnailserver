<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ThumbshowerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind("thumb", \GregBrown\Thumbshower\Thumbshower::class);
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
