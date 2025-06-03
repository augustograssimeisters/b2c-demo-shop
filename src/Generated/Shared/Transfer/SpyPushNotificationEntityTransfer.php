<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use ArrayObject;
use Spryker\Shared\Kernel\Transfer\AbstractTransfer;
use Spryker\Shared\Kernel\Transfer\AbstractEntityTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class SpyPushNotificationEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_PUSH_NOTIFICATION = 'idPushNotification';

    /**
     * @var string
     */
    public const UUID = 'uuid';

    /**
     * @var string
     */
    public const FK_PUSH_NOTIFICATION_GROUP = 'fkPushNotificationGroup';

    /**
     * @var string
     */
    public const FK_PUSH_NOTIFICATION_PROVIDER = 'fkPushNotificationProvider';

    /**
     * @var string
     */
    public const PAYLOAD = 'payload';

    /**
     * @var string
     */
    public const SPY_PUSH_NOTIFICATION_GROUP = 'spyPushNotificationGroup';

    /**
     * @var string
     */
    public const SPY_PUSH_NOTIFICATION_PROVIDER = 'spyPushNotificationProvider';

    /**
     * @var string
     */
    public const SPY_PUSH_NOTIFICATION_SUBSCRIPTION_DELIVERY_LOGS = 'spyPushNotificationSubscriptionDeliveryLogs';

    /**
     * @var integer|null
     */
    protected $idPushNotification;

    /**
     * @var string|null
     */
    protected $uuid;

    /**
     * @var integer|null
     */
    protected $fkPushNotificationGroup;

    /**
     * @var integer|null
     */
    protected $fkPushNotificationProvider;

    /**
     * @var string|null
     */
    protected $payload;

    /**
     * @var \Generated\Shared\Transfer\SpyPushNotificationGroupEntityTransfer|null
     */
    protected $spyPushNotificationGroup;

    /**
     * @var \Generated\Shared\Transfer\SpyPushNotificationProviderEntityTransfer|null
     */
    protected $spyPushNotificationProvider;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\SpyPushNotificationSubscriptionDeliveryLogEntityTransfer>
     */
    protected $spyPushNotificationSubscriptionDeliveryLogs;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_push_notification' => 'idPushNotification',
        'idPushNotification' => 'idPushNotification',
        'IdPushNotification' => 'idPushNotification',
        'uuid' => 'uuid',
        'Uuid' => 'uuid',
        'fk_push_notification_group' => 'fkPushNotificationGroup',
        'fkPushNotificationGroup' => 'fkPushNotificationGroup',
        'FkPushNotificationGroup' => 'fkPushNotificationGroup',
        'fk_push_notification_provider' => 'fkPushNotificationProvider',
        'fkPushNotificationProvider' => 'fkPushNotificationProvider',
        'FkPushNotificationProvider' => 'fkPushNotificationProvider',
        'payload' => 'payload',
        'Payload' => 'payload',
        'spy_push_notification_group' => 'spyPushNotificationGroup',
        'spyPushNotificationGroup' => 'spyPushNotificationGroup',
        'SpyPushNotificationGroup' => 'spyPushNotificationGroup',
        'spy_push_notification_provider' => 'spyPushNotificationProvider',
        'spyPushNotificationProvider' => 'spyPushNotificationProvider',
        'SpyPushNotificationProvider' => 'spyPushNotificationProvider',
        'spy_push_notification_subscription_delivery_logs' => 'spyPushNotificationSubscriptionDeliveryLogs',
        'spyPushNotificationSubscriptionDeliveryLogs' => 'spyPushNotificationSubscriptionDeliveryLogs',
        'SpyPushNotificationSubscriptionDeliveryLogs' => 'spyPushNotificationSubscriptionDeliveryLogs',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_PUSH_NOTIFICATION => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_push_notification',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::UUID => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'uuid',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_PUSH_NOTIFICATION_GROUP => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_push_notification_group',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_PUSH_NOTIFICATION_PROVIDER => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_push_notification_provider',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PAYLOAD => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'payload',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PUSH_NOTIFICATION_GROUP => [
            'type' => 'Generated\Shared\Transfer\SpyPushNotificationGroupEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_push_notification_group',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PUSH_NOTIFICATION_PROVIDER => [
            'type' => 'Generated\Shared\Transfer\SpyPushNotificationProviderEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_push_notification_provider',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PUSH_NOTIFICATION_SUBSCRIPTION_DELIVERY_LOGS => [
            'type' => 'Generated\Shared\Transfer\SpyPushNotificationSubscriptionDeliveryLogEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_push_notification_subscription_delivery_logs',
            'is_collection' => true,
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
    public static $entityNamespace = 'Orm\Zed\PushNotification\Persistence\SpyPushNotification';


    /**
     * @module 
     *
     * @param integer|null $idPushNotification
     *
     * @return $this
     */
    public function setIdPushNotification($idPushNotification)
    {
        $this->idPushNotification = $idPushNotification;
        $this->modifiedProperties[self::ID_PUSH_NOTIFICATION] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdPushNotification()
    {
        return $this->idPushNotification;
    }

    /**
     * @module 
     *
     * @param integer|null $idPushNotification
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdPushNotificationOrFail($idPushNotification)
    {
        if ($idPushNotification === null) {
            $this->throwNullValueException(static::ID_PUSH_NOTIFICATION);
        }

        return $this->setIdPushNotification($idPushNotification);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdPushNotificationOrFail()
    {
        if ($this->idPushNotification === null) {
            $this->throwNullValueException(static::ID_PUSH_NOTIFICATION);
        }

        return $this->idPushNotification;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdPushNotification()
    {
        $this->assertPropertyIsSet(self::ID_PUSH_NOTIFICATION);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $uuid
     *
     * @return $this
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;
        $this->modifiedProperties[self::UUID] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * @module 
     *
     * @param string|null $uuid
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUuidOrFail($uuid)
    {
        if ($uuid === null) {
            $this->throwNullValueException(static::UUID);
        }

        return $this->setUuid($uuid);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getUuidOrFail()
    {
        if ($this->uuid === null) {
            $this->throwNullValueException(static::UUID);
        }

        return $this->uuid;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUuid()
    {
        $this->assertPropertyIsSet(self::UUID);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkPushNotificationGroup
     *
     * @return $this
     */
    public function setFkPushNotificationGroup($fkPushNotificationGroup)
    {
        $this->fkPushNotificationGroup = $fkPushNotificationGroup;
        $this->modifiedProperties[self::FK_PUSH_NOTIFICATION_GROUP] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkPushNotificationGroup()
    {
        return $this->fkPushNotificationGroup;
    }

    /**
     * @module 
     *
     * @param integer|null $fkPushNotificationGroup
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkPushNotificationGroupOrFail($fkPushNotificationGroup)
    {
        if ($fkPushNotificationGroup === null) {
            $this->throwNullValueException(static::FK_PUSH_NOTIFICATION_GROUP);
        }

        return $this->setFkPushNotificationGroup($fkPushNotificationGroup);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkPushNotificationGroupOrFail()
    {
        if ($this->fkPushNotificationGroup === null) {
            $this->throwNullValueException(static::FK_PUSH_NOTIFICATION_GROUP);
        }

        return $this->fkPushNotificationGroup;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkPushNotificationGroup()
    {
        $this->assertPropertyIsSet(self::FK_PUSH_NOTIFICATION_GROUP);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkPushNotificationProvider
     *
     * @return $this
     */
    public function setFkPushNotificationProvider($fkPushNotificationProvider)
    {
        $this->fkPushNotificationProvider = $fkPushNotificationProvider;
        $this->modifiedProperties[self::FK_PUSH_NOTIFICATION_PROVIDER] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkPushNotificationProvider()
    {
        return $this->fkPushNotificationProvider;
    }

    /**
     * @module 
     *
     * @param integer|null $fkPushNotificationProvider
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkPushNotificationProviderOrFail($fkPushNotificationProvider)
    {
        if ($fkPushNotificationProvider === null) {
            $this->throwNullValueException(static::FK_PUSH_NOTIFICATION_PROVIDER);
        }

        return $this->setFkPushNotificationProvider($fkPushNotificationProvider);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkPushNotificationProviderOrFail()
    {
        if ($this->fkPushNotificationProvider === null) {
            $this->throwNullValueException(static::FK_PUSH_NOTIFICATION_PROVIDER);
        }

        return $this->fkPushNotificationProvider;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkPushNotificationProvider()
    {
        $this->assertPropertyIsSet(self::FK_PUSH_NOTIFICATION_PROVIDER);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $payload
     *
     * @return $this
     */
    public function setPayload($payload)
    {
        $this->payload = $payload;
        $this->modifiedProperties[self::PAYLOAD] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * @module 
     *
     * @param string|null $payload
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPayloadOrFail($payload)
    {
        if ($payload === null) {
            $this->throwNullValueException(static::PAYLOAD);
        }

        return $this->setPayload($payload);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getPayloadOrFail()
    {
        if ($this->payload === null) {
            $this->throwNullValueException(static::PAYLOAD);
        }

        return $this->payload;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePayload()
    {
        $this->assertPropertyIsSet(self::PAYLOAD);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyPushNotificationGroupEntityTransfer|null $spyPushNotificationGroup
     *
     * @return $this
     */
    public function setSpyPushNotificationGroup(SpyPushNotificationGroupEntityTransfer $spyPushNotificationGroup = null)
    {
        $this->spyPushNotificationGroup = $spyPushNotificationGroup;
        $this->modifiedProperties[self::SPY_PUSH_NOTIFICATION_GROUP] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyPushNotificationGroupEntityTransfer|null
     */
    public function getSpyPushNotificationGroup()
    {
        return $this->spyPushNotificationGroup;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyPushNotificationGroupEntityTransfer $spyPushNotificationGroup
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyPushNotificationGroupOrFail(SpyPushNotificationGroupEntityTransfer $spyPushNotificationGroup)
    {
        return $this->setSpyPushNotificationGroup($spyPushNotificationGroup);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyPushNotificationGroupEntityTransfer
     */
    public function getSpyPushNotificationGroupOrFail()
    {
        if ($this->spyPushNotificationGroup === null) {
            $this->throwNullValueException(static::SPY_PUSH_NOTIFICATION_GROUP);
        }

        return $this->spyPushNotificationGroup;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyPushNotificationGroup()
    {
        $this->assertPropertyIsSet(self::SPY_PUSH_NOTIFICATION_GROUP);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyPushNotificationProviderEntityTransfer|null $spyPushNotificationProvider
     *
     * @return $this
     */
    public function setSpyPushNotificationProvider(SpyPushNotificationProviderEntityTransfer $spyPushNotificationProvider = null)
    {
        $this->spyPushNotificationProvider = $spyPushNotificationProvider;
        $this->modifiedProperties[self::SPY_PUSH_NOTIFICATION_PROVIDER] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyPushNotificationProviderEntityTransfer|null
     */
    public function getSpyPushNotificationProvider()
    {
        return $this->spyPushNotificationProvider;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyPushNotificationProviderEntityTransfer $spyPushNotificationProvider
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyPushNotificationProviderOrFail(SpyPushNotificationProviderEntityTransfer $spyPushNotificationProvider)
    {
        return $this->setSpyPushNotificationProvider($spyPushNotificationProvider);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyPushNotificationProviderEntityTransfer
     */
    public function getSpyPushNotificationProviderOrFail()
    {
        if ($this->spyPushNotificationProvider === null) {
            $this->throwNullValueException(static::SPY_PUSH_NOTIFICATION_PROVIDER);
        }

        return $this->spyPushNotificationProvider;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyPushNotificationProvider()
    {
        $this->assertPropertyIsSet(self::SPY_PUSH_NOTIFICATION_PROVIDER);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\SpyPushNotificationSubscriptionDeliveryLogEntityTransfer> $spyPushNotificationSubscriptionDeliveryLogs
     *
     * @return $this
     */
    public function setSpyPushNotificationSubscriptionDeliveryLogs(ArrayObject $spyPushNotificationSubscriptionDeliveryLogs)
    {
        $this->spyPushNotificationSubscriptionDeliveryLogs = $spyPushNotificationSubscriptionDeliveryLogs;
        $this->modifiedProperties[self::SPY_PUSH_NOTIFICATION_SUBSCRIPTION_DELIVERY_LOGS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\SpyPushNotificationSubscriptionDeliveryLogEntityTransfer>
     */
    public function getSpyPushNotificationSubscriptionDeliveryLogs()
    {
        return $this->spyPushNotificationSubscriptionDeliveryLogs;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyPushNotificationSubscriptionDeliveryLogEntityTransfer $spyPushNotificationSubscriptionDeliveryLogs
     *
     * @return $this
     */
    public function addSpyPushNotificationSubscriptionDeliveryLogs(SpyPushNotificationSubscriptionDeliveryLogEntityTransfer $spyPushNotificationSubscriptionDeliveryLogs)
    {
        $this->spyPushNotificationSubscriptionDeliveryLogs[] = $spyPushNotificationSubscriptionDeliveryLogs;
        $this->modifiedProperties[self::SPY_PUSH_NOTIFICATION_SUBSCRIPTION_DELIVERY_LOGS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyPushNotificationSubscriptionDeliveryLogs()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PUSH_NOTIFICATION_SUBSCRIPTION_DELIVERY_LOGS);

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
                case 'idPushNotification':
                case 'uuid':
                case 'fkPushNotificationGroup':
                case 'fkPushNotificationProvider':
                case 'payload':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyPushNotificationGroup':
                case 'spyPushNotificationProvider':
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
                case 'spyPushNotificationSubscriptionDeliveryLogs':
                    $elementType = $this->transferMetadata[$normalizedPropertyName]['type'];
                    $this->$normalizedPropertyName = $this->processArrayObject($elementType, $value, $ignoreMissingProperty);
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
                case 'idPushNotification':
                case 'uuid':
                case 'fkPushNotificationGroup':
                case 'fkPushNotificationProvider':
                case 'payload':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyPushNotificationGroup':
                case 'spyPushNotificationProvider':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'spyPushNotificationSubscriptionDeliveryLogs':
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
                case 'idPushNotification':
                case 'uuid':
                case 'fkPushNotificationGroup':
                case 'fkPushNotificationProvider':
                case 'payload':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyPushNotificationGroup':
                case 'spyPushNotificationProvider':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'spyPushNotificationSubscriptionDeliveryLogs':
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
        $this->spyPushNotificationSubscriptionDeliveryLogs = $this->spyPushNotificationSubscriptionDeliveryLogs ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idPushNotification' => $this->idPushNotification,
            'uuid' => $this->uuid,
            'fkPushNotificationGroup' => $this->fkPushNotificationGroup,
            'fkPushNotificationProvider' => $this->fkPushNotificationProvider,
            'payload' => $this->payload,
            'spyPushNotificationGroup' => $this->spyPushNotificationGroup,
            'spyPushNotificationProvider' => $this->spyPushNotificationProvider,
            'spyPushNotificationSubscriptionDeliveryLogs' => $this->spyPushNotificationSubscriptionDeliveryLogs,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_push_notification' => $this->idPushNotification,
            'uuid' => $this->uuid,
            'fk_push_notification_group' => $this->fkPushNotificationGroup,
            'fk_push_notification_provider' => $this->fkPushNotificationProvider,
            'payload' => $this->payload,
            'spy_push_notification_group' => $this->spyPushNotificationGroup,
            'spy_push_notification_provider' => $this->spyPushNotificationProvider,
            'spy_push_notification_subscription_delivery_logs' => $this->spyPushNotificationSubscriptionDeliveryLogs,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_push_notification' => $this->idPushNotification instanceof AbstractTransfer ? $this->idPushNotification->toArray(true, false) : $this->idPushNotification,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, false) : $this->uuid,
            'fk_push_notification_group' => $this->fkPushNotificationGroup instanceof AbstractTransfer ? $this->fkPushNotificationGroup->toArray(true, false) : $this->fkPushNotificationGroup,
            'fk_push_notification_provider' => $this->fkPushNotificationProvider instanceof AbstractTransfer ? $this->fkPushNotificationProvider->toArray(true, false) : $this->fkPushNotificationProvider,
            'payload' => $this->payload instanceof AbstractTransfer ? $this->payload->toArray(true, false) : $this->payload,
            'spy_push_notification_group' => $this->spyPushNotificationGroup instanceof AbstractTransfer ? $this->spyPushNotificationGroup->toArray(true, false) : $this->spyPushNotificationGroup,
            'spy_push_notification_provider' => $this->spyPushNotificationProvider instanceof AbstractTransfer ? $this->spyPushNotificationProvider->toArray(true, false) : $this->spyPushNotificationProvider,
            'spy_push_notification_subscription_delivery_logs' => $this->spyPushNotificationSubscriptionDeliveryLogs instanceof AbstractTransfer ? $this->spyPushNotificationSubscriptionDeliveryLogs->toArray(true, false) : $this->addValuesToCollection($this->spyPushNotificationSubscriptionDeliveryLogs, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idPushNotification' => $this->idPushNotification instanceof AbstractTransfer ? $this->idPushNotification->toArray(true, true) : $this->idPushNotification,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, true) : $this->uuid,
            'fkPushNotificationGroup' => $this->fkPushNotificationGroup instanceof AbstractTransfer ? $this->fkPushNotificationGroup->toArray(true, true) : $this->fkPushNotificationGroup,
            'fkPushNotificationProvider' => $this->fkPushNotificationProvider instanceof AbstractTransfer ? $this->fkPushNotificationProvider->toArray(true, true) : $this->fkPushNotificationProvider,
            'payload' => $this->payload instanceof AbstractTransfer ? $this->payload->toArray(true, true) : $this->payload,
            'spyPushNotificationGroup' => $this->spyPushNotificationGroup instanceof AbstractTransfer ? $this->spyPushNotificationGroup->toArray(true, true) : $this->spyPushNotificationGroup,
            'spyPushNotificationProvider' => $this->spyPushNotificationProvider instanceof AbstractTransfer ? $this->spyPushNotificationProvider->toArray(true, true) : $this->spyPushNotificationProvider,
            'spyPushNotificationSubscriptionDeliveryLogs' => $this->spyPushNotificationSubscriptionDeliveryLogs instanceof AbstractTransfer ? $this->spyPushNotificationSubscriptionDeliveryLogs->toArray(true, true) : $this->addValuesToCollection($this->spyPushNotificationSubscriptionDeliveryLogs, true, true),
        ];
    }
}
