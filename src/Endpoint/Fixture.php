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
	 * @param array $args
	 *
	 * @return stdClass
	 * @throws ApiRequestException
	 */
	public function getById( int $fixtureId, array $args = [] ) {
		$url = "fixtures/{$fixtureId}";
		if ( ! empty( $args['include'] ) ) {
			$this->setIncludes( $args['include'] );
		}

		return $this->call( $url );
	}

	/**
	 * @return stdClass
	 * @throws ApiRequestException
	 */
	public function getAll( $args = [] ) {
		if ( ! empty( $args['page'] ) ) {
			$this->setPage( $args['page'] );
		}

		return $this->call("fixtures" );
	}

	/**
	 * Get between dates.
	 *
	 * @return stdClass
	 * @throws ApiRequestException
	 */
	public function getBetweenDates( $from, $to, $args = [] ) {
		$this->query['filter']['starts_between'] = $from . ',' . $to;
		$this->query['sort']                     = 'starting_at';
		if ( ! empty( $args['page'] ) ) {
			$this->setPage( $args['page'] );
		}

		if ( ! empty( $args['include'] ) ) {
			$this->setIncludes( $args['include'] );
		}

		return $this->call( "fixtures" );
	}
}
