<?php
/**
 * {LICENSE}
 */
namespace pbxg33k\VocaDB;

use GuzzleHttp\Client as GuzzleClient;

/**
 * VocaDB PHP Client
 * 
 * @package pbxg33k\VocaDB
 * @author Oguzhan Uysal <development@oguzhanuysal.eu>
 */
class Client {
	const CLIENT_VER = "0.0.1";
	const USER_AGENT_SUFFIX = "pgxg33k-vocadb-php-client/";
	const API_URI = "http://vocadb.net/api";

	/**
	 * @var pbxg33k\VocaDB\Artist
	 */
	public $artist;

	private $_client;

	/**
	 * Construct the VocaDB Client
	 * 
	 * @param pbxg33k\VocaDB\Config $config 
	 */
	public function __construct($config = null)
	{
		if(is_object($config) && class_implements('pbxg33k\VocaDB\Config')) {

		}

		$guzzle_config = [
			'base_url' => self::API_URI,
			'defaults' => [
				'headers' => [
					'User-Agent'=> self::USER_AGENT_SUFFIX.'/'.self::CLIENT_VER,
					'Accept' => 'application/json'
				]
			]
		];

		/**
		 * Load all objects
		 */
		$this->artist = new Artist($this);

		/**
		 * Load client
		 */
		$this->_client = new GuzzleClient($guzzle_config);

	}

	/**
	 * Get the client version
	 * 
	 * @return string
	 */
	public function getClientVersion()
	{
		return self::CLIENT_VER;
	}

	/**
	 * Get the User Agent suffix
	 * 
	 * @return string
	 */
	public function getUserAgentSuffix()
	{
		return self::USER_AGENT_SUFFIX;
	}

	/**
	 * Get the API URI
	 * 
	 * @return string
	 */
	public function getApiUri()
	{
		return self::API_URI;
	}

	/**
	 * Return the API Response using a GET request
	 * 
	 * @param string $uri 
	 * @param array $arguments 
	 * @return GuzzleHttp\Message\Response
	 * 
	 * @todo Add exceptions on errors
	 */
	public function get($uri, $arguments)
	{
		$client_args = [];
		if($arguments)
			$client_args['query'] = $arguments;

		return $this->_client->get($this->buildUri($uri), $client_args);
	}

	/**
	 * Return a FQDN URI with arguments
	 * 
	 * @param string $endpoint 
	 * @param array $arguments 
	 * @return string
	 */
	protected function buildUri($endpoint)
	{
		return self::API_URI.'/'.$endpoint;
	}
}