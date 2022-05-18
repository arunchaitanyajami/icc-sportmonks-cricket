<?php

namespace ICC\Sportmonks\Cricket\Endpoint;

use ICC\Sportmonks\Cricket\Endpoint;
use ICC\Sportmonks\Cricket\Exception\ApiRequestException;
use ICC\Sportmonks\Cricket\CricketClient;
use stdClass;

/**
 * Class Player
 * @package ICC\Sportmonks\Cricket\Endpoint
 */
class Player extends CricketClient implements Endpoint {
	/**
	 * @param int $id Player Id.
	 *
	 * @return stdClass
	 * @throws ApiRequestException
	 */
	public function getById( int $id ) {
		$url = "players/{$id}";

		return $this->call( $url );
	}

	/**
	 * @return stdClass
	 * @throws ApiRequestException
	 */
	public function getAll( $args = [] ) {
		return $this->call("players" );
	}
}
