<?php
use GuzzleHttp\Subscriber\Mock;
use GuzzleHttp\Message\Response;

use pbxg33k\VocaDB;

class AlbumTest extends PHPUnit_Framework_TestCase
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

	public function testAlbumOneWithoutExtraArgs()
	{
		$this->mockServer->addResponse(file_get_contents(__DIR__.'/mock/albums_1.txt'));
		$resp = $this->client->album->getById(1);

		$this->assertInstanceOf('pbxg33k\VocaDB\Models\Album', $resp);

		$this->assertEquals($resp->artistString, 'Tripshots feat. 初音ミク');
		$this->assertEquals($resp->createDate, '2011-01-16T00:00:00');
		$this->assertEquals($resp->defaultName, 'Synthesis');
		$this->assertEquals($resp->defaultNameLanguage, 'English');
		$this->assertEquals($resp->discType, 'Album');
		$this->assertEquals($resp->id, 1);
		$this->assertEquals($resp->name, 'Synthesis');
		$this->assertEquals($resp->ratingAverage, 4.5);
		$this->assertEquals($resp->ratingCount, 6);
		$this->assertInternalType('array', $resp->releaseDate);
		$this->assertEquals($resp->releaseDate['day'], 11);
		$this->assertEquals($resp->releaseDate['formatted'], '11.6.2009');
		$this->assertEquals($resp->releaseDate['isEmpty'], false);
		$this->assertEquals($resp->releaseDate['month'], 6);
		$this->assertEquals($resp->releaseDate['year'], 2009);
		$this->assertEquals($resp->status, 'Approved');
		$this->assertEquals($resp->version, 9);
	}
}