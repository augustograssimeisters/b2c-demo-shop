<?php

namespace Pyz\Zed\Antelope\Business;

use Generated\Shared\Transfer\AntelopeTransfer;
use Generated\Shared\Transfer\AntelopeLocationTransfer;

interface AntelopeFacadeInterface
{
    /**
     * @param int $idAntelope
     * @return AntelopeTransfer|null
     */
    public function getAntelopeById(int $idAntelope): ?AntelopeTransfer;

    /**
     * @param AntelopeTransfer $antelopeTransfer
     * @return AntelopeTransfer
     */
    public function createAntelope(AntelopeTransfer $antelopeTransfer): AntelopeTransfer;

    /**
     * @param AntelopeLocationTransfer $transfer
     * @return AntelopeLocationTransfer
     */
    public function createLocation(AntelopeLocationTransfer $transfer): AntelopeLocationTransfer;

    /**
     * @param int $id
     * @return AntelopeLocationTransfer|null
     */
    public function findLocationById(int $id): ?AntelopeLocationTransfer;
}
