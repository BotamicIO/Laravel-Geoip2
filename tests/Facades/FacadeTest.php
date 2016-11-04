<?php

namespace BrianFaust\Tests\GeoIp2\Facades;

use GrahamCampbell\TestBenchCore\FacadeTrait;
use BrianFaust\Tests\GeoIp2\AbstractTestCase;
use BrianFaust\GeoIp2\GeoIp2;

class FacadeTest extends AbstractTestCase
{
    use FacadeTrait;

    /**
     * Get the facade accessor.
     *
     * @return string
     */
    protected function getFacadeAccessor()
    {
        return 'geoip2';
    }

    /**
     * Get the facade class.
     *
     * @return string
     */
    protected function getFacadeClass()
    {
        return \BrianFaust\GeoIp2\Facades\GeoIp2::class;
    }

    /**
     * Get the facade root.
     *
     * @return string
     */
    protected function getFacadeRoot()
    {
        return GeoIp2::class;
    }
}
