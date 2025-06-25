<?php

namespace Pyz\Zed\AntelopeLocationDataImport\Business;

use Generated\Shared\Transfer\DataImporterConfigurationTransfer;
use Pyz\Zed\AntelopeLocationDataImport\AntelopeLocationDataImportConfig;
use Pyz\Zed\AntelopeLocationDataImport\Business\Model\AntelopeLocationWriterStep;
use Spryker\Zed\DataImport\Business\Model\DataImporter;
use Spryker\Zed\DataImport\Business\Model\DataImporterInterface;
use Spryker\Zed\DataImport\Business\Model\DataSet\StepBrokerInterface;
use Spryker\Zed\DataImport\Business\Model\DataSet\StepBroker;
use Spryker\Zed\DataImport\Business\Model\Csv\CsvReaderConfiguration;
use Spryker\Zed\DataImport\Business\Model\Csv\CsvDataImporter;
use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;

class AntelopeLocationDataImportBusinessFactory extends AbstractBusinessFactory
{
    /**
     * @return \Spryker\Zed\DataImport\Business\Model\DataImporterInterface
     */
    public function createAntelopeLocationDataImporter(): DataImporterInterface
    {
        $dataImporter = new CsvDataImporter(
            AntelopeLocationDataImportConfig::IMPORT_TYPE_ANTELOPE_LOCATION,
            $this->getCsvReaderConfiguration()
        );

        $dataSetStepBroker = $this->createTransactionAwareDataSetStepBroker();
        $dataSetStepBroker->addStep(new AntelopeLocationWriterStep());

        $dataImporter->addDataSetStepBroker($dataSetStepBroker);

        return $dataImporter;
    }

    /**
     * @return \Spryker\Zed\DataImport\Business\Model\DataSet\StepBrokerInterface
     */
    protected function createTransactionAwareDataSetStepBroker(): StepBrokerInterface
    {
        return new StepBroker();
    }

    /**
     * @return \Spryker\Zed\DataImport\Business\Model\Csv\CsvReaderConfiguration
     */
    protected function getCsvReaderConfiguration(): CsvReaderConfiguration
    {
        $readerConfiguration = new CsvReaderConfiguration();
        $readerConfiguration->setFileName(
            $this->getConfig()->getAntelopeLocationImportFilePath()
        );
        $readerConfiguration->setDelimiter(',');

        return $readerConfiguration;
    }
}
