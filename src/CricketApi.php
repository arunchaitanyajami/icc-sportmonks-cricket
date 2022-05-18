<?php

namespace ICC\Sportmonks\Cricket;

use ICC\Sportmonks\Cricket\Endpoint\Bookmaker;
use ICC\Sportmonks\Cricket\Endpoint\Coach;
use ICC\Sportmonks\Cricket\Endpoint\Commentary;
use ICC\Sportmonks\Cricket\Endpoint\Continent;
use ICC\Sportmonks\Cricket\Endpoint\Country;
use ICC\Sportmonks\Cricket\Endpoint\Fixture;
use ICC\Sportmonks\Cricket\Endpoint\Head2Head;
use ICC\Sportmonks\Cricket\Endpoint\League;
use ICC\Sportmonks\Cricket\Endpoint\LiveScore;
use ICC\Sportmonks\Cricket\Endpoint\Market;
use ICC\Sportmonks\Cricket\Endpoint\Odd;
use ICC\Sportmonks\Cricket\Endpoint\Player;
use ICC\Sportmonks\Cricket\Endpoint\Prediction;
use ICC\Sportmonks\Cricket\Endpoint\Round;
use ICC\Sportmonks\Cricket\Endpoint\Season;
use ICC\Sportmonks\Cricket\Endpoint\Stage;
use ICC\Sportmonks\Cricket\Endpoint\Standing;
use ICC\Sportmonks\Cricket\Endpoint\Team;
use ICC\Sportmonks\Cricket\Endpoint\TeamSquad;
use ICC\Sportmonks\Cricket\Endpoint\TopScorer;
use ICC\Sportmonks\Cricket\Endpoint\TvStation;
use ICC\Sportmonks\Cricket\Endpoint\Venue;
use ICC\Sportmonks\Cricket\Endpoint\VideoHighlight;

/**
 * Class CricketApi
 * @package ICC\Sportmonks\Cricket
 */
class CricketApi
{
    /**
     * @return Bookmaker
     */
    public static function bookmakers()
    {
        return new Bookmaker();
    }

    /**
     * @return Coach
     */
    public static function coaches()
    {
        return new Coach();
    }

    /**
     * @return Commentary
     */
    public static function commentaries()
    {
        return new Commentary();
    }

    /**
     * @return Continent
     */
    public static function continents()
    {
        return new Continent();
    }

    /**
     * @return Country
     */
    public static function countries()
    {
        return new Country();
    }

    /**
     * @return Fixture
     */
    public static function fixtures()
    {
        return new Fixture();
    }

    /**
     * @return Head2Head
     */
    public static function head2head()
    {
        return new Head2Head();
    }

    /**
     * @return League
     */
    public static function leagues()
    {
        return new League();
    }

    /**
     * @return LiveScore
     */
    public static function liveScores()
    {
        return new LiveScore();
    }

    /**
     * @return Market
     */
    public static function markets()
    {
        return new Market();
    }

    /**
     * @return Odd
     */
    public static function odds()
    {
        return new Odd();
    }

    /**
     * @return Player
     */
    public static function players()
    {
        return new Player();
    }

    /**
     * @return Prediction
     */
    public static function predictions()
    {
        return new Prediction();
    }

    /**
     * @return Round
     */
    public static function rounds()
    {
        return new Round();
    }

    /**
     * @return Season
     */
    public static function seasons()
    {
        return new Season();
    }

    /**
     * @return Stage
     */
    public static function stages()
    {
        return new Stage();
    }

    /**
     * @return Standing
     */
    public static function standings()
    {
        return new Standing();
    }

    /**
     * @return TeamSquad
     */
    public static function teamSquads()
    {
        return new TeamSquad();
    }

    /**
     * @return Team
     */
    public static function teams()
    {
        return new Team();
    }

    /**
     * @return TopScorer
     */
    public static function topScorers()
    {
        return new TopScorer();
    }

    /**
     * @return TvStation
     */
    public static function tvStations()
    {
        return new TvStation();
    }

    /**
     * @return Venue
     */
    public static function venues()
    {
        return new Venue();
    }

    /**
     * @return VideoHighlight
     */
    public static function videoHighlights()
    {
        return new VideoHighlight();
    }
}
