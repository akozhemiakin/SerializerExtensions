<?php
/**
 * (c) Artyom Kozhemyakin <xenus.t@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
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