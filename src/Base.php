<?php
namespace pbxg33k\VocaDB;

class Base
{
	protected $client;

	public function __construct(Client $client)
	{
		$this->client = $client;
	}

	public function get($uri = '', $arguments = null)
	{
		$full_class = explode('\\',get_called_class());
		$class = end($full_class);
		$model_class_name = sprintf('pbxg33k\\VocaDB\\Models\\%s', $class);
		$model_collection_name = sprintf('pbxg33k\\VocaDB\\Models\\Collections\\%sCollection', $class);

		$response = $this->client->get(sprintf("%s%s",$this->endpoint, $uri), $arguments);
		switch($response->getStatusCode()) {
			case 200:
				$collection = new $model_collection_name();
				$response_obj = $response->json();
				if(isset($response_obj['items']) && count($response_obj['items'])) {
					foreach($response_obj['items'] as $item) {
						$obj = new $model_class_name();
						$obj->fromApi($item);
						$collection->add($obj);
					}
				} elseif(is_array($response_obj)) {
					$obj = new $model_class_name();
					$obj->fromApi($response_obj);
					return $obj;
				} else {
					throw new \Exception('No results');
				}
				return $collection;
				break;
			default:
				throw new \Exception('HTTP ERROR OCCURED');
				break;
		}
	}

	public function getById($id)
	{
		return $this->get(sprintf('/%s',$id));
	}
}