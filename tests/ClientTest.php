<?php
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\Tests\Server;
use GuzzleHttp\Psr7\Response;

use Pbxg33k\VocaDB;

class ClientTest extends PHPUnit_Framework_TestCase
{
	/** @var VocaDB\Client */
	protected $client;

	/** @var MockHandler */
	protected $mockServer;

	protected function setUp()
	{
		$this->client = new VocaDB\Client();
		$this->mockServer = new MockHandler();
	}

	public function testInit()
	{
		$this->assertInstanceOf('Pbxg33k\VocaDB\Client', $this->client);
	}

	public function testInitArtist()
	{
		$this->assertInstanceOf('Pbxg33k\VocaDB\Artist', $this->client->artist);
	}

	public function testInitSong()
	{
		$this->assertInstanceOf('Pbxg33k\VocaDB\Song', $this->client->song);
	}
}