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
class WarehouseUserAssignmentCollectionDeleteCriteriaTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const USER_UUIDS = 'userUuids';

    /**
     * @var string
     */
    public const WAREHOUSE_UUIDS = 'warehouseUuids';

    /**
     * @var string
     */
    public const WAREHOUSE_USER_ASSIGNMENT_IDS = 'warehouseUserAssignmentIds';

    /**
     * @var string
     */
    public const UUIDS = 'uuids';

    /**
     * @var string[]
     */
    protected $userUuids = [];

    /**
     * @var string[]
     */
    protected $warehouseUuids = [];

    /**
     * @var int[]
     */
    protected $warehouseUserAssignmentIds = [];

    /**
     * @var string[]
     */
    protected $uuids = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'user_uuids' => 'userUuids',
        'userUuids' => 'userUuids',
        'UserUuids' => 'userUuids',
        'warehouse_uuids' => 'warehouseUuids',
        'warehouseUuids' => 'warehouseUuids',
        'WarehouseUuids' => 'warehouseUuids',
        'warehouse_user_assignment_ids' => 'warehouseUserAssignmentIds',
        'warehouseUserAssignmentIds' => 'warehouseUserAssignmentIds',
        'WarehouseUserAssignmentIds' => 'warehouseUserAssignmentIds',
        'uuids' => 'uuids',
        'Uuids' => 'uuids',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
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
        self::WAREHOUSE_USER_ASSIGNMENT_IDS => [
            'type' => 'int[]',
            'type_shim' => null,
            'name_underscore' => 'warehouse_user_assignment_ids',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
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
    ];

    /**
     * @module WarehouseUserGui|WarehouseUser|WarehouseUsersBackendApi
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
     * @module WarehouseUserGui|WarehouseUser|WarehouseUsersBackendApi
     *
     * @return string[]
     */
    public function getUserUuids(): array
    {
        return $this->userUuids;
    }

    /**
     * @module WarehouseUserGui|WarehouseUser|WarehouseUsersBackendApi
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
     * @module WarehouseUserGui|WarehouseUser|WarehouseUsersBackendApi
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
     * @module WarehouseUserGui|WarehouseUser
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
     * @module WarehouseUserGui|WarehouseUser
     *
     * @return string[]
     */
    public function getWarehouseUuids(): array
    {
        return $this->warehouseUuids;
    }

    /**
     * @module WarehouseUserGui|WarehouseUser
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
     * @module WarehouseUserGui|WarehouseUser
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
     * @module WarehouseUser
     *
     * @param int[]|null $warehouseUserAssignmentIds
     *
     * @return $this
     */
    public function setWarehouseUserAssignmentIds(array $warehouseUserAssignmentIds = null)
    {
        if ($warehouseUserAssignmentIds === null) {
            $warehouseUserAssignmentIds = [];
        }

        $this->warehouseUserAssignmentIds = [];

        foreach ($warehouseUserAssignmentIds as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::WAREHOUSE_USER_ASSIGNMENT_IDS]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addIdWarehouseUserAssignment(...$args);
        }

        $this->modifiedProperties[self::WAREHOUSE_USER_ASSIGNMENT_IDS] = true;

        return $this;
    }

    /**
     * @module WarehouseUser
     *
     * @return int[]
     */
    public function getWarehouseUserAssignmentIds(): array
    {
        return $this->warehouseUserAssignmentIds;
    }

    /**
     * @module WarehouseUser
     *
     * @param int $idWarehouseUserAssignment
     *
     * @return $this
     */
    public function addIdWarehouseUserAssignment(int $idWarehouseUserAssignment)
    {
        $this->warehouseUserAssignmentIds[] = $idWarehouseUserAssignment;
        $this->modifiedProperties[self::WAREHOUSE_USER_ASSIGNMENT_IDS] = true;

        return $this;
    }

    /**
     * @module WarehouseUser
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireWarehouseUserAssignmentIds()
    {
        $this->assertPropertyIsSet(self::WAREHOUSE_USER_ASSIGNMENT_IDS);

        return $this;
    }

    /**
     * @module WarehouseUser|WarehouseUsersBackendApi
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
     * @module WarehouseUser|WarehouseUsersBackendApi
     *
     * @return string[]
     */
    public function getUuids(): array
    {
        return $this->uuids;
    }

    /**
     * @module WarehouseUser|WarehouseUsersBackendApi
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
     * @module WarehouseUser|WarehouseUsersBackendApi
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
                case 'userUuids':
                case 'warehouseUuids':
                case 'warehouseUserAssignmentIds':
                case 'uuids':
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
                case 'userUuids':
                case 'warehouseUuids':
                case 'warehouseUserAssignmentIds':
                case 'uuids':
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
                case 'userUuids':
                case 'warehouseUuids':
                case 'warehouseUserAssignmentIds':
                case 'uuids':
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
            'userUuids' => $this->userUuids,
            'warehouseUuids' => $this->warehouseUuids,
            'warehouseUserAssignmentIds' => $this->warehouseUserAssignmentIds,
            'uuids' => $this->uuids,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'user_uuids' => $this->userUuids,
            'warehouse_uuids' => $this->warehouseUuids,
            'warehouse_user_assignment_ids' => $this->warehouseUserAssignmentIds,
            'uuids' => $this->uuids,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'user_uuids' => $this->userUuids instanceof AbstractTransfer ? $this->userUuids->toArray(true, false) : $this->userUuids,
            'warehouse_uuids' => $this->warehouseUuids instanceof AbstractTransfer ? $this->warehouseUuids->toArray(true, false) : $this->warehouseUuids,
            'warehouse_user_assignment_ids' => $this->warehouseUserAssignmentIds instanceof AbstractTransfer ? $this->warehouseUserAssignmentIds->toArray(true, false) : $this->warehouseUserAssignmentIds,
            'uuids' => $this->uuids instanceof AbstractTransfer ? $this->uuids->toArray(true, false) : $this->uuids,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'userUuids' => $this->userUuids instanceof AbstractTransfer ? $this->userUuids->toArray(true, true) : $this->userUuids,
            'warehouseUuids' => $this->warehouseUuids instanceof AbstractTransfer ? $this->warehouseUuids->toArray(true, true) : $this->warehouseUuids,
            'warehouseUserAssignmentIds' => $this->warehouseUserAssignmentIds instanceof AbstractTransfer ? $this->warehouseUserAssignmentIds->toArray(true, true) : $this->warehouseUserAssignmentIds,
            'uuids' => $this->uuids instanceof AbstractTransfer ? $this->uuids->toArray(true, true) : $this->uuids,
        ];
    }
}
