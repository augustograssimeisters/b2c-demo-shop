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
class StoreStorageTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const APPLICATION_CONTEXT_COLLECTION = 'applicationContextCollection';

    /**
     * @var string
     */
    public const ID_STORE = 'idStore';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const DEFAULT_LOCALE_ISO_CODE = 'defaultLocaleIsoCode';

    /**
     * @var string
     */
    public const DEFAULT_CURRENCY_ISO_CODE = 'defaultCurrencyIsoCode';

    /**
     * @var string
     */
    public const AVAILABLE_CURRENCY_ISO_CODES = 'availableCurrencyIsoCodes';

    /**
     * @var string
     */
    public const AVAILABLE_LOCALE_ISO_CODES = 'availableLocaleIsoCodes';

    /**
     * @var string
     */
    public const STORES_WITH_SHARED_PERSISTENCE = 'storesWithSharedPersistence';

    /**
     * @var string
     */
    public const COUNTRIES = 'countries';

    /**
     * @var string
     */
    public const COUNTRY_NAMES = 'countryNames';

    /**
     * @var \Generated\Shared\Transfer\StoreApplicationContextCollectionTransfer|null
     */
    protected $applicationContextCollection;

    /**
     * @var int|null
     */
    protected $idStore;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $defaultLocaleIsoCode;

    /**
     * @var string|null
     */
    protected $defaultCurrencyIsoCode;

    /**
     * @var array
     */
    protected $availableCurrencyIsoCodes = [];

    /**
     * @var array
     */
    protected $availableLocaleIsoCodes = [];

    /**
     * @var array
     */
    protected $storesWithSharedPersistence = [];

    /**
     * @var array
     */
    protected $countries = [];

    /**
     * @var string[]
     */
    protected $countryNames = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'application_context_collection' => 'applicationContextCollection',
        'applicationContextCollection' => 'applicationContextCollection',
        'ApplicationContextCollection' => 'applicationContextCollection',
        'id_store' => 'idStore',
        'idStore' => 'idStore',
        'IdStore' => 'idStore',
        'name' => 'name',
        'Name' => 'name',
        'default_locale_iso_code' => 'defaultLocaleIsoCode',
        'defaultLocaleIsoCode' => 'defaultLocaleIsoCode',
        'DefaultLocaleIsoCode' => 'defaultLocaleIsoCode',
        'default_currency_iso_code' => 'defaultCurrencyIsoCode',
        'defaultCurrencyIsoCode' => 'defaultCurrencyIsoCode',
        'DefaultCurrencyIsoCode' => 'defaultCurrencyIsoCode',
        'available_currency_iso_codes' => 'availableCurrencyIsoCodes',
        'availableCurrencyIsoCodes' => 'availableCurrencyIsoCodes',
        'AvailableCurrencyIsoCodes' => 'availableCurrencyIsoCodes',
        'available_locale_iso_codes' => 'availableLocaleIsoCodes',
        'availableLocaleIsoCodes' => 'availableLocaleIsoCodes',
        'AvailableLocaleIsoCodes' => 'availableLocaleIsoCodes',
        'stores_with_shared_persistence' => 'storesWithSharedPersistence',
        'storesWithSharedPersistence' => 'storesWithSharedPersistence',
        'StoresWithSharedPersistence' => 'storesWithSharedPersistence',
        'countries' => 'countries',
        'Countries' => 'countries',
        'country_names' => 'countryNames',
        'countryNames' => 'countryNames',
        'CountryNames' => 'countryNames',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
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
    ];

    /**
     * @module StoreContext
     *
     * @param \Generated\Shared\Transfer\StoreApplicationContextCollectionTransfer|null $applicationContextCollection
     *
     * @return $this
     */
    public function setApplicationContextCollection(StoreApplicationContextCollectionTransfer $applicationContextCollection = null)
    {
        $this->applicationContextCollection = $applicationContextCollection;
        $this->modifiedProperties[self::APPLICATION_CONTEXT_COLLECTION] = true;

        return $this;
    }

    /**
     * @module StoreContext
     *
     * @return \Generated\Shared\Transfer\StoreApplicationContextCollectionTransfer|null
     */
    public function getApplicationContextCollection()
    {
        return $this->applicationContextCollection;
    }

    /**
     * @module StoreContext
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
     * @module StoreContext
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\StoreApplicationContextCollectionTransfer
     */
    public function getApplicationContextCollectionOrFail()
    {
        if ($this->applicationContextCollection === null) {
            $this->throwNullValueException(static::APPLICATION_CONTEXT_COLLECTION);
        }

        return $this->applicationContextCollection;
    }

    /**
     * @module StoreContext
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
     * @module StoreStorage
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
     * @module StoreStorage
     *
     * @return int|null
     */
    public function getIdStore()
    {
        return $this->idStore;
    }

    /**
     * @module StoreStorage
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
     * @module StoreStorage
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
     * @module StoreStorage
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
     * @module StoreStorage|StoresApi
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
     * @module StoreStorage|StoresApi
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module StoreStorage|StoresApi
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
     * @module StoreStorage|StoresApi
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
     * @module StoreStorage|StoresApi
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
     * @module StoreStorage|StoresApi
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
     * @module StoreStorage|StoresApi
     *
     * @return string|null
     */
    public function getDefaultLocaleIsoCode()
    {
        return $this->defaultLocaleIsoCode;
    }

    /**
     * @module StoreStorage|StoresApi
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
     * @module StoreStorage|StoresApi
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
     * @module StoreStorage|StoresApi
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
     * @module StoreStorage|StoresApi
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
     * @module StoreStorage|StoresApi
     *
     * @return string|null
     */
    public function getDefaultCurrencyIsoCode()
    {
        return $this->defaultCurrencyIsoCode;
    }

    /**
     * @module StoreStorage|StoresApi
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
     * @module StoreStorage|StoresApi
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
     * @module StoreStorage|StoresApi
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
     * @module StoreStorage|StoresApi
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
     * @module StoreStorage|StoresApi
     *
     * @return array
     */
    public function getAvailableCurrencyIsoCodes()
    {
        return $this->availableCurrencyIsoCodes;
    }

    /**
     * @module StoreStorage|StoresApi
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
     * @module StoreStorage|StoresApi
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
     * @module StoreStorage|StoresApi
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
     * @module StoreStorage|StoresApi
     *
     * @return array
     */
    public function getAvailableLocaleIsoCodes()
    {
        return $this->availableLocaleIsoCodes;
    }

    /**
     * @module StoreStorage|StoresApi
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
     * @module StoreStorage|StoresApi
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
     * @module StoreStorage
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
     * @module StoreStorage
     *
     * @return array
     */
    public function getStoresWithSharedPersistence()
    {
        return $this->storesWithSharedPersistence;
    }

    /**
     * @module StoreStorage
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
     * @module StoreStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStoresWithSharedPersistence()
    {
        $this->assertPropertyIsSet(self::STORES_WITH_SHARED_PERSISTENCE);

        return $this;
    }

    /**
     * @module StoreStorage|StoresApi
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
     * @module StoreStorage|StoresApi
     *
     * @return array
     */
    public function getCountries()
    {
        return $this->countries;
    }

    /**
     * @module StoreStorage|StoresApi
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
     * @module StoreStorage|StoresApi
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
     * @module StoreStorage
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
     * @module StoreStorage
     *
     * @return string[]
     */
    public function getCountryNames()
    {
        return $this->countryNames;
    }

    /**
     * @module StoreStorage
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
     * @module StoreStorage
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
                case 'name':
                case 'defaultLocaleIsoCode':
                case 'defaultCurrencyIsoCode':
                case 'availableCurrencyIsoCodes':
                case 'availableLocaleIsoCodes':
                case 'storesWithSharedPersistence':
                case 'countries':
                case 'countryNames':
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
                case 'idStore':
                case 'name':
                case 'defaultLocaleIsoCode':
                case 'defaultCurrencyIsoCode':
                case 'availableCurrencyIsoCodes':
                case 'availableLocaleIsoCodes':
                case 'storesWithSharedPersistence':
                case 'countries':
                case 'countryNames':
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
                case 'idStore':
                case 'name':
                case 'defaultLocaleIsoCode':
                case 'defaultCurrencyIsoCode':
                case 'availableCurrencyIsoCodes':
                case 'availableLocaleIsoCodes':
                case 'storesWithSharedPersistence':
                case 'countries':
                case 'countryNames':
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
            'idStore' => $this->idStore,
            'name' => $this->name,
            'defaultLocaleIsoCode' => $this->defaultLocaleIsoCode,
            'defaultCurrencyIsoCode' => $this->defaultCurrencyIsoCode,
            'availableCurrencyIsoCodes' => $this->availableCurrencyIsoCodes,
            'availableLocaleIsoCodes' => $this->availableLocaleIsoCodes,
            'storesWithSharedPersistence' => $this->storesWithSharedPersistence,
            'countries' => $this->countries,
            'countryNames' => $this->countryNames,
            'applicationContextCollection' => $this->applicationContextCollection,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_store' => $this->idStore,
            'name' => $this->name,
            'default_locale_iso_code' => $this->defaultLocaleIsoCode,
            'default_currency_iso_code' => $this->defaultCurrencyIsoCode,
            'available_currency_iso_codes' => $this->availableCurrencyIsoCodes,
            'available_locale_iso_codes' => $this->availableLocaleIsoCodes,
            'stores_with_shared_persistence' => $this->storesWithSharedPersistence,
            'countries' => $this->countries,
            'country_names' => $this->countryNames,
            'application_context_collection' => $this->applicationContextCollection,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_store' => $this->idStore instanceof AbstractTransfer ? $this->idStore->toArray(true, false) : $this->idStore,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'default_locale_iso_code' => $this->defaultLocaleIsoCode instanceof AbstractTransfer ? $this->defaultLocaleIsoCode->toArray(true, false) : $this->defaultLocaleIsoCode,
            'default_currency_iso_code' => $this->defaultCurrencyIsoCode instanceof AbstractTransfer ? $this->defaultCurrencyIsoCode->toArray(true, false) : $this->defaultCurrencyIsoCode,
            'available_currency_iso_codes' => $this->availableCurrencyIsoCodes instanceof AbstractTransfer ? $this->availableCurrencyIsoCodes->toArray(true, false) : $this->availableCurrencyIsoCodes,
            'available_locale_iso_codes' => $this->availableLocaleIsoCodes instanceof AbstractTransfer ? $this->availableLocaleIsoCodes->toArray(true, false) : $this->availableLocaleIsoCodes,
            'stores_with_shared_persistence' => $this->storesWithSharedPersistence instanceof AbstractTransfer ? $this->storesWithSharedPersistence->toArray(true, false) : $this->storesWithSharedPersistence,
            'countries' => $this->countries instanceof AbstractTransfer ? $this->countries->toArray(true, false) : $this->countries,
            'country_names' => $this->countryNames instanceof AbstractTransfer ? $this->countryNames->toArray(true, false) : $this->countryNames,
            'application_context_collection' => $this->applicationContextCollection instanceof AbstractTransfer ? $this->applicationContextCollection->toArray(true, false) : $this->applicationContextCollection,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idStore' => $this->idStore instanceof AbstractTransfer ? $this->idStore->toArray(true, true) : $this->idStore,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'defaultLocaleIsoCode' => $this->defaultLocaleIsoCode instanceof AbstractTransfer ? $this->defaultLocaleIsoCode->toArray(true, true) : $this->defaultLocaleIsoCode,
            'defaultCurrencyIsoCode' => $this->defaultCurrencyIsoCode instanceof AbstractTransfer ? $this->defaultCurrencyIsoCode->toArray(true, true) : $this->defaultCurrencyIsoCode,
            'availableCurrencyIsoCodes' => $this->availableCurrencyIsoCodes instanceof AbstractTransfer ? $this->availableCurrencyIsoCodes->toArray(true, true) : $this->availableCurrencyIsoCodes,
            'availableLocaleIsoCodes' => $this->availableLocaleIsoCodes instanceof AbstractTransfer ? $this->availableLocaleIsoCodes->toArray(true, true) : $this->availableLocaleIsoCodes,
            'storesWithSharedPersistence' => $this->storesWithSharedPersistence instanceof AbstractTransfer ? $this->storesWithSharedPersistence->toArray(true, true) : $this->storesWithSharedPersistence,
            'countries' => $this->countries instanceof AbstractTransfer ? $this->countries->toArray(true, true) : $this->countries,
            'countryNames' => $this->countryNames instanceof AbstractTransfer ? $this->countryNames->toArray(true, true) : $this->countryNames,
            'applicationContextCollection' => $this->applicationContextCollection instanceof AbstractTransfer ? $this->applicationContextCollection->toArray(true, true) : $this->applicationContextCollection,
        ];
    }
}
