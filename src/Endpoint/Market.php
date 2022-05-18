<?php

namespace ICC\Sportmonks\Cricket\Endpoint;

use ICC\Sportmonks\Cricket\Exception\ApiRequestException;
use ICC\Sportmonks\Cricket\CricketClient;
use stdClass;

/**
 * Class Market
 * @package ICC\Sportmonks\Cricket\Endpoint
 */
class Market extends CricketClient
{
    /**
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getAll()
    {
        $url = "markets";
        return $this->call($url);
    }

    /**
     * @param int $marketId
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getById(int $marketId)
    {
        $url = "markets/{$marketId}";
        return $this->call($url);
    }
}
