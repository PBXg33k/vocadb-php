<?php
/**
 * {LICENSE}
 */
namespace Pbxg33k\VocaDB;

use GuzzleHttp\Client as GuzzleClient;

/**
 * VocaDB PHP Client
 * 
 * @package Pbxg33k\VocaDB
 * @author Oguzhan Uysal <development@oguzhanuysal.eu>
 * 
 * @version 0.1.0-dev
 */
class Client {
	const CLIENT_VER = "0.1.0";
	const USER_AGENT_SUFFIX = "pgxg33k-vocadb-php-client/";
	private $api_url = "http://vocadb.net/api";

	/**
	 * @var Pbxg33k\VocaDB\Artist
	 */
	public $artist;
	public $album;
	public $song;
	public $tag;
	public $releaseEvent;

	public $_client;

	/**
	 * Construct the VocaDB Client
	 * 
	 * @param Pbxg33k\VocaDB\Config $config 
	 */
	public function __construct($config = null)
	{
		$guzzle_config = [
			'base_url' => $this->api_url,
			'defaults' => [
				'headers' => [
					'User-Agent'=> self::USER_AGENT_SUFFIX.'/'.self::CLIENT_VER,
					'Accept' => 'application/json'
				]
			]
		];

		if($config) {
			if(isset($config['guzzle']))
				$guzzle_config = array_merge($guzzle_config, $config['guzzle']);
		}

		/**
		 * Load all objects
		 */
		$this->artist = new Artist($this);
		$this->album = new Album($this);
		$this->song = new Song($this);
		$this->album = new Album($this);
		$this->tag = new Tag($this);
		$this->releaseEvent = new ReleaseEvent($this);

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
	public function get($uri, $arguments = null)
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