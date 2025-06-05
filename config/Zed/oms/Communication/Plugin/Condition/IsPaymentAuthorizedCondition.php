<?php

namespace Pyz\Zed\Oms\Communication\Plugin\Condition;

use Generated\Shared\Transfer\ItemTransfer;
use Spryker\Zed\Oms\Communication\Plugin\Condition\AbstractConditionPlugin;

class IsPaymentAuthorizedCondition extends AbstractConditionPlugin
{
    /**
     * @param \Generated\Shared\Transfer\ItemTransfer $itemTransfer
     * @param array $config
     *
     * @return bool
     */
    public function run(ItemTransfer $itemTransfer, array $config): void
    {
        $orderTransfer = $itemTransfer->getOrder();

        if ($orderTransfer !== null) {
            if (method_exists($this->getFacade(), 'log')) {
                $this->getFacade()->log('Pedido #' . $orderTransfer->getIdSalesOrder() . ' marcado como enviado.');
            }
        }
    }
}
