<?php

namespace Pyz\Zed\Antelope\Business;

use Generated\Shared\Transfer\AntelopeLocationCriteriaTransfer;
use Generated\Shared\Transfer\AntelopeLocationResponseTransfer;
use Generated\Shared\Transfer\AntelopeLocationTransfer;

interface AntelopeFacadeInterface
{
    /**
     * @param \Generated\Shared\Transfer\AntelopeLocationTransfer $antelopeLocationTransfer
     *
     * @return \Generated\Shared\Transfer\AntelopeLocationTransfer
     */
    public function createAntelopeLocation(AntelopeLocationTransfer $antelopeLocationTransfer): AntelopeLocationTransfer;

    /**
     * @param \Generated\Shared\Transfer\AntelopeLocationCriteriaTransfer $criteriaTransfer
     *
     * @return \Generated\Shared\Transfer\AntelopeLocationResponseTransfer
     */
    public function getAntelopeLocations(AntelopeLocationCriteriaTransfer $criteriaTransfer): AntelopeLocationResponseTransfer;
}
