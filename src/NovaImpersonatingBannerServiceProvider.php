<?php

namespace RhysLees\NovaImpersonatingBanner;

use Livewire\Livewire;
use Illuminate\Support\ServiceProvider;
use RhysLees\NovaImpersonatingBanner\Livewire\NovaImpersonatingBanner;

class NovaImpersonatingBannerServiceProvider extends ServiceProvider
{
    
    public function boot()
    {
        // Load views
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'nova-impersonating-banner');

        Livewire::component('nova-impersonating-banner', NovaImpersonatingBanner::class);

        if ($this->app->runningInConsole()) {
        // Publish views
        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/nova-impersonating-banner'),
        ], 'views');
        }
    }

    public function register()
    {
        //
    }
}


