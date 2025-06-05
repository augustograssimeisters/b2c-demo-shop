<?php

namespace Pyz\Zed\Oms\Communication\Plugin\Command;

use Generated\Shared\Transfer\ItemTransfer;
use Spryker\Zed\Oms\Communication\Plugin\Command\AbstractCommandPlugin;

class ShipOrderCommand extends AbstractCommandPlugin
{
    /**
     * Lógica para tratar o envio do pedido.
     *
     * @param \Generated\Shared\Transfer\ItemTransfer $itemTransfer
     * @param array $config
     *
     * @return void
     */
    public function run(ItemTransfer $itemTransfer, array $config): void
    {
        $orderItemId = $itemTransfer->getIdSalesOrderItem() ?? 'desconhecido';
        $orderReference = $itemTransfer->getOrderReference() ?? 'desconhecido';

        echo sprintf("Pedido %s - Item %s: Envio confirmado.\n", $orderReference, $orderItemId);
    }
}
