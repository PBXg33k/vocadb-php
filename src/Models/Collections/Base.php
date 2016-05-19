<?php
namespace Pbxg33k\VocaDB\Models\Collections;

class Base
{
	public $collection;

	public function __construct ()
	{
		$this->collection = [];
	}

	/**
	 * Add item to collection
	 * 
	 * @param \Pbxg33k\VocaDB\Models\Base $item
	 * @return Base
	 */
	public function add ($item)
	{
		$this->collection[] = $item;
		return $this;
	}

	/**
	 * Converts each item in collection into the proper class
	 *
	 * @param $class
	 * @return array
	 */
	public function convertFromStdClass ($class)
	{
		$return = [];
		$class_name = $this->getSingleName();
		foreach ($class as $c) {
			$single = new $class_name();
			$single->convertFromStdClass($c);
			$return[] = $single;
		}
		$this->collection = $return;
		return $return;
	}

	/**
	 * Gets the class name for single entity in collection
	 * @return string
	 */
	private function getSingleName ()
	{
		$full_class = explode('\\', get_called_class());
		$class = end($full_class);

		return sprintf('Pbxg33k\\VocaDB\\Models\\%s', substr($class, 0, strlen($class) - strlen('Collection')));
	}

	/**
	 * return first item
	 * @return mixed
	 * @throws Exception
	 */
	public function firstOrError ()
	{
		if (count($this->collection)) {
			return array_values($this->collection)[0];
		}

		/** @todo Replace with decent Exception */
		throw new Exception();
	}
}