<?php

namespace Pyz\Zed\AntelopeDataImport;

use Spryker\Zed\DataImport\DataImportDependencyProvider;
use Pyz\Zed\AntelopeDataImport\Communication\Plugin\DataImport\AntelopeDataImportPlugin;
use Spryker\Zed\BusinessOnBehalfDataImport\Communication\Plugin\DataImport\BusinessOnBehalfCompanyUserDataImportPlugin;
use Spryker\Zed\CategoryDataImport\Communication\Plugin\CategoryDataImportPlugin;
use Spryker\Zed\CategoryDataImport\Communication\Plugin\DataImport\CategoryStoreDataImportPlugin;

class AntelopeDataImportDependencyProvider extends DataImportDependencyProvider
{

    protected function getDataImporterPlugins(): array
    {
        return [

            new CmsSlotBlockDataImportPlugin(),
            new ContentNavigationDataImportPlugin(),
            new CategoryStoreDataImportPlugin(),
            new AntelopeDataImportPlugin(),
        ];
    }
}