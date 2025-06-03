<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\DataBuilder;

use Exception;
use Generated\Shared\Transfer\MessageBrokerTestMessageWithNestedArrayTransfer;
use Spryker\Shared\Testify\AbstractDataBuilder;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class MessageBrokerTestMessageWithNestedArrayBuilder extends AbstractDataBuilder
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
        'arrayAttribute' => 'MessageBrokerTestMessageWithArray',
        'attribute' => 'MessageBrokerTestMessage',
        'messageAttributes' => 'MessageAttributes',
    ];

    /**
     * @return \Generated\Shared\Transfer\MessageBrokerTestMessageWithNestedArrayTransfer
     */
    public function build(): MessageBrokerTestMessageWithNestedArrayTransfer
    {
        /** @var \Generated\Shared\Transfer\MessageBrokerTestMessageWithNestedArrayTransfer $transfer */
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
     * @return \Generated\Shared\Transfer\MessageBrokerTestMessageWithNestedArrayTransfer
     */
    public function getTransfer(): MessageBrokerTestMessageWithNestedArrayTransfer
    {
        return new MessageBrokerTestMessageWithNestedArrayTransfer;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withArrayAttribute($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('arrayAttribute', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('arrayAttribute', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherArrayAttribute($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('arrayAttribute', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('arrayAttribute', $overrideOrBuilder, true);

        return $this;
    }
    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAttribute($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('attribute', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('attribute', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherAttribute($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('attribute', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('attribute', $overrideOrBuilder, true);

        return $this;
    }
    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withMessageAttributes($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('messageAttributes', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('messageAttributes', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherMessageAttributes($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('messageAttributes', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('messageAttributes', $overrideOrBuilder, true);

        return $this;
    }
}
