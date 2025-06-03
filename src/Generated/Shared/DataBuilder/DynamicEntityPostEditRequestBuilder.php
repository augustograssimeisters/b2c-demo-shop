<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\DataBuilder;

use Exception;
use Generated\Shared\Transfer\DynamicEntityPostEditRequestTransfer;
use Spryker\Shared\Testify\AbstractDataBuilder;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class DynamicEntityPostEditRequestBuilder extends AbstractDataBuilder
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
        'rawDynamicEntity' => 'RawDynamicEntity',
    ];

    /**
     * @return \Generated\Shared\Transfer\DynamicEntityPostEditRequestTransfer
     */
    public function build(): DynamicEntityPostEditRequestTransfer
    {
        /** @var \Generated\Shared\Transfer\DynamicEntityPostEditRequestTransfer $transfer */
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
     * @return \Generated\Shared\Transfer\DynamicEntityPostEditRequestTransfer
     */
    public function getTransfer(): DynamicEntityPostEditRequestTransfer
    {
        return new DynamicEntityPostEditRequestTransfer;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withRawDynamicEntity($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('rawDynamicEntity', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('rawDynamicEntity', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherRawDynamicEntity($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('rawDynamicEntity', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('rawDynamicEntity', $overrideOrBuilder, true);

        return $this;
    }
}
