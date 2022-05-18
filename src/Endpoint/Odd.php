<?php

namespace ICC\Sportmonks\Cricket\Endpoint;

use ICC\Sportmonks\Cricket\Exception\ApiRequestException;
use ICC\Sportmonks\Cricket\CricketClient;
use stdClass;

/**
 * Class Odd
 * @package ICC\Sportmonks\Cricket\Endpoint
 */
class Odd extends CricketClient
{
    /**
     * @param int $fixtureId
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getByFixtureId(int $fixtureId)
    {
        $url = "odds/fixture/{$fixtureId}";
        return $this->call($url);
    }

    /**
     * @param int $fixtureId
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getInPlayByFixtureId(int $fixtureId)
    {
        $url = "odds/inplay/fixture/{$fixtureId}";
        return $this->call($url);
    }

    /**
     * @param int $fixtureId
     * @param int $bookmakerId
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getByFixtureAndBookmaker(int $fixtureId, int $bookmakerId)
    {
        $url = "odds/fixture/{$fixtureId}/bookmaker/{$bookmakerId}";
        return $this->call($url);
    }

    /**
     * @param int $fixtureId
     * @param int $marketId
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getByFixtureAndMarket(int $fixtureId, int $marketId)
    {
        $url = "odds/fixture/{$fixtureId}/market/{$marketId}";
        return $this->call($url);
    }
}
