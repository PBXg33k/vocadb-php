<?php
namespace Pbxg33k\VocaDB;

/**
 * Class Base
 * @package Pbxg33k\VocaDB
 */
class Base
{
    /**
     * @var Client
     */
    protected $client;

    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var string
     */
    public $fields;

    /**
     * Base constructor.
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * @param null|array $arguments
     * @return mixed
     * @throws \Exception
     */
    public function getComplete($arguments = null)
    {
        return $this->get(array_merge((array)$arguments, ['fields' => implode(',', $this->fields)]));
    }

    /**
     * @param mixed $arguments
     * @return mixed
     * @throws \Exception
     */
    public function get($arguments = null)
    {
        $full_class = explode('\\',get_called_class());
        $class = end($full_class);
        $model_class_name = sprintf('Pbxg33k\\VocaDB\\Models\\%s', $class);
        $model_collection_name = sprintf('Pbxg33k\\VocaDB\\Models\\Collections\\%sCollection', $class);

        $response = $this->client->get($this->endpoint, $arguments);
        switch($response->getStatusCode()) {
            case 200:
                $response_obj = (array)json_decode($response->getBody());
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

                return $collection;
            default:
                throw new \Exception('HTTP ERROR OCCURED');
        }
    }

    /**
     * @param $id
     * @param null|array $arguments
     * @return mixed
     * @throws \Exception
     */
    public function singleComplete($id, $arguments = null)
    {
        return $this->single($id, array_merge((array)$arguments, ['fields' => implode(',', $this->fields)]));
    }

    /**
     * @param $id
     * @param null|array $arguments
     * @return mixed
     * @throws \Exception
     */
    public function single($id, $arguments = null)
    {
        $full_class = explode('\\',get_called_class());
        $class = end($full_class);
        $model_class_name = sprintf('Pbxg33k\\VocaDB\\Models\\%s', $class);

        $endpoint = $this->endpoint.'/'.$id;

        $response = $this->client->get($endpoint, $arguments);
        switch($response->getStatusCode()) {
            case 200:
                $response_obj = (array)json_decode($response->getBody());
                $collection = new $model_class_name();
                $collection->fromApi($response_obj);
                return $collection;
            default:
                throw new \Exception('HTTP ERROR OCCURED');
        }
    }

    /**
     * @param integer $id
     * @return integer
     * @throws \Exception
     */
    public function getById($id)
    {
        return $this->get(sprintf('/%d',$id));
    }

    /**
     * @param mixed $name
     * @return mixed
     * @throws \Exception
     */
    public function getByName($name)
    {
        return $this->get(['query' => $name]);
    }
}