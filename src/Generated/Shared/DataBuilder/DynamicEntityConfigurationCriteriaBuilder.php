<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\DataBuilder;

use Exception;
use Generated\Shared\Transfer\DynamicEntityConfigurationCriteriaTransfer;
use Spryker\Shared\Testify\AbstractDataBuilder;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class DynamicEntityConfigurationCriteriaBuilder extends AbstractDataBuilder
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
        'dynamicEntityConfigurationConditions' => 'DynamicEntityConfigurationConditions',
    ];

    /**
     * @return \Generated\Shared\Transfer\DynamicEntityConfigurationCriteriaTransfer
     */
    public function build(): DynamicEntityConfigurationCriteriaTransfer
    {
        /** @var \Generated\Shared\Transfer\DynamicEntityConfigurationCriteriaTransfer $transfer */
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
     * @return \Generated\Shared\Transfer\DynamicEntityConfigurationCriteriaTransfer
     */
    public function getTransfer(): DynamicEntityConfigurationCriteriaTransfer
    {
        return new DynamicEntityConfigurationCriteriaTransfer;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withDynamicEntityConfigurationConditions($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('dynamicEntityConfigurationConditions', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('dynamicEntityConfigurationConditions', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherDynamicEntityConfigurationConditions($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('dynamicEntityConfigurationConditions', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('dynamicEntityConfigurationConditions', $overrideOrBuilder, true);

        return $this;
    }
}
