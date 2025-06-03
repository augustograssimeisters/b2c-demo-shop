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
class WishlistOverviewMetaTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const WISHLIST_ITEM_META_COLLECTION = 'wishlistItemMetaCollection';

    /**
     * @var string
     */
    public const WISHLIST_COLLECTION = 'wishlistCollection';

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\WishlistItemMetaTransfer>
     */
    protected $wishlistItemMetaCollection;

    /**
     * @var \Generated\Shared\Transfer\WishlistCollectionTransfer|null
     */
    protected $wishlistCollection;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'wishlist_item_meta_collection' => 'wishlistItemMetaCollection',
        'wishlistItemMetaCollection' => 'wishlistItemMetaCollection',
        'WishlistItemMetaCollection' => 'wishlistItemMetaCollection',
        'wishlist_collection' => 'wishlistCollection',
        'wishlistCollection' => 'wishlistCollection',
        'WishlistCollection' => 'wishlistCollection',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::WISHLIST_ITEM_META_COLLECTION => [
            'type' => 'Generated\Shared\Transfer\WishlistItemMetaTransfer',
            'type_shim' => null,
            'name_underscore' => 'wishlist_item_meta_collection',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::WISHLIST_COLLECTION => [
            'type' => 'Generated\Shared\Transfer\WishlistCollectionTransfer',
            'type_shim' => null,
            'name_underscore' => 'wishlist_collection',
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
     * @module WishlistPage|Wishlist
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\WishlistItemMetaTransfer> $wishlistItemMetaCollection
     *
     * @return $this
     */
    public function setWishlistItemMetaCollection(ArrayObject $wishlistItemMetaCollection)
    {
        $this->wishlistItemMetaCollection = $wishlistItemMetaCollection;
        $this->modifiedProperties[self::WISHLIST_ITEM_META_COLLECTION] = true;

        return $this;
    }

    /**
     * @module WishlistPage|Wishlist
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\WishlistItemMetaTransfer>
     */
    public function getWishlistItemMetaCollection()
    {
        return $this->wishlistItemMetaCollection;
    }

    /**
     * @module WishlistPage|Wishlist
     *
     * @param \Generated\Shared\Transfer\WishlistItemMetaTransfer $wishlistItemMeta
     *
     * @return $this
     */
    public function addWishlistItemMeta(WishlistItemMetaTransfer $wishlistItemMeta)
    {
        $this->wishlistItemMetaCollection[] = $wishlistItemMeta;
        $this->modifiedProperties[self::WISHLIST_ITEM_META_COLLECTION] = true;

        return $this;
    }

    /**
     * @module WishlistPage|Wishlist
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireWishlistItemMetaCollection()
    {
        $this->assertCollectionPropertyIsSet(self::WISHLIST_ITEM_META_COLLECTION);

        return $this;
    }

    /**
     * @module Wishlist
     *
     * @param \Generated\Shared\Transfer\WishlistCollectionTransfer|null $wishlistCollection
     *
     * @return $this
     */
    public function setWishlistCollection(WishlistCollectionTransfer $wishlistCollection = null)
    {
        $this->wishlistCollection = $wishlistCollection;
        $this->modifiedProperties[self::WISHLIST_COLLECTION] = true;

        return $this;
    }

    /**
     * @module Wishlist
     *
     * @return \Generated\Shared\Transfer\WishlistCollectionTransfer|null
     */
    public function getWishlistCollection()
    {
        return $this->wishlistCollection;
    }

    /**
     * @module Wishlist
     *
     * @param \Generated\Shared\Transfer\WishlistCollectionTransfer $wishlistCollection
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setWishlistCollectionOrFail(WishlistCollectionTransfer $wishlistCollection)
    {
        return $this->setWishlistCollection($wishlistCollection);
    }

    /**
     * @module Wishlist
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\WishlistCollectionTransfer
     */
    public function getWishlistCollectionOrFail()
    {
        if ($this->wishlistCollection === null) {
            $this->throwNullValueException(static::WISHLIST_COLLECTION);
        }

        return $this->wishlistCollection;
    }

    /**
     * @module Wishlist
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireWishlistCollection()
    {
        $this->assertPropertyIsSet(self::WISHLIST_COLLECTION);

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
                case 'wishlistCollection':
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
                case 'wishlistItemMetaCollection':
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
                case 'wishlistCollection':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'wishlistItemMetaCollection':
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
                case 'wishlistCollection':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'wishlistItemMetaCollection':
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
        $this->wishlistItemMetaCollection = $this->wishlistItemMetaCollection ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'wishlistCollection' => $this->wishlistCollection,
            'wishlistItemMetaCollection' => $this->wishlistItemMetaCollection,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'wishlist_collection' => $this->wishlistCollection,
            'wishlist_item_meta_collection' => $this->wishlistItemMetaCollection,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'wishlist_collection' => $this->wishlistCollection instanceof AbstractTransfer ? $this->wishlistCollection->toArray(true, false) : $this->wishlistCollection,
            'wishlist_item_meta_collection' => $this->wishlistItemMetaCollection instanceof AbstractTransfer ? $this->wishlistItemMetaCollection->toArray(true, false) : $this->addValuesToCollection($this->wishlistItemMetaCollection, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'wishlistCollection' => $this->wishlistCollection instanceof AbstractTransfer ? $this->wishlistCollection->toArray(true, true) : $this->wishlistCollection,
            'wishlistItemMetaCollection' => $this->wishlistItemMetaCollection instanceof AbstractTransfer ? $this->wishlistItemMetaCollection->toArray(true, true) : $this->addValuesToCollection($this->wishlistItemMetaCollection, true, true),
        ];
    }
}
