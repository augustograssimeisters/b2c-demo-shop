<?php

namespace Pyz\Zed\RabbitMq;

use Spryker\Zed\RabbitMq\RabbitMqConfig as SprykerRabbitMqConfig;

class RabbitMqConfig extends SprykerRabbitMqConfig
{
    public const QUEUE_SYNCHRONIZE = 'sync.antelope_location_search';

    /**
     * @return array<string>
     */
    public function getQueueNames(): array
    {
        return array_merge(parent::getQueueNames(), [
            self::QUEUE_SYNCHRONIZE,
        ]);
    }
}
