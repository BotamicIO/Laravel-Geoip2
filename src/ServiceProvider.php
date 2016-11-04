<?php

namespace BrianFaust\GeoIp2;

class ServiceProvider extends \BrianFaust\ServiceProvider\ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->publishConfig();

        $this->publishes([
            __DIR__.'/../resources/data/GeoLite2-City.mmdb' => storage_path('app/GeoIp2/GeoLite2-City.mmdb'),
            __DIR__.'/../resources/data/GeoLite2-Country.mmdb' => storage_path('app/GeoIp2/GeoLite2-Country.mmdb'),
        ], 'resources');
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        parent::register();

        $this->mergeConfig();

        $this->app->singleton('geoip2', function ($app) {
            return new GeoIp2($app->config['geoip2']);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array_merge(parent::provides(), ['geoip2']);
    }

    /**
     * Get the default package name.
     *
     * @return string
     */
    public function getPackageName()
    {
        return 'geoip2';
    }
}
