<?php

namespace ICC\Sportmonks\Cricket\Endpoint;

use ICC\Sportmonks\Cricket\Exception\ApiRequestException;
use ICC\Sportmonks\Cricket\CricketClient;
use stdClass;

/**
 * Class Prediction
 * @package ICC\Sportmonks\Cricket\Endpoint
 */
class Prediction extends CricketClient
{
    /**
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getLeagues()
    {
        $url = "predictions/leagues";
        return $this->call($url);
    }

    /**
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getProbabilities()
    {
        $url = "predictions/probabilities/next";
        return $this->call($url);
    }

    /**
     * @param int $fixtureId
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getProbabilitiesByFixtureId(int $fixtureId)
    {
        $url = "predictions/probabilities/fixture/{$fixtureId}";
        return $this->call($url);
    }

    /**
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getValueBets()
    {
        $url = "predictions/valuebets/next";
        return $this->call($url);
    }

    /**
     * @param int $fixtureId
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getValueBetsByFixtureId(int $fixtureId)
    {
        $url = "predictions/valuebets/fixture/{$fixtureId}";
        return $this->call($url);
    }
}
