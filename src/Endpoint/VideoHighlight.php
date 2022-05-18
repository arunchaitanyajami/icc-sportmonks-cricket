<?php

namespace ICC\Sportmonks\Cricket\Endpoint;

use ICC\Sportmonks\Cricket\Exception\ApiRequestException;
use ICC\Sportmonks\Cricket\CricketClient;
use stdClass;

/**
 * Class VideoHighlight
 * @package ICC\Sportmonks\Cricket\Endpoint
 */
class VideoHighlight extends CricketClient
{
    /**
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getAll()
    {
        $url = "highlights";
        return $this->call($url);
    }
}
