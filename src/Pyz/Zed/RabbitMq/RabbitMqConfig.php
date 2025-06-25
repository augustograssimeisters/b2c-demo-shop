<?php

namespace Pyz\Zed\RabbitMq;

use Spryker\Zed\RabbitMq\RabbitMqConfig as SprykerRabbitMqConfig;
use Pyz\Zed\AntelopeLocationSearch\Shared\AntelopeLocationSearchConfig;

class RabbitMqConfig extends SprykerRabbitMqConfig
{
    /**
     * @return array<string, string>
     */
    public function getQueueNameByQueueName(): array
    {
        return [
            // fila já existente do Search
            AntelopeLocationSearchConfig::QUEUE_NAME => AntelopeLocationSearchConfig::QUEUE_NAME,
            // aqui você pode mapear nome de queue para nome real
        ];
    }

    /**
     * @return array<string, string>
     */
    public function getSynchronizationQueueName(): array
    {
        return [
            // fila de sincronização para Search
            AntelopeLocationSearchConfig::QUEUE_NAME => AntelopeLocationSearchConfig::QUEUE_NAME,
        ];
    }

    /**
     * @return array<string, string>
     */
    public function getQueueConsumers(): array
    {
        return [
            // mapeia queue name => consumidor (plugin) que processa as mensagens
            AntelopeLocationSearchConfig::QUEUE_NAME => \Spryker\Zed\Search\Communication\Plugin\Queue\SynchronizationSearchQueueMessageProcessorPlugin::class,
        ];
    }
}
