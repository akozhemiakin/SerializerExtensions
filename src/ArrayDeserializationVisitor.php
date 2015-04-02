<?php
/**
 * (c) Artyom Kozhemyakin <xenus.t@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Arko\SerializerExtensions;

use JMS\Serializer\GenericDeserializationVisitor;

class ArrayDeserializationVisitor extends GenericDeserializationVisitor {
    protected function decode($array)
    {
        return $array;
    }
}