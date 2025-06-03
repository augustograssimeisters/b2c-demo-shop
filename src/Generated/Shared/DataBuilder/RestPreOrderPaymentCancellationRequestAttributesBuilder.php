<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\DataBuilder;

use Exception;
use Generated\Shared\Transfer\RestPreOrderPaymentCancellationRequestAttributesTransfer;
use Spryker\Shared\Testify\AbstractDataBuilder;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class RestPreOrderPaymentCancellationRequestAttributesBuilder extends AbstractDataBuilder
{
    /**
     * @var \Faker\Generator
     */
    protected static $faker;

    /**
     * @var array<string, string>
     */
    protected $defaultRules = [
    ];

    /**
     * @var array<string, string>
     */
    protected $dependencies = [
        'payment' => 'RestPayment',
    ];

    /**
     * @return \Generated\Shared\Transfer\RestPreOrderPaymentCancellationRequestAttributesTransfer
     */
    public function build(): RestPreOrderPaymentCancellationRequestAttributesTransfer
    {
        /** @var \Generated\Shared\Transfer\RestPreOrderPaymentCancellationRequestAttributesTransfer $transfer */
        $transfer = parent::build();

        return $transfer;
    }

    /**
     * @param string $builder
     *
     * @throws \Exception
     *
     * @return \Spryker\Shared\Testify\AbstractDataBuilder
     */
    protected function locateDataBuilder($builder)
    {
        $builderClass = __NAMESPACE__ . "\\{$builder}Builder";

        if (!class_exists($builderClass)) {
            throw new Exception("Builder '$builderClass' not found");
        }

        return new $builderClass;
    }

    /**
     * @return \Generated\Shared\Transfer\RestPreOrderPaymentCancellationRequestAttributesTransfer
     */
    public function getTransfer(): RestPreOrderPaymentCancellationRequestAttributesTransfer
    {
        return new RestPreOrderPaymentCancellationRequestAttributesTransfer;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withPayment($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('payment', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('payment', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherPayment($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('payment', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('payment', $overrideOrBuilder, true);

        return $this;
    }
}
