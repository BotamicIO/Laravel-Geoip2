<?php

/*
 * This file is part of Laravel GeoIP2.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\GeoIp2;

use BrianFaust\ServiceProvider\ServiceProvider;

class GeoIp2ServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->publishConfig();

        $this->publishes([
            __DIR__.'/../resources/data/GeoLite2-City.mmdb'    => storage_path('app/GeoIp2/GeoLite2-City.mmdb'),
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
