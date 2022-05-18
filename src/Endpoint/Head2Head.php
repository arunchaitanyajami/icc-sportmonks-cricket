<?php

namespace ICC\Sportmonks\Cricket\Endpoint;

use ICC\Sportmonks\Cricket\Exception\ApiRequestException;
use ICC\Sportmonks\Cricket\CricketClient;
use stdClass;

/**
 * Class Head2Head
 * @package ICC\Sportmonks\Cricket\Endpoint
 */
class Head2Head extends CricketClient
{
    /**
     * @param int $team1Id
     * @param int $team2Id
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getByTeamIds(int $team1Id, int $team2Id)
    {
        $url = "head2head/{$team1Id}/{$team2Id}";
        return $this->call($url);
    }
}
