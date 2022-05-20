<?php

namespace ICC\Sportmonks\Cricket\Endpoint;

use ICC\Sportmonks\Cricket\Exception\ApiRequestException;
use ICC\Sportmonks\Cricket\CricketClient;
use stdClass;

/**
 * Class Fixture
 * @package ICC\Sportmonks\Cricket\Endpoint
 */
class Fixture extends CricketClient {
	/**
	 * @param int $fixtureId
	 *
	 * @return stdClass
	 * @throws ApiRequestException
	 */
	public function getById( int $fixtureId ) {
		$url = "fixtures/{$fixtureId}";

		return $this->call( $url );
	}

	/**
	 * @return stdClass
	 * @throws ApiRequestException
	 */
	public function getAll( $args = [] ) {
		$this->query = $args;

		return $this->call("fixtures" );
	}

	/**
	 * Get between dates.
	 *
	 * @return stdClass
	 * @throws ApiRequestException
	 */
	public function getBetweenDates( $from, $to ) {
		$this->query['filter']['starts_between'] = $from . ',' . $to;
		$this->query['sort']                     = 'starting_at';

		return $this->call( "fixtures" );
	}
}
