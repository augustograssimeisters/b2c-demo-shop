<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\DataBuilder;

use Exception;
use Generated\Shared\Transfer\MessageDataFilterConfigurationTransfer;
use Spryker\Shared\Testify\AbstractDataBuilder;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class MessageDataFilterConfigurationBuilder extends AbstractDataBuilder
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
        'stripIdFieldsConfiguration' => 'MessageDataFilterItemConfiguration',
        'stripNullFieldsConfiguration' => 'MessageDataFilterItemConfiguration',
    ];

    /**
     * @return \Generated\Shared\Transfer\MessageDataFilterConfigurationTransfer
     */
    public function build(): MessageDataFilterConfigurationTransfer
    {
        /** @var \Generated\Shared\Transfer\MessageDataFilterConfigurationTransfer $transfer */
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
     * @return \Generated\Shared\Transfer\MessageDataFilterConfigurationTransfer
     */
    public function getTransfer(): MessageDataFilterConfigurationTransfer
    {
        return new MessageDataFilterConfigurationTransfer;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withStripIdFieldsConfiguration($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('stripIdFieldsConfiguration', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('stripIdFieldsConfiguration', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherStripIdFieldsConfiguration($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('stripIdFieldsConfiguration', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('stripIdFieldsConfiguration', $overrideOrBuilder, true);

        return $this;
    }
    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withStripNullFieldsConfiguration($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('stripNullFieldsConfiguration', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('stripNullFieldsConfiguration', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherStripNullFieldsConfiguration($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('stripNullFieldsConfiguration', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('stripNullFieldsConfiguration', $overrideOrBuilder, true);

        return $this;
    }
}
