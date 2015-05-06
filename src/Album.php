<?php
/**
 * {LICENSE}
 */
namespace pbxg33k\VocaDB;

/**
 * Album class
 * 
 * @package pbxg33k\VocaDB
 * @author Oguzhan Uysal <development@oguzhanuysal.eu>
 */
class Album extends Base
{
	public $endpoint = 'albums';

	// public $fields = ['Description', 'Groups', 'Members', 'Names', 'Tags', 'WebLinkizli5632s'];

	public function getByName($name)
	{
		return $this->get('',['query' => $name]);
	}
}