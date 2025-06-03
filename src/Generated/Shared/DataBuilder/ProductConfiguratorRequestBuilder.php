<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\DataBuilder;

use Exception;
use Generated\Shared\Transfer\ProductConfiguratorRequestTransfer;
use Spryker\Shared\Testify\AbstractDataBuilder;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class ProductConfiguratorRequestBuilder extends AbstractDataBuilder
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
        'productConfiguratorRequestData' => 'ProductConfiguratorRequestData',
    ];

    /**
     * @return \Generated\Shared\Transfer\ProductConfiguratorRequestTransfer
     */
    public function build(): ProductConfiguratorRequestTransfer
    {
        /** @var \Generated\Shared\Transfer\ProductConfiguratorRequestTransfer $transfer */
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
     * @return \Generated\Shared\Transfer\ProductConfiguratorRequestTransfer
     */
    public function getTransfer(): ProductConfiguratorRequestTransfer
    {
        return new ProductConfiguratorRequestTransfer;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withProductConfiguratorRequestData($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('productConfiguratorRequestData', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('productConfiguratorRequestData', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherProductConfiguratorRequestData($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('productConfiguratorRequestData', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('productConfiguratorRequestData', $overrideOrBuilder, true);

        return $this;
    }
}
