<?php
use GuzzleHttp\Subscriber\Mock;
use GuzzleHttp\Message\Response;

use pbxg33k\VocaDB;

class ClientTest extends PHPUnit_Framework_TestCase
{
	protected $client;
	protected $mockServer;

	protected function setUp()
	{
		$this->client = new VocaDB\Client();
		$this->mockServer = new Mock();
		$this->client->_client->getEmitter()->attach($this->mockServer);
	}

	public function testTestServer()
	{
		// Server::enqueue("HTTP/1.1 200 OK\r\n\Content-Length: 0r\n\r\n");
		$this->mockServer->addResponse("HTTP/1.1 200 OK\r\n\Content-Length: 0r\n\r\n");
		$this->assertEquals($this->client->get('/foo')->getStatusCode(), 200);

		$this->mockServer->addResponse(new Response(202));
		$this->assertEquals($this->client->get('/foo')->getStatusCode(), 202);
	}

	public function testInit()
	{
		$this->assertInstanceOf('pbxg33k\VocaDB\Client', $this->client);
	}

	public function testInitArtist()
	{
		$this->assertInstanceOf('pbxg33k\VocaDB\Artist', $this->client->artist);
	}

	public function testInitSong()
	{
		$this->assertInstanceOf('pbxg33k\VocaDB\Song', $this->client->song);
	}

	public function testInitAlbum()
	{
		$this->assertInstanceOf('pbxg33k\VocaDB\Album', $this->client->album);
	}
}