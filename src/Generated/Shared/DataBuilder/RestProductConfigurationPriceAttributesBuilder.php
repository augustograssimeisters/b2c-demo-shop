<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\DataBuilder;

use Exception;
use Generated\Shared\Transfer\RestProductConfigurationPriceAttributesTransfer;
use Spryker\Shared\Testify\AbstractDataBuilder;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class RestProductConfigurationPriceAttributesBuilder extends AbstractDataBuilder
{
    /**
     * @var \Faker\Generator
     */
    protected static $faker;

    /**
     * @var array<string, string>
     */
    protected $defaultRules = [
        "netAmount" => "randomNumber(4)",
        "grossAmount" => "randomNumber(4)",
        "priceTypeName" => "lexify('??????????')",
    ];

    /**
     * @var array<string, string>
     */
    protected $dependencies = [
        'currency' => 'RestCurrency',
        'volumePrice' => 'RestProductPriceVolumesAttributes',
    ];

    /**
     * @return \Generated\Shared\Transfer\RestProductConfigurationPriceAttributesTransfer
     */
    public function build(): RestProductConfigurationPriceAttributesTransfer
    {
        /** @var \Generated\Shared\Transfer\RestProductConfigurationPriceAttributesTransfer $transfer */
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
     * @return \Generated\Shared\Transfer\RestProductConfigurationPriceAttributesTransfer
     */
    public function getTransfer(): RestProductConfigurationPriceAttributesTransfer
    {
        return new RestProductConfigurationPriceAttributesTransfer;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withCurrency($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('currency', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('currency', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherCurrency($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('currency', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('currency', $overrideOrBuilder, true);

        return $this;
    }
    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withVolumePrice($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('volumePrice', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('volumePrice', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherVolumePrice($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('volumePrice', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('volumePrice', $overrideOrBuilder, true);

        return $this;
    }
}
