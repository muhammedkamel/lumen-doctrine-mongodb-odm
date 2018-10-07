<?php

namespace MuhammedKamel\Lumen\Doctrine\ODM\MongoDB\Infrastructure\Types;

use Doctrine\ODM\MongoDB\Types\Type;
use MuhammedKamel\Lumen\Doctrine\ODM\MongoDB\Domain\Model\DomainId;

/**
 * Class DomainIdType.
 *
 * @package MuhammedKamel\Lumen\Doctrine\ODM\MongoDB\Infrastructure\Types
 */
class DomainIdType extends Type
{

    /**
     * @inheritdoc
     */
    public function convertToDatabaseValue($value)
    {
        return $value instanceof DomainId ? $value->getValue() : $value;
    }

    /**
     * @inheritdoc
     */
    public function convertToPHPValue($value)
    {
        return new DomainId($value);
    }

    /**
     * @inheritdoc
     */
    public function closureToMongo()
    {
        return '$return = new \MuhammedKamel\Lumen\Doctrine\ODM\MongoDB\Domain\Model\DomainId($value);';
    }

    /**
     * @inheritdoc
     */
    public function closureToPHP()
    {
        return '$return = new \MuhammedKamel\Lumen\Doctrine\ODM\MongoDB\Domain\Model\DomainId($value);';
    }
}
