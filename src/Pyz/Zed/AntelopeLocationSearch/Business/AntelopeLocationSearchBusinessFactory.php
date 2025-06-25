<?php

namespace Pyz\Zed\AntelopeLocationSearch\Business;

use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;

class AntelopeLocationSearchBusinessFactory extends AbstractBusinessFactory
{
    public function createWriter(): Writer\AntelopeLocationSearchWriter
    {
        return new Writer\AntelopeLocationSearchWriter(
            $this->getRepository(),
            $this->getConfig()
        );
    }
}
