<?php

namespace Sab94\FCMPush;

use Illuminate\Support\ServiceProvider;

class FCMPushServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/push.php' => config_path('push.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('push', function() {
            return new FCMPush;
        });
    }
}
