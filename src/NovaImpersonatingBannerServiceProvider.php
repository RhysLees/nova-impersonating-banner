<?php

namespace RhysLees\NovaImpersonatingBanner;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;
use RhysLees\NovaImpersonatingBanner\Livewire\NovaImpersonatingBanner;

class NovaImpersonatingBannerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Load views
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'nova-impersonating-banner');

        // Load config
        $this->mergeConfigFrom(__DIR__.'/../config/nova-impersonating-banner.php', 'nova-impersonating-banner');

        Livewire::component('nova-impersonating-banner', NovaImpersonatingBanner::class);

        if ($this->app->runningInConsole()) {
            // Publish views
            $this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/nova-impersonating-banner'),
            ], 'views');

            // Puchlish config
            $this->publishes([
                __DIR__.'/../config/nova-impersonating-banner.php' => config_path('nova-impersonating-banner.php'),
            ], 'config');
        }
    }

    public function register()
    {
        //
    }
}
