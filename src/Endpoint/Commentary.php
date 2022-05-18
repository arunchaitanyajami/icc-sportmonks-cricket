<?php

namespace ICC\Sportmonks\Cricket\Endpoint;

use ICC\Sportmonks\Cricket\Exception\ApiRequestException;
use ICC\Sportmonks\Cricket\CricketClient;
use stdClass;

/**
 * Class Commentary
 * @package ICC\Sportmonks\Cricket\Endpoint
 */
class Commentary extends CricketClient
{
    /**
     * @param int $fixtureId
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getByFixtureId(int $fixtureId)
    {
        $url = "commentaries/fixture/{$fixtureId}";
        return $this->call($url);
    }
}
