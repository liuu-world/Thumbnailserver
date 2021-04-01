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
        $this->app->bind("thumb", \GB\Thumbshower\DoThumb::class);
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
