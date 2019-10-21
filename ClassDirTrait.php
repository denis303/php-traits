<?php
/**
 * @author denis303 <dev@denis303.com>
 * @license MIT
 * @link http://denis303.com
 */
namespace denis303\traits;

use ReflectionClass;

trait GetClassDirTrait
{

    public static function classDir() : string
    {
        $className = get_called_class();

        $reflection = new ReflectionClass($className); 

        $filename = $reflection->getFileName();

        return pathinfo($filename, PATHINFO_DIRNAME);
    }

}