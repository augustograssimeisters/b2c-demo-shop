<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\DataBuilder;

use Exception;
use Generated\Shared\Transfer\ProductConfigurationInstanceCriteriaTransfer;
use Spryker\Shared\Testify\AbstractDataBuilder;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class ProductConfigurationInstanceCriteriaBuilder extends AbstractDataBuilder
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
        'productConfigurationInstanceConditions' => 'ProductConfigurationInstanceConditions',
    ];

    /**
     * @return \Generated\Shared\Transfer\ProductConfigurationInstanceCriteriaTransfer
     */
    public function build(): ProductConfigurationInstanceCriteriaTransfer
    {
        /** @var \Generated\Shared\Transfer\ProductConfigurationInstanceCriteriaTransfer $transfer */
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
     * @return \Generated\Shared\Transfer\ProductConfigurationInstanceCriteriaTransfer
     */
    public function getTransfer(): ProductConfigurationInstanceCriteriaTransfer
    {
        return new ProductConfigurationInstanceCriteriaTransfer;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withProductConfigurationInstanceConditions($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('productConfigurationInstanceConditions', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('productConfigurationInstanceConditions', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherProductConfigurationInstanceConditions($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('productConfigurationInstanceConditions', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('productConfigurationInstanceConditions', $overrideOrBuilder, true);

        return $this;
    }
}
