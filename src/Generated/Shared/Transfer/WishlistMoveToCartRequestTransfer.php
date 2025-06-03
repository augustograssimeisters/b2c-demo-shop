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
class WishlistMoveToCartRequestTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const SKU = 'sku';

    /**
     * @var string
     */
    public const ID_WISHLIST_ITEM = 'idWishlistItem';

    /**
     * @var string
     */
    public const WISHLIST_ITEM = 'wishlistItem';

    /**
     * @var string
     */
    public const MERCHANT_REFERENCE = 'merchantReference';

    /**
     * @var string
     */
    public const PRODUCT_OFFER_REFERENCE = 'productOfferReference';

    /**
     * @var string
     */
    public const PRODUCT_CONFIGURATION_INSTANCE = 'productConfigurationInstance';

    /**
     * @var string|null
     */
    protected $sku;

    /**
     * @var int|null
     */
    protected $idWishlistItem;

    /**
     * @var \Generated\Shared\Transfer\WishlistItemTransfer|null
     */
    protected $wishlistItem;

    /**
     * @var string|null
     */
    protected $merchantReference;

    /**
     * @var string|null
     */
    protected $productOfferReference;

    /**
     * @var \Generated\Shared\Transfer\ProductConfigurationInstanceTransfer|null
     */
    protected $productConfigurationInstance;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'sku' => 'sku',
        'Sku' => 'sku',
        'id_wishlist_item' => 'idWishlistItem',
        'idWishlistItem' => 'idWishlistItem',
        'IdWishlistItem' => 'idWishlistItem',
        'wishlist_item' => 'wishlistItem',
        'wishlistItem' => 'wishlistItem',
        'WishlistItem' => 'wishlistItem',
        'merchant_reference' => 'merchantReference',
        'merchantReference' => 'merchantReference',
        'MerchantReference' => 'merchantReference',
        'product_offer_reference' => 'productOfferReference',
        'productOfferReference' => 'productOfferReference',
        'ProductOfferReference' => 'productOfferReference',
        'product_configuration_instance' => 'productConfigurationInstance',
        'productConfigurationInstance' => 'productConfigurationInstance',
        'ProductConfigurationInstance' => 'productConfigurationInstance',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::SKU => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'sku',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_WISHLIST_ITEM => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_wishlist_item',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::WISHLIST_ITEM => [
            'type' => 'Generated\Shared\Transfer\WishlistItemTransfer',
            'type_shim' => null,
            'name_underscore' => 'wishlist_item',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::MERCHANT_REFERENCE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'merchant_reference',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRODUCT_OFFER_REFERENCE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'product_offer_reference',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRODUCT_CONFIGURATION_INSTANCE => [
            'type' => 'Generated\Shared\Transfer\ProductConfigurationInstanceTransfer',
            'type_shim' => null,
            'name_underscore' => 'product_configuration_instance',
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
     * @param string|null $sku
     *
     * @return $this
     */
    public function setSku($sku)
    {
        $this->sku = $sku;
        $this->modifiedProperties[self::SKU] = true;

        return $this;
    }

    /**
     * @module WishlistPage|Wishlist
     *
     * @return string|null
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @module WishlistPage|Wishlist
     *
     * @param string|null $sku
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSkuOrFail($sku)
    {
        if ($sku === null) {
            $this->throwNullValueException(static::SKU);
        }

        return $this->setSku($sku);
    }

    /**
     * @module WishlistPage|Wishlist
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getSkuOrFail()
    {
        if ($this->sku === null) {
            $this->throwNullValueException(static::SKU);
        }

        return $this->sku;
    }

    /**
     * @module WishlistPage|Wishlist
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSku()
    {
        $this->assertPropertyIsSet(self::SKU);

        return $this;
    }

    /**
     * @module WishlistPage
     *
     * @param int|null $idWishlistItem
     *
     * @return $this
     */
    public function setIdWishlistItem($idWishlistItem)
    {
        $this->idWishlistItem = $idWishlistItem;
        $this->modifiedProperties[self::ID_WISHLIST_ITEM] = true;

        return $this;
    }

    /**
     * @module WishlistPage
     *
     * @return int|null
     */
    public function getIdWishlistItem()
    {
        return $this->idWishlistItem;
    }

    /**
     * @module WishlistPage
     *
     * @param int|null $idWishlistItem
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdWishlistItemOrFail($idWishlistItem)
    {
        if ($idWishlistItem === null) {
            $this->throwNullValueException(static::ID_WISHLIST_ITEM);
        }

        return $this->setIdWishlistItem($idWishlistItem);
    }

    /**
     * @module WishlistPage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdWishlistItemOrFail()
    {
        if ($this->idWishlistItem === null) {
            $this->throwNullValueException(static::ID_WISHLIST_ITEM);
        }

        return $this->idWishlistItem;
    }

    /**
     * @module WishlistPage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdWishlistItem()
    {
        $this->assertPropertyIsSet(self::ID_WISHLIST_ITEM);

        return $this;
    }

    /**
     * @module WishlistPage|ProductConfigurationWishlist|Wishlist
     *
     * @param \Generated\Shared\Transfer\WishlistItemTransfer|null $wishlistItem
     *
     * @return $this
     */
    public function setWishlistItem(WishlistItemTransfer $wishlistItem = null)
    {
        $this->wishlistItem = $wishlistItem;
        $this->modifiedProperties[self::WISHLIST_ITEM] = true;

        return $this;
    }

    /**
     * @module WishlistPage|ProductConfigurationWishlist|Wishlist
     *
     * @return \Generated\Shared\Transfer\WishlistItemTransfer|null
     */
    public function getWishlistItem()
    {
        return $this->wishlistItem;
    }

    /**
     * @module WishlistPage|ProductConfigurationWishlist|Wishlist
     *
     * @param \Generated\Shared\Transfer\WishlistItemTransfer $wishlistItem
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setWishlistItemOrFail(WishlistItemTransfer $wishlistItem)
    {
        return $this->setWishlistItem($wishlistItem);
    }

    /**
     * @module WishlistPage|ProductConfigurationWishlist|Wishlist
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\WishlistItemTransfer
     */
    public function getWishlistItemOrFail()
    {
        if ($this->wishlistItem === null) {
            $this->throwNullValueException(static::WISHLIST_ITEM);
        }

        return $this->wishlistItem;
    }

    /**
     * @module WishlistPage|ProductConfigurationWishlist|Wishlist
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireWishlistItem()
    {
        $this->assertPropertyIsSet(self::WISHLIST_ITEM);

        return $this;
    }

    /**
     * @module WishlistPage
     *
     * @param string|null $merchantReference
     *
     * @return $this
     */
    public function setMerchantReference($merchantReference)
    {
        $this->merchantReference = $merchantReference;
        $this->modifiedProperties[self::MERCHANT_REFERENCE] = true;

        return $this;
    }

    /**
     * @module WishlistPage
     *
     * @return string|null
     */
    public function getMerchantReference()
    {
        return $this->merchantReference;
    }

    /**
     * @module WishlistPage
     *
     * @param string|null $merchantReference
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setMerchantReferenceOrFail($merchantReference)
    {
        if ($merchantReference === null) {
            $this->throwNullValueException(static::MERCHANT_REFERENCE);
        }

        return $this->setMerchantReference($merchantReference);
    }

    /**
     * @module WishlistPage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getMerchantReferenceOrFail()
    {
        if ($this->merchantReference === null) {
            $this->throwNullValueException(static::MERCHANT_REFERENCE);
        }

        return $this->merchantReference;
    }

    /**
     * @module WishlistPage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMerchantReference()
    {
        $this->assertPropertyIsSet(self::MERCHANT_REFERENCE);

        return $this;
    }

    /**
     * @module WishlistPage
     *
     * @param string|null $productOfferReference
     *
     * @return $this
     */
    public function setProductOfferReference($productOfferReference)
    {
        $this->productOfferReference = $productOfferReference;
        $this->modifiedProperties[self::PRODUCT_OFFER_REFERENCE] = true;

        return $this;
    }

    /**
     * @module WishlistPage
     *
     * @return string|null
     */
    public function getProductOfferReference()
    {
        return $this->productOfferReference;
    }

    /**
     * @module WishlistPage
     *
     * @param string|null $productOfferReference
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductOfferReferenceOrFail($productOfferReference)
    {
        if ($productOfferReference === null) {
            $this->throwNullValueException(static::PRODUCT_OFFER_REFERENCE);
        }

        return $this->setProductOfferReference($productOfferReference);
    }

    /**
     * @module WishlistPage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getProductOfferReferenceOrFail()
    {
        if ($this->productOfferReference === null) {
            $this->throwNullValueException(static::PRODUCT_OFFER_REFERENCE);
        }

        return $this->productOfferReference;
    }

    /**
     * @module WishlistPage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductOfferReference()
    {
        $this->assertPropertyIsSet(self::PRODUCT_OFFER_REFERENCE);

        return $this;
    }

    /**
     * @module ProductConfigurationWishlist
     *
     * @param \Generated\Shared\Transfer\ProductConfigurationInstanceTransfer|null $productConfigurationInstance
     *
     * @return $this
     */
    public function setProductConfigurationInstance(ProductConfigurationInstanceTransfer $productConfigurationInstance = null)
    {
        $this->productConfigurationInstance = $productConfigurationInstance;
        $this->modifiedProperties[self::PRODUCT_CONFIGURATION_INSTANCE] = true;

        return $this;
    }

    /**
     * @module ProductConfigurationWishlist
     *
     * @return \Generated\Shared\Transfer\ProductConfigurationInstanceTransfer|null
     */
    public function getProductConfigurationInstance()
    {
        return $this->productConfigurationInstance;
    }

    /**
     * @module ProductConfigurationWishlist
     *
     * @param \Generated\Shared\Transfer\ProductConfigurationInstanceTransfer $productConfigurationInstance
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductConfigurationInstanceOrFail(ProductConfigurationInstanceTransfer $productConfigurationInstance)
    {
        return $this->setProductConfigurationInstance($productConfigurationInstance);
    }

    /**
     * @module ProductConfigurationWishlist
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ProductConfigurationInstanceTransfer
     */
    public function getProductConfigurationInstanceOrFail()
    {
        if ($this->productConfigurationInstance === null) {
            $this->throwNullValueException(static::PRODUCT_CONFIGURATION_INSTANCE);
        }

        return $this->productConfigurationInstance;
    }

    /**
     * @module ProductConfigurationWishlist
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductConfigurationInstance()
    {
        $this->assertPropertyIsSet(self::PRODUCT_CONFIGURATION_INSTANCE);

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
                case 'sku':
                case 'idWishlistItem':
                case 'merchantReference':
                case 'productOfferReference':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'wishlistItem':
                case 'productConfigurationInstance':
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
                case 'sku':
                case 'idWishlistItem':
                case 'merchantReference':
                case 'productOfferReference':
                    $values[$arrayKey] = $value;

                    break;
                case 'wishlistItem':
                case 'productConfigurationInstance':
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
                case 'sku':
                case 'idWishlistItem':
                case 'merchantReference':
                case 'productOfferReference':
                    $values[$arrayKey] = $value;

                    break;
                case 'wishlistItem':
                case 'productConfigurationInstance':
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
            'sku' => $this->sku,
            'idWishlistItem' => $this->idWishlistItem,
            'merchantReference' => $this->merchantReference,
            'productOfferReference' => $this->productOfferReference,
            'wishlistItem' => $this->wishlistItem,
            'productConfigurationInstance' => $this->productConfigurationInstance,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'sku' => $this->sku,
            'id_wishlist_item' => $this->idWishlistItem,
            'merchant_reference' => $this->merchantReference,
            'product_offer_reference' => $this->productOfferReference,
            'wishlist_item' => $this->wishlistItem,
            'product_configuration_instance' => $this->productConfigurationInstance,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, false) : $this->sku,
            'id_wishlist_item' => $this->idWishlistItem instanceof AbstractTransfer ? $this->idWishlistItem->toArray(true, false) : $this->idWishlistItem,
            'merchant_reference' => $this->merchantReference instanceof AbstractTransfer ? $this->merchantReference->toArray(true, false) : $this->merchantReference,
            'product_offer_reference' => $this->productOfferReference instanceof AbstractTransfer ? $this->productOfferReference->toArray(true, false) : $this->productOfferReference,
            'wishlist_item' => $this->wishlistItem instanceof AbstractTransfer ? $this->wishlistItem->toArray(true, false) : $this->wishlistItem,
            'product_configuration_instance' => $this->productConfigurationInstance instanceof AbstractTransfer ? $this->productConfigurationInstance->toArray(true, false) : $this->productConfigurationInstance,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, true) : $this->sku,
            'idWishlistItem' => $this->idWishlistItem instanceof AbstractTransfer ? $this->idWishlistItem->toArray(true, true) : $this->idWishlistItem,
            'merchantReference' => $this->merchantReference instanceof AbstractTransfer ? $this->merchantReference->toArray(true, true) : $this->merchantReference,
            'productOfferReference' => $this->productOfferReference instanceof AbstractTransfer ? $this->productOfferReference->toArray(true, true) : $this->productOfferReference,
            'wishlistItem' => $this->wishlistItem instanceof AbstractTransfer ? $this->wishlistItem->toArray(true, true) : $this->wishlistItem,
            'productConfigurationInstance' => $this->productConfigurationInstance instanceof AbstractTransfer ? $this->productConfigurationInstance->toArray(true, true) : $this->productConfigurationInstance,
        ];
    }
}
