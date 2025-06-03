<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\DataBuilder;

use Exception;
use Generated\Shared\Transfer\DynamicFixturesRequestBackendApiAttributesTransfer;
use Spryker\Shared\Testify\AbstractDataBuilder;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class DynamicFixturesRequestBackendApiAttributesBuilder extends AbstractDataBuilder
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
        'operation' => 'DynamicFixtureOperation',
    ];

    /**
     * @return \Generated\Shared\Transfer\DynamicFixturesRequestBackendApiAttributesTransfer
     */
    public function build(): DynamicFixturesRequestBackendApiAttributesTransfer
    {
        /** @var \Generated\Shared\Transfer\DynamicFixturesRequestBackendApiAttributesTransfer $transfer */
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
     * @return \Generated\Shared\Transfer\DynamicFixturesRequestBackendApiAttributesTransfer
     */
    public function getTransfer(): DynamicFixturesRequestBackendApiAttributesTransfer
    {
        return new DynamicFixturesRequestBackendApiAttributesTransfer;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withOperation($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('operation', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('operation', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherOperation($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('operation', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('operation', $overrideOrBuilder, true);

        return $this;
    }
}
