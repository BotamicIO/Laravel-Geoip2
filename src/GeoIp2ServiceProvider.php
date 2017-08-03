<?php

declare(strict_types=1);

/*
 * This file is part of Laravel GeoIP2.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\GeoIp2;

use Illuminate\Support\ServiceProvider;

class GeoIp2ServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/laravel-geoip2.php' => config_path('laravel-geoip2.php'),
        ], 'config');

        $this->publishes([
            __DIR__.'/../data/GeoLite2-City.mmdb'    => storage_path('app/GeoIp2/GeoLite2-City.mmdb'),
            __DIR__.'/../data/GeoLite2-Country.mmdb' => storage_path('app/GeoIp2/GeoLite2-Country.mmdb'),
        ], 'data');
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/laravel-geoip2.php', 'laravel-geoip2');

        $this->registerBuilder();
    }

    /**
     * Register the builder.
     */
    private function registerBuilder()
    {
        $this->app->singleton('geoip2', function ($app) {
            return new GeoIp2($app->config['laravel-geoip2']);
        });
    }
}
