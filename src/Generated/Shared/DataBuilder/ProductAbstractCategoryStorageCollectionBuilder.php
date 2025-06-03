<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\DataBuilder;

use Exception;
use Generated\Shared\Transfer\ProductAbstractCategoryStorageCollectionTransfer;
use Spryker\Shared\Testify\AbstractDataBuilder;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class ProductAbstractCategoryStorageCollectionBuilder extends AbstractDataBuilder
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
        'productAbstractCategory' => 'ProductAbstractCategoryStorage',
    ];

    /**
     * @return \Generated\Shared\Transfer\ProductAbstractCategoryStorageCollectionTransfer
     */
    public function build(): ProductAbstractCategoryStorageCollectionTransfer
    {
        /** @var \Generated\Shared\Transfer\ProductAbstractCategoryStorageCollectionTransfer $transfer */
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
     * @return \Generated\Shared\Transfer\ProductAbstractCategoryStorageCollectionTransfer
     */
    public function getTransfer(): ProductAbstractCategoryStorageCollectionTransfer
    {
        return new ProductAbstractCategoryStorageCollectionTransfer;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withProductAbstractCategory($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('productAbstractCategory', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('productAbstractCategory', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherProductAbstractCategory($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('productAbstractCategory', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('productAbstractCategory', $overrideOrBuilder, true);

        return $this;
    }
}
