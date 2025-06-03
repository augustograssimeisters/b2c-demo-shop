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
class WishlistItemTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_WISHLIST_ITEM = 'idWishlistItem';

    /**
     * @var string
     */
    public const PRODUCT_CONFIGURATION_INSTANCE = 'productConfigurationInstance';

    /**
     * @var string
     */
    public const SKU = 'sku';

    /**
     * @var string
     */
    public const WISHLIST_NAME = 'wishlistName';

    /**
     * @var string
     */
    public const ID_PRODUCT = 'idProduct';

    /**
     * @var string
     */
    public const FK_CUSTOMER = 'fkCustomer';

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
    public const PRODUCT_CONCRETE_AVAILABILITY = 'productConcreteAvailability';

    /**
     * @var string
     */
    public const IS_SELLABLE = 'isSellable';

    /**
     * @var string
     */
    public const PRICES = 'prices';

    /**
     * @var string
     */
    public const PRODUCT_CONFIGURATION_INSTANCE_DATA = 'productConfigurationInstanceData';

    /**
     * @var string
     */
    public const FK_WISHLIST = 'fkWishlist';

    /**
     * @var string
     */
    public const PRODUCT = 'product';

    /**
     * @var int|null
     */
    protected $idWishlistItem;

    /**
     * @var \Generated\Shared\Transfer\ProductConfigurationInstanceTransfer|null
     */
    protected $productConfigurationInstance;

    /**
     * @var string|null
     */
    protected $sku;

    /**
     * @var string|null
     */
    protected $wishlistName;

    /**
     * @var int|null
     */
    protected $idProduct;

    /**
     * @var int|null
     */
    protected $fkCustomer;

    /**
     * @var string|null
     */
    protected $merchantReference;

    /**
     * @var string|null
     */
    protected $productOfferReference;

    /**
     * @var \Generated\Shared\Transfer\ProductConcreteAvailabilityTransfer|null
     */
    protected $productConcreteAvailability;

    /**
     * @var bool|null
     */
    protected $isSellable;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\PriceProductTransfer>
     */
    protected $prices;

    /**
     * @var string|null
     */
    protected $productConfigurationInstanceData;

    /**
     * @var int|null
     */
    protected $fkWishlist;

    /**
     * @var \Generated\Shared\Transfer\StorageProductTransfer|null
     */
    protected $product;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_wishlist_item' => 'idWishlistItem',
        'idWishlistItem' => 'idWishlistItem',
        'IdWishlistItem' => 'idWishlistItem',
        'product_configuration_instance' => 'productConfigurationInstance',
        'productConfigurationInstance' => 'productConfigurationInstance',
        'ProductConfigurationInstance' => 'productConfigurationInstance',
        'sku' => 'sku',
        'Sku' => 'sku',
        'wishlist_name' => 'wishlistName',
        'wishlistName' => 'wishlistName',
        'WishlistName' => 'wishlistName',
        'id_product' => 'idProduct',
        'idProduct' => 'idProduct',
        'IdProduct' => 'idProduct',
        'fk_customer' => 'fkCustomer',
        'fkCustomer' => 'fkCustomer',
        'FkCustomer' => 'fkCustomer',
        'merchant_reference' => 'merchantReference',
        'merchantReference' => 'merchantReference',
        'MerchantReference' => 'merchantReference',
        'product_offer_reference' => 'productOfferReference',
        'productOfferReference' => 'productOfferReference',
        'ProductOfferReference' => 'productOfferReference',
        'product_concrete_availability' => 'productConcreteAvailability',
        'productConcreteAvailability' => 'productConcreteAvailability',
        'ProductConcreteAvailability' => 'productConcreteAvailability',
        'is_sellable' => 'isSellable',
        'isSellable' => 'isSellable',
        'IsSellable' => 'isSellable',
        'prices' => 'prices',
        'Prices' => 'prices',
        'product_configuration_instance_data' => 'productConfigurationInstanceData',
        'productConfigurationInstanceData' => 'productConfigurationInstanceData',
        'ProductConfigurationInstanceData' => 'productConfigurationInstanceData',
        'fk_wishlist' => 'fkWishlist',
        'fkWishlist' => 'fkWishlist',
        'FkWishlist' => 'fkWishlist',
        'product' => 'product',
        'Product' => 'product',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
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
        self::WISHLIST_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'wishlist_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_PRODUCT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_product',
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
        self::PRODUCT_CONCRETE_AVAILABILITY => [
            'type' => 'Generated\Shared\Transfer\ProductConcreteAvailabilityTransfer',
            'type_shim' => null,
            'name_underscore' => 'product_concrete_availability',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_SELLABLE => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_sellable',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRICES => [
            'type' => 'Generated\Shared\Transfer\PriceProductTransfer',
            'type_shim' => null,
            'name_underscore' => 'prices',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRODUCT_CONFIGURATION_INSTANCE_DATA => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'product_configuration_instance_data',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_WISHLIST => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fk_wishlist',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRODUCT => [
            'type' => 'Generated\Shared\Transfer\StorageProductTransfer',
            'type_shim' => null,
            'name_underscore' => 'product',
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
     * @module ProductConfigurationWishlistWidget|WishlistPage|ProductConfigurationWishlist|Wishlist|WishlistsRestApi
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
     * @module ProductConfigurationWishlistWidget|WishlistPage|ProductConfigurationWishlist|Wishlist|WishlistsRestApi
     *
     * @return int|null
     */
    public function getIdWishlistItem()
    {
        return $this->idWishlistItem;
    }

    /**
     * @module ProductConfigurationWishlistWidget|WishlistPage|ProductConfigurationWishlist|Wishlist|WishlistsRestApi
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
     * @module ProductConfigurationWishlistWidget|WishlistPage|ProductConfigurationWishlist|Wishlist|WishlistsRestApi
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
     * @module ProductConfigurationWishlistWidget|WishlistPage|ProductConfigurationWishlist|Wishlist|WishlistsRestApi
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
     * @module ProductConfigurationWishlistWidget|ProductConfigurationWishlist|ProductConfigurationWishlistsRestApi
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
     * @module ProductConfigurationWishlistWidget|ProductConfigurationWishlist|ProductConfigurationWishlistsRestApi
     *
     * @return \Generated\Shared\Transfer\ProductConfigurationInstanceTransfer|null
     */
    public function getProductConfigurationInstance()
    {
        return $this->productConfigurationInstance;
    }

    /**
     * @module ProductConfigurationWishlistWidget|ProductConfigurationWishlist|ProductConfigurationWishlistsRestApi
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
     * @module ProductConfigurationWishlistWidget|ProductConfigurationWishlist|ProductConfigurationWishlistsRestApi
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
     * @module ProductConfigurationWishlistWidget|ProductConfigurationWishlist|ProductConfigurationWishlistsRestApi
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
     * @module ProductConfigurationWishlistWidget|WishlistPage|Availability|PriceProduct|ProductConfigurationWishlist|ProductConfigurationWishlistsRestApi|ProductDiscontinued|Wishlist|WishlistsRestApi
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
     * @module ProductConfigurationWishlistWidget|WishlistPage|Availability|PriceProduct|ProductConfigurationWishlist|ProductConfigurationWishlistsRestApi|ProductDiscontinued|Wishlist|WishlistsRestApi
     *
     * @return string|null
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @module ProductConfigurationWishlistWidget|WishlistPage|Availability|PriceProduct|ProductConfigurationWishlist|ProductConfigurationWishlistsRestApi|ProductDiscontinued|Wishlist|WishlistsRestApi
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
     * @module ProductConfigurationWishlistWidget|WishlistPage|Availability|PriceProduct|ProductConfigurationWishlist|ProductConfigurationWishlistsRestApi|ProductDiscontinued|Wishlist|WishlistsRestApi
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
     * @module ProductConfigurationWishlistWidget|WishlistPage|Availability|PriceProduct|ProductConfigurationWishlist|ProductConfigurationWishlistsRestApi|ProductDiscontinued|Wishlist|WishlistsRestApi
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
     * @module WishlistPage|ProductConfigurationWishlist|Wishlist|WishlistsRestApi
     *
     * @param string|null $wishlistName
     *
     * @return $this
     */
    public function setWishlistName($wishlistName)
    {
        $this->wishlistName = $wishlistName;
        $this->modifiedProperties[self::WISHLIST_NAME] = true;

        return $this;
    }

    /**
     * @module WishlistPage|ProductConfigurationWishlist|Wishlist|WishlistsRestApi
     *
     * @return string|null
     */
    public function getWishlistName()
    {
        return $this->wishlistName;
    }

    /**
     * @module WishlistPage|ProductConfigurationWishlist|Wishlist|WishlistsRestApi
     *
     * @param string|null $wishlistName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setWishlistNameOrFail($wishlistName)
    {
        if ($wishlistName === null) {
            $this->throwNullValueException(static::WISHLIST_NAME);
        }

        return $this->setWishlistName($wishlistName);
    }

    /**
     * @module WishlistPage|ProductConfigurationWishlist|Wishlist|WishlistsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getWishlistNameOrFail()
    {
        if ($this->wishlistName === null) {
            $this->throwNullValueException(static::WISHLIST_NAME);
        }

        return $this->wishlistName;
    }

    /**
     * @module WishlistPage|ProductConfigurationWishlist|Wishlist|WishlistsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireWishlistName()
    {
        $this->assertPropertyIsSet(self::WISHLIST_NAME);

        return $this;
    }

    /**
     * @module WishlistPage|Wishlist
     *
     * @param int|null $idProduct
     *
     * @return $this
     */
    public function setIdProduct($idProduct)
    {
        $this->idProduct = $idProduct;
        $this->modifiedProperties[self::ID_PRODUCT] = true;

        return $this;
    }

    /**
     * @module WishlistPage|Wishlist
     *
     * @return int|null
     */
    public function getIdProduct()
    {
        return $this->idProduct;
    }

    /**
     * @module WishlistPage|Wishlist
     *
     * @param int|null $idProduct
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdProductOrFail($idProduct)
    {
        if ($idProduct === null) {
            $this->throwNullValueException(static::ID_PRODUCT);
        }

        return $this->setIdProduct($idProduct);
    }

    /**
     * @module WishlistPage|Wishlist
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdProductOrFail()
    {
        if ($this->idProduct === null) {
            $this->throwNullValueException(static::ID_PRODUCT);
        }

        return $this->idProduct;
    }

    /**
     * @module WishlistPage|Wishlist
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdProduct()
    {
        $this->assertPropertyIsSet(self::ID_PRODUCT);

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
     * @module Availability|ProductAvailabilitiesRestApi
     *
     * @param \Generated\Shared\Transfer\ProductConcreteAvailabilityTransfer|null $productConcreteAvailability
     *
     * @return $this
     */
    public function setProductConcreteAvailability(ProductConcreteAvailabilityTransfer $productConcreteAvailability = null)
    {
        $this->productConcreteAvailability = $productConcreteAvailability;
        $this->modifiedProperties[self::PRODUCT_CONCRETE_AVAILABILITY] = true;

        return $this;
    }

    /**
     * @module Availability|ProductAvailabilitiesRestApi
     *
     * @return \Generated\Shared\Transfer\ProductConcreteAvailabilityTransfer|null
     */
    public function getProductConcreteAvailability()
    {
        return $this->productConcreteAvailability;
    }

    /**
     * @module Availability|ProductAvailabilitiesRestApi
     *
     * @param \Generated\Shared\Transfer\ProductConcreteAvailabilityTransfer $productConcreteAvailability
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductConcreteAvailabilityOrFail(ProductConcreteAvailabilityTransfer $productConcreteAvailability)
    {
        return $this->setProductConcreteAvailability($productConcreteAvailability);
    }

    /**
     * @module Availability|ProductAvailabilitiesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ProductConcreteAvailabilityTransfer
     */
    public function getProductConcreteAvailabilityOrFail()
    {
        if ($this->productConcreteAvailability === null) {
            $this->throwNullValueException(static::PRODUCT_CONCRETE_AVAILABILITY);
        }

        return $this->productConcreteAvailability;
    }

    /**
     * @module Availability|ProductAvailabilitiesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductConcreteAvailability()
    {
        $this->assertPropertyIsSet(self::PRODUCT_CONCRETE_AVAILABILITY);

        return $this;
    }

    /**
     * @module Availability|ProductAvailabilitiesRestApi
     *
     * @param bool|null $isSellable
     *
     * @return $this
     */
    public function setIsSellable($isSellable)
    {
        $this->isSellable = $isSellable;
        $this->modifiedProperties[self::IS_SELLABLE] = true;

        return $this;
    }

    /**
     * @module Availability|ProductAvailabilitiesRestApi
     *
     * @return bool|null
     */
    public function getIsSellable()
    {
        return $this->isSellable;
    }

    /**
     * @module Availability|ProductAvailabilitiesRestApi
     *
     * @param bool|null $isSellable
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsSellableOrFail($isSellable)
    {
        if ($isSellable === null) {
            $this->throwNullValueException(static::IS_SELLABLE);
        }

        return $this->setIsSellable($isSellable);
    }

    /**
     * @module Availability|ProductAvailabilitiesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsSellableOrFail()
    {
        if ($this->isSellable === null) {
            $this->throwNullValueException(static::IS_SELLABLE);
        }

        return $this->isSellable;
    }

    /**
     * @module Availability|ProductAvailabilitiesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsSellable()
    {
        $this->assertPropertyIsSet(self::IS_SELLABLE);

        return $this;
    }

    /**
     * @module PriceProduct|ProductPricesRestApi
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\PriceProductTransfer> $prices
     *
     * @return $this
     */
    public function setPrices(ArrayObject $prices)
    {
        $this->prices = $prices;
        $this->modifiedProperties[self::PRICES] = true;

        return $this;
    }

    /**
     * @module PriceProduct|ProductPricesRestApi
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\PriceProductTransfer>
     */
    public function getPrices()
    {
        return $this->prices;
    }

    /**
     * @module PriceProduct|ProductPricesRestApi
     *
     * @param \Generated\Shared\Transfer\PriceProductTransfer $price
     *
     * @return $this
     */
    public function addPrice(PriceProductTransfer $price)
    {
        $this->prices[] = $price;
        $this->modifiedProperties[self::PRICES] = true;

        return $this;
    }

    /**
     * @module PriceProduct|ProductPricesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePrices()
    {
        $this->assertCollectionPropertyIsSet(self::PRICES);

        return $this;
    }

    /**
     * @module ProductConfigurationWishlist|ProductConfigurationWishlistsRestApi
     *
     * @param string|null $productConfigurationInstanceData
     *
     * @return $this
     */
    public function setProductConfigurationInstanceData($productConfigurationInstanceData)
    {
        $this->productConfigurationInstanceData = $productConfigurationInstanceData;
        $this->modifiedProperties[self::PRODUCT_CONFIGURATION_INSTANCE_DATA] = true;

        return $this;
    }

    /**
     * @module ProductConfigurationWishlist|ProductConfigurationWishlistsRestApi
     *
     * @return string|null
     */
    public function getProductConfigurationInstanceData()
    {
        return $this->productConfigurationInstanceData;
    }

    /**
     * @module ProductConfigurationWishlist|ProductConfigurationWishlistsRestApi
     *
     * @param string|null $productConfigurationInstanceData
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductConfigurationInstanceDataOrFail($productConfigurationInstanceData)
    {
        if ($productConfigurationInstanceData === null) {
            $this->throwNullValueException(static::PRODUCT_CONFIGURATION_INSTANCE_DATA);
        }

        return $this->setProductConfigurationInstanceData($productConfigurationInstanceData);
    }

    /**
     * @module ProductConfigurationWishlist|ProductConfigurationWishlistsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getProductConfigurationInstanceDataOrFail()
    {
        if ($this->productConfigurationInstanceData === null) {
            $this->throwNullValueException(static::PRODUCT_CONFIGURATION_INSTANCE_DATA);
        }

        return $this->productConfigurationInstanceData;
    }

    /**
     * @module ProductConfigurationWishlist|ProductConfigurationWishlistsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductConfigurationInstanceData()
    {
        $this->assertPropertyIsSet(self::PRODUCT_CONFIGURATION_INSTANCE_DATA);

        return $this;
    }

    /**
     * @module Wishlist|WishlistsRestApi
     *
     * @param int|null $fkWishlist
     *
     * @return $this
     */
    public function setFkWishlist($fkWishlist)
    {
        $this->fkWishlist = $fkWishlist;
        $this->modifiedProperties[self::FK_WISHLIST] = true;

        return $this;
    }

    /**
     * @module Wishlist|WishlistsRestApi
     *
     * @return int|null
     */
    public function getFkWishlist()
    {
        return $this->fkWishlist;
    }

    /**
     * @module Wishlist|WishlistsRestApi
     *
     * @param int|null $fkWishlist
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkWishlistOrFail($fkWishlist)
    {
        if ($fkWishlist === null) {
            $this->throwNullValueException(static::FK_WISHLIST);
        }

        return $this->setFkWishlist($fkWishlist);
    }

    /**
     * @module Wishlist|WishlistsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkWishlistOrFail()
    {
        if ($this->fkWishlist === null) {
            $this->throwNullValueException(static::FK_WISHLIST);
        }

        return $this->fkWishlist;
    }

    /**
     * @module Wishlist|WishlistsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkWishlist()
    {
        $this->assertPropertyIsSet(self::FK_WISHLIST);

        return $this;
    }

    /**
     * @module Wishlist
     *
     * @param \Generated\Shared\Transfer\StorageProductTransfer|null $product
     *
     * @return $this
     */
    public function setProduct(StorageProductTransfer $product = null)
    {
        $this->product = $product;
        $this->modifiedProperties[self::PRODUCT] = true;

        return $this;
    }

    /**
     * @module Wishlist
     *
     * @return \Generated\Shared\Transfer\StorageProductTransfer|null
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @module Wishlist
     *
     * @param \Generated\Shared\Transfer\StorageProductTransfer $product
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductOrFail(StorageProductTransfer $product)
    {
        return $this->setProduct($product);
    }

    /**
     * @module Wishlist
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\StorageProductTransfer
     */
    public function getProductOrFail()
    {
        if ($this->product === null) {
            $this->throwNullValueException(static::PRODUCT);
        }

        return $this->product;
    }

    /**
     * @module Wishlist
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProduct()
    {
        $this->assertPropertyIsSet(self::PRODUCT);

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
                case 'idWishlistItem':
                case 'sku':
                case 'wishlistName':
                case 'idProduct':
                case 'fkCustomer':
                case 'merchantReference':
                case 'productOfferReference':
                case 'isSellable':
                case 'productConfigurationInstanceData':
                case 'fkWishlist':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'productConfigurationInstance':
                case 'productConcreteAvailability':
                case 'product':
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
                case 'prices':
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
                case 'idWishlistItem':
                case 'sku':
                case 'wishlistName':
                case 'idProduct':
                case 'fkCustomer':
                case 'merchantReference':
                case 'productOfferReference':
                case 'isSellable':
                case 'productConfigurationInstanceData':
                case 'fkWishlist':
                    $values[$arrayKey] = $value;

                    break;
                case 'productConfigurationInstance':
                case 'productConcreteAvailability':
                case 'product':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'prices':
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
                case 'idWishlistItem':
                case 'sku':
                case 'wishlistName':
                case 'idProduct':
                case 'fkCustomer':
                case 'merchantReference':
                case 'productOfferReference':
                case 'isSellable':
                case 'productConfigurationInstanceData':
                case 'fkWishlist':
                    $values[$arrayKey] = $value;

                    break;
                case 'productConfigurationInstance':
                case 'productConcreteAvailability':
                case 'product':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'prices':
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
        $this->prices = $this->prices ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idWishlistItem' => $this->idWishlistItem,
            'sku' => $this->sku,
            'wishlistName' => $this->wishlistName,
            'idProduct' => $this->idProduct,
            'fkCustomer' => $this->fkCustomer,
            'merchantReference' => $this->merchantReference,
            'productOfferReference' => $this->productOfferReference,
            'isSellable' => $this->isSellable,
            'productConfigurationInstanceData' => $this->productConfigurationInstanceData,
            'fkWishlist' => $this->fkWishlist,
            'productConfigurationInstance' => $this->productConfigurationInstance,
            'productConcreteAvailability' => $this->productConcreteAvailability,
            'product' => $this->product,
            'prices' => $this->prices,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_wishlist_item' => $this->idWishlistItem,
            'sku' => $this->sku,
            'wishlist_name' => $this->wishlistName,
            'id_product' => $this->idProduct,
            'fk_customer' => $this->fkCustomer,
            'merchant_reference' => $this->merchantReference,
            'product_offer_reference' => $this->productOfferReference,
            'is_sellable' => $this->isSellable,
            'product_configuration_instance_data' => $this->productConfigurationInstanceData,
            'fk_wishlist' => $this->fkWishlist,
            'product_configuration_instance' => $this->productConfigurationInstance,
            'product_concrete_availability' => $this->productConcreteAvailability,
            'product' => $this->product,
            'prices' => $this->prices,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_wishlist_item' => $this->idWishlistItem instanceof AbstractTransfer ? $this->idWishlistItem->toArray(true, false) : $this->idWishlistItem,
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, false) : $this->sku,
            'wishlist_name' => $this->wishlistName instanceof AbstractTransfer ? $this->wishlistName->toArray(true, false) : $this->wishlistName,
            'id_product' => $this->idProduct instanceof AbstractTransfer ? $this->idProduct->toArray(true, false) : $this->idProduct,
            'fk_customer' => $this->fkCustomer instanceof AbstractTransfer ? $this->fkCustomer->toArray(true, false) : $this->fkCustomer,
            'merchant_reference' => $this->merchantReference instanceof AbstractTransfer ? $this->merchantReference->toArray(true, false) : $this->merchantReference,
            'product_offer_reference' => $this->productOfferReference instanceof AbstractTransfer ? $this->productOfferReference->toArray(true, false) : $this->productOfferReference,
            'is_sellable' => $this->isSellable instanceof AbstractTransfer ? $this->isSellable->toArray(true, false) : $this->isSellable,
            'product_configuration_instance_data' => $this->productConfigurationInstanceData instanceof AbstractTransfer ? $this->productConfigurationInstanceData->toArray(true, false) : $this->productConfigurationInstanceData,
            'fk_wishlist' => $this->fkWishlist instanceof AbstractTransfer ? $this->fkWishlist->toArray(true, false) : $this->fkWishlist,
            'product_configuration_instance' => $this->productConfigurationInstance instanceof AbstractTransfer ? $this->productConfigurationInstance->toArray(true, false) : $this->productConfigurationInstance,
            'product_concrete_availability' => $this->productConcreteAvailability instanceof AbstractTransfer ? $this->productConcreteAvailability->toArray(true, false) : $this->productConcreteAvailability,
            'product' => $this->product instanceof AbstractTransfer ? $this->product->toArray(true, false) : $this->product,
            'prices' => $this->prices instanceof AbstractTransfer ? $this->prices->toArray(true, false) : $this->addValuesToCollection($this->prices, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idWishlistItem' => $this->idWishlistItem instanceof AbstractTransfer ? $this->idWishlistItem->toArray(true, true) : $this->idWishlistItem,
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, true) : $this->sku,
            'wishlistName' => $this->wishlistName instanceof AbstractTransfer ? $this->wishlistName->toArray(true, true) : $this->wishlistName,
            'idProduct' => $this->idProduct instanceof AbstractTransfer ? $this->idProduct->toArray(true, true) : $this->idProduct,
            'fkCustomer' => $this->fkCustomer instanceof AbstractTransfer ? $this->fkCustomer->toArray(true, true) : $this->fkCustomer,
            'merchantReference' => $this->merchantReference instanceof AbstractTransfer ? $this->merchantReference->toArray(true, true) : $this->merchantReference,
            'productOfferReference' => $this->productOfferReference instanceof AbstractTransfer ? $this->productOfferReference->toArray(true, true) : $this->productOfferReference,
            'isSellable' => $this->isSellable instanceof AbstractTransfer ? $this->isSellable->toArray(true, true) : $this->isSellable,
            'productConfigurationInstanceData' => $this->productConfigurationInstanceData instanceof AbstractTransfer ? $this->productConfigurationInstanceData->toArray(true, true) : $this->productConfigurationInstanceData,
            'fkWishlist' => $this->fkWishlist instanceof AbstractTransfer ? $this->fkWishlist->toArray(true, true) : $this->fkWishlist,
            'productConfigurationInstance' => $this->productConfigurationInstance instanceof AbstractTransfer ? $this->productConfigurationInstance->toArray(true, true) : $this->productConfigurationInstance,
            'productConcreteAvailability' => $this->productConcreteAvailability instanceof AbstractTransfer ? $this->productConcreteAvailability->toArray(true, true) : $this->productConcreteAvailability,
            'product' => $this->product instanceof AbstractTransfer ? $this->product->toArray(true, true) : $this->product,
            'prices' => $this->prices instanceof AbstractTransfer ? $this->prices->toArray(true, true) : $this->addValuesToCollection($this->prices, true, true),
        ];
    }
}
