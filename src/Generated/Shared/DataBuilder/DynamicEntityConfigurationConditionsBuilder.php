<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\DataBuilder;

use Exception;
use Generated\Shared\Transfer\DynamicEntityConfigurationConditionsTransfer;
use Spryker\Shared\Testify\AbstractDataBuilder;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class DynamicEntityConfigurationConditionsBuilder extends AbstractDataBuilder
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
        'filterCreatedAt' => 'CriteriaRangeFilter',
        'filterUpdatedAt' => 'CriteriaRangeFilter',
    ];

    /**
     * @return \Generated\Shared\Transfer\DynamicEntityConfigurationConditionsTransfer
     */
    public function build(): DynamicEntityConfigurationConditionsTransfer
    {
        /** @var \Generated\Shared\Transfer\DynamicEntityConfigurationConditionsTransfer $transfer */
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
     * @return \Generated\Shared\Transfer\DynamicEntityConfigurationConditionsTransfer
     */
    public function getTransfer(): DynamicEntityConfigurationConditionsTransfer
    {
        return new DynamicEntityConfigurationConditionsTransfer;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withFilterCreatedAt($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('filterCreatedAt', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('filterCreatedAt', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherFilterCreatedAt($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('filterCreatedAt', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('filterCreatedAt', $overrideOrBuilder, true);

        return $this;
    }
    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withFilterUpdatedAt($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('filterUpdatedAt', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('filterUpdatedAt', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherFilterUpdatedAt($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('filterUpdatedAt', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('filterUpdatedAt', $overrideOrBuilder, true);

        return $this;
    }
}
