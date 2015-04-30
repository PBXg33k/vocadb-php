<?php
namespace pbxg33k\VocaDB\Models\Collections;

class Base
{
	public $collection;

	public function __construct()
	{
		$this->collection = [];
	}

	/**
	 * Add item to collection
	 * 
	 * @param pbxg33k\VocaDB\Models\Base $item 
	 * @return pbxg33k\VocaDB\Models\Collection\Base
	 */
	public function add($item)
	{
		$this->collection[] = $item;
		return $this;
	}
	
}