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

	/**
	 * @return string
	 */
	public function getAdditionalNames()
	{
		return $this->additionalNames;
	}

	/**
	 * @param string $additionalNames
	 * @return Album
	 */
	public function setAdditionalNames($additionalNames)
	{
		$this->additionalNames = $additionalNames;
		return $this;
	}

	/**
	 * @return Pbxg33k\VocaDB\Models\Collections\ArtistCollection
	 */
	public function getArtists()
	{
		return $this->artists;
	}

	/**
	 * @param Pbxg33k\VocaDB\Models\Collections\ArtistCollection $artists
	 * @return Album
	 */
	public function setArtists(ArtistCollection $artists)
	{
		$this->artists = $artists;
		return $this;
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
	 * @return Album
	 */
	public function setArtistString($artistString)
	{
		$this->artistString = $artistString;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getBarcode()
	{
		return $this->barcode;
	}

	/**
	 * @param string $barcode
	 * @return Album
	 */
	public function setBarcode($barcode)
	{
		$this->barcode = $barcode;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getCatalogNumber()
	{
		return $this->catalogNumber;
	}

	/**
	 * @param string $catalogNumber
	 * @return Album
	 */
	public function setCatalogNumber($catalogNumber)
	{
		$this->catalogNumber = $catalogNumber;
		return $this;
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
	 * @return Album
	 */
	public function setCreateDate($createDate)
	{
		$this->createDate = $createDate;
		return $this;
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
	 * @return Album
	 */
	public function setDefaultName($defaultName)
	{
		$this->defaultName = $defaultName;
		return $this;
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
	 * @return Album
	 */
	public function setDefaultNameLanguage($defaultNameLanguage)
	{
		$this->defaultNameLanguage = $defaultNameLanguage;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getDiscType()
	{
		return $this->discType;
	}

	/**
	 * @param string $discType
	 * @return Album
	 */
	public function setDiscType($discType)
	{
		$this->discType = $discType;
		return $this;
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
	 * @return Album
	 */
	public function setId($id)
	{
		$this->id = $id;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getIdentifiers()
	{
		return $this->identifiers;
	}

	/**
	 * @param string $identifiers
	 * @return Album
	 */
	public function setIdentifiers($identifiers)
	{
		$this->identifiers = $identifiers;
		return $this;
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
	 * @return Album
	 */
	public function setLocalizedName($localizedName)
	{
		$this->localizedName = $localizedName;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getMainPicture()
	{
		return $this->mainPicture;
	}

	/**
	 * @param string $mainPicture
	 * @return Album
	 */
	public function setMainPicture($mainPicture)
	{
		$this->mainPicture = $mainPicture;
		return $this;
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
	 * @return Album
	 */
	public function setMergedTo($mergedTo)
	{
		$this->mergedTo = $mergedTo;
		return $this;
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
	 * @return Album
	 */
	public function setName($name)
	{
		$this->name = $name;
		return $this;
	}

	/**
	 * @return array
	 */
	public function getNames()
	{
		return $this->names;
	}

	/**
	 * @param array $names
	 * @return Album
	 */
	public function setNames($names)
	{
		$this->names = $names;
		return $this;
	}

	/**
	 * @return array
	 */
	public function getPvs()
	{
		return $this->pvs;
	}

	/**
	 * @param array $pvs
	 * @return Album
	 */
	public function setPvs($pvs)
	{
		$this->pvs = $pvs;
		return $this;
	}

	/**
	 * @return float
	 */
	public function getRatingAverage()
	{
		return $this->ratingAverage;
	}

	/**
	 * @param float $ratingAverage
	 * @return Album
	 */
	public function setRatingAverage($ratingAverage)
	{
		$this->ratingAverage = $ratingAverage;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getRatingCount()
	{
		return $this->ratingCount;
	}

	/**
	 * @param int $ratingCount
	 * @return Album
	 */
	public function setRatingCount($ratingCount)
	{
		$this->ratingCount = $ratingCount;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getReleaseDate()
	{
		return $this->releaseDate;
	}

	/**
	 * @param string $releaseDate
	 * @return Album
	 */
	public function setReleaseDate($releaseDate)
	{
		$this->releaseDate = $releaseDate;
		return $this;
	}

	/**
	 * @return Pbxg33k\VocaDB\Models\ReleaseEvent
	 */
	public function getReleaseEvent()
	{
		return $this->releaseEvent;
	}

	/**
	 * @param Pbxg33k\VocaDB\Models\ReleaseEvent $releaseEvent
	 * @return Album
	 */
	public function setReleaseEvent(ReleaseEvent $releaseEvent)
	{
		$this->releaseEvent = $releaseEvent;
		return $this;
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
	 * @return Album
	 */
	public function setStatus($status)
	{
		$this->status = $status;
		return $this;
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
	 * @return Album
	 */
	public function setTags($tags)
	{
		$this->tags = $tags;
		return $this;
	}

	/**
	 * @return Pbxg33k\VocaDB\Models\Collections\TrackCollection
	 */
	public function getTracks()
	{
		return $this->tracks;
	}

	/**
	 * @param Pbxg33k\VocaDB\Models\Collections\TrackCollection $tracks
	 * @return Album
	 */
	public function setTracks(TrackCollection $tracks)
	{
		$this->tracks = $tracks;
		return $this;
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
	 * @return Album
	 */
	public function setVersion($version)
	{
		$this->version = $version;
		return $this;
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
	 * @return Album
	 */
	public function setWebLinks($webLinks)
	{
		$this->webLinks = $webLinks;
		return $this;
	}


}