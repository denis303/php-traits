<?php
/**
 * @author denis303 <dev@denis303.com>
 * @license MIT
 * @link http://denis303.com
 */
namespace denis303\traits;

use ReflectionObject;
use ReflectionProperty;

trait GetPublicPropertiesTrait
{

    public function getPublicProperties(array $return = [])
    {
        $reflectionProperties = (new ReflectionObject($this))->getProperties(ReflectionProperty::IS_PUBLIC);

        foreach($reflectionProperties as $reflectionProperty)
        {
            if ($reflectionProperty->isStatic())
            {
                continue;
            }

            $key = $reflectionProperty->name;

            $return[$key] = $this->$key; 
        }

        return $return;
    }

}