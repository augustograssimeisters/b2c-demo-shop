<?php

namespace Pyz\Zed\AntelopeLocationDataImport\Business\Model;

use Orm\Zed\AntelopeLocation\Persistence\PyzAntelopeLocation;
use Spryker\Zed\DataImport\Business\Model\DataSet\DataSetInterface;
use Spryker\Zed\DataImport\Business\Model\DataSet\Step\DataImportStepInterface;

class AntelopeLocationWriterStep implements DataImportStepInterface
{
    public function execute(DataSetInterface $dataSet): void
    {
        $entity = new PyzAntelopeLocation();
        $entity->setName($dataSet['name']);
        $entity->setColor($dataSet['color']);
        $entity->setLocation($dataSet['location']);
        $entity->save();
    }
}
