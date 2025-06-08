<?php

namespace Pyz\Glue\AntelopeLocationBackendApi;

use Pyz\Glue\AntelopeLocationBackendApi\Processor\Reader\AntelopeLocationReader;
use Pyz\Glue\AntelopeLocationBackendApi\Processor\Reader\AntelopeLocationReaderInterface;
use Pyz\Glue\AntelopeLocationBackendApi\Processor\Writer\AntelopeLocationWriter;
use Pyz\Glue\AntelopeLocationBackendApi\Processor\Writer\AntelopeLocationWriterInterface;
use Pyz\Zed\AntelopeLocation\Business\AntelopeLocationFacadeInterface;
use Spryker\Glue\Kernel\Backend\AbstractFactory;

class AntelopeLocationBackendApiFactory extends AbstractFactory
{
    public function createAntelopeLocationReader(): AntelopeLocationReaderInterface
    {
        return new AntelopeLocationReader($this->getAntelopeLocationFacade());
    }

    public function createAntelopeLocationWriter(): AntelopeLocationWriterInterface
    {
        return new AntelopeLocationWriter($this->getAntelopeLocationFacade());
    }

    public function getAntelopeLocationFacade(): AntelopeLocationFacadeInterface
    {
        return $this->getProvidedDependency(AntelopeLocationBackendApiDependencyProvider::FACADE_ANTELOPE_LOCATION);
    }
}
