<?php

namespace ICC\Sportmonks\Cricket\Endpoint;

use ICC\Sportmonks\Cricket\Endpoint;
use ICC\Sportmonks\Cricket\Exception\ApiRequestException;
use ICC\Sportmonks\Cricket\CricketClient;
use stdClass;

/**
 * Class Season
 * @package ICC\Sportmonks\Cricket\Endpoint
 */
class Season extends CricketClient implements Endpoint {
	/**
	 * @param array $args
	 *
	 * @return stdClass
	 * @throws ApiRequestException
	 */
	public function getAll( $args = [] ) {
		$url = "seasons";

		return $this->call( $url );
	}

	/**
	 * @param int $id Season id
	 *
	 * @return stdClass
	 * @throws ApiRequestException
	 */
	public function getById( int $id ) {
		$url = "seasons/{$id}";

		return $this->call( $url );
	}
}
