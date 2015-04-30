<?php
/**
 * {LICENSE}
 */
namespace pbxg33k\VocaDB;

/**
 * Artist class
 * 
 * @package pbxg33k\VocaDB
 * @author Oguzhan Uysal <development@oguzhanuysal.eu>
 */
class Artist 
{
	/**
	 * @var pbxg33k\VocaDB\Client
	 */
	private $client;

	public $endpoint = 'artists';

	/**
	 * Construct the Artist
	 * 
	 * @param pbxg33k\VocaDB\Client $client 
	 */
	public function __construct(Client $client) 
	{
		$this->client = $client;
	}

	/**
	 * Get artists
	 * 
	 * @param array $arguments 
	 * @return pbxg33k\VocaDB\Models\ArtistCollection
	 */
	public function get($arguments = null)
	{
		$response = $this->client->get($this->endpoint, $arguments);
		switch($response->getStatusCode()) {
			case 200:
				$artist_collection = new Models\Collections\ArtistCollection();
				$response_obj = $response->json();
				if(count($response_obj['items'])) {
					foreach($response_obj['items'] as $item) {
						$artist_obj = new Models\Artist();
						$artist_obj->fromApi($item);
						$artist_collection->add($artist_obj);
					}
				}
				var_dump($response_obj, $artist_obj, $artist_collection);die();
				return $artist_collection;
				break;
			default:
				throw new \Exception('HTTP ERROR OCCURED');
				break;
		}
		var_dump($response);
	}

	public function getByName($name) {
		return $this->get(['query' => $name]);
	}
}