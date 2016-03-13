<?php
/**
 * {LICENSE}
 */
namespace Pbxg33k\VocaDB;

/**
 * Artist class
 * 
 * @package Pbxg33k\VocaDB
 * @author Oguzhan Uysal <development@oguzhanuysal.eu>
 */
class Artist extends Base
{
	public $endpoint = 'artists';

	public $fields = ['Description', 'Groups', 'Members', 'Names', 'Tags', 'WebLinks'];

	public function albums()
	{
		return $this->client->album->get(['artistId' => $this->id]);
	}
}