<?php
/**
 * {LICENSE}
 */
namespace Pbxg33k\VocaDB;

class Album extends Base
{
	public $endpoint = 'albums';

	public $fields = ['AdditionalNames', 'Artists', 'Identifiers', 'MainPicture', 'Names', 'PVs', 'Tags', 'Tracks', 'WebLinks'];

	public function getComplete($arguments = null)
	{
		// Make sure we get additional fields such as tracks
		$fields = implode(',', $this->fields);

		$parent = parent::get(array_merge((array)$arguments, ['fields' => $fields]));

		print_r($parent);
	}
}