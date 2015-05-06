<?php
/**
 * {LICENSE}
 */
namespace Pbxg33k\VocaDB;

/**
 * Album class
 * 
 * @package pbxg33k\VocaDB
 * @author Oguzhan Uysal <development@oguzhanuysal.eu>
 */
class Album extends Base
{
	public $endpoint = 'albums';

	public $fields = ['AdditionalNames', 'Artists', 'Identifiers', 'MainPicture', 'Names', 'PVs', 'Tags', 'Tracks', 'WebLinks'];

	public function getComplete($arguments = null)
	{
		// Make sure we get additional fields such as tracks
		$fields = implode(',', $this->fields);

		return parent::get(array_merge((array)$arguments, ['fields' => $fields]));
	}

	public function getByName($name)
	{
		return $this->get('',['query' => $name]);
	}
}