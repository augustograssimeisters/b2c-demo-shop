<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use Spryker\Shared\Kernel\Transfer\AbstractTransfer;
use Spryker\Shared\Kernel\Transfer\AbstractEntityTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class SpyPushNotificationSubscriptionDeliveryLogEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_PUSH_NOTIFICATION_SUBSCRIPTION_DELIVERY_LOG = 'idPushNotificationSubscriptionDeliveryLog';

    /**
     * @var string
     */
    public const FK_PUSH_NOTIFICATION = 'fkPushNotification';

    /**
     * @var string
     */
    public const FK_PUSH_NOTIFICATION_SUBSCRIPTION = 'fkPushNotificationSubscription';

    /**
     * @var string
     */
    public const SPY_PUSH_NOTIFICATION = 'spyPushNotification';

    /**
     * @var string
     */
    public const SPY_PUSH_NOTIFICATION_SUBSCRIPTION = 'spyPushNotificationSubscription';

    /**
     * @var integer|null
     */
    protected $idPushNotificationSubscriptionDeliveryLog;

    /**
     * @var integer|null
     */
    protected $fkPushNotification;

    /**
     * @var integer|null
     */
    protected $fkPushNotificationSubscription;

    /**
     * @var \Generated\Shared\Transfer\SpyPushNotificationEntityTransfer|null
     */
    protected $spyPushNotification;

    /**
     * @var \Generated\Shared\Transfer\SpyPushNotificationSubscriptionEntityTransfer|null
     */
    protected $spyPushNotificationSubscription;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_push_notification_subscription_delivery_log' => 'idPushNotificationSubscriptionDeliveryLog',
        'idPushNotificationSubscriptionDeliveryLog' => 'idPushNotificationSubscriptionDeliveryLog',
        'IdPushNotificationSubscriptionDeliveryLog' => 'idPushNotificationSubscriptionDeliveryLog',
        'fk_push_notification' => 'fkPushNotification',
        'fkPushNotification' => 'fkPushNotification',
        'FkPushNotification' => 'fkPushNotification',
        'fk_push_notification_subscription' => 'fkPushNotificationSubscription',
        'fkPushNotificationSubscription' => 'fkPushNotificationSubscription',
        'FkPushNotificationSubscription' => 'fkPushNotificationSubscription',
        'spy_push_notification' => 'spyPushNotification',
        'spyPushNotification' => 'spyPushNotification',
        'SpyPushNotification' => 'spyPushNotification',
        'spy_push_notification_subscription' => 'spyPushNotificationSubscription',
        'spyPushNotificationSubscription' => 'spyPushNotificationSubscription',
        'SpyPushNotificationSubscription' => 'spyPushNotificationSubscription',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_PUSH_NOTIFICATION_SUBSCRIPTION_DELIVERY_LOG => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_push_notification_subscription_delivery_log',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_PUSH_NOTIFICATION => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_push_notification',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_PUSH_NOTIFICATION_SUBSCRIPTION => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_push_notification_subscription',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PUSH_NOTIFICATION => [
            'type' => 'Generated\Shared\Transfer\SpyPushNotificationEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_push_notification',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PUSH_NOTIFICATION_SUBSCRIPTION => [
            'type' => 'Generated\Shared\Transfer\SpyPushNotificationSubscriptionEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_push_notification_subscription',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
    ];
    /**
     * @var string
     */
    public static $entityNamespace = 'Orm\Zed\PushNotification\Persistence\SpyPushNotificationSubscriptionDeliveryLog';


    /**
     * @module 
     *
     * @param integer|null $idPushNotificationSubscriptionDeliveryLog
     *
     * @return $this
     */
    public function setIdPushNotificationSubscriptionDeliveryLog($idPushNotificationSubscriptionDeliveryLog)
    {
        $this->idPushNotificationSubscriptionDeliveryLog = $idPushNotificationSubscriptionDeliveryLog;
        $this->modifiedProperties[self::ID_PUSH_NOTIFICATION_SUBSCRIPTION_DELIVERY_LOG] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdPushNotificationSubscriptionDeliveryLog()
    {
        return $this->idPushNotificationSubscriptionDeliveryLog;
    }

    /**
     * @module 
     *
     * @param integer|null $idPushNotificationSubscriptionDeliveryLog
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdPushNotificationSubscriptionDeliveryLogOrFail($idPushNotificationSubscriptionDeliveryLog)
    {
        if ($idPushNotificationSubscriptionDeliveryLog === null) {
            $this->throwNullValueException(static::ID_PUSH_NOTIFICATION_SUBSCRIPTION_DELIVERY_LOG);
        }

        return $this->setIdPushNotificationSubscriptionDeliveryLog($idPushNotificationSubscriptionDeliveryLog);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdPushNotificationSubscriptionDeliveryLogOrFail()
    {
        if ($this->idPushNotificationSubscriptionDeliveryLog === null) {
            $this->throwNullValueException(static::ID_PUSH_NOTIFICATION_SUBSCRIPTION_DELIVERY_LOG);
        }

        return $this->idPushNotificationSubscriptionDeliveryLog;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param integer|null $fkPushNotification
     *
     * @return $this
     */
    public function setFkPushNotification($fkPushNotification)
    {
        $this->fkPushNotification = $fkPushNotification;
        $this->modifiedProperties[self::FK_PUSH_NOTIFICATION] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkPushNotification()
    {
        return $this->fkPushNotification;
    }

    /**
     * @module 
     *
     * @param integer|null $fkPushNotification
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkPushNotificationOrFail($fkPushNotification)
    {
        if ($fkPushNotification === null) {
            $this->throwNullValueException(static::FK_PUSH_NOTIFICATION);
        }

        return $this->setFkPushNotification($fkPushNotification);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkPushNotificationOrFail()
    {
        if ($this->fkPushNotification === null) {
            $this->throwNullValueException(static::FK_PUSH_NOTIFICATION);
        }

        return $this->fkPushNotification;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkPushNotification()
    {
        $this->assertPropertyIsSet(self::FK_PUSH_NOTIFICATION);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkPushNotificationSubscription
     *
     * @return $this
     */
    public function setFkPushNotificationSubscription($fkPushNotificationSubscription)
    {
        $this->fkPushNotificationSubscription = $fkPushNotificationSubscription;
        $this->modifiedProperties[self::FK_PUSH_NOTIFICATION_SUBSCRIPTION] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkPushNotificationSubscription()
    {
        return $this->fkPushNotificationSubscription;
    }

    /**
     * @module 
     *
     * @param integer|null $fkPushNotificationSubscription
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkPushNotificationSubscriptionOrFail($fkPushNotificationSubscription)
    {
        if ($fkPushNotificationSubscription === null) {
            $this->throwNullValueException(static::FK_PUSH_NOTIFICATION_SUBSCRIPTION);
        }

        return $this->setFkPushNotificationSubscription($fkPushNotificationSubscription);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkPushNotificationSubscriptionOrFail()
    {
        if ($this->fkPushNotificationSubscription === null) {
            $this->throwNullValueException(static::FK_PUSH_NOTIFICATION_SUBSCRIPTION);
        }

        return $this->fkPushNotificationSubscription;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkPushNotificationSubscription()
    {
        $this->assertPropertyIsSet(self::FK_PUSH_NOTIFICATION_SUBSCRIPTION);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyPushNotificationEntityTransfer|null $spyPushNotification
     *
     * @return $this
     */
    public function setSpyPushNotification(SpyPushNotificationEntityTransfer $spyPushNotification = null)
    {
        $this->spyPushNotification = $spyPushNotification;
        $this->modifiedProperties[self::SPY_PUSH_NOTIFICATION] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyPushNotificationEntityTransfer|null
     */
    public function getSpyPushNotification()
    {
        return $this->spyPushNotification;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyPushNotificationEntityTransfer $spyPushNotification
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyPushNotificationOrFail(SpyPushNotificationEntityTransfer $spyPushNotification)
    {
        return $this->setSpyPushNotification($spyPushNotification);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyPushNotificationEntityTransfer
     */
    public function getSpyPushNotificationOrFail()
    {
        if ($this->spyPushNotification === null) {
            $this->throwNullValueException(static::SPY_PUSH_NOTIFICATION);
        }

        return $this->spyPushNotification;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyPushNotification()
    {
        $this->assertPropertyIsSet(self::SPY_PUSH_NOTIFICATION);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyPushNotificationSubscriptionEntityTransfer|null $spyPushNotificationSubscription
     *
     * @return $this
     */
    public function setSpyPushNotificationSubscription(SpyPushNotificationSubscriptionEntityTransfer $spyPushNotificationSubscription = null)
    {
        $this->spyPushNotificationSubscription = $spyPushNotificationSubscription;
        $this->modifiedProperties[self::SPY_PUSH_NOTIFICATION_SUBSCRIPTION] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyPushNotificationSubscriptionEntityTransfer|null
     */
    public function getSpyPushNotificationSubscription()
    {
        return $this->spyPushNotificationSubscription;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyPushNotificationSubscriptionEntityTransfer $spyPushNotificationSubscription
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyPushNotificationSubscriptionOrFail(SpyPushNotificationSubscriptionEntityTransfer $spyPushNotificationSubscription)
    {
        return $this->setSpyPushNotificationSubscription($spyPushNotificationSubscription);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyPushNotificationSubscriptionEntityTransfer
     */
    public function getSpyPushNotificationSubscriptionOrFail()
    {
        if ($this->spyPushNotificationSubscription === null) {
            $this->throwNullValueException(static::SPY_PUSH_NOTIFICATION_SUBSCRIPTION);
        }

        return $this->spyPushNotificationSubscription;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyPushNotificationSubscription()
    {
        $this->assertPropertyIsSet(self::SPY_PUSH_NOTIFICATION_SUBSCRIPTION);

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
                case 'fkPushNotification':
                case 'fkPushNotificationSubscription':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyPushNotification':
                case 'spyPushNotificationSubscription':
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
                    $this->virtualProperties[$property] = $value;
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
                case 'fkPushNotification':
                case 'fkPushNotificationSubscription':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyPushNotification':
                case 'spyPushNotificationSubscription':
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
                case 'fkPushNotification':
                case 'fkPushNotificationSubscription':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyPushNotification':
                case 'spyPushNotificationSubscription':
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
            'fkPushNotification' => $this->fkPushNotification,
            'fkPushNotificationSubscription' => $this->fkPushNotificationSubscription,
            'spyPushNotification' => $this->spyPushNotification,
            'spyPushNotificationSubscription' => $this->spyPushNotificationSubscription,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_push_notification_subscription_delivery_log' => $this->idPushNotificationSubscriptionDeliveryLog,
            'fk_push_notification' => $this->fkPushNotification,
            'fk_push_notification_subscription' => $this->fkPushNotificationSubscription,
            'spy_push_notification' => $this->spyPushNotification,
            'spy_push_notification_subscription' => $this->spyPushNotificationSubscription,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_push_notification_subscription_delivery_log' => $this->idPushNotificationSubscriptionDeliveryLog instanceof AbstractTransfer ? $this->idPushNotificationSubscriptionDeliveryLog->toArray(true, false) : $this->idPushNotificationSubscriptionDeliveryLog,
            'fk_push_notification' => $this->fkPushNotification instanceof AbstractTransfer ? $this->fkPushNotification->toArray(true, false) : $this->fkPushNotification,
            'fk_push_notification_subscription' => $this->fkPushNotificationSubscription instanceof AbstractTransfer ? $this->fkPushNotificationSubscription->toArray(true, false) : $this->fkPushNotificationSubscription,
            'spy_push_notification' => $this->spyPushNotification instanceof AbstractTransfer ? $this->spyPushNotification->toArray(true, false) : $this->spyPushNotification,
            'spy_push_notification_subscription' => $this->spyPushNotificationSubscription instanceof AbstractTransfer ? $this->spyPushNotificationSubscription->toArray(true, false) : $this->spyPushNotificationSubscription,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idPushNotificationSubscriptionDeliveryLog' => $this->idPushNotificationSubscriptionDeliveryLog instanceof AbstractTransfer ? $this->idPushNotificationSubscriptionDeliveryLog->toArray(true, true) : $this->idPushNotificationSubscriptionDeliveryLog,
            'fkPushNotification' => $this->fkPushNotification instanceof AbstractTransfer ? $this->fkPushNotification->toArray(true, true) : $this->fkPushNotification,
            'fkPushNotificationSubscription' => $this->fkPushNotificationSubscription instanceof AbstractTransfer ? $this->fkPushNotificationSubscription->toArray(true, true) : $this->fkPushNotificationSubscription,
            'spyPushNotification' => $this->spyPushNotification instanceof AbstractTransfer ? $this->spyPushNotification->toArray(true, true) : $this->spyPushNotification,
            'spyPushNotificationSubscription' => $this->spyPushNotificationSubscription instanceof AbstractTransfer ? $this->spyPushNotificationSubscription->toArray(true, true) : $this->spyPushNotificationSubscription,
        ];
    }
}
