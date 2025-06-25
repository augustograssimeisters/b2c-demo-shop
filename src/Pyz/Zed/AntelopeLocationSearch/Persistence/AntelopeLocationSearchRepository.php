<?php

namespace Pyz\Zed\AntelopeLocationSearch\Persistence;

use Generated\Shared\Transfer\AntelopeLocationCriteriaTransfer;

class AntelopeLocationSearchRepository implements AntelopeLocationSearchRepositoryInterface
{
    public function getAntelopeLocations(AntelopeLocationCriteriaTransfer $criteria): array
    {
        // TODO: implementar consulta ao Modelo AntelopeLocation via Propel
        return [];
    }
}
