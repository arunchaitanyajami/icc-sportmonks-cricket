<?php

namespace ICC\Sportmonks\Cricket\Endpoint;

use ICC\Sportmonks\Cricket\Exception\ApiRequestException;
use ICC\Sportmonks\Cricket\Exception\InvalidDateFormatException;
use ICC\Sportmonks\Cricket\CricketApiHelper;
use ICC\Sportmonks\Cricket\CricketClient;
use stdClass;

/**
 * Class Fixture
 * @package ICC\Sportmonks\Cricket\Endpoint
 */
class Fixture extends CricketClient
{
    /**
     * @param int $fixtureId
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getById(int $fixtureId)
    {
        $url = "fixtures/{$fixtureId}";
        return $this->call($url);
    }

    /**
     * @param array $fixtureIds
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getByMultipleIds(array $fixtureIds)
    {
        $fixtureIds = implode(",", array_map("trim", array_filter($fixtureIds)));
        $url = "fixtures/multi/{$fixtureIds}";
        return $this->call($url);
    }

    /**
     * @param string $date
     * @return stdClass
     * @throws ApiRequestException
     * @throws InvalidDateFormatException
     */
    public function getByDate(string $date)
    {
        $date = CricketApiHelper::verifyDate($date);
        $url = "fixtures/date/{$date}";
        return $this->call($url);
    }

    /**
     * @param string $dateFrom
     * @param string $dateTo
     * @return stdClass
     * @throws ApiRequestException
     * @throws InvalidDateFormatException
     */
    public function getByDateRange(string $dateFrom, string $dateTo)
    {
        $dateFrom = CricketApiHelper::verifyDate($dateFrom);
        $dateTo = CricketApiHelper::verifyDate($dateTo);
        $url = "fixtures/between/{$dateFrom}/{$dateTo}";
        return $this->call($url);
    }

    /**
     * @param string $dateFrom
     * @param string $dateTo
     * @param int $teamId
     * @return stdClass
     * @throws ApiRequestException
     * @throws InvalidDateFormatException
     */
    public function getByDateRangeForTeam(string $dateFrom, string $dateTo, int $teamId)
    {
        $dateFrom = CricketApiHelper::verifyDate($dateFrom);
        $dateTo = CricketApiHelper::verifyDate($dateTo);
        $url = "fixtures/between/{$dateFrom}/{$dateTo}/{$teamId}";
        return $this->call($url);
    }

    /**
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getLastUpdated()
    {
        $url = "fixtures/updates";
        return $this->call($url);
    }
}
