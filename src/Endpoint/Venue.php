<?php

namespace ICC\Sportmonks\Cricket\Endpoint;

use ICC\Sportmonks\Cricket\Exception\ApiRequestException;
use ICC\Sportmonks\Cricket\CricketClient;
use stdClass;

/**
 * Class Venue
 * @package ICC\Sportmonks\Cricket\Endpoint
 */
class Venue extends CricketClient
{
    /**
     * @param int $venueId
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getById(int $venueId)
    {
        $url = "venues/{$venueId}";
        return $this->call($url);
    }

    /**
     * @param int $seasonId
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getBySeasonId(int $seasonId)
    {
        $url = "venues/season/{$seasonId}";
        return $this->call($url);
    }
}
