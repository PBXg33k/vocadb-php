<?php
namespace Pbxg33k\VocaDB\Models;

use Pbxg33k\VocaDB\Models\Collections\AlbumCollection;
use Pbxg33k\VocaDB\Models\Collections\ArtistCollection;

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

	/**
	 * @return string
	 */
	public function getAdditionalNames()
	{
		return $this->additionalNames;
	}

	/**
	 * @param string $additionalNames
	 */
	public function setAdditionalNames($additionalNames)
	{
		$this->additionalNames = $additionalNames;
	}

	/**
	 * @return Collections\AlbumCollection
	 */
	public function getAlbums()
	{
		return $this->albums;
	}

	/**
	 * @param Collections\AlbumCollection $albums
	 */
	public function setAlbums(AlbumCollection $albums)
	{
		$this->albums = $albums;
	}

	/**
	 * @return Collections\ArtistCollection
	 */
	public function getArtists()
	{
		return $this->artists;
	}

	/**
	 * @param Collections\ArtistCollection $artists
	 */
	public function setArtists(ArtistCollection $artists)
	{
		$this->artists = $artists;
	}

	/**
	 * @return string
	 */
	public function getArtistString()
	{
		return $this->artistString;
	}

	/**
	 * @param string $artistString
	 */
	public function setArtistString($artistString)
	{
		$this->artistString = $artistString;
	}

	/**
	 * @return string
	 */
	public function getCreateDate()
	{
		return $this->createDate;
	}

	/**
	 * @param string $createDate
	 */
	public function setCreateDate($createDate)
	{
		$this->createDate = $createDate;
	}

	/**
	 * @return string
	 */
	public function getDefaultName()
	{
		return $this->defaultName;
	}

	/**
	 * @param string $defaultName
	 */
	public function setDefaultName($defaultName)
	{
		$this->defaultName = $defaultName;
	}

	/**
	 * @return string
	 */
	public function getDefaultNameLanguage()
	{
		return $this->defaultNameLanguage;
	}

	/**
	 * @param string $defaultNameLanguage
	 */
	public function setDefaultNameLanguage($defaultNameLanguage)
	{
		$this->defaultNameLanguage = $defaultNameLanguage;
	}

	/**
	 * @return string
	 */
	public function getFavoritedTimes()
	{
		return $this->favoritedTimes;
	}

	/**
	 * @param string $favoritedTimes
	 */
	public function setFavoritedTimes($favoritedTimes)
	{
		$this->favoritedTimes = $favoritedTimes;
	}

	/**
	 * @return string
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @param string $id
	 */
	public function setId($id)
	{
		$this->id = $id;
	}

	/**
	 * @return string
	 */
	public function getLengthSeconds()
	{
		return $this->lengthSeconds;
	}

	/**
	 * @param string $lengthSeconds
	 */
	public function setLengthSeconds($lengthSeconds)
	{
		$this->lengthSeconds = $lengthSeconds;
	}

	/**
	 * @return string
	 */
	public function getLocalizedName()
	{
		return $this->localizedName;
	}

	/**
	 * @param string $localizedName
	 */
	public function setLocalizedName($localizedName)
	{
		$this->localizedName = $localizedName;
	}

	/**
	 * @return string
	 */
	public function getLyrics()
	{
		return $this->lyrics;
	}

	/**
	 * @param string $lyrics
	 */
	public function setLyrics($lyrics)
	{
		$this->lyrics = $lyrics;
	}

	/**
	 * @return string
	 */
	public function getMergedTo()
	{
		return $this->mergedTo;
	}

	/**
	 * @param string $mergedTo
	 */
	public function setMergedTo($mergedTo)
	{
		$this->mergedTo = $mergedTo;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * @param string $name
	 */
	public function setName($name)
	{
		$this->name = $name;
	}

	/**
	 * @return string
	 */
	public function getNames()
	{
		return $this->names;
	}

	/**
	 * @param string $names
	 */
	public function setNames($names)
	{
		$this->names = $names;
	}

	/**
	 * @return string
	 */
	public function getOriginalVersionId()
	{
		return $this->originalVersionId;
	}

	/**
	 * @param string $originalVersionId
	 */
	public function setOriginalVersionId($originalVersionId)
	{
		$this->originalVersionId = $originalVersionId;
	}

	/**
	 * @return string
	 */
	public function getPvs()
	{
		return $this->pvs;
	}

	/**
	 * @param string $pvs
	 */
	public function setPvs($pvs)
	{
		$this->pvs = $pvs;
	}

	/**
	 * @return string
	 */
	public function getPvServices()
	{
		return $this->pvServices;
	}

	/**
	 * @param string $pvServices
	 */
	public function setPvServices($pvServices)
	{
		$this->pvServices = $pvServices;
	}

	/**
	 * @return string
	 */
	public function getRatingScore()
	{
		return $this->ratingScore;
	}

	/**
	 * @param string $ratingScore
	 */
	public function setRatingScore($ratingScore)
	{
		$this->ratingScore = $ratingScore;
	}

	/**
	 * @return string
	 */
	public function getSongType()
	{
		return $this->songType;
	}

	/**
	 * @param string $songType
	 */
	public function setSongType($songType)
	{
		$this->songType = $songType;
	}

	/**
	 * @return string
	 */
	public function getStatus()
	{
		return $this->status;
	}

	/**
	 * @param string $status
	 */
	public function setStatus($status)
	{
		$this->status = $status;
	}

	/**
	 * @return string
	 */
	public function getTags()
	{
		return $this->tags;
	}

	/**
	 * @param string $tags
	 */
	public function setTags($tags)
	{
		$this->tags = $tags;
	}

	/**
	 * @return string
	 */
	public function getThumbUrl()
	{
		return $this->thumbUrl;
	}

	/**
	 * @param string $thumbUrl
	 */
	public function setThumbUrl($thumbUrl)
	{
		$this->thumbUrl = $thumbUrl;
	}

	/**
	 * @return int
	 */
	public function getVersion()
	{
		return $this->version;
	}

	/**
	 * @param int $version
	 */
	public function setVersion($version)
	{
		$this->version = $version;
	}

	/**
	 * @return string
	 */
	public function getWebLinks()
	{
		return $this->webLinks;
	}

	/**
	 * @param string $webLinks
	 */
	public function setWebLinks($webLinks)
	{
		$this->webLinks = $webLinks;
	}
}