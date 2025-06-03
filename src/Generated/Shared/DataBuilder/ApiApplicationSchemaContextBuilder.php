<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\DataBuilder;

use Exception;
use Generated\Shared\Transfer\ApiApplicationSchemaContextTransfer;
use Spryker\Shared\Testify\AbstractDataBuilder;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class ApiApplicationSchemaContextBuilder extends AbstractDataBuilder
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
        'resourceContext' => 'ResourceContext',
        'relationshipPluginsContext' => 'RelationshipPluginsContext',
        'customRoutesContext' => 'CustomRoutesContext',
        'dynamicEntityConfiguration' => 'DynamicEntityConfiguration',
    ];

    /**
     * @return \Generated\Shared\Transfer\ApiApplicationSchemaContextTransfer
     */
    public function build(): ApiApplicationSchemaContextTransfer
    {
        /** @var \Generated\Shared\Transfer\ApiApplicationSchemaContextTransfer $transfer */
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
     * @return \Generated\Shared\Transfer\ApiApplicationSchemaContextTransfer
     */
    public function getTransfer(): ApiApplicationSchemaContextTransfer
    {
        return new ApiApplicationSchemaContextTransfer;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withResourceContext($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('resourceContext', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('resourceContext', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherResourceContext($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('resourceContext', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('resourceContext', $overrideOrBuilder, true);

        return $this;
    }
    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withRelationshipPluginsContext($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('relationshipPluginsContext', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('relationshipPluginsContext', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherRelationshipPluginsContext($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('relationshipPluginsContext', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('relationshipPluginsContext', $overrideOrBuilder, true);

        return $this;
    }
    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withCustomRoutesContext($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('customRoutesContext', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('customRoutesContext', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherCustomRoutesContext($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('customRoutesContext', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('customRoutesContext', $overrideOrBuilder, true);

        return $this;
    }
    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withDynamicEntityConfiguration($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('dynamicEntityConfiguration', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('dynamicEntityConfiguration', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherDynamicEntityConfiguration($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('dynamicEntityConfiguration', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('dynamicEntityConfiguration', $overrideOrBuilder, true);

        return $this;
    }
}
