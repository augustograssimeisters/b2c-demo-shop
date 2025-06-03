<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\DataBuilder;

use Exception;
use Generated\Shared\Transfer\WarehouseUserAssignmentTransfer;
use Spryker\Shared\Testify\AbstractDataBuilder;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class WarehouseUserAssignmentBuilder extends AbstractDataBuilder
{
    /**
     * @var \Faker\Generator
     */
    protected static $faker;

    /**
     * @var array<string, string>
     */
    protected $defaultRules = [
        "isActive" => "=true",
    ];

    /**
     * @var array<string, string>
     */
    protected $dependencies = [
        'warehouse' => 'Stock',
    ];

    /**
     * @return \Generated\Shared\Transfer\WarehouseUserAssignmentTransfer
     */
    public function build(): WarehouseUserAssignmentTransfer
    {
        /** @var \Generated\Shared\Transfer\WarehouseUserAssignmentTransfer $transfer */
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
     * @return \Generated\Shared\Transfer\WarehouseUserAssignmentTransfer
     */
    public function getTransfer(): WarehouseUserAssignmentTransfer
    {
        return new WarehouseUserAssignmentTransfer;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withWarehouse($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('warehouse', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('warehouse', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherWarehouse($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('warehouse', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('warehouse', $overrideOrBuilder, true);

        return $this;
    }
}
