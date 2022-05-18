<?php

namespace Sportmonks\Test;

use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use Sportmonks\Cricket\Exception\ApiRequestException;
use Sportmonks\Cricket\CricketApi;

class SetupTest extends TestCase
{
    /**
     * @test
     */
    public function testEmptyApiToken()
    {
        $_ENV['SPORTMONKS_API_TOKEN'] = "";
        $this->expectException(InvalidArgumentException::class);
        CricketApi::bookmakers()->getAll();
    }

    /**
     * @test
     */
    public function testInvalidApiToken()
    {
        $_ENV['SPORTMONKS_API_TOKEN'] = 'INVALID';
        $this->expectException(ApiRequestException::class);
        CricketApi::bookmakers()->getAll();
    }
}
