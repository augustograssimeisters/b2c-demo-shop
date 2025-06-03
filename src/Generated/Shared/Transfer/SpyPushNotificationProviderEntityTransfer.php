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
class SpyPushNotificationProviderEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_PUSH_NOTIFICATION_PROVIDER = 'idPushNotificationProvider';

    /**
     * @var string
     */
    public const UUID = 'uuid';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const SPY_PUSH_NOTIFICATIONS = 'spyPushNotifications';

    /**
     * @var string
     */
    public const SPY_PUSH_NOTIFICATION_SUBSCRIPTIONS = 'spyPushNotificationSubscriptions';

    /**
     * @var integer|null
     */
    protected $idPushNotificationProvider;

    /**
     * @var string|null
     */
    protected $uuid;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\SpyPushNotificationEntityTransfer>
     */
    protected $spyPushNotifications;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\SpyPushNotificationSubscriptionEntityTransfer>
     */
    protected $spyPushNotificationSubscriptions;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_push_notification_provider' => 'idPushNotificationProvider',
        'idPushNotificationProvider' => 'idPushNotificationProvider',
        'IdPushNotificationProvider' => 'idPushNotificationProvider',
        'uuid' => 'uuid',
        'Uuid' => 'uuid',
        'name' => 'name',
        'Name' => 'name',
        'spy_push_notifications' => 'spyPushNotifications',
        'spyPushNotifications' => 'spyPushNotifications',
        'SpyPushNotifications' => 'spyPushNotifications',
        'spy_push_notification_subscriptions' => 'spyPushNotificationSubscriptions',
        'spyPushNotificationSubscriptions' => 'spyPushNotificationSubscriptions',
        'SpyPushNotificationSubscriptions' => 'spyPushNotificationSubscriptions',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_PUSH_NOTIFICATION_PROVIDER => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_push_notification_provider',
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
        self::NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PUSH_NOTIFICATIONS => [
            'type' => 'Generated\Shared\Transfer\SpyPushNotificationEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_push_notifications',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PUSH_NOTIFICATION_SUBSCRIPTIONS => [
            'type' => 'Generated\Shared\Transfer\SpyPushNotificationSubscriptionEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_push_notification_subscriptions',
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
    public static $entityNamespace = 'Orm\Zed\PushNotification\Persistence\SpyPushNotificationProvider';


    /**
     * @module 
     *
     * @param integer|null $idPushNotificationProvider
     *
     * @return $this
     */
    public function setIdPushNotificationProvider($idPushNotificationProvider)
    {
        $this->idPushNotificationProvider = $idPushNotificationProvider;
        $this->modifiedProperties[self::ID_PUSH_NOTIFICATION_PROVIDER] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdPushNotificationProvider()
    {
        return $this->idPushNotificationProvider;
    }

    /**
     * @module 
     *
     * @param integer|null $idPushNotificationProvider
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdPushNotificationProviderOrFail($idPushNotificationProvider)
    {
        if ($idPushNotificationProvider === null) {
            $this->throwNullValueException(static::ID_PUSH_NOTIFICATION_PROVIDER);
        }

        return $this->setIdPushNotificationProvider($idPushNotificationProvider);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdPushNotificationProviderOrFail()
    {
        if ($this->idPushNotificationProvider === null) {
            $this->throwNullValueException(static::ID_PUSH_NOTIFICATION_PROVIDER);
        }

        return $this->idPushNotificationProvider;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdPushNotificationProvider()
    {
        $this->assertPropertyIsSet(self::ID_PUSH_NOTIFICATION_PROVIDER);

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
     * @param string|null $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        $this->modifiedProperties[self::NAME] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module 
     *
     * @param string|null $name
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNameOrFail($name)
    {
        if ($name === null) {
            $this->throwNullValueException(static::NAME);
        }

        return $this->setName($name);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getNameOrFail()
    {
        if ($this->name === null) {
            $this->throwNullValueException(static::NAME);
        }

        return $this->name;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireName()
    {
        $this->assertPropertyIsSet(self::NAME);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\SpyPushNotificationEntityTransfer> $spyPushNotifications
     *
     * @return $this
     */
    public function setSpyPushNotifications(ArrayObject $spyPushNotifications)
    {
        $this->spyPushNotifications = $spyPushNotifications;
        $this->modifiedProperties[self::SPY_PUSH_NOTIFICATIONS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\SpyPushNotificationEntityTransfer>
     */
    public function getSpyPushNotifications()
    {
        return $this->spyPushNotifications;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyPushNotificationEntityTransfer $spyPushNotifications
     *
     * @return $this
     */
    public function addSpyPushNotifications(SpyPushNotificationEntityTransfer $spyPushNotifications)
    {
        $this->spyPushNotifications[] = $spyPushNotifications;
        $this->modifiedProperties[self::SPY_PUSH_NOTIFICATIONS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyPushNotifications()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PUSH_NOTIFICATIONS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\SpyPushNotificationSubscriptionEntityTransfer> $spyPushNotificationSubscriptions
     *
     * @return $this
     */
    public function setSpyPushNotificationSubscriptions(ArrayObject $spyPushNotificationSubscriptions)
    {
        $this->spyPushNotificationSubscriptions = $spyPushNotificationSubscriptions;
        $this->modifiedProperties[self::SPY_PUSH_NOTIFICATION_SUBSCRIPTIONS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\SpyPushNotificationSubscriptionEntityTransfer>
     */
    public function getSpyPushNotificationSubscriptions()
    {
        return $this->spyPushNotificationSubscriptions;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyPushNotificationSubscriptionEntityTransfer $spyPushNotificationSubscriptions
     *
     * @return $this
     */
    public function addSpyPushNotificationSubscriptions(SpyPushNotificationSubscriptionEntityTransfer $spyPushNotificationSubscriptions)
    {
        $this->spyPushNotificationSubscriptions[] = $spyPushNotificationSubscriptions;
        $this->modifiedProperties[self::SPY_PUSH_NOTIFICATION_SUBSCRIPTIONS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyPushNotificationSubscriptions()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PUSH_NOTIFICATION_SUBSCRIPTIONS);

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
                case 'idPushNotificationProvider':
                case 'uuid':
                case 'name':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyPushNotifications':
                case 'spyPushNotificationSubscriptions':
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
                case 'idPushNotificationProvider':
                case 'uuid':
                case 'name':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyPushNotifications':
                case 'spyPushNotificationSubscriptions':
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
                case 'idPushNotificationProvider':
                case 'uuid':
                case 'name':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyPushNotifications':
                case 'spyPushNotificationSubscriptions':
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
        $this->spyPushNotifications = $this->spyPushNotifications ?: new ArrayObject();
        $this->spyPushNotificationSubscriptions = $this->spyPushNotificationSubscriptions ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idPushNotificationProvider' => $this->idPushNotificationProvider,
            'uuid' => $this->uuid,
            'name' => $this->name,
            'spyPushNotifications' => $this->spyPushNotifications,
            'spyPushNotificationSubscriptions' => $this->spyPushNotificationSubscriptions,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_push_notification_provider' => $this->idPushNotificationProvider,
            'uuid' => $this->uuid,
            'name' => $this->name,
            'spy_push_notifications' => $this->spyPushNotifications,
            'spy_push_notification_subscriptions' => $this->spyPushNotificationSubscriptions,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_push_notification_provider' => $this->idPushNotificationProvider instanceof AbstractTransfer ? $this->idPushNotificationProvider->toArray(true, false) : $this->idPushNotificationProvider,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, false) : $this->uuid,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'spy_push_notifications' => $this->spyPushNotifications instanceof AbstractTransfer ? $this->spyPushNotifications->toArray(true, false) : $this->addValuesToCollection($this->spyPushNotifications, true, false),
            'spy_push_notification_subscriptions' => $this->spyPushNotificationSubscriptions instanceof AbstractTransfer ? $this->spyPushNotificationSubscriptions->toArray(true, false) : $this->addValuesToCollection($this->spyPushNotificationSubscriptions, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idPushNotificationProvider' => $this->idPushNotificationProvider instanceof AbstractTransfer ? $this->idPushNotificationProvider->toArray(true, true) : $this->idPushNotificationProvider,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, true) : $this->uuid,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'spyPushNotifications' => $this->spyPushNotifications instanceof AbstractTransfer ? $this->spyPushNotifications->toArray(true, true) : $this->addValuesToCollection($this->spyPushNotifications, true, true),
            'spyPushNotificationSubscriptions' => $this->spyPushNotificationSubscriptions instanceof AbstractTransfer ? $this->spyPushNotificationSubscriptions->toArray(true, true) : $this->addValuesToCollection($this->spyPushNotificationSubscriptions, true, true),
        ];
    }
}
