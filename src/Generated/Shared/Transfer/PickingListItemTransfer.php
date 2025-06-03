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
class PickingListItemTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const QUANTITY = 'quantity';

    /**
     * @var string
     */
    public const ORDER_ITEM = 'orderItem';

    /**
     * @var string
     */
    public const NUMBER_OF_NOT_PICKED = 'numberOfNotPicked';

    /**
     * @var string
     */
    public const NUMBER_OF_PICKED = 'numberOfPicked';

    /**
     * @var string
     */
    public const ID_PICKING_LIST_ITEM = 'idPickingListItem';

    /**
     * @var string
     */
    public const UUID = 'uuid';

    /**
     * @var string
     */
    public const ID_PICKING_LIST = 'idPickingList';

    /**
     * @var int|null
     */
    protected $quantity;

    /**
     * @var \Generated\Shared\Transfer\ItemTransfer|null
     */
    protected $orderItem;

    /**
     * @var int|null
     */
    protected $numberOfNotPicked;

    /**
     * @var int|null
     */
    protected $numberOfPicked;

    /**
     * @var int|null
     */
    protected $idPickingListItem;

    /**
     * @var string|null
     */
    protected $uuid;

    /**
     * @var int|null
     */
    protected $idPickingList;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'quantity' => 'quantity',
        'Quantity' => 'quantity',
        'order_item' => 'orderItem',
        'orderItem' => 'orderItem',
        'OrderItem' => 'orderItem',
        'number_of_not_picked' => 'numberOfNotPicked',
        'numberOfNotPicked' => 'numberOfNotPicked',
        'NumberOfNotPicked' => 'numberOfNotPicked',
        'number_of_picked' => 'numberOfPicked',
        'numberOfPicked' => 'numberOfPicked',
        'NumberOfPicked' => 'numberOfPicked',
        'id_picking_list_item' => 'idPickingListItem',
        'idPickingListItem' => 'idPickingListItem',
        'IdPickingListItem' => 'idPickingListItem',
        'uuid' => 'uuid',
        'Uuid' => 'uuid',
        'id_picking_list' => 'idPickingList',
        'idPickingList' => 'idPickingList',
        'IdPickingList' => 'idPickingList',
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
        self::ORDER_ITEM => [
            'type' => 'Generated\Shared\Transfer\ItemTransfer',
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
        self::ID_PICKING_LIST_ITEM => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_picking_list_item',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
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
            'is_strict' => true,
        ],
        self::ID_PICKING_LIST => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_picking_list',
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
     * @module PickingListMultiShipmentPickingStrategyExample|PickingList|PickingListsBackendApi
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
     * @module PickingListMultiShipmentPickingStrategyExample|PickingList|PickingListsBackendApi
     *
     * @return int|null
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    /**
     * @module PickingListMultiShipmentPickingStrategyExample|PickingList|PickingListsBackendApi
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
     * @module PickingListMultiShipmentPickingStrategyExample|PickingList|PickingListsBackendApi
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
     * @module PickingListMultiShipmentPickingStrategyExample|PickingList|PickingListsBackendApi
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
     * @module PickingListMultiShipmentPickingStrategyExample|PickingList|PickingListsBackendApi
     *
     * @param \Generated\Shared\Transfer\ItemTransfer|null $orderItem
     *
     * @return $this
     */
    public function setOrderItem(?ItemTransfer $orderItem = null)
    {
        $this->orderItem = $orderItem;
        $this->modifiedProperties[self::ORDER_ITEM] = true;

        return $this;
    }

    /**
     * @module PickingListMultiShipmentPickingStrategyExample|PickingList|PickingListsBackendApi
     *
     * @return \Generated\Shared\Transfer\ItemTransfer|null
     */
    public function getOrderItem(): ?ItemTransfer
    {
        return $this->orderItem;
    }

    /**
     * @module PickingListMultiShipmentPickingStrategyExample|PickingList|PickingListsBackendApi
     *
     * @param \Generated\Shared\Transfer\ItemTransfer $orderItem
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setOrderItemOrFail(ItemTransfer $orderItem)
    {
        return $this->setOrderItem($orderItem);
    }

    /**
     * @module PickingListMultiShipmentPickingStrategyExample|PickingList|PickingListsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ItemTransfer
     */
    public function getOrderItemOrFail(): ItemTransfer
    {
        if ($this->orderItem === null) {
            $this->throwNullValueException(static::ORDER_ITEM);
        }

        return $this->orderItem;
    }

    /**
     * @module PickingListMultiShipmentPickingStrategyExample|PickingList|PickingListsBackendApi
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
     * @module PickingListMultiShipmentPickingStrategyExample|PickingList|PickingListsBackendApi
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
     * @module PickingListMultiShipmentPickingStrategyExample|PickingList|PickingListsBackendApi
     *
     * @return int|null
     */
    public function getNumberOfNotPicked(): ?int
    {
        return $this->numberOfNotPicked;
    }

    /**
     * @module PickingListMultiShipmentPickingStrategyExample|PickingList|PickingListsBackendApi
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
     * @module PickingListMultiShipmentPickingStrategyExample|PickingList|PickingListsBackendApi
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
     * @module PickingListMultiShipmentPickingStrategyExample|PickingList|PickingListsBackendApi
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
     * @module PickingListMultiShipmentPickingStrategyExample|PickingList|PickingListsBackendApi
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
     * @module PickingListMultiShipmentPickingStrategyExample|PickingList|PickingListsBackendApi
     *
     * @return int|null
     */
    public function getNumberOfPicked(): ?int
    {
        return $this->numberOfPicked;
    }

    /**
     * @module PickingListMultiShipmentPickingStrategyExample|PickingList|PickingListsBackendApi
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
     * @module PickingListMultiShipmentPickingStrategyExample|PickingList|PickingListsBackendApi
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
     * @module PickingListMultiShipmentPickingStrategyExample|PickingList|PickingListsBackendApi
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
     * @module PickingList
     *
     * @param int|null $idPickingListItem
     *
     * @return $this
     */
    public function setIdPickingListItem(?int $idPickingListItem = null)
    {
        $this->idPickingListItem = $idPickingListItem;
        $this->modifiedProperties[self::ID_PICKING_LIST_ITEM] = true;

        return $this;
    }

    /**
     * @module PickingList
     *
     * @return int|null
     */
    public function getIdPickingListItem(): ?int
    {
        return $this->idPickingListItem;
    }

    /**
     * @module PickingList
     *
     * @param int $idPickingListItem
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdPickingListItemOrFail(int $idPickingListItem)
    {
        return $this->setIdPickingListItem($idPickingListItem);
    }

    /**
     * @module PickingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdPickingListItemOrFail(): int
    {
        if ($this->idPickingListItem === null) {
            $this->throwNullValueException(static::ID_PICKING_LIST_ITEM);
        }

        return $this->idPickingListItem;
    }

    /**
     * @module PickingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdPickingListItem()
    {
        $this->assertPropertyIsSet(self::ID_PICKING_LIST_ITEM);

        return $this;
    }

    /**
     * @module PickingList|PickingListsBackendApi
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
     * @module PickingList|PickingListsBackendApi
     *
     * @return string|null
     */
    public function getUuid(): ?string
    {
        return $this->uuid;
    }

    /**
     * @module PickingList|PickingListsBackendApi
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
     * @module PickingList|PickingListsBackendApi
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
     * @module PickingList|PickingListsBackendApi
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
     * @module PickingList
     *
     * @param int|null $idPickingList
     *
     * @return $this
     */
    public function setIdPickingList(?int $idPickingList = null)
    {
        $this->idPickingList = $idPickingList;
        $this->modifiedProperties[self::ID_PICKING_LIST] = true;

        return $this;
    }

    /**
     * @module PickingList
     *
     * @return int|null
     */
    public function getIdPickingList(): ?int
    {
        return $this->idPickingList;
    }

    /**
     * @module PickingList
     *
     * @param int $idPickingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdPickingListOrFail(int $idPickingList)
    {
        return $this->setIdPickingList($idPickingList);
    }

    /**
     * @module PickingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdPickingListOrFail(): int
    {
        if ($this->idPickingList === null) {
            $this->throwNullValueException(static::ID_PICKING_LIST);
        }

        return $this->idPickingList;
    }

    /**
     * @module PickingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdPickingList()
    {
        $this->assertPropertyIsSet(self::ID_PICKING_LIST);

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
                case 'numberOfNotPicked':
                case 'numberOfPicked':
                case 'idPickingListItem':
                case 'uuid':
                case 'idPickingList':
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
                case 'numberOfNotPicked':
                case 'numberOfPicked':
                case 'idPickingListItem':
                case 'uuid':
                case 'idPickingList':
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
                case 'numberOfNotPicked':
                case 'numberOfPicked':
                case 'idPickingListItem':
                case 'uuid':
                case 'idPickingList':
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
            'numberOfNotPicked' => $this->numberOfNotPicked,
            'numberOfPicked' => $this->numberOfPicked,
            'idPickingListItem' => $this->idPickingListItem,
            'uuid' => $this->uuid,
            'idPickingList' => $this->idPickingList,
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
            'number_of_not_picked' => $this->numberOfNotPicked,
            'number_of_picked' => $this->numberOfPicked,
            'id_picking_list_item' => $this->idPickingListItem,
            'uuid' => $this->uuid,
            'id_picking_list' => $this->idPickingList,
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
            'number_of_not_picked' => $this->numberOfNotPicked instanceof AbstractTransfer ? $this->numberOfNotPicked->toArray(true, false) : $this->numberOfNotPicked,
            'number_of_picked' => $this->numberOfPicked instanceof AbstractTransfer ? $this->numberOfPicked->toArray(true, false) : $this->numberOfPicked,
            'id_picking_list_item' => $this->idPickingListItem instanceof AbstractTransfer ? $this->idPickingListItem->toArray(true, false) : $this->idPickingListItem,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, false) : $this->uuid,
            'id_picking_list' => $this->idPickingList instanceof AbstractTransfer ? $this->idPickingList->toArray(true, false) : $this->idPickingList,
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
            'numberOfNotPicked' => $this->numberOfNotPicked instanceof AbstractTransfer ? $this->numberOfNotPicked->toArray(true, true) : $this->numberOfNotPicked,
            'numberOfPicked' => $this->numberOfPicked instanceof AbstractTransfer ? $this->numberOfPicked->toArray(true, true) : $this->numberOfPicked,
            'idPickingListItem' => $this->idPickingListItem instanceof AbstractTransfer ? $this->idPickingListItem->toArray(true, true) : $this->idPickingListItem,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, true) : $this->uuid,
            'idPickingList' => $this->idPickingList instanceof AbstractTransfer ? $this->idPickingList->toArray(true, true) : $this->idPickingList,
            'orderItem' => $this->orderItem instanceof AbstractTransfer ? $this->orderItem->toArray(true, true) : $this->orderItem,
        ];
    }
}
