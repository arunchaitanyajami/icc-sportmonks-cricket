<?php

namespace ICC\Sportmonks\Cricket\Endpoint;

use ICC\Sportmonks\Cricket\Exception\ApiRequestException;
use ICC\Sportmonks\Cricket\CricketClient;
use stdClass;

/**
 * Class Round
 * @package ICC\Sportmonks\Cricket\Endpoint
 */
class Round extends CricketClient
{
    /**
     * @param int $roundId
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getById(int $roundId)
    {
        $url = "rounds/{$roundId}";
        return $this->call($url);
    }

    /**
     * @param int $seasonId
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getBySeasonId(int $seasonId)
    {
        $url = "rounds/season/{$seasonId}";
        return $this->call($url);
    }
}
