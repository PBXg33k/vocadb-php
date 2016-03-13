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

	/**
	 * @return string
	 */
	public function getAdditionalNames()
	{
		return $this->additionalNames;
	}

	/**
	 * @param string $additionalNames
	 * @return Artist
	 */
	public function setAdditionalNames($additionalNames)
	{
		$this->additionalNames = $additionalNames;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getArtistType()
	{
		return $this->artistType;
	}

	/**
	 * @param string $artistType
	 * @return Artist
	 */
	public function setArtistType($artistType)
	{
		$this->artistType = $artistType;
		return $this;
	}

	/**
	 * @return Pbxg33k\VocaDB\Models\Artist
	 */
	public function getBaseVoicebank()
	{
		return $this->baseVoicebank;
	}

	/**
	 * @param Pbxg33k\VocaDB\Models\Artist $baseVoicebank
	 * @return Artist
	 */
	public function setBaseVoicebank(Artist $baseVoicebank)
	{
		$this->baseVoicebank = $baseVoicebank;
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
	 * @return Artist
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
	 * @return Artist
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
	 * @return Artist
	 */
	public function setDefaultNameLanguage($defaultNameLanguage)
	{
		$this->defaultNameLanguage = $defaultNameLanguage;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getDescription()
	{
		return $this->description;
	}

	/**
	 * @param string $description
	 * @return Artist
	 */
	public function setDescription($description)
	{
		$this->description = $description;
		return $this;
	}

	/**
	 * @return Pbxg33k\VocaDB\Models\Collections\ArtistCollection
	 */
	public function getGroups()
	{
		return $this->groups;
	}

	/**
	 * @param Pbxg33k\VocaDB\Models\Collections\ArtistCollection $groups
	 * @return Artist
	 */
	public function setGroups(ArtistCollection $groups)
	{
		$this->groups = $groups;
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
	 * @return Artist
	 */
	public function setId($id)
	{
		$this->id = $id;
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
	 * @return Artist
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
	 * @return Artist
	 */
	public function setMainPicture($mainPicture)
	{
		$this->mainPicture = $mainPicture;
		return $this;
	}

	/**
	 * @return Pbxg33k\VocaDB\Models\Collections\ArtistCollection
	 */
	public function getMembers()
	{
		return $this->members;
	}

	/**
	 * @param Pbxg33k\VocaDB\Models\Collections\ArtistCollection $members
	 * @return Artist
	 */
	public function setMembers(ArtistCollection $members)
	{
		$this->members = $members;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getMergedTo()
	{
		return $this->mergedTo;
	}

	/**
	 * @param int $mergedTo
	 * @return Artist
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
	 * @return Artist
	 */
	public function setName($name)
	{
		$this->name = $name;
		return $this;
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
	 * @return Artist
	 */
	public function setNames($names)
	{
		$this->names = $names;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getPictureMime()
	{
		return $this->pictureMime;
	}

	/**
	 * @param string $pictureMime
	 * @return Artist
	 */
	public function setPictureMime($pictureMime)
	{
		$this->pictureMime = $pictureMime;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getRelations()
	{
		return $this->relations;
	}

	/**
	 * @param string $relations
	 * @return Artist
	 */
	public function setRelations($relations)
	{
		$this->relations = $relations;
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
	 * @return Artist
	 */
	public function setStatus($status)
	{
		$this->status = $status;
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
	 * @return Artist
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
	 * @return Artist
	 */
	public function setWebLinks($webLinks)
	{
		$this->webLinks = $webLinks;
		return $this;
	}


}