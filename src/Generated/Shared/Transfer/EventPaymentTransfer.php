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
class EventPaymentTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_SALES_ORDER = 'idSalesOrder';

    /**
     * @var string
     */
    public const ORDER_ITEM_IDS = 'orderItemIds';

    /**
     * @var int|null
     */
    protected $idSalesOrder;

    /**
     * @var int[]
     */
    protected $orderItemIds = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_sales_order' => 'idSalesOrder',
        'idSalesOrder' => 'idSalesOrder',
        'IdSalesOrder' => 'idSalesOrder',
        'order_item_ids' => 'orderItemIds',
        'orderItemIds' => 'orderItemIds',
        'OrderItemIds' => 'orderItemIds',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_SALES_ORDER => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_sales_order',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::ORDER_ITEM_IDS => [
            'type' => 'int[]',
            'type_shim' => null,
            'name_underscore' => 'order_item_ids',
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
     * @module SalesPayment
     *
     * @param int|null $idSalesOrder
     *
     * @return $this
     */
    public function setIdSalesOrder(?int $idSalesOrder = null)
    {
        $this->idSalesOrder = $idSalesOrder;
        $this->modifiedProperties[self::ID_SALES_ORDER] = true;

        return $this;
    }

    /**
     * @module SalesPayment
     *
     * @return int|null
     */
    public function getIdSalesOrder(): ?int
    {
        return $this->idSalesOrder;
    }

    /**
     * @module SalesPayment
     *
     * @param int $idSalesOrder
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdSalesOrderOrFail(int $idSalesOrder)
    {
        return $this->setIdSalesOrder($idSalesOrder);
    }

    /**
     * @module SalesPayment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdSalesOrderOrFail(): int
    {
        if ($this->idSalesOrder === null) {
            $this->throwNullValueException(static::ID_SALES_ORDER);
        }

        return $this->idSalesOrder;
    }

    /**
     * @module SalesPayment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdSalesOrder()
    {
        $this->assertPropertyIsSet(self::ID_SALES_ORDER);

        return $this;
    }

    /**
     * @module SalesPayment
     *
     * @param int[]|null $orderItemIds
     *
     * @return $this
     */
    public function setOrderItemIds(array $orderItemIds = null)
    {
        if ($orderItemIds === null) {
            $orderItemIds = [];
        }

        $this->orderItemIds = $orderItemIds;
        $this->modifiedProperties[self::ORDER_ITEM_IDS] = true;

        return $this;
    }

    /**
     * @module SalesPayment
     *
     * @return int[]
     */
    public function getOrderItemIds()
    {
        return $this->orderItemIds;
    }

    /**
     * @module SalesPayment
     *
     * @param int $orderItemId
     *
     * @return $this
     */
    public function addOrderItemId($orderItemId)
    {
        $this->orderItemIds[] = $orderItemId;
        $this->modifiedProperties[self::ORDER_ITEM_IDS] = true;

        return $this;
    }

    /**
     * @module SalesPayment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOrderItemIds()
    {
        $this->assertPropertyIsSet(self::ORDER_ITEM_IDS);

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
                case 'idSalesOrder':
                case 'orderItemIds':
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
                case 'idSalesOrder':
                case 'orderItemIds':
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
                case 'idSalesOrder':
                case 'orderItemIds':
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
            'idSalesOrder' => $this->idSalesOrder,
            'orderItemIds' => $this->orderItemIds,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_sales_order' => $this->idSalesOrder,
            'order_item_ids' => $this->orderItemIds,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_sales_order' => $this->idSalesOrder instanceof AbstractTransfer ? $this->idSalesOrder->toArray(true, false) : $this->idSalesOrder,
            'order_item_ids' => $this->orderItemIds instanceof AbstractTransfer ? $this->orderItemIds->toArray(true, false) : $this->orderItemIds,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idSalesOrder' => $this->idSalesOrder instanceof AbstractTransfer ? $this->idSalesOrder->toArray(true, true) : $this->idSalesOrder,
            'orderItemIds' => $this->orderItemIds instanceof AbstractTransfer ? $this->orderItemIds->toArray(true, true) : $this->orderItemIds,
        ];
    }
}
