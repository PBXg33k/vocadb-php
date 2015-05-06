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

		$this->assertEquals("Tripshots feat. 初音ミク", $response->artistString);
	}
	// public function testTestServer()
	// {
		
	// 	$this->assertEquals($this->client->get('/foo')->getStatusCode(), 200);

	// 	$this->mockServer->addResponse(new Response(202));
	// 	$this->assertEquals($this->client->get('/foo')->getStatusCode(), 202);
	// }
}