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
class SpyPickingListItemEntityTransfer extends AbstractEntityTransfer
{
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
    public const FK_PICKING_LIST = 'fkPickingList';

    /**
     * @var string
     */
    public const SALES_ORDER_ITEM_UUID = 'salesOrderItemUuid';

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
    public const SPY_PICKING_LIST = 'spyPickingList';

    /**
     * @var integer|null
     */
    protected $idPickingListItem;

    /**
     * @var string|null
     */
    protected $uuid;

    /**
     * @var integer|null
     */
    protected $fkPickingList;

    /**
     * @var string|null
     */
    protected $salesOrderItemUuid;

    /**
     * @var integer|null
     */
    protected $quantity;

    /**
     * @var integer|null
     */
    protected $numberOfPicked;

    /**
     * @var integer|null
     */
    protected $numberOfNotPicked;

    /**
     * @var \Generated\Shared\Transfer\SpyPickingListEntityTransfer|null
     */
    protected $spyPickingList;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_picking_list_item' => 'idPickingListItem',
        'idPickingListItem' => 'idPickingListItem',
        'IdPickingListItem' => 'idPickingListItem',
        'uuid' => 'uuid',
        'Uuid' => 'uuid',
        'fk_picking_list' => 'fkPickingList',
        'fkPickingList' => 'fkPickingList',
        'FkPickingList' => 'fkPickingList',
        'sales_order_item_uuid' => 'salesOrderItemUuid',
        'salesOrderItemUuid' => 'salesOrderItemUuid',
        'SalesOrderItemUuid' => 'salesOrderItemUuid',
        'quantity' => 'quantity',
        'Quantity' => 'quantity',
        'number_of_picked' => 'numberOfPicked',
        'numberOfPicked' => 'numberOfPicked',
        'NumberOfPicked' => 'numberOfPicked',
        'number_of_not_picked' => 'numberOfNotPicked',
        'numberOfNotPicked' => 'numberOfNotPicked',
        'NumberOfNotPicked' => 'numberOfNotPicked',
        'spy_picking_list' => 'spyPickingList',
        'spyPickingList' => 'spyPickingList',
        'SpyPickingList' => 'spyPickingList',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_PICKING_LIST_ITEM => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_picking_list_item',
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
        self::FK_PICKING_LIST => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_picking_list',
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
        self::QUANTITY => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'quantity',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::NUMBER_OF_PICKED => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'number_of_picked',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::NUMBER_OF_NOT_PICKED => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'number_of_not_picked',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PICKING_LIST => [
            'type' => 'Generated\Shared\Transfer\SpyPickingListEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_picking_list',
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
    public static $entityNamespace = 'Orm\Zed\PickingList\Persistence\SpyPickingListItem';


    /**
     * @module 
     *
     * @param integer|null $idPickingListItem
     *
     * @return $this
     */
    public function setIdPickingListItem($idPickingListItem)
    {
        $this->idPickingListItem = $idPickingListItem;
        $this->modifiedProperties[self::ID_PICKING_LIST_ITEM] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdPickingListItem()
    {
        return $this->idPickingListItem;
    }

    /**
     * @module 
     *
     * @param integer|null $idPickingListItem
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdPickingListItemOrFail($idPickingListItem)
    {
        if ($idPickingListItem === null) {
            $this->throwNullValueException(static::ID_PICKING_LIST_ITEM);
        }

        return $this->setIdPickingListItem($idPickingListItem);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdPickingListItemOrFail()
    {
        if ($this->idPickingListItem === null) {
            $this->throwNullValueException(static::ID_PICKING_LIST_ITEM);
        }

        return $this->idPickingListItem;
    }

    /**
     * @module 
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
     * @param integer|null $fkPickingList
     *
     * @return $this
     */
    public function setFkPickingList($fkPickingList)
    {
        $this->fkPickingList = $fkPickingList;
        $this->modifiedProperties[self::FK_PICKING_LIST] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkPickingList()
    {
        return $this->fkPickingList;
    }

    /**
     * @module 
     *
     * @param integer|null $fkPickingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkPickingListOrFail($fkPickingList)
    {
        if ($fkPickingList === null) {
            $this->throwNullValueException(static::FK_PICKING_LIST);
        }

        return $this->setFkPickingList($fkPickingList);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkPickingListOrFail()
    {
        if ($this->fkPickingList === null) {
            $this->throwNullValueException(static::FK_PICKING_LIST);
        }

        return $this->fkPickingList;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkPickingList()
    {
        $this->assertPropertyIsSet(self::FK_PICKING_LIST);

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
     * @param integer|null $quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        $this->modifiedProperties[self::QUANTITY] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @module 
     *
     * @param integer|null $quantity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setQuantityOrFail($quantity)
    {
        if ($quantity === null) {
            $this->throwNullValueException(static::QUANTITY);
        }

        return $this->setQuantity($quantity);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getQuantityOrFail()
    {
        if ($this->quantity === null) {
            $this->throwNullValueException(static::QUANTITY);
        }

        return $this->quantity;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param integer|null $numberOfPicked
     *
     * @return $this
     */
    public function setNumberOfPicked($numberOfPicked)
    {
        $this->numberOfPicked = $numberOfPicked;
        $this->modifiedProperties[self::NUMBER_OF_PICKED] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getNumberOfPicked()
    {
        return $this->numberOfPicked;
    }

    /**
     * @module 
     *
     * @param integer|null $numberOfPicked
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNumberOfPickedOrFail($numberOfPicked)
    {
        if ($numberOfPicked === null) {
            $this->throwNullValueException(static::NUMBER_OF_PICKED);
        }

        return $this->setNumberOfPicked($numberOfPicked);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getNumberOfPickedOrFail()
    {
        if ($this->numberOfPicked === null) {
            $this->throwNullValueException(static::NUMBER_OF_PICKED);
        }

        return $this->numberOfPicked;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param integer|null $numberOfNotPicked
     *
     * @return $this
     */
    public function setNumberOfNotPicked($numberOfNotPicked)
    {
        $this->numberOfNotPicked = $numberOfNotPicked;
        $this->modifiedProperties[self::NUMBER_OF_NOT_PICKED] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getNumberOfNotPicked()
    {
        return $this->numberOfNotPicked;
    }

    /**
     * @module 
     *
     * @param integer|null $numberOfNotPicked
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNumberOfNotPickedOrFail($numberOfNotPicked)
    {
        if ($numberOfNotPicked === null) {
            $this->throwNullValueException(static::NUMBER_OF_NOT_PICKED);
        }

        return $this->setNumberOfNotPicked($numberOfNotPicked);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getNumberOfNotPickedOrFail()
    {
        if ($this->numberOfNotPicked === null) {
            $this->throwNullValueException(static::NUMBER_OF_NOT_PICKED);
        }

        return $this->numberOfNotPicked;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyPickingListEntityTransfer|null $spyPickingList
     *
     * @return $this
     */
    public function setSpyPickingList(SpyPickingListEntityTransfer $spyPickingList = null)
    {
        $this->spyPickingList = $spyPickingList;
        $this->modifiedProperties[self::SPY_PICKING_LIST] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyPickingListEntityTransfer|null
     */
    public function getSpyPickingList()
    {
        return $this->spyPickingList;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyPickingListEntityTransfer $spyPickingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyPickingListOrFail(SpyPickingListEntityTransfer $spyPickingList)
    {
        return $this->setSpyPickingList($spyPickingList);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyPickingListEntityTransfer
     */
    public function getSpyPickingListOrFail()
    {
        if ($this->spyPickingList === null) {
            $this->throwNullValueException(static::SPY_PICKING_LIST);
        }

        return $this->spyPickingList;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyPickingList()
    {
        $this->assertPropertyIsSet(self::SPY_PICKING_LIST);

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
                case 'idPickingListItem':
                case 'uuid':
                case 'fkPickingList':
                case 'salesOrderItemUuid':
                case 'quantity':
                case 'numberOfPicked':
                case 'numberOfNotPicked':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyPickingList':
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
                case 'idPickingListItem':
                case 'uuid':
                case 'fkPickingList':
                case 'salesOrderItemUuid':
                case 'quantity':
                case 'numberOfPicked':
                case 'numberOfNotPicked':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyPickingList':
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
                case 'idPickingListItem':
                case 'uuid':
                case 'fkPickingList':
                case 'salesOrderItemUuid':
                case 'quantity':
                case 'numberOfPicked':
                case 'numberOfNotPicked':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyPickingList':
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
            'idPickingListItem' => $this->idPickingListItem,
            'uuid' => $this->uuid,
            'fkPickingList' => $this->fkPickingList,
            'salesOrderItemUuid' => $this->salesOrderItemUuid,
            'quantity' => $this->quantity,
            'numberOfPicked' => $this->numberOfPicked,
            'numberOfNotPicked' => $this->numberOfNotPicked,
            'spyPickingList' => $this->spyPickingList,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_picking_list_item' => $this->idPickingListItem,
            'uuid' => $this->uuid,
            'fk_picking_list' => $this->fkPickingList,
            'sales_order_item_uuid' => $this->salesOrderItemUuid,
            'quantity' => $this->quantity,
            'number_of_picked' => $this->numberOfPicked,
            'number_of_not_picked' => $this->numberOfNotPicked,
            'spy_picking_list' => $this->spyPickingList,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_picking_list_item' => $this->idPickingListItem instanceof AbstractTransfer ? $this->idPickingListItem->toArray(true, false) : $this->idPickingListItem,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, false) : $this->uuid,
            'fk_picking_list' => $this->fkPickingList instanceof AbstractTransfer ? $this->fkPickingList->toArray(true, false) : $this->fkPickingList,
            'sales_order_item_uuid' => $this->salesOrderItemUuid instanceof AbstractTransfer ? $this->salesOrderItemUuid->toArray(true, false) : $this->salesOrderItemUuid,
            'quantity' => $this->quantity instanceof AbstractTransfer ? $this->quantity->toArray(true, false) : $this->quantity,
            'number_of_picked' => $this->numberOfPicked instanceof AbstractTransfer ? $this->numberOfPicked->toArray(true, false) : $this->numberOfPicked,
            'number_of_not_picked' => $this->numberOfNotPicked instanceof AbstractTransfer ? $this->numberOfNotPicked->toArray(true, false) : $this->numberOfNotPicked,
            'spy_picking_list' => $this->spyPickingList instanceof AbstractTransfer ? $this->spyPickingList->toArray(true, false) : $this->spyPickingList,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idPickingListItem' => $this->idPickingListItem instanceof AbstractTransfer ? $this->idPickingListItem->toArray(true, true) : $this->idPickingListItem,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, true) : $this->uuid,
            'fkPickingList' => $this->fkPickingList instanceof AbstractTransfer ? $this->fkPickingList->toArray(true, true) : $this->fkPickingList,
            'salesOrderItemUuid' => $this->salesOrderItemUuid instanceof AbstractTransfer ? $this->salesOrderItemUuid->toArray(true, true) : $this->salesOrderItemUuid,
            'quantity' => $this->quantity instanceof AbstractTransfer ? $this->quantity->toArray(true, true) : $this->quantity,
            'numberOfPicked' => $this->numberOfPicked instanceof AbstractTransfer ? $this->numberOfPicked->toArray(true, true) : $this->numberOfPicked,
            'numberOfNotPicked' => $this->numberOfNotPicked instanceof AbstractTransfer ? $this->numberOfNotPicked->toArray(true, true) : $this->numberOfNotPicked,
            'spyPickingList' => $this->spyPickingList instanceof AbstractTransfer ? $this->spyPickingList->toArray(true, true) : $this->spyPickingList,
        ];
    }
}
