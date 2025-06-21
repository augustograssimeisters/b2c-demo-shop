<?php

namespace Pyz\Zed\AntelopeLocationDataImport;

use Spryker\Zed\DataImport\DataImportDependencyProvider;
use Spryker\Zed\Kernel\Container;
use Pyz\Zed\AntelopeLocationDataImport\Dependency\Facade\AntelopeLocationDataImportToGracefulRunnerBridge;

class AntelopeLocationDataImportDependencyProvider extends DataImportDependencyProvider
{
    public const FACADE_PUBLISHER = 'FACADE_PUBLISHER';
    public const FACADE_GRACEFUL_RUNNER = 'FACADE_GRACEFUL_RUNNER';

    public function provideBusinessLayerDependencies(Container $container): Container
    {
        $container = parent::provideBusinessLayerDependencies($container);

        $container->set(static::FACADE_PUBLISHER, function (Container $container) {
            return $container->getLocator()->publisher()->facade();
        });

        $container->set(static::FACADE_GRACEFUL_RUNNER, function (Container $container) {
            return new AntelopeLocationDataImportToGracefulRunnerBridge(
                $container->getLocator()->gracefulRunner()->facade()
            );
        });

        return $container;
    }
}
