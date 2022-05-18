<?php

namespace ICC\Sportmonks\Cricket;

use InvalidArgumentException;
use ICC\Sportmonks\Cricket\Exception\ApiRequestException;
use stdClass;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;

/**
 * Class CricketClient
 * @package ICC\Sportmonks\Cricket
 */
class CricketClient {
	private \Symfony\Contracts\HttpClient\HttpClientInterface $client;
	protected array $query = array();

	/**
	 * CricketClient constructor.
	 */
	public function __construct() {
		// Set API Key
		$this->query['api_token'] = $_ENV['SPORTMONKS_API_TOKEN'];

		// Validate API Key
		if ( empty( $this->query['api_token'] ) ) {
			throw new InvalidArgumentException( 'Invalid API Key Provided' );
		}

		// Set Timezone
		if ( isset( $_ENV['SPORTMONKS_TIMEZONE'] ) ) {
			$this->query['tz'] = $_ENV['SPORTMONKS_TIMEZONE'];
		}

		// Create Client
		$this->client = HttpClient::create( [ 'base_uri' => "https://cricket.sportmonks.com/api/v2.0/" ] );
	}

	/**
	 * @param string $url
	 *
	 * @return stdClass
	 * @throws ApiRequestException
	 */
	protected function call( string $url ) {
		try {
			$response = $this->client->request( 'GET', $url, [ 'query' => $this->query ] )->getContent();

			return json_decode( $response );
		} catch ( TransportExceptionInterface | RedirectionExceptionInterface | ClientExceptionInterface | ServerExceptionInterface $e ) {
			throw new ApiRequestException( $e->getMessage(), $e->getCode() );
		}
	}

	/**
	 * @param array $bookmakerIds
	 *
	 * @return $this
	 */
	public function setBookmakers( array $bookmakerIds ): self {
		// Trim & Join Array of Bookmaker IDs
		$this->query['bookmakers'] = implode( ",", array_map( "trim", array_filter( $bookmakerIds ) ) );

		return $this;
	}

	/**
	 * @param array $fixtureIds
	 *
	 * @return $this
	 */
	public function setFixtures( array $fixtureIds ): self {
		// Trim & Join Array of Fixtures IDs
		$this->query['fixtures'] = implode( ",", array_map( "trim", array_filter( $fixtureIds ) ) );

		return $this;
	}

	/**
	 * @param array $includes
	 *
	 * @return $this
	 */
	public function setIncludes( array $includes ): self {
		// Trim & Join Array of Includes
		$this->query['include'] = implode( ",", array_map( "trim", array_filter( $includes ) ) );

		return $this;
	}

	/**
	 * @param array $leagueIds
	 *
	 * @return $this
	 */
	public function setLeagues( array $leagueIds ): self {
		// Trim & Join Array of League IDs
		$this->query['leagues'] = implode( ",", array_map( "trim", array_filter( $leagueIds ) ) );

		return $this;
	}

	/**
	 * @param array $marketIds
	 *
	 * @return $this
	 */
	public function setMarkets( array $marketIds ): self {
		// Trim & Join Array of Market IDs
		$this->query['markets'] = implode( ",", array_map( "trim", array_filter( $marketIds ) ) );

		return $this;
	}

	/**
	 * @param int $groupId
	 *
	 * @return CricketClient
	 */
	public function setGroup( int $groupId ): self {
		// Add group ID
		$this->query['group_id'] = $groupId;

		return $this;
	}

	/**
	 * @param int $page
	 *
	 * @return $this
	 */
	public function setPage( int $page ): self {
		$this->query['page'] = $page;

		return $this;
	}
}
