<?php

namespace Pyz\Zed\AntelopeLocationDataImport\Business\Writer;

use Generated\Shared\Transfer\AntelopeLocationTransfer;
use Generated\Shared\Transfer\DataImporterConfigurationTransfer;
use Generated\Shared\Transfer\DataImporterReaderConfigurationTransfer;
use Generated\Shared\Transfer\DataImporterWriterConfigurationTransfer;
use Spryker\Zed\DataImport\Business\Model\DataImportStep\DataImportWriterStepInterface;
use Spryker\Zed\EventBehavior\Business\EventBehaviorFacadeInterface;
use Spryker\Zed\Publisher\Business\PublisherFacadeInterface;
use Pyz\Zed\AntelopeLocationSearch\Shared\AntelopeLocationSearchConfig;

/**
 * Estende o step de escrita para disparar o evento de publish
 */
class AntelopeLocationDataImportWriterStep implements DataImportWriterStepInterface
{
    /**
     * @var \Spryker\Zed\DataImport\Business\Model\DataImportStep\DataImportWriterStepInterface
     */
    protected $writerStep;

    /**
     * @var \Spryker\Zed\Publisher\Business\PublisherFacadeInterface
     */
    protected $publisherFacade;

    /**
     * @param DataImportWriterStepInterface $writerStep
     * @param PublisherFacadeInterface      $publisherFacade
     */
    public function __construct(
        DataImportWriterStepInterface $writerStep,
        PublisherFacadeInterface $publisherFacade
    ) {
        $this->writerStep = $writerStep;
        $this->publisherFacade = $publisherFacade;
    }

    /**
     * @param array<string, mixed> $itemData
     * @param \Generated\Shared\Transfer\DataImporterConfigurationTransfer $configuration
     *
     * @return void
     */
    public function write(array $itemData, DataImporterConfigurationTransfer $configuration): void
    {
        $this->writerStep->write($itemData, $configuration);

        $criteriaTransfer = (new \Generated\Shared\Transfer\AntelopeLocationCriteriaTransfer())
            ->addIdAntelopeLocation($itemData['id_antelope_location']);

        $this->publisherFacade->publish($criteriaTransfer, AntelopeLocationSearchConfig::EVENT_LOCATION_PUBLISH);
    }
}
