<?php
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;

use Pbxg33k\VocaDB;

class AlbumTest extends PHPUnit_Framework_TestCase
{
	protected $client;
	protected $guzzleClient;

	 protected function setUp()
	 {
	 	$mock = new MockHandler([
	 		new Response(404),
	 		new Response(200, [], file_get_contents(dirname(__FILE__).'/mock/album/get_1.json')),
	 		new Response(200, [], file_get_contents(dirname(__FILE__).'/mock/album/complete_1.json'))
	 	]);
	 	$handler = HandlerStack::create($mock);
	 	$this->client = new VocaDB\Client(['guzzle' => ['handler' => $handler]]);
	 }

	/**
	 * @expectedException GuzzleHttp\Exception\ClientException
	 */
	public function testNotFoundResponseBehavior()
	{
		$this->client = new VocaDB\Client([
			'guzzle' => [
				'handler' => HandlerStack::create(
					new MockHandler([
						new Response(404)
					])
				)
			]
		]);
		$response = $this->client->album->single(404);
	}

	public function testSingleAlbum()
	{
		$this->client = new VocaDB\Client([
			'guzzle' => [
				'handler' => HandlerStack::create(
					new MockHandler([
						new Response(200, [], file_get_contents(dirname(__FILE__).'/mock/album/get_1.json'))
					])
				)
			]
		]);
		$response = $this->client->album->single(1);

		// $this->assertEquals("Tripshots feat. 初音ミク", $response->artistString);
		$this->assertInstanceOf('Pbxg33k\VocaDB\Models\Album', $response);

		$this->assertEquals($response->getArtistString(), 'Tripshots feat. 初音ミク');
		$this->assertEquals($response->getCreateDate(), '2011-01-16T00:00:00');
		$this->assertEquals($response->getDefaultName(), 'Synthesis');
		$this->assertEquals($response->getDefaultNameLanguage(), 'English');
		$this->assertEquals($response->getDiscType(), 'Album');
		$this->assertEquals($response->getId(), 1);
		$this->assertEquals($response->getName(), 'Synthesis');
		$this->assertEquals($response->getRatingAverage(), 4.5);
		$this->assertEquals($response->getRatingCount(), 6);
		$this->assertEquals($response->getReleaseDate()->day, 11);
		$this->assertEquals($response->getReleaseDate()->formatted, '11.6.2009');
		$this->assertEquals($response->getReleaseDate()->isEmpty, false);
		$this->assertEquals($response->getReleaseDate()->month, 6);
		$this->assertEquals($response->getReleaseDate()->year, 2009);
		$this->assertEquals($response->getStatus(), 'Approved');
		$this->assertEquals($response->getVersion(), 9);
	}

	public function testSingleCompleteAlbumObjects()
	{
		$this->client = new VocaDB\Client([
			'guzzle' => [
				'handler' => HandlerStack::create(
					new MockHandler([
						new Response(200, [], file_get_contents(dirname(__FILE__).'/mock/album/complete_1.json'))
					])
				)
			]
		]);
		$response = $this->client->album->singleComplete(1);

		$this->assertInstanceOf('pbxg33k\VocaDB\Models\Album', $response);
		$this->assertInstanceOf('Pbxg33k\VocaDB\Models\Collections\ArtistCollection', $response->getArtists());
		$this->assertInstanceOf('Pbxg33k\VocaDB\Models\Collections\TrackCollection', $response->getTracks());
	}
	
}