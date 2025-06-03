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
class SpyStoreEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_STORE = 'idStore';

    /**
     * @var string
     */
    public const FK_CURRENCY = 'fkCurrency';

    /**
     * @var string
     */
    public const FK_LOCALE = 'fkLocale';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const DEFAULT_CURRENCY = 'defaultCurrency';

    /**
     * @var string
     */
    public const DEFAULT_LOCALE = 'defaultLocale';

    /**
     * @var string
     */
    public const SPY_STOCK_STORES = 'spyStockStores';

    /**
     * @var string
     */
    public const SPY_SALES_ORDER_THRESHOLDS = 'spySalesOrderThresholds';

    /**
     * @var string
     */
    public const SPY_CMS_PAGE_STORES = 'spyCmsPageStores';

    /**
     * @var string
     */
    public const SPY_QUOTES = 'spyQuotes';

    /**
     * @var string
     */
    public const SPY_PRODUCT_OPTION_VALUE_PRICES = 'spyProductOptionValuePrices';

    /**
     * @var string
     */
    public const SPY_ASSET_STORES = 'spyAssetStores';

    /**
     * @var string
     */
    public const SPY_TOUCH_STORAGES = 'spyTouchStorages';

    /**
     * @var string
     */
    public const SPY_TOUCH_SEARCHES = 'spyTouchSearches';

    /**
     * @var string
     */
    public const SPY_LOCALE_STORES = 'spyLocaleStores';

    /**
     * @var string
     */
    public const SPY_STORE_CONTEXTS = 'spyStoreContexts';

    /**
     * @var string
     */
    public const SPY_CURRENCY_STORES = 'spyCurrencyStores';

    /**
     * @var string
     */
    public const SPY_OMS_PRODUCT_RESERVATIONS = 'spyOmsProductReservations';

    /**
     * @var string
     */
    public const SPY_COUNTRY_STORES = 'spyCountryStores';

    /**
     * @var string
     */
    public const SPY_CATEGORY_STORES = 'spyCategoryStores';

    /**
     * @var string
     */
    public const SPY_PRODUCT_ABSTRACT_STORES = 'spyProductAbstractStores';

    /**
     * @var string
     */
    public const SPY_SHIPMENT_METHOD_PRICES = 'spyShipmentMethodPrices';

    /**
     * @var string
     */
    public const SPY_SHIPMENT_METHOD_STORES = 'spyShipmentMethodStores';

    /**
     * @var string
     */
    public const SPY_AVAILABILITY_ABSTRACTS = 'spyAvailabilityAbstracts';

    /**
     * @var string
     */
    public const SPY_AVAILABILITIES = 'spyAvailabilities';

    /**
     * @var string
     */
    public const SPY_PAYMENT_METHOD_STORES = 'spyPaymentMethodStores';

    /**
     * @var string
     */
    public const SPY_PRICE_PRODUCT_STORES = 'spyPriceProductStores';

    /**
     * @var string
     */
    public const SPY_PRICE_PRODUCT_SCHEDULES = 'spyPriceProductSchedules';

    /**
     * @var string
     */
    public const SPY_PRODUCT_LABEL_STORES = 'spyProductLabelStores';

    /**
     * @var string
     */
    public const SPY_SHIPMENT_TYPE_STORES = 'spyShipmentTypeStores';

    /**
     * @var string
     */
    public const SPY_PRODUCT_RELATION_STORES = 'spyProductRelationStores';

    /**
     * @var string
     */
    public const SPY_CMS_BLOCK_STORES = 'spyCmsBlockStores';

    /**
     * @var string
     */
    public const SPY_DISCOUNTS = 'spyDiscounts';

    /**
     * @var string
     */
    public const SPY_DISCOUNT_STORES = 'spyDiscountStores';

    /**
     * @var string
     */
    public const SPY_AVAILABILITY_NOTIFICATION_SUBSCRIPTIONS = 'spyAvailabilityNotificationSubscriptions';

    /**
     * @var integer|null
     */
    protected $idStore;

    /**
     * @var integer|null
     */
    protected $fkCurrency;

    /**
     * @var integer|null
     */
    protected $fkLocale;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var \Generated\Shared\Transfer\SpyCurrencyEntityTransfer|null
     */
    protected $defaultCurrency;

    /**
     * @var \Generated\Shared\Transfer\SpyLocaleEntityTransfer|null
     */
    protected $defaultLocale;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\SpyStockStoreEntityTransfer>
     */
    protected $spyStockStores;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\SpySalesOrderThresholdEntityTransfer>
     */
    protected $spySalesOrderThresholds;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\SpyCmsPageStoreEntityTransfer>
     */
    protected $spyCmsPageStores;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\SpyQuoteEntityTransfer>
     */
    protected $spyQuotes;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\SpyProductOptionValuePriceEntityTransfer>
     */
    protected $spyProductOptionValuePrices;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\SpyAssetStoreEntityTransfer>
     */
    protected $spyAssetStores;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\SpyTouchStorageEntityTransfer>
     */
    protected $spyTouchStorages;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\SpyTouchSearchEntityTransfer>
     */
    protected $spyTouchSearches;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\SpyLocaleStoreEntityTransfer>
     */
    protected $spyLocaleStores;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\SpyStoreContextEntityTransfer>
     */
    protected $spyStoreContexts;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\SpyCurrencyStoreEntityTransfer>
     */
    protected $spyCurrencyStores;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\SpyOmsProductReservationEntityTransfer>
     */
    protected $spyOmsProductReservations;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\SpyCountryStoreEntityTransfer>
     */
    protected $spyCountryStores;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\SpyCategoryStoreEntityTransfer>
     */
    protected $spyCategoryStores;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\SpyProductAbstractStoreEntityTransfer>
     */
    protected $spyProductAbstractStores;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\SpyShipmentMethodPriceEntityTransfer>
     */
    protected $spyShipmentMethodPrices;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\SpyShipmentMethodStoreEntityTransfer>
     */
    protected $spyShipmentMethodStores;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\SpyAvailabilityAbstractEntityTransfer>
     */
    protected $spyAvailabilityAbstracts;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\SpyAvailabilityEntityTransfer>
     */
    protected $spyAvailabilities;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\SpyPaymentMethodStoreEntityTransfer>
     */
    protected $spyPaymentMethodStores;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\SpyPriceProductStoreEntityTransfer>
     */
    protected $spyPriceProductStores;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\SpyPriceProductScheduleEntityTransfer>
     */
    protected $spyPriceProductSchedules;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\SpyProductLabelStoreEntityTransfer>
     */
    protected $spyProductLabelStores;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\SpyShipmentTypeStoreEntityTransfer>
     */
    protected $spyShipmentTypeStores;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\SpyProductRelationStoreEntityTransfer>
     */
    protected $spyProductRelationStores;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\SpyCmsBlockStoreEntityTransfer>
     */
    protected $spyCmsBlockStores;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\SpyDiscountEntityTransfer>
     */
    protected $spyDiscounts;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\SpyDiscountStoreEntityTransfer>
     */
    protected $spyDiscountStores;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\SpyAvailabilityNotificationSubscriptionEntityTransfer>
     */
    protected $spyAvailabilityNotificationSubscriptions;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_store' => 'idStore',
        'idStore' => 'idStore',
        'IdStore' => 'idStore',
        'fk_currency' => 'fkCurrency',
        'fkCurrency' => 'fkCurrency',
        'FkCurrency' => 'fkCurrency',
        'fk_locale' => 'fkLocale',
        'fkLocale' => 'fkLocale',
        'FkLocale' => 'fkLocale',
        'name' => 'name',
        'Name' => 'name',
        'default_currency' => 'defaultCurrency',
        'defaultCurrency' => 'defaultCurrency',
        'DefaultCurrency' => 'defaultCurrency',
        'default_locale' => 'defaultLocale',
        'defaultLocale' => 'defaultLocale',
        'DefaultLocale' => 'defaultLocale',
        'spy_stock_stores' => 'spyStockStores',
        'spyStockStores' => 'spyStockStores',
        'SpyStockStores' => 'spyStockStores',
        'spy_sales_order_thresholds' => 'spySalesOrderThresholds',
        'spySalesOrderThresholds' => 'spySalesOrderThresholds',
        'SpySalesOrderThresholds' => 'spySalesOrderThresholds',
        'spy_cms_page_stores' => 'spyCmsPageStores',
        'spyCmsPageStores' => 'spyCmsPageStores',
        'SpyCmsPageStores' => 'spyCmsPageStores',
        'spy_quotes' => 'spyQuotes',
        'spyQuotes' => 'spyQuotes',
        'SpyQuotes' => 'spyQuotes',
        'spy_product_option_value_prices' => 'spyProductOptionValuePrices',
        'spyProductOptionValuePrices' => 'spyProductOptionValuePrices',
        'SpyProductOptionValuePrices' => 'spyProductOptionValuePrices',
        'spy_asset_stores' => 'spyAssetStores',
        'spyAssetStores' => 'spyAssetStores',
        'SpyAssetStores' => 'spyAssetStores',
        'spy_touch_storages' => 'spyTouchStorages',
        'spyTouchStorages' => 'spyTouchStorages',
        'SpyTouchStorages' => 'spyTouchStorages',
        'spy_touch_searches' => 'spyTouchSearches',
        'spyTouchSearches' => 'spyTouchSearches',
        'SpyTouchSearches' => 'spyTouchSearches',
        'spy_locale_stores' => 'spyLocaleStores',
        'spyLocaleStores' => 'spyLocaleStores',
        'SpyLocaleStores' => 'spyLocaleStores',
        'spy_store_contexts' => 'spyStoreContexts',
        'spyStoreContexts' => 'spyStoreContexts',
        'SpyStoreContexts' => 'spyStoreContexts',
        'spy_currency_stores' => 'spyCurrencyStores',
        'spyCurrencyStores' => 'spyCurrencyStores',
        'SpyCurrencyStores' => 'spyCurrencyStores',
        'spy_oms_product_reservations' => 'spyOmsProductReservations',
        'spyOmsProductReservations' => 'spyOmsProductReservations',
        'SpyOmsProductReservations' => 'spyOmsProductReservations',
        'spy_country_stores' => 'spyCountryStores',
        'spyCountryStores' => 'spyCountryStores',
        'SpyCountryStores' => 'spyCountryStores',
        'spy_category_stores' => 'spyCategoryStores',
        'spyCategoryStores' => 'spyCategoryStores',
        'SpyCategoryStores' => 'spyCategoryStores',
        'spy_product_abstract_stores' => 'spyProductAbstractStores',
        'spyProductAbstractStores' => 'spyProductAbstractStores',
        'SpyProductAbstractStores' => 'spyProductAbstractStores',
        'spy_shipment_method_prices' => 'spyShipmentMethodPrices',
        'spyShipmentMethodPrices' => 'spyShipmentMethodPrices',
        'SpyShipmentMethodPrices' => 'spyShipmentMethodPrices',
        'spy_shipment_method_stores' => 'spyShipmentMethodStores',
        'spyShipmentMethodStores' => 'spyShipmentMethodStores',
        'SpyShipmentMethodStores' => 'spyShipmentMethodStores',
        'spy_availability_abstracts' => 'spyAvailabilityAbstracts',
        'spyAvailabilityAbstracts' => 'spyAvailabilityAbstracts',
        'SpyAvailabilityAbstracts' => 'spyAvailabilityAbstracts',
        'spy_availabilities' => 'spyAvailabilities',
        'spyAvailabilities' => 'spyAvailabilities',
        'SpyAvailabilities' => 'spyAvailabilities',
        'spy_payment_method_stores' => 'spyPaymentMethodStores',
        'spyPaymentMethodStores' => 'spyPaymentMethodStores',
        'SpyPaymentMethodStores' => 'spyPaymentMethodStores',
        'spy_price_product_stores' => 'spyPriceProductStores',
        'spyPriceProductStores' => 'spyPriceProductStores',
        'SpyPriceProductStores' => 'spyPriceProductStores',
        'spy_price_product_schedules' => 'spyPriceProductSchedules',
        'spyPriceProductSchedules' => 'spyPriceProductSchedules',
        'SpyPriceProductSchedules' => 'spyPriceProductSchedules',
        'spy_product_label_stores' => 'spyProductLabelStores',
        'spyProductLabelStores' => 'spyProductLabelStores',
        'SpyProductLabelStores' => 'spyProductLabelStores',
        'spy_shipment_type_stores' => 'spyShipmentTypeStores',
        'spyShipmentTypeStores' => 'spyShipmentTypeStores',
        'SpyShipmentTypeStores' => 'spyShipmentTypeStores',
        'spy_product_relation_stores' => 'spyProductRelationStores',
        'spyProductRelationStores' => 'spyProductRelationStores',
        'SpyProductRelationStores' => 'spyProductRelationStores',
        'spy_cms_block_stores' => 'spyCmsBlockStores',
        'spyCmsBlockStores' => 'spyCmsBlockStores',
        'SpyCmsBlockStores' => 'spyCmsBlockStores',
        'spy_discounts' => 'spyDiscounts',
        'spyDiscounts' => 'spyDiscounts',
        'SpyDiscounts' => 'spyDiscounts',
        'spy_discount_stores' => 'spyDiscountStores',
        'spyDiscountStores' => 'spyDiscountStores',
        'SpyDiscountStores' => 'spyDiscountStores',
        'spy_availability_notification_subscriptions' => 'spyAvailabilityNotificationSubscriptions',
        'spyAvailabilityNotificationSubscriptions' => 'spyAvailabilityNotificationSubscriptions',
        'SpyAvailabilityNotificationSubscriptions' => 'spyAvailabilityNotificationSubscriptions',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_STORE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_store',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_CURRENCY => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_currency',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_LOCALE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_locale',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
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
        self::DEFAULT_CURRENCY => [
            'type' => 'Generated\Shared\Transfer\SpyCurrencyEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'default_currency',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DEFAULT_LOCALE => [
            'type' => 'Generated\Shared\Transfer\SpyLocaleEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'default_locale',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_STOCK_STORES => [
            'type' => 'Generated\Shared\Transfer\SpyStockStoreEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_stock_stores',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_SALES_ORDER_THRESHOLDS => [
            'type' => 'Generated\Shared\Transfer\SpySalesOrderThresholdEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_sales_order_thresholds',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_CMS_PAGE_STORES => [
            'type' => 'Generated\Shared\Transfer\SpyCmsPageStoreEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_cms_page_stores',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_QUOTES => [
            'type' => 'Generated\Shared\Transfer\SpyQuoteEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_quotes',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRODUCT_OPTION_VALUE_PRICES => [
            'type' => 'Generated\Shared\Transfer\SpyProductOptionValuePriceEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_option_value_prices',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_ASSET_STORES => [
            'type' => 'Generated\Shared\Transfer\SpyAssetStoreEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_asset_stores',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_TOUCH_STORAGES => [
            'type' => 'Generated\Shared\Transfer\SpyTouchStorageEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_touch_storages',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_TOUCH_SEARCHES => [
            'type' => 'Generated\Shared\Transfer\SpyTouchSearchEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_touch_searches',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_LOCALE_STORES => [
            'type' => 'Generated\Shared\Transfer\SpyLocaleStoreEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_locale_stores',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_STORE_CONTEXTS => [
            'type' => 'Generated\Shared\Transfer\SpyStoreContextEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_store_contexts',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_CURRENCY_STORES => [
            'type' => 'Generated\Shared\Transfer\SpyCurrencyStoreEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_currency_stores',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_OMS_PRODUCT_RESERVATIONS => [
            'type' => 'Generated\Shared\Transfer\SpyOmsProductReservationEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_oms_product_reservations',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_COUNTRY_STORES => [
            'type' => 'Generated\Shared\Transfer\SpyCountryStoreEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_country_stores',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_CATEGORY_STORES => [
            'type' => 'Generated\Shared\Transfer\SpyCategoryStoreEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_category_stores',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRODUCT_ABSTRACT_STORES => [
            'type' => 'Generated\Shared\Transfer\SpyProductAbstractStoreEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_abstract_stores',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_SHIPMENT_METHOD_PRICES => [
            'type' => 'Generated\Shared\Transfer\SpyShipmentMethodPriceEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_shipment_method_prices',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_SHIPMENT_METHOD_STORES => [
            'type' => 'Generated\Shared\Transfer\SpyShipmentMethodStoreEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_shipment_method_stores',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_AVAILABILITY_ABSTRACTS => [
            'type' => 'Generated\Shared\Transfer\SpyAvailabilityAbstractEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_availability_abstracts',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_AVAILABILITIES => [
            'type' => 'Generated\Shared\Transfer\SpyAvailabilityEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_availabilities',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PAYMENT_METHOD_STORES => [
            'type' => 'Generated\Shared\Transfer\SpyPaymentMethodStoreEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_payment_method_stores',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRICE_PRODUCT_STORES => [
            'type' => 'Generated\Shared\Transfer\SpyPriceProductStoreEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_price_product_stores',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRICE_PRODUCT_SCHEDULES => [
            'type' => 'Generated\Shared\Transfer\SpyPriceProductScheduleEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_price_product_schedules',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRODUCT_LABEL_STORES => [
            'type' => 'Generated\Shared\Transfer\SpyProductLabelStoreEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_label_stores',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_SHIPMENT_TYPE_STORES => [
            'type' => 'Generated\Shared\Transfer\SpyShipmentTypeStoreEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_shipment_type_stores',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRODUCT_RELATION_STORES => [
            'type' => 'Generated\Shared\Transfer\SpyProductRelationStoreEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_relation_stores',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_CMS_BLOCK_STORES => [
            'type' => 'Generated\Shared\Transfer\SpyCmsBlockStoreEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_cms_block_stores',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_DISCOUNTS => [
            'type' => 'Generated\Shared\Transfer\SpyDiscountEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_discounts',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_DISCOUNT_STORES => [
            'type' => 'Generated\Shared\Transfer\SpyDiscountStoreEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_discount_stores',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_AVAILABILITY_NOTIFICATION_SUBSCRIPTIONS => [
            'type' => 'Generated\Shared\Transfer\SpyAvailabilityNotificationSubscriptionEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_availability_notification_subscriptions',
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
    public static $entityNamespace = 'Orm\Zed\Store\Persistence\SpyStore';


    /**
     * @module 
     *
     * @param integer|null $idStore
     *
     * @return $this
     */
    public function setIdStore($idStore)
    {
        $this->idStore = $idStore;
        $this->modifiedProperties[self::ID_STORE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdStore()
    {
        return $this->idStore;
    }

    /**
     * @module 
     *
     * @param integer|null $idStore
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdStoreOrFail($idStore)
    {
        if ($idStore === null) {
            $this->throwNullValueException(static::ID_STORE);
        }

        return $this->setIdStore($idStore);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdStoreOrFail()
    {
        if ($this->idStore === null) {
            $this->throwNullValueException(static::ID_STORE);
        }

        return $this->idStore;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdStore()
    {
        $this->assertPropertyIsSet(self::ID_STORE);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkCurrency
     *
     * @return $this
     */
    public function setFkCurrency($fkCurrency)
    {
        $this->fkCurrency = $fkCurrency;
        $this->modifiedProperties[self::FK_CURRENCY] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkCurrency()
    {
        return $this->fkCurrency;
    }

    /**
     * @module 
     *
     * @param integer|null $fkCurrency
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkCurrencyOrFail($fkCurrency)
    {
        if ($fkCurrency === null) {
            $this->throwNullValueException(static::FK_CURRENCY);
        }

        return $this->setFkCurrency($fkCurrency);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkCurrencyOrFail()
    {
        if ($this->fkCurrency === null) {
            $this->throwNullValueException(static::FK_CURRENCY);
        }

        return $this->fkCurrency;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkCurrency()
    {
        $this->assertPropertyIsSet(self::FK_CURRENCY);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkLocale
     *
     * @return $this
     */
    public function setFkLocale($fkLocale)
    {
        $this->fkLocale = $fkLocale;
        $this->modifiedProperties[self::FK_LOCALE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkLocale()
    {
        return $this->fkLocale;
    }

    /**
     * @module 
     *
     * @param integer|null $fkLocale
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkLocaleOrFail($fkLocale)
    {
        if ($fkLocale === null) {
            $this->throwNullValueException(static::FK_LOCALE);
        }

        return $this->setFkLocale($fkLocale);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkLocaleOrFail()
    {
        if ($this->fkLocale === null) {
            $this->throwNullValueException(static::FK_LOCALE);
        }

        return $this->fkLocale;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkLocale()
    {
        $this->assertPropertyIsSet(self::FK_LOCALE);

        return $this;
    }

    /**
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCurrencyEntityTransfer|null $defaultCurrency
     *
     * @return $this
     */
    public function setDefaultCurrency(SpyCurrencyEntityTransfer $defaultCurrency = null)
    {
        $this->defaultCurrency = $defaultCurrency;
        $this->modifiedProperties[self::DEFAULT_CURRENCY] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyCurrencyEntityTransfer|null
     */
    public function getDefaultCurrency()
    {
        return $this->defaultCurrency;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCurrencyEntityTransfer $defaultCurrency
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDefaultCurrencyOrFail(SpyCurrencyEntityTransfer $defaultCurrency)
    {
        return $this->setDefaultCurrency($defaultCurrency);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyCurrencyEntityTransfer
     */
    public function getDefaultCurrencyOrFail()
    {
        if ($this->defaultCurrency === null) {
            $this->throwNullValueException(static::DEFAULT_CURRENCY);
        }

        return $this->defaultCurrency;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDefaultCurrency()
    {
        $this->assertPropertyIsSet(self::DEFAULT_CURRENCY);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyLocaleEntityTransfer|null $defaultLocale
     *
     * @return $this
     */
    public function setDefaultLocale(SpyLocaleEntityTransfer $defaultLocale = null)
    {
        $this->defaultLocale = $defaultLocale;
        $this->modifiedProperties[self::DEFAULT_LOCALE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyLocaleEntityTransfer|null
     */
    public function getDefaultLocale()
    {
        return $this->defaultLocale;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyLocaleEntityTransfer $defaultLocale
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDefaultLocaleOrFail(SpyLocaleEntityTransfer $defaultLocale)
    {
        return $this->setDefaultLocale($defaultLocale);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyLocaleEntityTransfer
     */
    public function getDefaultLocaleOrFail()
    {
        if ($this->defaultLocale === null) {
            $this->throwNullValueException(static::DEFAULT_LOCALE);
        }

        return $this->defaultLocale;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDefaultLocale()
    {
        $this->assertPropertyIsSet(self::DEFAULT_LOCALE);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\SpyStockStoreEntityTransfer> $spyStockStores
     *
     * @return $this
     */
    public function setSpyStockStores(ArrayObject $spyStockStores)
    {
        $this->spyStockStores = $spyStockStores;
        $this->modifiedProperties[self::SPY_STOCK_STORES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\SpyStockStoreEntityTransfer>
     */
    public function getSpyStockStores()
    {
        return $this->spyStockStores;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyStockStoreEntityTransfer $spyStockStores
     *
     * @return $this
     */
    public function addSpyStockStores(SpyStockStoreEntityTransfer $spyStockStores)
    {
        $this->spyStockStores[] = $spyStockStores;
        $this->modifiedProperties[self::SPY_STOCK_STORES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyStockStores()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_STOCK_STORES);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\SpySalesOrderThresholdEntityTransfer> $spySalesOrderThresholds
     *
     * @return $this
     */
    public function setSpySalesOrderThresholds(ArrayObject $spySalesOrderThresholds)
    {
        $this->spySalesOrderThresholds = $spySalesOrderThresholds;
        $this->modifiedProperties[self::SPY_SALES_ORDER_THRESHOLDS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\SpySalesOrderThresholdEntityTransfer>
     */
    public function getSpySalesOrderThresholds()
    {
        return $this->spySalesOrderThresholds;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpySalesOrderThresholdEntityTransfer $spySalesOrderThresholds
     *
     * @return $this
     */
    public function addSpySalesOrderThresholds(SpySalesOrderThresholdEntityTransfer $spySalesOrderThresholds)
    {
        $this->spySalesOrderThresholds[] = $spySalesOrderThresholds;
        $this->modifiedProperties[self::SPY_SALES_ORDER_THRESHOLDS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpySalesOrderThresholds()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_SALES_ORDER_THRESHOLDS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\SpyCmsPageStoreEntityTransfer> $spyCmsPageStores
     *
     * @return $this
     */
    public function setSpyCmsPageStores(ArrayObject $spyCmsPageStores)
    {
        $this->spyCmsPageStores = $spyCmsPageStores;
        $this->modifiedProperties[self::SPY_CMS_PAGE_STORES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\SpyCmsPageStoreEntityTransfer>
     */
    public function getSpyCmsPageStores()
    {
        return $this->spyCmsPageStores;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCmsPageStoreEntityTransfer $spyCmsPageStores
     *
     * @return $this
     */
    public function addSpyCmsPageStores(SpyCmsPageStoreEntityTransfer $spyCmsPageStores)
    {
        $this->spyCmsPageStores[] = $spyCmsPageStores;
        $this->modifiedProperties[self::SPY_CMS_PAGE_STORES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyCmsPageStores()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_CMS_PAGE_STORES);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\SpyQuoteEntityTransfer> $spyQuotes
     *
     * @return $this
     */
    public function setSpyQuotes(ArrayObject $spyQuotes)
    {
        $this->spyQuotes = $spyQuotes;
        $this->modifiedProperties[self::SPY_QUOTES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\SpyQuoteEntityTransfer>
     */
    public function getSpyQuotes()
    {
        return $this->spyQuotes;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyQuoteEntityTransfer $spyQuotes
     *
     * @return $this
     */
    public function addSpyQuotes(SpyQuoteEntityTransfer $spyQuotes)
    {
        $this->spyQuotes[] = $spyQuotes;
        $this->modifiedProperties[self::SPY_QUOTES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyQuotes()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_QUOTES);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\SpyProductOptionValuePriceEntityTransfer> $spyProductOptionValuePrices
     *
     * @return $this
     */
    public function setSpyProductOptionValuePrices(ArrayObject $spyProductOptionValuePrices)
    {
        $this->spyProductOptionValuePrices = $spyProductOptionValuePrices;
        $this->modifiedProperties[self::SPY_PRODUCT_OPTION_VALUE_PRICES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\SpyProductOptionValuePriceEntityTransfer>
     */
    public function getSpyProductOptionValuePrices()
    {
        return $this->spyProductOptionValuePrices;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductOptionValuePriceEntityTransfer $spyProductOptionValuePrices
     *
     * @return $this
     */
    public function addSpyProductOptionValuePrices(SpyProductOptionValuePriceEntityTransfer $spyProductOptionValuePrices)
    {
        $this->spyProductOptionValuePrices[] = $spyProductOptionValuePrices;
        $this->modifiedProperties[self::SPY_PRODUCT_OPTION_VALUE_PRICES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductOptionValuePrices()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PRODUCT_OPTION_VALUE_PRICES);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\SpyAssetStoreEntityTransfer> $spyAssetStores
     *
     * @return $this
     */
    public function setSpyAssetStores(ArrayObject $spyAssetStores)
    {
        $this->spyAssetStores = $spyAssetStores;
        $this->modifiedProperties[self::SPY_ASSET_STORES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\SpyAssetStoreEntityTransfer>
     */
    public function getSpyAssetStores()
    {
        return $this->spyAssetStores;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyAssetStoreEntityTransfer $spyAssetStores
     *
     * @return $this
     */
    public function addSpyAssetStores(SpyAssetStoreEntityTransfer $spyAssetStores)
    {
        $this->spyAssetStores[] = $spyAssetStores;
        $this->modifiedProperties[self::SPY_ASSET_STORES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyAssetStores()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_ASSET_STORES);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\SpyTouchStorageEntityTransfer> $spyTouchStorages
     *
     * @return $this
     */
    public function setSpyTouchStorages(ArrayObject $spyTouchStorages)
    {
        $this->spyTouchStorages = $spyTouchStorages;
        $this->modifiedProperties[self::SPY_TOUCH_STORAGES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\SpyTouchStorageEntityTransfer>
     */
    public function getSpyTouchStorages()
    {
        return $this->spyTouchStorages;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyTouchStorageEntityTransfer $spyTouchStorages
     *
     * @return $this
     */
    public function addSpyTouchStorages(SpyTouchStorageEntityTransfer $spyTouchStorages)
    {
        $this->spyTouchStorages[] = $spyTouchStorages;
        $this->modifiedProperties[self::SPY_TOUCH_STORAGES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyTouchStorages()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_TOUCH_STORAGES);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\SpyTouchSearchEntityTransfer> $spyTouchSearches
     *
     * @return $this
     */
    public function setSpyTouchSearches(ArrayObject $spyTouchSearches)
    {
        $this->spyTouchSearches = $spyTouchSearches;
        $this->modifiedProperties[self::SPY_TOUCH_SEARCHES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\SpyTouchSearchEntityTransfer>
     */
    public function getSpyTouchSearches()
    {
        return $this->spyTouchSearches;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyTouchSearchEntityTransfer $spyTouchSearches
     *
     * @return $this
     */
    public function addSpyTouchSearches(SpyTouchSearchEntityTransfer $spyTouchSearches)
    {
        $this->spyTouchSearches[] = $spyTouchSearches;
        $this->modifiedProperties[self::SPY_TOUCH_SEARCHES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyTouchSearches()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_TOUCH_SEARCHES);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\SpyLocaleStoreEntityTransfer> $spyLocaleStores
     *
     * @return $this
     */
    public function setSpyLocaleStores(ArrayObject $spyLocaleStores)
    {
        $this->spyLocaleStores = $spyLocaleStores;
        $this->modifiedProperties[self::SPY_LOCALE_STORES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\SpyLocaleStoreEntityTransfer>
     */
    public function getSpyLocaleStores()
    {
        return $this->spyLocaleStores;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyLocaleStoreEntityTransfer $spyLocaleStores
     *
     * @return $this
     */
    public function addSpyLocaleStores(SpyLocaleStoreEntityTransfer $spyLocaleStores)
    {
        $this->spyLocaleStores[] = $spyLocaleStores;
        $this->modifiedProperties[self::SPY_LOCALE_STORES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyLocaleStores()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_LOCALE_STORES);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\SpyStoreContextEntityTransfer> $spyStoreContexts
     *
     * @return $this
     */
    public function setSpyStoreContexts(ArrayObject $spyStoreContexts)
    {
        $this->spyStoreContexts = $spyStoreContexts;
        $this->modifiedProperties[self::SPY_STORE_CONTEXTS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\SpyStoreContextEntityTransfer>
     */
    public function getSpyStoreContexts()
    {
        return $this->spyStoreContexts;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyStoreContextEntityTransfer $spyStoreContexts
     *
     * @return $this
     */
    public function addSpyStoreContexts(SpyStoreContextEntityTransfer $spyStoreContexts)
    {
        $this->spyStoreContexts[] = $spyStoreContexts;
        $this->modifiedProperties[self::SPY_STORE_CONTEXTS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyStoreContexts()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_STORE_CONTEXTS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\SpyCurrencyStoreEntityTransfer> $spyCurrencyStores
     *
     * @return $this
     */
    public function setSpyCurrencyStores(ArrayObject $spyCurrencyStores)
    {
        $this->spyCurrencyStores = $spyCurrencyStores;
        $this->modifiedProperties[self::SPY_CURRENCY_STORES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\SpyCurrencyStoreEntityTransfer>
     */
    public function getSpyCurrencyStores()
    {
        return $this->spyCurrencyStores;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCurrencyStoreEntityTransfer $spyCurrencyStores
     *
     * @return $this
     */
    public function addSpyCurrencyStores(SpyCurrencyStoreEntityTransfer $spyCurrencyStores)
    {
        $this->spyCurrencyStores[] = $spyCurrencyStores;
        $this->modifiedProperties[self::SPY_CURRENCY_STORES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyCurrencyStores()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_CURRENCY_STORES);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\SpyOmsProductReservationEntityTransfer> $spyOmsProductReservations
     *
     * @return $this
     */
    public function setSpyOmsProductReservations(ArrayObject $spyOmsProductReservations)
    {
        $this->spyOmsProductReservations = $spyOmsProductReservations;
        $this->modifiedProperties[self::SPY_OMS_PRODUCT_RESERVATIONS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\SpyOmsProductReservationEntityTransfer>
     */
    public function getSpyOmsProductReservations()
    {
        return $this->spyOmsProductReservations;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyOmsProductReservationEntityTransfer $spyOmsProductReservations
     *
     * @return $this
     */
    public function addSpyOmsProductReservations(SpyOmsProductReservationEntityTransfer $spyOmsProductReservations)
    {
        $this->spyOmsProductReservations[] = $spyOmsProductReservations;
        $this->modifiedProperties[self::SPY_OMS_PRODUCT_RESERVATIONS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyOmsProductReservations()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_OMS_PRODUCT_RESERVATIONS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\SpyCountryStoreEntityTransfer> $spyCountryStores
     *
     * @return $this
     */
    public function setSpyCountryStores(ArrayObject $spyCountryStores)
    {
        $this->spyCountryStores = $spyCountryStores;
        $this->modifiedProperties[self::SPY_COUNTRY_STORES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\SpyCountryStoreEntityTransfer>
     */
    public function getSpyCountryStores()
    {
        return $this->spyCountryStores;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCountryStoreEntityTransfer $spyCountryStores
     *
     * @return $this
     */
    public function addSpyCountryStores(SpyCountryStoreEntityTransfer $spyCountryStores)
    {
        $this->spyCountryStores[] = $spyCountryStores;
        $this->modifiedProperties[self::SPY_COUNTRY_STORES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyCountryStores()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_COUNTRY_STORES);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\SpyCategoryStoreEntityTransfer> $spyCategoryStores
     *
     * @return $this
     */
    public function setSpyCategoryStores(ArrayObject $spyCategoryStores)
    {
        $this->spyCategoryStores = $spyCategoryStores;
        $this->modifiedProperties[self::SPY_CATEGORY_STORES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\SpyCategoryStoreEntityTransfer>
     */
    public function getSpyCategoryStores()
    {
        return $this->spyCategoryStores;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCategoryStoreEntityTransfer $spyCategoryStores
     *
     * @return $this
     */
    public function addSpyCategoryStores(SpyCategoryStoreEntityTransfer $spyCategoryStores)
    {
        $this->spyCategoryStores[] = $spyCategoryStores;
        $this->modifiedProperties[self::SPY_CATEGORY_STORES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyCategoryStores()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_CATEGORY_STORES);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\SpyProductAbstractStoreEntityTransfer> $spyProductAbstractStores
     *
     * @return $this
     */
    public function setSpyProductAbstractStores(ArrayObject $spyProductAbstractStores)
    {
        $this->spyProductAbstractStores = $spyProductAbstractStores;
        $this->modifiedProperties[self::SPY_PRODUCT_ABSTRACT_STORES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\SpyProductAbstractStoreEntityTransfer>
     */
    public function getSpyProductAbstractStores()
    {
        return $this->spyProductAbstractStores;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductAbstractStoreEntityTransfer $spyProductAbstractStores
     *
     * @return $this
     */
    public function addSpyProductAbstractStores(SpyProductAbstractStoreEntityTransfer $spyProductAbstractStores)
    {
        $this->spyProductAbstractStores[] = $spyProductAbstractStores;
        $this->modifiedProperties[self::SPY_PRODUCT_ABSTRACT_STORES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductAbstractStores()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PRODUCT_ABSTRACT_STORES);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\SpyShipmentMethodPriceEntityTransfer> $spyShipmentMethodPrices
     *
     * @return $this
     */
    public function setSpyShipmentMethodPrices(ArrayObject $spyShipmentMethodPrices)
    {
        $this->spyShipmentMethodPrices = $spyShipmentMethodPrices;
        $this->modifiedProperties[self::SPY_SHIPMENT_METHOD_PRICES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\SpyShipmentMethodPriceEntityTransfer>
     */
    public function getSpyShipmentMethodPrices()
    {
        return $this->spyShipmentMethodPrices;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyShipmentMethodPriceEntityTransfer $spyShipmentMethodPrices
     *
     * @return $this
     */
    public function addSpyShipmentMethodPrices(SpyShipmentMethodPriceEntityTransfer $spyShipmentMethodPrices)
    {
        $this->spyShipmentMethodPrices[] = $spyShipmentMethodPrices;
        $this->modifiedProperties[self::SPY_SHIPMENT_METHOD_PRICES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyShipmentMethodPrices()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_SHIPMENT_METHOD_PRICES);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\SpyShipmentMethodStoreEntityTransfer> $spyShipmentMethodStores
     *
     * @return $this
     */
    public function setSpyShipmentMethodStores(ArrayObject $spyShipmentMethodStores)
    {
        $this->spyShipmentMethodStores = $spyShipmentMethodStores;
        $this->modifiedProperties[self::SPY_SHIPMENT_METHOD_STORES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\SpyShipmentMethodStoreEntityTransfer>
     */
    public function getSpyShipmentMethodStores()
    {
        return $this->spyShipmentMethodStores;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyShipmentMethodStoreEntityTransfer $spyShipmentMethodStores
     *
     * @return $this
     */
    public function addSpyShipmentMethodStores(SpyShipmentMethodStoreEntityTransfer $spyShipmentMethodStores)
    {
        $this->spyShipmentMethodStores[] = $spyShipmentMethodStores;
        $this->modifiedProperties[self::SPY_SHIPMENT_METHOD_STORES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyShipmentMethodStores()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_SHIPMENT_METHOD_STORES);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\SpyAvailabilityAbstractEntityTransfer> $spyAvailabilityAbstracts
     *
     * @return $this
     */
    public function setSpyAvailabilityAbstracts(ArrayObject $spyAvailabilityAbstracts)
    {
        $this->spyAvailabilityAbstracts = $spyAvailabilityAbstracts;
        $this->modifiedProperties[self::SPY_AVAILABILITY_ABSTRACTS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\SpyAvailabilityAbstractEntityTransfer>
     */
    public function getSpyAvailabilityAbstracts()
    {
        return $this->spyAvailabilityAbstracts;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyAvailabilityAbstractEntityTransfer $spyAvailabilityAbstracts
     *
     * @return $this
     */
    public function addSpyAvailabilityAbstracts(SpyAvailabilityAbstractEntityTransfer $spyAvailabilityAbstracts)
    {
        $this->spyAvailabilityAbstracts[] = $spyAvailabilityAbstracts;
        $this->modifiedProperties[self::SPY_AVAILABILITY_ABSTRACTS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyAvailabilityAbstracts()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_AVAILABILITY_ABSTRACTS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\SpyAvailabilityEntityTransfer> $spyAvailabilities
     *
     * @return $this
     */
    public function setSpyAvailabilities(ArrayObject $spyAvailabilities)
    {
        $this->spyAvailabilities = $spyAvailabilities;
        $this->modifiedProperties[self::SPY_AVAILABILITIES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\SpyAvailabilityEntityTransfer>
     */
    public function getSpyAvailabilities()
    {
        return $this->spyAvailabilities;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyAvailabilityEntityTransfer $spyAvailabilities
     *
     * @return $this
     */
    public function addSpyAvailabilities(SpyAvailabilityEntityTransfer $spyAvailabilities)
    {
        $this->spyAvailabilities[] = $spyAvailabilities;
        $this->modifiedProperties[self::SPY_AVAILABILITIES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyAvailabilities()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_AVAILABILITIES);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\SpyPaymentMethodStoreEntityTransfer> $spyPaymentMethodStores
     *
     * @return $this
     */
    public function setSpyPaymentMethodStores(ArrayObject $spyPaymentMethodStores)
    {
        $this->spyPaymentMethodStores = $spyPaymentMethodStores;
        $this->modifiedProperties[self::SPY_PAYMENT_METHOD_STORES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\SpyPaymentMethodStoreEntityTransfer>
     */
    public function getSpyPaymentMethodStores()
    {
        return $this->spyPaymentMethodStores;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyPaymentMethodStoreEntityTransfer $spyPaymentMethodStores
     *
     * @return $this
     */
    public function addSpyPaymentMethodStores(SpyPaymentMethodStoreEntityTransfer $spyPaymentMethodStores)
    {
        $this->spyPaymentMethodStores[] = $spyPaymentMethodStores;
        $this->modifiedProperties[self::SPY_PAYMENT_METHOD_STORES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyPaymentMethodStores()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PAYMENT_METHOD_STORES);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\SpyPriceProductStoreEntityTransfer> $spyPriceProductStores
     *
     * @return $this
     */
    public function setSpyPriceProductStores(ArrayObject $spyPriceProductStores)
    {
        $this->spyPriceProductStores = $spyPriceProductStores;
        $this->modifiedProperties[self::SPY_PRICE_PRODUCT_STORES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\SpyPriceProductStoreEntityTransfer>
     */
    public function getSpyPriceProductStores()
    {
        return $this->spyPriceProductStores;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyPriceProductStoreEntityTransfer $spyPriceProductStores
     *
     * @return $this
     */
    public function addSpyPriceProductStores(SpyPriceProductStoreEntityTransfer $spyPriceProductStores)
    {
        $this->spyPriceProductStores[] = $spyPriceProductStores;
        $this->modifiedProperties[self::SPY_PRICE_PRODUCT_STORES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyPriceProductStores()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PRICE_PRODUCT_STORES);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\SpyPriceProductScheduleEntityTransfer> $spyPriceProductSchedules
     *
     * @return $this
     */
    public function setSpyPriceProductSchedules(ArrayObject $spyPriceProductSchedules)
    {
        $this->spyPriceProductSchedules = $spyPriceProductSchedules;
        $this->modifiedProperties[self::SPY_PRICE_PRODUCT_SCHEDULES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\SpyPriceProductScheduleEntityTransfer>
     */
    public function getSpyPriceProductSchedules()
    {
        return $this->spyPriceProductSchedules;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyPriceProductScheduleEntityTransfer $spyPriceProductSchedules
     *
     * @return $this
     */
    public function addSpyPriceProductSchedules(SpyPriceProductScheduleEntityTransfer $spyPriceProductSchedules)
    {
        $this->spyPriceProductSchedules[] = $spyPriceProductSchedules;
        $this->modifiedProperties[self::SPY_PRICE_PRODUCT_SCHEDULES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyPriceProductSchedules()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PRICE_PRODUCT_SCHEDULES);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\SpyProductLabelStoreEntityTransfer> $spyProductLabelStores
     *
     * @return $this
     */
    public function setSpyProductLabelStores(ArrayObject $spyProductLabelStores)
    {
        $this->spyProductLabelStores = $spyProductLabelStores;
        $this->modifiedProperties[self::SPY_PRODUCT_LABEL_STORES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\SpyProductLabelStoreEntityTransfer>
     */
    public function getSpyProductLabelStores()
    {
        return $this->spyProductLabelStores;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductLabelStoreEntityTransfer $spyProductLabelStores
     *
     * @return $this
     */
    public function addSpyProductLabelStores(SpyProductLabelStoreEntityTransfer $spyProductLabelStores)
    {
        $this->spyProductLabelStores[] = $spyProductLabelStores;
        $this->modifiedProperties[self::SPY_PRODUCT_LABEL_STORES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductLabelStores()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PRODUCT_LABEL_STORES);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\SpyShipmentTypeStoreEntityTransfer> $spyShipmentTypeStores
     *
     * @return $this
     */
    public function setSpyShipmentTypeStores(ArrayObject $spyShipmentTypeStores)
    {
        $this->spyShipmentTypeStores = $spyShipmentTypeStores;
        $this->modifiedProperties[self::SPY_SHIPMENT_TYPE_STORES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\SpyShipmentTypeStoreEntityTransfer>
     */
    public function getSpyShipmentTypeStores()
    {
        return $this->spyShipmentTypeStores;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyShipmentTypeStoreEntityTransfer $spyShipmentTypeStores
     *
     * @return $this
     */
    public function addSpyShipmentTypeStores(SpyShipmentTypeStoreEntityTransfer $spyShipmentTypeStores)
    {
        $this->spyShipmentTypeStores[] = $spyShipmentTypeStores;
        $this->modifiedProperties[self::SPY_SHIPMENT_TYPE_STORES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyShipmentTypeStores()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_SHIPMENT_TYPE_STORES);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\SpyProductRelationStoreEntityTransfer> $spyProductRelationStores
     *
     * @return $this
     */
    public function setSpyProductRelationStores(ArrayObject $spyProductRelationStores)
    {
        $this->spyProductRelationStores = $spyProductRelationStores;
        $this->modifiedProperties[self::SPY_PRODUCT_RELATION_STORES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\SpyProductRelationStoreEntityTransfer>
     */
    public function getSpyProductRelationStores()
    {
        return $this->spyProductRelationStores;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductRelationStoreEntityTransfer $spyProductRelationStores
     *
     * @return $this
     */
    public function addSpyProductRelationStores(SpyProductRelationStoreEntityTransfer $spyProductRelationStores)
    {
        $this->spyProductRelationStores[] = $spyProductRelationStores;
        $this->modifiedProperties[self::SPY_PRODUCT_RELATION_STORES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductRelationStores()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PRODUCT_RELATION_STORES);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\SpyCmsBlockStoreEntityTransfer> $spyCmsBlockStores
     *
     * @return $this
     */
    public function setSpyCmsBlockStores(ArrayObject $spyCmsBlockStores)
    {
        $this->spyCmsBlockStores = $spyCmsBlockStores;
        $this->modifiedProperties[self::SPY_CMS_BLOCK_STORES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\SpyCmsBlockStoreEntityTransfer>
     */
    public function getSpyCmsBlockStores()
    {
        return $this->spyCmsBlockStores;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCmsBlockStoreEntityTransfer $spyCmsBlockStores
     *
     * @return $this
     */
    public function addSpyCmsBlockStores(SpyCmsBlockStoreEntityTransfer $spyCmsBlockStores)
    {
        $this->spyCmsBlockStores[] = $spyCmsBlockStores;
        $this->modifiedProperties[self::SPY_CMS_BLOCK_STORES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyCmsBlockStores()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_CMS_BLOCK_STORES);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\SpyDiscountEntityTransfer> $spyDiscounts
     *
     * @return $this
     */
    public function setSpyDiscounts(ArrayObject $spyDiscounts)
    {
        $this->spyDiscounts = $spyDiscounts;
        $this->modifiedProperties[self::SPY_DISCOUNTS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\SpyDiscountEntityTransfer>
     */
    public function getSpyDiscounts()
    {
        return $this->spyDiscounts;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyDiscountEntityTransfer $spyDiscounts
     *
     * @return $this
     */
    public function addSpyDiscounts(SpyDiscountEntityTransfer $spyDiscounts)
    {
        $this->spyDiscounts[] = $spyDiscounts;
        $this->modifiedProperties[self::SPY_DISCOUNTS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyDiscounts()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_DISCOUNTS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\SpyDiscountStoreEntityTransfer> $spyDiscountStores
     *
     * @return $this
     */
    public function setSpyDiscountStores(ArrayObject $spyDiscountStores)
    {
        $this->spyDiscountStores = $spyDiscountStores;
        $this->modifiedProperties[self::SPY_DISCOUNT_STORES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\SpyDiscountStoreEntityTransfer>
     */
    public function getSpyDiscountStores()
    {
        return $this->spyDiscountStores;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyDiscountStoreEntityTransfer $spyDiscountStores
     *
     * @return $this
     */
    public function addSpyDiscountStores(SpyDiscountStoreEntityTransfer $spyDiscountStores)
    {
        $this->spyDiscountStores[] = $spyDiscountStores;
        $this->modifiedProperties[self::SPY_DISCOUNT_STORES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyDiscountStores()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_DISCOUNT_STORES);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\SpyAvailabilityNotificationSubscriptionEntityTransfer> $spyAvailabilityNotificationSubscriptions
     *
     * @return $this
     */
    public function setSpyAvailabilityNotificationSubscriptions(ArrayObject $spyAvailabilityNotificationSubscriptions)
    {
        $this->spyAvailabilityNotificationSubscriptions = $spyAvailabilityNotificationSubscriptions;
        $this->modifiedProperties[self::SPY_AVAILABILITY_NOTIFICATION_SUBSCRIPTIONS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\SpyAvailabilityNotificationSubscriptionEntityTransfer>
     */
    public function getSpyAvailabilityNotificationSubscriptions()
    {
        return $this->spyAvailabilityNotificationSubscriptions;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyAvailabilityNotificationSubscriptionEntityTransfer $spyAvailabilityNotificationSubscriptions
     *
     * @return $this
     */
    public function addSpyAvailabilityNotificationSubscriptions(SpyAvailabilityNotificationSubscriptionEntityTransfer $spyAvailabilityNotificationSubscriptions)
    {
        $this->spyAvailabilityNotificationSubscriptions[] = $spyAvailabilityNotificationSubscriptions;
        $this->modifiedProperties[self::SPY_AVAILABILITY_NOTIFICATION_SUBSCRIPTIONS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyAvailabilityNotificationSubscriptions()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_AVAILABILITY_NOTIFICATION_SUBSCRIPTIONS);

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
                case 'idStore':
                case 'fkCurrency':
                case 'fkLocale':
                case 'name':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'defaultCurrency':
                case 'defaultLocale':
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
                case 'spyStockStores':
                case 'spySalesOrderThresholds':
                case 'spyCmsPageStores':
                case 'spyQuotes':
                case 'spyProductOptionValuePrices':
                case 'spyAssetStores':
                case 'spyTouchStorages':
                case 'spyTouchSearches':
                case 'spyLocaleStores':
                case 'spyStoreContexts':
                case 'spyCurrencyStores':
                case 'spyOmsProductReservations':
                case 'spyCountryStores':
                case 'spyCategoryStores':
                case 'spyProductAbstractStores':
                case 'spyShipmentMethodPrices':
                case 'spyShipmentMethodStores':
                case 'spyAvailabilityAbstracts':
                case 'spyAvailabilities':
                case 'spyPaymentMethodStores':
                case 'spyPriceProductStores':
                case 'spyPriceProductSchedules':
                case 'spyProductLabelStores':
                case 'spyShipmentTypeStores':
                case 'spyProductRelationStores':
                case 'spyCmsBlockStores':
                case 'spyDiscounts':
                case 'spyDiscountStores':
                case 'spyAvailabilityNotificationSubscriptions':
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
                case 'idStore':
                case 'fkCurrency':
                case 'fkLocale':
                case 'name':
                    $values[$arrayKey] = $value;

                    break;
                case 'defaultCurrency':
                case 'defaultLocale':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'spyStockStores':
                case 'spySalesOrderThresholds':
                case 'spyCmsPageStores':
                case 'spyQuotes':
                case 'spyProductOptionValuePrices':
                case 'spyAssetStores':
                case 'spyTouchStorages':
                case 'spyTouchSearches':
                case 'spyLocaleStores':
                case 'spyStoreContexts':
                case 'spyCurrencyStores':
                case 'spyOmsProductReservations':
                case 'spyCountryStores':
                case 'spyCategoryStores':
                case 'spyProductAbstractStores':
                case 'spyShipmentMethodPrices':
                case 'spyShipmentMethodStores':
                case 'spyAvailabilityAbstracts':
                case 'spyAvailabilities':
                case 'spyPaymentMethodStores':
                case 'spyPriceProductStores':
                case 'spyPriceProductSchedules':
                case 'spyProductLabelStores':
                case 'spyShipmentTypeStores':
                case 'spyProductRelationStores':
                case 'spyCmsBlockStores':
                case 'spyDiscounts':
                case 'spyDiscountStores':
                case 'spyAvailabilityNotificationSubscriptions':
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
                case 'idStore':
                case 'fkCurrency':
                case 'fkLocale':
                case 'name':
                    $values[$arrayKey] = $value;

                    break;
                case 'defaultCurrency':
                case 'defaultLocale':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'spyStockStores':
                case 'spySalesOrderThresholds':
                case 'spyCmsPageStores':
                case 'spyQuotes':
                case 'spyProductOptionValuePrices':
                case 'spyAssetStores':
                case 'spyTouchStorages':
                case 'spyTouchSearches':
                case 'spyLocaleStores':
                case 'spyStoreContexts':
                case 'spyCurrencyStores':
                case 'spyOmsProductReservations':
                case 'spyCountryStores':
                case 'spyCategoryStores':
                case 'spyProductAbstractStores':
                case 'spyShipmentMethodPrices':
                case 'spyShipmentMethodStores':
                case 'spyAvailabilityAbstracts':
                case 'spyAvailabilities':
                case 'spyPaymentMethodStores':
                case 'spyPriceProductStores':
                case 'spyPriceProductSchedules':
                case 'spyProductLabelStores':
                case 'spyShipmentTypeStores':
                case 'spyProductRelationStores':
                case 'spyCmsBlockStores':
                case 'spyDiscounts':
                case 'spyDiscountStores':
                case 'spyAvailabilityNotificationSubscriptions':
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
        $this->spyStockStores = $this->spyStockStores ?: new ArrayObject();
        $this->spySalesOrderThresholds = $this->spySalesOrderThresholds ?: new ArrayObject();
        $this->spyCmsPageStores = $this->spyCmsPageStores ?: new ArrayObject();
        $this->spyQuotes = $this->spyQuotes ?: new ArrayObject();
        $this->spyProductOptionValuePrices = $this->spyProductOptionValuePrices ?: new ArrayObject();
        $this->spyAssetStores = $this->spyAssetStores ?: new ArrayObject();
        $this->spyTouchStorages = $this->spyTouchStorages ?: new ArrayObject();
        $this->spyTouchSearches = $this->spyTouchSearches ?: new ArrayObject();
        $this->spyLocaleStores = $this->spyLocaleStores ?: new ArrayObject();
        $this->spyStoreContexts = $this->spyStoreContexts ?: new ArrayObject();
        $this->spyCurrencyStores = $this->spyCurrencyStores ?: new ArrayObject();
        $this->spyOmsProductReservations = $this->spyOmsProductReservations ?: new ArrayObject();
        $this->spyCountryStores = $this->spyCountryStores ?: new ArrayObject();
        $this->spyCategoryStores = $this->spyCategoryStores ?: new ArrayObject();
        $this->spyProductAbstractStores = $this->spyProductAbstractStores ?: new ArrayObject();
        $this->spyShipmentMethodPrices = $this->spyShipmentMethodPrices ?: new ArrayObject();
        $this->spyShipmentMethodStores = $this->spyShipmentMethodStores ?: new ArrayObject();
        $this->spyAvailabilityAbstracts = $this->spyAvailabilityAbstracts ?: new ArrayObject();
        $this->spyAvailabilities = $this->spyAvailabilities ?: new ArrayObject();
        $this->spyPaymentMethodStores = $this->spyPaymentMethodStores ?: new ArrayObject();
        $this->spyPriceProductStores = $this->spyPriceProductStores ?: new ArrayObject();
        $this->spyPriceProductSchedules = $this->spyPriceProductSchedules ?: new ArrayObject();
        $this->spyProductLabelStores = $this->spyProductLabelStores ?: new ArrayObject();
        $this->spyShipmentTypeStores = $this->spyShipmentTypeStores ?: new ArrayObject();
        $this->spyProductRelationStores = $this->spyProductRelationStores ?: new ArrayObject();
        $this->spyCmsBlockStores = $this->spyCmsBlockStores ?: new ArrayObject();
        $this->spyDiscounts = $this->spyDiscounts ?: new ArrayObject();
        $this->spyDiscountStores = $this->spyDiscountStores ?: new ArrayObject();
        $this->spyAvailabilityNotificationSubscriptions = $this->spyAvailabilityNotificationSubscriptions ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idStore' => $this->idStore,
            'fkCurrency' => $this->fkCurrency,
            'fkLocale' => $this->fkLocale,
            'name' => $this->name,
            'defaultCurrency' => $this->defaultCurrency,
            'defaultLocale' => $this->defaultLocale,
            'spyStockStores' => $this->spyStockStores,
            'spySalesOrderThresholds' => $this->spySalesOrderThresholds,
            'spyCmsPageStores' => $this->spyCmsPageStores,
            'spyQuotes' => $this->spyQuotes,
            'spyProductOptionValuePrices' => $this->spyProductOptionValuePrices,
            'spyAssetStores' => $this->spyAssetStores,
            'spyTouchStorages' => $this->spyTouchStorages,
            'spyTouchSearches' => $this->spyTouchSearches,
            'spyLocaleStores' => $this->spyLocaleStores,
            'spyStoreContexts' => $this->spyStoreContexts,
            'spyCurrencyStores' => $this->spyCurrencyStores,
            'spyOmsProductReservations' => $this->spyOmsProductReservations,
            'spyCountryStores' => $this->spyCountryStores,
            'spyCategoryStores' => $this->spyCategoryStores,
            'spyProductAbstractStores' => $this->spyProductAbstractStores,
            'spyShipmentMethodPrices' => $this->spyShipmentMethodPrices,
            'spyShipmentMethodStores' => $this->spyShipmentMethodStores,
            'spyAvailabilityAbstracts' => $this->spyAvailabilityAbstracts,
            'spyAvailabilities' => $this->spyAvailabilities,
            'spyPaymentMethodStores' => $this->spyPaymentMethodStores,
            'spyPriceProductStores' => $this->spyPriceProductStores,
            'spyPriceProductSchedules' => $this->spyPriceProductSchedules,
            'spyProductLabelStores' => $this->spyProductLabelStores,
            'spyShipmentTypeStores' => $this->spyShipmentTypeStores,
            'spyProductRelationStores' => $this->spyProductRelationStores,
            'spyCmsBlockStores' => $this->spyCmsBlockStores,
            'spyDiscounts' => $this->spyDiscounts,
            'spyDiscountStores' => $this->spyDiscountStores,
            'spyAvailabilityNotificationSubscriptions' => $this->spyAvailabilityNotificationSubscriptions,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_store' => $this->idStore,
            'fk_currency' => $this->fkCurrency,
            'fk_locale' => $this->fkLocale,
            'name' => $this->name,
            'default_currency' => $this->defaultCurrency,
            'default_locale' => $this->defaultLocale,
            'spy_stock_stores' => $this->spyStockStores,
            'spy_sales_order_thresholds' => $this->spySalesOrderThresholds,
            'spy_cms_page_stores' => $this->spyCmsPageStores,
            'spy_quotes' => $this->spyQuotes,
            'spy_product_option_value_prices' => $this->spyProductOptionValuePrices,
            'spy_asset_stores' => $this->spyAssetStores,
            'spy_touch_storages' => $this->spyTouchStorages,
            'spy_touch_searches' => $this->spyTouchSearches,
            'spy_locale_stores' => $this->spyLocaleStores,
            'spy_store_contexts' => $this->spyStoreContexts,
            'spy_currency_stores' => $this->spyCurrencyStores,
            'spy_oms_product_reservations' => $this->spyOmsProductReservations,
            'spy_country_stores' => $this->spyCountryStores,
            'spy_category_stores' => $this->spyCategoryStores,
            'spy_product_abstract_stores' => $this->spyProductAbstractStores,
            'spy_shipment_method_prices' => $this->spyShipmentMethodPrices,
            'spy_shipment_method_stores' => $this->spyShipmentMethodStores,
            'spy_availability_abstracts' => $this->spyAvailabilityAbstracts,
            'spy_availabilities' => $this->spyAvailabilities,
            'spy_payment_method_stores' => $this->spyPaymentMethodStores,
            'spy_price_product_stores' => $this->spyPriceProductStores,
            'spy_price_product_schedules' => $this->spyPriceProductSchedules,
            'spy_product_label_stores' => $this->spyProductLabelStores,
            'spy_shipment_type_stores' => $this->spyShipmentTypeStores,
            'spy_product_relation_stores' => $this->spyProductRelationStores,
            'spy_cms_block_stores' => $this->spyCmsBlockStores,
            'spy_discounts' => $this->spyDiscounts,
            'spy_discount_stores' => $this->spyDiscountStores,
            'spy_availability_notification_subscriptions' => $this->spyAvailabilityNotificationSubscriptions,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_store' => $this->idStore instanceof AbstractTransfer ? $this->idStore->toArray(true, false) : $this->idStore,
            'fk_currency' => $this->fkCurrency instanceof AbstractTransfer ? $this->fkCurrency->toArray(true, false) : $this->fkCurrency,
            'fk_locale' => $this->fkLocale instanceof AbstractTransfer ? $this->fkLocale->toArray(true, false) : $this->fkLocale,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'default_currency' => $this->defaultCurrency instanceof AbstractTransfer ? $this->defaultCurrency->toArray(true, false) : $this->defaultCurrency,
            'default_locale' => $this->defaultLocale instanceof AbstractTransfer ? $this->defaultLocale->toArray(true, false) : $this->defaultLocale,
            'spy_stock_stores' => $this->spyStockStores instanceof AbstractTransfer ? $this->spyStockStores->toArray(true, false) : $this->addValuesToCollection($this->spyStockStores, true, false),
            'spy_sales_order_thresholds' => $this->spySalesOrderThresholds instanceof AbstractTransfer ? $this->spySalesOrderThresholds->toArray(true, false) : $this->addValuesToCollection($this->spySalesOrderThresholds, true, false),
            'spy_cms_page_stores' => $this->spyCmsPageStores instanceof AbstractTransfer ? $this->spyCmsPageStores->toArray(true, false) : $this->addValuesToCollection($this->spyCmsPageStores, true, false),
            'spy_quotes' => $this->spyQuotes instanceof AbstractTransfer ? $this->spyQuotes->toArray(true, false) : $this->addValuesToCollection($this->spyQuotes, true, false),
            'spy_product_option_value_prices' => $this->spyProductOptionValuePrices instanceof AbstractTransfer ? $this->spyProductOptionValuePrices->toArray(true, false) : $this->addValuesToCollection($this->spyProductOptionValuePrices, true, false),
            'spy_asset_stores' => $this->spyAssetStores instanceof AbstractTransfer ? $this->spyAssetStores->toArray(true, false) : $this->addValuesToCollection($this->spyAssetStores, true, false),
            'spy_touch_storages' => $this->spyTouchStorages instanceof AbstractTransfer ? $this->spyTouchStorages->toArray(true, false) : $this->addValuesToCollection($this->spyTouchStorages, true, false),
            'spy_touch_searches' => $this->spyTouchSearches instanceof AbstractTransfer ? $this->spyTouchSearches->toArray(true, false) : $this->addValuesToCollection($this->spyTouchSearches, true, false),
            'spy_locale_stores' => $this->spyLocaleStores instanceof AbstractTransfer ? $this->spyLocaleStores->toArray(true, false) : $this->addValuesToCollection($this->spyLocaleStores, true, false),
            'spy_store_contexts' => $this->spyStoreContexts instanceof AbstractTransfer ? $this->spyStoreContexts->toArray(true, false) : $this->addValuesToCollection($this->spyStoreContexts, true, false),
            'spy_currency_stores' => $this->spyCurrencyStores instanceof AbstractTransfer ? $this->spyCurrencyStores->toArray(true, false) : $this->addValuesToCollection($this->spyCurrencyStores, true, false),
            'spy_oms_product_reservations' => $this->spyOmsProductReservations instanceof AbstractTransfer ? $this->spyOmsProductReservations->toArray(true, false) : $this->addValuesToCollection($this->spyOmsProductReservations, true, false),
            'spy_country_stores' => $this->spyCountryStores instanceof AbstractTransfer ? $this->spyCountryStores->toArray(true, false) : $this->addValuesToCollection($this->spyCountryStores, true, false),
            'spy_category_stores' => $this->spyCategoryStores instanceof AbstractTransfer ? $this->spyCategoryStores->toArray(true, false) : $this->addValuesToCollection($this->spyCategoryStores, true, false),
            'spy_product_abstract_stores' => $this->spyProductAbstractStores instanceof AbstractTransfer ? $this->spyProductAbstractStores->toArray(true, false) : $this->addValuesToCollection($this->spyProductAbstractStores, true, false),
            'spy_shipment_method_prices' => $this->spyShipmentMethodPrices instanceof AbstractTransfer ? $this->spyShipmentMethodPrices->toArray(true, false) : $this->addValuesToCollection($this->spyShipmentMethodPrices, true, false),
            'spy_shipment_method_stores' => $this->spyShipmentMethodStores instanceof AbstractTransfer ? $this->spyShipmentMethodStores->toArray(true, false) : $this->addValuesToCollection($this->spyShipmentMethodStores, true, false),
            'spy_availability_abstracts' => $this->spyAvailabilityAbstracts instanceof AbstractTransfer ? $this->spyAvailabilityAbstracts->toArray(true, false) : $this->addValuesToCollection($this->spyAvailabilityAbstracts, true, false),
            'spy_availabilities' => $this->spyAvailabilities instanceof AbstractTransfer ? $this->spyAvailabilities->toArray(true, false) : $this->addValuesToCollection($this->spyAvailabilities, true, false),
            'spy_payment_method_stores' => $this->spyPaymentMethodStores instanceof AbstractTransfer ? $this->spyPaymentMethodStores->toArray(true, false) : $this->addValuesToCollection($this->spyPaymentMethodStores, true, false),
            'spy_price_product_stores' => $this->spyPriceProductStores instanceof AbstractTransfer ? $this->spyPriceProductStores->toArray(true, false) : $this->addValuesToCollection($this->spyPriceProductStores, true, false),
            'spy_price_product_schedules' => $this->spyPriceProductSchedules instanceof AbstractTransfer ? $this->spyPriceProductSchedules->toArray(true, false) : $this->addValuesToCollection($this->spyPriceProductSchedules, true, false),
            'spy_product_label_stores' => $this->spyProductLabelStores instanceof AbstractTransfer ? $this->spyProductLabelStores->toArray(true, false) : $this->addValuesToCollection($this->spyProductLabelStores, true, false),
            'spy_shipment_type_stores' => $this->spyShipmentTypeStores instanceof AbstractTransfer ? $this->spyShipmentTypeStores->toArray(true, false) : $this->addValuesToCollection($this->spyShipmentTypeStores, true, false),
            'spy_product_relation_stores' => $this->spyProductRelationStores instanceof AbstractTransfer ? $this->spyProductRelationStores->toArray(true, false) : $this->addValuesToCollection($this->spyProductRelationStores, true, false),
            'spy_cms_block_stores' => $this->spyCmsBlockStores instanceof AbstractTransfer ? $this->spyCmsBlockStores->toArray(true, false) : $this->addValuesToCollection($this->spyCmsBlockStores, true, false),
            'spy_discounts' => $this->spyDiscounts instanceof AbstractTransfer ? $this->spyDiscounts->toArray(true, false) : $this->addValuesToCollection($this->spyDiscounts, true, false),
            'spy_discount_stores' => $this->spyDiscountStores instanceof AbstractTransfer ? $this->spyDiscountStores->toArray(true, false) : $this->addValuesToCollection($this->spyDiscountStores, true, false),
            'spy_availability_notification_subscriptions' => $this->spyAvailabilityNotificationSubscriptions instanceof AbstractTransfer ? $this->spyAvailabilityNotificationSubscriptions->toArray(true, false) : $this->addValuesToCollection($this->spyAvailabilityNotificationSubscriptions, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idStore' => $this->idStore instanceof AbstractTransfer ? $this->idStore->toArray(true, true) : $this->idStore,
            'fkCurrency' => $this->fkCurrency instanceof AbstractTransfer ? $this->fkCurrency->toArray(true, true) : $this->fkCurrency,
            'fkLocale' => $this->fkLocale instanceof AbstractTransfer ? $this->fkLocale->toArray(true, true) : $this->fkLocale,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'defaultCurrency' => $this->defaultCurrency instanceof AbstractTransfer ? $this->defaultCurrency->toArray(true, true) : $this->defaultCurrency,
            'defaultLocale' => $this->defaultLocale instanceof AbstractTransfer ? $this->defaultLocale->toArray(true, true) : $this->defaultLocale,
            'spyStockStores' => $this->spyStockStores instanceof AbstractTransfer ? $this->spyStockStores->toArray(true, true) : $this->addValuesToCollection($this->spyStockStores, true, true),
            'spySalesOrderThresholds' => $this->spySalesOrderThresholds instanceof AbstractTransfer ? $this->spySalesOrderThresholds->toArray(true, true) : $this->addValuesToCollection($this->spySalesOrderThresholds, true, true),
            'spyCmsPageStores' => $this->spyCmsPageStores instanceof AbstractTransfer ? $this->spyCmsPageStores->toArray(true, true) : $this->addValuesToCollection($this->spyCmsPageStores, true, true),
            'spyQuotes' => $this->spyQuotes instanceof AbstractTransfer ? $this->spyQuotes->toArray(true, true) : $this->addValuesToCollection($this->spyQuotes, true, true),
            'spyProductOptionValuePrices' => $this->spyProductOptionValuePrices instanceof AbstractTransfer ? $this->spyProductOptionValuePrices->toArray(true, true) : $this->addValuesToCollection($this->spyProductOptionValuePrices, true, true),
            'spyAssetStores' => $this->spyAssetStores instanceof AbstractTransfer ? $this->spyAssetStores->toArray(true, true) : $this->addValuesToCollection($this->spyAssetStores, true, true),
            'spyTouchStorages' => $this->spyTouchStorages instanceof AbstractTransfer ? $this->spyTouchStorages->toArray(true, true) : $this->addValuesToCollection($this->spyTouchStorages, true, true),
            'spyTouchSearches' => $this->spyTouchSearches instanceof AbstractTransfer ? $this->spyTouchSearches->toArray(true, true) : $this->addValuesToCollection($this->spyTouchSearches, true, true),
            'spyLocaleStores' => $this->spyLocaleStores instanceof AbstractTransfer ? $this->spyLocaleStores->toArray(true, true) : $this->addValuesToCollection($this->spyLocaleStores, true, true),
            'spyStoreContexts' => $this->spyStoreContexts instanceof AbstractTransfer ? $this->spyStoreContexts->toArray(true, true) : $this->addValuesToCollection($this->spyStoreContexts, true, true),
            'spyCurrencyStores' => $this->spyCurrencyStores instanceof AbstractTransfer ? $this->spyCurrencyStores->toArray(true, true) : $this->addValuesToCollection($this->spyCurrencyStores, true, true),
            'spyOmsProductReservations' => $this->spyOmsProductReservations instanceof AbstractTransfer ? $this->spyOmsProductReservations->toArray(true, true) : $this->addValuesToCollection($this->spyOmsProductReservations, true, true),
            'spyCountryStores' => $this->spyCountryStores instanceof AbstractTransfer ? $this->spyCountryStores->toArray(true, true) : $this->addValuesToCollection($this->spyCountryStores, true, true),
            'spyCategoryStores' => $this->spyCategoryStores instanceof AbstractTransfer ? $this->spyCategoryStores->toArray(true, true) : $this->addValuesToCollection($this->spyCategoryStores, true, true),
            'spyProductAbstractStores' => $this->spyProductAbstractStores instanceof AbstractTransfer ? $this->spyProductAbstractStores->toArray(true, true) : $this->addValuesToCollection($this->spyProductAbstractStores, true, true),
            'spyShipmentMethodPrices' => $this->spyShipmentMethodPrices instanceof AbstractTransfer ? $this->spyShipmentMethodPrices->toArray(true, true) : $this->addValuesToCollection($this->spyShipmentMethodPrices, true, true),
            'spyShipmentMethodStores' => $this->spyShipmentMethodStores instanceof AbstractTransfer ? $this->spyShipmentMethodStores->toArray(true, true) : $this->addValuesToCollection($this->spyShipmentMethodStores, true, true),
            'spyAvailabilityAbstracts' => $this->spyAvailabilityAbstracts instanceof AbstractTransfer ? $this->spyAvailabilityAbstracts->toArray(true, true) : $this->addValuesToCollection($this->spyAvailabilityAbstracts, true, true),
            'spyAvailabilities' => $this->spyAvailabilities instanceof AbstractTransfer ? $this->spyAvailabilities->toArray(true, true) : $this->addValuesToCollection($this->spyAvailabilities, true, true),
            'spyPaymentMethodStores' => $this->spyPaymentMethodStores instanceof AbstractTransfer ? $this->spyPaymentMethodStores->toArray(true, true) : $this->addValuesToCollection($this->spyPaymentMethodStores, true, true),
            'spyPriceProductStores' => $this->spyPriceProductStores instanceof AbstractTransfer ? $this->spyPriceProductStores->toArray(true, true) : $this->addValuesToCollection($this->spyPriceProductStores, true, true),
            'spyPriceProductSchedules' => $this->spyPriceProductSchedules instanceof AbstractTransfer ? $this->spyPriceProductSchedules->toArray(true, true) : $this->addValuesToCollection($this->spyPriceProductSchedules, true, true),
            'spyProductLabelStores' => $this->spyProductLabelStores instanceof AbstractTransfer ? $this->spyProductLabelStores->toArray(true, true) : $this->addValuesToCollection($this->spyProductLabelStores, true, true),
            'spyShipmentTypeStores' => $this->spyShipmentTypeStores instanceof AbstractTransfer ? $this->spyShipmentTypeStores->toArray(true, true) : $this->addValuesToCollection($this->spyShipmentTypeStores, true, true),
            'spyProductRelationStores' => $this->spyProductRelationStores instanceof AbstractTransfer ? $this->spyProductRelationStores->toArray(true, true) : $this->addValuesToCollection($this->spyProductRelationStores, true, true),
            'spyCmsBlockStores' => $this->spyCmsBlockStores instanceof AbstractTransfer ? $this->spyCmsBlockStores->toArray(true, true) : $this->addValuesToCollection($this->spyCmsBlockStores, true, true),
            'spyDiscounts' => $this->spyDiscounts instanceof AbstractTransfer ? $this->spyDiscounts->toArray(true, true) : $this->addValuesToCollection($this->spyDiscounts, true, true),
            'spyDiscountStores' => $this->spyDiscountStores instanceof AbstractTransfer ? $this->spyDiscountStores->toArray(true, true) : $this->addValuesToCollection($this->spyDiscountStores, true, true),
            'spyAvailabilityNotificationSubscriptions' => $this->spyAvailabilityNotificationSubscriptions instanceof AbstractTransfer ? $this->spyAvailabilityNotificationSubscriptions->toArray(true, true) : $this->addValuesToCollection($this->spyAvailabilityNotificationSubscriptions, true, true),
        ];
    }
}
