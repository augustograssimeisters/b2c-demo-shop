<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\DataBuilder;

use Exception;
use Generated\Shared\Transfer\TestMessageWithDataFilterConfigurationTransfer;
use Spryker\Shared\Testify\AbstractDataBuilder;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class TestMessageWithDataFilterConfigurationBuilder extends AbstractDataBuilder
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
        'dataFilterConfiguration' => 'MessageDataFilterConfiguration',
    ];

    /**
     * @return \Generated\Shared\Transfer\TestMessageWithDataFilterConfigurationTransfer
     */
    public function build(): TestMessageWithDataFilterConfigurationTransfer
    {
        /** @var \Generated\Shared\Transfer\TestMessageWithDataFilterConfigurationTransfer $transfer */
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
     * @return \Generated\Shared\Transfer\TestMessageWithDataFilterConfigurationTransfer
     */
    public function getTransfer(): TestMessageWithDataFilterConfigurationTransfer
    {
        return new TestMessageWithDataFilterConfigurationTransfer;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withDataFilterConfiguration($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('dataFilterConfiguration', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('dataFilterConfiguration', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherDataFilterConfiguration($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('dataFilterConfiguration', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('dataFilterConfiguration', $overrideOrBuilder, true);

        return $this;
    }
}
