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
class WishlistOverviewRequestTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const WISHLIST = 'wishlist';

    /**
     * @var string
     */
    public const PAGE = 'page';

    /**
     * @var string
     */
    public const ITEMS_PER_PAGE = 'itemsPerPage';

    /**
     * @var string
     */
    public const ORDER_BY = 'orderBy';

    /**
     * @var string
     */
    public const ORDER_DIRECTION = 'orderDirection';

    /**
     * @var \Generated\Shared\Transfer\WishlistTransfer|null
     */
    protected $wishlist;

    /**
     * @var int|null
     */
    protected $page;

    /**
     * @var int|null
     */
    protected $itemsPerPage;

    /**
     * @var string|null
     */
    protected $orderBy;

    /**
     * @var string|null
     */
    protected $orderDirection;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'wishlist' => 'wishlist',
        'Wishlist' => 'wishlist',
        'page' => 'page',
        'Page' => 'page',
        'items_per_page' => 'itemsPerPage',
        'itemsPerPage' => 'itemsPerPage',
        'ItemsPerPage' => 'itemsPerPage',
        'order_by' => 'orderBy',
        'orderBy' => 'orderBy',
        'OrderBy' => 'orderBy',
        'order_direction' => 'orderDirection',
        'orderDirection' => 'orderDirection',
        'OrderDirection' => 'orderDirection',
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
        self::PAGE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'page',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ITEMS_PER_PAGE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'items_per_page',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ORDER_BY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'order_by',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ORDER_DIRECTION => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'order_direction',
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
     * @param int|null $page
     *
     * @return $this
     */
    public function setPage($page)
    {
        $this->page = $page;
        $this->modifiedProperties[self::PAGE] = true;

        return $this;
    }

    /**
     * @module WishlistPage|Wishlist
     *
     * @return int|null
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @module WishlistPage|Wishlist
     *
     * @param int|null $page
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPageOrFail($page)
    {
        if ($page === null) {
            $this->throwNullValueException(static::PAGE);
        }

        return $this->setPage($page);
    }

    /**
     * @module WishlistPage|Wishlist
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getPageOrFail()
    {
        if ($this->page === null) {
            $this->throwNullValueException(static::PAGE);
        }

        return $this->page;
    }

    /**
     * @module WishlistPage|Wishlist
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePage()
    {
        $this->assertPropertyIsSet(self::PAGE);

        return $this;
    }

    /**
     * @module WishlistPage|Wishlist
     *
     * @param int|null $itemsPerPage
     *
     * @return $this
     */
    public function setItemsPerPage($itemsPerPage)
    {
        $this->itemsPerPage = $itemsPerPage;
        $this->modifiedProperties[self::ITEMS_PER_PAGE] = true;

        return $this;
    }

    /**
     * @module WishlistPage|Wishlist
     *
     * @return int|null
     */
    public function getItemsPerPage()
    {
        return $this->itemsPerPage;
    }

    /**
     * @module WishlistPage|Wishlist
     *
     * @param int|null $itemsPerPage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setItemsPerPageOrFail($itemsPerPage)
    {
        if ($itemsPerPage === null) {
            $this->throwNullValueException(static::ITEMS_PER_PAGE);
        }

        return $this->setItemsPerPage($itemsPerPage);
    }

    /**
     * @module WishlistPage|Wishlist
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getItemsPerPageOrFail()
    {
        if ($this->itemsPerPage === null) {
            $this->throwNullValueException(static::ITEMS_PER_PAGE);
        }

        return $this->itemsPerPage;
    }

    /**
     * @module WishlistPage|Wishlist
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireItemsPerPage()
    {
        $this->assertPropertyIsSet(self::ITEMS_PER_PAGE);

        return $this;
    }

    /**
     * @module Wishlist
     *
     * @param string|null $orderBy
     *
     * @return $this
     */
    public function setOrderBy($orderBy)
    {
        $this->orderBy = $orderBy;
        $this->modifiedProperties[self::ORDER_BY] = true;

        return $this;
    }

    /**
     * @module Wishlist
     *
     * @return string|null
     */
    public function getOrderBy()
    {
        return $this->orderBy;
    }

    /**
     * @module Wishlist
     *
     * @param string|null $orderBy
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setOrderByOrFail($orderBy)
    {
        if ($orderBy === null) {
            $this->throwNullValueException(static::ORDER_BY);
        }

        return $this->setOrderBy($orderBy);
    }

    /**
     * @module Wishlist
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getOrderByOrFail()
    {
        if ($this->orderBy === null) {
            $this->throwNullValueException(static::ORDER_BY);
        }

        return $this->orderBy;
    }

    /**
     * @module Wishlist
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOrderBy()
    {
        $this->assertPropertyIsSet(self::ORDER_BY);

        return $this;
    }

    /**
     * @module Wishlist
     *
     * @param string|null $orderDirection
     *
     * @return $this
     */
    public function setOrderDirection($orderDirection)
    {
        $this->orderDirection = $orderDirection;
        $this->modifiedProperties[self::ORDER_DIRECTION] = true;

        return $this;
    }

    /**
     * @module Wishlist
     *
     * @return string|null
     */
    public function getOrderDirection()
    {
        return $this->orderDirection;
    }

    /**
     * @module Wishlist
     *
     * @param string|null $orderDirection
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setOrderDirectionOrFail($orderDirection)
    {
        if ($orderDirection === null) {
            $this->throwNullValueException(static::ORDER_DIRECTION);
        }

        return $this->setOrderDirection($orderDirection);
    }

    /**
     * @module Wishlist
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getOrderDirectionOrFail()
    {
        if ($this->orderDirection === null) {
            $this->throwNullValueException(static::ORDER_DIRECTION);
        }

        return $this->orderDirection;
    }

    /**
     * @module Wishlist
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOrderDirection()
    {
        $this->assertPropertyIsSet(self::ORDER_DIRECTION);

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
                case 'page':
                case 'itemsPerPage':
                case 'orderBy':
                case 'orderDirection':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'wishlist':
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
                case 'page':
                case 'itemsPerPage':
                case 'orderBy':
                case 'orderDirection':
                    $values[$arrayKey] = $value;

                    break;
                case 'wishlist':
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
                case 'page':
                case 'itemsPerPage':
                case 'orderBy':
                case 'orderDirection':
                    $values[$arrayKey] = $value;

                    break;
                case 'wishlist':
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
            'page' => $this->page,
            'itemsPerPage' => $this->itemsPerPage,
            'orderBy' => $this->orderBy,
            'orderDirection' => $this->orderDirection,
            'wishlist' => $this->wishlist,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'page' => $this->page,
            'items_per_page' => $this->itemsPerPage,
            'order_by' => $this->orderBy,
            'order_direction' => $this->orderDirection,
            'wishlist' => $this->wishlist,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'page' => $this->page instanceof AbstractTransfer ? $this->page->toArray(true, false) : $this->page,
            'items_per_page' => $this->itemsPerPage instanceof AbstractTransfer ? $this->itemsPerPage->toArray(true, false) : $this->itemsPerPage,
            'order_by' => $this->orderBy instanceof AbstractTransfer ? $this->orderBy->toArray(true, false) : $this->orderBy,
            'order_direction' => $this->orderDirection instanceof AbstractTransfer ? $this->orderDirection->toArray(true, false) : $this->orderDirection,
            'wishlist' => $this->wishlist instanceof AbstractTransfer ? $this->wishlist->toArray(true, false) : $this->wishlist,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'page' => $this->page instanceof AbstractTransfer ? $this->page->toArray(true, true) : $this->page,
            'itemsPerPage' => $this->itemsPerPage instanceof AbstractTransfer ? $this->itemsPerPage->toArray(true, true) : $this->itemsPerPage,
            'orderBy' => $this->orderBy instanceof AbstractTransfer ? $this->orderBy->toArray(true, true) : $this->orderBy,
            'orderDirection' => $this->orderDirection instanceof AbstractTransfer ? $this->orderDirection->toArray(true, true) : $this->orderDirection,
            'wishlist' => $this->wishlist instanceof AbstractTransfer ? $this->wishlist->toArray(true, true) : $this->wishlist,
        ];
    }
}
