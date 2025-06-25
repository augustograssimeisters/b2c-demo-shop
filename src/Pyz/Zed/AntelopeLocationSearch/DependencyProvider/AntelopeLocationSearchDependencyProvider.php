<?php

namespace Pyz\Zed\AntelopeLocationSearch;

use Spryker\Zed\Kernel\AbstractBundleDependencyProvider;
use Spryker\Zed\Kernel\Container;
use Spryker\Zed\Search\Communication\Plugin\Queue\SynchronizationSearchQueueMessageProcessorPlugin;
use Pyz\Zed\AntelopeLocationSearch\Communication\Plugin\Publisher\AntelopeLocationWritePublisherPlugin;

class AntelopeLocationSearchDependencyProvider extends AbstractBundleDependencyProvider
{
    /**
     * @param Container $container
     * @return \Spryker\Zed\PublisherExtension\Dependency\Plugin\PublisherPluginInterface[]
     */
    public function getPublisherPlugins(Container $container): array
    {
        return [
            new AntelopeLocationWritePublisherPlugin(),
        ];
    }

    /**
     * @param Container $container
     * @return array<string, \Spryker\Zed\Kernel\Communication\AbstractPlugin>
     */
    public function getQueueMessageProcessorPlugins(Container $container): array
    {
        return [
            // Quando mensagens chegarem na queue de Search, usa este plugin
            \Pyz\Zed\AntelopeLocationSearch\Shared\AntelopeLocationSearchConfig::QUEUE_NAME
                => new SynchronizationSearchQueueMessageProcessorPlugin(),
        ];
    }
}
