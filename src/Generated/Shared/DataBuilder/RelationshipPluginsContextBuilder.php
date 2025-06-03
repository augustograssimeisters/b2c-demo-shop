<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\DataBuilder;

use Exception;
use Generated\Shared\Transfer\RelationshipPluginsContextTransfer;
use Spryker\Shared\Testify\AbstractDataBuilder;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class RelationshipPluginsContextBuilder extends AbstractDataBuilder
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
        'relationshipPluginAnnotationsContext' => 'RelationshipPluginAnnotationsContext',
    ];

    /**
     * @return \Generated\Shared\Transfer\RelationshipPluginsContextTransfer
     */
    public function build(): RelationshipPluginsContextTransfer
    {
        /** @var \Generated\Shared\Transfer\RelationshipPluginsContextTransfer $transfer */
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
     * @return \Generated\Shared\Transfer\RelationshipPluginsContextTransfer
     */
    public function getTransfer(): RelationshipPluginsContextTransfer
    {
        return new RelationshipPluginsContextTransfer;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withRelationshipPluginAnnotationsContext($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('relationshipPluginAnnotationsContext', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('relationshipPluginAnnotationsContext', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherRelationshipPluginAnnotationsContext($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('relationshipPluginAnnotationsContext', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('relationshipPluginAnnotationsContext', $overrideOrBuilder, true);

        return $this;
    }
}
