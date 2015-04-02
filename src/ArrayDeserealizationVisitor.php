<?php
/**
 * Created by PhpStorm.
 * User: lemark
 * Date: 02.04.15
 * Time: 16:33
 */

namespace Arko\SerializerExtensions;

use JMS\Serializer\GenericDeserializationVisitor;

class ArrayDeserealizationVisitor extends GenericDeserializationVisitor {
    protected function decode($array)
    {
        return $array;
    }
}