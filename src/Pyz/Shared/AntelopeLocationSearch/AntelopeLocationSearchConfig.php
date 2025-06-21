<?php

namespace Pyz\Shared\AntelopeLocationSearch;

use Spryker\Shared\Kernel\AbstractBundleConfig;

class AntelopeLocationSearchConfig extends AbstractBundleConfig
{
    public const ANTELOPE_LOCATION_RESOURCE_NAME = 'antelope_location';
    public const ANTELOPE_LOCATION_SEARCH_QUEUE = 'sync.search.antelope_location';
    public const ANTELOPE_LOCATION_PUBLISH = 'AntelopeLocation.antelope_location.publish';
}
