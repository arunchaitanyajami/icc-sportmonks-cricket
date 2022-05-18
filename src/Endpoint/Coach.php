<?php

namespace ICC\Sportmonks\Cricket\Endpoint;

use ICC\Sportmonks\Cricket\Exception\ApiRequestException;
use ICC\Sportmonks\Cricket\CricketClient;
use stdClass;

/**
 * Class Coach
 * @package ICC\Sportmonks\Cricket\Endpoint
 */
class Coach extends CricketClient
{
    /**
     * @param int $coachId
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getById(int $coachId)
    {
        $url = "coaches/{$coachId}";
        return $this->call($url);
    }
}
