<?php

namespace Pyz\Zed\Antelope\Business;

use Generated\Shared\Transfer\AntelopeLocationCriteriaTransfer;
use Generated\Shared\Transfer\AntelopeLocationResponseTransfer;
use Generated\Shared\Transfer\AntelopeLocationTransfer;
use Spryker\Zed\Kernel\Business\AbstractFacade;

/**
 * Class AntelopeFacade
 *
 * @method AntelopeBusinessFactory getFactory()
 */
class AntelopeFacade extends AbstractFacade implements AntelopeFacadeInterface
{
    /**
     * @param \Generated\Shared\Transfer\AntelopeLocationTransfer $antelopeLocationTransfer
     *
     * @return \Generated\Shared\Transfer\AntelopeLocationTransfer
     */
    public function createAntelopeLocation(AntelopeLocationTransfer $antelopeLocationTransfer): AntelopeLocationTransfer
    {
        return $this->getFactory()
            ->createAntelopeLocationWriter()
            ->createAntelopeLocation($antelopeLocationTransfer);
    }

    /**
     * @param \Generated\Shared\Transfer\AntelopeLocationCriteriaTransfer $criteriaTransfer
     *
     * @return \Generated\Shared\Transfer\AntelopeLocationResponseTransfer
     */
    public function getAntelopeLocations(AntelopeLocationCriteriaTransfer $criteriaTransfer): AntelopeLocationResponseTransfer
    {
        return $this->getFactory()
            ->createAntelopeLocationReader()
            ->getAntelopeLocations($criteriaTransfer);
    }
}
