<?php

declare(strict_types=1);

/*
 * This file is part of Laravel GeoIP2.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Artisanry\GeoIp2\Facades;

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
