<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use ArrayObject;
use Spryker\Shared\Kernel\Transfer\AbstractTransfer;
use Spryker\Shared\Kernel\Transfer\AbstractEntityTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class SpyPickingListEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_PICKING_LIST = 'idPickingList';

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
    public const STATUS = 'status';

    /**
     * @var string
     */
    public const SPY_STOCK = 'spyStock';

    /**
     * @var string
     */
    public const SPY_PICKING_LIST_ITEMS = 'spyPickingListItems';

    /**
     * @var integer|null
     */
    protected $idPickingList;

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
     * @var string|null
     */
    protected $status;

    /**
     * @var \Generated\Shared\Transfer\SpyStockEntityTransfer|null
     */
    protected $spyStock;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\SpyPickingListItemEntityTransfer>
     */
    protected $spyPickingListItems;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_picking_list' => 'idPickingList',
        'idPickingList' => 'idPickingList',
        'IdPickingList' => 'idPickingList',
        'uuid' => 'uuid',
        'Uuid' => 'uuid',
        'fk_warehouse' => 'fkWarehouse',
        'fkWarehouse' => 'fkWarehouse',
        'FkWarehouse' => 'fkWarehouse',
        'user_uuid' => 'userUuid',
        'userUuid' => 'userUuid',
        'UserUuid' => 'userUuid',
        'status' => 'status',
        'Status' => 'status',
        'spy_stock' => 'spyStock',
        'spyStock' => 'spyStock',
        'SpyStock' => 'spyStock',
        'spy_picking_list_items' => 'spyPickingListItems',
        'spyPickingListItems' => 'spyPickingListItems',
        'SpyPickingListItems' => 'spyPickingListItems',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_PICKING_LIST => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_picking_list',
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
        self::STATUS => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'status',
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
        self::SPY_PICKING_LIST_ITEMS => [
            'type' => 'Generated\Shared\Transfer\SpyPickingListItemEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_picking_list_items',
            'is_collection' => true,
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
    public static $entityNamespace = 'Orm\Zed\PickingList\Persistence\SpyPickingList';


    /**
     * @module 
     *
     * @param integer|null $idPickingList
     *
     * @return $this
     */
    public function setIdPickingList($idPickingList)
    {
        $this->idPickingList = $idPickingList;
        $this->modifiedProperties[self::ID_PICKING_LIST] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdPickingList()
    {
        return $this->idPickingList;
    }

    /**
     * @module 
     *
     * @param integer|null $idPickingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdPickingListOrFail($idPickingList)
    {
        if ($idPickingList === null) {
            $this->throwNullValueException(static::ID_PICKING_LIST);
        }

        return $this->setIdPickingList($idPickingList);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdPickingListOrFail()
    {
        if ($this->idPickingList === null) {
            $this->throwNullValueException(static::ID_PICKING_LIST);
        }

        return $this->idPickingList;
    }

    /**
     * @module 
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
     * @param string|null $status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        $this->modifiedProperties[self::STATUS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @module 
     *
     * @param string|null $status
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStatusOrFail($status)
    {
        if ($status === null) {
            $this->throwNullValueException(static::STATUS);
        }

        return $this->setStatus($status);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getStatusOrFail()
    {
        if ($this->status === null) {
            $this->throwNullValueException(static::STATUS);
        }

        return $this->status;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStatus()
    {
        $this->assertPropertyIsSet(self::STATUS);

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
     * @module 
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\SpyPickingListItemEntityTransfer> $spyPickingListItems
     *
     * @return $this
     */
    public function setSpyPickingListItems(ArrayObject $spyPickingListItems)
    {
        $this->spyPickingListItems = $spyPickingListItems;
        $this->modifiedProperties[self::SPY_PICKING_LIST_ITEMS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\SpyPickingListItemEntityTransfer>
     */
    public function getSpyPickingListItems()
    {
        return $this->spyPickingListItems;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyPickingListItemEntityTransfer $spyPickingListItems
     *
     * @return $this
     */
    public function addSpyPickingListItems(SpyPickingListItemEntityTransfer $spyPickingListItems)
    {
        $this->spyPickingListItems[] = $spyPickingListItems;
        $this->modifiedProperties[self::SPY_PICKING_LIST_ITEMS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyPickingListItems()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PICKING_LIST_ITEMS);

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
                case 'idPickingList':
                case 'uuid':
                case 'fkWarehouse':
                case 'userUuid':
                case 'status':
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
                case 'spyPickingListItems':
                    $elementType = $this->transferMetadata[$normalizedPropertyName]['type'];
                    $this->$normalizedPropertyName = $this->processArrayObject($elementType, $value, $ignoreMissingProperty);
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
                case 'idPickingList':
                case 'uuid':
                case 'fkWarehouse':
                case 'userUuid':
                case 'status':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyStock':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'spyPickingListItems':
                    $values[$arrayKey] = $value ? $this->addValuesToCollectionModified($value, true, true) : $value;

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
                case 'idPickingList':
                case 'uuid':
                case 'fkWarehouse':
                case 'userUuid':
                case 'status':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyStock':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'spyPickingListItems':
                    $values[$arrayKey] = $value ? $this->addValuesToCollectionModified($value, true, false) : $value;

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
        $this->spyPickingListItems = $this->spyPickingListItems ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idPickingList' => $this->idPickingList,
            'uuid' => $this->uuid,
            'fkWarehouse' => $this->fkWarehouse,
            'userUuid' => $this->userUuid,
            'status' => $this->status,
            'spyStock' => $this->spyStock,
            'spyPickingListItems' => $this->spyPickingListItems,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_picking_list' => $this->idPickingList,
            'uuid' => $this->uuid,
            'fk_warehouse' => $this->fkWarehouse,
            'user_uuid' => $this->userUuid,
            'status' => $this->status,
            'spy_stock' => $this->spyStock,
            'spy_picking_list_items' => $this->spyPickingListItems,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_picking_list' => $this->idPickingList instanceof AbstractTransfer ? $this->idPickingList->toArray(true, false) : $this->idPickingList,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, false) : $this->uuid,
            'fk_warehouse' => $this->fkWarehouse instanceof AbstractTransfer ? $this->fkWarehouse->toArray(true, false) : $this->fkWarehouse,
            'user_uuid' => $this->userUuid instanceof AbstractTransfer ? $this->userUuid->toArray(true, false) : $this->userUuid,
            'status' => $this->status instanceof AbstractTransfer ? $this->status->toArray(true, false) : $this->status,
            'spy_stock' => $this->spyStock instanceof AbstractTransfer ? $this->spyStock->toArray(true, false) : $this->spyStock,
            'spy_picking_list_items' => $this->spyPickingListItems instanceof AbstractTransfer ? $this->spyPickingListItems->toArray(true, false) : $this->addValuesToCollection($this->spyPickingListItems, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idPickingList' => $this->idPickingList instanceof AbstractTransfer ? $this->idPickingList->toArray(true, true) : $this->idPickingList,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, true) : $this->uuid,
            'fkWarehouse' => $this->fkWarehouse instanceof AbstractTransfer ? $this->fkWarehouse->toArray(true, true) : $this->fkWarehouse,
            'userUuid' => $this->userUuid instanceof AbstractTransfer ? $this->userUuid->toArray(true, true) : $this->userUuid,
            'status' => $this->status instanceof AbstractTransfer ? $this->status->toArray(true, true) : $this->status,
            'spyStock' => $this->spyStock instanceof AbstractTransfer ? $this->spyStock->toArray(true, true) : $this->spyStock,
            'spyPickingListItems' => $this->spyPickingListItems instanceof AbstractTransfer ? $this->spyPickingListItems->toArray(true, true) : $this->addValuesToCollection($this->spyPickingListItems, true, true),
        ];
    }
}
