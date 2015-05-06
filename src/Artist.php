<?php
/**
 * {LICENSE}
 */
namespace pbxg33k\VocaDB;

/**
 * Artist class
 * 
 * @package pbxg33k\VocaDB
 * @author Oguzhan Uysal <development@oguzhanuysal.eu>
 */
class Artist extends Base
{
	public $endpoint = 'artists';

	public $fields = ['Description', 'Groups', 'Members', 'Names', 'Tags', 'WebLinks'];

	public function getByName($name)
	{
		return $this->get(['query' => $name]);
	}
}