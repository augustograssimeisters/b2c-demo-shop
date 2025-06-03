<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use ArrayObject;
use Spryker\Shared\Kernel\Transfer\AbstractTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class PushNotificationSubscriptionCollectionRequestTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const IS_TRANSACTIONAL = 'isTransactional';

    /**
     * @var string
     */
    public const PUSH_NOTIFICATION_SUBSCRIPTIONS = 'pushNotificationSubscriptions';

    /**
     * @var bool|null
     */
    protected $isTransactional;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\PushNotificationSubscriptionTransfer>
     */
    protected $pushNotificationSubscriptions;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'is_transactional' => 'isTransactional',
        'isTransactional' => 'isTransactional',
        'IsTransactional' => 'isTransactional',
        'push_notification_subscriptions' => 'pushNotificationSubscriptions',
        'pushNotificationSubscriptions' => 'pushNotificationSubscriptions',
        'PushNotificationSubscriptions' => 'pushNotificationSubscriptions',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::IS_TRANSACTIONAL => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_transactional',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::PUSH_NOTIFICATION_SUBSCRIPTIONS => [
            'type' => 'Generated\Shared\Transfer\PushNotificationSubscriptionTransfer',
            'type_shim' => null,
            'name_underscore' => 'push_notification_subscriptions',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
    ];

    /**
     * @module PushNotificationWebPushPhp|PushNotification|PushNotificationsBackendApi
     *
     * @param bool|null $isTransactional
     *
     * @return $this
     */
    public function setIsTransactional(?bool $isTransactional = null)
    {
        $this->isTransactional = $isTransactional;
        $this->modifiedProperties[self::IS_TRANSACTIONAL] = true;

        return $this;
    }

    /**
     * @module PushNotificationWebPushPhp|PushNotification|PushNotificationsBackendApi
     *
     * @return bool|null
     */
    public function getIsTransactional(): ?bool
    {
        return $this->isTransactional;
    }

    /**
     * @module PushNotificationWebPushPhp|PushNotification|PushNotificationsBackendApi
     *
     * @param bool $isTransactional
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsTransactionalOrFail(bool $isTransactional)
    {
        return $this->setIsTransactional($isTransactional);
    }

    /**
     * @module PushNotificationWebPushPhp|PushNotification|PushNotificationsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsTransactionalOrFail(): bool
    {
        if ($this->isTransactional === null) {
            $this->throwNullValueException(static::IS_TRANSACTIONAL);
        }

        return $this->isTransactional;
    }

    /**
     * @module PushNotificationWebPushPhp|PushNotification|PushNotificationsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsTransactional()
    {
        $this->assertPropertyIsSet(self::IS_TRANSACTIONAL);

        return $this;
    }

    /**
     * @module PushNotificationWebPushPhp|PushNotification|PushNotificationsBackendApi
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\PushNotificationSubscriptionTransfer> $pushNotificationSubscriptions
     *
     * @return $this
     */
    public function setPushNotificationSubscriptions(ArrayObject $pushNotificationSubscriptions)
    {
        $this->pushNotificationSubscriptions = new ArrayObject();

        foreach ($pushNotificationSubscriptions as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::PUSH_NOTIFICATION_SUBSCRIPTIONS]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addPushNotificationSubscription(...$args);
        }

        $this->modifiedProperties[self::PUSH_NOTIFICATION_SUBSCRIPTIONS] = true;

        return $this;
    }

    /**
     * @module PushNotificationWebPushPhp|PushNotification|PushNotificationsBackendApi
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\PushNotificationSubscriptionTransfer>
     */
    public function getPushNotificationSubscriptions(): ArrayObject
    {
        return $this->pushNotificationSubscriptions;
    }

    /**
     * @module PushNotificationWebPushPhp|PushNotification|PushNotificationsBackendApi
     *
     * @param \Generated\Shared\Transfer\PushNotificationSubscriptionTransfer $pushNotificationSubscription
     *
     * @return $this
     */
    public function addPushNotificationSubscription(PushNotificationSubscriptionTransfer $pushNotificationSubscription)
    {
        $this->pushNotificationSubscriptions[] = $pushNotificationSubscription;
        $this->modifiedProperties[self::PUSH_NOTIFICATION_SUBSCRIPTIONS] = true;

        return $this;
    }

    /**
     * @module PushNotificationWebPushPhp|PushNotification|PushNotificationsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePushNotificationSubscriptions()
    {
        $this->assertCollectionPropertyIsSet(self::PUSH_NOTIFICATION_SUBSCRIPTIONS);

        return $this;
    }

    /**
     * @param array<string, mixed> $data
     * @param bool $ignoreMissingProperty
     *
     * @throws \InvalidArgumentException
     *
     * @return $this
     */
    public function fromArray(array $data, $ignoreMissingProperty = false)
    {
        foreach ($data as $property => $value) {
            $normalizedPropertyName = $this->transferPropertyNameMap[$property] ?? null;

            switch ($normalizedPropertyName) {
                case 'isTransactional':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'pushNotificationSubscriptions':
                    $elementType = $this->transferMetadata[$normalizedPropertyName]['type'];
                    $this->$normalizedPropertyName = $this->processArrayObject($elementType, $value, $ignoreMissingProperty);
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                default:
                    if (!$ignoreMissingProperty) {
                        throw new \InvalidArgumentException(sprintf('Missing property `%s` in `%s`', $property, static::class));
                    }
            }
        }

        return $this;
    }

    /**
     * @param bool $isRecursive
     * @param bool $camelCasedKeys
     *
     * @return array<string, mixed>
     */
    public function modifiedToArray($isRecursive = true, $camelCasedKeys = false): array
    {
        if ($isRecursive && !$camelCasedKeys) {
            return $this->modifiedToArrayRecursiveNotCamelCased();
        }
        if ($isRecursive && $camelCasedKeys) {
            return $this->modifiedToArrayRecursiveCamelCased();
        }
        if (!$isRecursive && $camelCasedKeys) {
            return $this->modifiedToArrayNotRecursiveCamelCased();
        }
        if (!$isRecursive && !$camelCasedKeys) {
            return $this->modifiedToArrayNotRecursiveNotCamelCased();
        }
    }

    /**
     * @param bool $isRecursive
     * @param bool $camelCasedKeys
     *
     * @return array<string, mixed>
     */
    public function toArray($isRecursive = true, $camelCasedKeys = false): array
    {
        if ($isRecursive && !$camelCasedKeys) {
            return $this->toArrayRecursiveNotCamelCased();
        }
        if ($isRecursive && $camelCasedKeys) {
            return $this->toArrayRecursiveCamelCased();
        }
        if (!$isRecursive && !$camelCasedKeys) {
            return $this->toArrayNotRecursiveNotCamelCased();
        }
        if (!$isRecursive && $camelCasedKeys) {
            return $this->toArrayNotRecursiveCamelCased();
        }
    }

    /**
     * @param array<string, mixed>|\ArrayObject<string, mixed> $value
     * @param bool $isRecursive
     * @param bool $camelCasedKeys
     *
     * @return array<string, mixed>
     */
    protected function addValuesToCollectionModified($value, $isRecursive, $camelCasedKeys): array
    {
        $result = [];
        foreach ($value as $elementKey => $arrayElement) {
            if ($arrayElement instanceof AbstractTransfer) {
                $result[$elementKey] = $arrayElement->modifiedToArray($isRecursive, $camelCasedKeys);

                continue;
            }
            $result[$elementKey] = $arrayElement;
        }

        return $result;
    }

    /**
     * @param array<string, mixed>|\ArrayObject<string, mixed> $value
     * @param bool $isRecursive
     * @param bool $camelCasedKeys
     *
     * @return array<string, mixed>
     */
    protected function addValuesToCollection($value, $isRecursive, $camelCasedKeys): array
    {
        $result = [];
        foreach ($value as $elementKey => $arrayElement) {
            if ($arrayElement instanceof AbstractTransfer) {
                $result[$elementKey] = $arrayElement->toArray($isRecursive, $camelCasedKeys);

                continue;
            }
            $result[$elementKey] = $arrayElement;
        }

        return $result;
    }

    /**
     * @return array<string, mixed>
     */
    public function modifiedToArrayRecursiveCamelCased(): array
    {
        $values = [];
        foreach ($this->modifiedProperties as $property => $_) {
            $value = $this->$property;

            $arrayKey = $property;

            if ($value instanceof AbstractTransfer) {
                $values[$arrayKey] = $value->modifiedToArray(true, true);

                continue;
            }
            switch ($property) {
                case 'isTransactional':
                    $values[$arrayKey] = $value;

                    break;
                case 'pushNotificationSubscriptions':
                    $values[$arrayKey] = $value ? $this->addValuesToCollectionModified($value, true, true) : $value;

                    break;
            }
        }

        return $values;
    }

    /**
     * @return array<string, mixed>
     */
    public function modifiedToArrayRecursiveNotCamelCased(): array
    {
        $values = [];
        foreach ($this->modifiedProperties as $property => $_) {
            $value = $this->$property;

            $arrayKey = $this->transferMetadata[$property]['name_underscore'];

            if ($value instanceof AbstractTransfer) {
                $values[$arrayKey] = $value->modifiedToArray(true, false);

                continue;
            }
            switch ($property) {
                case 'isTransactional':
                    $values[$arrayKey] = $value;

                    break;
                case 'pushNotificationSubscriptions':
                    $values[$arrayKey] = $value ? $this->addValuesToCollectionModified($value, true, false) : $value;

                    break;
            }
        }

        return $values;
    }

    /**
     * @return array<string, mixed>
     */
    public function modifiedToArrayNotRecursiveNotCamelCased(): array
    {
        $values = [];
        foreach ($this->modifiedProperties as $property => $_) {
            $value = $this->$property;

            $arrayKey = $this->transferMetadata[$property]['name_underscore'];

            $values[$arrayKey] = $value;
        }

        return $values;
    }

    /**
     * @return array<string, mixed>
     */
    public function modifiedToArrayNotRecursiveCamelCased(): array
    {
        $values = [];
        foreach ($this->modifiedProperties as $property => $_) {
            $value = $this->$property;

            $arrayKey = $property;

            $values[$arrayKey] = $value;
        }

        return $values;
    }

    /**
     * @return void
     */
    protected function initCollectionProperties(): void
    {
        $this->pushNotificationSubscriptions = $this->pushNotificationSubscriptions ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'isTransactional' => $this->isTransactional,
            'pushNotificationSubscriptions' => $this->pushNotificationSubscriptions,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'is_transactional' => $this->isTransactional,
            'push_notification_subscriptions' => $this->pushNotificationSubscriptions,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'is_transactional' => $this->isTransactional instanceof AbstractTransfer ? $this->isTransactional->toArray(true, false) : $this->isTransactional,
            'push_notification_subscriptions' => $this->pushNotificationSubscriptions instanceof AbstractTransfer ? $this->pushNotificationSubscriptions->toArray(true, false) : $this->addValuesToCollection($this->pushNotificationSubscriptions, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'isTransactional' => $this->isTransactional instanceof AbstractTransfer ? $this->isTransactional->toArray(true, true) : $this->isTransactional,
            'pushNotificationSubscriptions' => $this->pushNotificationSubscriptions instanceof AbstractTransfer ? $this->pushNotificationSubscriptions->toArray(true, true) : $this->addValuesToCollection($this->pushNotificationSubscriptions, true, true),
        ];
    }
}
