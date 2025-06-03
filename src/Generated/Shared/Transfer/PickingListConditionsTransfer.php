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
class PickingListConditionsTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const UUIDS = 'uuids';

    /**
     * @var string
     */
    public const USER_UUIDS = 'userUuids';

    /**
     * @var string
     */
    public const WITH_UNASSIGNED_USER = 'withUnassignedUser';

    /**
     * @var string
     */
    public const WAREHOUSE_UUIDS = 'warehouseUuids';

    /**
     * @var string
     */
    public const WAREHOUSE_IDS = 'warehouseIds';

    /**
     * @var string
     */
    public const STATUSES = 'statuses';

    /**
     * @var string
     */
    public const SALES_ORDER_ITEM_UUIDS = 'salesOrderItemUuids';

    /**
     * @var string[]
     */
    protected $uuids = [];

    /**
     * @var string[]
     */
    protected $userUuids = [];

    /**
     * @var bool|null
     */
    protected $withUnassignedUser;

    /**
     * @var string[]
     */
    protected $warehouseUuids = [];

    /**
     * @var int[]
     */
    protected $warehouseIds = [];

    /**
     * @var string[]
     */
    protected $statuses = [];

    /**
     * @var string[]
     */
    protected $salesOrderItemUuids = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'uuids' => 'uuids',
        'Uuids' => 'uuids',
        'user_uuids' => 'userUuids',
        'userUuids' => 'userUuids',
        'UserUuids' => 'userUuids',
        'with_unassigned_user' => 'withUnassignedUser',
        'withUnassignedUser' => 'withUnassignedUser',
        'WithUnassignedUser' => 'withUnassignedUser',
        'warehouse_uuids' => 'warehouseUuids',
        'warehouseUuids' => 'warehouseUuids',
        'WarehouseUuids' => 'warehouseUuids',
        'warehouse_ids' => 'warehouseIds',
        'warehouseIds' => 'warehouseIds',
        'WarehouseIds' => 'warehouseIds',
        'statuses' => 'statuses',
        'Statuses' => 'statuses',
        'sales_order_item_uuids' => 'salesOrderItemUuids',
        'salesOrderItemUuids' => 'salesOrderItemUuids',
        'SalesOrderItemUuids' => 'salesOrderItemUuids',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::UUIDS => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'uuids',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::USER_UUIDS => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'user_uuids',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::WITH_UNASSIGNED_USER => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'with_unassigned_user',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::WAREHOUSE_UUIDS => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'warehouse_uuids',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::WAREHOUSE_IDS => [
            'type' => 'int[]',
            'type_shim' => null,
            'name_underscore' => 'warehouse_ids',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::STATUSES => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'statuses',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::SALES_ORDER_ITEM_UUIDS => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'sales_order_item_uuids',
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
     * @module PickingList|PickingListsBackendApi|PickingListsUsersBackendApi|PickingListsWarehousesBackendApi
     *
     * @param string[]|null $uuids
     *
     * @return $this
     */
    public function setUuids(array $uuids = null)
    {
        if ($uuids === null) {
            $uuids = [];
        }

        $this->uuids = [];

        foreach ($uuids as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::UUIDS]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addUuid(...$args);
        }

        $this->modifiedProperties[self::UUIDS] = true;

        return $this;
    }

    /**
     * @module PickingList|PickingListsBackendApi|PickingListsUsersBackendApi|PickingListsWarehousesBackendApi
     *
     * @return string[]
     */
    public function getUuids(): array
    {
        return $this->uuids;
    }

    /**
     * @module PickingList|PickingListsBackendApi|PickingListsUsersBackendApi|PickingListsWarehousesBackendApi
     *
     * @param string $uuid
     *
     * @return $this
     */
    public function addUuid(string $uuid)
    {
        $this->uuids[] = $uuid;
        $this->modifiedProperties[self::UUIDS] = true;

        return $this;
    }

    /**
     * @module PickingList|PickingListsBackendApi|PickingListsUsersBackendApi|PickingListsWarehousesBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUuids()
    {
        $this->assertPropertyIsSet(self::UUIDS);

        return $this;
    }

    /**
     * @module PickingList|PickingListsBackendApi
     *
     * @param string[]|null $userUuids
     *
     * @return $this
     */
    public function setUserUuids(array $userUuids = null)
    {
        if ($userUuids === null) {
            $userUuids = [];
        }

        $this->userUuids = [];

        foreach ($userUuids as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::USER_UUIDS]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addUserUuid(...$args);
        }

        $this->modifiedProperties[self::USER_UUIDS] = true;

        return $this;
    }

    /**
     * @module PickingList|PickingListsBackendApi
     *
     * @return string[]
     */
    public function getUserUuids(): array
    {
        return $this->userUuids;
    }

    /**
     * @module PickingList|PickingListsBackendApi
     *
     * @param string $userUuid
     *
     * @return $this
     */
    public function addUserUuid(string $userUuid)
    {
        $this->userUuids[] = $userUuid;
        $this->modifiedProperties[self::USER_UUIDS] = true;

        return $this;
    }

    /**
     * @module PickingList|PickingListsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUserUuids()
    {
        $this->assertPropertyIsSet(self::USER_UUIDS);

        return $this;
    }

    /**
     * @module PickingList|PickingListsBackendApi
     *
     * @param bool|null $withUnassignedUser
     *
     * @return $this
     */
    public function setWithUnassignedUser(?bool $withUnassignedUser = null)
    {
        $this->withUnassignedUser = $withUnassignedUser;
        $this->modifiedProperties[self::WITH_UNASSIGNED_USER] = true;

        return $this;
    }

    /**
     * @module PickingList|PickingListsBackendApi
     *
     * @return bool|null
     */
    public function getWithUnassignedUser(): ?bool
    {
        return $this->withUnassignedUser;
    }

    /**
     * @module PickingList|PickingListsBackendApi
     *
     * @param bool $withUnassignedUser
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setWithUnassignedUserOrFail(bool $withUnassignedUser)
    {
        return $this->setWithUnassignedUser($withUnassignedUser);
    }

    /**
     * @module PickingList|PickingListsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getWithUnassignedUserOrFail(): bool
    {
        if ($this->withUnassignedUser === null) {
            $this->throwNullValueException(static::WITH_UNASSIGNED_USER);
        }

        return $this->withUnassignedUser;
    }

    /**
     * @module PickingList|PickingListsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireWithUnassignedUser()
    {
        $this->assertPropertyIsSet(self::WITH_UNASSIGNED_USER);

        return $this;
    }

    /**
     * @module PickingList|PickingListsBackendApi
     *
     * @param string[]|null $warehouseUuids
     *
     * @return $this
     */
    public function setWarehouseUuids(array $warehouseUuids = null)
    {
        if ($warehouseUuids === null) {
            $warehouseUuids = [];
        }

        $this->warehouseUuids = [];

        foreach ($warehouseUuids as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::WAREHOUSE_UUIDS]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addWarehouseUuid(...$args);
        }

        $this->modifiedProperties[self::WAREHOUSE_UUIDS] = true;

        return $this;
    }

    /**
     * @module PickingList|PickingListsBackendApi
     *
     * @return string[]
     */
    public function getWarehouseUuids(): array
    {
        return $this->warehouseUuids;
    }

    /**
     * @module PickingList|PickingListsBackendApi
     *
     * @param string $warehouseUuid
     *
     * @return $this
     */
    public function addWarehouseUuid(string $warehouseUuid)
    {
        $this->warehouseUuids[] = $warehouseUuid;
        $this->modifiedProperties[self::WAREHOUSE_UUIDS] = true;

        return $this;
    }

    /**
     * @module PickingList|PickingListsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireWarehouseUuids()
    {
        $this->assertPropertyIsSet(self::WAREHOUSE_UUIDS);

        return $this;
    }

    /**
     * @module PickingList|PickingListsBackendApi
     *
     * @param int[]|null $warehouseIds
     *
     * @return $this
     */
    public function setWarehouseIds(array $warehouseIds = null)
    {
        if ($warehouseIds === null) {
            $warehouseIds = [];
        }

        $this->warehouseIds = [];

        foreach ($warehouseIds as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::WAREHOUSE_IDS]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addIdWarehouse(...$args);
        }

        $this->modifiedProperties[self::WAREHOUSE_IDS] = true;

        return $this;
    }

    /**
     * @module PickingList|PickingListsBackendApi
     *
     * @return int[]
     */
    public function getWarehouseIds(): array
    {
        return $this->warehouseIds;
    }

    /**
     * @module PickingList|PickingListsBackendApi
     *
     * @param int $idWarehouse
     *
     * @return $this
     */
    public function addIdWarehouse(int $idWarehouse)
    {
        $this->warehouseIds[] = $idWarehouse;
        $this->modifiedProperties[self::WAREHOUSE_IDS] = true;

        return $this;
    }

    /**
     * @module PickingList|PickingListsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireWarehouseIds()
    {
        $this->assertPropertyIsSet(self::WAREHOUSE_IDS);

        return $this;
    }

    /**
     * @module PickingList|PickingListsBackendApi
     *
     * @param string[]|null $statuses
     *
     * @return $this
     */
    public function setStatuses(array $statuses = null)
    {
        if ($statuses === null) {
            $statuses = [];
        }

        $this->statuses = [];

        foreach ($statuses as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::STATUSES]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addStatus(...$args);
        }

        $this->modifiedProperties[self::STATUSES] = true;

        return $this;
    }

    /**
     * @module PickingList|PickingListsBackendApi
     *
     * @return string[]
     */
    public function getStatuses(): array
    {
        return $this->statuses;
    }

    /**
     * @module PickingList|PickingListsBackendApi
     *
     * @param string $status
     *
     * @return $this
     */
    public function addStatus(string $status)
    {
        $this->statuses[] = $status;
        $this->modifiedProperties[self::STATUSES] = true;

        return $this;
    }

    /**
     * @module PickingList|PickingListsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStatuses()
    {
        $this->assertPropertyIsSet(self::STATUSES);

        return $this;
    }

    /**
     * @module PickingList
     *
     * @param string[]|null $salesOrderItemUuids
     *
     * @return $this
     */
    public function setSalesOrderItemUuids(array $salesOrderItemUuids = null)
    {
        if ($salesOrderItemUuids === null) {
            $salesOrderItemUuids = [];
        }

        $this->salesOrderItemUuids = [];

        foreach ($salesOrderItemUuids as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::SALES_ORDER_ITEM_UUIDS]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addSalesOrderItemUuid(...$args);
        }

        $this->modifiedProperties[self::SALES_ORDER_ITEM_UUIDS] = true;

        return $this;
    }

    /**
     * @module PickingList
     *
     * @return string[]
     */
    public function getSalesOrderItemUuids(): array
    {
        return $this->salesOrderItemUuids;
    }

    /**
     * @module PickingList
     *
     * @param string $salesOrderItemUuid
     *
     * @return $this
     */
    public function addSalesOrderItemUuid(string $salesOrderItemUuid)
    {
        $this->salesOrderItemUuids[] = $salesOrderItemUuid;
        $this->modifiedProperties[self::SALES_ORDER_ITEM_UUIDS] = true;

        return $this;
    }

    /**
     * @module PickingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSalesOrderItemUuids()
    {
        $this->assertPropertyIsSet(self::SALES_ORDER_ITEM_UUIDS);

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
                case 'uuids':
                case 'userUuids':
                case 'withUnassignedUser':
                case 'warehouseUuids':
                case 'warehouseIds':
                case 'statuses':
                case 'salesOrderItemUuids':
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
                case 'uuids':
                case 'userUuids':
                case 'withUnassignedUser':
                case 'warehouseUuids':
                case 'warehouseIds':
                case 'statuses':
                case 'salesOrderItemUuids':
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
                case 'uuids':
                case 'userUuids':
                case 'withUnassignedUser':
                case 'warehouseUuids':
                case 'warehouseIds':
                case 'statuses':
                case 'salesOrderItemUuids':
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
            'uuids' => $this->uuids,
            'userUuids' => $this->userUuids,
            'withUnassignedUser' => $this->withUnassignedUser,
            'warehouseUuids' => $this->warehouseUuids,
            'warehouseIds' => $this->warehouseIds,
            'statuses' => $this->statuses,
            'salesOrderItemUuids' => $this->salesOrderItemUuids,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'uuids' => $this->uuids,
            'user_uuids' => $this->userUuids,
            'with_unassigned_user' => $this->withUnassignedUser,
            'warehouse_uuids' => $this->warehouseUuids,
            'warehouse_ids' => $this->warehouseIds,
            'statuses' => $this->statuses,
            'sales_order_item_uuids' => $this->salesOrderItemUuids,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'uuids' => $this->uuids instanceof AbstractTransfer ? $this->uuids->toArray(true, false) : $this->uuids,
            'user_uuids' => $this->userUuids instanceof AbstractTransfer ? $this->userUuids->toArray(true, false) : $this->userUuids,
            'with_unassigned_user' => $this->withUnassignedUser instanceof AbstractTransfer ? $this->withUnassignedUser->toArray(true, false) : $this->withUnassignedUser,
            'warehouse_uuids' => $this->warehouseUuids instanceof AbstractTransfer ? $this->warehouseUuids->toArray(true, false) : $this->warehouseUuids,
            'warehouse_ids' => $this->warehouseIds instanceof AbstractTransfer ? $this->warehouseIds->toArray(true, false) : $this->warehouseIds,
            'statuses' => $this->statuses instanceof AbstractTransfer ? $this->statuses->toArray(true, false) : $this->statuses,
            'sales_order_item_uuids' => $this->salesOrderItemUuids instanceof AbstractTransfer ? $this->salesOrderItemUuids->toArray(true, false) : $this->salesOrderItemUuids,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'uuids' => $this->uuids instanceof AbstractTransfer ? $this->uuids->toArray(true, true) : $this->uuids,
            'userUuids' => $this->userUuids instanceof AbstractTransfer ? $this->userUuids->toArray(true, true) : $this->userUuids,
            'withUnassignedUser' => $this->withUnassignedUser instanceof AbstractTransfer ? $this->withUnassignedUser->toArray(true, true) : $this->withUnassignedUser,
            'warehouseUuids' => $this->warehouseUuids instanceof AbstractTransfer ? $this->warehouseUuids->toArray(true, true) : $this->warehouseUuids,
            'warehouseIds' => $this->warehouseIds instanceof AbstractTransfer ? $this->warehouseIds->toArray(true, true) : $this->warehouseIds,
            'statuses' => $this->statuses instanceof AbstractTransfer ? $this->statuses->toArray(true, true) : $this->statuses,
            'salesOrderItemUuids' => $this->salesOrderItemUuids instanceof AbstractTransfer ? $this->salesOrderItemUuids->toArray(true, true) : $this->salesOrderItemUuids,
        ];
    }
}
