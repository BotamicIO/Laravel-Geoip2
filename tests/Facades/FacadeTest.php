<?php

/*
 * This file is part of Laravel GeoIP2.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Tests\GeoIp2\Facades;

use BrianFaust\GeoIp2\GeoIp2;
use BrianFaust\Tests\GeoIp2\AbstractTestCase;
use GrahamCampbell\TestBenchCore\FacadeTrait;

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
