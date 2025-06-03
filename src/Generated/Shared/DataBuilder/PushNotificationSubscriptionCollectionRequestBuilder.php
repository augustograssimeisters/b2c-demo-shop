<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\DataBuilder;

use Exception;
use Generated\Shared\Transfer\PushNotificationSubscriptionCollectionRequestTransfer;
use Spryker\Shared\Testify\AbstractDataBuilder;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class PushNotificationSubscriptionCollectionRequestBuilder extends AbstractDataBuilder
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
        'pushNotificationSubscription' => 'PushNotificationSubscription',
    ];

    /**
     * @return \Generated\Shared\Transfer\PushNotificationSubscriptionCollectionRequestTransfer
     */
    public function build(): PushNotificationSubscriptionCollectionRequestTransfer
    {
        /** @var \Generated\Shared\Transfer\PushNotificationSubscriptionCollectionRequestTransfer $transfer */
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
     * @return \Generated\Shared\Transfer\PushNotificationSubscriptionCollectionRequestTransfer
     */
    public function getTransfer(): PushNotificationSubscriptionCollectionRequestTransfer
    {
        return new PushNotificationSubscriptionCollectionRequestTransfer;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withPushNotificationSubscription($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('pushNotificationSubscription', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('pushNotificationSubscription', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherPushNotificationSubscription($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('pushNotificationSubscription', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('pushNotificationSubscription', $overrideOrBuilder, true);

        return $this;
    }
}
