<?php



declare(strict_types=1);



namespace BrianFaust\GeoIp2\Facades;

use Illuminate\Support\Facades\Facade;

class GeoIp2 extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'geoip2';
    }
}
