<?php

namespace Pyz\Zed\AntelopeLocationSearch\Business\Writer;

use Pyz\Zed\AntelopeLocationSearch\Persistence\AntelopeLocationSearchRepositoryInterface;
use Pyz\Zed\AntelopeLocationSearch\Shared\AntelopeLocationSearchConfig;
use Generated\Shared\Transfer\AntelopeLocationCriteriaTransfer;

class AntelopeLocationSearchWriter
{
    protected AntelopeLocationSearchRepositoryInterface $repository;
    protected AntelopeLocationSearchConfig $config;

    public function __construct(
        AntelopeLocationSearchRepositoryInterface $repository,
        AntelopeLocationSearchConfig $config
    ) {
        $this->repository = $repository;
        $this->config = $config;
    }

    public function publish(AntelopeLocationCriteriaTransfer $criteria): void
    {
        $locations = $this->repository->getAntelopeLocations($criteria);
        foreach ($locations as $loc) {
            // TODO: denormalizar e persistir em pyz_antelope_location_search
        }
    }
}
