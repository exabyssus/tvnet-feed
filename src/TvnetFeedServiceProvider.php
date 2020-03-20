<?php

namespace RaivoVaisla\TvnetFeed;

use Illuminate\Support\ServiceProvider;

class TvnetFeedServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'feed');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');

        $this->publishes([__DIR__.'/assets' => public_path('raivovaisla/tvnet-feed')], 'public');
    }

    public function register()
    {

    }
}