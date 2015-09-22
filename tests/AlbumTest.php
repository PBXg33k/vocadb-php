<?php
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;

use Pbxg33k\VocaDB;

class AlbumTest extends PHPUnit_Framework_TestCase
{
	protected $client;
	protected $guzzleClient;

	// protected function setUp()
	// {
	// 	$mock = new MockHandler([
	// 		new Response(404),
	// 		new Response(200, [], file_get_contents(dirname(__FILE__).'/mock/album/get_1.json')),
	// 		new Response(200, [], file_get_contents(dirname(__FILE__).'/mock/album/complete_1.json'))
	// 	]);
	// 	$handler = HandlerStack::create($mock);
	// 	$this->client = new VocaDB\Client(['guzzle' => ['handler' => $handler]]);
	// }

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
		$response = $this->client->album->get(404);
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
		$response = $this->client->album->get(1);

		// $this->assertEquals("Tripshots feat. 初音ミク", $response->artistString);
		$this->assertInstanceOf('Pbxg33k\VocaDB\Models\Album', $response);

		$this->assertEquals($response->artistString, 'Tripshots feat. 初音ミク');
		$this->assertEquals($response->createDate, '2011-01-16T00:00:00');
		$this->assertEquals($response->defaultName, 'Synthesis');
		$this->assertEquals($response->defaultNameLanguage, 'English');
		$this->assertEquals($response->discType, 'Album');
		$this->assertEquals($response->id, 1);
		$this->assertEquals($response->name, 'Synthesis');
		$this->assertEquals($response->ratingAverage, 4.5);
		$this->assertEquals($response->ratingCount, 6);
		$this->assertEquals($response->releaseDate->day, 11);
		$this->assertEquals($response->releaseDate->formatted, '11.6.2009');
		$this->assertEquals($response->releaseDate->isEmpty, false);
		$this->assertEquals($response->releaseDate->month, 6);
		$this->assertEquals($response->releaseDate->year, 2009);
		$this->assertEquals($response->status, 'Approved');
		$this->assertEquals($response->version, 9);
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
		$response = $this->client->album->get(1);

		$this->assertInstanceOf('pbxg33k\VocaDB\Models\Album', $response);
		$this->assertInstanceOf('Pbxg33k\VocaDB\Models\Collections\ArtistCollection', $response->artists);
		// $this->assertInstanceOf('Pbxg33k\VocaDB\Models\ReleaseEvent')
		$this->assertInstanceOf('Pbxg33k\VocaDB\Models\Collections\TrackCollection', $response->tracks);
	}
	// public function testTestServer()
	// {
		
	// 	$this->assertEquals($this->client->get('/foo')->getStatusCode(), 200);

	// 	$this->mockServer->addResponse(new Response(202));
	// 	$this->assertEquals($this->client->get('/foo')->getStatusCode(), 202);
	// }
}