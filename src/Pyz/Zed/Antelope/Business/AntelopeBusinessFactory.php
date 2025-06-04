<?php

namespace Pyz\Zed\Antelope\Business;

use Pyz\Zed\Antelope\Business\Antelope\AntelopeReader;
use Pyz\Zed\Antelope\Business\Antelope\AntelopeWriter;
use Pyz\Zed\Antelope\Business\AntelopeLocation\Reader\AntelopeLocationReader;
use Pyz\Zed\Antelope\Business\AntelopeLocation\Writer\AntelopeLocationWriter;
use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;

class AntelopeBusinessFactory extends AbstractBusinessFactory
{
    /**
     * @return \Pyz\Zed\Antelope\Business\Antelope\AntelopeReader
     */
    public function createAntelopeReader(): AntelopeReader
    {
        return new AntelopeReader(
            $this->getRepository()
        );
    }

    /**
     * @return \Pyz\Zed\Antelope\Business\Antelope\AntelopeWriter
     */
    public function createAntelopeWriter(): AntelopeWriter
    {
        return new AntelopeWriter(
            $this->getEntityManager()
        );
    }

    /**
     * @return \Pyz\Zed\Antelope\Business\AntelopeLocation\Writer\AntelopeLocationWriter
     */
    public function createAntelopeLocationWriter(): AntelopeLocationWriter
    {
        return new AntelopeLocationWriter(
            $this->getEntityManager()
        );
    }

    /**
     * @return \Pyz\Zed\Antelope\Business\AntelopeLocation\Reader\AntelopeLocationReader
     */
    public function createAntelopeLocationReader(): AntelopeLocationReader
    {
        return new AntelopeLocationReader(
            $this->getRepository()
        );
    }
}
