<?php

namespace ICC\Sportmonks\Cricket\Endpoint;

use ICC\Sportmonks\Cricket\Exception\ApiRequestException;
use ICC\Sportmonks\Cricket\CricketClient;
use stdClass;

/**
 * Class Continent
 * @package ICC\Sportmonks\Cricket\Endpoint
 */
class Continent extends CricketClient
{
    /**
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getAll()
    {
        $url = "continents";
        return $this->call($url);
    }

    /**
     * @param int $continentId
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getById(int $continentId)
    {
        $url = "continents/{$continentId}";
        return $this->call($url);
    }
}
