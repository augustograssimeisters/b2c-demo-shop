<?php

namespace Pyz\Zed\AntelopeLocationSearch\Communication\Facade;

use Generated\Shared\Transfer\AntelopeLocationCriteriaTransfer;

interface AntelopeLocationSearchFacadeInterface
{
    /**
     * @param AntelopeLocationCriteriaTransfer $criteria
     * @return void
     */
    public function publish(AntelopeLocationCriteriaTransfer $criteria): void;
}
