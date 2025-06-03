<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\DataBuilder;

use Exception;
use Generated\Shared\Transfer\MessageBrokerTestMessageTransfer;
use Spryker\Shared\Testify\AbstractDataBuilder;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class MessageBrokerTestMessageBuilder extends AbstractDataBuilder
{
    /**
     * @var \Faker\Generator
     */
    protected static $faker;

    /**
     * @var array<string, string>
     */
    protected $defaultRules = [
        "key" => "lexify('??????????')",
        "empty" => "lexify('??????????')",
    ];

    /**
     * @var array<string, string>
     */
    protected $dependencies = [
        'messageAttributes' => 'MessageAttributes',
        'dataFilterConfiguration' => 'MessageDataFilterConfiguration',
    ];

    /**
     * @return \Generated\Shared\Transfer\MessageBrokerTestMessageTransfer
     */
    public function build(): MessageBrokerTestMessageTransfer
    {
        /** @var \Generated\Shared\Transfer\MessageBrokerTestMessageTransfer $transfer */
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
     * @return \Generated\Shared\Transfer\MessageBrokerTestMessageTransfer
     */
    public function getTransfer(): MessageBrokerTestMessageTransfer
    {
        return new MessageBrokerTestMessageTransfer;
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
