<?php
use GuzzleHttp\Client;
use GuzzleHttp\Subscriber\Mock;
use GuzzleHttp\Message\Response;
use GuzzleHttp\Tests\Server;

use pbxg33k\VocaDB;

class AlbumTest extends PHPUnit_Framework_TestCase
{
	protected $client;
	protected $mockServer;

	protected function setUp()
	{
		$this->client = new VocaDB\Client();
	}

	public function testTestServer()
	{
		Server::enqueue("HTTP/1.1 200 OK\r\n\Content-Length: 0r\n\r\n");
		$this->client->setApiUri(Server::$url);

		$this->assertEqual($this->client->get('/foo')->getStatusCode(), 200);
	}
}