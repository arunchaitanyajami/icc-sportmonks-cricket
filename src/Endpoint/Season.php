<?php

namespace ICC\Sportmonks\Cricket\Endpoint;

use ICC\Sportmonks\Cricket\Exception\ApiRequestException;
use ICC\Sportmonks\Cricket\CricketClient;
use stdClass;

/**
 * Class Season
 * @package ICC\Sportmonks\Cricket\Endpoint
 */
class Season extends CricketClient
{
    /**
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getAll()
    {
        $url = "seasons";
        return $this->call($url);
    }

    /**
     * @param int $seasonId
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getById(int $seasonId)
    {
        $url = "seasons/{$seasonId}";
        return $this->call($url);
    }
}
