<?php

namespace Pyz\Zed\AntelopeLocationDataImport;

use Spryker\Zed\Kernel\AbstractBundleDependencyProvider;
use Spryker\Zed\Kernel\Container;
use Pyz\Zed\AntelopeLocationDataImport\Communication\Plugin\DataImport\AntelopeLocationDataImportPlugin;

class AntelopeLocationDataImportDependencyProvider extends AbstractBundleDependencyProvider
{
    public const DATA_IMPORT_PLUGINS = 'DATA_IMPORT_PLUGINS';

    /**
     * @param Container $container
     * @return Container
     */
    public function provideCommunicationLayerDependencies(Container $container): Container
    {
        $container->set(static::DATA_IMPORT_PLUGINS, function () {
            return [
                new AntelopeLocationDataImportPlugin(),
            ];
        });

        return $container;
    }
}
