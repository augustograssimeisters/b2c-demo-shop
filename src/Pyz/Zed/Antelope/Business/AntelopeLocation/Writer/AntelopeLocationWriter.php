<?php

namespace Pyz\Zed\Antelope\Business\AntelopeLocation\Writer;

use Generated\Shared\Transfer\AntelopeLocationTransfer;
use Pyz\Zed\Antelope\Persistence\AntelopeEntityManagerInterface;

class AntelopeLocationWriter
{
    protected AntelopeEntityManagerInterface $entityManager;

    public function __construct(AntelopeEntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function createLocation(AntelopeLocationTransfer $transfer): AntelopeLocationTransfer
    {
        return $this->entityManager->createLocation($transfer);
    }
}
