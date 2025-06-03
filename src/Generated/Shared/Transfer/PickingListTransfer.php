<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use ArrayObject;
use Spryker\Shared\Kernel\Transfer\AbstractTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class PickingListTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const WAREHOUSE = 'warehouse';

    /**
     * @var string
     */
    public const STATUS = 'status';

    /**
     * @var string
     */
    public const PICKING_LIST_ITEMS = 'pickingListItems';

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
    public const MODIFIED_ATTRIBUTES = 'modifiedAttributes';

    /**
     * @var string
     */
    public const USER = 'user';

    /**
     * @var string
     */
    public const CREATED_AT = 'createdAt';

    /**
     * @var string
     */
    public const UPDATED_AT = 'updatedAt';

    /**
     * @var string
     */
    public const USER_UUID = 'userUuid';

    /**
     * @var \Generated\Shared\Transfer\StockTransfer|null
     */
    protected $warehouse;

    /**
     * @var string|null
     */
    protected $status;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\PickingListItemTransfer>
     */
    protected $pickingListItems;

    /**
     * @var int|null
     */
    protected $idPickingList;

    /**
     * @var string|null
     */
    protected $uuid;

    /**
     * @var string[]
     */
    protected $modifiedAttributes = [];

    /**
     * @var \Generated\Shared\Transfer\UserTransfer|null
     */
    protected $user;

    /**
     * @var string|null
     */
    protected $createdAt;

    /**
     * @var string|null
     */
    protected $updatedAt;

    /**
     * @var string|null
     */
    protected $userUuid;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'warehouse' => 'warehouse',
        'Warehouse' => 'warehouse',
        'status' => 'status',
        'Status' => 'status',
        'picking_list_items' => 'pickingListItems',
        'pickingListItems' => 'pickingListItems',
        'PickingListItems' => 'pickingListItems',
        'id_picking_list' => 'idPickingList',
        'idPickingList' => 'idPickingList',
        'IdPickingList' => 'idPickingList',
        'uuid' => 'uuid',
        'Uuid' => 'uuid',
        'modified_attributes' => 'modifiedAttributes',
        'modifiedAttributes' => 'modifiedAttributes',
        'ModifiedAttributes' => 'modifiedAttributes',
        'user' => 'user',
        'User' => 'user',
        'created_at' => 'createdAt',
        'createdAt' => 'createdAt',
        'CreatedAt' => 'createdAt',
        'updated_at' => 'updatedAt',
        'updatedAt' => 'updatedAt',
        'UpdatedAt' => 'updatedAt',
        'user_uuid' => 'userUuid',
        'userUuid' => 'userUuid',
        'UserUuid' => 'userUuid',
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
            'is_strict' => true,
        ],
        self::PICKING_LIST_ITEMS => [
            'type' => 'Generated\Shared\Transfer\PickingListItemTransfer',
            'type_shim' => null,
            'name_underscore' => 'picking_list_items',
            'is_collection' => true,
            'is_transfer' => true,
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
        self::MODIFIED_ATTRIBUTES => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'modified_attributes',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::USER => [
            'type' => 'Generated\Shared\Transfer\UserTransfer',
            'type_shim' => null,
            'name_underscore' => 'user',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::CREATED_AT => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'created_at',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::UPDATED_AT => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'updated_at',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
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
            'is_strict' => true,
        ],
    ];

    /**
     * @module PickingListMultiShipmentPickingStrategyExample|PickingListPushNotification|PickingList|PickingListsBackendApi|PickingListsWarehousesBackendApi
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
     * @module PickingListMultiShipmentPickingStrategyExample|PickingListPushNotification|PickingList|PickingListsBackendApi|PickingListsWarehousesBackendApi
     *
     * @return \Generated\Shared\Transfer\StockTransfer|null
     */
    public function getWarehouse(): ?StockTransfer
    {
        return $this->warehouse;
    }

    /**
     * @module PickingListMultiShipmentPickingStrategyExample|PickingListPushNotification|PickingList|PickingListsBackendApi|PickingListsWarehousesBackendApi
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
     * @module PickingListMultiShipmentPickingStrategyExample|PickingListPushNotification|PickingList|PickingListsBackendApi|PickingListsWarehousesBackendApi
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
     * @module PickingListMultiShipmentPickingStrategyExample|PickingListPushNotification|PickingList|PickingListsBackendApi|PickingListsWarehousesBackendApi
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
     * @module PickingListMultiShipmentPickingStrategyExample|PickingListPushNotification|PickingList|PickingListsBackendApi
     *
     * @param string|null $status
     *
     * @return $this
     */
    public function setStatus(?string $status = null)
    {
        $this->status = $status;
        $this->modifiedProperties[self::STATUS] = true;

        return $this;
    }

    /**
     * @module PickingListMultiShipmentPickingStrategyExample|PickingListPushNotification|PickingList|PickingListsBackendApi
     *
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @module PickingListMultiShipmentPickingStrategyExample|PickingListPushNotification|PickingList|PickingListsBackendApi
     *
     * @param string $status
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStatusOrFail(string $status)
    {
        return $this->setStatus($status);
    }

    /**
     * @module PickingListMultiShipmentPickingStrategyExample|PickingListPushNotification|PickingList|PickingListsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getStatusOrFail(): string
    {
        if ($this->status === null) {
            $this->throwNullValueException(static::STATUS);
        }

        return $this->status;
    }

    /**
     * @module PickingListMultiShipmentPickingStrategyExample|PickingListPushNotification|PickingList|PickingListsBackendApi
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
     * @module PickingListMultiShipmentPickingStrategyExample|PickingList|PickingListsBackendApi
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\PickingListItemTransfer> $pickingListItems
     *
     * @return $this
     */
    public function setPickingListItems(ArrayObject $pickingListItems)
    {
        $this->pickingListItems = new ArrayObject();

        foreach ($pickingListItems as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::PICKING_LIST_ITEMS]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addPickingListItem(...$args);
        }

        $this->modifiedProperties[self::PICKING_LIST_ITEMS] = true;

        return $this;
    }

    /**
     * @module PickingListMultiShipmentPickingStrategyExample|PickingList|PickingListsBackendApi
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\PickingListItemTransfer>
     */
    public function getPickingListItems(): ArrayObject
    {
        return $this->pickingListItems;
    }

    /**
     * @module PickingListMultiShipmentPickingStrategyExample|PickingList|PickingListsBackendApi
     *
     * @param \Generated\Shared\Transfer\PickingListItemTransfer $pickingListItem
     *
     * @return $this
     */
    public function addPickingListItem(PickingListItemTransfer $pickingListItem)
    {
        $this->pickingListItems[] = $pickingListItem;
        $this->modifiedProperties[self::PICKING_LIST_ITEMS] = true;

        return $this;
    }

    /**
     * @module PickingListMultiShipmentPickingStrategyExample|PickingList|PickingListsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePickingListItems()
    {
        $this->assertCollectionPropertyIsSet(self::PICKING_LIST_ITEMS);

        return $this;
    }

    /**
     * @module PickingListPushNotification|PickingList
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
     * @module PickingListPushNotification|PickingList
     *
     * @return int|null
     */
    public function getIdPickingList(): ?int
    {
        return $this->idPickingList;
    }

    /**
     * @module PickingListPushNotification|PickingList
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
     * @module PickingListPushNotification|PickingList
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
     * @module PickingListPushNotification|PickingList
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
     * @module PickingListPushNotification|PickingList|PickingListsBackendApi|PickingListsUsersBackendApi|PickingListsWarehousesBackendApi
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
     * @module PickingListPushNotification|PickingList|PickingListsBackendApi|PickingListsUsersBackendApi|PickingListsWarehousesBackendApi
     *
     * @return string|null
     */
    public function getUuid(): ?string
    {
        return $this->uuid;
    }

    /**
     * @module PickingListPushNotification|PickingList|PickingListsBackendApi|PickingListsUsersBackendApi|PickingListsWarehousesBackendApi
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
     * @module PickingListPushNotification|PickingList|PickingListsBackendApi|PickingListsUsersBackendApi|PickingListsWarehousesBackendApi
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
     * @module PickingListPushNotification|PickingList|PickingListsBackendApi|PickingListsUsersBackendApi|PickingListsWarehousesBackendApi
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
     * @module PickingListPushNotification|PickingList
     *
     * @param string[]|null $modifiedAttributes
     *
     * @return $this
     */
    public function setModifiedAttributes(array $modifiedAttributes = null)
    {
        if ($modifiedAttributes === null) {
            $modifiedAttributes = [];
        }

        $this->modifiedAttributes = [];

        foreach ($modifiedAttributes as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::MODIFIED_ATTRIBUTES]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addModifiedAttribute(...$args);
        }

        $this->modifiedProperties[self::MODIFIED_ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module PickingListPushNotification|PickingList
     *
     * @return string[]
     */
    public function getModifiedAttributes(): array
    {
        return $this->modifiedAttributes;
    }

    /**
     * @module PickingListPushNotification|PickingList
     *
     * @param string $modifiedAttribute
     *
     * @return $this
     */
    public function addModifiedAttribute(string $modifiedAttribute)
    {
        $this->modifiedAttributes[] = $modifiedAttribute;
        $this->modifiedProperties[self::MODIFIED_ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module PickingListPushNotification|PickingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireModifiedAttributes()
    {
        $this->assertPropertyIsSet(self::MODIFIED_ATTRIBUTES);

        return $this;
    }

    /**
     * @module PickingList|PickingListsBackendApi
     *
     * @param \Generated\Shared\Transfer\UserTransfer|null $user
     *
     * @return $this
     */
    public function setUser(?UserTransfer $user = null)
    {
        $this->user = $user;
        $this->modifiedProperties[self::USER] = true;

        return $this;
    }

    /**
     * @module PickingList|PickingListsBackendApi
     *
     * @return \Generated\Shared\Transfer\UserTransfer|null
     */
    public function getUser(): ?UserTransfer
    {
        return $this->user;
    }

    /**
     * @module PickingList|PickingListsBackendApi
     *
     * @param \Generated\Shared\Transfer\UserTransfer $user
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUserOrFail(UserTransfer $user)
    {
        return $this->setUser($user);
    }

    /**
     * @module PickingList|PickingListsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\UserTransfer
     */
    public function getUserOrFail(): UserTransfer
    {
        if ($this->user === null) {
            $this->throwNullValueException(static::USER);
        }

        return $this->user;
    }

    /**
     * @module PickingList|PickingListsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUser()
    {
        $this->assertPropertyIsSet(self::USER);

        return $this;
    }

    /**
     * @module PickingList
     *
     * @param string|null $createdAt
     *
     * @return $this
     */
    public function setCreatedAt(?string $createdAt = null)
    {
        $this->createdAt = $createdAt;
        $this->modifiedProperties[self::CREATED_AT] = true;

        return $this;
    }

    /**
     * @module PickingList
     *
     * @return string|null
     */
    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }

    /**
     * @module PickingList
     *
     * @param string $createdAt
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCreatedAtOrFail(string $createdAt)
    {
        return $this->setCreatedAt($createdAt);
    }

    /**
     * @module PickingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCreatedAtOrFail(): string
    {
        if ($this->createdAt === null) {
            $this->throwNullValueException(static::CREATED_AT);
        }

        return $this->createdAt;
    }

    /**
     * @module PickingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCreatedAt()
    {
        $this->assertPropertyIsSet(self::CREATED_AT);

        return $this;
    }

    /**
     * @module PickingList
     *
     * @param string|null $updatedAt
     *
     * @return $this
     */
    public function setUpdatedAt(?string $updatedAt = null)
    {
        $this->updatedAt = $updatedAt;
        $this->modifiedProperties[self::UPDATED_AT] = true;

        return $this;
    }

    /**
     * @module PickingList
     *
     * @return string|null
     */
    public function getUpdatedAt(): ?string
    {
        return $this->updatedAt;
    }

    /**
     * @module PickingList
     *
     * @param string $updatedAt
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUpdatedAtOrFail(string $updatedAt)
    {
        return $this->setUpdatedAt($updatedAt);
    }

    /**
     * @module PickingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getUpdatedAtOrFail(): string
    {
        if ($this->updatedAt === null) {
            $this->throwNullValueException(static::UPDATED_AT);
        }

        return $this->updatedAt;
    }

    /**
     * @module PickingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUpdatedAt()
    {
        $this->assertPropertyIsSet(self::UPDATED_AT);

        return $this;
    }

    /**
     * @module PickingListsUsersBackendApi
     *
     * @param string|null $userUuid
     *
     * @return $this
     */
    public function setUserUuid(?string $userUuid = null)
    {
        $this->userUuid = $userUuid;
        $this->modifiedProperties[self::USER_UUID] = true;

        return $this;
    }

    /**
     * @module PickingListsUsersBackendApi
     *
     * @return string|null
     */
    public function getUserUuid(): ?string
    {
        return $this->userUuid;
    }

    /**
     * @module PickingListsUsersBackendApi
     *
     * @param string $userUuid
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUserUuidOrFail(string $userUuid)
    {
        return $this->setUserUuid($userUuid);
    }

    /**
     * @module PickingListsUsersBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getUserUuidOrFail(): string
    {
        if ($this->userUuid === null) {
            $this->throwNullValueException(static::USER_UUID);
        }

        return $this->userUuid;
    }

    /**
     * @module PickingListsUsersBackendApi
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
                case 'status':
                case 'idPickingList':
                case 'uuid':
                case 'modifiedAttributes':
                case 'createdAt':
                case 'updatedAt':
                case 'userUuid':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'warehouse':
                case 'user':
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
                case 'pickingListItems':
                    $elementType = $this->transferMetadata[$normalizedPropertyName]['type'];
                    $this->$normalizedPropertyName = $this->processArrayObject($elementType, $value, $ignoreMissingProperty);
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
                case 'status':
                case 'idPickingList':
                case 'uuid':
                case 'modifiedAttributes':
                case 'createdAt':
                case 'updatedAt':
                case 'userUuid':
                    $values[$arrayKey] = $value;

                    break;
                case 'warehouse':
                case 'user':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'pickingListItems':
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
                case 'status':
                case 'idPickingList':
                case 'uuid':
                case 'modifiedAttributes':
                case 'createdAt':
                case 'updatedAt':
                case 'userUuid':
                    $values[$arrayKey] = $value;

                    break;
                case 'warehouse':
                case 'user':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'pickingListItems':
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
        $this->pickingListItems = $this->pickingListItems ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'status' => $this->status,
            'idPickingList' => $this->idPickingList,
            'uuid' => $this->uuid,
            'modifiedAttributes' => $this->modifiedAttributes,
            'createdAt' => $this->createdAt,
            'updatedAt' => $this->updatedAt,
            'userUuid' => $this->userUuid,
            'warehouse' => $this->warehouse,
            'user' => $this->user,
            'pickingListItems' => $this->pickingListItems,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'status' => $this->status,
            'id_picking_list' => $this->idPickingList,
            'uuid' => $this->uuid,
            'modified_attributes' => $this->modifiedAttributes,
            'created_at' => $this->createdAt,
            'updated_at' => $this->updatedAt,
            'user_uuid' => $this->userUuid,
            'warehouse' => $this->warehouse,
            'user' => $this->user,
            'picking_list_items' => $this->pickingListItems,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'status' => $this->status instanceof AbstractTransfer ? $this->status->toArray(true, false) : $this->status,
            'id_picking_list' => $this->idPickingList instanceof AbstractTransfer ? $this->idPickingList->toArray(true, false) : $this->idPickingList,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, false) : $this->uuid,
            'modified_attributes' => $this->modifiedAttributes instanceof AbstractTransfer ? $this->modifiedAttributes->toArray(true, false) : $this->modifiedAttributes,
            'created_at' => $this->createdAt instanceof AbstractTransfer ? $this->createdAt->toArray(true, false) : $this->createdAt,
            'updated_at' => $this->updatedAt instanceof AbstractTransfer ? $this->updatedAt->toArray(true, false) : $this->updatedAt,
            'user_uuid' => $this->userUuid instanceof AbstractTransfer ? $this->userUuid->toArray(true, false) : $this->userUuid,
            'warehouse' => $this->warehouse instanceof AbstractTransfer ? $this->warehouse->toArray(true, false) : $this->warehouse,
            'user' => $this->user instanceof AbstractTransfer ? $this->user->toArray(true, false) : $this->user,
            'picking_list_items' => $this->pickingListItems instanceof AbstractTransfer ? $this->pickingListItems->toArray(true, false) : $this->addValuesToCollection($this->pickingListItems, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'status' => $this->status instanceof AbstractTransfer ? $this->status->toArray(true, true) : $this->status,
            'idPickingList' => $this->idPickingList instanceof AbstractTransfer ? $this->idPickingList->toArray(true, true) : $this->idPickingList,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, true) : $this->uuid,
            'modifiedAttributes' => $this->modifiedAttributes instanceof AbstractTransfer ? $this->modifiedAttributes->toArray(true, true) : $this->modifiedAttributes,
            'createdAt' => $this->createdAt instanceof AbstractTransfer ? $this->createdAt->toArray(true, true) : $this->createdAt,
            'updatedAt' => $this->updatedAt instanceof AbstractTransfer ? $this->updatedAt->toArray(true, true) : $this->updatedAt,
            'userUuid' => $this->userUuid instanceof AbstractTransfer ? $this->userUuid->toArray(true, true) : $this->userUuid,
            'warehouse' => $this->warehouse instanceof AbstractTransfer ? $this->warehouse->toArray(true, true) : $this->warehouse,
            'user' => $this->user instanceof AbstractTransfer ? $this->user->toArray(true, true) : $this->user,
            'pickingListItems' => $this->pickingListItems instanceof AbstractTransfer ? $this->pickingListItems->toArray(true, true) : $this->addValuesToCollection($this->pickingListItems, true, true),
        ];
    }
}
