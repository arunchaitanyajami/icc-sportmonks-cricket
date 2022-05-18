<?php

namespace ICC\Sportmonks\Cricket\Endpoint;

use ICC\Sportmonks\Cricket\Exception\ApiRequestException;
use ICC\Sportmonks\Cricket\CricketClient;
use stdClass;

/**
 * Class Team
 * @package ICC\Sportmonks\Cricket\Endpoint
 */
class Team extends CricketClient
{
    /**
     * @param int $teamId
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getById(int $teamId)
    {
        $url = "teams/{$teamId}";
        return $this->call($url);
    }

    /**
     * @param int $seasonId
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getBySeasonId(int $seasonId)
    {
        $url = "teams/season/{$seasonId}";
        return $this->call($url);
    }
}
