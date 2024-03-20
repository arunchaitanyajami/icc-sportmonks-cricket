<?php

namespace ICC\Sportmonks\Cricket\Endpoint;

use ICC\Sportmonks\Cricket\Endpoint;
use ICC\Sportmonks\Cricket\Exception\ApiRequestException;
use ICC\Sportmonks\Cricket\CricketClient;
use stdClass;

/**
 * Class Team
 * @package ICC\Sportmonks\Cricket\Endpoint
 */
class Team extends CricketClient implements Endpoint {
	/**
	 * @param int $teamId
	 * @param array $args
	 * @return stdClass
	 * @throws ApiRequestException
	 */
	public function getById( int $teamId, array $args = [] ) {
		$url = "teams/{$teamId}";

		if ( ! empty( $args['include'] ) ) {
			$this->setIncludes( $args['include'] );
		}

		return $this->call( $url );
	}

	/**
	 * @param int $seasonId
	 *
	 * @return stdClass
	 * @throws ApiRequestException
	 */
	public function getBySeasonId( int $teamId, int $seasonId ) {
		$url = "teams/{$teamId}/squad/{$seasonId}";

		return $this->call( $url );
	}

	public function getAll( $args = [] ) {
		if ( ! empty( $args['include'] ) ) {
			$this->setIncludes( $args['include'] );
		}
		
		return $this->call( 'teams' );
	}
}
