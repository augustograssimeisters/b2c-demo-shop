<?php

namespace Pyz\Zed\Antelope\Persistence;

use Generated\Shared\Transfer\AntelopeLocationTransfer;
use Orm\Zed\Antelope\Persistence\PyzAntelopeLocation;
use Spryker\Zed\Kernel\Persistence\AbstractEntityManager;

/**
 * @method \Pyz\Zed\Antelope\Persistence\AntelopePersistenceFactory getFactory()
 */
class AntelopeEntityManager extends AbstractEntityManager implements AntelopeEntityManagerInterface
{
    public function createLocation(AntelopeLocationTransfer $locationTransfer): AntelopeLocationTransfer
    {
        $entity = new PyzAntelopeLocation();
        $entity->fromArray($locationTransfer->toArray());
        $entity->save();

        return $locationTransfer->fromArray($entity->toArray(), true);
    }
}
