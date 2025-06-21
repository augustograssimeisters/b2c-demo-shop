<?php

namespace Pyz\Zed\AntelopeLocationSearch;

use Spryker\Zed\Kernel\AbstractBundleDependencyProvider;
use Spryker\Zed\Kernel\Container;
use Spryker\Zed\Synchronization\Communication\Plugin\Queue\SynchronizationSearchQueueMessageProcessorPlugin;

class AntelopeLocationSearchDependencyProvider extends AbstractBundleDependencyProvider
{
    public const QUEUE_MESSAGE_PROCESSOR_PLUGINS = 'QUEUE_MESSAGE_PROCESSOR_PLUGINS';

    public function provideCommunicationLayerDependencies(Container $container): Container
    {
        $container = parent::provideCommunicationLayerDependencies($container);

        $container->set(static::QUEUE_MESSAGE_PROCESSOR_PLUGINS, function () {
            return [
                RabbitMqConfig::QUEUE_SYNCHRONIZE => new SynchronizationSearchQueueMessageProcessorPlugin(),
            ];
        });

        return $container;
    }
}
