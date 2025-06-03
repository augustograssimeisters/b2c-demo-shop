<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\DataBuilder;

use Exception;
use Generated\Shared\Transfer\PushNotificationProviderCollectionRequestTransfer;
use Spryker\Shared\Testify\AbstractDataBuilder;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class PushNotificationProviderCollectionRequestBuilder extends AbstractDataBuilder
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
        'pushNotificationProvider' => 'PushNotificationProvider',
    ];

    /**
     * @return \Generated\Shared\Transfer\PushNotificationProviderCollectionRequestTransfer
     */
    public function build(): PushNotificationProviderCollectionRequestTransfer
    {
        /** @var \Generated\Shared\Transfer\PushNotificationProviderCollectionRequestTransfer $transfer */
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
     * @return \Generated\Shared\Transfer\PushNotificationProviderCollectionRequestTransfer
     */
    public function getTransfer(): PushNotificationProviderCollectionRequestTransfer
    {
        return new PushNotificationProviderCollectionRequestTransfer;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withPushNotificationProvider($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('pushNotificationProvider', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('pushNotificationProvider', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherPushNotificationProvider($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('pushNotificationProvider', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('pushNotificationProvider', $overrideOrBuilder, true);

        return $this;
    }
}
