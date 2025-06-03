<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\DataBuilder;

use Exception;
use Generated\Shared\Transfer\PaymentMethodAppConfigurationTransfer;
use Spryker\Shared\Testify\AbstractDataBuilder;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class PaymentMethodAppConfigurationBuilder extends AbstractDataBuilder
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
        'endpoint' => 'Endpoint',
        'checkoutConfiguration' => 'CheckoutConfiguration',
    ];

    /**
     * @return \Generated\Shared\Transfer\PaymentMethodAppConfigurationTransfer
     */
    public function build(): PaymentMethodAppConfigurationTransfer
    {
        /** @var \Generated\Shared\Transfer\PaymentMethodAppConfigurationTransfer $transfer */
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
     * @return \Generated\Shared\Transfer\PaymentMethodAppConfigurationTransfer
     */
    public function getTransfer(): PaymentMethodAppConfigurationTransfer
    {
        return new PaymentMethodAppConfigurationTransfer;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withEndpoint($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('endpoint', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('endpoint', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherEndpoint($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('endpoint', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('endpoint', $overrideOrBuilder, true);

        return $this;
    }
    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withCheckoutConfiguration($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('checkoutConfiguration', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('checkoutConfiguration', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherCheckoutConfiguration($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('checkoutConfiguration', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('checkoutConfiguration', $overrideOrBuilder, true);

        return $this;
    }
}
