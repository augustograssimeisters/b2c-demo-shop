<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\DataBuilder;

use Exception;
use Generated\Shared\Transfer\ProductConfiguratorResponseTransfer;
use Spryker\Shared\Testify\AbstractDataBuilder;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class ProductConfiguratorResponseBuilder extends AbstractDataBuilder
{
    /**
     * @var \Faker\Generator
     */
    protected static $faker;

    /**
     * @var array<string, string>
     */
    protected $defaultRules = [
        "sourceType" => "=SOURCE_TYPE_PDP",
        "sku" => "unique()->isbn10()",
        "itemGroupKey" => "lexify('??????????')",
        "customerReference" => "lexify('??????????')",
        "timestamp" => "randomNumber(1)",
        "checkSum" => "lexify('??????????')",
    ];

    /**
     * @var array<string, string>
     */
    protected $dependencies = [
        'productConfigurationInstance' => 'ProductConfigurationInstance',
    ];

    /**
     * @return \Generated\Shared\Transfer\ProductConfiguratorResponseTransfer
     */
    public function build(): ProductConfiguratorResponseTransfer
    {
        /** @var \Generated\Shared\Transfer\ProductConfiguratorResponseTransfer $transfer */
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
     * @return \Generated\Shared\Transfer\ProductConfiguratorResponseTransfer
     */
    public function getTransfer(): ProductConfiguratorResponseTransfer
    {
        return new ProductConfiguratorResponseTransfer;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withProductConfigurationInstance($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('productConfigurationInstance', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('productConfigurationInstance', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherProductConfigurationInstance($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('productConfigurationInstance', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('productConfigurationInstance', $overrideOrBuilder, true);

        return $this;
    }
}
