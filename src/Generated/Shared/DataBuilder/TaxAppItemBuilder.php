<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\DataBuilder;

use Exception;
use Generated\Shared\Transfer\TaxAppItemTransfer;
use Spryker\Shared\Testify\AbstractDataBuilder;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class TaxAppItemBuilder extends AbstractDataBuilder
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
        "quantity" => "numberBetween(1, 3)",
        "taxTotal" => "numberBetween(100, 1000)",
        "sku" => "lexify('??????????')",
    ];

    /**
     * @var array<string, string>
     */
    protected $dependencies = [
        'shippingAddress' => 'TaxAppAddress',
        'billingAddress' => 'TaxAppAddress',
        'sellerAddress' => 'TaxAppAddress',
        'shippingWarehouse' => 'ShippingWarehouse',
    ];

    /**
     * @return \Generated\Shared\Transfer\TaxAppItemTransfer
     */
    public function build(): TaxAppItemTransfer
    {
        /** @var \Generated\Shared\Transfer\TaxAppItemTransfer $transfer */
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
     * @return \Generated\Shared\Transfer\TaxAppItemTransfer
     */
    public function getTransfer(): TaxAppItemTransfer
    {
        return new TaxAppItemTransfer;
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
    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withSellerAddress($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('sellerAddress', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('sellerAddress', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherSellerAddress($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('sellerAddress', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('sellerAddress', $overrideOrBuilder, true);

        return $this;
    }
    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withShippingWarehouse($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('shippingWarehouse', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('shippingWarehouse', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherShippingWarehouse($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('shippingWarehouse', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('shippingWarehouse', $overrideOrBuilder, true);

        return $this;
    }
}
