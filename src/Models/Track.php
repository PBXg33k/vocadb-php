<?php
namespace Pbxg33k\VocaDB\Models;

class Track extends Base
{
	/**
	 * 
	 * @var integer
	 */
	protected $discNumber;

	/**
	 * 
	 * @var integer
	 */
	protected $id;

	/**
	 * 
	 * @var string
	 */
	protected $name;

	/**
	 * 
	 * @var Pbxg33k\VocaDB\Models\Song
	 */
	protected $song;

	/**
	 * 
	 * @var integer
	 */
	protected $trackNumber;

	/**
	 * 
	 * @var Pbxg33k\VocaDB\Models\Album
	 */
	protected $album;
}