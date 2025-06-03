<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\DataBuilder;

use Exception;
use Generated\Shared\Transfer\UpdatePaymentMethodTransfer;
use Spryker\Shared\Testify\AbstractDataBuilder;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class UpdatePaymentMethodBuilder extends AbstractDataBuilder
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
        'paymentMethodAppConfiguration' => 'PaymentMethodAppConfiguration',
        'messageAttributes' => 'MessageAttributes',
    ];

    /**
     * @return \Generated\Shared\Transfer\UpdatePaymentMethodTransfer
     */
    public function build(): UpdatePaymentMethodTransfer
    {
        /** @var \Generated\Shared\Transfer\UpdatePaymentMethodTransfer $transfer */
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
     * @return \Generated\Shared\Transfer\UpdatePaymentMethodTransfer
     */
    public function getTransfer(): UpdatePaymentMethodTransfer
    {
        return new UpdatePaymentMethodTransfer;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withPaymentMethodAppConfiguration($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('paymentMethodAppConfiguration', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('paymentMethodAppConfiguration', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherPaymentMethodAppConfiguration($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('paymentMethodAppConfiguration', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('paymentMethodAppConfiguration', $overrideOrBuilder, true);

        return $this;
    }
    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withMessageAttributes($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('messageAttributes', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('messageAttributes', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherMessageAttributes($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('messageAttributes', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('messageAttributes', $overrideOrBuilder, true);

        return $this;
    }
}
