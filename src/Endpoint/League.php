<?php

namespace ICC\Sportmonks\Cricket\Endpoint;

use ICC\Sportmonks\Cricket\Endpoint;
use ICC\Sportmonks\Cricket\Exception\ApiRequestException;
use ICC\Sportmonks\Cricket\CricketClient;
use stdClass;

/**
 * Class League
 * @package ICC\Sportmonks\Cricket\Endpoint
 */
class League extends CricketClient implements Endpoint {
	/**
	 * @return stdClass
	 * @throws ApiRequestException
	 */
	public function getAll( $args = [] ) {
		$url = "leagues";

		return $this->call( $url );
	}

	/**
	 * @param int $id
	 *
	 * @return stdClass
	 * @throws ApiRequestException
	 */
	public function getById( int $id ) {
		$url = "leagues/{$id}";

		return $this->call( $url );
	}
}
