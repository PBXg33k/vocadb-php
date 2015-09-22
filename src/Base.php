<?php
namespace Pbxg33k\VocaDB;

class Base
{
	protected $client;

	public function __construct(Client $client)
	{
		$this->client = $client;
	}

	public function get($arguments = null)
	{
		$full_class = explode('\\',get_called_class());
		$class = end($full_class);
		$model_class_name = sprintf('Pbxg33k\\VocaDB\\Models\\%s', $class);
		$model_collection_name = sprintf('Pbxg33k\\VocaDB\\Models\\Collections\\%sCollection', $class);

		$response = $this->client->get($this->endpoint, $arguments);
		switch($response->getStatusCode()) {
			case 200:
				$collection = new $model_collection_name();
				$response_obj = $response->json();
				if(count($response_obj['items'])) {
					foreach($response_obj['items'] as $item) {
						$obj = new $model_class_name();
						$obj->fromApi($item);
						$collection->add($obj);
					}
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
}