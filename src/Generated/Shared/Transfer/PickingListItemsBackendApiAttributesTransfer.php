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
class PickingListItemsBackendApiAttributesTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const QUANTITY = 'quantity';

    /**
     * @var string
     */
    public const NUMBER_OF_PICKED = 'numberOfPicked';

    /**
     * @var string
     */
    public const NUMBER_OF_NOT_PICKED = 'numberOfNotPicked';

    /**
     * @var string
     */
    public const ORDER_ITEM = 'orderItem';

    /**
     * @var int|null
     */
    protected $quantity;

    /**
     * @var int|null
     */
    protected $numberOfPicked;

    /**
     * @var int|null
     */
    protected $numberOfNotPicked;

    /**
     * @var \Generated\Shared\Transfer\OrderItemsBackendApiAttributesTransfer|null
     */
    protected $orderItem;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'quantity' => 'quantity',
        'Quantity' => 'quantity',
        'number_of_picked' => 'numberOfPicked',
        'numberOfPicked' => 'numberOfPicked',
        'NumberOfPicked' => 'numberOfPicked',
        'number_of_not_picked' => 'numberOfNotPicked',
        'numberOfNotPicked' => 'numberOfNotPicked',
        'NumberOfNotPicked' => 'numberOfNotPicked',
        'order_item' => 'orderItem',
        'orderItem' => 'orderItem',
        'OrderItem' => 'orderItem',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::QUANTITY => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'quantity',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::NUMBER_OF_PICKED => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'number_of_picked',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::NUMBER_OF_NOT_PICKED => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'number_of_not_picked',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::ORDER_ITEM => [
            'type' => 'Generated\Shared\Transfer\OrderItemsBackendApiAttributesTransfer',
            'type_shim' => null,
            'name_underscore' => 'order_item',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
    ];

    /**
     * @module PickingListsBackendApi
     *
     * @param int|null $quantity
     *
     * @return $this
     */
    public function setQuantity(?int $quantity = null)
    {
        $this->quantity = $quantity;
        $this->modifiedProperties[self::QUANTITY] = true;

        return $this;
    }

    /**
     * @module PickingListsBackendApi
     *
     * @return int|null
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    /**
     * @module PickingListsBackendApi
     *
     * @param int $quantity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setQuantityOrFail(int $quantity)
    {
        return $this->setQuantity($quantity);
    }

    /**
     * @module PickingListsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getQuantityOrFail(): int
    {
        if ($this->quantity === null) {
            $this->throwNullValueException(static::QUANTITY);
        }

        return $this->quantity;
    }

    /**
     * @module PickingListsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireQuantity()
    {
        $this->assertPropertyIsSet(self::QUANTITY);

        return $this;
    }

    /**
     * @module PickingListsBackendApi
     *
     * @param int|null $numberOfPicked
     *
     * @return $this
     */
    public function setNumberOfPicked(?int $numberOfPicked = null)
    {
        $this->numberOfPicked = $numberOfPicked;
        $this->modifiedProperties[self::NUMBER_OF_PICKED] = true;

        return $this;
    }

    /**
     * @module PickingListsBackendApi
     *
     * @return int|null
     */
    public function getNumberOfPicked(): ?int
    {
        return $this->numberOfPicked;
    }

    /**
     * @module PickingListsBackendApi
     *
     * @param int $numberOfPicked
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNumberOfPickedOrFail(int $numberOfPicked)
    {
        return $this->setNumberOfPicked($numberOfPicked);
    }

    /**
     * @module PickingListsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getNumberOfPickedOrFail(): int
    {
        if ($this->numberOfPicked === null) {
            $this->throwNullValueException(static::NUMBER_OF_PICKED);
        }

        return $this->numberOfPicked;
    }

    /**
     * @module PickingListsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireNumberOfPicked()
    {
        $this->assertPropertyIsSet(self::NUMBER_OF_PICKED);

        return $this;
    }

    /**
     * @module PickingListsBackendApi
     *
     * @param int|null $numberOfNotPicked
     *
     * @return $this
     */
    public function setNumberOfNotPicked(?int $numberOfNotPicked = null)
    {
        $this->numberOfNotPicked = $numberOfNotPicked;
        $this->modifiedProperties[self::NUMBER_OF_NOT_PICKED] = true;

        return $this;
    }

    /**
     * @module PickingListsBackendApi
     *
     * @return int|null
     */
    public function getNumberOfNotPicked(): ?int
    {
        return $this->numberOfNotPicked;
    }

    /**
     * @module PickingListsBackendApi
     *
     * @param int $numberOfNotPicked
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNumberOfNotPickedOrFail(int $numberOfNotPicked)
    {
        return $this->setNumberOfNotPicked($numberOfNotPicked);
    }

    /**
     * @module PickingListsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getNumberOfNotPickedOrFail(): int
    {
        if ($this->numberOfNotPicked === null) {
            $this->throwNullValueException(static::NUMBER_OF_NOT_PICKED);
        }

        return $this->numberOfNotPicked;
    }

    /**
     * @module PickingListsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireNumberOfNotPicked()
    {
        $this->assertPropertyIsSet(self::NUMBER_OF_NOT_PICKED);

        return $this;
    }

    /**
     * @module PickingListsBackendApi|ProductsBackendApi|SalesOrdersBackendApi|ShipmentsBackendApi
     *
     * @param \Generated\Shared\Transfer\OrderItemsBackendApiAttributesTransfer|null $orderItem
     *
     * @return $this
     */
    public function setOrderItem(?OrderItemsBackendApiAttributesTransfer $orderItem = null)
    {
        $this->orderItem = $orderItem;
        $this->modifiedProperties[self::ORDER_ITEM] = true;

        return $this;
    }

    /**
     * @module PickingListsBackendApi|ProductsBackendApi|SalesOrdersBackendApi|ShipmentsBackendApi
     *
     * @return \Generated\Shared\Transfer\OrderItemsBackendApiAttributesTransfer|null
     */
    public function getOrderItem(): ?OrderItemsBackendApiAttributesTransfer
    {
        return $this->orderItem;
    }

    /**
     * @module PickingListsBackendApi|ProductsBackendApi|SalesOrdersBackendApi|ShipmentsBackendApi
     *
     * @param \Generated\Shared\Transfer\OrderItemsBackendApiAttributesTransfer $orderItem
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setOrderItemOrFail(OrderItemsBackendApiAttributesTransfer $orderItem)
    {
        return $this->setOrderItem($orderItem);
    }

    /**
     * @module PickingListsBackendApi|ProductsBackendApi|SalesOrdersBackendApi|ShipmentsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\OrderItemsBackendApiAttributesTransfer
     */
    public function getOrderItemOrFail(): OrderItemsBackendApiAttributesTransfer
    {
        if ($this->orderItem === null) {
            $this->throwNullValueException(static::ORDER_ITEM);
        }

        return $this->orderItem;
    }

    /**
     * @module PickingListsBackendApi|ProductsBackendApi|SalesOrdersBackendApi|ShipmentsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOrderItem()
    {
        $this->assertPropertyIsSet(self::ORDER_ITEM);

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
                case 'quantity':
                case 'numberOfPicked':
                case 'numberOfNotPicked':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'orderItem':
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
                case 'quantity':
                case 'numberOfPicked':
                case 'numberOfNotPicked':
                    $values[$arrayKey] = $value;

                    break;
                case 'orderItem':
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
                case 'quantity':
                case 'numberOfPicked':
                case 'numberOfNotPicked':
                    $values[$arrayKey] = $value;

                    break;
                case 'orderItem':
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
            'quantity' => $this->quantity,
            'numberOfPicked' => $this->numberOfPicked,
            'numberOfNotPicked' => $this->numberOfNotPicked,
            'orderItem' => $this->orderItem,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'quantity' => $this->quantity,
            'number_of_picked' => $this->numberOfPicked,
            'number_of_not_picked' => $this->numberOfNotPicked,
            'order_item' => $this->orderItem,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'quantity' => $this->quantity instanceof AbstractTransfer ? $this->quantity->toArray(true, false) : $this->quantity,
            'number_of_picked' => $this->numberOfPicked instanceof AbstractTransfer ? $this->numberOfPicked->toArray(true, false) : $this->numberOfPicked,
            'number_of_not_picked' => $this->numberOfNotPicked instanceof AbstractTransfer ? $this->numberOfNotPicked->toArray(true, false) : $this->numberOfNotPicked,
            'order_item' => $this->orderItem instanceof AbstractTransfer ? $this->orderItem->toArray(true, false) : $this->orderItem,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'quantity' => $this->quantity instanceof AbstractTransfer ? $this->quantity->toArray(true, true) : $this->quantity,
            'numberOfPicked' => $this->numberOfPicked instanceof AbstractTransfer ? $this->numberOfPicked->toArray(true, true) : $this->numberOfPicked,
            'numberOfNotPicked' => $this->numberOfNotPicked instanceof AbstractTransfer ? $this->numberOfNotPicked->toArray(true, true) : $this->numberOfNotPicked,
            'orderItem' => $this->orderItem instanceof AbstractTransfer ? $this->orderItem->toArray(true, true) : $this->orderItem,
        ];
    }
}
