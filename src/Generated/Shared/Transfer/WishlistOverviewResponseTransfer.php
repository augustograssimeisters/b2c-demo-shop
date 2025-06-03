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
class WishlistOverviewResponseTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const WISHLIST = 'wishlist';

    /**
     * @var string
     */
    public const PAGINATION = 'pagination';

    /**
     * @var string
     */
    public const ITEMS = 'items';

    /**
     * @var string
     */
    public const META = 'meta';

    /**
     * @var string
     */
    public const ERRORS = 'errors';

    /**
     * @var \Generated\Shared\Transfer\WishlistTransfer|null
     */
    protected $wishlist;

    /**
     * @var \Generated\Shared\Transfer\WishlistPaginationTransfer|null
     */
    protected $pagination;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\WishlistItemTransfer>
     */
    protected $items;

    /**
     * @var \Generated\Shared\Transfer\WishlistOverviewMetaTransfer|null
     */
    protected $meta;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\MessageTransfer>
     */
    protected $errors;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'wishlist' => 'wishlist',
        'Wishlist' => 'wishlist',
        'pagination' => 'pagination',
        'Pagination' => 'pagination',
        'items' => 'items',
        'Items' => 'items',
        'meta' => 'meta',
        'Meta' => 'meta',
        'errors' => 'errors',
        'Errors' => 'errors',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::WISHLIST => [
            'type' => 'Generated\Shared\Transfer\WishlistTransfer',
            'type_shim' => null,
            'name_underscore' => 'wishlist',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PAGINATION => [
            'type' => 'Generated\Shared\Transfer\WishlistPaginationTransfer',
            'type_shim' => null,
            'name_underscore' => 'pagination',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ITEMS => [
            'type' => 'Generated\Shared\Transfer\WishlistItemTransfer',
            'type_shim' => null,
            'name_underscore' => 'items',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::META => [
            'type' => 'Generated\Shared\Transfer\WishlistOverviewMetaTransfer',
            'type_shim' => null,
            'name_underscore' => 'meta',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ERRORS => [
            'type' => 'Generated\Shared\Transfer\MessageTransfer',
            'type_shim' => null,
            'name_underscore' => 'errors',
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
     * @module WishlistPage|Wishlist
     *
     * @param \Generated\Shared\Transfer\WishlistTransfer|null $wishlist
     *
     * @return $this
     */
    public function setWishlist(WishlistTransfer $wishlist = null)
    {
        $this->wishlist = $wishlist;
        $this->modifiedProperties[self::WISHLIST] = true;

        return $this;
    }

    /**
     * @module WishlistPage|Wishlist
     *
     * @return \Generated\Shared\Transfer\WishlistTransfer|null
     */
    public function getWishlist()
    {
        return $this->wishlist;
    }

    /**
     * @module WishlistPage|Wishlist
     *
     * @param \Generated\Shared\Transfer\WishlistTransfer $wishlist
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setWishlistOrFail(WishlistTransfer $wishlist)
    {
        return $this->setWishlist($wishlist);
    }

    /**
     * @module WishlistPage|Wishlist
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\WishlistTransfer
     */
    public function getWishlistOrFail()
    {
        if ($this->wishlist === null) {
            $this->throwNullValueException(static::WISHLIST);
        }

        return $this->wishlist;
    }

    /**
     * @module WishlistPage|Wishlist
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireWishlist()
    {
        $this->assertPropertyIsSet(self::WISHLIST);

        return $this;
    }

    /**
     * @module WishlistPage|Wishlist
     *
     * @param \Generated\Shared\Transfer\WishlistPaginationTransfer|null $pagination
     *
     * @return $this
     */
    public function setPagination(WishlistPaginationTransfer $pagination = null)
    {
        $this->pagination = $pagination;
        $this->modifiedProperties[self::PAGINATION] = true;

        return $this;
    }

    /**
     * @module WishlistPage|Wishlist
     *
     * @return \Generated\Shared\Transfer\WishlistPaginationTransfer|null
     */
    public function getPagination()
    {
        return $this->pagination;
    }

    /**
     * @module WishlistPage|Wishlist
     *
     * @param \Generated\Shared\Transfer\WishlistPaginationTransfer $pagination
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPaginationOrFail(WishlistPaginationTransfer $pagination)
    {
        return $this->setPagination($pagination);
    }

    /**
     * @module WishlistPage|Wishlist
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\WishlistPaginationTransfer
     */
    public function getPaginationOrFail()
    {
        if ($this->pagination === null) {
            $this->throwNullValueException(static::PAGINATION);
        }

        return $this->pagination;
    }

    /**
     * @module WishlistPage|Wishlist
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePagination()
    {
        $this->assertPropertyIsSet(self::PAGINATION);

        return $this;
    }

    /**
     * @module WishlistPage|Wishlist
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\WishlistItemTransfer> $items
     *
     * @return $this
     */
    public function setItems(ArrayObject $items)
    {
        $this->items = $items;
        $this->modifiedProperties[self::ITEMS] = true;

        return $this;
    }

    /**
     * @module WishlistPage|Wishlist
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\WishlistItemTransfer>
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @module WishlistPage|Wishlist
     *
     * @param \Generated\Shared\Transfer\WishlistItemTransfer $item
     *
     * @return $this
     */
    public function addItem(WishlistItemTransfer $item)
    {
        $this->items[] = $item;
        $this->modifiedProperties[self::ITEMS] = true;

        return $this;
    }

    /**
     * @module WishlistPage|Wishlist
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireItems()
    {
        $this->assertCollectionPropertyIsSet(self::ITEMS);

        return $this;
    }

    /**
     * @module WishlistPage|Wishlist
     *
     * @param \Generated\Shared\Transfer\WishlistOverviewMetaTransfer|null $meta
     *
     * @return $this
     */
    public function setMeta(WishlistOverviewMetaTransfer $meta = null)
    {
        $this->meta = $meta;
        $this->modifiedProperties[self::META] = true;

        return $this;
    }

    /**
     * @module WishlistPage|Wishlist
     *
     * @return \Generated\Shared\Transfer\WishlistOverviewMetaTransfer|null
     */
    public function getMeta()
    {
        return $this->meta;
    }

    /**
     * @module WishlistPage|Wishlist
     *
     * @param \Generated\Shared\Transfer\WishlistOverviewMetaTransfer $meta
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setMetaOrFail(WishlistOverviewMetaTransfer $meta)
    {
        return $this->setMeta($meta);
    }

    /**
     * @module WishlistPage|Wishlist
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\WishlistOverviewMetaTransfer
     */
    public function getMetaOrFail()
    {
        if ($this->meta === null) {
            $this->throwNullValueException(static::META);
        }

        return $this->meta;
    }

    /**
     * @module WishlistPage|Wishlist
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMeta()
    {
        $this->assertPropertyIsSet(self::META);

        return $this;
    }

    /**
     * @module WishlistPage|Wishlist
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\MessageTransfer> $errors
     *
     * @return $this
     */
    public function setErrors(ArrayObject $errors)
    {
        $this->errors = $errors;
        $this->modifiedProperties[self::ERRORS] = true;

        return $this;
    }

    /**
     * @module WishlistPage|Wishlist
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\MessageTransfer>
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * @module WishlistPage|Wishlist
     *
     * @param \Generated\Shared\Transfer\MessageTransfer $error
     *
     * @return $this
     */
    public function addError(MessageTransfer $error)
    {
        $this->errors[] = $error;
        $this->modifiedProperties[self::ERRORS] = true;

        return $this;
    }

    /**
     * @module WishlistPage|Wishlist
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireErrors()
    {
        $this->assertCollectionPropertyIsSet(self::ERRORS);

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
                case 'wishlist':
                case 'pagination':
                case 'meta':
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
                case 'items':
                case 'errors':
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
                case 'wishlist':
                case 'pagination':
                case 'meta':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'items':
                case 'errors':
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
                case 'wishlist':
                case 'pagination':
                case 'meta':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'items':
                case 'errors':
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
        $this->items = $this->items ?: new ArrayObject();
        $this->errors = $this->errors ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'wishlist' => $this->wishlist,
            'pagination' => $this->pagination,
            'meta' => $this->meta,
            'items' => $this->items,
            'errors' => $this->errors,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'wishlist' => $this->wishlist,
            'pagination' => $this->pagination,
            'meta' => $this->meta,
            'items' => $this->items,
            'errors' => $this->errors,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'wishlist' => $this->wishlist instanceof AbstractTransfer ? $this->wishlist->toArray(true, false) : $this->wishlist,
            'pagination' => $this->pagination instanceof AbstractTransfer ? $this->pagination->toArray(true, false) : $this->pagination,
            'meta' => $this->meta instanceof AbstractTransfer ? $this->meta->toArray(true, false) : $this->meta,
            'items' => $this->items instanceof AbstractTransfer ? $this->items->toArray(true, false) : $this->addValuesToCollection($this->items, true, false),
            'errors' => $this->errors instanceof AbstractTransfer ? $this->errors->toArray(true, false) : $this->addValuesToCollection($this->errors, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'wishlist' => $this->wishlist instanceof AbstractTransfer ? $this->wishlist->toArray(true, true) : $this->wishlist,
            'pagination' => $this->pagination instanceof AbstractTransfer ? $this->pagination->toArray(true, true) : $this->pagination,
            'meta' => $this->meta instanceof AbstractTransfer ? $this->meta->toArray(true, true) : $this->meta,
            'items' => $this->items instanceof AbstractTransfer ? $this->items->toArray(true, true) : $this->addValuesToCollection($this->items, true, true),
            'errors' => $this->errors instanceof AbstractTransfer ? $this->errors->toArray(true, true) : $this->addValuesToCollection($this->errors, true, true),
        ];
    }
}
