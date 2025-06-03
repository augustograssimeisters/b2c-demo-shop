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
class ProductConfiguratorRequestDataTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const SKU = 'sku';

    /**
     * @var string
     */
    public const SOURCE_TYPE = 'sourceType';

    /**
     * @var string
     */
    public const ITEM_GROUP_KEY = 'itemGroupKey';

    /**
     * @var string
     */
    public const QUANTITY = 'quantity';

    /**
     * @var string
     */
    public const CONFIGURATOR_KEY = 'configuratorKey';

    /**
     * @var string
     */
    public const ID_WISHLIST_ITEM = 'idWishlistItem';

    /**
     * @var string
     */
    public const CONFIGURATION = 'configuration';

    /**
     * @var string
     */
    public const DISPLAY_DATA = 'displayData';

    /**
     * @var string
     */
    public const CUSTOMER_REFERENCE = 'customerReference';

    /**
     * @var string
     */
    public const STORE_NAME = 'storeName';

    /**
     * @var string
     */
    public const CURRENCY_CODE = 'currencyCode';

    /**
     * @var string
     */
    public const LOCALE_NAME = 'localeName';

    /**
     * @var string
     */
    public const PRICE_MODE = 'priceMode';

    /**
     * @var string
     */
    public const BACK_URL = 'backUrl';

    /**
     * @var string
     */
    public const SUBMIT_URL = 'submitUrl';

    /**
     * @var string|null
     */
    protected $sku;

    /**
     * @var string|null
     */
    protected $sourceType;

    /**
     * @var string|null
     */
    protected $itemGroupKey;

    /**
     * @var int|null
     */
    protected $quantity;

    /**
     * @var string|null
     */
    protected $configuratorKey;

    /**
     * @var int|null
     */
    protected $idWishlistItem;

    /**
     * @var string|null
     */
    protected $configuration;

    /**
     * @var string|null
     */
    protected $displayData;

    /**
     * @var string|null
     */
    protected $customerReference;

    /**
     * @var string|null
     */
    protected $storeName;

    /**
     * @var string|null
     */
    protected $currencyCode;

    /**
     * @var string|null
     */
    protected $localeName;

    /**
     * @var string|null
     */
    protected $priceMode;

    /**
     * @var string|null
     */
    protected $backUrl;

    /**
     * @var string|null
     */
    protected $submitUrl;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'sku' => 'sku',
        'Sku' => 'sku',
        'source_type' => 'sourceType',
        'sourceType' => 'sourceType',
        'SourceType' => 'sourceType',
        'item_group_key' => 'itemGroupKey',
        'itemGroupKey' => 'itemGroupKey',
        'ItemGroupKey' => 'itemGroupKey',
        'quantity' => 'quantity',
        'Quantity' => 'quantity',
        'configurator_key' => 'configuratorKey',
        'configuratorKey' => 'configuratorKey',
        'ConfiguratorKey' => 'configuratorKey',
        'id_wishlist_item' => 'idWishlistItem',
        'idWishlistItem' => 'idWishlistItem',
        'IdWishlistItem' => 'idWishlistItem',
        'configuration' => 'configuration',
        'Configuration' => 'configuration',
        'display_data' => 'displayData',
        'displayData' => 'displayData',
        'DisplayData' => 'displayData',
        'customer_reference' => 'customerReference',
        'customerReference' => 'customerReference',
        'CustomerReference' => 'customerReference',
        'store_name' => 'storeName',
        'storeName' => 'storeName',
        'StoreName' => 'storeName',
        'currency_code' => 'currencyCode',
        'currencyCode' => 'currencyCode',
        'CurrencyCode' => 'currencyCode',
        'locale_name' => 'localeName',
        'localeName' => 'localeName',
        'LocaleName' => 'localeName',
        'price_mode' => 'priceMode',
        'priceMode' => 'priceMode',
        'PriceMode' => 'priceMode',
        'back_url' => 'backUrl',
        'backUrl' => 'backUrl',
        'BackUrl' => 'backUrl',
        'submit_url' => 'submitUrl',
        'submitUrl' => 'submitUrl',
        'SubmitUrl' => 'submitUrl',
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
        self::SOURCE_TYPE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'source_type',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ITEM_GROUP_KEY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'item_group_key',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
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
            'is_strict' => false,
        ],
        self::CONFIGURATOR_KEY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'configurator_key',
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
        self::CONFIGURATION => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'configuration',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DISPLAY_DATA => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'display_data',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CUSTOMER_REFERENCE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'customer_reference',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::STORE_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'store_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CURRENCY_CODE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'currency_code',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::LOCALE_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'locale_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRICE_MODE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'price_mode',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::BACK_URL => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'back_url',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SUBMIT_URL => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'submit_url',
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
     * @module ProductConfigurationCartWidget|ProductConfigurationWidget|ProductConfigurationWishlistWidget|ProductConfiguratorGatewayPage|ProductConfigurationCart
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
     * @module ProductConfigurationCartWidget|ProductConfigurationWidget|ProductConfigurationWishlistWidget|ProductConfiguratorGatewayPage|ProductConfigurationCart
     *
     * @return string|null
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @module ProductConfigurationCartWidget|ProductConfigurationWidget|ProductConfigurationWishlistWidget|ProductConfiguratorGatewayPage|ProductConfigurationCart
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
     * @module ProductConfigurationCartWidget|ProductConfigurationWidget|ProductConfigurationWishlistWidget|ProductConfiguratorGatewayPage|ProductConfigurationCart
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
     * @module ProductConfigurationCartWidget|ProductConfigurationWidget|ProductConfigurationWishlistWidget|ProductConfiguratorGatewayPage|ProductConfigurationCart
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
     * @module ProductConfigurationCartWidget|ProductConfigurationWidget|ProductConfigurationWishlistWidget|ProductConfiguratorGatewayPage
     *
     * @param string|null $sourceType
     *
     * @return $this
     */
    public function setSourceType($sourceType)
    {
        $this->sourceType = $sourceType;
        $this->modifiedProperties[self::SOURCE_TYPE] = true;

        return $this;
    }

    /**
     * @module ProductConfigurationCartWidget|ProductConfigurationWidget|ProductConfigurationWishlistWidget|ProductConfiguratorGatewayPage
     *
     * @return string|null
     */
    public function getSourceType()
    {
        return $this->sourceType;
    }

    /**
     * @module ProductConfigurationCartWidget|ProductConfigurationWidget|ProductConfigurationWishlistWidget|ProductConfiguratorGatewayPage
     *
     * @param string|null $sourceType
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSourceTypeOrFail($sourceType)
    {
        if ($sourceType === null) {
            $this->throwNullValueException(static::SOURCE_TYPE);
        }

        return $this->setSourceType($sourceType);
    }

    /**
     * @module ProductConfigurationCartWidget|ProductConfigurationWidget|ProductConfigurationWishlistWidget|ProductConfiguratorGatewayPage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getSourceTypeOrFail()
    {
        if ($this->sourceType === null) {
            $this->throwNullValueException(static::SOURCE_TYPE);
        }

        return $this->sourceType;
    }

    /**
     * @module ProductConfigurationCartWidget|ProductConfigurationWidget|ProductConfigurationWishlistWidget|ProductConfiguratorGatewayPage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSourceType()
    {
        $this->assertPropertyIsSet(self::SOURCE_TYPE);

        return $this;
    }

    /**
     * @module ProductConfigurationCartWidget|ProductConfiguratorGatewayPage|ProductConfigurationCart
     *
     * @param string|null $itemGroupKey
     *
     * @return $this
     */
    public function setItemGroupKey($itemGroupKey)
    {
        $this->itemGroupKey = $itemGroupKey;
        $this->modifiedProperties[self::ITEM_GROUP_KEY] = true;

        return $this;
    }

    /**
     * @module ProductConfigurationCartWidget|ProductConfiguratorGatewayPage|ProductConfigurationCart
     *
     * @return string|null
     */
    public function getItemGroupKey()
    {
        return $this->itemGroupKey;
    }

    /**
     * @module ProductConfigurationCartWidget|ProductConfiguratorGatewayPage|ProductConfigurationCart
     *
     * @param string|null $itemGroupKey
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setItemGroupKeyOrFail($itemGroupKey)
    {
        if ($itemGroupKey === null) {
            $this->throwNullValueException(static::ITEM_GROUP_KEY);
        }

        return $this->setItemGroupKey($itemGroupKey);
    }

    /**
     * @module ProductConfigurationCartWidget|ProductConfiguratorGatewayPage|ProductConfigurationCart
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getItemGroupKeyOrFail()
    {
        if ($this->itemGroupKey === null) {
            $this->throwNullValueException(static::ITEM_GROUP_KEY);
        }

        return $this->itemGroupKey;
    }

    /**
     * @module ProductConfigurationCartWidget|ProductConfiguratorGatewayPage|ProductConfigurationCart
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireItemGroupKey()
    {
        $this->assertPropertyIsSet(self::ITEM_GROUP_KEY);

        return $this;
    }

    /**
     * @module ProductConfigurationCartWidget|ProductConfigurationWidget|ProductConfiguratorGatewayPage
     *
     * @param int|null $quantity
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
     * @module ProductConfigurationCartWidget|ProductConfigurationWidget|ProductConfiguratorGatewayPage
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @module ProductConfigurationCartWidget|ProductConfigurationWidget|ProductConfiguratorGatewayPage
     *
     * @param int|null $quantity
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
     * @module ProductConfigurationCartWidget|ProductConfigurationWidget|ProductConfiguratorGatewayPage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getQuantityOrFail()
    {
        if ($this->quantity === null) {
            $this->throwNullValueException(static::QUANTITY);
        }

        return $this->quantity;
    }

    /**
     * @module ProductConfigurationCartWidget|ProductConfigurationWidget|ProductConfiguratorGatewayPage
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
     * @module ProductConfigurationCartWidget|ProductConfigurationWidget|ProductConfigurationWishlistWidget|ProductConfiguratorGatewayPage|ProductConfiguration
     *
     * @param string|null $configuratorKey
     *
     * @return $this
     */
    public function setConfiguratorKey($configuratorKey)
    {
        $this->configuratorKey = $configuratorKey;
        $this->modifiedProperties[self::CONFIGURATOR_KEY] = true;

        return $this;
    }

    /**
     * @module ProductConfigurationCartWidget|ProductConfigurationWidget|ProductConfigurationWishlistWidget|ProductConfiguratorGatewayPage|ProductConfiguration
     *
     * @return string|null
     */
    public function getConfiguratorKey()
    {
        return $this->configuratorKey;
    }

    /**
     * @module ProductConfigurationCartWidget|ProductConfigurationWidget|ProductConfigurationWishlistWidget|ProductConfiguratorGatewayPage|ProductConfiguration
     *
     * @param string|null $configuratorKey
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setConfiguratorKeyOrFail($configuratorKey)
    {
        if ($configuratorKey === null) {
            $this->throwNullValueException(static::CONFIGURATOR_KEY);
        }

        return $this->setConfiguratorKey($configuratorKey);
    }

    /**
     * @module ProductConfigurationCartWidget|ProductConfigurationWidget|ProductConfigurationWishlistWidget|ProductConfiguratorGatewayPage|ProductConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getConfiguratorKeyOrFail()
    {
        if ($this->configuratorKey === null) {
            $this->throwNullValueException(static::CONFIGURATOR_KEY);
        }

        return $this->configuratorKey;
    }

    /**
     * @module ProductConfigurationCartWidget|ProductConfigurationWidget|ProductConfigurationWishlistWidget|ProductConfiguratorGatewayPage|ProductConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireConfiguratorKey()
    {
        $this->assertPropertyIsSet(self::CONFIGURATOR_KEY);

        return $this;
    }

    /**
     * @module ProductConfigurationWishlistWidget|ProductConfigurationWishlist
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
     * @module ProductConfigurationWishlistWidget|ProductConfigurationWishlist
     *
     * @return int|null
     */
    public function getIdWishlistItem()
    {
        return $this->idWishlistItem;
    }

    /**
     * @module ProductConfigurationWishlistWidget|ProductConfigurationWishlist
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
     * @module ProductConfigurationWishlistWidget|ProductConfigurationWishlist
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
     * @module ProductConfigurationWishlistWidget|ProductConfigurationWishlist
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
     * @module ProductConfiguratorGatewayPage|ProductConfigurationCart
     *
     * @param string|null $configuration
     *
     * @return $this
     */
    public function setConfiguration($configuration)
    {
        $this->configuration = $configuration;
        $this->modifiedProperties[self::CONFIGURATION] = true;

        return $this;
    }

    /**
     * @module ProductConfiguratorGatewayPage|ProductConfigurationCart
     *
     * @return string|null
     */
    public function getConfiguration()
    {
        return $this->configuration;
    }

    /**
     * @module ProductConfiguratorGatewayPage|ProductConfigurationCart
     *
     * @param string|null $configuration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setConfigurationOrFail($configuration)
    {
        if ($configuration === null) {
            $this->throwNullValueException(static::CONFIGURATION);
        }

        return $this->setConfiguration($configuration);
    }

    /**
     * @module ProductConfiguratorGatewayPage|ProductConfigurationCart
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getConfigurationOrFail()
    {
        if ($this->configuration === null) {
            $this->throwNullValueException(static::CONFIGURATION);
        }

        return $this->configuration;
    }

    /**
     * @module ProductConfiguratorGatewayPage|ProductConfigurationCart
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireConfiguration()
    {
        $this->assertPropertyIsSet(self::CONFIGURATION);

        return $this;
    }

    /**
     * @module ProductConfiguratorGatewayPage|ProductConfigurationCart
     *
     * @param string|null $displayData
     *
     * @return $this
     */
    public function setDisplayData($displayData)
    {
        $this->displayData = $displayData;
        $this->modifiedProperties[self::DISPLAY_DATA] = true;

        return $this;
    }

    /**
     * @module ProductConfiguratorGatewayPage|ProductConfigurationCart
     *
     * @return string|null
     */
    public function getDisplayData()
    {
        return $this->displayData;
    }

    /**
     * @module ProductConfiguratorGatewayPage|ProductConfigurationCart
     *
     * @param string|null $displayData
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDisplayDataOrFail($displayData)
    {
        if ($displayData === null) {
            $this->throwNullValueException(static::DISPLAY_DATA);
        }

        return $this->setDisplayData($displayData);
    }

    /**
     * @module ProductConfiguratorGatewayPage|ProductConfigurationCart
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getDisplayDataOrFail()
    {
        if ($this->displayData === null) {
            $this->throwNullValueException(static::DISPLAY_DATA);
        }

        return $this->displayData;
    }

    /**
     * @module ProductConfiguratorGatewayPage|ProductConfigurationCart
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDisplayData()
    {
        $this->assertPropertyIsSet(self::DISPLAY_DATA);

        return $this;
    }

    /**
     * @module ProductConfiguratorGatewayPage|ProductConfiguration
     *
     * @param string|null $customerReference
     *
     * @return $this
     */
    public function setCustomerReference($customerReference)
    {
        $this->customerReference = $customerReference;
        $this->modifiedProperties[self::CUSTOMER_REFERENCE] = true;

        return $this;
    }

    /**
     * @module ProductConfiguratorGatewayPage|ProductConfiguration
     *
     * @return string|null
     */
    public function getCustomerReference()
    {
        return $this->customerReference;
    }

    /**
     * @module ProductConfiguratorGatewayPage|ProductConfiguration
     *
     * @param string|null $customerReference
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCustomerReferenceOrFail($customerReference)
    {
        if ($customerReference === null) {
            $this->throwNullValueException(static::CUSTOMER_REFERENCE);
        }

        return $this->setCustomerReference($customerReference);
    }

    /**
     * @module ProductConfiguratorGatewayPage|ProductConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCustomerReferenceOrFail()
    {
        if ($this->customerReference === null) {
            $this->throwNullValueException(static::CUSTOMER_REFERENCE);
        }

        return $this->customerReference;
    }

    /**
     * @module ProductConfiguratorGatewayPage|ProductConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCustomerReference()
    {
        $this->assertPropertyIsSet(self::CUSTOMER_REFERENCE);

        return $this;
    }

    /**
     * @module ProductConfiguratorGatewayPage|ProductConfiguration
     *
     * @param string|null $storeName
     *
     * @return $this
     */
    public function setStoreName($storeName)
    {
        $this->storeName = $storeName;
        $this->modifiedProperties[self::STORE_NAME] = true;

        return $this;
    }

    /**
     * @module ProductConfiguratorGatewayPage|ProductConfiguration
     *
     * @return string|null
     */
    public function getStoreName()
    {
        return $this->storeName;
    }

    /**
     * @module ProductConfiguratorGatewayPage|ProductConfiguration
     *
     * @param string|null $storeName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStoreNameOrFail($storeName)
    {
        if ($storeName === null) {
            $this->throwNullValueException(static::STORE_NAME);
        }

        return $this->setStoreName($storeName);
    }

    /**
     * @module ProductConfiguratorGatewayPage|ProductConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getStoreNameOrFail()
    {
        if ($this->storeName === null) {
            $this->throwNullValueException(static::STORE_NAME);
        }

        return $this->storeName;
    }

    /**
     * @module ProductConfiguratorGatewayPage|ProductConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStoreName()
    {
        $this->assertPropertyIsSet(self::STORE_NAME);

        return $this;
    }

    /**
     * @module ProductConfiguratorGatewayPage|ProductConfiguration
     *
     * @param string|null $currencyCode
     *
     * @return $this
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;
        $this->modifiedProperties[self::CURRENCY_CODE] = true;

        return $this;
    }

    /**
     * @module ProductConfiguratorGatewayPage|ProductConfiguration
     *
     * @return string|null
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * @module ProductConfiguratorGatewayPage|ProductConfiguration
     *
     * @param string|null $currencyCode
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCurrencyCodeOrFail($currencyCode)
    {
        if ($currencyCode === null) {
            $this->throwNullValueException(static::CURRENCY_CODE);
        }

        return $this->setCurrencyCode($currencyCode);
    }

    /**
     * @module ProductConfiguratorGatewayPage|ProductConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCurrencyCodeOrFail()
    {
        if ($this->currencyCode === null) {
            $this->throwNullValueException(static::CURRENCY_CODE);
        }

        return $this->currencyCode;
    }

    /**
     * @module ProductConfiguratorGatewayPage|ProductConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCurrencyCode()
    {
        $this->assertPropertyIsSet(self::CURRENCY_CODE);

        return $this;
    }

    /**
     * @module ProductConfiguratorGatewayPage|ProductConfiguration
     *
     * @param string|null $localeName
     *
     * @return $this
     */
    public function setLocaleName($localeName)
    {
        $this->localeName = $localeName;
        $this->modifiedProperties[self::LOCALE_NAME] = true;

        return $this;
    }

    /**
     * @module ProductConfiguratorGatewayPage|ProductConfiguration
     *
     * @return string|null
     */
    public function getLocaleName()
    {
        return $this->localeName;
    }

    /**
     * @module ProductConfiguratorGatewayPage|ProductConfiguration
     *
     * @param string|null $localeName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setLocaleNameOrFail($localeName)
    {
        if ($localeName === null) {
            $this->throwNullValueException(static::LOCALE_NAME);
        }

        return $this->setLocaleName($localeName);
    }

    /**
     * @module ProductConfiguratorGatewayPage|ProductConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getLocaleNameOrFail()
    {
        if ($this->localeName === null) {
            $this->throwNullValueException(static::LOCALE_NAME);
        }

        return $this->localeName;
    }

    /**
     * @module ProductConfiguratorGatewayPage|ProductConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLocaleName()
    {
        $this->assertPropertyIsSet(self::LOCALE_NAME);

        return $this;
    }

    /**
     * @module ProductConfiguratorGatewayPage|ProductConfiguration
     *
     * @param string|null $priceMode
     *
     * @return $this
     */
    public function setPriceMode($priceMode)
    {
        $this->priceMode = $priceMode;
        $this->modifiedProperties[self::PRICE_MODE] = true;

        return $this;
    }

    /**
     * @module ProductConfiguratorGatewayPage|ProductConfiguration
     *
     * @return string|null
     */
    public function getPriceMode()
    {
        return $this->priceMode;
    }

    /**
     * @module ProductConfiguratorGatewayPage|ProductConfiguration
     *
     * @param string|null $priceMode
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPriceModeOrFail($priceMode)
    {
        if ($priceMode === null) {
            $this->throwNullValueException(static::PRICE_MODE);
        }

        return $this->setPriceMode($priceMode);
    }

    /**
     * @module ProductConfiguratorGatewayPage|ProductConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getPriceModeOrFail()
    {
        if ($this->priceMode === null) {
            $this->throwNullValueException(static::PRICE_MODE);
        }

        return $this->priceMode;
    }

    /**
     * @module ProductConfiguratorGatewayPage|ProductConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePriceMode()
    {
        $this->assertPropertyIsSet(self::PRICE_MODE);

        return $this;
    }

    /**
     * @module ProductConfiguratorGatewayPage
     *
     * @param string|null $backUrl
     *
     * @return $this
     */
    public function setBackUrl($backUrl)
    {
        $this->backUrl = $backUrl;
        $this->modifiedProperties[self::BACK_URL] = true;

        return $this;
    }

    /**
     * @module ProductConfiguratorGatewayPage
     *
     * @return string|null
     */
    public function getBackUrl()
    {
        return $this->backUrl;
    }

    /**
     * @module ProductConfiguratorGatewayPage
     *
     * @param string|null $backUrl
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setBackUrlOrFail($backUrl)
    {
        if ($backUrl === null) {
            $this->throwNullValueException(static::BACK_URL);
        }

        return $this->setBackUrl($backUrl);
    }

    /**
     * @module ProductConfiguratorGatewayPage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getBackUrlOrFail()
    {
        if ($this->backUrl === null) {
            $this->throwNullValueException(static::BACK_URL);
        }

        return $this->backUrl;
    }

    /**
     * @module ProductConfiguratorGatewayPage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireBackUrl()
    {
        $this->assertPropertyIsSet(self::BACK_URL);

        return $this;
    }

    /**
     * @module ProductConfiguratorGatewayPage
     *
     * @param string|null $submitUrl
     *
     * @return $this
     */
    public function setSubmitUrl($submitUrl)
    {
        $this->submitUrl = $submitUrl;
        $this->modifiedProperties[self::SUBMIT_URL] = true;

        return $this;
    }

    /**
     * @module ProductConfiguratorGatewayPage
     *
     * @return string|null
     */
    public function getSubmitUrl()
    {
        return $this->submitUrl;
    }

    /**
     * @module ProductConfiguratorGatewayPage
     *
     * @param string|null $submitUrl
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSubmitUrlOrFail($submitUrl)
    {
        if ($submitUrl === null) {
            $this->throwNullValueException(static::SUBMIT_URL);
        }

        return $this->setSubmitUrl($submitUrl);
    }

    /**
     * @module ProductConfiguratorGatewayPage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getSubmitUrlOrFail()
    {
        if ($this->submitUrl === null) {
            $this->throwNullValueException(static::SUBMIT_URL);
        }

        return $this->submitUrl;
    }

    /**
     * @module ProductConfiguratorGatewayPage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSubmitUrl()
    {
        $this->assertPropertyIsSet(self::SUBMIT_URL);

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
                case 'sourceType':
                case 'itemGroupKey':
                case 'quantity':
                case 'configuratorKey':
                case 'idWishlistItem':
                case 'configuration':
                case 'displayData':
                case 'customerReference':
                case 'storeName':
                case 'currencyCode':
                case 'localeName':
                case 'priceMode':
                case 'backUrl':
                case 'submitUrl':
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
                case 'sourceType':
                case 'itemGroupKey':
                case 'quantity':
                case 'configuratorKey':
                case 'idWishlistItem':
                case 'configuration':
                case 'displayData':
                case 'customerReference':
                case 'storeName':
                case 'currencyCode':
                case 'localeName':
                case 'priceMode':
                case 'backUrl':
                case 'submitUrl':
                    $values[$arrayKey] = $value;

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
                case 'sourceType':
                case 'itemGroupKey':
                case 'quantity':
                case 'configuratorKey':
                case 'idWishlistItem':
                case 'configuration':
                case 'displayData':
                case 'customerReference':
                case 'storeName':
                case 'currencyCode':
                case 'localeName':
                case 'priceMode':
                case 'backUrl':
                case 'submitUrl':
                    $values[$arrayKey] = $value;

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
            'sourceType' => $this->sourceType,
            'itemGroupKey' => $this->itemGroupKey,
            'quantity' => $this->quantity,
            'configuratorKey' => $this->configuratorKey,
            'idWishlistItem' => $this->idWishlistItem,
            'configuration' => $this->configuration,
            'displayData' => $this->displayData,
            'customerReference' => $this->customerReference,
            'storeName' => $this->storeName,
            'currencyCode' => $this->currencyCode,
            'localeName' => $this->localeName,
            'priceMode' => $this->priceMode,
            'backUrl' => $this->backUrl,
            'submitUrl' => $this->submitUrl,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'sku' => $this->sku,
            'source_type' => $this->sourceType,
            'item_group_key' => $this->itemGroupKey,
            'quantity' => $this->quantity,
            'configurator_key' => $this->configuratorKey,
            'id_wishlist_item' => $this->idWishlistItem,
            'configuration' => $this->configuration,
            'display_data' => $this->displayData,
            'customer_reference' => $this->customerReference,
            'store_name' => $this->storeName,
            'currency_code' => $this->currencyCode,
            'locale_name' => $this->localeName,
            'price_mode' => $this->priceMode,
            'back_url' => $this->backUrl,
            'submit_url' => $this->submitUrl,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, false) : $this->sku,
            'source_type' => $this->sourceType instanceof AbstractTransfer ? $this->sourceType->toArray(true, false) : $this->sourceType,
            'item_group_key' => $this->itemGroupKey instanceof AbstractTransfer ? $this->itemGroupKey->toArray(true, false) : $this->itemGroupKey,
            'quantity' => $this->quantity instanceof AbstractTransfer ? $this->quantity->toArray(true, false) : $this->quantity,
            'configurator_key' => $this->configuratorKey instanceof AbstractTransfer ? $this->configuratorKey->toArray(true, false) : $this->configuratorKey,
            'id_wishlist_item' => $this->idWishlistItem instanceof AbstractTransfer ? $this->idWishlistItem->toArray(true, false) : $this->idWishlistItem,
            'configuration' => $this->configuration instanceof AbstractTransfer ? $this->configuration->toArray(true, false) : $this->configuration,
            'display_data' => $this->displayData instanceof AbstractTransfer ? $this->displayData->toArray(true, false) : $this->displayData,
            'customer_reference' => $this->customerReference instanceof AbstractTransfer ? $this->customerReference->toArray(true, false) : $this->customerReference,
            'store_name' => $this->storeName instanceof AbstractTransfer ? $this->storeName->toArray(true, false) : $this->storeName,
            'currency_code' => $this->currencyCode instanceof AbstractTransfer ? $this->currencyCode->toArray(true, false) : $this->currencyCode,
            'locale_name' => $this->localeName instanceof AbstractTransfer ? $this->localeName->toArray(true, false) : $this->localeName,
            'price_mode' => $this->priceMode instanceof AbstractTransfer ? $this->priceMode->toArray(true, false) : $this->priceMode,
            'back_url' => $this->backUrl instanceof AbstractTransfer ? $this->backUrl->toArray(true, false) : $this->backUrl,
            'submit_url' => $this->submitUrl instanceof AbstractTransfer ? $this->submitUrl->toArray(true, false) : $this->submitUrl,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, true) : $this->sku,
            'sourceType' => $this->sourceType instanceof AbstractTransfer ? $this->sourceType->toArray(true, true) : $this->sourceType,
            'itemGroupKey' => $this->itemGroupKey instanceof AbstractTransfer ? $this->itemGroupKey->toArray(true, true) : $this->itemGroupKey,
            'quantity' => $this->quantity instanceof AbstractTransfer ? $this->quantity->toArray(true, true) : $this->quantity,
            'configuratorKey' => $this->configuratorKey instanceof AbstractTransfer ? $this->configuratorKey->toArray(true, true) : $this->configuratorKey,
            'idWishlistItem' => $this->idWishlistItem instanceof AbstractTransfer ? $this->idWishlistItem->toArray(true, true) : $this->idWishlistItem,
            'configuration' => $this->configuration instanceof AbstractTransfer ? $this->configuration->toArray(true, true) : $this->configuration,
            'displayData' => $this->displayData instanceof AbstractTransfer ? $this->displayData->toArray(true, true) : $this->displayData,
            'customerReference' => $this->customerReference instanceof AbstractTransfer ? $this->customerReference->toArray(true, true) : $this->customerReference,
            'storeName' => $this->storeName instanceof AbstractTransfer ? $this->storeName->toArray(true, true) : $this->storeName,
            'currencyCode' => $this->currencyCode instanceof AbstractTransfer ? $this->currencyCode->toArray(true, true) : $this->currencyCode,
            'localeName' => $this->localeName instanceof AbstractTransfer ? $this->localeName->toArray(true, true) : $this->localeName,
            'priceMode' => $this->priceMode instanceof AbstractTransfer ? $this->priceMode->toArray(true, true) : $this->priceMode,
            'backUrl' => $this->backUrl instanceof AbstractTransfer ? $this->backUrl->toArray(true, true) : $this->backUrl,
            'submitUrl' => $this->submitUrl instanceof AbstractTransfer ? $this->submitUrl->toArray(true, true) : $this->submitUrl,
        ];
    }
}
