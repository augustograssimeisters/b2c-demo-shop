<?php

namespace Pyz\Zed\Antelope\Communication;

use Pyz\Zed\Antelope\Business\AntelopeFacadeInterface;
use Spryker\Zed\Kernel\Communication\AbstractCommunicationFactory;
use Pyz\Zed\Antelope\Persistence\AntelopeRepositoryInterface;
use Pyz\Zed\Antelope\Persistence\AntelopeEntityManagerInterface;
use Pyz\Zed\Antelope\Business\AntelopeBusinessFactory;

/**
 * Class AntelopeCommunicationFactory
 *
 * @method AntelopeFacadeInterface getFacade()
 * @method AntelopeRepositoryInterface getRepository()
 * @method AntelopeEntityManagerInterface getEntityManager()
 * @method AntelopeBusinessFactory getFactory()
 */
class AntelopeCommunicationFactory extends AbstractCommunicationFactory
{
    /**
     * @return \Pyz\Zed\Antelope\Business\AntelopeLocationReaderInterface
     */
    public function getAntelopeLocationReader()
    {
        return $this->getFactory()->createAntelopeLocationReader();
    }

    /**
     * @return \Pyz\Zed\Antelope\Business\AntelopeLocationWriterInterface
     */
    public function getAntelopeLocationWriter()
    {
        return $this->getFactory()->createAntelopeLocationWriter();
    }
}
