<?php

namespace Pyz\Zed\Antelope\Persistence;

use Generated\Shared\Transfer\AntelopeTransfer;
use Generated\Shared\Transfer\AntelopeLocationTransfer;
use Orm\Zed\Antelope\Persistence\PyzAntelopeLocation;
use Spryker\Zed\Kernel\Persistence\AbstractRepository;

/**
 * @method \Pyz\Zed\Antelope\Persistence\AntelopePersistenceFactory getFactory()
 */
class AntelopeRepository extends AbstractRepository implements AntelopeRepositoryInterface
{
    public function getAntelopeById(int $idAntelope): ?AntelopeTransfer
    {
        $entity = $this->getFactory()
            ->createAntelopeQuery()
            ->filterByIdAntelope($idAntelope)
            ->leftJoinWithAntelopeLocation()
            ->findOne();

        if (!$entity) {
            return null;
        }

        return $this->getFactory()
            ->createAntelopeMapper()
            ->mapEntityToTransfer($entity, new AntelopeTransfer());
    }

    public function findLocationById(int $idLocation): ?AntelopeLocationTransfer
    {
        $entity = $this->getFactory()
            ->createAntelopeLocationQuery()
            ->filterByIdLocation($idLocation)
            ->findOne();

        if (!$entity) {
            return null;
        }

        return $this->getFactory()
            ->createAntelopeMapper()
            ->mapLocationEntityToTransfer($entity, new AntelopeLocationTransfer());
    }
}
