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
class WarehouseUserAssignmentTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const UUID = 'uuid';

    /**
     * @var string
     */
    public const ID_WAREHOUSE_USER_ASSIGNMENT = 'idWarehouseUserAssignment';

    /**
     * @var string
     */
    public const WAREHOUSE = 'warehouse';

    /**
     * @var string
     */
    public const USER_UUID = 'userUuid';

    /**
     * @var string
     */
    public const IS_ACTIVE = 'isActive';

    /**
     * @var string|null
     */
    protected $uuid;

    /**
     * @var int|null
     */
    protected $idWarehouseUserAssignment;

    /**
     * @var \Generated\Shared\Transfer\StockTransfer|null
     */
    protected $warehouse;

    /**
     * @var string|null
     */
    protected $userUuid;

    /**
     * @var bool|null
     */
    protected $isActive;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'uuid' => 'uuid',
        'Uuid' => 'uuid',
        'id_warehouse_user_assignment' => 'idWarehouseUserAssignment',
        'idWarehouseUserAssignment' => 'idWarehouseUserAssignment',
        'IdWarehouseUserAssignment' => 'idWarehouseUserAssignment',
        'warehouse' => 'warehouse',
        'Warehouse' => 'warehouse',
        'user_uuid' => 'userUuid',
        'userUuid' => 'userUuid',
        'UserUuid' => 'userUuid',
        'is_active' => 'isActive',
        'isActive' => 'isActive',
        'IsActive' => 'isActive',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
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
            'is_strict' => true,
        ],
        self::ID_WAREHOUSE_USER_ASSIGNMENT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_warehouse_user_assignment',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::WAREHOUSE => [
            'type' => 'Generated\Shared\Transfer\StockTransfer',
            'type_shim' => null,
            'name_underscore' => 'warehouse',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::USER_UUID => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'user_uuid',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::IS_ACTIVE => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_active',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
    ];

    /**
     * @module PickingListPushNotification|PickingList|WarehouseUser|WarehouseUsersBackendApi
     *
     * @param string|null $uuid
     *
     * @return $this
     */
    public function setUuid(?string $uuid = null)
    {
        $this->uuid = $uuid;
        $this->modifiedProperties[self::UUID] = true;

        return $this;
    }

    /**
     * @module PickingListPushNotification|PickingList|WarehouseUser|WarehouseUsersBackendApi
     *
     * @return string|null
     */
    public function getUuid(): ?string
    {
        return $this->uuid;
    }

    /**
     * @module PickingListPushNotification|PickingList|WarehouseUser|WarehouseUsersBackendApi
     *
     * @param string $uuid
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUuidOrFail(string $uuid)
    {
        return $this->setUuid($uuid);
    }

    /**
     * @module PickingListPushNotification|PickingList|WarehouseUser|WarehouseUsersBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getUuidOrFail(): string
    {
        if ($this->uuid === null) {
            $this->throwNullValueException(static::UUID);
        }

        return $this->uuid;
    }

    /**
     * @module PickingListPushNotification|PickingList|WarehouseUser|WarehouseUsersBackendApi
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
     * @module PickingListPushNotification|WarehouseUserGui|WarehouseUser|WarehouseUsersBackendApi
     *
     * @param int|null $idWarehouseUserAssignment
     *
     * @return $this
     */
    public function setIdWarehouseUserAssignment(?int $idWarehouseUserAssignment = null)
    {
        $this->idWarehouseUserAssignment = $idWarehouseUserAssignment;
        $this->modifiedProperties[self::ID_WAREHOUSE_USER_ASSIGNMENT] = true;

        return $this;
    }

    /**
     * @module PickingListPushNotification|WarehouseUserGui|WarehouseUser|WarehouseUsersBackendApi
     *
     * @return int|null
     */
    public function getIdWarehouseUserAssignment(): ?int
    {
        return $this->idWarehouseUserAssignment;
    }

    /**
     * @module PickingListPushNotification|WarehouseUserGui|WarehouseUser|WarehouseUsersBackendApi
     *
     * @param int $idWarehouseUserAssignment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdWarehouseUserAssignmentOrFail(int $idWarehouseUserAssignment)
    {
        return $this->setIdWarehouseUserAssignment($idWarehouseUserAssignment);
    }

    /**
     * @module PickingListPushNotification|WarehouseUserGui|WarehouseUser|WarehouseUsersBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdWarehouseUserAssignmentOrFail(): int
    {
        if ($this->idWarehouseUserAssignment === null) {
            $this->throwNullValueException(static::ID_WAREHOUSE_USER_ASSIGNMENT);
        }

        return $this->idWarehouseUserAssignment;
    }

    /**
     * @module PickingListPushNotification|WarehouseUserGui|WarehouseUser|WarehouseUsersBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdWarehouseUserAssignment()
    {
        $this->assertPropertyIsSet(self::ID_WAREHOUSE_USER_ASSIGNMENT);

        return $this;
    }

    /**
     * @module PickingListPushNotification|PickingList|PickingListsBackendApi|WarehouseOauthBackendApi|WarehouseUserGui|WarehouseUser|WarehouseUsersBackendApi
     *
     * @param \Generated\Shared\Transfer\StockTransfer|null $warehouse
     *
     * @return $this
     */
    public function setWarehouse(?StockTransfer $warehouse = null)
    {
        $this->warehouse = $warehouse;
        $this->modifiedProperties[self::WAREHOUSE] = true;

        return $this;
    }

    /**
     * @module PickingListPushNotification|PickingList|PickingListsBackendApi|WarehouseOauthBackendApi|WarehouseUserGui|WarehouseUser|WarehouseUsersBackendApi
     *
     * @return \Generated\Shared\Transfer\StockTransfer|null
     */
    public function getWarehouse(): ?StockTransfer
    {
        return $this->warehouse;
    }

    /**
     * @module PickingListPushNotification|PickingList|PickingListsBackendApi|WarehouseOauthBackendApi|WarehouseUserGui|WarehouseUser|WarehouseUsersBackendApi
     *
     * @param \Generated\Shared\Transfer\StockTransfer $warehouse
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setWarehouseOrFail(StockTransfer $warehouse)
    {
        return $this->setWarehouse($warehouse);
    }

    /**
     * @module PickingListPushNotification|PickingList|PickingListsBackendApi|WarehouseOauthBackendApi|WarehouseUserGui|WarehouseUser|WarehouseUsersBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\StockTransfer
     */
    public function getWarehouseOrFail(): StockTransfer
    {
        if ($this->warehouse === null) {
            $this->throwNullValueException(static::WAREHOUSE);
        }

        return $this->warehouse;
    }

    /**
     * @module PickingListPushNotification|PickingList|PickingListsBackendApi|WarehouseOauthBackendApi|WarehouseUserGui|WarehouseUser|WarehouseUsersBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireWarehouse()
    {
        $this->assertPropertyIsSet(self::WAREHOUSE);

        return $this;
    }

    /**
     * @module PickingListPushNotification|PickingList|WarehouseUserGui|WarehouseUser|WarehouseUsersBackendApi
     *
     * @param string|null $userUuid
     *
     * @return $this
     */
    public function setUserUuid(?string $userUuid = null)
    {
        $this->userUuid = $userUuid;
        $this->modifiedProperties[self::USER_UUID] = true;

        return $this;
    }

    /**
     * @module PickingListPushNotification|PickingList|WarehouseUserGui|WarehouseUser|WarehouseUsersBackendApi
     *
     * @return string|null
     */
    public function getUserUuid(): ?string
    {
        return $this->userUuid;
    }

    /**
     * @module PickingListPushNotification|PickingList|WarehouseUserGui|WarehouseUser|WarehouseUsersBackendApi
     *
     * @param string $userUuid
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUserUuidOrFail(string $userUuid)
    {
        return $this->setUserUuid($userUuid);
    }

    /**
     * @module PickingListPushNotification|PickingList|WarehouseUserGui|WarehouseUser|WarehouseUsersBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getUserUuidOrFail(): string
    {
        if ($this->userUuid === null) {
            $this->throwNullValueException(static::USER_UUID);
        }

        return $this->userUuid;
    }

    /**
     * @module PickingListPushNotification|PickingList|WarehouseUserGui|WarehouseUser|WarehouseUsersBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUserUuid()
    {
        $this->assertPropertyIsSet(self::USER_UUID);

        return $this;
    }

    /**
     * @module PickingListPushNotification|WarehouseUser|WarehouseUsersBackendApi
     *
     * @param bool|null $isActive
     *
     * @return $this
     */
    public function setIsActive(?bool $isActive = null)
    {
        $this->isActive = $isActive;
        $this->modifiedProperties[self::IS_ACTIVE] = true;

        return $this;
    }

    /**
     * @module PickingListPushNotification|WarehouseUser|WarehouseUsersBackendApi
     *
     * @return bool|null
     */
    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }

    /**
     * @module PickingListPushNotification|WarehouseUser|WarehouseUsersBackendApi
     *
     * @param bool $isActive
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsActiveOrFail(bool $isActive)
    {
        return $this->setIsActive($isActive);
    }

    /**
     * @module PickingListPushNotification|WarehouseUser|WarehouseUsersBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsActiveOrFail(): bool
    {
        if ($this->isActive === null) {
            $this->throwNullValueException(static::IS_ACTIVE);
        }

        return $this->isActive;
    }

    /**
     * @module PickingListPushNotification|WarehouseUser|WarehouseUsersBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsActive()
    {
        $this->assertPropertyIsSet(self::IS_ACTIVE);

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
                case 'uuid':
                case 'idWarehouseUserAssignment':
                case 'userUuid':
                case 'isActive':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'warehouse':
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
                case 'uuid':
                case 'idWarehouseUserAssignment':
                case 'userUuid':
                case 'isActive':
                    $values[$arrayKey] = $value;

                    break;
                case 'warehouse':
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
                case 'uuid':
                case 'idWarehouseUserAssignment':
                case 'userUuid':
                case 'isActive':
                    $values[$arrayKey] = $value;

                    break;
                case 'warehouse':
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
            'uuid' => $this->uuid,
            'idWarehouseUserAssignment' => $this->idWarehouseUserAssignment,
            'userUuid' => $this->userUuid,
            'isActive' => $this->isActive,
            'warehouse' => $this->warehouse,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'uuid' => $this->uuid,
            'id_warehouse_user_assignment' => $this->idWarehouseUserAssignment,
            'user_uuid' => $this->userUuid,
            'is_active' => $this->isActive,
            'warehouse' => $this->warehouse,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, false) : $this->uuid,
            'id_warehouse_user_assignment' => $this->idWarehouseUserAssignment instanceof AbstractTransfer ? $this->idWarehouseUserAssignment->toArray(true, false) : $this->idWarehouseUserAssignment,
            'user_uuid' => $this->userUuid instanceof AbstractTransfer ? $this->userUuid->toArray(true, false) : $this->userUuid,
            'is_active' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, false) : $this->isActive,
            'warehouse' => $this->warehouse instanceof AbstractTransfer ? $this->warehouse->toArray(true, false) : $this->warehouse,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, true) : $this->uuid,
            'idWarehouseUserAssignment' => $this->idWarehouseUserAssignment instanceof AbstractTransfer ? $this->idWarehouseUserAssignment->toArray(true, true) : $this->idWarehouseUserAssignment,
            'userUuid' => $this->userUuid instanceof AbstractTransfer ? $this->userUuid->toArray(true, true) : $this->userUuid,
            'isActive' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, true) : $this->isActive,
            'warehouse' => $this->warehouse instanceof AbstractTransfer ? $this->warehouse->toArray(true, true) : $this->warehouse,
        ];
    }
}
