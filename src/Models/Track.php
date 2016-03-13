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

    /**
     * @return int
     */
    public function getDiscNumber()
    {
        return $this->discNumber;
    }

    /**
     * @param int $discNumber
     * @return Track
     */
    public function setDiscNumber($discNumber)
    {
        $this->discNumber = $discNumber;
        return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Track
     */
    public function setId($id)
    {
        $this->id = $id;
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
     * @return Track
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return Pbxg33k\VocaDB\Models\Song
     */
    public function getSong()
    {
        return $this->song;
    }

    /**
     * @param Pbxg33k\VocaDB\Models\Song $song
     * @return Track
     */
    public function setSong(Song $song)
    {
        $this->song = $song;
        return $this;
    }

    /**
     * @return int
     */
    public function getTrackNumber()
    {
        return $this->trackNumber;
    }

    /**
     * @param int $trackNumber
     * @return Track
     */
    public function setTrackNumber($trackNumber)
    {
        $this->trackNumber = $trackNumber;
        return $this;
    }

    /**
     * @return Pbxg33k\VocaDB\Models\Album
     */
    public function getAlbum()
    {
        return $this->album;
    }

    /**
     * @param Pbxg33k\VocaDB\Models\Album $album
     * @return Track
     */
    public function setAlbum(Album $album)
    {
        $this->album = $album;
        return $this;
    }


}