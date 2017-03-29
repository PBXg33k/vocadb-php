<?php
namespace Pbxg33k\VocaDB;

/**
 * Class Base
 * @package Pbxg33k\VocaDB
 */
class Base
{
    /**
     * The API Client
     *
     * @var Client
     */
    protected $client;

    /**
     * The service endpoint
     *
     * @var string
     */
    public $endpoint;

    /**
     * Available fields for the endpoint
     *
     * @var string
     */
    public $fields;

    /**
     * Base constructor.
     *
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * Get result as a complete object
     *
     * @param null|array $arguments
     * 
     * @return mixed
     *
     * @throws \Exception
     */
    public function getComplete($arguments = null)
    {
        return $this->get(array_merge((array)$arguments, ['fields' => implode(',', $this->fields)]));
    }

    /**
     * Get result as simple object
     *
     * @param mixed $arguments
     *
     * @return mixed
     *
     * @throws \Exception if there are no results
     * @throws \Exception if an HTTP Error occured
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
                    /** @todo Replace with decent Exception */
                    throw new \Exception('No results');
                }

                return $collection;
            default:
                /** @todo Replace with decent Exception */
                throw new \Exception('HTTP ERROR OCCURED');
        }
    }

    /**
     * Get single result as complete object
     *
     * @param $id
     * @param null|array $arguments
     *
     * @return mixed
     *
     * @throws \Exception
     */
    public function singleComplete($id, $arguments = null)
    {
        return $this->single($id, array_merge((array)$arguments, ['fields' => implode(',', $this->fields)]));
    }

    /**
     * Get single result
     *
     * @param $id
     * @param null|array $arguments
     *
     * @return mixed
     *
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
                /** @todo Replace with decent Exception */
                throw new \Exception('HTTP ERROR OCCURED');
        }
    }

    /**
     * Get result by id
     *
     * @param integer $id
     * @param bool    $complete
     *
     * @return integer
     *
     * @throws \Exception
     */
    public function getById($id, $complete = false)
    {
        return ($complete === true) ? $this->getComplete(sprintf('/%d', $id)) : $this->get(sprintf('/%d',$id));
    }

    /**
     * Get result by name
     *
     * @param mixed $name
     * @param bool  $complete
     *
     * @return mixed
     *
     * @throws \Exception
     */
    public function getByName($name, $complete = false)
    {
        return ($complete === true) ? $this->getComplete(['query' => $name]) : $this->get(['query' => $name]);
    }
}