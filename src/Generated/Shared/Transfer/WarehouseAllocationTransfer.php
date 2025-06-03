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
class WarehouseAllocationTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const WAREHOUSE = 'warehouse';

    /**
     * @var string
     */
    public const SALES_ORDER_ITEM_UUID = 'salesOrderItemUuid';

    /**
     * @var \Generated\Shared\Transfer\StockTransfer|null
     */
    protected $warehouse;

    /**
     * @var string|null
     */
    protected $salesOrderItemUuid;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'warehouse' => 'warehouse',
        'Warehouse' => 'warehouse',
        'sales_order_item_uuid' => 'salesOrderItemUuid',
        'salesOrderItemUuid' => 'salesOrderItemUuid',
        'SalesOrderItemUuid' => 'salesOrderItemUuid',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
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
            'is_strict' => true,
        ],
    ];

    /**
     * @module WarehouseAllocation
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
     * @module WarehouseAllocation
     *
     * @return \Generated\Shared\Transfer\StockTransfer|null
     */
    public function getWarehouse(): ?StockTransfer
    {
        return $this->warehouse;
    }

    /**
     * @module WarehouseAllocation
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
     * @module WarehouseAllocation
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
     * @module WarehouseAllocation
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
     * @module WarehouseAllocation
     *
     * @param string|null $salesOrderItemUuid
     *
     * @return $this
     */
    public function setSalesOrderItemUuid(?string $salesOrderItemUuid = null)
    {
        $this->salesOrderItemUuid = $salesOrderItemUuid;
        $this->modifiedProperties[self::SALES_ORDER_ITEM_UUID] = true;

        return $this;
    }

    /**
     * @module WarehouseAllocation
     *
     * @return string|null
     */
    public function getSalesOrderItemUuid(): ?string
    {
        return $this->salesOrderItemUuid;
    }

    /**
     * @module WarehouseAllocation
     *
     * @param string $salesOrderItemUuid
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSalesOrderItemUuidOrFail(string $salesOrderItemUuid)
    {
        return $this->setSalesOrderItemUuid($salesOrderItemUuid);
    }

    /**
     * @module WarehouseAllocation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getSalesOrderItemUuidOrFail(): string
    {
        if ($this->salesOrderItemUuid === null) {
            $this->throwNullValueException(static::SALES_ORDER_ITEM_UUID);
        }

        return $this->salesOrderItemUuid;
    }

    /**
     * @module WarehouseAllocation
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
            'salesOrderItemUuid' => $this->salesOrderItemUuid instanceof AbstractTransfer ? $this->salesOrderItemUuid->toArray(true, true) : $this->salesOrderItemUuid,
            'warehouse' => $this->warehouse instanceof AbstractTransfer ? $this->warehouse->toArray(true, true) : $this->warehouse,
        ];
    }
}
