<?php

namespace ICC\Sportmonks\Cricket\Endpoint;

use ICC\Sportmonks\Cricket\Exception\ApiRequestException;
use ICC\Sportmonks\Cricket\CricketClient;
use stdClass;

/**
 * Class TopScorer
 * @package ICC\Sportmonks\Cricket\Endpoint
 */
class TopScorer extends CricketClient
{
    /**
     * @param int $seasonId
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getBySeasonId(int $seasonId)
    {
        $url = "topscorers/season/{$seasonId}";
        return $this->call($url);
    }

    /**
     * @param int $seasonId
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getAggregatedBySeasonId(int $seasonId)
    {
        $url = "topscorers/season/{$seasonId}/aggregated";
        return $this->call($url);
    }
}
