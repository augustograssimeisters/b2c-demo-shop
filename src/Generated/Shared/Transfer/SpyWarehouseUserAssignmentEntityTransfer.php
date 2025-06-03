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
class SpyWarehouseUserAssignmentEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_WAREHOUSE_USER_ASSIGNMENT = 'idWarehouseUserAssignment';

    /**
     * @var string
     */
    public const UUID = 'uuid';

    /**
     * @var string
     */
    public const FK_WAREHOUSE = 'fkWarehouse';

    /**
     * @var string
     */
    public const USER_UUID = 'userUuid';

    /**
     * @var string
     */
    public const IS_ACTIVE = 'isActive';

    /**
     * @var string
     */
    public const SPY_STOCK = 'spyStock';

    /**
     * @var integer|null
     */
    protected $idWarehouseUserAssignment;

    /**
     * @var string|null
     */
    protected $uuid;

    /**
     * @var integer|null
     */
    protected $fkWarehouse;

    /**
     * @var string|null
     */
    protected $userUuid;

    /**
     * @var boolean|null
     */
    protected $isActive;

    /**
     * @var \Generated\Shared\Transfer\SpyStockEntityTransfer|null
     */
    protected $spyStock;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_warehouse_user_assignment' => 'idWarehouseUserAssignment',
        'idWarehouseUserAssignment' => 'idWarehouseUserAssignment',
        'IdWarehouseUserAssignment' => 'idWarehouseUserAssignment',
        'uuid' => 'uuid',
        'Uuid' => 'uuid',
        'fk_warehouse' => 'fkWarehouse',
        'fkWarehouse' => 'fkWarehouse',
        'FkWarehouse' => 'fkWarehouse',
        'user_uuid' => 'userUuid',
        'userUuid' => 'userUuid',
        'UserUuid' => 'userUuid',
        'is_active' => 'isActive',
        'isActive' => 'isActive',
        'IsActive' => 'isActive',
        'spy_stock' => 'spyStock',
        'spyStock' => 'spyStock',
        'SpyStock' => 'spyStock',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_WAREHOUSE_USER_ASSIGNMENT => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_warehouse_user_assignment',
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
        self::FK_WAREHOUSE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_warehouse',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
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
            'is_strict' => false,
        ],
        self::IS_ACTIVE => [
            'type' => 'boolean',
            'type_shim' => null,
            'name_underscore' => 'is_active',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_STOCK => [
            'type' => 'Generated\Shared\Transfer\SpyStockEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_stock',
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
    public static $entityNamespace = 'Orm\Zed\WarehouseUser\Persistence\SpyWarehouseUserAssignment';


    /**
     * @module 
     *
     * @param integer|null $idWarehouseUserAssignment
     *
     * @return $this
     */
    public function setIdWarehouseUserAssignment($idWarehouseUserAssignment)
    {
        $this->idWarehouseUserAssignment = $idWarehouseUserAssignment;
        $this->modifiedProperties[self::ID_WAREHOUSE_USER_ASSIGNMENT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdWarehouseUserAssignment()
    {
        return $this->idWarehouseUserAssignment;
    }

    /**
     * @module 
     *
     * @param integer|null $idWarehouseUserAssignment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdWarehouseUserAssignmentOrFail($idWarehouseUserAssignment)
    {
        if ($idWarehouseUserAssignment === null) {
            $this->throwNullValueException(static::ID_WAREHOUSE_USER_ASSIGNMENT);
        }

        return $this->setIdWarehouseUserAssignment($idWarehouseUserAssignment);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdWarehouseUserAssignmentOrFail()
    {
        if ($this->idWarehouseUserAssignment === null) {
            $this->throwNullValueException(static::ID_WAREHOUSE_USER_ASSIGNMENT);
        }

        return $this->idWarehouseUserAssignment;
    }

    /**
     * @module 
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
     * @param integer|null $fkWarehouse
     *
     * @return $this
     */
    public function setFkWarehouse($fkWarehouse)
    {
        $this->fkWarehouse = $fkWarehouse;
        $this->modifiedProperties[self::FK_WAREHOUSE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkWarehouse()
    {
        return $this->fkWarehouse;
    }

    /**
     * @module 
     *
     * @param integer|null $fkWarehouse
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkWarehouseOrFail($fkWarehouse)
    {
        if ($fkWarehouse === null) {
            $this->throwNullValueException(static::FK_WAREHOUSE);
        }

        return $this->setFkWarehouse($fkWarehouse);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkWarehouseOrFail()
    {
        if ($this->fkWarehouse === null) {
            $this->throwNullValueException(static::FK_WAREHOUSE);
        }

        return $this->fkWarehouse;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkWarehouse()
    {
        $this->assertPropertyIsSet(self::FK_WAREHOUSE);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $userUuid
     *
     * @return $this
     */
    public function setUserUuid($userUuid)
    {
        $this->userUuid = $userUuid;
        $this->modifiedProperties[self::USER_UUID] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getUserUuid()
    {
        return $this->userUuid;
    }

    /**
     * @module 
     *
     * @param string|null $userUuid
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUserUuidOrFail($userUuid)
    {
        if ($userUuid === null) {
            $this->throwNullValueException(static::USER_UUID);
        }

        return $this->setUserUuid($userUuid);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getUserUuidOrFail()
    {
        if ($this->userUuid === null) {
            $this->throwNullValueException(static::USER_UUID);
        }

        return $this->userUuid;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param boolean|null $isActive
     *
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        $this->modifiedProperties[self::IS_ACTIVE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return boolean|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * @module 
     *
     * @param boolean|null $isActive
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsActiveOrFail($isActive)
    {
        if ($isActive === null) {
            $this->throwNullValueException(static::IS_ACTIVE);
        }

        return $this->setIsActive($isActive);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return boolean
     */
    public function getIsActiveOrFail()
    {
        if ($this->isActive === null) {
            $this->throwNullValueException(static::IS_ACTIVE);
        }

        return $this->isActive;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyStockEntityTransfer|null $spyStock
     *
     * @return $this
     */
    public function setSpyStock(SpyStockEntityTransfer $spyStock = null)
    {
        $this->spyStock = $spyStock;
        $this->modifiedProperties[self::SPY_STOCK] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyStockEntityTransfer|null
     */
    public function getSpyStock()
    {
        return $this->spyStock;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyStockEntityTransfer $spyStock
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyStockOrFail(SpyStockEntityTransfer $spyStock)
    {
        return $this->setSpyStock($spyStock);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyStockEntityTransfer
     */
    public function getSpyStockOrFail()
    {
        if ($this->spyStock === null) {
            $this->throwNullValueException(static::SPY_STOCK);
        }

        return $this->spyStock;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyStock()
    {
        $this->assertPropertyIsSet(self::SPY_STOCK);

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
                case 'idWarehouseUserAssignment':
                case 'uuid':
                case 'fkWarehouse':
                case 'userUuid':
                case 'isActive':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyStock':
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
                case 'idWarehouseUserAssignment':
                case 'uuid':
                case 'fkWarehouse':
                case 'userUuid':
                case 'isActive':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyStock':
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
                case 'idWarehouseUserAssignment':
                case 'uuid':
                case 'fkWarehouse':
                case 'userUuid':
                case 'isActive':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyStock':
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
            'idWarehouseUserAssignment' => $this->idWarehouseUserAssignment,
            'uuid' => $this->uuid,
            'fkWarehouse' => $this->fkWarehouse,
            'userUuid' => $this->userUuid,
            'isActive' => $this->isActive,
            'spyStock' => $this->spyStock,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_warehouse_user_assignment' => $this->idWarehouseUserAssignment,
            'uuid' => $this->uuid,
            'fk_warehouse' => $this->fkWarehouse,
            'user_uuid' => $this->userUuid,
            'is_active' => $this->isActive,
            'spy_stock' => $this->spyStock,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_warehouse_user_assignment' => $this->idWarehouseUserAssignment instanceof AbstractTransfer ? $this->idWarehouseUserAssignment->toArray(true, false) : $this->idWarehouseUserAssignment,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, false) : $this->uuid,
            'fk_warehouse' => $this->fkWarehouse instanceof AbstractTransfer ? $this->fkWarehouse->toArray(true, false) : $this->fkWarehouse,
            'user_uuid' => $this->userUuid instanceof AbstractTransfer ? $this->userUuid->toArray(true, false) : $this->userUuid,
            'is_active' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, false) : $this->isActive,
            'spy_stock' => $this->spyStock instanceof AbstractTransfer ? $this->spyStock->toArray(true, false) : $this->spyStock,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idWarehouseUserAssignment' => $this->idWarehouseUserAssignment instanceof AbstractTransfer ? $this->idWarehouseUserAssignment->toArray(true, true) : $this->idWarehouseUserAssignment,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, true) : $this->uuid,
            'fkWarehouse' => $this->fkWarehouse instanceof AbstractTransfer ? $this->fkWarehouse->toArray(true, true) : $this->fkWarehouse,
            'userUuid' => $this->userUuid instanceof AbstractTransfer ? $this->userUuid->toArray(true, true) : $this->userUuid,
            'isActive' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, true) : $this->isActive,
            'spyStock' => $this->spyStock instanceof AbstractTransfer ? $this->spyStock->toArray(true, true) : $this->spyStock,
        ];
    }
}
