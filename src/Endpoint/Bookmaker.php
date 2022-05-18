<?php

namespace ICC\Sportmonks\Cricket\Endpoint;

use ICC\Sportmonks\Cricket\Exception\ApiRequestException;
use ICC\Sportmonks\Cricket\CricketClient;
use stdClass;

/**
 * Class Bookmaker
 * @package ICC\ICC\Sportmonks\Cricket\Endpoint
 */
class Bookmaker extends CricketClient
{
    /**
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getAll()
    {
        $url = "bookmakers";
        return $this->call($url);
    }

    /**
     * @param int $bookmakerId
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getById(int $bookmakerId)
    {
        $url = "bookmakers/{$bookmakerId}";
        return $this->call($url);
    }
}
