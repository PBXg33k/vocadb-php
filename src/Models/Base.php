<?php
namespace pbxg33k\VocaDB\Models;

class Base 
{
    /**
     * Converts a stdClass to models loaded in current context
     * @param  object $class class
     * @return object Models extending Base (and \Phalcon\Mvc\Model)
     */
    public function convertFromStdClass($class)
    {
        // Use PHP's own reflection to get the model's public properties
        $reflection = new \ReflectionClass($this);
        $properties = $reflection->getProperties(\ReflectionProperty::IS_PUBLIC);

        // Iterate through all public properties
        foreach ($properties as $property) {
            $property_name = $property->name;
            
            if(is_object($class)) {
            	$class_property_name = @$class->$property_name;
            } elseif(is_array($class)) {
            	$class_property_name = @$class[$property_name];
            }

            // Check if the current property if provided in the request payload
            if (isset($class_property_name)) {
                // Use the DocBlock to determine what Object we need to assign
                if ($dummy_class = $this->getClassFromDocComment($property->getDocComment())) {
                    // Check if it's a class or not
                    if (in_array(strtolower(trim($dummy_class)), $this->nonObjectTypes)) {
                        // var_dump($dummy_class, $property_name, $class, $this);
                        $this->$property_name = $class_property_name;
                    } else {
                        // Check if the class exist
                        if (class_exists($dummy_class)) {
                            if (!is_null($class_property_name) && is_numeric($class_property_name)) {
                                // Property value is an numerical value, try to use it as identifier and lookup the record in the database
                                $this->$property_name = $dummy_class::findFirst($class_property_name);
                            } else {
                                $obj = new $dummy_class();
                                $obj->convertFromStdClass($class_property_name);
                                // We're done. Assign the result to the propery of $this
                                $this->$property_name = $obj;
                                unset($obj);
                            }
                        }
                    }
                } else {
                    $this->$property_name = $class_property_name;
                }
            }
        }

        return $this;
    }

    /**
     * Tries to get the correct class name from the given docBlock for Reflection
     * @param string $comment the docblock
     * @return string|bool Classname if found match, else false
     */
    private function getClassFromDocComment($comment)
    {
        // Note: The author loves regex
        if (preg_match('~\@var[\s]+([A-Za-z0-9\\\\]+)~', $comment, $matches)) {
            return $matches[1];
        }

        return false;
    }
}