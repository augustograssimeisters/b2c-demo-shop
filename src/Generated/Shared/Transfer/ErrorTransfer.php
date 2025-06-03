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
class ErrorTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const MESSAGE = 'message';

    /**
     * @var string
     */
    public const PARAMETERS = 'parameters';

    /**
     * @var string
     */
    public const ENTITY_IDENTIFIER = 'entityIdentifier';

    /**
     * @var string|null
     */
    protected $message;

    /**
     * @var array
     */
    protected $parameters = [];

    /**
     * @var string|null
     */
    protected $entityIdentifier;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'message' => 'message',
        'Message' => 'message',
        'parameters' => 'parameters',
        'Parameters' => 'parameters',
        'entity_identifier' => 'entityIdentifier',
        'entityIdentifier' => 'entityIdentifier',
        'EntityIdentifier' => 'entityIdentifier',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::MESSAGE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'message',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PARAMETERS => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'parameters',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ENTITY_IDENTIFIER => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'entity_identifier',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
    ];

    /**
     * @module CheckoutPage|AnalyticsGui|ApiKeyGui|ApiKey|Category|DynamicEntityBackendApi|DynamicEntityGui|DynamicEntity|Payment|PickingListPushNotification|PickingList|PickingListsBackendApi|ProductConfiguration|PushNotificationWebPushPhp|PushNotification|PushNotificationsBackendApi|RuleEngine|ShipmentType|StoreContext|User|WarehouseUser|WarehouseUsersBackendApi
     *
     * @param string|null $message
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->message = $message;
        $this->modifiedProperties[self::MESSAGE] = true;

        return $this;
    }

    /**
     * @module CheckoutPage|AnalyticsGui|ApiKeyGui|ApiKey|Category|DynamicEntityBackendApi|DynamicEntityGui|DynamicEntity|Payment|PickingListPushNotification|PickingList|PickingListsBackendApi|ProductConfiguration|PushNotificationWebPushPhp|PushNotification|PushNotificationsBackendApi|RuleEngine|ShipmentType|StoreContext|User|WarehouseUser|WarehouseUsersBackendApi
     *
     * @return string|null
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @module CheckoutPage|AnalyticsGui|ApiKeyGui|ApiKey|Category|DynamicEntityBackendApi|DynamicEntityGui|DynamicEntity|Payment|PickingListPushNotification|PickingList|PickingListsBackendApi|ProductConfiguration|PushNotificationWebPushPhp|PushNotification|PushNotificationsBackendApi|RuleEngine|ShipmentType|StoreContext|User|WarehouseUser|WarehouseUsersBackendApi
     *
     * @param string|null $message
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setMessageOrFail($message)
    {
        if ($message === null) {
            $this->throwNullValueException(static::MESSAGE);
        }

        return $this->setMessage($message);
    }

    /**
     * @module CheckoutPage|AnalyticsGui|ApiKeyGui|ApiKey|Category|DynamicEntityBackendApi|DynamicEntityGui|DynamicEntity|Payment|PickingListPushNotification|PickingList|PickingListsBackendApi|ProductConfiguration|PushNotificationWebPushPhp|PushNotification|PushNotificationsBackendApi|RuleEngine|ShipmentType|StoreContext|User|WarehouseUser|WarehouseUsersBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getMessageOrFail()
    {
        if ($this->message === null) {
            $this->throwNullValueException(static::MESSAGE);
        }

        return $this->message;
    }

    /**
     * @module CheckoutPage|AnalyticsGui|ApiKeyGui|ApiKey|Category|DynamicEntityBackendApi|DynamicEntityGui|DynamicEntity|Payment|PickingListPushNotification|PickingList|PickingListsBackendApi|ProductConfiguration|PushNotificationWebPushPhp|PushNotification|PushNotificationsBackendApi|RuleEngine|ShipmentType|StoreContext|User|WarehouseUser|WarehouseUsersBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMessage()
    {
        $this->assertPropertyIsSet(self::MESSAGE);

        return $this;
    }

    /**
     * @module ApiKeyGui|ApiKey|Category|DynamicEntityBackendApi|DynamicEntityGui|DynamicEntity|Payment|PushNotification|PushNotificationsBackendApi|ShipmentType|StoreContext
     *
     * @param array|null $parameters
     *
     * @return $this
     */
    public function setParameters(array $parameters = null)
    {
        if ($parameters === null) {
            $parameters = [];
        }

        $this->parameters = $parameters;
        $this->modifiedProperties[self::PARAMETERS] = true;

        return $this;
    }

    /**
     * @module ApiKeyGui|ApiKey|Category|DynamicEntityBackendApi|DynamicEntityGui|DynamicEntity|Payment|PushNotification|PushNotificationsBackendApi|ShipmentType|StoreContext
     *
     * @return array
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * @module ApiKeyGui|ApiKey|Category|DynamicEntityBackendApi|DynamicEntityGui|DynamicEntity|Payment|PushNotification|PushNotificationsBackendApi|ShipmentType|StoreContext
     *
     * @param mixed $parameter
     *
     * @return $this
     */
    public function addParameter($parameter)
    {
        $this->parameters[] = $parameter;
        $this->modifiedProperties[self::PARAMETERS] = true;

        return $this;
    }

    /**
     * @module ApiKeyGui|ApiKey|Category|DynamicEntityBackendApi|DynamicEntityGui|DynamicEntity|Payment|PushNotification|PushNotificationsBackendApi|ShipmentType|StoreContext
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireParameters()
    {
        $this->assertPropertyIsSet(self::PARAMETERS);

        return $this;
    }

    /**
     * @module Category|DynamicEntityGui|DynamicEntity|Payment|PickingListPushNotification|PickingList|ProductConfiguration|PushNotificationWebPushPhp|PushNotification|RuleEngine|ShipmentType|StoreContext|User|WarehouseUser
     *
     * @param string|null $entityIdentifier
     *
     * @return $this
     */
    public function setEntityIdentifier($entityIdentifier)
    {
        $this->entityIdentifier = $entityIdentifier;
        $this->modifiedProperties[self::ENTITY_IDENTIFIER] = true;

        return $this;
    }

    /**
     * @module Category|DynamicEntityGui|DynamicEntity|Payment|PickingListPushNotification|PickingList|ProductConfiguration|PushNotificationWebPushPhp|PushNotification|RuleEngine|ShipmentType|StoreContext|User|WarehouseUser
     *
     * @return string|null
     */
    public function getEntityIdentifier()
    {
        return $this->entityIdentifier;
    }

    /**
     * @module Category|DynamicEntityGui|DynamicEntity|Payment|PickingListPushNotification|PickingList|ProductConfiguration|PushNotificationWebPushPhp|PushNotification|RuleEngine|ShipmentType|StoreContext|User|WarehouseUser
     *
     * @param string|null $entityIdentifier
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setEntityIdentifierOrFail($entityIdentifier)
    {
        if ($entityIdentifier === null) {
            $this->throwNullValueException(static::ENTITY_IDENTIFIER);
        }

        return $this->setEntityIdentifier($entityIdentifier);
    }

    /**
     * @module Category|DynamicEntityGui|DynamicEntity|Payment|PickingListPushNotification|PickingList|ProductConfiguration|PushNotificationWebPushPhp|PushNotification|RuleEngine|ShipmentType|StoreContext|User|WarehouseUser
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getEntityIdentifierOrFail()
    {
        if ($this->entityIdentifier === null) {
            $this->throwNullValueException(static::ENTITY_IDENTIFIER);
        }

        return $this->entityIdentifier;
    }

    /**
     * @module Category|DynamicEntityGui|DynamicEntity|Payment|PickingListPushNotification|PickingList|ProductConfiguration|PushNotificationWebPushPhp|PushNotification|RuleEngine|ShipmentType|StoreContext|User|WarehouseUser
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireEntityIdentifier()
    {
        $this->assertPropertyIsSet(self::ENTITY_IDENTIFIER);

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
                case 'message':
                case 'parameters':
                case 'entityIdentifier':
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
                case 'message':
                case 'parameters':
                case 'entityIdentifier':
                    $values[$arrayKey] = $value;

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
                case 'message':
                case 'parameters':
                case 'entityIdentifier':
                    $values[$arrayKey] = $value;

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
            'message' => $this->message,
            'parameters' => $this->parameters,
            'entityIdentifier' => $this->entityIdentifier,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'message' => $this->message,
            'parameters' => $this->parameters,
            'entity_identifier' => $this->entityIdentifier,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'message' => $this->message instanceof AbstractTransfer ? $this->message->toArray(true, false) : $this->message,
            'parameters' => $this->parameters instanceof AbstractTransfer ? $this->parameters->toArray(true, false) : $this->parameters,
            'entity_identifier' => $this->entityIdentifier instanceof AbstractTransfer ? $this->entityIdentifier->toArray(true, false) : $this->entityIdentifier,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'message' => $this->message instanceof AbstractTransfer ? $this->message->toArray(true, true) : $this->message,
            'parameters' => $this->parameters instanceof AbstractTransfer ? $this->parameters->toArray(true, true) : $this->parameters,
            'entityIdentifier' => $this->entityIdentifier instanceof AbstractTransfer ? $this->entityIdentifier->toArray(true, true) : $this->entityIdentifier,
        ];
    }
}
