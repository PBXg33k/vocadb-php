<?php
namespace Pbxg33k\VocaDB\Models;

class Album extends Base
{
	/**
	 * 
	 * @var string
	 */
	protected $additionalNames;

	/**
	 * 
	 * @var Pbxg33k\VocaDB\Models\Collections\ArtistCollection
	 */
	protected $artists;

	/**
	 * 
	 * @var string
	 */
	protected $artistString;

	/**
	 * 
	 * @var string
	 */
	protected $barcode;

	/**
	 * 
	 * @var string
	 */
	protected $catalogNumber;

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
	protected $discType;

	/**
	 * 
	 * @var string
	 */
	protected $id;

	/**
	 * 
	 * @var string
	 */
	protected $identifiers;

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
	 * @var string
	 */
	protected $mergedTo;

	/**
	 * 
	 * @var string
	 */
	protected $name;

	/**
	 * 
	 * @var array
	 */
	protected $names;

	/**
	 * 
	 * @var array
	 */
	protected $pvs;

	/**
	 * 
	 * @var float
	 */
	protected $ratingAverage;

	/**
	 * 
	 * @var integer
	 */
	protected $ratingCount;

	/**
	 * 
	 * @var string
	 */
	protected $releaseDate;

	/**
	 * 
	 * @var Pbxg33k\VocaDB\Models\ReleaseEvent
	 */
	protected $releaseEvent;

	/**
	 * 
	 * @var string
	 */
	protected $status;

	/**
	 * 
	 * @var string
	 */
	protected $tags;

	/**
	 * 
	 * @var Pbxg33k\VocaDB\Models\Collections\TrackCollection
	 */
	protected $tracks;

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