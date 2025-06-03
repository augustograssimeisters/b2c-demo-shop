<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\DataBuilder;

use Exception;
use Generated\Shared\Transfer\ShipmentTypeStorageCriteriaTransfer;
use Spryker\Shared\Testify\AbstractDataBuilder;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class ShipmentTypeStorageCriteriaBuilder extends AbstractDataBuilder
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
        'shipmentTypeStorageConditions' => 'ShipmentTypeStorageConditions',
    ];

    /**
     * @return \Generated\Shared\Transfer\ShipmentTypeStorageCriteriaTransfer
     */
    public function build(): ShipmentTypeStorageCriteriaTransfer
    {
        /** @var \Generated\Shared\Transfer\ShipmentTypeStorageCriteriaTransfer $transfer */
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
     * @return \Generated\Shared\Transfer\ShipmentTypeStorageCriteriaTransfer
     */
    public function getTransfer(): ShipmentTypeStorageCriteriaTransfer
    {
        return new ShipmentTypeStorageCriteriaTransfer;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withShipmentTypeStorageConditions($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('shipmentTypeStorageConditions', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('shipmentTypeStorageConditions', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherShipmentTypeStorageConditions($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('shipmentTypeStorageConditions', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('shipmentTypeStorageConditions', $overrideOrBuilder, true);

        return $this;
    }
}
