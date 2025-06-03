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
class StoreTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const COUNTRIES = 'countries';

    /**
     * @deprecated Will be removed without replacement.
     */
    public const STORE_REFERENCE = 'storeReference';

    /**
     * @var string
     */
    public const ID_STORE = 'idStore';

    /**
     * @deprecated Will be empty after dynamic store enablement
     */
    public const STORES_WITH_SHARED_PERSISTENCE = 'storesWithSharedPersistence';

    /**
     * @var string
     */
    public const DEFAULT_CURRENCY_ISO_CODE = 'defaultCurrencyIsoCode';

    /**
     * @var string
     */
    public const AVAILABLE_LOCALE_ISO_CODES = 'availableLocaleIsoCodes';

    /**
     * @var string
     */
    public const AVAILABLE_CURRENCY_ISO_CODES = 'availableCurrencyIsoCodes';

    /**
     * @var string
     */
    public const COUNTRY_NAMES = 'countryNames';

    /**
     * @var string
     */
    public const SELECTED_CURRENCY_ISO_CODE = 'selectedCurrencyIsoCode';

    /**
     * @var string
     */
    public const DEFAULT_LOCALE_ISO_CODE = 'defaultLocaleIsoCode';

    /**
     * @var string
     */
    public const TIMEZONE = 'timezone';

    /**
     * @deprecated Will be empty after dynamic store enablement
     */
    public const QUEUE_POOLS = 'queuePools';

    /**
     * @var string
     */
    public const APPLICATION_CONTEXT_COLLECTION = 'applicationContextCollection';

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var array
     */
    protected $countries = [];

    /**
     * @var string|null
     */
    protected $storeReference;

    /**
     * @var int|null
     */
    protected $idStore;

    /**
     * @var array
     */
    protected $storesWithSharedPersistence = [];

    /**
     * @var string|null
     */
    protected $defaultCurrencyIsoCode;

    /**
     * @var array
     */
    protected $availableLocaleIsoCodes = [];

    /**
     * @var array
     */
    protected $availableCurrencyIsoCodes = [];

    /**
     * @var string[]
     */
    protected $countryNames = [];

    /**
     * @var string|null
     */
    protected $selectedCurrencyIsoCode;

    /**
     * @var string|null
     */
    protected $defaultLocaleIsoCode;

    /**
     * @var string|null
     */
    protected $timezone;

    /**
     * @var array
     */
    protected $queuePools = [];

    /**
     * @var \Generated\Shared\Transfer\StoreApplicationContextCollectionTransfer|null
     */
    protected $applicationContextCollection;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'name' => 'name',
        'Name' => 'name',
        'countries' => 'countries',
        'Countries' => 'countries',
        'store_reference' => 'storeReference',
        'storeReference' => 'storeReference',
        'StoreReference' => 'storeReference',
        'id_store' => 'idStore',
        'idStore' => 'idStore',
        'IdStore' => 'idStore',
        'stores_with_shared_persistence' => 'storesWithSharedPersistence',
        'storesWithSharedPersistence' => 'storesWithSharedPersistence',
        'StoresWithSharedPersistence' => 'storesWithSharedPersistence',
        'default_currency_iso_code' => 'defaultCurrencyIsoCode',
        'defaultCurrencyIsoCode' => 'defaultCurrencyIsoCode',
        'DefaultCurrencyIsoCode' => 'defaultCurrencyIsoCode',
        'available_locale_iso_codes' => 'availableLocaleIsoCodes',
        'availableLocaleIsoCodes' => 'availableLocaleIsoCodes',
        'AvailableLocaleIsoCodes' => 'availableLocaleIsoCodes',
        'available_currency_iso_codes' => 'availableCurrencyIsoCodes',
        'availableCurrencyIsoCodes' => 'availableCurrencyIsoCodes',
        'AvailableCurrencyIsoCodes' => 'availableCurrencyIsoCodes',
        'country_names' => 'countryNames',
        'countryNames' => 'countryNames',
        'CountryNames' => 'countryNames',
        'selected_currency_iso_code' => 'selectedCurrencyIsoCode',
        'selectedCurrencyIsoCode' => 'selectedCurrencyIsoCode',
        'SelectedCurrencyIsoCode' => 'selectedCurrencyIsoCode',
        'default_locale_iso_code' => 'defaultLocaleIsoCode',
        'defaultLocaleIsoCode' => 'defaultLocaleIsoCode',
        'DefaultLocaleIsoCode' => 'defaultLocaleIsoCode',
        'timezone' => 'timezone',
        'Timezone' => 'timezone',
        'queue_pools' => 'queuePools',
        'queuePools' => 'queuePools',
        'QueuePools' => 'queuePools',
        'application_context_collection' => 'applicationContextCollection',
        'applicationContextCollection' => 'applicationContextCollection',
        'ApplicationContextCollection' => 'applicationContextCollection',
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
        self::COUNTRIES => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'countries',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::STORE_REFERENCE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'store_reference',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_STORE => [
            'type' => 'int',
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
        self::STORES_WITH_SHARED_PERSISTENCE => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'stores_with_shared_persistence',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DEFAULT_CURRENCY_ISO_CODE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'default_currency_iso_code',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::AVAILABLE_LOCALE_ISO_CODES => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'available_locale_iso_codes',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::AVAILABLE_CURRENCY_ISO_CODES => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'available_currency_iso_codes',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::COUNTRY_NAMES => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'country_names',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SELECTED_CURRENCY_ISO_CODE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'selected_currency_iso_code',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DEFAULT_LOCALE_ISO_CODE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'default_locale_iso_code',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::TIMEZONE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'timezone',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::QUEUE_POOLS => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'queue_pools',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::APPLICATION_CONTEXT_COLLECTION => [
            'type' => 'Generated\Shared\Transfer\StoreApplicationContextCollectionTransfer',
            'type_shim' => null,
            'name_underscore' => 'application_context_collection',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
    ];

    /**
     * @module AssetWidget|CatalogPage|CategoryWidget|CmsBlockWidget|DateTimeConfiguratorPageExample|ProductCategoryWidget|ProductLabelWidget|ProductRelationWidget|SalesReturnPage|ShipmentTypeWidget|StoreWidget|AppCatalogGui|AssetStorage|Asset|AvailabilityCartConnector|AvailabilityGui|AvailabilityNotification|AvailabilityNotificationsRestApi|AvailabilityStorage|Availability|Calculation|CartsRestApi|CategoriesRestApi|CategoryPageSearch|CategoryStorage|CheckoutRestApi|CmsBlockGui|CmsBlockStorage|CmsBlock|CmsGui|CmsPageSearch|CmsPagesContentBannersResourceRelationship|CmsPagesContentProductAbstractListsResourceRelationship|CmsPagesRestApi|CmsSlotBlockGui|CmsSlotBlockProductCategoryConnector|CmsSlotStoreConnector|CmsStorage|Collector|ContentProductAbstractListsRestApi|CountryGui|Currency|Customer|Discount|GiftCardMailConnector|Http|MessageBrokerAws|MessageBroker|MoneyGui|Money|Monitoring|Oms|Payment|PriceCartConnector|PriceProductScheduleGui|PriceProductSchedule|PriceProductStorage|PriceProduct|ProductBundle|ProductCartConnector|ProductCategorySearch|ProductCategoryStorage|ProductConfiguration|ProductLabelSearch|ProductLabelStorage|ProductLabelsRestApi|ProductManagement|ProductNew|ProductOptionStorage|ProductOption|ProductPageSearch|ProductRelationStorage|ProductResourceAliasStorage|ProductReviewSearch|ProductReviewsRestApi|ProductSearch|ProductSetPageSearch|ProductSetStorage|ProductStorage|ProductWarehouseAllocationExample|Product|ProductsBackendApi|ProductsCategoriesResourceRelationship|ProductsRestApi|Quote|RelatedProductsRestApi|RestRequestValidator|SalesOrderThresholdGui|SalesOrderThreshold|Sales|SearchElasticsearch|SearchHttp|Search|ShipmentDataImport|ShipmentTypeStorage|ShipmentType|Shipment|Stock|Storage|StoreContextStorage|StoreContext|StoreDataImport|StoreGui|StoreStorage|Store|StoresApi|StoresRestApi|Synchronization|TaxApp|TaxProductConnector|UrlStorage
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
     * @module AssetWidget|CatalogPage|CategoryWidget|CmsBlockWidget|DateTimeConfiguratorPageExample|ProductCategoryWidget|ProductLabelWidget|ProductRelationWidget|SalesReturnPage|ShipmentTypeWidget|StoreWidget|AppCatalogGui|AssetStorage|Asset|AvailabilityCartConnector|AvailabilityGui|AvailabilityNotification|AvailabilityNotificationsRestApi|AvailabilityStorage|Availability|Calculation|CartsRestApi|CategoriesRestApi|CategoryPageSearch|CategoryStorage|CheckoutRestApi|CmsBlockGui|CmsBlockStorage|CmsBlock|CmsGui|CmsPageSearch|CmsPagesContentBannersResourceRelationship|CmsPagesContentProductAbstractListsResourceRelationship|CmsPagesRestApi|CmsSlotBlockGui|CmsSlotBlockProductCategoryConnector|CmsSlotStoreConnector|CmsStorage|Collector|ContentProductAbstractListsRestApi|CountryGui|Currency|Customer|Discount|GiftCardMailConnector|Http|MessageBrokerAws|MessageBroker|MoneyGui|Money|Monitoring|Oms|Payment|PriceCartConnector|PriceProductScheduleGui|PriceProductSchedule|PriceProductStorage|PriceProduct|ProductBundle|ProductCartConnector|ProductCategorySearch|ProductCategoryStorage|ProductConfiguration|ProductLabelSearch|ProductLabelStorage|ProductLabelsRestApi|ProductManagement|ProductNew|ProductOptionStorage|ProductOption|ProductPageSearch|ProductRelationStorage|ProductResourceAliasStorage|ProductReviewSearch|ProductReviewsRestApi|ProductSearch|ProductSetPageSearch|ProductSetStorage|ProductStorage|ProductWarehouseAllocationExample|Product|ProductsBackendApi|ProductsCategoriesResourceRelationship|ProductsRestApi|Quote|RelatedProductsRestApi|RestRequestValidator|SalesOrderThresholdGui|SalesOrderThreshold|Sales|SearchElasticsearch|SearchHttp|Search|ShipmentDataImport|ShipmentTypeStorage|ShipmentType|Shipment|Stock|Storage|StoreContextStorage|StoreContext|StoreDataImport|StoreGui|StoreStorage|Store|StoresApi|StoresRestApi|Synchronization|TaxApp|TaxProductConnector|UrlStorage
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module AssetWidget|CatalogPage|CategoryWidget|CmsBlockWidget|DateTimeConfiguratorPageExample|ProductCategoryWidget|ProductLabelWidget|ProductRelationWidget|SalesReturnPage|ShipmentTypeWidget|StoreWidget|AppCatalogGui|AssetStorage|Asset|AvailabilityCartConnector|AvailabilityGui|AvailabilityNotification|AvailabilityNotificationsRestApi|AvailabilityStorage|Availability|Calculation|CartsRestApi|CategoriesRestApi|CategoryPageSearch|CategoryStorage|CheckoutRestApi|CmsBlockGui|CmsBlockStorage|CmsBlock|CmsGui|CmsPageSearch|CmsPagesContentBannersResourceRelationship|CmsPagesContentProductAbstractListsResourceRelationship|CmsPagesRestApi|CmsSlotBlockGui|CmsSlotBlockProductCategoryConnector|CmsSlotStoreConnector|CmsStorage|Collector|ContentProductAbstractListsRestApi|CountryGui|Currency|Customer|Discount|GiftCardMailConnector|Http|MessageBrokerAws|MessageBroker|MoneyGui|Money|Monitoring|Oms|Payment|PriceCartConnector|PriceProductScheduleGui|PriceProductSchedule|PriceProductStorage|PriceProduct|ProductBundle|ProductCartConnector|ProductCategorySearch|ProductCategoryStorage|ProductConfiguration|ProductLabelSearch|ProductLabelStorage|ProductLabelsRestApi|ProductManagement|ProductNew|ProductOptionStorage|ProductOption|ProductPageSearch|ProductRelationStorage|ProductResourceAliasStorage|ProductReviewSearch|ProductReviewsRestApi|ProductSearch|ProductSetPageSearch|ProductSetStorage|ProductStorage|ProductWarehouseAllocationExample|Product|ProductsBackendApi|ProductsCategoriesResourceRelationship|ProductsRestApi|Quote|RelatedProductsRestApi|RestRequestValidator|SalesOrderThresholdGui|SalesOrderThreshold|Sales|SearchElasticsearch|SearchHttp|Search|ShipmentDataImport|ShipmentTypeStorage|ShipmentType|Shipment|Stock|Storage|StoreContextStorage|StoreContext|StoreDataImport|StoreGui|StoreStorage|Store|StoresApi|StoresRestApi|Synchronization|TaxApp|TaxProductConnector|UrlStorage
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
     * @module AssetWidget|CatalogPage|CategoryWidget|CmsBlockWidget|DateTimeConfiguratorPageExample|ProductCategoryWidget|ProductLabelWidget|ProductRelationWidget|SalesReturnPage|ShipmentTypeWidget|StoreWidget|AppCatalogGui|AssetStorage|Asset|AvailabilityCartConnector|AvailabilityGui|AvailabilityNotification|AvailabilityNotificationsRestApi|AvailabilityStorage|Availability|Calculation|CartsRestApi|CategoriesRestApi|CategoryPageSearch|CategoryStorage|CheckoutRestApi|CmsBlockGui|CmsBlockStorage|CmsBlock|CmsGui|CmsPageSearch|CmsPagesContentBannersResourceRelationship|CmsPagesContentProductAbstractListsResourceRelationship|CmsPagesRestApi|CmsSlotBlockGui|CmsSlotBlockProductCategoryConnector|CmsSlotStoreConnector|CmsStorage|Collector|ContentProductAbstractListsRestApi|CountryGui|Currency|Customer|Discount|GiftCardMailConnector|Http|MessageBrokerAws|MessageBroker|MoneyGui|Money|Monitoring|Oms|Payment|PriceCartConnector|PriceProductScheduleGui|PriceProductSchedule|PriceProductStorage|PriceProduct|ProductBundle|ProductCartConnector|ProductCategorySearch|ProductCategoryStorage|ProductConfiguration|ProductLabelSearch|ProductLabelStorage|ProductLabelsRestApi|ProductManagement|ProductNew|ProductOptionStorage|ProductOption|ProductPageSearch|ProductRelationStorage|ProductResourceAliasStorage|ProductReviewSearch|ProductReviewsRestApi|ProductSearch|ProductSetPageSearch|ProductSetStorage|ProductStorage|ProductWarehouseAllocationExample|Product|ProductsBackendApi|ProductsCategoriesResourceRelationship|ProductsRestApi|Quote|RelatedProductsRestApi|RestRequestValidator|SalesOrderThresholdGui|SalesOrderThreshold|Sales|SearchElasticsearch|SearchHttp|Search|ShipmentDataImport|ShipmentTypeStorage|ShipmentType|Shipment|Stock|Storage|StoreContextStorage|StoreContext|StoreDataImport|StoreGui|StoreStorage|Store|StoresApi|StoresRestApi|Synchronization|TaxApp|TaxProductConnector|UrlStorage
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
     * @module AssetWidget|CatalogPage|CategoryWidget|CmsBlockWidget|DateTimeConfiguratorPageExample|ProductCategoryWidget|ProductLabelWidget|ProductRelationWidget|SalesReturnPage|ShipmentTypeWidget|StoreWidget|AppCatalogGui|AssetStorage|Asset|AvailabilityCartConnector|AvailabilityGui|AvailabilityNotification|AvailabilityNotificationsRestApi|AvailabilityStorage|Availability|Calculation|CartsRestApi|CategoriesRestApi|CategoryPageSearch|CategoryStorage|CheckoutRestApi|CmsBlockGui|CmsBlockStorage|CmsBlock|CmsGui|CmsPageSearch|CmsPagesContentBannersResourceRelationship|CmsPagesContentProductAbstractListsResourceRelationship|CmsPagesRestApi|CmsSlotBlockGui|CmsSlotBlockProductCategoryConnector|CmsSlotStoreConnector|CmsStorage|Collector|ContentProductAbstractListsRestApi|CountryGui|Currency|Customer|Discount|GiftCardMailConnector|Http|MessageBrokerAws|MessageBroker|MoneyGui|Money|Monitoring|Oms|Payment|PriceCartConnector|PriceProductScheduleGui|PriceProductSchedule|PriceProductStorage|PriceProduct|ProductBundle|ProductCartConnector|ProductCategorySearch|ProductCategoryStorage|ProductConfiguration|ProductLabelSearch|ProductLabelStorage|ProductLabelsRestApi|ProductManagement|ProductNew|ProductOptionStorage|ProductOption|ProductPageSearch|ProductRelationStorage|ProductResourceAliasStorage|ProductReviewSearch|ProductReviewsRestApi|ProductSearch|ProductSetPageSearch|ProductSetStorage|ProductStorage|ProductWarehouseAllocationExample|Product|ProductsBackendApi|ProductsCategoriesResourceRelationship|ProductsRestApi|Quote|RelatedProductsRestApi|RestRequestValidator|SalesOrderThresholdGui|SalesOrderThreshold|Sales|SearchElasticsearch|SearchHttp|Search|ShipmentDataImport|ShipmentTypeStorage|ShipmentType|Shipment|Stock|Storage|StoreContextStorage|StoreContext|StoreDataImport|StoreGui|StoreStorage|Store|StoresApi|StoresRestApi|Synchronization|TaxApp|TaxProductConnector|UrlStorage
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
     * @module CustomerPage|CountryGui|Country|Customer|ProductOption|SalesOrderThreshold|Shipment|StoreStorage|Store|StoresRestApi|TaxApp|TaxProductConnector|Tax
     *
     * @param array|null $countries
     *
     * @return $this
     */
    public function setCountries(array $countries = null)
    {
        if ($countries === null) {
            $countries = [];
        }

        $this->countries = $countries;
        $this->modifiedProperties[self::COUNTRIES] = true;

        return $this;
    }

    /**
     * @module CustomerPage|CountryGui|Country|Customer|ProductOption|SalesOrderThreshold|Shipment|StoreStorage|Store|StoresRestApi|TaxApp|TaxProductConnector|Tax
     *
     * @return array
     */
    public function getCountries()
    {
        return $this->countries;
    }

    /**
     * @module CustomerPage|CountryGui|Country|Customer|ProductOption|SalesOrderThreshold|Shipment|StoreStorage|Store|StoresRestApi|TaxApp|TaxProductConnector|Tax
     *
     * @param mixed $country
     *
     * @return $this
     */
    public function addCountry($country)
    {
        $this->countries[] = $country;
        $this->modifiedProperties[self::COUNTRIES] = true;

        return $this;
    }

    /**
     * @module CustomerPage|CountryGui|Country|Customer|ProductOption|SalesOrderThreshold|Shipment|StoreStorage|Store|StoresRestApi|TaxApp|TaxProductConnector|Tax
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCountries()
    {
        $this->assertPropertyIsSet(self::COUNTRIES);

        return $this;
    }

    /**
     * @module AppCatalogGui|Asset|MessageBroker|Oms|Payment|Product|SearchHttp|Store|TaxApp
     *
     * @deprecated Will be removed without replacement.
     *
     * @param string|null $storeReference
     *
     * @return $this
     */
    public function setStoreReference($storeReference)
    {
        $this->storeReference = $storeReference;
        $this->modifiedProperties[self::STORE_REFERENCE] = true;

        return $this;
    }

    /**
     * @module AppCatalogGui|Asset|MessageBroker|Oms|Payment|Product|SearchHttp|Store|TaxApp
     *
     * @deprecated Will be removed without replacement.
     *
     * @return string|null
     */
    public function getStoreReference()
    {
        return $this->storeReference;
    }

    /**
     * @module AppCatalogGui|Asset|MessageBroker|Oms|Payment|Product|SearchHttp|Store|TaxApp
     *
     * @deprecated Will be removed without replacement.
     *
     * @param string|null $storeReference
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStoreReferenceOrFail($storeReference)
    {
        if ($storeReference === null) {
            $this->throwNullValueException(static::STORE_REFERENCE);
        }

        return $this->setStoreReference($storeReference);
    }

    /**
     * @module AppCatalogGui|Asset|MessageBroker|Oms|Payment|Product|SearchHttp|Store|TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @deprecated Will be removed without replacement.
     *
     * @return string
     */
    public function getStoreReferenceOrFail()
    {
        if ($this->storeReference === null) {
            $this->throwNullValueException(static::STORE_REFERENCE);
        }

        return $this->storeReference;
    }

    /**
     * @module AppCatalogGui|Asset|MessageBroker|Oms|Payment|Product|SearchHttp|Store|TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @deprecated Will be removed without replacement.
     *
     * @return $this
     */
    public function requireStoreReference()
    {
        $this->assertPropertyIsSet(self::STORE_REFERENCE);

        return $this;
    }

    /**
     * @module Asset|AvailabilityGui|AvailabilityNotification|Availability|CartsRestApi|CategoryGui|CategoryStorage|Category|CheckoutRestApi|CmsBlock|Cms|Collector|CountryGui|Country|CurrencyGui|Currency|Discount|LocaleGui|Locale|MoneyGui|Money|Oms|Payment|PersistentCart|PriceProductScheduleGui|PriceProductSchedule|PriceProductStorage|PriceProductVolumeGui|PriceProduct|ProductBundle|ProductCartConnector|ProductLabel|ProductManagement|ProductOptionStorage|ProductOption|ProductPageSearch|ProductRelationGui|ProductRelation|ProductWarehouseAllocationExample|Product|ProductsBackendApi|Quote|SalesOrderThreshold|ShipmentGui|ShipmentType|Shipment|ShipmentsRestApi|Stock|StoreContext|StoreGui|StoreStorage|Store|StoresRestApi|TaxApp
     *
     * @param int|null $idStore
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
     * @module Asset|AvailabilityGui|AvailabilityNotification|Availability|CartsRestApi|CategoryGui|CategoryStorage|Category|CheckoutRestApi|CmsBlock|Cms|Collector|CountryGui|Country|CurrencyGui|Currency|Discount|LocaleGui|Locale|MoneyGui|Money|Oms|Payment|PersistentCart|PriceProductScheduleGui|PriceProductSchedule|PriceProductStorage|PriceProductVolumeGui|PriceProduct|ProductBundle|ProductCartConnector|ProductLabel|ProductManagement|ProductOptionStorage|ProductOption|ProductPageSearch|ProductRelationGui|ProductRelation|ProductWarehouseAllocationExample|Product|ProductsBackendApi|Quote|SalesOrderThreshold|ShipmentGui|ShipmentType|Shipment|ShipmentsRestApi|Stock|StoreContext|StoreGui|StoreStorage|Store|StoresRestApi|TaxApp
     *
     * @return int|null
     */
    public function getIdStore()
    {
        return $this->idStore;
    }

    /**
     * @module Asset|AvailabilityGui|AvailabilityNotification|Availability|CartsRestApi|CategoryGui|CategoryStorage|Category|CheckoutRestApi|CmsBlock|Cms|Collector|CountryGui|Country|CurrencyGui|Currency|Discount|LocaleGui|Locale|MoneyGui|Money|Oms|Payment|PersistentCart|PriceProductScheduleGui|PriceProductSchedule|PriceProductStorage|PriceProductVolumeGui|PriceProduct|ProductBundle|ProductCartConnector|ProductLabel|ProductManagement|ProductOptionStorage|ProductOption|ProductPageSearch|ProductRelationGui|ProductRelation|ProductWarehouseAllocationExample|Product|ProductsBackendApi|Quote|SalesOrderThreshold|ShipmentGui|ShipmentType|Shipment|ShipmentsRestApi|Stock|StoreContext|StoreGui|StoreStorage|Store|StoresRestApi|TaxApp
     *
     * @param int|null $idStore
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
     * @module Asset|AvailabilityGui|AvailabilityNotification|Availability|CartsRestApi|CategoryGui|CategoryStorage|Category|CheckoutRestApi|CmsBlock|Cms|Collector|CountryGui|Country|CurrencyGui|Currency|Discount|LocaleGui|Locale|MoneyGui|Money|Oms|Payment|PersistentCart|PriceProductScheduleGui|PriceProductSchedule|PriceProductStorage|PriceProductVolumeGui|PriceProduct|ProductBundle|ProductCartConnector|ProductLabel|ProductManagement|ProductOptionStorage|ProductOption|ProductPageSearch|ProductRelationGui|ProductRelation|ProductWarehouseAllocationExample|Product|ProductsBackendApi|Quote|SalesOrderThreshold|ShipmentGui|ShipmentType|Shipment|ShipmentsRestApi|Stock|StoreContext|StoreGui|StoreStorage|Store|StoresRestApi|TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdStoreOrFail()
    {
        if ($this->idStore === null) {
            $this->throwNullValueException(static::ID_STORE);
        }

        return $this->idStore;
    }

    /**
     * @module Asset|AvailabilityGui|AvailabilityNotification|Availability|CartsRestApi|CategoryGui|CategoryStorage|Category|CheckoutRestApi|CmsBlock|Cms|Collector|CountryGui|Country|CurrencyGui|Currency|Discount|LocaleGui|Locale|MoneyGui|Money|Oms|Payment|PersistentCart|PriceProductScheduleGui|PriceProductSchedule|PriceProductStorage|PriceProductVolumeGui|PriceProduct|ProductBundle|ProductCartConnector|ProductLabel|ProductManagement|ProductOptionStorage|ProductOption|ProductPageSearch|ProductRelationGui|ProductRelation|ProductWarehouseAllocationExample|Product|ProductsBackendApi|Quote|SalesOrderThreshold|ShipmentGui|ShipmentType|Shipment|ShipmentsRestApi|Stock|StoreContext|StoreGui|StoreStorage|Store|StoresRestApi|TaxApp
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
     * @module Availability|CmsBlockStorage|CmsStorage|Oms|ProductBundle|Stock|StoreStorage|Store|UrlStorage
     *
     * @deprecated Will be empty after dynamic store enablement
     *
     * @param array|null $storesWithSharedPersistence
     *
     * @return $this
     */
    public function setStoresWithSharedPersistence(array $storesWithSharedPersistence = null)
    {
        if ($storesWithSharedPersistence === null) {
            $storesWithSharedPersistence = [];
        }

        $this->storesWithSharedPersistence = $storesWithSharedPersistence;
        $this->modifiedProperties[self::STORES_WITH_SHARED_PERSISTENCE] = true;

        return $this;
    }

    /**
     * @module Availability|CmsBlockStorage|CmsStorage|Oms|ProductBundle|Stock|StoreStorage|Store|UrlStorage
     *
     * @deprecated Will be empty after dynamic store enablement
     *
     * @return array
     */
    public function getStoresWithSharedPersistence()
    {
        return $this->storesWithSharedPersistence;
    }

    /**
     * @module Availability|CmsBlockStorage|CmsStorage|Oms|ProductBundle|Stock|StoreStorage|Store|UrlStorage
     *
     * @deprecated Will be empty after dynamic store enablement
     *
     * @param mixed $storeWithSharedPersistence
     *
     * @return $this
     */
    public function addStoreWithSharedPersistence($storeWithSharedPersistence)
    {
        $this->storesWithSharedPersistence[] = $storeWithSharedPersistence;
        $this->modifiedProperties[self::STORES_WITH_SHARED_PERSISTENCE] = true;

        return $this;
    }

    /**
     * @module Availability|CmsBlockStorage|CmsStorage|Oms|ProductBundle|Stock|StoreStorage|Store|UrlStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @deprecated Will be empty after dynamic store enablement
     *
     * @return $this
     */
    public function requireStoresWithSharedPersistence()
    {
        $this->assertPropertyIsSet(self::STORES_WITH_SHARED_PERSISTENCE);

        return $this;
    }

    /**
     * @module CartsRestApi|ConfigurableBundleCartsRestApi|CurrencyGui|Currency|Money|PriceProduct|StoreStorage|Store|StoresRestApi
     *
     * @param string|null $defaultCurrencyIsoCode
     *
     * @return $this
     */
    public function setDefaultCurrencyIsoCode($defaultCurrencyIsoCode)
    {
        $this->defaultCurrencyIsoCode = $defaultCurrencyIsoCode;
        $this->modifiedProperties[self::DEFAULT_CURRENCY_ISO_CODE] = true;

        return $this;
    }

    /**
     * @module CartsRestApi|ConfigurableBundleCartsRestApi|CurrencyGui|Currency|Money|PriceProduct|StoreStorage|Store|StoresRestApi
     *
     * @return string|null
     */
    public function getDefaultCurrencyIsoCode()
    {
        return $this->defaultCurrencyIsoCode;
    }

    /**
     * @module CartsRestApi|ConfigurableBundleCartsRestApi|CurrencyGui|Currency|Money|PriceProduct|StoreStorage|Store|StoresRestApi
     *
     * @param string|null $defaultCurrencyIsoCode
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDefaultCurrencyIsoCodeOrFail($defaultCurrencyIsoCode)
    {
        if ($defaultCurrencyIsoCode === null) {
            $this->throwNullValueException(static::DEFAULT_CURRENCY_ISO_CODE);
        }

        return $this->setDefaultCurrencyIsoCode($defaultCurrencyIsoCode);
    }

    /**
     * @module CartsRestApi|ConfigurableBundleCartsRestApi|CurrencyGui|Currency|Money|PriceProduct|StoreStorage|Store|StoresRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getDefaultCurrencyIsoCodeOrFail()
    {
        if ($this->defaultCurrencyIsoCode === null) {
            $this->throwNullValueException(static::DEFAULT_CURRENCY_ISO_CODE);
        }

        return $this->defaultCurrencyIsoCode;
    }

    /**
     * @module CartsRestApi|ConfigurableBundleCartsRestApi|CurrencyGui|Currency|Money|PriceProduct|StoreStorage|Store|StoresRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDefaultCurrencyIsoCode()
    {
        $this->assertPropertyIsSet(self::DEFAULT_CURRENCY_ISO_CODE);

        return $this;
    }

    /**
     * @module CategoryPageSearch|CategoryStorage|CmsBlockStorage|CmsStorage|Collector|ContentStorage|DataImport|GlueApplication|GlueBackendApiApplication|GlueStorefrontApiApplication|LocaleGui|Locale|NavigationStorage|ProductCategoryStorage|ProductLabelStorage|ProductPageSearch|ProductStorage|RabbitMq|SalesOrderThreshold|StoreStorage|Store|StoresRestApi|UrlStorage
     *
     * @param array|null $availableLocaleIsoCodes
     *
     * @return $this
     */
    public function setAvailableLocaleIsoCodes(array $availableLocaleIsoCodes = null)
    {
        if ($availableLocaleIsoCodes === null) {
            $availableLocaleIsoCodes = [];
        }

        $this->availableLocaleIsoCodes = $availableLocaleIsoCodes;
        $this->modifiedProperties[self::AVAILABLE_LOCALE_ISO_CODES] = true;

        return $this;
    }

    /**
     * @module CategoryPageSearch|CategoryStorage|CmsBlockStorage|CmsStorage|Collector|ContentStorage|DataImport|GlueApplication|GlueBackendApiApplication|GlueStorefrontApiApplication|LocaleGui|Locale|NavigationStorage|ProductCategoryStorage|ProductLabelStorage|ProductPageSearch|ProductStorage|RabbitMq|SalesOrderThreshold|StoreStorage|Store|StoresRestApi|UrlStorage
     *
     * @return array
     */
    public function getAvailableLocaleIsoCodes()
    {
        return $this->availableLocaleIsoCodes;
    }

    /**
     * @module CategoryPageSearch|CategoryStorage|CmsBlockStorage|CmsStorage|Collector|ContentStorage|DataImport|GlueApplication|GlueBackendApiApplication|GlueStorefrontApiApplication|LocaleGui|Locale|NavigationStorage|ProductCategoryStorage|ProductLabelStorage|ProductPageSearch|ProductStorage|RabbitMq|SalesOrderThreshold|StoreStorage|Store|StoresRestApi|UrlStorage
     *
     * @param mixed $availableLocaleCode
     *
     * @return $this
     */
    public function addAvailableLocaleCode($availableLocaleCode)
    {
        $this->availableLocaleIsoCodes[] = $availableLocaleCode;
        $this->modifiedProperties[self::AVAILABLE_LOCALE_ISO_CODES] = true;

        return $this;
    }

    /**
     * @module CategoryPageSearch|CategoryStorage|CmsBlockStorage|CmsStorage|Collector|ContentStorage|DataImport|GlueApplication|GlueBackendApiApplication|GlueStorefrontApiApplication|LocaleGui|Locale|NavigationStorage|ProductCategoryStorage|ProductLabelStorage|ProductPageSearch|ProductStorage|RabbitMq|SalesOrderThreshold|StoreStorage|Store|StoresRestApi|UrlStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAvailableLocaleIsoCodes()
    {
        $this->assertPropertyIsSet(self::AVAILABLE_LOCALE_ISO_CODES);

        return $this;
    }

    /**
     * @module ContentStorage|CurrencyGui|Currency|PriceProduct|ProductPricesRestApi|SalesOrderThresholdGui|StoreStorage|Store|StoresRestApi
     *
     * @param array|null $availableCurrencyIsoCodes
     *
     * @return $this
     */
    public function setAvailableCurrencyIsoCodes(array $availableCurrencyIsoCodes = null)
    {
        if ($availableCurrencyIsoCodes === null) {
            $availableCurrencyIsoCodes = [];
        }

        $this->availableCurrencyIsoCodes = $availableCurrencyIsoCodes;
        $this->modifiedProperties[self::AVAILABLE_CURRENCY_ISO_CODES] = true;

        return $this;
    }

    /**
     * @module ContentStorage|CurrencyGui|Currency|PriceProduct|ProductPricesRestApi|SalesOrderThresholdGui|StoreStorage|Store|StoresRestApi
     *
     * @return array
     */
    public function getAvailableCurrencyIsoCodes()
    {
        return $this->availableCurrencyIsoCodes;
    }

    /**
     * @module ContentStorage|CurrencyGui|Currency|PriceProduct|ProductPricesRestApi|SalesOrderThresholdGui|StoreStorage|Store|StoresRestApi
     *
     * @param mixed $availableCurrencyIsoCode
     *
     * @return $this
     */
    public function addAvailableCurrencyIsoCode($availableCurrencyIsoCode)
    {
        $this->availableCurrencyIsoCodes[] = $availableCurrencyIsoCode;
        $this->modifiedProperties[self::AVAILABLE_CURRENCY_ISO_CODES] = true;

        return $this;
    }

    /**
     * @module ContentStorage|CurrencyGui|Currency|PriceProduct|ProductPricesRestApi|SalesOrderThresholdGui|StoreStorage|Store|StoresRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAvailableCurrencyIsoCodes()
    {
        $this->assertPropertyIsSet(self::AVAILABLE_CURRENCY_ISO_CODES);

        return $this;
    }

    /**
     * @module CountryGui|Country|StoreStorage
     *
     * @param string[]|null $countryNames
     *
     * @return $this
     */
    public function setCountryNames(array $countryNames = null)
    {
        if ($countryNames === null) {
            $countryNames = [];
        }

        $this->countryNames = $countryNames;
        $this->modifiedProperties[self::COUNTRY_NAMES] = true;

        return $this;
    }

    /**
     * @module CountryGui|Country|StoreStorage
     *
     * @return string[]
     */
    public function getCountryNames()
    {
        return $this->countryNames;
    }

    /**
     * @module CountryGui|Country|StoreStorage
     *
     * @param string $countryName
     *
     * @return $this
     */
    public function addCountryName($countryName)
    {
        $this->countryNames[] = $countryName;
        $this->modifiedProperties[self::COUNTRY_NAMES] = true;

        return $this;
    }

    /**
     * @module CountryGui|Country|StoreStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCountryNames()
    {
        $this->assertPropertyIsSet(self::COUNTRY_NAMES);

        return $this;
    }

    /**
     * @module Currency|Shipment|Store
     *
     * @param string|null $selectedCurrencyIsoCode
     *
     * @return $this
     */
    public function setSelectedCurrencyIsoCode($selectedCurrencyIsoCode)
    {
        $this->selectedCurrencyIsoCode = $selectedCurrencyIsoCode;
        $this->modifiedProperties[self::SELECTED_CURRENCY_ISO_CODE] = true;

        return $this;
    }

    /**
     * @module Currency|Shipment|Store
     *
     * @return string|null
     */
    public function getSelectedCurrencyIsoCode()
    {
        return $this->selectedCurrencyIsoCode;
    }

    /**
     * @module Currency|Shipment|Store
     *
     * @param string|null $selectedCurrencyIsoCode
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSelectedCurrencyIsoCodeOrFail($selectedCurrencyIsoCode)
    {
        if ($selectedCurrencyIsoCode === null) {
            $this->throwNullValueException(static::SELECTED_CURRENCY_ISO_CODE);
        }

        return $this->setSelectedCurrencyIsoCode($selectedCurrencyIsoCode);
    }

    /**
     * @module Currency|Shipment|Store
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getSelectedCurrencyIsoCodeOrFail()
    {
        if ($this->selectedCurrencyIsoCode === null) {
            $this->throwNullValueException(static::SELECTED_CURRENCY_ISO_CODE);
        }

        return $this->selectedCurrencyIsoCode;
    }

    /**
     * @module Currency|Shipment|Store
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSelectedCurrencyIsoCode()
    {
        $this->assertPropertyIsSet(self::SELECTED_CURRENCY_ISO_CODE);

        return $this;
    }

    /**
     * @module GlueApplication|LocaleGui|Locale|StoreStorage|Store|UserLocale
     *
     * @param string|null $defaultLocaleIsoCode
     *
     * @return $this
     */
    public function setDefaultLocaleIsoCode($defaultLocaleIsoCode)
    {
        $this->defaultLocaleIsoCode = $defaultLocaleIsoCode;
        $this->modifiedProperties[self::DEFAULT_LOCALE_ISO_CODE] = true;

        return $this;
    }

    /**
     * @module GlueApplication|LocaleGui|Locale|StoreStorage|Store|UserLocale
     *
     * @return string|null
     */
    public function getDefaultLocaleIsoCode()
    {
        return $this->defaultLocaleIsoCode;
    }

    /**
     * @module GlueApplication|LocaleGui|Locale|StoreStorage|Store|UserLocale
     *
     * @param string|null $defaultLocaleIsoCode
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDefaultLocaleIsoCodeOrFail($defaultLocaleIsoCode)
    {
        if ($defaultLocaleIsoCode === null) {
            $this->throwNullValueException(static::DEFAULT_LOCALE_ISO_CODE);
        }

        return $this->setDefaultLocaleIsoCode($defaultLocaleIsoCode);
    }

    /**
     * @module GlueApplication|LocaleGui|Locale|StoreStorage|Store|UserLocale
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getDefaultLocaleIsoCodeOrFail()
    {
        if ($this->defaultLocaleIsoCode === null) {
            $this->throwNullValueException(static::DEFAULT_LOCALE_ISO_CODE);
        }

        return $this->defaultLocaleIsoCode;
    }

    /**
     * @module GlueApplication|LocaleGui|Locale|StoreStorage|Store|UserLocale
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDefaultLocaleIsoCode()
    {
        $this->assertPropertyIsSet(self::DEFAULT_LOCALE_ISO_CODE);

        return $this;
    }

    /**
     * @module PriceProductScheduleGui|StoreContextStorage|Store|StoresRestApi
     *
     * @param string|null $timezone
     *
     * @return $this
     */
    public function setTimezone($timezone)
    {
        $this->timezone = $timezone;
        $this->modifiedProperties[self::TIMEZONE] = true;

        return $this;
    }

    /**
     * @module PriceProductScheduleGui|StoreContextStorage|Store|StoresRestApi
     *
     * @return string|null
     */
    public function getTimezone()
    {
        return $this->timezone;
    }

    /**
     * @module PriceProductScheduleGui|StoreContextStorage|Store|StoresRestApi
     *
     * @param string|null $timezone
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTimezoneOrFail($timezone)
    {
        if ($timezone === null) {
            $this->throwNullValueException(static::TIMEZONE);
        }

        return $this->setTimezone($timezone);
    }

    /**
     * @module PriceProductScheduleGui|StoreContextStorage|Store|StoresRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getTimezoneOrFail()
    {
        if ($this->timezone === null) {
            $this->throwNullValueException(static::TIMEZONE);
        }

        return $this->timezone;
    }

    /**
     * @module PriceProductScheduleGui|StoreContextStorage|Store|StoresRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTimezone()
    {
        $this->assertPropertyIsSet(self::TIMEZONE);

        return $this;
    }

    /**
     * @module RabbitMq|Store
     *
     * @deprecated Will be empty after dynamic store enablement
     *
     * @param array|null $queuePools
     *
     * @return $this
     */
    public function setQueuePools(array $queuePools = null)
    {
        if ($queuePools === null) {
            $queuePools = [];
        }

        $this->queuePools = $queuePools;
        $this->modifiedProperties[self::QUEUE_POOLS] = true;

        return $this;
    }

    /**
     * @module RabbitMq|Store
     *
     * @deprecated Will be empty after dynamic store enablement
     *
     * @return array
     */
    public function getQueuePools()
    {
        return $this->queuePools;
    }

    /**
     * @module RabbitMq|Store
     *
     * @deprecated Will be empty after dynamic store enablement
     *
     * @param mixed $queuePools
     *
     * @return $this
     */
    public function addQueuePools($queuePools)
    {
        $this->queuePools[] = $queuePools;
        $this->modifiedProperties[self::QUEUE_POOLS] = true;

        return $this;
    }

    /**
     * @module RabbitMq|Store
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @deprecated Will be empty after dynamic store enablement
     *
     * @return $this
     */
    public function requireQueuePools()
    {
        $this->assertPropertyIsSet(self::QUEUE_POOLS);

        return $this;
    }

    /**
     * @module StoreContextGui|StoreContextStorage|StoreContext
     *
     * @param \Generated\Shared\Transfer\StoreApplicationContextCollectionTransfer|null $applicationContextCollection
     *
     * @return $this
     */
    public function setApplicationContextCollection(?StoreApplicationContextCollectionTransfer $applicationContextCollection = null)
    {
        $this->applicationContextCollection = $applicationContextCollection;
        $this->modifiedProperties[self::APPLICATION_CONTEXT_COLLECTION] = true;

        return $this;
    }

    /**
     * @module StoreContextGui|StoreContextStorage|StoreContext
     *
     * @return \Generated\Shared\Transfer\StoreApplicationContextCollectionTransfer|null
     */
    public function getApplicationContextCollection(): ?StoreApplicationContextCollectionTransfer
    {
        return $this->applicationContextCollection;
    }

    /**
     * @module StoreContextGui|StoreContextStorage|StoreContext
     *
     * @param \Generated\Shared\Transfer\StoreApplicationContextCollectionTransfer $applicationContextCollection
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setApplicationContextCollectionOrFail(StoreApplicationContextCollectionTransfer $applicationContextCollection)
    {
        return $this->setApplicationContextCollection($applicationContextCollection);
    }

    /**
     * @module StoreContextGui|StoreContextStorage|StoreContext
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\StoreApplicationContextCollectionTransfer
     */
    public function getApplicationContextCollectionOrFail(): StoreApplicationContextCollectionTransfer
    {
        if ($this->applicationContextCollection === null) {
            $this->throwNullValueException(static::APPLICATION_CONTEXT_COLLECTION);
        }

        return $this->applicationContextCollection;
    }

    /**
     * @module StoreContextGui|StoreContextStorage|StoreContext
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireApplicationContextCollection()
    {
        $this->assertPropertyIsSet(self::APPLICATION_CONTEXT_COLLECTION);

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
                case 'countries':
                case 'storeReference':
                case 'idStore':
                case 'storesWithSharedPersistence':
                case 'defaultCurrencyIsoCode':
                case 'availableLocaleIsoCodes':
                case 'availableCurrencyIsoCodes':
                case 'countryNames':
                case 'selectedCurrencyIsoCode':
                case 'defaultLocaleIsoCode':
                case 'timezone':
                case 'queuePools':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'applicationContextCollection':
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
                case 'name':
                case 'countries':
                case 'storeReference':
                case 'idStore':
                case 'storesWithSharedPersistence':
                case 'defaultCurrencyIsoCode':
                case 'availableLocaleIsoCodes':
                case 'availableCurrencyIsoCodes':
                case 'countryNames':
                case 'selectedCurrencyIsoCode':
                case 'defaultLocaleIsoCode':
                case 'timezone':
                case 'queuePools':
                    $values[$arrayKey] = $value;

                    break;
                case 'applicationContextCollection':
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
                case 'name':
                case 'countries':
                case 'storeReference':
                case 'idStore':
                case 'storesWithSharedPersistence':
                case 'defaultCurrencyIsoCode':
                case 'availableLocaleIsoCodes':
                case 'availableCurrencyIsoCodes':
                case 'countryNames':
                case 'selectedCurrencyIsoCode':
                case 'defaultLocaleIsoCode':
                case 'timezone':
                case 'queuePools':
                    $values[$arrayKey] = $value;

                    break;
                case 'applicationContextCollection':
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
            'name' => $this->name,
            'countries' => $this->countries,
            'storeReference' => $this->storeReference,
            'idStore' => $this->idStore,
            'storesWithSharedPersistence' => $this->storesWithSharedPersistence,
            'defaultCurrencyIsoCode' => $this->defaultCurrencyIsoCode,
            'availableLocaleIsoCodes' => $this->availableLocaleIsoCodes,
            'availableCurrencyIsoCodes' => $this->availableCurrencyIsoCodes,
            'countryNames' => $this->countryNames,
            'selectedCurrencyIsoCode' => $this->selectedCurrencyIsoCode,
            'defaultLocaleIsoCode' => $this->defaultLocaleIsoCode,
            'timezone' => $this->timezone,
            'queuePools' => $this->queuePools,
            'applicationContextCollection' => $this->applicationContextCollection,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'name' => $this->name,
            'countries' => $this->countries,
            'store_reference' => $this->storeReference,
            'id_store' => $this->idStore,
            'stores_with_shared_persistence' => $this->storesWithSharedPersistence,
            'default_currency_iso_code' => $this->defaultCurrencyIsoCode,
            'available_locale_iso_codes' => $this->availableLocaleIsoCodes,
            'available_currency_iso_codes' => $this->availableCurrencyIsoCodes,
            'country_names' => $this->countryNames,
            'selected_currency_iso_code' => $this->selectedCurrencyIsoCode,
            'default_locale_iso_code' => $this->defaultLocaleIsoCode,
            'timezone' => $this->timezone,
            'queue_pools' => $this->queuePools,
            'application_context_collection' => $this->applicationContextCollection,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'countries' => $this->countries instanceof AbstractTransfer ? $this->countries->toArray(true, false) : $this->countries,
            'store_reference' => $this->storeReference instanceof AbstractTransfer ? $this->storeReference->toArray(true, false) : $this->storeReference,
            'id_store' => $this->idStore instanceof AbstractTransfer ? $this->idStore->toArray(true, false) : $this->idStore,
            'stores_with_shared_persistence' => $this->storesWithSharedPersistence instanceof AbstractTransfer ? $this->storesWithSharedPersistence->toArray(true, false) : $this->storesWithSharedPersistence,
            'default_currency_iso_code' => $this->defaultCurrencyIsoCode instanceof AbstractTransfer ? $this->defaultCurrencyIsoCode->toArray(true, false) : $this->defaultCurrencyIsoCode,
            'available_locale_iso_codes' => $this->availableLocaleIsoCodes instanceof AbstractTransfer ? $this->availableLocaleIsoCodes->toArray(true, false) : $this->availableLocaleIsoCodes,
            'available_currency_iso_codes' => $this->availableCurrencyIsoCodes instanceof AbstractTransfer ? $this->availableCurrencyIsoCodes->toArray(true, false) : $this->availableCurrencyIsoCodes,
            'country_names' => $this->countryNames instanceof AbstractTransfer ? $this->countryNames->toArray(true, false) : $this->countryNames,
            'selected_currency_iso_code' => $this->selectedCurrencyIsoCode instanceof AbstractTransfer ? $this->selectedCurrencyIsoCode->toArray(true, false) : $this->selectedCurrencyIsoCode,
            'default_locale_iso_code' => $this->defaultLocaleIsoCode instanceof AbstractTransfer ? $this->defaultLocaleIsoCode->toArray(true, false) : $this->defaultLocaleIsoCode,
            'timezone' => $this->timezone instanceof AbstractTransfer ? $this->timezone->toArray(true, false) : $this->timezone,
            'queue_pools' => $this->queuePools instanceof AbstractTransfer ? $this->queuePools->toArray(true, false) : $this->queuePools,
            'application_context_collection' => $this->applicationContextCollection instanceof AbstractTransfer ? $this->applicationContextCollection->toArray(true, false) : $this->applicationContextCollection,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'countries' => $this->countries instanceof AbstractTransfer ? $this->countries->toArray(true, true) : $this->countries,
            'storeReference' => $this->storeReference instanceof AbstractTransfer ? $this->storeReference->toArray(true, true) : $this->storeReference,
            'idStore' => $this->idStore instanceof AbstractTransfer ? $this->idStore->toArray(true, true) : $this->idStore,
            'storesWithSharedPersistence' => $this->storesWithSharedPersistence instanceof AbstractTransfer ? $this->storesWithSharedPersistence->toArray(true, true) : $this->storesWithSharedPersistence,
            'defaultCurrencyIsoCode' => $this->defaultCurrencyIsoCode instanceof AbstractTransfer ? $this->defaultCurrencyIsoCode->toArray(true, true) : $this->defaultCurrencyIsoCode,
            'availableLocaleIsoCodes' => $this->availableLocaleIsoCodes instanceof AbstractTransfer ? $this->availableLocaleIsoCodes->toArray(true, true) : $this->availableLocaleIsoCodes,
            'availableCurrencyIsoCodes' => $this->availableCurrencyIsoCodes instanceof AbstractTransfer ? $this->availableCurrencyIsoCodes->toArray(true, true) : $this->availableCurrencyIsoCodes,
            'countryNames' => $this->countryNames instanceof AbstractTransfer ? $this->countryNames->toArray(true, true) : $this->countryNames,
            'selectedCurrencyIsoCode' => $this->selectedCurrencyIsoCode instanceof AbstractTransfer ? $this->selectedCurrencyIsoCode->toArray(true, true) : $this->selectedCurrencyIsoCode,
            'defaultLocaleIsoCode' => $this->defaultLocaleIsoCode instanceof AbstractTransfer ? $this->defaultLocaleIsoCode->toArray(true, true) : $this->defaultLocaleIsoCode,
            'timezone' => $this->timezone instanceof AbstractTransfer ? $this->timezone->toArray(true, true) : $this->timezone,
            'queuePools' => $this->queuePools instanceof AbstractTransfer ? $this->queuePools->toArray(true, true) : $this->queuePools,
            'applicationContextCollection' => $this->applicationContextCollection instanceof AbstractTransfer ? $this->applicationContextCollection->toArray(true, true) : $this->applicationContextCollection,
        ];
    }
}
