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
class SpyWarehouseAllocationEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_WAREHOUSE_ALLOCATION = 'idWarehouseAllocation';

    /**
     * @var string
     */
    public const FK_WAREHOUSE = 'fkWarehouse';

    /**
     * @var string
     */
    public const SALES_ORDER_ITEM_UUID = 'salesOrderItemUuid';

    /**
     * @var string
     */
    public const WAREHOUSE = 'warehouse';

    /**
     * @var integer|null
     */
    protected $idWarehouseAllocation;

    /**
     * @var integer|null
     */
    protected $fkWarehouse;

    /**
     * @var string|null
     */
    protected $salesOrderItemUuid;

    /**
     * @var \Generated\Shared\Transfer\SpyStockEntityTransfer|null
     */
    protected $warehouse;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_warehouse_allocation' => 'idWarehouseAllocation',
        'idWarehouseAllocation' => 'idWarehouseAllocation',
        'IdWarehouseAllocation' => 'idWarehouseAllocation',
        'fk_warehouse' => 'fkWarehouse',
        'fkWarehouse' => 'fkWarehouse',
        'FkWarehouse' => 'fkWarehouse',
        'sales_order_item_uuid' => 'salesOrderItemUuid',
        'salesOrderItemUuid' => 'salesOrderItemUuid',
        'SalesOrderItemUuid' => 'salesOrderItemUuid',
        'warehouse' => 'warehouse',
        'Warehouse' => 'warehouse',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_WAREHOUSE_ALLOCATION => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_warehouse_allocation',
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
        self::SALES_ORDER_ITEM_UUID => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'sales_order_item_uuid',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::WAREHOUSE => [
            'type' => 'Generated\Shared\Transfer\SpyStockEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'warehouse',
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
    public static $entityNamespace = 'Orm\Zed\WarehouseAllocation\Persistence\SpyWarehouseAllocation';


    /**
     * @module 
     *
     * @param integer|null $idWarehouseAllocation
     *
     * @return $this
     */
    public function setIdWarehouseAllocation($idWarehouseAllocation)
    {
        $this->idWarehouseAllocation = $idWarehouseAllocation;
        $this->modifiedProperties[self::ID_WAREHOUSE_ALLOCATION] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdWarehouseAllocation()
    {
        return $this->idWarehouseAllocation;
    }

    /**
     * @module 
     *
     * @param integer|null $idWarehouseAllocation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdWarehouseAllocationOrFail($idWarehouseAllocation)
    {
        if ($idWarehouseAllocation === null) {
            $this->throwNullValueException(static::ID_WAREHOUSE_ALLOCATION);
        }

        return $this->setIdWarehouseAllocation($idWarehouseAllocation);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdWarehouseAllocationOrFail()
    {
        if ($this->idWarehouseAllocation === null) {
            $this->throwNullValueException(static::ID_WAREHOUSE_ALLOCATION);
        }

        return $this->idWarehouseAllocation;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdWarehouseAllocation()
    {
        $this->assertPropertyIsSet(self::ID_WAREHOUSE_ALLOCATION);

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
     * @param string|null $salesOrderItemUuid
     *
     * @return $this
     */
    public function setSalesOrderItemUuid($salesOrderItemUuid)
    {
        $this->salesOrderItemUuid = $salesOrderItemUuid;
        $this->modifiedProperties[self::SALES_ORDER_ITEM_UUID] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getSalesOrderItemUuid()
    {
        return $this->salesOrderItemUuid;
    }

    /**
     * @module 
     *
     * @param string|null $salesOrderItemUuid
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSalesOrderItemUuidOrFail($salesOrderItemUuid)
    {
        if ($salesOrderItemUuid === null) {
            $this->throwNullValueException(static::SALES_ORDER_ITEM_UUID);
        }

        return $this->setSalesOrderItemUuid($salesOrderItemUuid);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getSalesOrderItemUuidOrFail()
    {
        if ($this->salesOrderItemUuid === null) {
            $this->throwNullValueException(static::SALES_ORDER_ITEM_UUID);
        }

        return $this->salesOrderItemUuid;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSalesOrderItemUuid()
    {
        $this->assertPropertyIsSet(self::SALES_ORDER_ITEM_UUID);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyStockEntityTransfer|null $warehouse
     *
     * @return $this
     */
    public function setWarehouse(SpyStockEntityTransfer $warehouse = null)
    {
        $this->warehouse = $warehouse;
        $this->modifiedProperties[self::WAREHOUSE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyStockEntityTransfer|null
     */
    public function getWarehouse()
    {
        return $this->warehouse;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyStockEntityTransfer $warehouse
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setWarehouseOrFail(SpyStockEntityTransfer $warehouse)
    {
        return $this->setWarehouse($warehouse);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyStockEntityTransfer
     */
    public function getWarehouseOrFail()
    {
        if ($this->warehouse === null) {
            $this->throwNullValueException(static::WAREHOUSE);
        }

        return $this->warehouse;
    }

    /**
     * @module 
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
                case 'idWarehouseAllocation':
                case 'fkWarehouse':
                case 'salesOrderItemUuid':
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
                case 'idWarehouseAllocation':
                case 'fkWarehouse':
                case 'salesOrderItemUuid':
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
                case 'idWarehouseAllocation':
                case 'fkWarehouse':
                case 'salesOrderItemUuid':
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
            'idWarehouseAllocation' => $this->idWarehouseAllocation,
            'fkWarehouse' => $this->fkWarehouse,
            'salesOrderItemUuid' => $this->salesOrderItemUuid,
            'warehouse' => $this->warehouse,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_warehouse_allocation' => $this->idWarehouseAllocation,
            'fk_warehouse' => $this->fkWarehouse,
            'sales_order_item_uuid' => $this->salesOrderItemUuid,
            'warehouse' => $this->warehouse,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_warehouse_allocation' => $this->idWarehouseAllocation instanceof AbstractTransfer ? $this->idWarehouseAllocation->toArray(true, false) : $this->idWarehouseAllocation,
            'fk_warehouse' => $this->fkWarehouse instanceof AbstractTransfer ? $this->fkWarehouse->toArray(true, false) : $this->fkWarehouse,
            'sales_order_item_uuid' => $this->salesOrderItemUuid instanceof AbstractTransfer ? $this->salesOrderItemUuid->toArray(true, false) : $this->salesOrderItemUuid,
            'warehouse' => $this->warehouse instanceof AbstractTransfer ? $this->warehouse->toArray(true, false) : $this->warehouse,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idWarehouseAllocation' => $this->idWarehouseAllocation instanceof AbstractTransfer ? $this->idWarehouseAllocation->toArray(true, true) : $this->idWarehouseAllocation,
            'fkWarehouse' => $this->fkWarehouse instanceof AbstractTransfer ? $this->fkWarehouse->toArray(true, true) : $this->fkWarehouse,
            'salesOrderItemUuid' => $this->salesOrderItemUuid instanceof AbstractTransfer ? $this->salesOrderItemUuid->toArray(true, true) : $this->salesOrderItemUuid,
            'warehouse' => $this->warehouse instanceof AbstractTransfer ? $this->warehouse->toArray(true, true) : $this->warehouse,
        ];
    }
}
