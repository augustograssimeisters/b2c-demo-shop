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
class WarehouseAllocationConditionsTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const WAREHOUSE_IDS = 'warehouseIds';

    /**
     * @var string
     */
    public const SALES_ORDER_ITEM_UUIDS = 'salesOrderItemUuids';

    /**
     * @var int[]
     */
    protected $warehouseIds = [];

    /**
     * @var string[]
     */
    protected $salesOrderItemUuids = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'warehouse_ids' => 'warehouseIds',
        'warehouseIds' => 'warehouseIds',
        'WarehouseIds' => 'warehouseIds',
        'sales_order_item_uuids' => 'salesOrderItemUuids',
        'salesOrderItemUuids' => 'salesOrderItemUuids',
        'SalesOrderItemUuids' => 'salesOrderItemUuids',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
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
     * @module WarehouseAllocation
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
     * @module WarehouseAllocation
     *
     * @return int[]
     */
    public function getWarehouseIds(): array
    {
        return $this->warehouseIds;
    }

    /**
     * @module WarehouseAllocation
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
     * @module WarehouseAllocation
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
     * @module WarehouseAllocation
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
     * @module WarehouseAllocation
     *
     * @return string[]
     */
    public function getSalesOrderItemUuids(): array
    {
        return $this->salesOrderItemUuids;
    }

    /**
     * @module WarehouseAllocation
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
     * @module WarehouseAllocation
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
                case 'warehouseIds':
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
                case 'warehouseIds':
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
                case 'warehouseIds':
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
            'warehouseIds' => $this->warehouseIds,
            'salesOrderItemUuids' => $this->salesOrderItemUuids,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'warehouse_ids' => $this->warehouseIds,
            'sales_order_item_uuids' => $this->salesOrderItemUuids,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'warehouse_ids' => $this->warehouseIds instanceof AbstractTransfer ? $this->warehouseIds->toArray(true, false) : $this->warehouseIds,
            'sales_order_item_uuids' => $this->salesOrderItemUuids instanceof AbstractTransfer ? $this->salesOrderItemUuids->toArray(true, false) : $this->salesOrderItemUuids,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'warehouseIds' => $this->warehouseIds instanceof AbstractTransfer ? $this->warehouseIds->toArray(true, true) : $this->warehouseIds,
            'salesOrderItemUuids' => $this->salesOrderItemUuids instanceof AbstractTransfer ? $this->salesOrderItemUuids->toArray(true, true) : $this->salesOrderItemUuids,
        ];
    }
}
