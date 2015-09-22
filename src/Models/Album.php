<?php
namespace Pbxg33k\VocaDB\Models;

class Album extends Base
{
	/**
	 * 
	 * @var string
	 */
	public $additionalNames;

	/**
	 * 
	 * @var Pbxg33k\VocaDB\Models\Collections\ArtistCollection
	 */
	public $artists;

	/**
	 * 
	 * @var string
	 */
	public $artistString;

	/**
	 * 
	 * @var string
	 */
	public $barcode;

	/**
	 * 
	 * @var string
	 */
	public $catalogNumber;

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
	public $discType;

	/**
	 * 
	 * @var string
	 */
	public $id;

	/**
	 * 
	 * @var string
	 */
	public $identifiers;

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
	 * @var string
	 */
	public $mergedTo;

	/**
	 * 
	 * @var string
	 */
	public $name;

	/**
	 * 
	 * @var array
	 */
	public $names;

	/**
	 * 
	 * @var array
	 */
	public $pvs;

	/**
	 * 
	 * @var float
	 */
	public $ratingAverage;

	/**
	 * 
	 * @var integer
	 */
	public $ratingCount;

	/**
	 * 
	 * @var string
	 */
	public $releaseDate;

	/**
	 * 
	 * @var Pbxg33k\VocaDB\Models\ReleaseEvent
	 */
	public $releaseEvent;

	/**
	 * 
	 * @var string
	 */
	public $status;

	/**
	 * 
	 * @var string
	 */
	public $tags;

	/**
	 * 
	 * @var Pbxg33k\VocaDB\Models\Collections\TrackCollection
	 */
	public $tracks;

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