<?php

namespace ICC\Sportmonks\Cricket\Endpoint;

use ICC\Sportmonks\Cricket\Exception\ApiRequestException;
use ICC\Sportmonks\Cricket\CricketClient;
use stdClass;

/**
 * Class TeamSquad
 * @package ICC\Sportmonks\Cricket\Endpoint
 */
class TeamSquad extends CricketClient
{
    /**
     * @param int $teamId
     * @param int $seasonId
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getByTeamAndSeason(int $teamId, int $seasonId)
    {
        $url = "squad/season/{$seasonId}/team/{$teamId}";
        return $this->call($url);
    }
}
