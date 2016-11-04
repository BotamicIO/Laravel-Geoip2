<?php

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
