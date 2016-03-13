<?php
namespace Pbxg33k\VocaDB\Models;

class ReleaseEvent extends Base
{
	/**
	 * 
	 * @var string
	 */
	protected $date;

	/**
	 * 
	 * @var string
	 */
	protected $description;

	/**
	 * 
	 * @var integer
	 */
	protected $id;

	/**
	 * 
	 * @var array
	 */
	protected $series;

	/**
	 * 
	 * @var integer
	 */
	protected $seriesNumber;

	/**
	 * 
	 * @var string
	 */
	protected $seriesSuffix;

	/**
	 * @return string
	 */
	public function getDate()
	{
		return $this->date;
	}

	/**
	 * @param string $date
	 * @return ReleaseEvent
	 */
	public function setDate($date)
	{
		$this->date = $date;
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
	 * @return ReleaseEvent
	 */
	public function setDescription($description)
	{
		$this->description = $description;
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
	 * @return ReleaseEvent
	 */
	public function setId($id)
	{
		$this->id = $id;
		return $this;
	}

	/**
	 * @return array
	 */
	public function getSeries()
	{
		return $this->series;
	}

	/**
	 * @param array $series
	 * @return array
	 */
	public function setSeries($series)
	{
		$this->series = $series;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getSeriesNumber()
	{
		return $this->seriesNumber;
	}

	/**
	 * @param int $seriesNumber
	 * @return ReleaseEvent
	 */
	public function setSeriesNumber($seriesNumber)
	{
		$this->seriesNumber = $seriesNumber;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getSeriesSuffix()
	{
		return $this->seriesSuffix;
	}

	/**
	 * @param string $seriesSuffix
	 * @return ReleaseEvent
	 */
	public function setSeriesSuffix($seriesSuffix)
	{
		$this->seriesSuffix = $seriesSuffix;
		return $this;
	}


}