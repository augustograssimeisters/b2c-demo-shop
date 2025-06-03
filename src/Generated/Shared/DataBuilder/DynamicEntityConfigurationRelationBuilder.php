<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\DataBuilder;

use Exception;
use Generated\Shared\Transfer\DynamicEntityConfigurationRelationTransfer;
use Spryker\Shared\Testify\AbstractDataBuilder;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class DynamicEntityConfigurationRelationBuilder extends AbstractDataBuilder
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
        'childDynamicEntityConfiguration' => 'DynamicEntityConfiguration',
        'relationFieldMapping' => 'DynamicEntityRelationFieldMapping',
    ];

    /**
     * @return \Generated\Shared\Transfer\DynamicEntityConfigurationRelationTransfer
     */
    public function build(): DynamicEntityConfigurationRelationTransfer
    {
        /** @var \Generated\Shared\Transfer\DynamicEntityConfigurationRelationTransfer $transfer */
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
     * @return \Generated\Shared\Transfer\DynamicEntityConfigurationRelationTransfer
     */
    public function getTransfer(): DynamicEntityConfigurationRelationTransfer
    {
        return new DynamicEntityConfigurationRelationTransfer;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withChildDynamicEntityConfiguration($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('childDynamicEntityConfiguration', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('childDynamicEntityConfiguration', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherChildDynamicEntityConfiguration($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('childDynamicEntityConfiguration', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('childDynamicEntityConfiguration', $overrideOrBuilder, true);

        return $this;
    }
    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withRelationFieldMapping($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('relationFieldMapping', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('relationFieldMapping', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherRelationFieldMapping($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('relationFieldMapping', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('relationFieldMapping', $overrideOrBuilder, true);

        return $this;
    }
}
