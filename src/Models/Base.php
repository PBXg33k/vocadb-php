<?php
namespace Pbxg33k\VocaDB\Models;

use Pbxg33k\VocaDB\Traits\CanConvertFromStdClass;

class Base
{
    use CanConvertFromStdClass;
    /**
     * Converts an object from the api to model(s) loaded in current context
     * 
     * @param object $response 
     * @return object Models extending Base
     */
    public function fromApi($response)
    {
        if(is_array($response)) {
            if(isset($response['items'])) {
                $response = $response['items'][0];
            }
        }

        $this->fromClass($response);
        return $this;
    }
}