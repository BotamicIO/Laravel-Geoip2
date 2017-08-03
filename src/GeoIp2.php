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

use GeoIp2\Database\Reader;

class GeoIp2
{
    /**
     * @var Reader
     */
    private $readerCity;

    /**
     * @var Reader
     */
    private $readerCountry;

    /**
     * GeoIp2 constructor.
     *
     * @param $config
     */
    public function __construct($config)
    {
        $this->readerCity = new Reader($config['city']);
        $this->readerCountry = new Reader($config['country']);
    }

    /**
     * @param $ip
     *
     * @return mixed
     */
    public function city($ip)
    {
        return $this->readerCity->city($ip);
    }

    /**
     * @param $ip
     *
     * @return mixed
     */
    public function country($ip)
    {
        return $this->readerCountry->country($ip);
    }
}
