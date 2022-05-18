<?php

namespace ICC\Sportmonks\Cricket\Endpoint;

use ICC\Sportmonks\Cricket\Exception\ApiRequestException;
use ICC\Sportmonks\Cricket\CricketClient;
use stdClass;

/**
 * Class Country
 * @package ICC\Sportmonks\Cricket\Endpoint
 */
class Country extends CricketClient
{
    /**
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getAll()
    {
        $url = "countries";
        return $this->call($url);
    }

    /**
     * @param $countryId
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getById($countryId)
    {
        $url = "countries/{$countryId}";
        return $this->call($url);
    }
}
