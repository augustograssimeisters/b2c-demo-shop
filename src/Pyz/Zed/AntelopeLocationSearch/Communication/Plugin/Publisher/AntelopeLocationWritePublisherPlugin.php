<?php

namespace Pyz\Zed\AntelopeLocationSearch\Communication\Plugin\Publisher;

use Spryker\Zed\PublisherExtension\Dependency\Plugin\PublisherPluginInterface;
use Generated\Shared\Transfer\EventEntityTransfer;
use Generated\Shared\Transfer\AntelopeLocationCriteriaTransfer;
use Pyz\Zed\AntelopeLocationSearch\Shared\AntelopeLocationSearchConfig;

class AntelopeLocationWritePublisherPlugin implements PublisherPluginInterface
{
    public function handleBulk(array $eventEntityTransfers, $eventName): void
    {
        $criteria = new AntelopeLocationCriteriaTransfer();

        $this->getFacade()->publish($criteria);
    }

    public function getSubscribedEvents(): array
    {
        return [
            AntelopeLocationSearchConfig::EVENT_LOCATION_PUBLISH,
        ];
    }
}
