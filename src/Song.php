<?php
/**
 * {LICENSE}
 */
namespace pbxg33k\VocaDB;

class Song extends Base
{
	public $endpoint = 'songs';

	public $fields = ['Albums', 'Artists', 'Names', 'PVs', 'Tags', 'ThumbUrl', 'WebLinks'];

	public function getByName($name)
	{
		return $this->get(['query' => $name]);
	}
}