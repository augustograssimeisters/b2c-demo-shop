<?php

namespace Pyz\Zed\AntelopeLocationDataImport\Business\DataImportStep;

use Orm\Zed\AntelopeLocation\Persistence\PyzAntelopeLocationQuery;
use Pyz\Zed\AntelopeLocationDataImport\Business\DataSet\AntelopeLocationDataSetInterface;
use Spryker\Zed\DataImport\Business\Model\DataImportStep\DataImportStepInterface;
use Spryker\Zed\DataImport\Business\Model\DataSet\DataSetInterface;

class AntelopeLocationWriterStep implements DataImportStepInterface
{
    public function execute(DataSetInterface $dataSet): void
    {
        $locationEntity = PyzAntelopeLocationQuery::create()
            ->filterByName($dataSet[AntelopeLocationDataSetInterface::COLUMN_NAME])
            ->findOneOrCreate();

        $locationEntity->setLatitude($dataSet[AntelopeLocationDataSetInterface::COLUMN_LATITUDE]);
        $locationEntity->setLongitude($dataSet[AntelopeLocationDataSetInterface::COLUMN_LONGITUDE]);

        if ($locationEntity->isNew() || $locationEntity->isModified()) {
            $locationEntity->save();
        }
    }
}
