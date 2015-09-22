<?php
namespace Pbxg33k\VocaDB\Models;

class ReleaseEvent extends Base
{
	/**
	 * 
	 * @var string
	 */
	public $date;

	/**
	 * 
	 * @var string
	 */
	public $description;

	/**
	 * 
	 * @var integer
	 */
	public $id;

	/**
	 * 
	 * @var Pbxg33k\VocaDB\ReleaseEventSeries
	 */
	public $series;

	/**
	 * 
	 * @var integer
	 */
	public $seriesNumber;

	/**
	 * 
	 * @var string
	 */
	public $seriesSuffix;
}