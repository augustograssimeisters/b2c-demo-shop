<?php

declare(strict_types=1);

namespace Pyz\Glue\AntelopeLocationBackendApi\Plugin\Resource;

use Spryker\Glue\Kernel\AbstractPlugin;
use Spryker\Glue\GlueBackendApiApplication\Dependency\Plugin\ResourceInterface;

class AntelopeLocationResourcePlugin extends AbstractPlugin implements ResourceInterface
{
    public const RESOURCE_ANTELOPE_LOCATIONS = 'antelope-locations';

    public function getType(): string
    {
        return self::RESOURCE_ANTELOPE_LOCATIONS;
    }

    public function getController(): string
    {
        return 'antelope-location-resource';
    }

    public function getDeclaredMethods(): array
    {
        return [
            'GET' => ['getCollectionAction', 'getAction'],
            'POST' => 'postAction',
            'PUT' => 'putAction',
            'DELETE' => 'deleteAction',
        ];
    }
}
