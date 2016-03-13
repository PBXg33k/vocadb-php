<?php
namespace Pbxg33k\VocaDB\Models;

class Artist extends Base
{
	/**
	 * 
	 * @var string
	 */
	protected $additionalNames;

	/**
	 * 
	 * @var string
	 */
	protected $artistType;

	/**
	 * 
	 * @var Pbxg33k\VocaDB\Models\Artist
	 */
	protected $baseVoicebank;

	/**
	 * 
	 * @var string
	 */
	protected $createDate;

	/**
	 * 
	 * @var string
	 */
	protected $defaultName;

	/**
	 * 
	 * @var string
	 */
	protected $defaultNameLanguage;

	/**
	 * 
	 * @var string
	 */
	protected $description;

	/**
	 * 
	 * @var Pbxg33k\VocaDB\Models\Collections\ArtistCollection
	 */
	protected $groups;
	/**
	 * 
	 * @var string
	 */
	protected $id;

	/**
	 * 
	 * @var string
	 */
	protected $localizedName;

	/**
	 * 
	 * @var string
	 */
	protected $mainPicture;

	/**
	 * 
	 * @var Pbxg33k\VocaDB\Models\Collections\ArtistCollection
	 */
	protected $members;

	/**
	 * 
	 * @var integer
	 */
	protected $mergedTo;

	/**
	 * 
	 * @var string
	 */
	protected $name;

	/**
	 * 
	 * @var string
	 */
	protected $names;

	/**
	 * 
	 * @var string
	 */
	protected $pictureMime;

	/**
	 * 
	 * @var string
	 */
	protected $relations;

	/**
	 * 
	 * @var string
	 */
	protected $status;

	/**
	 * 
	 * @var integer
	 */
	protected $version;

	/**
	 * 
	 * @var string
	 */
	protected $webLinks;
}