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
	 * @var Pbxg33k\VocaDB\ReleaseEventSeries
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
}