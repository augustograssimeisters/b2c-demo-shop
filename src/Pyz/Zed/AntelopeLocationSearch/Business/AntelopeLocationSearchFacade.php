<?php

namespace Pyz\Zed\AntelopeLocationSearch\Business;

use Spryker\Zed\Kernel\Business\AbstractFacade;

class AntelopeLocationSearchFacade extends AbstractFacade implements AntelopeLocationSearchFacadeInterface
{
    public function publish(array $antelopeLocationIds): void
    {
        $this->getFactory()->createAntelopeLocationSearchWriter()->publish($antelopeLocationIds);
    }
}
