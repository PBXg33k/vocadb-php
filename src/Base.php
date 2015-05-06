<?php
namespace Pbxg33k\VocaDB;

class Base
{
	protected $client;

	public function __construct(Client $client)
	{
		$this->client = $client;
	}

	public function get($arguments = null, $single = false)
	{
		$full_class = explode('\\',get_called_class());
		$class = end($full_class);
		$model_class_name = sprintf('Pbxg33k\\VocaDB\\Models\\%s', $class);
		$model_collection_name = sprintf('Pbxg33k\\VocaDB\\Models\\Collections\\%sCollection', $class);
        
        $endpoint = $this->endpoint;
        if(is_numeric($arguments)) {
            $endpoint .= '/'.$arguments;
            $arguments = [];
            $single = true;
        }

		$response = $this->client->get($endpoint, $arguments);
		switch($response->getStatusCode()) {
			case 200:
				// $response_obj = $response->json();
				$response_obj = (array)json_decode($response->getBody());
                if($single) {
                    $collection = new $model_class_name();
                    $collection->fromApi($response_obj);
                }else{
                    $collection = new $model_collection_name();
                    if(count($response_obj['items'])) {
                        foreach($response_obj['items'] as $item) {
                            $obj = new $model_class_name();
                            $obj->fromApi($item);
                            $collection->add($obj);
                        }
                    } else {
                        throw new \Exception('No results');
                    }
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