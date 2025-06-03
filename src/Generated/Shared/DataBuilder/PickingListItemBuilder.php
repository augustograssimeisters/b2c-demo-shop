<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\DataBuilder;

use Exception;
use Generated\Shared\Transfer\PickingListItemTransfer;
use Spryker\Shared\Testify\AbstractDataBuilder;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class PickingListItemBuilder extends AbstractDataBuilder
{
    /**
     * @var \Faker\Generator
     */
    protected static $faker;

    /**
     * @var array<string, string>
     */
    protected $defaultRules = [
        "quantity" => "numberBetween(1, 2)",
        "numberOfNotPicked" => "=0",
        "numberOfPicked" => "=0",
    ];

    /**
     * @var array<string, string>
     */
    protected $dependencies = [
        'orderItem' => 'Item',
    ];

    /**
     * @return \Generated\Shared\Transfer\PickingListItemTransfer
     */
    public function build(): PickingListItemTransfer
    {
        /** @var \Generated\Shared\Transfer\PickingListItemTransfer $transfer */
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
     * @return \Generated\Shared\Transfer\PickingListItemTransfer
     */
    public function getTransfer(): PickingListItemTransfer
    {
        return new PickingListItemTransfer;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withOrderItem($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('orderItem', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('orderItem', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherOrderItem($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('orderItem', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('orderItem', $overrideOrBuilder, true);

        return $this;
    }
}
