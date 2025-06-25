<?php

namespace Pyz\Zed\AntelopeLocationDataImport;

use Spryker\Zed\DataImport\Dependency\Plugin\DataImportPluginInterface;
use Pyz\Zed\AntelopeLocationDataImport\Communication\Plugin\DataImport\AntelopeLocationDataImportPlugin;
use Spryker\Zed\Kernel\AbstractBundleDependencyProvider;
use Spryker\Zed\Kernel\Container;

class AntelopeLocationDataImportDependencyProvider extends AbstractBundleDependencyProvider
{
    /**
     * @return array<DataImportPluginInterface>
     */
    public function getDataImportPlugins(): array
    {
        return [
            new AntelopeLocationDataImportPlugin(),
        ];
    }
}
