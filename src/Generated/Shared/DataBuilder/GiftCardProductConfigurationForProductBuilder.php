<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\DataBuilder;

use Exception;
use Generated\Shared\Transfer\GiftCardProductConfigurationForProductTransfer;
use Spryker\Shared\Testify\AbstractDataBuilder;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class GiftCardProductConfigurationForProductBuilder extends AbstractDataBuilder
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
        'giftCardProductConfiguration' => 'GiftCardProductConfiguration',
    ];

    /**
     * @return \Generated\Shared\Transfer\GiftCardProductConfigurationForProductTransfer
     */
    public function build(): GiftCardProductConfigurationForProductTransfer
    {
        /** @var \Generated\Shared\Transfer\GiftCardProductConfigurationForProductTransfer $transfer */
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
     * @return \Generated\Shared\Transfer\GiftCardProductConfigurationForProductTransfer
     */
    public function getTransfer(): GiftCardProductConfigurationForProductTransfer
    {
        return new GiftCardProductConfigurationForProductTransfer;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withGiftCardProductConfiguration($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('giftCardProductConfiguration', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('giftCardProductConfiguration', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherGiftCardProductConfiguration($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('giftCardProductConfiguration', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('giftCardProductConfiguration', $overrideOrBuilder, true);

        return $this;
    }
}
