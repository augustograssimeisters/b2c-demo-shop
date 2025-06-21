<?php

namespace Pyz\Zed\AntelopeLocationSearch\Business;

interface AntelopeLocationSearchFacadeInterface
{
    public function publish(array $antelopeLocationIds): void;
}
