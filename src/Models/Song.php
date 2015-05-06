<?php
namespace pbxg33k\VocaDB\Models;

class Song extends Base
{
	/**
	 * 
	 * @var string
	 */
	public $additionalNames;

	/**
	 * 
	 * @var pbxg33k\VocaDB\Models\Collections\AlbumCollection
	 */
	public $albums;

	/**
	 * 
	 * @var pbxg33k\VocaDB\Models\Collections\ArtistCollection
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
	public $favoritedTimes;

	/**
	 * 
	 * @var string
	 */
	public $id;

	/**
	 * 
	 * @var string
	 */
	public $lengthSeconds;

	/**
	 * 
	 * @var string
	 */
	public $localizedName;

	/**
	 * 
	 * @var string
	 */
	public $lyrics;

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
	 * @var string
	 */
	public $names;

	/**
	 * 
	 * @var string
	 */
	public $originalVersionId;

	/**
	 * 
	 * @var string
	 */
	public $pvs;

	/**
	 * 
	 * @var string
	 */
	public $pvServices;

	/**
	 * 
	 * @var string
	 */
	public $ratingScore;

	/**
	 * 
	 * @var string
	 */
	public $songType;

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
	 * @var string
	 */
	public $thumbUrl;

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