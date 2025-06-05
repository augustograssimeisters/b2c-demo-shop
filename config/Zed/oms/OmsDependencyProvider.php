<?php

namespace Pyz\Zed\Oms;

use Pyz\Zed\Oms\Communication\Plugin\Condition\IsPaymentAuthorizedCondition;
use Pyz\Zed\Oms\Communication\Plugin\Command\AuthorizePaymentCommand;
use Pyz\Zed\Oms\Communication\Plugin\Command\ShipOrderCommand;
use Spryker\Zed\Kernel\Container;
use Spryker\Zed\Oms\OmsDependencyProvider as SprykerOmsDependencyProvider;

class OmsDependencyProvider extends SprykerOmsDependencyProvider
{
    /**
     * @return array
     */
    public function getOmsConditionPlugins(): array
    {
        return [
            'Oms/IsPaymentAuthorized' => new IsPaymentAuthorizedCondition(),
        ];
    }

    /**
     * @return array
     */
    public function getOmsCommandPlugins(): array
    {
        return [
            'Oms/AuthorizePayment' => new AuthorizePaymentCommand(),
            'Oms/ShipOrder' => new ShipOrderCommand(),
        ];
    }
}
