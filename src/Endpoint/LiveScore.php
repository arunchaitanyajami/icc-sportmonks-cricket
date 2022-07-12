<?php

namespace ICC\Sportmonks\Cricket\Endpoint;

use ICC\Sportmonks\Cricket\Exception\ApiRequestException;
use ICC\Sportmonks\Cricket\CricketClient;
use stdClass;

/**
 * Class LiveScore
 * @package ICC\Sportmonks\Cricket\Endpoint
 */
class LiveScore extends CricketClient {
	/**
	 * @return stdClass
	 * @throws ApiRequestException
	 */
	public function getAll( $args = [] ) {
		$url = "livescores";
		if ( ! empty( $args['include'] ) ) {
			$this->setIncludes( $args['include'] );
		}

		return $this->call( $url );
	}

	/**
	 * @return stdClass
	 * @throws ApiRequestException
	 */
	public function getAllInPlay() {
		$url = "livescores/now";

		return $this->call( $url );
	}
}
