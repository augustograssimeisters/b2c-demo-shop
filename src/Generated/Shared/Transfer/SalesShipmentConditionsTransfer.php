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
class SalesShipmentConditionsTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const SALES_SHIPMENT_IDS = 'salesShipmentIds';

    /**
     * @var string
     */
    public const SALES_ORDER_ITEM_IDS = 'salesOrderItemIds';

    /**
     * @var string
     */
    public const ORDER_ITEM_UUIDS = 'orderItemUuids';

    /**
     * @var string
     */
    public const WITH_ORDER_ITEMS = 'withOrderItems';

    /**
     * @var int[]
     */
    protected $salesShipmentIds = [];

    /**
     * @var int[]
     */
    protected $salesOrderItemIds = [];

    /**
     * @var string[]
     */
    protected $orderItemUuids = [];

    /**
     * @var bool|null
     */
    protected $withOrderItems;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'sales_shipment_ids' => 'salesShipmentIds',
        'salesShipmentIds' => 'salesShipmentIds',
        'SalesShipmentIds' => 'salesShipmentIds',
        'sales_order_item_ids' => 'salesOrderItemIds',
        'salesOrderItemIds' => 'salesOrderItemIds',
        'SalesOrderItemIds' => 'salesOrderItemIds',
        'order_item_uuids' => 'orderItemUuids',
        'orderItemUuids' => 'orderItemUuids',
        'OrderItemUuids' => 'orderItemUuids',
        'with_order_items' => 'withOrderItems',
        'withOrderItems' => 'withOrderItems',
        'WithOrderItems' => 'withOrderItems',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::SALES_SHIPMENT_IDS => [
            'type' => 'int[]',
            'type_shim' => null,
            'name_underscore' => 'sales_shipment_ids',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::SALES_ORDER_ITEM_IDS => [
            'type' => 'int[]',
            'type_shim' => null,
            'name_underscore' => 'sales_order_item_ids',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::ORDER_ITEM_UUIDS => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'order_item_uuids',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::WITH_ORDER_ITEMS => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'with_order_items',
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
     * @module ShipmentGui|Shipment
     *
     * @param int[]|null $salesShipmentIds
     *
     * @return $this
     */
    public function setSalesShipmentIds(array $salesShipmentIds = null)
    {
        if ($salesShipmentIds === null) {
            $salesShipmentIds = [];
        }

        $this->salesShipmentIds = [];

        foreach ($salesShipmentIds as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::SALES_SHIPMENT_IDS]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addIdSalesShipment(...$args);
        }

        $this->modifiedProperties[self::SALES_SHIPMENT_IDS] = true;

        return $this;
    }

    /**
     * @module ShipmentGui|Shipment
     *
     * @return int[]
     */
    public function getSalesShipmentIds(): array
    {
        return $this->salesShipmentIds;
    }

    /**
     * @module ShipmentGui|Shipment
     *
     * @param int $idSalesShipment
     *
     * @return $this
     */
    public function addIdSalesShipment(int $idSalesShipment)
    {
        $this->salesShipmentIds[] = $idSalesShipment;
        $this->modifiedProperties[self::SALES_SHIPMENT_IDS] = true;

        return $this;
    }

    /**
     * @module ShipmentGui|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSalesShipmentIds()
    {
        $this->assertPropertyIsSet(self::SALES_SHIPMENT_IDS);

        return $this;
    }

    /**
     * @module Shipment
     *
     * @param int[]|null $salesOrderItemIds
     *
     * @return $this
     */
    public function setSalesOrderItemIds(array $salesOrderItemIds = null)
    {
        if ($salesOrderItemIds === null) {
            $salesOrderItemIds = [];
        }

        $this->salesOrderItemIds = [];

        foreach ($salesOrderItemIds as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::SALES_ORDER_ITEM_IDS]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addIdSalesOrderItem(...$args);
        }

        $this->modifiedProperties[self::SALES_ORDER_ITEM_IDS] = true;

        return $this;
    }

    /**
     * @module Shipment
     *
     * @return int[]
     */
    public function getSalesOrderItemIds(): array
    {
        return $this->salesOrderItemIds;
    }

    /**
     * @module Shipment
     *
     * @param int $idSalesOrderItem
     *
     * @return $this
     */
    public function addIdSalesOrderItem(int $idSalesOrderItem)
    {
        $this->salesOrderItemIds[] = $idSalesOrderItem;
        $this->modifiedProperties[self::SALES_ORDER_ITEM_IDS] = true;

        return $this;
    }

    /**
     * @module Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSalesOrderItemIds()
    {
        $this->assertPropertyIsSet(self::SALES_ORDER_ITEM_IDS);

        return $this;
    }

    /**
     * @module Shipment|ShipmentsBackendApi
     *
     * @param string[]|null $orderItemUuids
     *
     * @return $this
     */
    public function setOrderItemUuids(array $orderItemUuids = null)
    {
        if ($orderItemUuids === null) {
            $orderItemUuids = [];
        }

        $this->orderItemUuids = [];

        foreach ($orderItemUuids as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::ORDER_ITEM_UUIDS]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addOrderItemUuid(...$args);
        }

        $this->modifiedProperties[self::ORDER_ITEM_UUIDS] = true;

        return $this;
    }

    /**
     * @module Shipment|ShipmentsBackendApi
     *
     * @return string[]
     */
    public function getOrderItemUuids(): array
    {
        return $this->orderItemUuids;
    }

    /**
     * @module Shipment|ShipmentsBackendApi
     *
     * @param string $orderItemUuid
     *
     * @return $this
     */
    public function addOrderItemUuid(string $orderItemUuid)
    {
        $this->orderItemUuids[] = $orderItemUuid;
        $this->modifiedProperties[self::ORDER_ITEM_UUIDS] = true;

        return $this;
    }

    /**
     * @module Shipment|ShipmentsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOrderItemUuids()
    {
        $this->assertPropertyIsSet(self::ORDER_ITEM_UUIDS);

        return $this;
    }

    /**
     * @module Shipment|ShipmentsBackendApi
     *
     * @param bool|null $withOrderItems
     *
     * @return $this
     */
    public function setWithOrderItems(?bool $withOrderItems = null)
    {
        $this->withOrderItems = $withOrderItems;
        $this->modifiedProperties[self::WITH_ORDER_ITEMS] = true;

        return $this;
    }

    /**
     * @module Shipment|ShipmentsBackendApi
     *
     * @return bool|null
     */
    public function getWithOrderItems(): ?bool
    {
        return $this->withOrderItems;
    }

    /**
     * @module Shipment|ShipmentsBackendApi
     *
     * @param bool $withOrderItems
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setWithOrderItemsOrFail(bool $withOrderItems)
    {
        return $this->setWithOrderItems($withOrderItems);
    }

    /**
     * @module Shipment|ShipmentsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getWithOrderItemsOrFail(): bool
    {
        if ($this->withOrderItems === null) {
            $this->throwNullValueException(static::WITH_ORDER_ITEMS);
        }

        return $this->withOrderItems;
    }

    /**
     * @module Shipment|ShipmentsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireWithOrderItems()
    {
        $this->assertPropertyIsSet(self::WITH_ORDER_ITEMS);

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
                case 'salesShipmentIds':
                case 'salesOrderItemIds':
                case 'orderItemUuids':
                case 'withOrderItems':
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
                case 'salesShipmentIds':
                case 'salesOrderItemIds':
                case 'orderItemUuids':
                case 'withOrderItems':
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
                case 'salesShipmentIds':
                case 'salesOrderItemIds':
                case 'orderItemUuids':
                case 'withOrderItems':
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
            'salesShipmentIds' => $this->salesShipmentIds,
            'salesOrderItemIds' => $this->salesOrderItemIds,
            'orderItemUuids' => $this->orderItemUuids,
            'withOrderItems' => $this->withOrderItems,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'sales_shipment_ids' => $this->salesShipmentIds,
            'sales_order_item_ids' => $this->salesOrderItemIds,
            'order_item_uuids' => $this->orderItemUuids,
            'with_order_items' => $this->withOrderItems,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'sales_shipment_ids' => $this->salesShipmentIds instanceof AbstractTransfer ? $this->salesShipmentIds->toArray(true, false) : $this->salesShipmentIds,
            'sales_order_item_ids' => $this->salesOrderItemIds instanceof AbstractTransfer ? $this->salesOrderItemIds->toArray(true, false) : $this->salesOrderItemIds,
            'order_item_uuids' => $this->orderItemUuids instanceof AbstractTransfer ? $this->orderItemUuids->toArray(true, false) : $this->orderItemUuids,
            'with_order_items' => $this->withOrderItems instanceof AbstractTransfer ? $this->withOrderItems->toArray(true, false) : $this->withOrderItems,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'salesShipmentIds' => $this->salesShipmentIds instanceof AbstractTransfer ? $this->salesShipmentIds->toArray(true, true) : $this->salesShipmentIds,
            'salesOrderItemIds' => $this->salesOrderItemIds instanceof AbstractTransfer ? $this->salesOrderItemIds->toArray(true, true) : $this->salesOrderItemIds,
            'orderItemUuids' => $this->orderItemUuids instanceof AbstractTransfer ? $this->orderItemUuids->toArray(true, true) : $this->orderItemUuids,
            'withOrderItems' => $this->withOrderItems instanceof AbstractTransfer ? $this->withOrderItems->toArray(true, true) : $this->withOrderItems,
        ];
    }
}
