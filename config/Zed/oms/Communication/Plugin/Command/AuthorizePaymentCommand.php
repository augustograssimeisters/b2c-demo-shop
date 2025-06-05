<?php

namespace Pyz\Zed\Oms\Communication\Plugin\Command;
use Generated\Shared\Transfer\ItemTransfer;
use Spryker\Zed\Oms\Communication\Plugin\Command\AbstractCommandPlugin;

class AuthorizePaymentCommand extends AbstractCommandPlugin
{
    /**
     * Simula a autorização do pagamento.
     *
     * @param \Generated\Shared\Transfer\ItemTransfer $itemTransfer
     * @param array $config
     *
     * @return void
     */
    public function run(ItemTransfer $itemTransfer, array $config): void
    {

        $orderTransfer = $itemTransfer->getOrder();
        if ($orderTransfer !== null && $orderTransfer->getPayment() !== null) {
            $orderTransfer->getPayment()->setIsAuthorized(true);

        }
    }
}
