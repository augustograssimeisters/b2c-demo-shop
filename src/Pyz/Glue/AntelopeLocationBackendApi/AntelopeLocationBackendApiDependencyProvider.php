<?php

namespace Pyz\Glue\AntelopeLocationBackendApi;

use Pyz\Zed\AntelopeLocation\Business\AntelopeLocationFacadeInterface;
use Spryker\Glue\Kernel\Backend\AbstractDependencyProvider;
use Spryker\Glue\Kernel\Backend\Container;

class AntelopeLocationBackendApiDependencyProvider extends AbstractDependencyProvider
{
    public const FACADE_ANTELOPE_LOCATION = 'FACADE_ANTELOPE_LOCATION';

    public function provideBackendDependencies(Container $container): Container
    {
        $container[self::FACADE_ANTELOPE_LOCATION] = function (Container $container) {
            return $container->getLocator()->antelopeLocation()->facade();
        };

        return $container;
    }
}
