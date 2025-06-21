<?php

namespace Pyz\Zed\AntelopeLocationSearch\Communication\Plugin\Publisher;

use Pyz\Shared\AntelopeLocationSearch\AntelopeLocationSearchConfig;
use Spryker\Zed\PublisherExtension\Dependency\Plugin\PublisherPluginInterface;
use Spryker\Zed\Kernel\Communication\AbstractPlugin;

/**
 * @method \Pyz\Zed\AntelopeLocationSearch\Business\AntelopeLocationSearchFacadeInterface getFacade()
 */
class AntelopeLocationWritePublisherPlugin extends AbstractPlugin implements PublisherPluginInterface
{
    public function getSubscribedEvents(): array
    {
        return [
            AntelopeLocationSearchConfig::ANTELOPE_LOCATION_PUBLISH,
        ];
    }

    public function handleBulk(array $eventEntityTransfers, $eventName): void
    {
        $ids = array_map(fn($event) => $event->getId(), $eventEntityTransfers);
        $this->getFacade()->publish($ids);
    }
}
