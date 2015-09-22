<?php
namespace Pbxg33k\VocaDB\Models;

class Track extends Base
{
	/**
	 * 
	 * @var integer
	 */
	public $discNumber;

	/**
	 * 
	 * @var integer
	 */
	public $id;

	/**
	 * 
	 * @var string
	 */
	public $name;

	/**
	 * 
	 * @var Pbxg33k\VocaDB\Models\Song
	 */
	public $song;

	/**
	 * 
	 * @var integer
	 */
	public $trackNumber;

	/**
	 * 
	 * @var Pbxg33k\VocaDB\Models\Album
	 */
	public $album;
}