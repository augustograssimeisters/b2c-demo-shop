<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\DataBuilder;

use Exception;
use Generated\Shared\Transfer\NumberFormatFloatRequestTransfer;
use Spryker\Shared\Testify\AbstractDataBuilder;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class NumberFormatFloatRequestBuilder extends AbstractDataBuilder
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
        'numberFormatFilter' => 'NumberFormatFilter',
    ];

    /**
     * @return \Generated\Shared\Transfer\NumberFormatFloatRequestTransfer
     */
    public function build(): NumberFormatFloatRequestTransfer
    {
        /** @var \Generated\Shared\Transfer\NumberFormatFloatRequestTransfer $transfer */
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
     * @return \Generated\Shared\Transfer\NumberFormatFloatRequestTransfer
     */
    public function getTransfer(): NumberFormatFloatRequestTransfer
    {
        return new NumberFormatFloatRequestTransfer;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withNumberFormatFilter($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('numberFormatFilter', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('numberFormatFilter', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherNumberFormatFilter($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('numberFormatFilter', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('numberFormatFilter', $overrideOrBuilder, true);

        return $this;
    }
}
