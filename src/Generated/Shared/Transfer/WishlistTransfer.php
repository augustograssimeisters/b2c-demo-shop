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
class WishlistTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const FK_CUSTOMER = 'fkCustomer';

    /**
     * @var string
     */
    public const ID_WISHLIST = 'idWishlist';

    /**
     * @var string
     */
    public const WISHLIST_ITEMS = 'wishlistItems';

    /**
     * @var string
     */
    public const NUMBER_OF_ITEMS = 'numberOfItems';

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
    public const UUID = 'uuid';

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var int|null
     */
    protected $fkCustomer;

    /**
     * @var int|null
     */
    protected $idWishlist;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\WishlistItemTransfer>
     */
    protected $wishlistItems;

    /**
     * @var int|null
     */
    protected $numberOfItems;

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
    protected $uuid;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'name' => 'name',
        'Name' => 'name',
        'fk_customer' => 'fkCustomer',
        'fkCustomer' => 'fkCustomer',
        'FkCustomer' => 'fkCustomer',
        'id_wishlist' => 'idWishlist',
        'idWishlist' => 'idWishlist',
        'IdWishlist' => 'idWishlist',
        'wishlist_items' => 'wishlistItems',
        'wishlistItems' => 'wishlistItems',
        'WishlistItems' => 'wishlistItems',
        'number_of_items' => 'numberOfItems',
        'numberOfItems' => 'numberOfItems',
        'NumberOfItems' => 'numberOfItems',
        'created_at' => 'createdAt',
        'createdAt' => 'createdAt',
        'CreatedAt' => 'createdAt',
        'updated_at' => 'updatedAt',
        'updatedAt' => 'updatedAt',
        'UpdatedAt' => 'updatedAt',
        'uuid' => 'uuid',
        'Uuid' => 'uuid',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_CUSTOMER => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fk_customer',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_WISHLIST => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_wishlist',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::WISHLIST_ITEMS => [
            'type' => 'Generated\Shared\Transfer\WishlistItemTransfer',
            'type_shim' => null,
            'name_underscore' => 'wishlist_items',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::NUMBER_OF_ITEMS => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'number_of_items',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
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
            'is_strict' => false,
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
    ];

    /**
     * @module WishlistPage|Wishlist|WishlistsRestApi
     *
     * @param string|null $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        $this->modifiedProperties[self::NAME] = true;

        return $this;
    }

    /**
     * @module WishlistPage|Wishlist|WishlistsRestApi
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module WishlistPage|Wishlist|WishlistsRestApi
     *
     * @param string|null $name
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNameOrFail($name)
    {
        if ($name === null) {
            $this->throwNullValueException(static::NAME);
        }

        return $this->setName($name);
    }

    /**
     * @module WishlistPage|Wishlist|WishlistsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getNameOrFail()
    {
        if ($this->name === null) {
            $this->throwNullValueException(static::NAME);
        }

        return $this->name;
    }

    /**
     * @module WishlistPage|Wishlist|WishlistsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireName()
    {
        $this->assertPropertyIsSet(self::NAME);

        return $this;
    }

    /**
     * @module WishlistPage|Wishlist|WishlistsRestApi
     *
     * @param int|null $fkCustomer
     *
     * @return $this
     */
    public function setFkCustomer($fkCustomer)
    {
        $this->fkCustomer = $fkCustomer;
        $this->modifiedProperties[self::FK_CUSTOMER] = true;

        return $this;
    }

    /**
     * @module WishlistPage|Wishlist|WishlistsRestApi
     *
     * @return int|null
     */
    public function getFkCustomer()
    {
        return $this->fkCustomer;
    }

    /**
     * @module WishlistPage|Wishlist|WishlistsRestApi
     *
     * @param int|null $fkCustomer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkCustomerOrFail($fkCustomer)
    {
        if ($fkCustomer === null) {
            $this->throwNullValueException(static::FK_CUSTOMER);
        }

        return $this->setFkCustomer($fkCustomer);
    }

    /**
     * @module WishlistPage|Wishlist|WishlistsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkCustomerOrFail()
    {
        if ($this->fkCustomer === null) {
            $this->throwNullValueException(static::FK_CUSTOMER);
        }

        return $this->fkCustomer;
    }

    /**
     * @module WishlistPage|Wishlist|WishlistsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkCustomer()
    {
        $this->assertPropertyIsSet(self::FK_CUSTOMER);

        return $this;
    }

    /**
     * @module WishlistPage|Wishlist|WishlistsRestApi
     *
     * @param int|null $idWishlist
     *
     * @return $this
     */
    public function setIdWishlist($idWishlist)
    {
        $this->idWishlist = $idWishlist;
        $this->modifiedProperties[self::ID_WISHLIST] = true;

        return $this;
    }

    /**
     * @module WishlistPage|Wishlist|WishlistsRestApi
     *
     * @return int|null
     */
    public function getIdWishlist()
    {
        return $this->idWishlist;
    }

    /**
     * @module WishlistPage|Wishlist|WishlistsRestApi
     *
     * @param int|null $idWishlist
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdWishlistOrFail($idWishlist)
    {
        if ($idWishlist === null) {
            $this->throwNullValueException(static::ID_WISHLIST);
        }

        return $this->setIdWishlist($idWishlist);
    }

    /**
     * @module WishlistPage|Wishlist|WishlistsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdWishlistOrFail()
    {
        if ($this->idWishlist === null) {
            $this->throwNullValueException(static::ID_WISHLIST);
        }

        return $this->idWishlist;
    }

    /**
     * @module WishlistPage|Wishlist|WishlistsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdWishlist()
    {
        $this->assertPropertyIsSet(self::ID_WISHLIST);

        return $this;
    }

    /**
     * @module ProductConfigurationWishlist|Wishlist|WishlistsRestApi
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\WishlistItemTransfer> $wishlistItems
     *
     * @return $this
     */
    public function setWishlistItems(ArrayObject $wishlistItems)
    {
        $this->wishlistItems = $wishlistItems;
        $this->modifiedProperties[self::WISHLIST_ITEMS] = true;

        return $this;
    }

    /**
     * @module ProductConfigurationWishlist|Wishlist|WishlistsRestApi
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\WishlistItemTransfer>
     */
    public function getWishlistItems()
    {
        return $this->wishlistItems;
    }

    /**
     * @module ProductConfigurationWishlist|Wishlist|WishlistsRestApi
     *
     * @param \Generated\Shared\Transfer\WishlistItemTransfer $wishlistItem
     *
     * @return $this
     */
    public function addWishlistItem(WishlistItemTransfer $wishlistItem)
    {
        $this->wishlistItems[] = $wishlistItem;
        $this->modifiedProperties[self::WISHLIST_ITEMS] = true;

        return $this;
    }

    /**
     * @module ProductConfigurationWishlist|Wishlist|WishlistsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireWishlistItems()
    {
        $this->assertCollectionPropertyIsSet(self::WISHLIST_ITEMS);

        return $this;
    }

    /**
     * @module Wishlist|WishlistsRestApi
     *
     * @param int|null $numberOfItems
     *
     * @return $this
     */
    public function setNumberOfItems($numberOfItems)
    {
        $this->numberOfItems = $numberOfItems;
        $this->modifiedProperties[self::NUMBER_OF_ITEMS] = true;

        return $this;
    }

    /**
     * @module Wishlist|WishlistsRestApi
     *
     * @return int|null
     */
    public function getNumberOfItems()
    {
        return $this->numberOfItems;
    }

    /**
     * @module Wishlist|WishlistsRestApi
     *
     * @param int|null $numberOfItems
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNumberOfItemsOrFail($numberOfItems)
    {
        if ($numberOfItems === null) {
            $this->throwNullValueException(static::NUMBER_OF_ITEMS);
        }

        return $this->setNumberOfItems($numberOfItems);
    }

    /**
     * @module Wishlist|WishlistsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getNumberOfItemsOrFail()
    {
        if ($this->numberOfItems === null) {
            $this->throwNullValueException(static::NUMBER_OF_ITEMS);
        }

        return $this->numberOfItems;
    }

    /**
     * @module Wishlist|WishlistsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireNumberOfItems()
    {
        $this->assertPropertyIsSet(self::NUMBER_OF_ITEMS);

        return $this;
    }

    /**
     * @module Wishlist
     *
     * @param string|null $createdAt
     *
     * @return $this
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
        $this->modifiedProperties[self::CREATED_AT] = true;

        return $this;
    }

    /**
     * @module Wishlist
     *
     * @return string|null
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @module Wishlist
     *
     * @param string|null $createdAt
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCreatedAtOrFail($createdAt)
    {
        if ($createdAt === null) {
            $this->throwNullValueException(static::CREATED_AT);
        }

        return $this->setCreatedAt($createdAt);
    }

    /**
     * @module Wishlist
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCreatedAtOrFail()
    {
        if ($this->createdAt === null) {
            $this->throwNullValueException(static::CREATED_AT);
        }

        return $this->createdAt;
    }

    /**
     * @module Wishlist
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
     * @module Wishlist
     *
     * @param string|null $updatedAt
     *
     * @return $this
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
        $this->modifiedProperties[self::UPDATED_AT] = true;

        return $this;
    }

    /**
     * @module Wishlist
     *
     * @return string|null
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @module Wishlist
     *
     * @param string|null $updatedAt
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUpdatedAtOrFail($updatedAt)
    {
        if ($updatedAt === null) {
            $this->throwNullValueException(static::UPDATED_AT);
        }

        return $this->setUpdatedAt($updatedAt);
    }

    /**
     * @module Wishlist
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getUpdatedAtOrFail()
    {
        if ($this->updatedAt === null) {
            $this->throwNullValueException(static::UPDATED_AT);
        }

        return $this->updatedAt;
    }

    /**
     * @module Wishlist
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
     * @module WishlistsRestApi
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
     * @module WishlistsRestApi
     *
     * @return string|null
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * @module WishlistsRestApi
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
     * @module WishlistsRestApi
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
     * @module WishlistsRestApi
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
                case 'name':
                case 'fkCustomer':
                case 'idWishlist':
                case 'numberOfItems':
                case 'createdAt':
                case 'updatedAt':
                case 'uuid':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'wishlistItems':
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
                case 'name':
                case 'fkCustomer':
                case 'idWishlist':
                case 'numberOfItems':
                case 'createdAt':
                case 'updatedAt':
                case 'uuid':
                    $values[$arrayKey] = $value;

                    break;
                case 'wishlistItems':
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
                case 'name':
                case 'fkCustomer':
                case 'idWishlist':
                case 'numberOfItems':
                case 'createdAt':
                case 'updatedAt':
                case 'uuid':
                    $values[$arrayKey] = $value;

                    break;
                case 'wishlistItems':
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
        $this->wishlistItems = $this->wishlistItems ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'name' => $this->name,
            'fkCustomer' => $this->fkCustomer,
            'idWishlist' => $this->idWishlist,
            'numberOfItems' => $this->numberOfItems,
            'createdAt' => $this->createdAt,
            'updatedAt' => $this->updatedAt,
            'uuid' => $this->uuid,
            'wishlistItems' => $this->wishlistItems,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'name' => $this->name,
            'fk_customer' => $this->fkCustomer,
            'id_wishlist' => $this->idWishlist,
            'number_of_items' => $this->numberOfItems,
            'created_at' => $this->createdAt,
            'updated_at' => $this->updatedAt,
            'uuid' => $this->uuid,
            'wishlist_items' => $this->wishlistItems,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'fk_customer' => $this->fkCustomer instanceof AbstractTransfer ? $this->fkCustomer->toArray(true, false) : $this->fkCustomer,
            'id_wishlist' => $this->idWishlist instanceof AbstractTransfer ? $this->idWishlist->toArray(true, false) : $this->idWishlist,
            'number_of_items' => $this->numberOfItems instanceof AbstractTransfer ? $this->numberOfItems->toArray(true, false) : $this->numberOfItems,
            'created_at' => $this->createdAt instanceof AbstractTransfer ? $this->createdAt->toArray(true, false) : $this->createdAt,
            'updated_at' => $this->updatedAt instanceof AbstractTransfer ? $this->updatedAt->toArray(true, false) : $this->updatedAt,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, false) : $this->uuid,
            'wishlist_items' => $this->wishlistItems instanceof AbstractTransfer ? $this->wishlistItems->toArray(true, false) : $this->addValuesToCollection($this->wishlistItems, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'fkCustomer' => $this->fkCustomer instanceof AbstractTransfer ? $this->fkCustomer->toArray(true, true) : $this->fkCustomer,
            'idWishlist' => $this->idWishlist instanceof AbstractTransfer ? $this->idWishlist->toArray(true, true) : $this->idWishlist,
            'numberOfItems' => $this->numberOfItems instanceof AbstractTransfer ? $this->numberOfItems->toArray(true, true) : $this->numberOfItems,
            'createdAt' => $this->createdAt instanceof AbstractTransfer ? $this->createdAt->toArray(true, true) : $this->createdAt,
            'updatedAt' => $this->updatedAt instanceof AbstractTransfer ? $this->updatedAt->toArray(true, true) : $this->updatedAt,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, true) : $this->uuid,
            'wishlistItems' => $this->wishlistItems instanceof AbstractTransfer ? $this->wishlistItems->toArray(true, true) : $this->addValuesToCollection($this->wishlistItems, true, true),
        ];
    }
}
