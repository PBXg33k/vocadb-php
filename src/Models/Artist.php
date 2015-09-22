<?php
namespace Pbxg33k\VocaDB\Models;

class Artist extends Base
{
	/**
	 * 
	 * @var string
	 */
	public $additionalNames;

	/**
	 * 
	 * @var string
	 */
	public $artistType;

	/**
	 * 
	 * @var Pbxg33k\VocaDB\Models\Artist
	 */
	public $baseVoicebank;

	/**
	 * 
	 * @var string
	 */
	public $createDate;

	/**
	 * 
	 * @var string
	 */
	public $defaultName;

	/**
	 * 
	 * @var string
	 */
	public $defaultNameLanguage;

	/**
	 * 
	 * @var string
	 */
	public $description;

	/**
	 * 
	 * @var Pbxg33k\VocaDB\Models\Collections\ArtistCollection
	 */
	public $groups;
	/**
	 * 
	 * @var string
	 */
	public $id;

	/**
	 * 
	 * @var string
	 */
	public $localizedName;

	/**
	 * 
	 * @var string
	 */
	public $mainPicture;

	/**
	 * 
	 * @var Pbxg33k\VocaDB\Models\Collections\ArtistCollection
	 */
	public $members;

	/**
	 * 
	 * @var integer
	 */
	public $mergedTo;

	/**
	 * 
	 * @var string
	 */
	public $name;

	/**
	 * 
	 * @var string
	 */
	public $names;

	/**
	 * 
	 * @var string
	 */
	public $pictureMime;

	/**
	 * 
	 * @var string
	 */
	public $relations;

	/**
	 * 
	 * @var string
	 */
	public $status;

	/**
	 * 
	 * @var integer
	 */
	public $version;

	/**
	 * 
	 * @var string
	 */
	public $webLinks;
}