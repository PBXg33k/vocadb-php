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
	/**
	 * {@inheritdoc}
	 */
	public $endpoint = 'artists';

	/**
	 * {@inheritdoc}
	 */
	public $fields = ['Description', 'Groups', 'Members', 'Names', 'Tags', 'WebLinks'];

	/**
	 * @return mixed
	 */
	public function albums()
	{
		return $this->client->album->get(['artistId' => $this->id]);
	}
}