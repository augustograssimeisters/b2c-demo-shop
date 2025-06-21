<?php

namespace Pyz\Zed\AntelopeLocationDataImport\Business\Model\Step;

use Spryker\Zed\DataImport\Business\Model\Step\WriterStepInterface;
use Pyz\Zed\AntelopeLocationDataImport\Business\AntelopeLocationDataImportFacadeInterface;

class AntelopeLocationWriterStep implements WriterStepInterface
{
    protected AntelopeLocationDataImportFacadeInterface $facade;

    public function __construct(AntelopeLocationDataImportFacadeInterface $facade)
    {
        $this->facade = $facade;
    }

    public function write(array $data): void
    {
        $ids = [];
        foreach ($data as $item) {
            if (isset($item['id'])) {
                $ids[] = $item['id'];
            }
        }

        $this->facade->publish($ids);
    }
}
