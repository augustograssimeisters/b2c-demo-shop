<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\DataBuilder;

use Exception;
use Generated\Shared\Transfer\GiftCardMetadataTransfer;
use Spryker\Shared\Testify\AbstractDataBuilder;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class GiftCardMetadataBuilder extends AbstractDataBuilder
{
    /**
     * @var \Faker\Generator
     */
    protected static $faker;

    /**
     * @var array<string, string>
     */
    protected $defaultRules = [
        "isGiftCard" => "boolean()",
    ];

    /**
     * @var array<string, string>
     */
    protected $dependencies = [
        'abstractConfiguration' => 'GiftCardAbstractProductConfiguration',
        'concreteConfiguration' => 'GiftCardProductConfiguration',
    ];

    /**
     * @return \Generated\Shared\Transfer\GiftCardMetadataTransfer
     */
    public function build(): GiftCardMetadataTransfer
    {
        /** @var \Generated\Shared\Transfer\GiftCardMetadataTransfer $transfer */
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
     * @return \Generated\Shared\Transfer\GiftCardMetadataTransfer
     */
    public function getTransfer(): GiftCardMetadataTransfer
    {
        return new GiftCardMetadataTransfer;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAbstractConfiguration($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('abstractConfiguration', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('abstractConfiguration', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherAbstractConfiguration($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('abstractConfiguration', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('abstractConfiguration', $overrideOrBuilder, true);

        return $this;
    }
    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withConcreteConfiguration($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('concreteConfiguration', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('concreteConfiguration', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherConcreteConfiguration($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('concreteConfiguration', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('concreteConfiguration', $overrideOrBuilder, true);

        return $this;
    }
}
