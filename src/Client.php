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
 * 
 * @version 0.1.0-dev
 */
class Client {
	const CLIENT_VER = "0.0.1";
	const USER_AGENT_SUFFIX = "pgxg33k-vocadb-php-client/";
	private $api_url = "http://vocadb.net/api";

	/**
	 * @var pbxg33k\VocaDB\Artist
	 */
	public $artist;

	public $song;

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
			'base_url' => $this->api_url,
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

		$this->song = new Song($this);

		/**
		 * Load client
		 */
		$this->_client = new GuzzleClient($guzzle_config);
	}

	public function getHeaders()
	{
		return $this->_client->getHeaders();
	}

	public function setHeader($name, $value)
	{
		$this->_client->setHeader($name, $value);
		return $this;
	}

	public function resetHeaders()
	{
		$this->_client->setHeaders([]);
		return $this;
	}

	public function setContent($content)
	{
		$this->content = $content;
		return $this;
	}

	public function setJsonContent($content)
	{
		$this->content = json_decode($content);
		return $this;
	}
	public function getBody()
	{
		return $this->_client->getBody();
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
		return $this->api_url;
	}

	/**
	 * Set the API URI
	 * 
	 * @return object
	 */
	public function setApiUri($uri)
	{
		$this->api_url = $uri;
		return $this;
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
		return $this->api_url.'/'.$endpoint;
	}
}