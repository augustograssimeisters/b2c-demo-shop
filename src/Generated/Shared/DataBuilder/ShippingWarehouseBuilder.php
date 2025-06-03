<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\DataBuilder;

use Exception;
use Generated\Shared\Transfer\ShippingWarehouseTransfer;
use Spryker\Shared\Testify\AbstractDataBuilder;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class ShippingWarehouseBuilder extends AbstractDataBuilder
{
    /**
     * @var \Faker\Generator
     */
    protected static $faker;

    /**
     * @var array<string, string>
     */
    protected $defaultRules = [
        "quantity" => "numberBetween(1, 9)",
    ];

    /**
     * @var array<string, string>
     */
    protected $dependencies = [
        'warehouseAddress' => 'TaxAppAddress',
    ];

    /**
     * @return \Generated\Shared\Transfer\ShippingWarehouseTransfer
     */
    public function build(): ShippingWarehouseTransfer
    {
        /** @var \Generated\Shared\Transfer\ShippingWarehouseTransfer $transfer */
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
     * @return \Generated\Shared\Transfer\ShippingWarehouseTransfer
     */
    public function getTransfer(): ShippingWarehouseTransfer
    {
        return new ShippingWarehouseTransfer;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withWarehouseAddress($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('warehouseAddress', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('warehouseAddress', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherWarehouseAddress($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('warehouseAddress', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('warehouseAddress', $overrideOrBuilder, true);

        return $this;
    }
}
