<?php

namespace Pyz\Zed\AntelopeLocationDataImport\Business;

use Generated\Shared\Transfer\DataImporterConfigurationTransfer;

interface AntelopeLocationDataImportFacadeInterface
{
    public function importAntelopeLocation(?DataImporterConfigurationTransfer $dataImporterConfigurationTransfer = null);
}
