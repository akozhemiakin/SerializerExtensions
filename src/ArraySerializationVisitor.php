<?php
/**
 * Created by PhpStorm.
 * User: lemark
 * Date: 01.04.15
 * Time: 17:08
 */

namespace Arko\SerializerExtensions;


use JMS\Serializer\GenericSerializationVisitor;
use JMS\Serializer\scalar;

class ArraySerializationVisitor extends GenericSerializationVisitor {
    /**
     * @return object|array|scalar
     */
    public function getResult()
    {
        return $this->getRoot();
    }
}