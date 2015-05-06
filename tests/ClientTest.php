<?php
use pbxg33k\VocaDB;

class ClientTest extends PHPUnit_Framework_TestCase
{
	protected $client;

	protected function setUp()
	{
		$this->client = new VocaDB\Client();
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
}