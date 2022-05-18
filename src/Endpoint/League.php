<?php

namespace ICC\Sportmonks\Cricket\Endpoint;

use ICC\Sportmonks\Cricket\Exception\ApiRequestException;
use ICC\Sportmonks\Cricket\CricketClient;
use stdClass;

/**
 * Class League
 * @package ICC\Sportmonks\Cricket\Endpoint
 */
class League extends CricketClient
{
    /**
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getAll()
    {
        $url = "leagues";
        return $this->call($url);
    }

    /**
     * @param int $leagueId
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getById(int $leagueId)
    {
        $url = "leagues/{$leagueId}";
        return $this->call($url);
    }
}
