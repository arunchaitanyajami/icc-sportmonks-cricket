<?php

namespace ICC\Sportmonks\Cricket\Endpoint;

use ICC\Sportmonks\Cricket\Exception\ApiRequestException;
use ICC\Sportmonks\Cricket\CricketClient;
use stdClass;

/**
 * Class Player
 * @package ICC\Sportmonks\Cricket\Endpoint
 */
class Player extends CricketClient
{
    /**
     * @param int $playerId
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getById(int $playerId)
    {
        $url = "players/{$playerId}";
        return $this->call($url);
    }
}
