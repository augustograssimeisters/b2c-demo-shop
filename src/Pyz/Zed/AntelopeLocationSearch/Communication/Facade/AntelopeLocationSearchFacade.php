<?php

namespace Pyz\Zed\AntelopeLocationSearch\Communication\Facade;

use Spryker\Zed\Kernel\Business\AbstractFacade;
use Generated\Shared\Transfer\AntelopeLocationCriteriaTransfer;

class AntelopeLocationSearchFacade extends AbstractFacade implements AntelopeLocationSearchFacadeInterface
{
    public function publish(AntelopeLocationCriteriaTransfer $criteria): void
    {
        $this->getFactory()
             ->createWriter()
             ->publish($criteria);
    }
}
