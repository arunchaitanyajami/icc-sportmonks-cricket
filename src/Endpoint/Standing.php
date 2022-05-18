<?php

namespace ICC\Sportmonks\Cricket\Endpoint;

use ICC\Sportmonks\Cricket\Exception\ApiRequestException;
use ICC\Sportmonks\Cricket\CricketClient;
use stdClass;

/**
 * Class Standing
 * @package ICC\Sportmonks\Cricket\Endpoint
 */
class Standing extends CricketClient
{
    /**
     * @param int $seasonId
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getBySeasonId(int $seasonId)
    {
        $url = "standings/season/{$seasonId}";
        return $this->call($url);
    }

    /**
     * @param int $seasonId
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getLiveStandingsBySeasonId(int $seasonId)
    {
        $url = "standings/season/live/{$seasonId}";
        return $this->call($url);
    }
}
