<?php

namespace Pyz\Zed\AntelopeLocationDataImport\Business;

use Generated\Shared\Transfer\DataImporterConfigurationTransfer;
use Spryker\Zed\Kernel\Business\AbstractFacade;

/**
 * @method \Pyz\Zed\AntelopeLocationDataImport\Business\AntelopeLocationDataImportBusinessFactory getFactory()
 */
class AntelopeLocationDataImportFacade extends AbstractFacade implements AntelopeLocationDataImportFacadeInterface
{
    /**
     * @param \Generated\Shared\Transfer\DataImporterConfigurationTransfer|null $dataImporterConfigurationTransfer
     * @return \Spryker\Zed\DataImport\Business\Model\DataImporterInterface
     */
    public function importAntelopeLocation(?DataImporterConfigurationTransfer $dataImporterConfigurationTransfer = null)
    {
        return $this->getFactory()
            ->createAntelopeLocationDataImporter()
            ->import($dataImporterConfigurationTransfer);
    }
}
