<?php

namespace ICC\Sportmonks\Cricket\Endpoint;

use ICC\Sportmonks\Cricket\Exception\ApiRequestException;
use ICC\Sportmonks\Cricket\CricketClient;
use stdClass;

/**
 * Class Stage
 * @package ICC\Sportmonks\Cricket\Endpoint
 */
class Stage extends CricketClient {
	/**
	 * @param int $stageId
	 *
	 * @return stdClass
	 * @throws ApiRequestException
	 */
	public function getById( int $stageId ): stdClass {
		$url = "stages/{$stageId}";

		return $this->call( $url );
	}

	/**
	 * @param array $args
	 *
	 * @return stdClass
	 * @throws ApiRequestException
	 */
	public function getAll( array $args = [] ): stdClass {
		if ( ! empty( $args['page'] ) ) {
			$this->setPage( $args['page'] );
		}

		return $this->call( "stages/" );
	}

	/**
	 * @param int $seasonId
	 *
	 * @return stdClass
	 * @throws ApiRequestException
	 */
	public function getBySeasonId( int $seasonId ): stdClass {
		$url = "stages/season/{$seasonId}";

		return $this->call( $url );
	}
}
