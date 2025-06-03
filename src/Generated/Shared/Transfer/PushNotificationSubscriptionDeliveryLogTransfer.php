<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use Spryker\Shared\Kernel\Transfer\AbstractTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class PushNotificationSubscriptionDeliveryLogTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_PUSH_NOTIFICATION_SUBSCRIPTION_DELIVERY_LOG = 'idPushNotificationSubscriptionDeliveryLog';

    /**
     * @var string
     */
    public const PUSH_NOTIFICATION = 'pushNotification';

    /**
     * @var string
     */
    public const PUSH_NOTIFICATION_SUBSCRIPTION = 'pushNotificationSubscription';

    /**
     * @var int|null
     */
    protected $idPushNotificationSubscriptionDeliveryLog;

    /**
     * @var \Generated\Shared\Transfer\PushNotificationTransfer|null
     */
    protected $pushNotification;

    /**
     * @var \Generated\Shared\Transfer\PushNotificationSubscriptionTransfer|null
     */
    protected $pushNotificationSubscription;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_push_notification_subscription_delivery_log' => 'idPushNotificationSubscriptionDeliveryLog',
        'idPushNotificationSubscriptionDeliveryLog' => 'idPushNotificationSubscriptionDeliveryLog',
        'IdPushNotificationSubscriptionDeliveryLog' => 'idPushNotificationSubscriptionDeliveryLog',
        'push_notification' => 'pushNotification',
        'pushNotification' => 'pushNotification',
        'PushNotification' => 'pushNotification',
        'push_notification_subscription' => 'pushNotificationSubscription',
        'pushNotificationSubscription' => 'pushNotificationSubscription',
        'PushNotificationSubscription' => 'pushNotificationSubscription',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_PUSH_NOTIFICATION_SUBSCRIPTION_DELIVERY_LOG => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_push_notification_subscription_delivery_log',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::PUSH_NOTIFICATION => [
            'type' => 'Generated\Shared\Transfer\PushNotificationTransfer',
            'type_shim' => null,
            'name_underscore' => 'push_notification',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::PUSH_NOTIFICATION_SUBSCRIPTION => [
            'type' => 'Generated\Shared\Transfer\PushNotificationSubscriptionTransfer',
            'type_shim' => null,
            'name_underscore' => 'push_notification_subscription',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
    ];

    /**
     * @module PushNotificationWebPushPhp|PushNotification
     *
     * @param int|null $idPushNotificationSubscriptionDeliveryLog
     *
     * @return $this
     */
    public function setIdPushNotificationSubscriptionDeliveryLog(?int $idPushNotificationSubscriptionDeliveryLog = null)
    {
        $this->idPushNotificationSubscriptionDeliveryLog = $idPushNotificationSubscriptionDeliveryLog;
        $this->modifiedProperties[self::ID_PUSH_NOTIFICATION_SUBSCRIPTION_DELIVERY_LOG] = true;

        return $this;
    }

    /**
     * @module PushNotificationWebPushPhp|PushNotification
     *
     * @return int|null
     */
    public function getIdPushNotificationSubscriptionDeliveryLog(): ?int
    {
        return $this->idPushNotificationSubscriptionDeliveryLog;
    }

    /**
     * @module PushNotificationWebPushPhp|PushNotification
     *
     * @param int $idPushNotificationSubscriptionDeliveryLog
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdPushNotificationSubscriptionDeliveryLogOrFail(int $idPushNotificationSubscriptionDeliveryLog)
    {
        return $this->setIdPushNotificationSubscriptionDeliveryLog($idPushNotificationSubscriptionDeliveryLog);
    }

    /**
     * @module PushNotificationWebPushPhp|PushNotification
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdPushNotificationSubscriptionDeliveryLogOrFail(): int
    {
        if ($this->idPushNotificationSubscriptionDeliveryLog === null) {
            $this->throwNullValueException(static::ID_PUSH_NOTIFICATION_SUBSCRIPTION_DELIVERY_LOG);
        }

        return $this->idPushNotificationSubscriptionDeliveryLog;
    }

    /**
     * @module PushNotificationWebPushPhp|PushNotification
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdPushNotificationSubscriptionDeliveryLog()
    {
        $this->assertPropertyIsSet(self::ID_PUSH_NOTIFICATION_SUBSCRIPTION_DELIVERY_LOG);

        return $this;
    }

    /**
     * @module PushNotificationWebPushPhp|PushNotification
     *
     * @param \Generated\Shared\Transfer\PushNotificationTransfer|null $pushNotification
     *
     * @return $this
     */
    public function setPushNotification(?PushNotificationTransfer $pushNotification = null)
    {
        $this->pushNotification = $pushNotification;
        $this->modifiedProperties[self::PUSH_NOTIFICATION] = true;

        return $this;
    }

    /**
     * @module PushNotificationWebPushPhp|PushNotification
     *
     * @return \Generated\Shared\Transfer\PushNotificationTransfer|null
     */
    public function getPushNotification(): ?PushNotificationTransfer
    {
        return $this->pushNotification;
    }

    /**
     * @module PushNotificationWebPushPhp|PushNotification
     *
     * @param \Generated\Shared\Transfer\PushNotificationTransfer $pushNotification
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPushNotificationOrFail(PushNotificationTransfer $pushNotification)
    {
        return $this->setPushNotification($pushNotification);
    }

    /**
     * @module PushNotificationWebPushPhp|PushNotification
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\PushNotificationTransfer
     */
    public function getPushNotificationOrFail(): PushNotificationTransfer
    {
        if ($this->pushNotification === null) {
            $this->throwNullValueException(static::PUSH_NOTIFICATION);
        }

        return $this->pushNotification;
    }

    /**
     * @module PushNotificationWebPushPhp|PushNotification
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePushNotification()
    {
        $this->assertPropertyIsSet(self::PUSH_NOTIFICATION);

        return $this;
    }

    /**
     * @module PushNotificationWebPushPhp|PushNotification
     *
     * @param \Generated\Shared\Transfer\PushNotificationSubscriptionTransfer|null $pushNotificationSubscription
     *
     * @return $this
     */
    public function setPushNotificationSubscription(?PushNotificationSubscriptionTransfer $pushNotificationSubscription = null)
    {
        $this->pushNotificationSubscription = $pushNotificationSubscription;
        $this->modifiedProperties[self::PUSH_NOTIFICATION_SUBSCRIPTION] = true;

        return $this;
    }

    /**
     * @module PushNotificationWebPushPhp|PushNotification
     *
     * @return \Generated\Shared\Transfer\PushNotificationSubscriptionTransfer|null
     */
    public function getPushNotificationSubscription(): ?PushNotificationSubscriptionTransfer
    {
        return $this->pushNotificationSubscription;
    }

    /**
     * @module PushNotificationWebPushPhp|PushNotification
     *
     * @param \Generated\Shared\Transfer\PushNotificationSubscriptionTransfer $pushNotificationSubscription
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPushNotificationSubscriptionOrFail(PushNotificationSubscriptionTransfer $pushNotificationSubscription)
    {
        return $this->setPushNotificationSubscription($pushNotificationSubscription);
    }

    /**
     * @module PushNotificationWebPushPhp|PushNotification
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\PushNotificationSubscriptionTransfer
     */
    public function getPushNotificationSubscriptionOrFail(): PushNotificationSubscriptionTransfer
    {
        if ($this->pushNotificationSubscription === null) {
            $this->throwNullValueException(static::PUSH_NOTIFICATION_SUBSCRIPTION);
        }

        return $this->pushNotificationSubscription;
    }

    /**
     * @module PushNotificationWebPushPhp|PushNotification
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePushNotificationSubscription()
    {
        $this->assertPropertyIsSet(self::PUSH_NOTIFICATION_SUBSCRIPTION);

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
                case 'idPushNotificationSubscriptionDeliveryLog':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'pushNotification':
                case 'pushNotificationSubscription':
                    if (is_array($value)) {
                        $type = $this->transferMetadata[$normalizedPropertyName]['type'];
                        /** @var \Spryker\Shared\Kernel\Transfer\TransferInterface $value */
                        $value = (new $type())->fromArray($value, $ignoreMissingProperty);
                    }

                    if ($value !== null && $this->isPropertyStrict($normalizedPropertyName)) {
                        $this->assertInstanceOfTransfer($normalizedPropertyName, $value);
                    }
                    $this->$normalizedPropertyName = $value;
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
                case 'idPushNotificationSubscriptionDeliveryLog':
                    $values[$arrayKey] = $value;

                    break;
                case 'pushNotification':
                case 'pushNotificationSubscription':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

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
                case 'idPushNotificationSubscriptionDeliveryLog':
                    $values[$arrayKey] = $value;

                    break;
                case 'pushNotification':
                case 'pushNotificationSubscription':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

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
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idPushNotificationSubscriptionDeliveryLog' => $this->idPushNotificationSubscriptionDeliveryLog,
            'pushNotification' => $this->pushNotification,
            'pushNotificationSubscription' => $this->pushNotificationSubscription,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_push_notification_subscription_delivery_log' => $this->idPushNotificationSubscriptionDeliveryLog,
            'push_notification' => $this->pushNotification,
            'push_notification_subscription' => $this->pushNotificationSubscription,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_push_notification_subscription_delivery_log' => $this->idPushNotificationSubscriptionDeliveryLog instanceof AbstractTransfer ? $this->idPushNotificationSubscriptionDeliveryLog->toArray(true, false) : $this->idPushNotificationSubscriptionDeliveryLog,
            'push_notification' => $this->pushNotification instanceof AbstractTransfer ? $this->pushNotification->toArray(true, false) : $this->pushNotification,
            'push_notification_subscription' => $this->pushNotificationSubscription instanceof AbstractTransfer ? $this->pushNotificationSubscription->toArray(true, false) : $this->pushNotificationSubscription,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idPushNotificationSubscriptionDeliveryLog' => $this->idPushNotificationSubscriptionDeliveryLog instanceof AbstractTransfer ? $this->idPushNotificationSubscriptionDeliveryLog->toArray(true, true) : $this->idPushNotificationSubscriptionDeliveryLog,
            'pushNotification' => $this->pushNotification instanceof AbstractTransfer ? $this->pushNotification->toArray(true, true) : $this->pushNotification,
            'pushNotificationSubscription' => $this->pushNotificationSubscription instanceof AbstractTransfer ? $this->pushNotificationSubscription->toArray(true, true) : $this->pushNotificationSubscription,
        ];
    }
}
