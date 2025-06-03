<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\DataBuilder;

use Exception;
use Generated\Shared\Transfer\ProductOptionTransfer;
use Spryker\Shared\Testify\AbstractDataBuilder;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class ProductOptionBuilder extends AbstractDataBuilder
{
    /**
     * @var \Faker\Generator
     */
    protected static $faker;

    /**
     * @var array<string, string>
     */
    protected $defaultRules = [
        "refundableAmount" => "randomNumber(5)",
    ];

    /**
     * @var array<string, string>
     */
    protected $dependencies = [
        'calculatedDiscount' => 'CalculatedDiscount',
        'taxMetadata' => 'ItemTaxMetadata',
    ];

    /**
     * @return \Generated\Shared\Transfer\ProductOptionTransfer
     */
    public function build(): ProductOptionTransfer
    {
        /** @var \Generated\Shared\Transfer\ProductOptionTransfer $transfer */
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
     * @return \Generated\Shared\Transfer\ProductOptionTransfer
     */
    public function getTransfer(): ProductOptionTransfer
    {
        return new ProductOptionTransfer;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withCalculatedDiscount($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('calculatedDiscount', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('calculatedDiscount', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherCalculatedDiscount($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('calculatedDiscount', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('calculatedDiscount', $overrideOrBuilder, true);

        return $this;
    }
    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withTaxMetadata($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('taxMetadata', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('taxMetadata', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherTaxMetadata($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('taxMetadata', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('taxMetadata', $overrideOrBuilder, true);

        return $this;
    }
}
