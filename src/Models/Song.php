<?php
namespace Pbxg33k\VocaDB\Models;

class Song extends Base
{
	/**
	 * 
	 * @var string
	 */
	protected $additionalNames;

	/**
	 * 
	 * @var Pbxg33k\VocaDB\Models\Collections\AlbumCollection
	 */
	protected $albums;

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
	protected $favoritedTimes;

	/**
	 * 
	 * @var string
	 */
	protected $id;

	/**
	 * 
	 * @var string
	 */
	protected $lengthSeconds;

	/**
	 * 
	 * @var string
	 */
	protected $localizedName;

	/**
	 * 
	 * @var string
	 */
	protected $lyrics;

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
	 * @var string
	 */
	protected $names;

	/**
	 * 
	 * @var string
	 */
	protected $originalVersionId;

	/**
	 * 
	 * @var string
	 */
	protected $pvs;

	/**
	 * 
	 * @var string
	 */
	protected $pvServices;

	/**
	 * 
	 * @var string
	 */
	protected $ratingScore;

	/**
	 * 
	 * @var string
	 */
	protected $songType;

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
	 * @var string
	 */
	protected $thumbUrl;

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