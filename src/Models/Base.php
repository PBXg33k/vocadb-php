<?php
namespace Pbxg33k\VocaDB\Models;

use Pbxg33k\Traits\HydratableTrait;

class Base
{
    use HydratableTrait;
    /**
     * Converts an object from the api to model(s) loaded in current context
     * 
     * @param object $response 
     * @return Base Models extending Base
     */
    public function fromApi ($response)
    {
        if (is_array($response)) {
            if (isset($response['items'])) {
                $response = $response['items'][0];
            }
        }

        $this->hydrateClass($response);
        return $this;
    }
}