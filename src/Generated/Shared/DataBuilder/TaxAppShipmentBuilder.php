<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\DataBuilder;

use Exception;
use Generated\Shared\Transfer\TaxAppShipmentTransfer;
use Spryker\Shared\Testify\AbstractDataBuilder;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class TaxAppShipmentBuilder extends AbstractDataBuilder
{
    /**
     * @var \Faker\Generator
     */
    protected static $faker;

    /**
     * @var array<string, string>
     */
    protected $defaultRules = [
        "id" => "lexify('??????????')",
        "priceAmount" => "numberBetween(100, 1000)",
        "discountAmount" => "numberBetween(100, 1000)",
        "taxTotal" => "numberBetween(100, 1000)",
    ];

    /**
     * @var array<string, string>
     */
    protected $dependencies = [
        'shippingAddress' => 'TaxAppAddress',
        'billingAddress' => 'TaxAppAddress',
    ];

    /**
     * @return \Generated\Shared\Transfer\TaxAppShipmentTransfer
     */
    public function build(): TaxAppShipmentTransfer
    {
        /** @var \Generated\Shared\Transfer\TaxAppShipmentTransfer $transfer */
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
     * @return \Generated\Shared\Transfer\TaxAppShipmentTransfer
     */
    public function getTransfer(): TaxAppShipmentTransfer
    {
        return new TaxAppShipmentTransfer;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withShippingAddress($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('shippingAddress', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('shippingAddress', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherShippingAddress($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('shippingAddress', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('shippingAddress', $overrideOrBuilder, true);

        return $this;
    }
    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withBillingAddress($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('billingAddress', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('billingAddress', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherBillingAddress($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('billingAddress', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('billingAddress', $overrideOrBuilder, true);

        return $this;
    }
}
