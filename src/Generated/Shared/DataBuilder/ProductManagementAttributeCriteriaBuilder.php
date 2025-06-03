<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\DataBuilder;

use Exception;
use Generated\Shared\Transfer\ProductManagementAttributeCriteriaTransfer;
use Spryker\Shared\Testify\AbstractDataBuilder;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class ProductManagementAttributeCriteriaBuilder extends AbstractDataBuilder
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
        'productManagementAttributeConditions' => 'ProductManagementAttributeConditions',
        'pagination' => 'Pagination',
    ];

    /**
     * @return \Generated\Shared\Transfer\ProductManagementAttributeCriteriaTransfer
     */
    public function build(): ProductManagementAttributeCriteriaTransfer
    {
        /** @var \Generated\Shared\Transfer\ProductManagementAttributeCriteriaTransfer $transfer */
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
     * @return \Generated\Shared\Transfer\ProductManagementAttributeCriteriaTransfer
     */
    public function getTransfer(): ProductManagementAttributeCriteriaTransfer
    {
        return new ProductManagementAttributeCriteriaTransfer;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withProductManagementAttributeConditions($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('productManagementAttributeConditions', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('productManagementAttributeConditions', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherProductManagementAttributeConditions($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('productManagementAttributeConditions', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('productManagementAttributeConditions', $overrideOrBuilder, true);

        return $this;
    }
    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withPagination($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('pagination', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('pagination', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherPagination($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('pagination', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('pagination', $overrideOrBuilder, true);

        return $this;
    }
}
