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

	public function convertFromStdClass($class)
	{
		$return = [];
		$class_name = $this->getSingleName();
		foreach($class as $c) {
			$single = new $class_name();
			$single->convertFromStdClass($c);
			$return[] = $single;
		}

		return $return;
	}

	private function getSingleName()
	{
		$full_class = explode('\\',get_called_class());
		$class = end($full_class);

		return sprintf('pbxg33k\\VocaDB\\Models\\%s', substr($class, 0, strlen($class) - strlen('Collection')));
	}
}