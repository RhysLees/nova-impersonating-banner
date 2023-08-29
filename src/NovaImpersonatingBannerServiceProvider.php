<?php

namespace RhysLees\NovaImpersonatingBanner;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;
use RhysLees\NovaAbout\NovaAbout;
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

            // Add package to Nova About
            NovaAbout::addPackage('rhyslees/nova-impersonating-banner');
        }
    }
}
