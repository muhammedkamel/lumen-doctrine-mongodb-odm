<?php namespace MuhammedKamel\Lumen\Doctrine\ODM\MongoDB\Infrastructure\Generators;

use Doctrine\ODM\MongoDB\DocumentManager;
use Doctrine\ODM\MongoDB\Id\AbstractIdGenerator;
use MuhammedKamel\Lumen\Doctrine\ODM\MongoDB\Domain\Model\ShortId;

/**
 * Class ShortIdGenerator.
 *
 * @package MuhammedKamel\Lumen\Doctrine\ODM\MongoDB\Infrastructure\Generators
 */
class ShortIdGenerator extends AbstractIdGenerator
{

    /**
     * Generates an identifier for a document.
     *
     * @param \Doctrine\ODM\MongoDB\DocumentManager $dm
     * @param object                                $document
     *
     * @return mixed
     */
    public function generate(DocumentManager $dm, $document)
    {
        return new ShortId();
    }
}
