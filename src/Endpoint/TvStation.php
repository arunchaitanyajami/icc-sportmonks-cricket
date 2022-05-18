<?php

namespace ICC\Sportmonks\Cricket\Endpoint;

use ICC\Sportmonks\Cricket\Exception\ApiRequestException;
use ICC\Sportmonks\Cricket\CricketClient;
use stdClass;

/**
 * Class TvStation
 * @package ICC\Sportmonks\Cricket\Endpoint
 */
class TvStation extends CricketClient
{
    /**
     * @param int $fixtureId
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getByFixtureId(int $fixtureId)
    {
        $url = "tvstations/fixture/{$fixtureId}";
        return $this->call($url);
    }
}
